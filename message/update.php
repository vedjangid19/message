<?php 

$javascriptuser ;

// /////////////////////edit id button post request//////////////

if(isset($_POST["readrecord"])){
    $javascriptuser=$_POST["readrecord"];
    exit();
}

// ///////////////////////////fiddler post request///////////////

if(isset($_POST["id"]) && isset($_POST["msg"]))
{
    $deviceid=$_POST["id"];
    $message = $_POST["msg"];
    date_default_timezone_set('Asia/Kolkata');
    $updateTimeStamp = date("d/m/Y h:i:sa");
    $fname = $deviceid.".txt";
    $dircurrent = getcwd();
    // echo gettype($dircurrent)
    $logPath_for_message = "$dircurrent/$fname";
   // $logPath_for_message = __DIR__."/../message/$fname";
	$mode_message_file = 'w';
    $message_file = fopen($fname, $mode_message_file) or die("Unable to open file!");
    $txt = $message . "&date=" . $updateTimeStamp;
    fwrite($message_file, $txt);
    fclose($message_file);
    echo "path: ".$dircurrent;
    echo "Data Successfully Uploaded.\r\n";
    exit();     
}

if(isset($_POST["idread"]))
{
    $deviceid=$_POST["idread"];
    //echo "read : ".$deviceid;
    $fname = $deviceid.".txt";
    $dircurrent = getcwd();
    // echo gettype($dircurrent)
    $logPath_for_message = "$dircurrent/$fname";
	// $logPath_for_message = __DIR__."/../message/$fname";

    if(file_exists($logPath_for_message)){
        $message_file = fopen($fname, 'r') or die("Unable to open file!");     
        echo fread($message_file,filesize($fname));
        fclose($message_file );
    }
    else{
        echo "Device Not Found!!\r\n";
    }
    //echo $data;
    exit();

}

?>