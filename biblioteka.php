<!DOCTYPE html>
<html lang="en">
<head>
  <title>Biblioteka miejska</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
  <div id="baner">
    <h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
  </div>
  <div id="lewy">
    <h3>W naszych zbiorach znajdziesz dzieła następujących autorów:</h3>
    <?php
      $conn = mysqli_connect("localhost","root","","biblioteka");
      $query = "SELECT imie, nazwisko FROM autorzy";
        $result = mysqli_query($conn,$query);
        echo "<ul>";
          while ($row=mysqli_fetch_array($result)) {//дивись уважно сюда просто передаем результат запроса
            echo "<li>".$row['imie']." ";
            echo $row['nazwisko']."</li>";
          }
        echo "</ul>";
      mysqli_close($conn);
    ?>
  </div>
  <div id="srodkowy">
    <h3>Dodaj nowego czytelnika</h3>
    <form method="POST">
      imię:<input type="text" name="imie"><br>
      nazwisko:<input type="text" name="nazwisko"><br>
      rok urodzenia:<input type="number" name="year"><br>
      <input type="submit" name="dodaj" value="DODAJ">
    </form>
    <?php
      $conn = mysqli_connect("localhost","root","","biblioteka");
        echo ($_POST['imie']);//добавить описание
      $query = "INSERT INTO czytelnicy (id, imie, nazwisko, kod) VALUES (LAST_INSERT_ID(), {$_POST['imie']}, {$_POST['nazwisko']}, 'ANMI05')";
        $result = mysqli_query($conn,$query);
          echo $result;
        mysqli_close($conn);
    ?>
  </div>
  <div id="prawy">
    <img src="biblioteka.png" alt="książki">
    <h4>
      ul. Czytelnicza 25<br>
      12-120 Książkowice<br>
      tel.: 123123123<br>
      e-mail: <a href="mailto:biuro@biblioteka.pl">biuro@biblioteka.pl</a>
    </h4>
  </div>
  <div id="stopka">
    <p>Projekt strony: 1234567890111</p>
  </div>
</body>
</html>