<?php include 'head1.php' ?>

<form name ="form1" method="post" action="create.php">
    <p>First name:</p> <input type="text" name="fname"> <br>
<p>Last name: </p><input type="text" name ="lname"> <br>
<p>City: </p><input type="text" name ="city"> <br>
    <p>Choose Group ID:</p>
<select name = "groupid">
    <option value="BBCAP19"> BBCAP19 </option>
    <option value="BBCAP19"> BBCAP20 </option>
    <option value="BBCAP19"> BBCAP21 </option>
    </select>

    <br>
    <input type="submit" value ="Continue">
    <a href="retrieve.php">Show users</a>
    </form>

<?php include 'foot1.php' ?>