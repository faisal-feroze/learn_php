
<?php

if(isset($_POST['user_registration'])){

 include 'db_connect.php';

 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $mobile = $_POST['mobile'];
 $age = $_POST['age'];
 $email = $_POST['email'];
 $password = $_POST['password'];

 $encypt_pass = md5($password);



 $query = "INSERT INTO users(first_name,last_name,mobile,age,email,password)
 VALUES('$first_name','$last_name','$mobile','$age','$email','$encypt_pass')";

 $result = mysqli_query($conn,$query);


 if(!$result){
     die('query failed'.mysqli_error($conn));
 }



}




 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="" method="post">

      <p>First Name: <input type="text" name="first_name" required> </p>
      <p>Last Name: <input type="text" name="last_name" required> </p>
      <p>Mobile: <input type="text" name="mobile" required> </p>
      <p>Age: <input type="number" name="age" min='16' max = '100' required> </p>
      <p>E-mail: <input type="email" name="email" required> </p>
      <p>Password: <input type="password" name="password" required> </p>

      <input type="submit" name="user_registration" value="Register">

    </form>


  </body>
</html>
