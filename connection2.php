<?php
$username="root";
$pasword="";
$server='localhost';
$db='hack';

$con=mysqli_connect($server,$username,$pasword,$db);



if($con)
{
    //echo"connection sucessfull";
    
    ?>
    <script>
        alert('connected sucessfull');
</script>
<?php
}
else
{
    //echo"not connected";
    die("no connection" . mysqli_connect_error());
}

?>