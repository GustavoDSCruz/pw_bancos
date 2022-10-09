<html>
<head>
<meta charset ="UTF-8">
<link rel="stylesheet" href="../css/cabecalho.css">
<link rel="stylesheet" href="../css/rodape.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/listar.css">
<title></title>

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
   <main class="main-listAlunos">
   <h1>ALUNOS CADASTRADOS</h1><br>
      
      <?php 
         include_once 'alunos.php';
         $p= new alunos();
         $pro_bd=$p->listar();
      ?>
      <titulos class="alunos" >
         <titulo>Matrícula &nbsp;&nbsp;&nbsp;&nbsp;</titulo> 
         <titulo>Nome &nbsp;&nbsp;&nbsp;&nbsp;</titulo> 
         <titulo>Endereço &nbsp;&nbsp;&nbsp;&nbsp;</titulo>
         <titulo>Cidade &nbsp;&nbsp;&nbsp;&nbsp;</titulo> 
         <titulo>Código Curso &nbsp;&nbsp;&nbsp;&nbsp;</titulo> 
      </titulos>
      <conteudo class="alunos">
         <?php
            
            foreach($pro_bd as $pro_mostrar)
            {
         ?>
            <br><br> 
            
            <campo><?php echo $pro_mostrar[0]; ?> &nbsp;&nbsp;&nbsp;&nbsp;</campo>  
            <campo><?php echo $pro_mostrar[1]; ?> &nbsp;&nbsp;&nbsp;&nbsp;</campo>  
            <campo><?php echo $pro_mostrar[2]; ?> &nbsp;&nbsp;&nbsp;&nbsp;</campo>  
            <campo><?php echo $pro_mostrar[3]; ?> &nbsp;&nbsp;&nbsp;&nbsp;</campo>  
            <campo><?php echo $pro_mostrar[4]; ?> &nbsp;&nbsp;&nbsp;&nbsp;</campo>     
         <?php
         }
            echo "";
         ?> 
      </conteudo>
      
   </main>

</body>
</html> 