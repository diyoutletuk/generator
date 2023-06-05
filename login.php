<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Pobierz dane z formularza
  $login = $_POST["login"];
  $password = $_POST["password"];

  // Wykonaj weryfikację danych logowania
  if ($login == "admin" && $password == "admin123") {
    // Jeśli dane logowania są poprawne, możesz przekierować użytkownika na inną stronę lub wykonać inne odpowiednie działania
    header("Location: welcome.php");
    exit;
  } else {
    // Jeśli dane logowania są niepoprawne, możesz wyświetlić odpowiednie komunikaty lub podejmować inne działania
    $error_message = "Niepoprawny login lub hasło.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Strona logowania</title>
  <style>
    /* Dodaj stylizację formularza, jak w poprzednim przykładzie */
  </style>
</head>
<body>
  <div class="container">
    <h2>Logowanie</h2>
    <form method="POST" action="login.php">
      <label for="login">Login:</label>
      <input type="text" id="login" name="login" placeholder="Wprowadź login" required>

      <label for="password">Hasło:</label>
      <input type="password" id="password" name="password" placeholder="Wprowadź hasło" required>

      <input type="submit" value="Zaloguj">
      <?php if(isset($error_message)) { echo '<p style="color: red;">'.$error_message.'</p>'; } ?>
    </form>
  </div>
</body>
</html>
