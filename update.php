
<html>

<head>

<title>Add Data</title>

</head>



<body>

<?php

//including the database connection file

include_once("config.php");

if(isset($_POST['Submit'])) {
$eid = mysqli_real_escape_string($mysqli, $_POST['eid']);


$email = mysqli_real_escape_string($mysqli, $_POST['email']);









// checking empty fields

if(empty($eid) ||  empty($email)) {



if(empty($eid)) {

echo "<font color='red'>Name field is empty.</font><br/>";

}





if(empty($email)) {

echo "<font color='red'>Email field is empty.</font><br/>";

}



//link to the previous page

echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

} else {

//	if all the fields are filled (not empty)



//insert data to database

$result = mysqli_query($mysqli, "update user set email ='$email' where eid='$eid' ");



//display success message

echo "<font color='green'>Data added successfully.";







}

}

?>

</body>

</html>
