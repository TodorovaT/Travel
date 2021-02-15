<?php
    $title="Најави се";
    $content='<div>
    <form action="proccess.php" method="POST">
        <p>
            <label>Корисничко име:</label>
            <input type="text" id="user" name="user"/>
        </p>

        <p>
            <label>Лозинка:</label>
            <input type="password" id="pass" name="pass"/>
        </p>

        <p>
            <input type="submit" id="btn" name="Login"/>
        </p>
    </form>
</div>';

    include 'template.php';
?>

