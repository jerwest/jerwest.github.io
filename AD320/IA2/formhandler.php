<?php

$nameErr = $emailErr = $phoneErr = $stateErr = "";
$name = $email = $phone = $state = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	// Name Field
	if (empty($_GET["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_GET["name"]);
	  echo "Name: " . $name . "<br>";
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }

	// Email Field
	if (empty($_GET["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_GET["email"]);
	  echo "Email Address: " . $email . "<br>";
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }

	// Phone Field
	if (empty($_GET["phone"])) {
      $phoneErr = "";
    } else {
      $phone = test_input($_GET["phone"]);
	  echo "Phone Number: " . $phone . "<br>";
      // check if name only contains letters and whitespace
      if (!preg_match("/^[0-9]*$/",$phone)) {
        $phoneErr = "Only numbers allowed";
      }
    }

	// State Field
	if (empty($_GET["state"])) {
      $stateErr = "";
    } else {
      $state = test_input($_GET["state"]);
	  echo "State of Residence: ". $state;
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z]*$/",$state)) {
        $stateErr = "Only letters and white space allowed";
      }
    }
}
?>
