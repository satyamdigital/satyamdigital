<?php
$Entername = filter_input(INPUT_POST, 'Entername');
$Emailid = filter_input(INPUT_POST, 'Emailid');
if (!empty($Entername)){
if (!empty($Emailid)){
$host = "204.11.58.39";
$dbusername = "youthpolitic@localhost";
$dbpassword = "No";
$dbname = "youthpol_information database";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO suscribe (Entername, Emailid)
values ('$Entername','$Emailid')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Entername should not be empty";
die();
}
}
else{
echo "Emailid should not be empty";
die();
}
?>





