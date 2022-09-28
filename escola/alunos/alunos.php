<?php
include_once '../conectar.php';

//parte 1- atributos
class alunos
{
	private $matricula;
	private $nome;
	private $endereco;
	private $cidade;
	private $codcurso;
    private $conn;

//parte 2 - os gettes e setter
public function getMatricula(){
	return $this->matricula;
}
public function setMatricula($c_matricula){
	return $this->matricula = $c_matricula;
} 
public function getNome(){
	return $this->nome;
}
public function setNome($name){
	return $this->nome = $name;
}
public function getEndereco(){
	return $this->endereco;
}
public function setEndereco($c_endereco){
	return $this->endereco = $c_endereco;
}
public function getCidade(){
	return $this->cidade;
}
public function setCidade($c_cidade){
	return $this->cidade = $c_cidade;
}public function getCodcurso(){
	return $this->codcurso;
}
public function setCodcurso($c_codcurso){
	return $this->codcurso = $c_codcurso;
}

//parte 3 - métodos 


function listar()
{
try
{
	$this-> conn = new Conectar();
    $sql = $this->conn->query ("select * from alunos order by matricula");
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
		$sql = $this->conn->prepare ("insert into alunos values (?, ?, ?, ?, ?)");
		@$sql-> bindParam(1, $this->getMatricula(), PDO::PARAM_STR);
		@$sql-> bindParam(2, $this->getNome(), PDO::PARAM_STR);
		@$sql-> bindParam(3, $this->getEndereco(), PDO::PARAM_STR);
		@$sql-> bindParam(4, $this->getCidade(), PDO::PARAM_STR);
		@$sql-> bindParam(5, $this->getCodcurso(), PDO::PARAM_STR);

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
function exclusao()
{
	try
	{
		$this-> conn = new Conectar();
		$sql = $this->conn->prepare("delete from alunos where matricula = ?");//informei o ? (parâmetro)
		@$sql ->bindParam(1, $this->getMatricula(), PDO::PARAM_STR);//inclui esta linha para definir o parâmetro
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
		$sql = $this-> conn->prepare("select * from alunos where nome like ?");
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

//encerramento da classe Alunos
}


?>
</body>
</html>