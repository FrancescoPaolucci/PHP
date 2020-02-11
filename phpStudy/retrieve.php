<?php include 'head1.php' ?>
<?php
include 'db.php'; 
$sql = "select * from studentsinfo";
$result = $connect->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
    while($row = $result ->fetch_assoc()){
         "id:" . $row["id"] . "First Name:". $row["fname"]."Last Name:". $row["lname"] 
        
        ."City:". $row["city"]. "Group ID:". $row["groupid"]
        ."<br>";
    }
}
else 
{
    echo "no results";
}

// You can type different sql queries based on your needs
// The output as of now does not look good. Your task is to format it properly with HTML tables. 

// Create the beginning of HTML table, and of the first row
function html_table($result = array())
{

 
    $rows = array();
    foreach ($result as $row) {
        $cells = array();
        foreach ($row as $cell) {
            $cells[] = "<td> {$cell} </td>";
        }
        $rows[] = "<tr>" . implode('', $cells) . "</tr>";
    }
    return "<table class='table'> <tr> <th> First Name  <th> Last Name </th> <th> City </th> <th> Group ID </th> <th> ID </th> <th> Date </th> </tr> "  . implode('', $rows) . "</table>";
}
echo html_table($result);

$connect->close();


?>
 <input type="button" value="Modifica" class="modbut" id="dbtn" 
onClick="document.location.href='update.php'" />

<?php include 'foot1.php' ?>

 