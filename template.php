<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
    </head>
    <body>
        <div id="wrapper">
            <div id="banner"></div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="pocetna.php">Почетна</a></li>
                    <li><a href="ponudi.php">Понуди</a></li>
                    <li><a href="kontakt.php">Контакт</a></li>
                    <li><a href="zanas.php">За нас</a></li>
                    <li><a href="calc.php">Калкулатор</a></li>
                    <li><a href="login.php">Најави се</a></li>
                </ul>
            </nav>

            <div id="content_area">
                <?php echo $content; ?>
            </div>

            <div class="footer">
                <p>„Додека не тргнав да патувам, никогаш не знаев дека светот може да биде прекрасно лудило.“ - Justina Chen</p>
            </div>
        </div>
    </body>
</html>
