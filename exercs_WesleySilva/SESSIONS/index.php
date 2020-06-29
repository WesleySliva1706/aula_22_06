<html>
<head>
    <meta charset="utf-8">
    <title>Exerc Sessions</title>
</head>
<body>
    <?php
        if($_COOKIE['control']==1){
            echo "Login ou Senha Inválidos.<hr>";
        }

        else if($_COOKIE['control']==""){
            setcookie('control', 0, time()+60*60*24);
            header("location: index.php");
        }
            
    ?>

    <form class="" action="login.php" method="post">
        <input type="text" name="login" placeholder="Login:">
        <input type="password" name="senha" placeholder="Senha:">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>