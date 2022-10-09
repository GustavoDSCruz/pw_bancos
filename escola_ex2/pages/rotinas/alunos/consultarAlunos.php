<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cabecalho.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/consultar.css">
    <title>Document</title>
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
        <a href="http://localhost/phpmyadmin/" class="icon-sql" target="_blank">
            <img 
            src="../img/sql.png" 
            class="img-sql"
            >
        </a>
    </nav>
    <br><br>
    <main id="main-consultar"  class="main-index">

    <b>Consulta de Produtos Cadastrados</b>
    <br>
    <form name="cliente" method="POST" action="">
        <fieldset id="a">
            <legend><b>Informe o Nome do aluno desejado:</b></legend>
                <p>Nome: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome do aluno"></p>
                <br><br>
        </fieldset>
        <br>
        <fieldset id="b">
                <input class="btn-fieldset" name="btnenviar" type="submit" value="Consultar">&nbsp;&nbsp;
                <input class="btn-fieldset" name="limpar" type="reset" value="Limpar">
        </fieldset>
        
    </form>
    </main>
  
    <main class="main-index">

    <fieldset id="c">
            <legend><b>Resultado: </b></legend>
            <?php
                extract ($_POST, EXTR_OVERWRITE);
                if(isset($btnenviar))
                {
                    include_once 'alunos.php';
                    $p = new alunos();
                    $p-> setNome($txtnome . '%'); 
                    $pro_bd=$p->consultar();
                    foreach($pro_bd as $pro_mostrar)
                    {
                        ?>
                        <titulos>
                            <campo><?php echo "<h3>Matrícula:</h3>";  ?></campo>        
                            <campo><?php echo "<h3>Nome:</h3>"  ?></campo>              
                            <campo><?php echo "<h3>Endereço:</h3>";  ?></campo>        
                            <campo><?php echo "<h3>Cidade:</h3>";  ?></campo>         
                            <campo id="campo-cod"><?php echo "<h3>Código do curso:</h3>"  ?></campo>  
                        </titulos>
                        <conteudo>
                            <campo><?php echo $pro_mostrar[0];  ?></campo>
                            <campo><?php echo $pro_mostrar[1]; ?></campo> 
                            <campo><?php echo $pro_mostrar[2]; ?></campo>
                            <campo><?php echo $pro_mostrar[3];?></campo>
                            <campo><?php echo $pro_mostrar[4]; ?></campo>
                        </conteudo>
                        <?php
                    }
                   
                }
                        ?>
        </fieldset>
    </main>
    
</body>
</html>