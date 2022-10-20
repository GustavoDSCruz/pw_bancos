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
        <b>Alteração de Cursos Cadastrados</b>
        <br>
        <fieldset>
            <legend><b>Alterar</b></legend>
            <?php 
                $txtCodcurso = $_POST["txtCodcurso"];
                include_once 'cursos.php';
                $p = new cursos();
                $p->setCodcurso($txtCodcurso);
                $pro_bd=$p->alterar(); //chamada de método com retorno - o $p é o parâmetro enviado
            ?>
            <form name="cliente2" method="POST" action="">
                <?php
                    foreach($pro_bd as $pro_mostrar)
                    {
                ?>  
                    <fieldset id="a">
                        <input  type="hidden" name="txtCodcurso" size="5" value='<?php echo $pro_mostrar[0]?>'>
                        <b><?php echo "ID: " . $pro_mostrar[0]; //como é matriz - posição 0 ?>  </b>
                    </fieldset>
                   <b><?php echo "Nome:";?></b>
                    <input class="input-text" type="text" name="txtnome"  size="25" value='<?php echo $pro_mostrar[1]?>'>
                    <b><?php echo "Código da 1a disciplina:"; ?></b>
                    <input class="input-text" type="text" name="txtCoddisc1" size="10" value='<?php echo $pro_mostrar[2]?>'>
                    <b><?php echo "Código da 2a disciplina:"; ?></b>
                    <input class="input-text" type="text" name="txtCoddisc2" size="20" value='<?php echo $pro_mostrar[3]?>' >
                    <b><?php echo "Código da 3a disciplina:"; ?></b>
                    <input class="input-text" type="text" name="txtCoddisc3" size="5" value='<?php echo $pro_mostrar[4]?>'>
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
            include_once 'cursos.php';
            $pro = new cursos();
            $pro->setNome($txtnome);
            $pro->setCoddisc1($txtCoddisc1);
            $pro->setCoddisc1($txtCoddisc2);
            $pro->setCoddisc2($txtCoddisc3);
            $pro->setCodcurso($txtCodcurso);
            echo "<br><br><h3>" . $pro->alterar2() . "</h3>";
            header("location:alterarCursos.php");
        }
    ?>
    </main>
</body>
</html>