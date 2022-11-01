<?php
$server="localhost";
$username="root";
$password="root";
$dbname="attacker_db";

$conn=mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit']))
{
    if(!empty($_POST['name']) && $_POST['pass'])
    {
        $name = $_POST['name'];
        $pass = $_POST['pass'];

        $query = "insert into data(name,pass) values('$name','$pass')";

        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

        if($run)
        {
            echo "Form Submitted";
        }
        else
        {
            echo "not submitted";
        }
    }
    else
    {
        echo "All Fields Required";

    }
}
?>