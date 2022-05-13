<?php
/*ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);*/

/****************************************************************************************
 *  					used for get current price of coin
*****************************************************************************************/
if($_REQUEST['type'] == 'getTokenBalance')
{
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
  	   echo json_encode($response);
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
  		echo json_encode($response);
  	}
}

?>