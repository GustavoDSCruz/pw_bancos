<?php
include_once '../conectar.php';

//parte 1- atributos
class cursos
{
	private $codcurso;
	private $nome;
	private $coddisc1;
	private $coddisc2;
	private $coddisc3;
    private $conn;

//parte 2 - os gettes e setter
public function getCodcurso(){
	return $this->codcurso;
}
public function setCodcurso($c_codcurso){
	return $this->codcurso = $c_codcurso;
} 
public function getNome(){
	return $this->nome;
}
public function setNome($name){
	return $this->nome = $name;
}
public function getCoddisc1(){
	return $this->coddisc1;
}
public function setCoddisc1($c_coddisc1){
	return $this->coddisc1 = $c_coddisc1;
}
public function getCoddisc2(){
	return $this->coddisc2;
}
public function setCoddisc2($c_coddisc2){
	return $this->coddisc2 = $c_coddisc2;
}public function getCoddisc3(){
	return $this->coddisc3;
}
public function setCoddisc3($c_coddisc3){
	return $this->coddisc3 = $c_coddisc3;
}

//parte 3 - métodos 


function listar()
{
try
{
	$this-> conn = new Conectar();
    $sql = $this->conn->query ("select * from cursos order by codcurso");
	$sql->execute();
    return $sql->fetchAll();
    $this->conn = null;
}
catch (PDOException $exc)
{
	echo "Erro ao execultar consulta.". $exc->getMessage();
}
}

function salvar()
{
   try
	{
		$this-> conn = new Conectar();
		$sql = $this->conn->prepare ("insert into cursos values (?, ?, ?, ?, ?)");
		@$sql-> bindParam(1, $this->getCodcurso(), PDO::PARAM_STR);
		@$sql-> bindParam(2, $this->getNome(), PDO::PARAM_STR);
		@$sql-> bindParam(3, $this->getCoddisc1(), PDO::PARAM_STR);
		@$sql-> bindParam(4, $this->getCoddisc2(), PDO::PARAM_STR);
		@$sql-> bindParam(5, $this->getCoddisc3(), PDO::PARAM_STR);
		
		if($sql->execute() == 1)
		{
			return "Registro Salvo com sucesso!";
		}
    	$this->conn = null;
	}
	catch (PDOException $exc)
	{
    	echo "Erro ao executar consulta.". $exc->getMessage();
    }
}

function alterar(){
	try
	{
		$this-> conn = new Conectar();
		$sql = $this -> conn->prepare("select * from cursos where codcurso = ?");//informei o ? (parâmetro)
		@$sql->bindParam(1, $this->getCodcurso(), PDO::PARAM_STR);//inclui esta linha para definir o parâmtro
		$sql->execute();
		return $sql->fetchAll();
		$this->conn = null;
	}
	catch(PDOException $exc)
	{
		echo "Erro ao alterar. " . $exc->getMessage(); 
	}
}

function alterar2(){
	try
	{
		$this->conn = new Conectar();
		$sql = $this->conn->prepare("update alunos set nome = ?, coddisc1 = ?, coddisc2 = ?, coddisc3 = ? where codcurso LIKE ?");
		@$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
		@$sql->bindParam(2, $this->getCoddisc1(), PDO::PARAM_STR);
		@$sql->bindParam(3, $this->getCoddisc2(), PDO::PARAM_STR);
		@$sql->bindParam(4, $this->getCoddisc3(), PDO::PARAM_STR);
		@$sql->bindParam(5, $this->getCodcurso(), PDO::PARAM_STR);
		if($sql->execute()==1)
		{
			return "Registro alterado com sucesso!";
		}
		$this->conn = null;
	}
	catch(PDOException $exc)
	{
		echo "Erro ao salvar o registro. " . $exc->getMessage();
	}
}
function exclusao()
{
	try
	{
		$this-> conn = new Conectar();
		$sql = $this->conn->prepare("delete from cursos where codcurso = ?");//informei o ? (parâmetro)
		@$sql ->bindParam(1, $this->getCodcurso(), PDO::PARAM_STR);//inclui esta linha para definir o parâmetro
		if($sql->execute()==1)
		{
			return "Excluído com sucesso!";
		}
		else{
			return "Erro na exclusão!";
		}
		$this->conn=null;
	}
	catch(PDOException $exc)
	{
		echo "Erro ao excluir." . $exc->getMessage();
	}
}

function consultar()
{
	try
	{
		$this-> conn = new Conectar();
		$sql = $this-> conn->prepare("select * from cursos where nome like ?");
		@$sql ->bindParam(1, $this->getNome(), PDO::PARAM_STR);
		if($sql->execute()==1)
		return $sql->fetchAll();
		$this->conn =null;
	}	
	catch(PDOException $exc)
	{
		echo "Erro ao executar consulta" . $exc->getMessage();
	}
}


} //encerramento da classe Cursos



?>
</body>
</html>