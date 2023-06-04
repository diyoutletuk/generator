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
