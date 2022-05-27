<form method="post">
	<input type="text" name="walletAddress" placeholder="Enter Wallet Address" />
	<input type="submit" name="submit" value="Submit" />
</form>

<?php
include("config.php");
if($_POST){
	$walletAddress=$_POST['walletAddress'];
	$qry=mysqli_query($con, "select * from transactionRecords where walletAddress='".$walletAddress."'");
	$qry1=mysqli_query($con, "select sum(mtrxPrice) as mtrxSum from transactionRecords where walletAddress='".$walletAddress."'");
	$data1=mysqli_fetch_object($qry1);
	$qry2=mysqli_query($con, "select sum(bnbTokens) as bnbSum from transactionRecords where walletAddress='".$walletAddress."'");
	$data2=mysqli_fetch_object($qry2);
	$qry3=mysqli_query($con, "select count(mtrxPrice) as mtrxCount from transactionRecords where walletAddress='".$walletAddress."'");
	$data3=mysqli_fetch_object($qry3);
	?>
	<table border="1">
		<tr>
			<th>Wallet Address</th>
			<td><?php echo $walletAddress; ?></td>
		</tr>
		<tr>
			<th>MTRXTotalAmount</th>
			<td><?php echo $data1->mtrxSum; ?></td>
		</tr>
		<tr>
			<th>BNBTotalAmount</th>
			<td><?php echo $data2->bnbSum; ?></td>
		</tr>
		<tr>
			<th>TransactionCount</th>
			<td><?php echo $data3->mtrxCount; ?></td>
		</tr>
	</table>
	<table width="100%" border="1">
		<tr>
			<th>Sr.No.</th>
			<th>Hash</th>
			<th>Date and Time (CET)</th>
			<th>Date and Time (IST)</th>
			<th>BNBPrice</th>
			<th>BNBTokens</th>
			<th>mtrxToken</th>
			<th>Status</th>
		</tr>
		<?php
		$inc=1;
		while($data=mysqli_fetch_object($qry)){
			date_default_timezone_set('UTC');
			$timestamp = strtotime($data->createdAt);
			?>
			<tr>
				<td><?php echo $inc++; ?></td>
				<td><?php echo $data->txHash; ?></td>
				<td>
					<?php
					date_default_timezone_set('UTC');
					echo date('Y-m-d H:i:s', $timestamp); 
					?>
				</td>
				<td>
					<?php
					date_default_timezone_set('Asia/Kolkata');
					echo date('Y-m-d H:i:s', $timestamp); 
					?>
				</td>
				<!--<td><?php echo $data->createdAt; ?></td>
				<td><?php echo $date; ?></td>-->
				<td><?php echo ($data->bnbPrice==0)?"--":$data->bnbPrice; ?></td>
				<td><?php echo $data->bnbTokens; ?></td>
				<td><?php echo ($data->mtrxPrice==0)?"--":$data->mtrxPrice; ?></td>
				<td><?php echo ($data->bnbPrice==0)?"Pending":"Approved"; ?></td>
			</tr>
		<?php } ?>
	</table>
	<?php
}
?>