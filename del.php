
<html>

<head>

<title>Delete Data</title>

</head>



<body>

<?php

//including the database connection file

include_once("config.php");

if(isset($_POST['Submit'])) {
 $eid = mysqli_real_escape_string($mysqli, $_POST['eid']);


// checking empty fields

if(empty($eid)) {



if(empty($eid)) {

echo "<font color='red'>Name field is empty.</font><br/>";

}





//link to the previous page

echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

} else {

//	if all the fields are filled (not empty)



//insert data to database

$result = mysqli_query($mysqli, "delete from user where eid='$eid'");



//display success message

echo "<font color='green'>Data Deleted successfully.";



}

}


?>

</body>

</html>
