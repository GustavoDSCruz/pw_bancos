<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cabecalho.css">
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/index.css">
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
    <form name="cliente" method="POST" action="">
        <fieldset id="a">
            <legend><b>Dados do Produto:</b></legend>
            <p>Número de matrícula: <input name="txtMat" type="text" size="40" maxlenght="40" placeholder="Nome do Aluno"></p>
            <p>Nome: <input name="txtnome" type="text" size="40" maxlenght="40" placeholder="Nome do Aluno"></p>
            <p>Endereço: <input name="txtEnd" type="text" size="40" maxlenght="40" placeholder="Endereço"></p>
            <p>Cidade: <input name="txtCid" type="text" size="40" maxlenght="40" placeholder="São Paulo"></p>
            <p>Código do curso: <input name="txtCodcurso" type="text" size="40" maxlenght="40" placeholder="0"></p>
        </fieldset>
        <br>
        <fieldset id="b">
            <legend><b>Opções: </b></legend>
            <br>
            <input class="btn-fieldset" name="btnenviar" type="submit" value="Cadastrar">&nbsp; &nbsp;
            <input class="btn-fieldset" name="limpar" type="reset" value="Limpar">
        </fieldset>
    </form>
    <?php
	
    extract($_POST, EXTR_OVERWRITE);
	
    if(isset($btnenviar))
		
    {
        include_once 'alunos.php';
        $aluno = new alunos();
		$aluno->setMatricula($txtMat);
        $aluno->setNome($txtnome);
        $aluno->setEndereco($txtEnd);
        $aluno->setCidade($txtCid);
        $aluno->setCodcurso($txtCodcurso);
		
        echo "<h3><br><br>" . $aluno->salvar() . "</h3>";
    }
	
    ?>
    <br>
    
</body>
</html>