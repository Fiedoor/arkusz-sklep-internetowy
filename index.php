<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Sklep papierniczy</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
    </header>
    <main>
        <div id="lewy">
            <h3>Promocja 15% obejmuje artykuły:</h3>
            <ul>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'sklep');
                $q1 = "SELECT nazwa FROM towary WHERE promocja=1";
                $res1 = mysqli_query($conn, $q1);
                foreach ($res1 as $row) {
                    echo "<li>" . $row['nazwa'] . "</li>";
                }
                ?>
            </ul>
        </div>
        <div id="srodkowy">
            <h3>Cena wybranego artykułu w promocji</h3>
            <form action="index.php" method="post">
                <select name="towar">
                    <option value="Gumka do mazania">Gumka do mazania</option>
                    <option value="Cienkopis">Cienkopis</option>
                    <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
                    <option value="Markery 4 szt.">Markery 4 szt.</option>
                </select>
                <input type="submit" value="WYBIERZ">
            </form>
            <?php
            $nazwa = $_POST['towar'];
            $q2 = "SELECT cena FROM towary WHERE nazwa='$nazwa'";
            $res2 = mysqli_query($conn, $q2);
            foreach ($res2 as $row) {
                $cena = $row['cena'] * 0.85;
                $cena = round($cena, 2);
                echo $cena;
            }
            mysqli_close($conn); //CONNECTION TERMINATED
            ?>
        </div>
        <div id="prawy">
            <h3>Kontakt</h3>
            <p>telefon 123123123 <br>e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
            <image src="promocja2.png" alt="promocja">
        </div>
    </main>
    <footer>
        <h4>Autor strony: PESEL</h4>
    </footer>
</body>

</html>