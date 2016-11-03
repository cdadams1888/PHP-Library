<form action="index.php" method="GET">
    Name:<br><input type="text" name="name"><br>
    Age:<br><input type="text" name="age" size="5"><br><br>
    <input type="submit" value="Submit">
</form>





<?php

$name = $_GET['name'];
$age = $_GET['age'];
echo "Hello. ".$name. ' !';

// type the above into the url such as localhost:8888/?name="Christopher"&age=28
?>



