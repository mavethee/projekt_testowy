<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
//Podpisanie pracy
<h1>Marcin Mitura</h1>
<h2>Klasa 2Ti, grupa 1</h2>
<h3>Numer 22</h3>
</body>
<?php
//Określenie z bazą danych
$servername="localhost";
$username="marcin";
$password="1234";
$dbname="Nauka_SBD";

//Łączenie z bazą danych
$conn=new mysqli($servername, $username, $password, $dbname);

//Wyświetlenie pełnej tabeli
$sql="SELECT * FROM pracownicy";
echo("<li>Zad.1".$sql);
$result=$conn->query($mysql);
while($row=$result->fetch_assoc())
{
echo($row['imie']);
}
?>
</html>

<?php
//Określenie z bazą danych
$servername="localhost";
$username="marcin";
$password="1234";
$dbname="Nauka_SBD";

//Łączenie z bazą danych
$conn=new mysqli($servername, $username, $password, $dbname);

//Wyświetlenie pełnej tabeli
$sql="SELECT * FROM pracownicy";
echo("<li>Wy".$sql);
$result=$conn->query($mysql);
while($row=$result->fetch_assoc())
{
echo($row['imie']);
}
?>