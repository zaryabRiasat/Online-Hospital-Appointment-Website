<html>
<head>
<title>Data Of DB</title>
</head>
<style>
body
{
    background-color:ccccff;
}
table
{
    margin-top:50px;
    margin-left:50px;
    width:800px;
    font-family:Times New Roman;
    font-size:24px;
    font-style:italic;
    text-align:center;
    color:000066;
}
table, th, td
{
    border:5px solid blue;
    padding:20px;
}
th
{
    background-color:66cccc;
}
td
{
    background-color:ccffff;
}

</style>
<body>
<table id="tab">
<tr>
<th>Appointment_ID</th>
<th>F_Name</th>
<th>L_Name</th>
<th>Email</th>
<th>Phone_No</th>
<th>Gender</th>
<th>Doctor_Name</th>
<th>Appointment_Date</th>
</tr>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "project";


$conn = new mysqli($servername,$username,$password,$db_name);

if($conn -> connect_error)
{
	die("connection failed" . $connect_error);
}

echo "connection successful <br><br>";



$sql = "select Appointment_ID, F_Name, L_Name, Email, Phone_No, Gender, Doctor_Name, Appointment_Date from appointment_data ";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<tr><td> " . $row["Appointment_ID"] . "</td><td> " . $row["F_Name"] . "</td><td> " . $row["L_Name"] . "</td><td> " . $row["Email"]. "</td><td> " . $row["Phone_No"] . "</td><td> " . $row["Gender"] . "</td><td> " . $row["Doctor_Name"] . "</td><td> " . $row["Appointment_Date"] . "</td></tr>";
	}
}

else
{
	echo "No Data";
}

$conn->close();
?>
</table>
</body>
</html>