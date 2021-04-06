<?php

function validate_username($username) {
  /* //Function validate_username, takes 1 argument, validate that it is a non empty string, and doesn’t
  //have more than 25 characters */
} // HERE A BETTER ONE, FORM VALIDATION WITH STYLING
  $regex = "/^([a-zA-Z0-9]){2,25}$/";
  if(isset($_POST['submit'])){
    if(preg_match($regex, $_POST['username'])){
      $output = "<br><span style='color: chartreuse; font-size: 50px';> yay </span>";
    }else{
      $output = "<br><span style='color: crimson; font-size: 50px';> nay </span>";
  }
}
  
  function validate_weekday($day) {
   /*  $options = array(
      'options' => array(
        'default' => 'false',
        'min_range' => 0,
        'max_range' => 6
      )
    ); */
    return (($day > -1) && ($day < 7)) ? 'true' : 'false';
    //return filter_var($day, FILTER_VALIDATE_INT, $options);
  }


  echo '0 is a valid weekday: ' . validate_weekday(0); // true
  echo '<br>';
  echo '6 is a valid weekday: ' . validate_weekday(6); // true
  echo '<br>';
  echo '100 is a valid weekday: ' . validate_weekday(100); // false
  echo '<br>';
  echo '-12 is a valid weekday: ' . validate_weekday(-12); // false
  echo '<br>';
  echo '4 is a valid weekday: ' . validate_weekday(4); // true
  echo '<br>';
  echo 'null is a valid weekday: ' . validate_weekday(null); // false
  echo '<br>';
  echo 'An empty string is a valid weekday: ' . validate_weekday(''); // false
  echo '<br>';
  echo 'An string is a valid weekday: ' . validate_weekday('5'); // false
  echo '<br>';

  function validate_widthdraw_amount($amount, $balance) {
    return is_int($amount) && is_int($balance) && $amount <= $balance ? 'true' : 'false';
  }

  echo 'Able to withdraw 100 from an account of 1000 balance: ' . validate_widthdraw_amount(100, 1000); // true
  echo '<br>';
  echo 'Able to withdraw 1000 from an account of 1000 balance: ' . validate_widthdraw_amount(1000, 1000); // true
  echo '<br>';
  echo 'Able to withdraw -50 from an account of 1000 balance: ' . validate_widthdraw_amount(-50, 1000); // false
  echo '<br>';
  echo 'Able to withdraw 1500 from an account of 1000 balance: ' . validate_widthdraw_amount(1500, 1000); // false
  echo '<br>';
  echo 'Able to withdraw true from an account of true balance: ' . validate_widthdraw_amount(true, true); // false
  echo '<br>';
  echo 'Able to withdraw 0 from an account of negative 100 balance: ' . validate_widthdraw_amount(0, -100); // false
  echo '<br>';
  echo 'Able to withdraw null from an account of 0 balance: ' . validate_widthdraw_amount(null, 0); // false
  echo '<br>';

  function validate_school_email($email_addr) {
    if (filter_var($email_addr, FILTER_VALIDATE_EMAIL)) {
      return 'true';
    } return 'false';
  }

  echo 'test_student@mail.fi is a valid school email: ' . validate_school_email('test_student@MAIL.fi'); // true
  echo '<br>';
  echo 'test_student@mail.fi@mail.fi is a valid school email: ' . validate_school_email('test_student@mail.fi@mail.fi'); // false
  echo '<br>';
  echo 'mail.fi@mail.fi is a valid school email: ' . validate_school_email('mail.fi@mail.fi'); // true
  echo '<br>';
  echo 'test_student@gmail.com is a valid school email: ' . validate_school_email('test_student@gmail.fi'); // false
  echo '<br>';
  echo 'test_student#mail.fi is a valid school email: ' . validate_school_email('test_student#mail.fi'); // false
  echo '<br>';
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>April_06</title>
<style>
*{margin: 10px; font-size:110%} body{background: azure; color: cornflowerblue;} input[type=submit] {color: cornflowerblue; border: 1px solid cornflowerblue; font-size: 120%} input{border: 1px solid cornflowerblue;}
</style>
</head>
<body>

  <h1>Validate here: </h1>
  <form method="POST" autocomplete="off">
    <label for="username">username:</label>
    <input autofocus type="text" name="username" id="username">
   <!--  <span><?php //if(isset($username_error)){echo $username_error;} ?></span>
    <label for="password">password:</label>
    <input type="password" name="password" id="password">
    <span><?php //if(isset($password_error)){echo $password_error;} ?></span> -->
    <input type="submit" value="Validate" name="submit">
    <?php if(isset($output)){echo $output;} ?>
  </form>



</body>
</html>