<?php

class db
{
	public $servername;
    public $username;
    public $password;
    public $db_name;

	public function connect()
{
	$this->servername="localhost";
	$this->username="root";
	$this->password="";
	$this->db_name="project";
	
	$conn = new mysqli($this->servername,$this->username,$this->password,$this->db_name);

if($conn -> connect_error)
{
	die("connection failed" . $connect_error);
}

echo "connection successful <br><br>";
return $conn;
}

	function insert($a,$b,$c,$d,$e,$f,$g)
	{
		$conn=$this->connect();
		$res=mysqli_query($conn,"insert into appointment_data(F_Name, L_Name, Email, Phone_No, Gender, Doctor_Name, Appointment_Date)
		values ('$a','$b','$c','$d','$e','$f','$g')");
		return $res;
	
    }
}
?>

<?php
$con = new db();
$con->connect();
if(isset($_POST['submit']))
{
$F_Name = $_POST['fname'];
$L_Name = $_POST['lname'];
$Email = $_POST['mail'];
$Phone_No = $_POST['num'];
$Gender = $_POST['gender'];
$D_Name = $_POST['dname'];
$App_Date = $_POST['date'];
$con->insert($F_Name,$L_Name,$Email,$Phone_No,$Gender,$D_Name,$App_Date);
}
?>



