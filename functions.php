<?php
/*ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);*/

/****************************************************************************************
 *  					used for get current price of coin
*****************************************************************************************/
include("config.php");
function getBnbPrice(){
	$curl_handle=curl_init();
		
	curl_setopt($curl_handle,CURLOPT_URL,"https://dapi.binance.com/dapi/v1/ticker/price?symbol=BNBUSD_PERP");
	curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
	curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
	$buffer = curl_exec($curl_handle);
  	curl_close($curl_handle);
  	if (empty($buffer)){
		//print "Nothing returned from url.<p>";die;
		//return false;
		$response['status'] = '0';
		return json_encode($response);
  	}
  	else{
		//print $buffer;die;
		//return $buffer;
  		$result = json_decode($buffer);
  		$response['status'] = '0';
  		if(!empty($result[0]))
  		{
  			$response['status'] = '1';
  			$response['price'] = $result[0]->price;
  			$response['symbol'] = $result[0]->symbol;
  			$response['ps'] = $result[0]->ps;
  		}
  		return json_encode($response);
  	}
}

/**************************************************************
 * function used for change pre sale status
 *************************************************************/
if($_REQUEST['type'] == 'change_presale')
{
	$sql=mysqli_query($con, "select * from sale_settings");
	if(mysqli_num_rows($sql) > 0) {
	{
		$res=mysqli_fetch_object($sql);
		$id = $res->id;
		mysqli_query($con, "UPDATE `sale_settings` SET `pre_sale` = '0' WHERE `id` = $id");
		print_r(json_encode(array('status'=>'success')));
	}
	else
	{
		mysqli_query($con, "insert into sale_settings(pre_sale) values('0')");
		print_r(json_encode(array('status'=>'success')));
	}
}

if($_REQUEST['type'] == 'getTokenBalance')
{
	echo getBnbPrice();
}

if($_REQUEST['type'] == 'saveBnbRecords')
{
	$tokens=$_REQUEST['tokens'];
	$address=$_REQUEST['address'];
	$txHash=$_REQUEST['txHash'];
	$mtrxPrice=$_REQUEST['mtrxPrice'];
	$price=json_decode(getBnbPrice())->price;
	mysqli_query($con, "insert into transactionRecords(bnbTokens, walletAddress, txHash, mtrxPrice, bnbPrice) values('$tokens', '$address', '$txHash', '$mtrxPrice', '$price')");
}

if($_REQUEST['type'] == 'getData')
{
	$price=json_decode(getBnbPrice())->price;
	$address=$_REQUEST['address'];
	$qry=mysqli_query($con, "select sum(bnbTokens) as totalBnbTokens from transactionRecords where walletAddress='$address'");
	$res=mysqli_fetch_object($qry);
	$response['status'] = '1';
	$response['currentBnbPrice'] = $price;
	$response['totalBnbTokens'] = ($res->totalBnbTokens*$price)/0.05;
	echo json_encode($response);
}



?>