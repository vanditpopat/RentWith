<?php 
include 'config.php';

$statusMsg= '';
$backlink = '<a href="img.php">Go back</a>';
$targetDir = 'uploads/';
$filename = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $filename;
$fileType =pathinfo($targetFilePath, PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    //upload process
    $allowTypes = array('jpg','png','PNG','jpeg','gif','pdf');
    if(!file_exists($targetFilePath)){
        if(in_array($fileType, $allowTypes)){
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                $insert = $db->query("INSERT into images(file_name, uploaded_on) VALUES ('".$filename."',NOW())");
                if($insert){
                    $statusMsg ="The file <b>". $filename ."</b>has been uploaded succesfully" .$backlink;
                    header("Location: login.html");
                }
                else{
                    $statusMsg ="File upload failed, please try again" .$backlink;
                }
            } else{
                  $statusMsg = "Sorry there was an error uploading your file." .$backlink;
            }
        } else{
            $statusMsg = "Sorry, only JPG,JPEG,PNG,PDF,GIF files are allowed to upload." .$backlink;
        }
    } else{
        $statusMsg ="The file <b>". $filename ."</b> already exists " . $backlink;
    }
}
else{
    $statusMsg = 'Please select a file to upload,' .$backlink;

}

echo $statusMsg;


?>