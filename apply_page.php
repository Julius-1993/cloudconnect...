<?php
//database connection code
//$con =
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "db_apply";

// $con = new mysqli($servername,$username,$password,$dbName);
//connection
$conn = new mysqli($servername,$username, $password,$dbName);
if($conn){
  echo "Connection successful";
}
else{
  echo "fail";
}
// get the post record
$Fname = $_POST['Fname'];
$Mname = $_POST['Mname'];
$Lname = $_POST['Lname'];
$img = $_POST['img'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$course = $_POST['course'];
$Phone_Number = $_POST['Phone_Number'];
$email = $_POST['Email'];
$psw = $_POST['Password'];
$psw_repeat = $_POST['psw_repeat'];
$text = $_POST['text'];

if ( isset($_POST['gender']) ){
  $gender = $_POST['gender'];
  if ( $gender == 'M' ){
      echo 'Male';
  }else if ( $gender == 'F' ){
      echo 'Female';
  }else{
      echo 'Please enter a valid Gender';
  }
}else{
  echo 'Please enter a valid Gender';
}

//database insert SQL code
$sql = "INSERT INTO 'tbl_apply'('Id', 'fldFname', 'fldMname', 'fldLname', 'fldimg', 'fldbirthday',
 'fldgender', 'fldreligion', 'fldcourse', 'fldPhone_Number', 'fldemail', 'fldpassword', 'fldpassword_repeat', 'Fldtext' ) VALUES('0', '$Fname', '$Lname', '$Mname', '$img',
 '$birthday', '$gender', '$religion', '$course', '$Phone_Number', '$email', '$psw', '$psw_repeat', '$text')";

 //insert into database
 $rs = mysqli_query($con, $sql);
 if($rs)
 {
  echo "Application Successful";
 }
?>