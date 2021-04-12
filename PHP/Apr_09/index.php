<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>email sender</title>
  <style>
  * {box-sizing: border-box;}
  body {font-family: 'Courier New', sans-serif;background-color: NavajoWhite; color: Peru;
    font-size: 150%; display: flex; justify-content:center;}
  input {font-family: 'Courier New', sans-serif; background-color: papayawhip;color: Peru; border: 1px solid Peru;margin: 10px; 
    text-align: center;}
  textarea {background-color: papayawhip; color: Peru; border: 1px solid Peru; resize: none;}
  ::placeholder {color: Peru; opacity: .5;}
  button {color: PeRu; background: transparent;
  border: 4px solid Peru; margin: 10px;}
  form {
    display: flex; flex-direction: column; justify-content: center; align-items: center;
    width: 90vw; 
  } 
  </style>
</head>
<body>
  <main>
    <form class="contac-form" action="contactform.php" method="POST">
    <p>SEND E-MAIL</p>
      <input type="text" name="name" id="name" placeholder="your name" autofocus>
      <input type="email" name="mail" id="mail" placeholder="your email">
      <input type="text" name="subject" id="subject" placeholder="subject">
      <textarea name="message" id="message" placeholder="your message" rows="15" cols="40">
      </textarea>
      <button type="submit" name="submit">SEND</button>
    </form>
  </main>
</body>
</html>