
<html>


<h1>    hi        </h1>

<h1>  <?php  echo "hello";  ?>        </h1>

<?php


if(isset($_POST['submit'])){

  $student_name = $_POST['username'];
  $father_name = $_POST['father'];
  $mother_name = $_POST['mother'];
  $school_name = $_POST['school'];

  // echo $student_name; echo "<br>";
  // echo $father_name;  echo "<br>";
  // echo $mother_name;  echo "<br>";
  // echo $school_name;


  echo '<h1>'.$student_name.'</h1><br>'.$father_name.'<br>'.$mother_name.'<br>'.$school_name;





}

$hi = 'hello ki obstha saaaaaaaad ???';



echo'
<p>'.$hi .'  </p>
<textarea></textarea>
';



?>


<form action="" method="POST">


  <input name="username" type="text" placeholder="Enter your Name">

  <input name="father" type="text" placeholder="Enter your Father's name">

  <input name="mother" type="text" placeholder="Enter your Mother's Name">

  <input name="school" type="text" placeholder="Enter your School's Name">

  <input name="submit" type="submit" value="submit">


</form>


<?php





?>










</html>


