<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/cabecalho.css">
    <link rel="stylesheet" href="../css/remover.css">
    <title>Remover Alunos</title>
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
        <!--Links para rotinas de cursos-->
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
    <main class = "main-index">   
        <h1>Exclusão de Cursos Cadastrados</h1>
        <form name ="cliente" method="POST" action="">
            <fieldset id="a">
                <legend><b>Informe o código do curso desejado:</b></legend>
                <p>Código do curso: <input name="txtCodcurso" type="text" size="20" maxlength="5" placeholder="Código do curso" ></p>
                <br><br>
            </fieldset>
            <fieldset id="b">
                <input class="btn-fieldset" name="btnenviar" type="submit" value="Excluir">&nbsp;&nbsp;
                <input class="btn-fieldset" name="limpar" type="reset" value="Limpar">
            </fieldset>
            <fieldset id="c">
                <legend><b>Resultado: </b></legend>
                    <?php
                        extract($_POST, EXTR_OVERWRITE);
                        if(isset($btnenviar))
                        {
                            include_once 'cursos.php';
                            $p = new cursos();
                            $p ->setCodcurso($txtCodcurso);
                            echo "<h3>" . $p-> exclusao(). "</h3>"; //chamada de método - o $p é o parâmetro enviado
                        }
                    ?>
            </fieldset>
    
        </form>
            
    </main>
</body>
</html>