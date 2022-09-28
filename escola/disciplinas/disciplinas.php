<?php
include_once '../conectar.php';

//parte 1- atributos
class disciplinas
{
	private $CodDisciplina;
	private $NomeDisciplina;
	private $conn;

//parte 2 - os gettes e setter
public function getCodDisciplina(){
	return $this->CodDisciplina;
}
public function setCodDisciplina($c_CodDisciplina){
	return $this->CodDisciplina = $c_CodDisciplina;
} 
public function getNomeDisciplina(){
	return $this->NomeDisciplina;
}
public function setNomeDisciplina($nameDisciplina){
	return $this->NomeDisciplina = $nameDisciplina;
}
//parte 3 - métodos 


function listar()
{
try
{
	$this-> conn = new Conectar();
    $sql = $this->conn->query ("select * from disciplinas order by CodDisciplina");
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
		$sql = $this->conn->prepare ("insert into disciplinas values (?, ?)");
		@$sql-> bindParam(1, $this->getCodDisciplina(), PDO::PARAM_STR);
		@$sql-> bindParam(2, $this->getNomeDisciplina(), PDO::PARAM_STR);
		
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
		$sql = $this->conn->prepare("delete from disciplinas where CodDisciplina = ?");//informei o ? (parâmetro)
		@$sql ->bindParam(1, $this->getCodDisciplina(), PDO::PARAM_STR);//inclui esta linha para definir o parâmetro
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
		$sql = $this-> conn->prepare("select * from disciplinas where NomeDisciplina like ?");
		@$sql ->bindParam(1, $this->getNomeDisciplina(), PDO::PARAM_STR);
		if($sql->execute()==1)
		return $sql->fetchAll();
		$this->conn =null;
	}	
	catch(PDOException $exc)
	{
		echo "Erro ao executar consulta" . $exc->getMessage();
	}
}

} //encerramento da classe Disciplinas



?>
</body>
</html>