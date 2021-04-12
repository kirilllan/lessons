<?PHP 

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
  }
  
  $mailTo = "s2100138@edu.bc.fi"; //chng
  $headers = "From: $mailFrom";
  $txt = 'You have a new email from ' . $name . '.\n\n' . $message;

/*   ini_set( 'sendmail_from', "$mailFrom" ); 
  ini_set( 'SMTP', "kuku" );
  ini_set( 'smtp_port', 25 ); */

  mail($mailTo, $subject, $txt, $headers);
  //header("Location: index.php?mailsent");


?>