<?php
$database="ekta"; //database name
$Name=$_POST['Name'];//this values comes from html file after submitting 
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$flavour=$_POST['flavour'];

    $con = mysql_connect("localhost","avkavk1996" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$query = "INSERT INTO ekta (Name,Email,Phone,flavour)VALUES ('$Name','$Email','$Phone','$flavour')";
mysql_query($query);

echo "<script type='text/javascript'>\n";
echo "alert('you are Succesflly registered');\n";
echo "</script>"; 


mysql_close();
?>