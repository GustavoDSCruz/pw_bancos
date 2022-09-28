<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/consultar.css">
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
    <b>Consulta de Produtos Cadastrados</b>
    <br>
    <form name="cliente" method="POST" action="">
        <fieldset id="a">
            <legend><b>Informe o Nome do produto desejado:</b></legend>
                <p>Nome: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome do Produto"></p>
                <br><br>
        </fieldset>
        <br>
        <fieldset id="b">
                <input class="btn-fieldset" name="btnenviar" type="submit" value="Consultar">
                <input class="btn-fieldset" name="limpar" type="reset" value="Limpar">
        </fieldset>
        <fieldset id="c">
            <legend><b>Resultado: </b></legend>
            <?php
                extract ($_POST, EXTR_OVERWRITE);
                if(isset($btnenviar))
                {
                    include_once 'produto.php';
                    $p = new Produto();
                    $p-> setNome($txtnome . '%'); 
                    $pro_bd=$p->consultar();
                    foreach($pro_bd as $pro_mostrar)
                    {
                        ?>
                       
                            <campo><?php echo "<h3>ID: </h3>" . $pro_mostrar[0];?></campo>
                            <campo><?php echo "<h3>Nome: </h3>" . $pro_mostrar[1];?></campo>
                            <campo><?php echo "<h3>Estoque: </h3>" . $pro_mostrar[2];?></campo>
                       
                        <?php
                    }
                }
                        ?>
        </fieldset>
    </form>
    </main>
</body>
</html>