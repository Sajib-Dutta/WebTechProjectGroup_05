<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>

<body>

<?php 
  $fname = $lname = "";
  $firstnameErrMsg = "";

  if ($_SERVER['REQUEST_METHOD'] === "POST") {
  	function test_input($data) 
    {
      $data = trim($data);
      $data = stripcslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $fname = $_POST['fn'];
    $lname = $_POST['ln'];

    $email = $_POST['e'];
    $mn = $_POST['mn'];

    $adress = $_POST['adress'];
    $country = $_POST['c'];



    $message = "";
    if (empty($fname)) {

      $firstnameErrMsg = "First Name is Empty";
    }
    else {
      if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      

        $firstnameErrMsg = "Only letters and spaces";
      }
    }
    if (empty($lname)) {

      $firstnameErrMsg = "Last Name is Empty";
    }
    else {
      if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
      

        $firstnameErrMsg = "Only letters and spaces";
      }
    }
    if (empty($email)){
      $message .= "Email is Empty";
      $message .= "<br>";
    }
        else {
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $message .= "Please correct your email";
            $message .= "<br>";
          }
        }
    if (empty($mn)) {
      $message .= "Mobileno is Empty";
      $message .= "<br>";
    }
    if (empty($adress)) 
    {
      $message .= "Street/House/Road is Empty";
      $message .= "<br>";
    }

    if (!isset($country) or empty($country)) {
      $message .= "Country not Seletect";
      $message .= "<br>";
    }

    if ($message === "") {
      echo "Registration Successful";
    }
    else {
      echo $message;
    }

  }
?>





<h1>General</h1>
<br>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
  <label for="fn">First name:</label><br>
  <input type="text" id="fn" name="fn"><br>
  <label for="ln">Last name:</label><br>
  <input type="text" id="ln" name="ln">



  <br>

  <label> Gender</label>
  <input type="radio" id="M" name="m" value="M">
  <label for="html">Male</label>
  <input type="radio" id="F" name="f" value="F">
  <label for="css">Female</label>
 
  

  <label for="e">Email</label><br>
  <input type="text" id="e" name="e"><br>
  <label for="mn">Mobile number:</label><br>
  <input type="text" id="mn" name="mn">

  
    <br>

  <label for="adress">Street/House/Road:</label><br>
  <input type="text" id="adress" name="adress"><br>
 
<br>
<label for="c">Country</label><br>
  <select name="c" id="c">
    <option value="bd">Bangladesh</option>
    <option value="in">India</option>
    

<br>
  </select>

  <br><br>
<input type="submit" name="register" value="Register">

<form>

</body>
</html> 


