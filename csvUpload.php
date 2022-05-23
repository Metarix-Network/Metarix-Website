<form method="post" enctype="multipart/form-data">
<input type="file" name="csv" value="" />
<input type="submit" name="submit" value="Save" /></form>

<?php
include("config.php");
$csv = array();

// check there are no errors
if($_FILES['csv']['error'] == 0){
    $name = $_FILES['csv']['name'];
    $ext = strtolower(end(explode('.', $_FILES['csv']['name'])));
    $type = $_FILES['csv']['type'];
    $tmpName = $_FILES['csv']['tmp_name'];

    // check the file is a csv
    if($ext === 'csv'){
		mysqli_query($con, "delete from transactionRecords");
        if(($handle = fopen($tmpName, 'r')) !== FALSE) {
            // necessary if a large csv file
            set_time_limit(0);

            $row = 0;

            while(($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                if($row>0){
					// get the values from the csv
					$csv[$row]['col1'] = $data[0];
					$csv[$row]['col2'] = $data[1];
					$csv[$row]['col3'] = $data[2];
					$csv[$row]['col4'] = $data[3];
					$csv[$row]['col5'] = $data[4];
					$csv[$row]['col6'] = $data[5];
					$csv[$row]['col7'] = $data[6];
					$date=date("Y-m-d h:i:s", $data[1]);
					mysqli_query($con, "insert into transactionRecords(bnbTokens, walletAddress, txHash, mtrxPrice, bnbPrice, createdAt, updatedAt) values('$data[4]','$data[3]','$data[0]','$data[6]','$data[5]','$date','$date')");
				}
				// inc the row
				$row++;
            }
            fclose($handle);
        }
    }
	echo "<pre>";
	print_r($csv);
}
?>