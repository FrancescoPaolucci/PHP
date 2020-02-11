<?php include 'db.php';

$f = $_POST ['fname'];
$l = $_POST ['lname'];
$m = $_POST ['city']; 
$n = $_POST ['groupid']; 
$d = date("Y-m-d") ['Date'];
$sql= "insert into studentsinfo (firstname, lastname, city, groupid, Date)
values ('$f','$l','$m','$n','$d')";
if($connect->query($sql) === TRUE){
    echo  "New record added";
    }
    else
    {
        echo "ERROR:" .$sql . "<br>" .$connect->error;
        
    }
    $connect->close();
?>