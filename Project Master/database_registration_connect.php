<?php
$con = mysqli_connect("localhost","root","") or die("not connected");
mysqli_select_db($con, "property_site") or die("no db found");

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phoneNum = $_POST['phoneNum'];
    $pwd = $_POST['pwd'];
    $priv = $_POST['priv'];

    $query = "INSERT INTO user_prof (fname,lname,email,phoneNum,pwd,priv) VALUES ('$fname','$lname','$email','$phoneNum','$pwd','$priv')";
    if(mysqli_query($con,$query)){
        echo "data submitted";
    }
    else {
        echo "data gone AWOL!!";
    }
}
?>