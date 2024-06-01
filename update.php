<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `curd` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="update `curd` set id=$id , name='$name', email='$email', mobile='$mobile', password='$password' where id=$id ";

  $result=mysqli_query($con,$sql);
  if($result){
    //echo "Data update successfully";
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<h1> </h1>
<div class="container my-5">
<form method ="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" aria-describedby="name" placeholder ="Enter your name" autocomplete= "off" value=<?php echo $name;?>>
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" aria-describedby="email" placeholder ="Enter your email" autocomplete= "off" value=<?php echo $email;?>>
</div>

<div class="mb-3">
    <label>Mobile</label>
    <input type="text" name="mobile" class="form-control" aria-describedby="mobile" placeholder ="Enter your mobile" autocomplete= "off" value=<?php echo $mobile;?>>
</div>

<div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control" aria-describedby="password" placeholder ="Enter your password" autocomplete= "off" value=<?php echo $password;?>>
</div>



  <button type="submit" class="btn btn-primary" name = "submit">Update</button>
</form>
</div>
</body>
</html>