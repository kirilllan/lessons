<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>April_09</title>
  <style>body {display:flex;flex-direction:column;margin:10px;padding:10px;}form {width: 30vw;}</style>
  
</head>
<body>
    <form method="POST" action="//public.bc.fi/s2100138/contact.php" id="submission-form">
    <input type="text" name="username" id="username" placeholder="enter your username" autocomplete="off">
    <input type="password" name="password" id="password" placeholder="enter your password">
    <textarea name="message" id="message" cols="30" rows="10" ></textarea>
    <button type="submit">Go ahead</button>
    </form>

    <!-- <script>
    document.getElementById('submission-form').addEventListener('submit', (e) => {
      e.preventDefault();
      const username = e.target.username.value;
      const password = e.target.password.value;
      const message = e.target.message.value;

      fetch('/contact.php', {
        params: {
          username, password, message
        }
      })
      console.log(username, password, message)
    })

  </script> -->
</body>
</html>