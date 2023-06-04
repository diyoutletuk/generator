<!DOCTYPE html>
<html>
<head>
  <title>Witaj!</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      margin: 100px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Witaj!</h2>
    <?php
    session_start();
    if(isset($_SESSION['login'])){
        $login = $_SESSION['login'];
        echo "<p>Witaj, $login! Zostałeś pomyślnie zalogowany.</p>";
    } else {
        header("Location: index.php");
        exit;
    }
    ?>
    <a href="logout.php">Wyloguj</a>
  </div>
</body>
</html>
