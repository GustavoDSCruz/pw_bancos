<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/cabecalho.css">
    <link rel="stylesheet" href="../css/cadastrar.css">

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
        <form name="cliente" method="POST" action="consultar_alt2.php">
            <fieldset id="a">
                <legend><b>Informe o ID do curso desejado: </b></legend>
                <p>Id: <input name="txtCodcurso" type="text" size="20" maxlenght="5" placeholder="ID do Curso"></p>
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