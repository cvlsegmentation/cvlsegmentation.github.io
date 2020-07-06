<?php
    ini_set('display_errors', 1);
    $link = mysqli_connect("remi.ee.ethz.ch","biwiproposals","UnCZM.BS","biwiproposals");

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    if (isset($_GET['get_ods_ois']))
    {
    	$im_id=$_GET['get_ods_ois'];
    	$query=mysqli_query($link,"select * from BSDS500_test_ods_ois where ImageID LIKE '{$im_id}'");
    	if($row=mysqli_fetch_assoc($query))
            echo json_encode($row);
    }
    mysqli_close($link);
?>
