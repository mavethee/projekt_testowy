<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VirtualBox+VSCode + SQL + Docker + Github</title>
</head>
<body>
    <?php
    //Logowanie do mySQLa:
    require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/connect.php');

        //Tabela:
        $sql=("SELECT * FROM pracownicy");
            echo("<h1 class=SQL_excercise>Zadanie 1: Wyświetlenie pełnej listy pracowników:</h1>");
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                $result=$conn->query($sql);
                    echo("<table border=1>");
                        echo("<th>id_pracownicy</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                            while($row=$result->fetch_assoc())
                            {
                                echo("<tr>");
                                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                                echo("</tr>");
                            }
                    echo("</table>");

    //Bieżąca data i czas:
    echo("<h1 class=SQL_excercise>Zadanie 2: wyświetlenie aktualnej daty w PHP:</h1>");
        $d=strtotime("now");
                echo "<li>".date("Y-m-d h:i:sa", $d) . "<br>";
    ?>
</body>
</html>
