<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styler.css">
    <title>Vírus Log</title>
</head>

<body>
    <header>
        <section class="container">
            <nav>
                <ul>
                    <li>
                        <a href="./Vírus/virus.php" target="_self">Vírus</a>
                    </li>
                    <li>
                        <a href="./Spyware/spyware.php" target="_self">Spyware</a>
                    </li>
                    <li>
                        <a href="./Trojans/trojan.php" target="_self">Trojans</a>
                    </li>
                    <li>
                        <a href="./Rootkit/root.php" target="_self">RootKit</a>
                    </li>
                    <li>
                        <a href="./Keylogger/key.php" target="_self">KeyLogger</a>
                    </li>
                    <li>
                        <a href="./Worms/worms.php" target="_self">Worms</a>
                    </li>
                    <li>
                        <a href="./Adware/adware.php" target="_self">Adware</a>
                    </li>
                </ul>
            </nav>
            </div>
        </section>
    </header>
    <h1>RootKit</h1>
    <?php
        echo "<h2>RootKit são coleções de softwares(maioria mal-intecionada) que tem como objetivo conceder acesso a areas privilegiadas de computadores infectados.</h2>";   
    ?>
    <h1>Como se infectar?</h1>
    <?php
        echo "<h2>Através de phishing ou explorando a vunerabilidade sistema operacional.</h2>";
    ?>
    <h1>Como se proteger?</h1>
    <?php
        echo "<h2>Verifique se seu sistema operacional contem brechas ou vunerabilidades,não abrir arquivos desconhecidos(anexos de email desconhecido por exemplo).</h2>";
    ?>
    <h1>Fontes</h1>
    <?php
        echo "<h3>https://pt.wikipedia.org/wiki/Rootkit</h3>";
        echo "<h3>https://www.kaspersky.com.br/resource-center/definitions/what-is-rootkit</h3>";
        echo "<h3>https://www.avg.com/pt/signal/what-is-rootkit</h3>";
    ?>
</body>

</html>