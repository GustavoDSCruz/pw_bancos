<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css"> 
    <link rel="stylesheet" href="../css/navbar.css"> 
    <link rel="stylesheet" href="../css/fundo2.css"> 
    <link rel="stylesheet" href="../css/alterar2.css"> 
    <title>Resultado das alterações</title>
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
        <fieldset>
            <legend><b>Alterar</b></legend>
            <?php 
                $txtid = $_POST["txtid"];
                include_once 'Produto.php';
                $p = new Produto();
                $p->setId($txtMatricula);
                $pro_bd=$p->alterar(); //chamada de método com retorno - o $p é o parâmetro enviado
            ?>
            <form name="cliente2" method="POST" action="">
                <?php
                    foreach($pro_bd as $pro_mostrar)
                    {
                ?>  
                    <fieldset id="a">
                        <input  type="hidden" name="txtid" size="5" value='<?php echo $pro_mostrar[0]?>'>
                        <b><?php echo "ID: " . $pro_mostrar[0]; //como é matriz - posição 0 ?>  </b>
                    </fieldset>
                   <b><?php echo "Nome:";?></b>
                    <input class="input-text" name="txtnome" type="text" size="25" value='<?php echo $pro_mostrar[1]?>'>
                    <br><br><b><?php echo "Estoque:"; ?></b>
                    <input class="input-text" type="text" name="txtestoq" size="10" value='<?php echo $pro_mostrar[2]?>'>
                    <br><br><br>
                    <fieldset id="b">
                    <input class="input-submit" name="btnalterar" type="submit" value="Alterar">
                    </fieldset>    
                <?php        
                    }
                ?>
            </form>
    </fieldset>
    <?php 
        extract($_POST, EXTR_OVERWRITE);
        if(isset($btnalterar))
        {
            include_once 'Produto.php';
            $pro = new Produto();
            $pro->setNome($txtnome);
            $pro->setEstoque($txtestoq);
            $pro->setId($txtid);
            echo "<br><br><h3>" . $pro->alterar2() . "</h3>";
            header("location:alterar.php");
        }
    ?>
    </main>
</body>
</html>