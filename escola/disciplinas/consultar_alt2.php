<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css"> 
    <link rel="stylesheet" href="../css/cabecalho.css"> 
    <link rel="stylesheet" href="../css/alterar2.css"> 
    <title>Resultado das alterações</title>
</head>
<body>
    <nav>
        <!--Imagem de logo-->
        <a href="../index.html" class="icon-home">
            <img 
                src="../img/logo.png" 
                alt="Logo do site | Home Page"
                class="img-nav"
            >
        </a>
        <!--Links para rotinas de alunos-->
        <button><a href="../cadastrar.html">Cadastrar</a></button>
        <button><a href="../listar.html">Listar</a></button>
        <button><a href="../alterar.html">Alterar</a></button>
        <button><a href="../remover.html">Remover</a></button>
        <button><a href="../consultar.html">Consultar</a></button>
        <a href="http://localhost/phpmyadmin/" class="icon-sql">
            <img 
            src="../img/sql.png" 
            class="img-sql"
            >
        </a>
    </nav>
    <main class="main-index">
        <br><br>
        <b>Alteração das Disciplinas Cadastradas</b>
        <br>
        <fieldset>
            <legend><b>Alterar</b></legend>
            <?php 
                $txtCodDisciplina = $_POST["txtCodDisciplina"];
                include_once 'disciplinas.php';
                $p = new disciplinas();
                $p->setCodDisciplina($txtCodDisciplina);
                $pro_bd=$p->alterar(); //chamada de método com retorno - o $p é o parâmetro enviado
            ?>
            <form name="cliente2" method="POST" action="">
                <?php
                    foreach($pro_bd as $pro_mostrar)
                    {
                ?>  
                    <fieldset id="a">
                        <input  type="hidden" name="txtCodDisciplina" size="5" value='<?php echo $pro_mostrar[0]?>'>
                        <b><?php echo "Código da disciplina: " . $pro_mostrar[0]; //como é matriz - posição 0 ?>  </b>
                    </fieldset>
                   <b><?php echo "Nome da disciplina:";?></b>
                    <input class="input-text" type="text" name="txtNomeDisciplina"  size="25" value='<?php echo $pro_mostrar[1]?>'>
                    <fieldset id="b">
                    <input class="input-submit" type="submit" name="btnalterar"  value="Alterar">
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
            include_once 'disciplinas.php';
            $pro = new disciplinas();
            $pro->setNomeDisciplina($txtNomeDisciplina);
            $pro->setCodDisciplina($txtCodDisciplina);
            echo "<br><br><h3>" . $pro->alterar2() . "</h3>";
            header("location:alterarDisciplinas.php");
        }
    ?>
    </main>
</body>
</html>