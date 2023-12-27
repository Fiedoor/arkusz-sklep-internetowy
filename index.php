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
                //skrypt1
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
            //skrypt2
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