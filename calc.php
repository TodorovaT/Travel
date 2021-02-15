<?php
    $title="Травел - Калкулатор";
    $content='<h3>Пресметајте цена за некој од понудените хотели.</h3>

    <form action="cena.php" method="post">
        <div id="data">
            <label>Шифра на хотел:</label>
            <input type="text" name="sifra"/><br/>

            <label>Број на ноќевања:</label>
            <input type="text" name="nokevanja"/><br/>

            <label>Број на возрасни:</label>
            <input type="text" name="vozrasni"/><br/>

            <label>Број на деца до 10 години:    </label>
            <input type="text" name="deca"/><br/>

            <label>Број на деца до 1 година:</label>
            <input type="text" name="bebe"/><br/>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Пресметај цена"/><br/>
        </div>
    </form>';

    include 'template.php';
?>