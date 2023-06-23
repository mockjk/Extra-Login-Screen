<?php 
session_start();
$login = $_SESSION['login'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\style2.css"> 
    <link rel="icon" type="image/png" href="IMG\logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap" rel="stylesheet">
    <script src="JS\script.js"></script>
    <title>Extra | Logado </title>
</head>
<body>
    <div class="header">     
        <header> 
            <nav><h2>Login:<?php echo $login."<br>" ?> Senha:<?php echo $senha ?> </h2></nav>
        </header>
    </div>
    <form action="Reiniciar.php" method="post">   
        <button>Deslogar</button>
    </form>
</body>