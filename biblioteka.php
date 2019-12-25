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
            $i=1;
            echo "<li>".$row['imie']." ";
            echo $row['nazwisko']."</li>";
            $i++;
          }
        echo "</ul>";
      mysqli_close($conn);
    ?>
  </div>
  <div id="srodkowy">
    <h3>Dodaj nowego czytelnika</h3>
    <form>
      imię:<input type="text"><br>
      nazwisko:<input type="text"><br>
      rok urodzenia:<input type="number"><br>
      <input type="submit" value="DODAJ">
    </form>
    <?php 
      $conn = mysqli_connect("localhost","root","","biblioteka");
      $query = "SELECT imie, nazwisko FROM autorzy";
        $result = mysqli_query($conn,$query);

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