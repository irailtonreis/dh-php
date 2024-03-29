<?php 
  $usuario = [
    "nome" => "Fulano",
    "email" => "fulano@gmail.com",
    "nivel_acesso" => mt_rand(0,1)
  ];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>contact page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/contact.css">
</head>

<body class="contact-body">
  <header>
    <div class="logo-content">
      <img src="img/logo.png" class="logo" alt="logo do site">
      <span>Landseeker</span>
    </div>
    <div class="container">
      <ul>
        <li class="toggle-menu"><a href="#">&#9776;</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </header>

  <div class="contact-content">
    <?php if($usuario["nivel_acesso"] === 1){ ?>
      <img src="img/about-banner-fixed.jpg" class="contact-title" alt="">
    <?php } else { ?>
      <div class="contact-title">
        <h1>Contact Us!</h1>
      </div>
      <form action="#">
        <label for="">Name</label>
        <input type="text">
        <label for="">E-mail</label>
        <input type="email">
        <label for="">Message</label>
        <textarea name="name" rows="8" cols="80"></textarea>
        <div class="contact-item">
          <input type="checkbox">
          <label for="">Don't post my name</label>
          <button type="submit" name="button">Send</button>
        </div>
      </form>
    <?php } ?>
  </div>

  <footer>
    <p>Copyright &copy; Digital House</p>
  </footer>
</body>

</html>
