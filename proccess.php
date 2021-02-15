<?php
    $username=$_POST['user'];
    $password=$_POST['pass'];

    $username=stripcslashes($username);
    $password=stripcslashes($password);
    // $username=mysqli_real_escape_string($username,mysqli_error());
    // $password=mysqli_real_escape_string($password,mysqli_error());

    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"login");

    $result=mysqli_query($conn,"Select * from users where username='$username' and password='$password'")
        or die("Failed to query database ".mysqli_error());
    $row=mysqli_fetch_array($result);
    if($row['username']===$username && $row['password']===$password) {
        //echo "Добредојде ".$row['username'].".";
        $br=1;
    }
    else {
        //echo "Неуспешно најавување!";
        $br=0;
    }

    $title="Травел - Вработени";
    if($br==1) {
        $content="<h3>Добредојде ".htmlspecialchars($row['username']).".</h3>
        <p>Пополни информации за денешнaтa работна смена.</p>
        <form action='izvestaj.php' method='post'>
        <div id='data'>
            <label>Име и Презиме:</label>
            <input type='text' name='imeiprezime'/><br/>

            <label>Време на пристигнување на работа:</label>
            <input type='text' name='vremeod'/><br/>

            <label>Време на заминување од работа:</label>
            <input type='text' name='vremedo'/><br/>

            <label>Број на опслужени клиенти:</label>
            <input type='text' name='klienti'/><br/>

            <label>Број на уплатени аранжмани:</label>
            <input type='text' name='uplateno'/><br/>

            <label>Забелешки:</label>
            <input type='text' name='zabeleski'/><br/>
        </div>

        <div id='buttons'>
            <label>&nbsp;</label>
            <input type='submit' value='Внеси дневен извештај'/><br/>
        </div>
    </form>
        ";
    }
    else 
        $content="<h3>Неуспешно најавување.</h3>";
    include 'template.php';
?>