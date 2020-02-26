
<html>

<head>

<title>Add Data</title>

</head>


<body>

<?php

//including the database connection file

include_once("config.php");


echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";


echo"<table border=1px>
<tr>
<td><b>Eid<b></td>
<td>Name</td>
<td>Age</td>
<td>Email</td>
</tr>";

$query="select * from user";

$result = mysqli_query($mysqli,$query);
   
while($row=mysqli_fetch_array($result))
  { 
  echo"<tr>";
  echo"<td>".$row['eid']."</td>";
  echo"<td>".$row['name']."</td>";
  echo"<td>".$row['age']."</td>";
  echo"<td>".$row['email']."</td>";
echo"</tr>";
  }

echo "</table>";

?>

</body>

</html>
