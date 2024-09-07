<?php
include("include/connection.php");

if(isset($_POST['type']))
{
if($_POST['type']=='mobile'){
@$mobile=$_POST['mobile'];

$otp=generateOTP();

$chkuser=mysqli_query($con,"select * from `tbl_user` where `mobile`='".$mobile."'");
$userRow=mysqli_num_rows($chkuser);
if($userRow==0){
  echo "1";
}
else{
    echo "2";
}
}
else{
  echo "1";
}
}
?>
