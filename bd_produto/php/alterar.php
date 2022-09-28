<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css"> 
    <link rel="stylesheet" href="../css/main.css"> 
    <link rel="stylesheet" href="../css/cadastrar.css"> 
    <link rel="stylesheet" href="../css/fundo2.css"> 

    <title>Document</title>
</head>
<body>
    <nav>
        <button class="icon-home"><a href="../index.html">
            <img 
            src="../img/logo.png"
            class="img-nav"
            >SHOP
        </a></button>
        <button><a href="cadastrar.php">Cadastrar</a></button>
        <button><a href="listar.php">Listar</a></button>
        <button><a href="alterar.php">Alterar</a></button>
        <button><a href="remover.php">Remover</a></button>  
        <button><a href="consultar.php">Consultar</a></button>
        <button class="icon-sql"><a target="blank_" href="http://localhost/phpmyadmin/">
            <img class="img-sql" src="../img/sql.png" alt="">
        </a></button>        
    </nav>
    <main>
        <br><br>
        <b>Alteração de Produtos Cadastrados</b>
        <br>
        <form name="cliente" method="POST" action="consultar_alt2.php">
            <fieldset id="a">
                <legend><b>Informe o ID do produto desejado: </b></legend>
                <p>Id: <input name="txtid" type="text" size="20" maxlenght="5" placeholder="ID do Produto"></p>
                <br><br>
            </fieldset>
            <fieldset id="b">
                <input class="btn-fieldset" name="btnenviar" type="submit" value="Alterar"> &nbsp;&nbsp;
                <input class="btn-fieldset" name="limpar" type="reset" value="Limpar">
            </fieldset>
        </form>
    </main>
</body>
</html>