<?php

class FlisolModel{

	private $categoria_id;
	private $nome;
	private $email;
	private $telefone;
	private $cidade;
	private $endereco;

	public function getCategoriaId(){
        return $this->categoria_id;
    }

	public function setCategoriaId($categoria_id){
        $this->categoria_id = $categoria_id;
        return $this;
    }
      
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }
      
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }
      
    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
        return $this;
    }
      
    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
        return $this;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
        return $this;
    }

    public function addInscrito(){

		$email = $this->verificarEmail();

		if(!$email){

			try {
				$params = array(
	                ':categoria_id' => $this->getCategoriaId(),
	                ':nome' => $this->getNome(),
	                ':email' => $this->getEmail(),
	                ':endereco' => $this->getEndereco(),
	                ':telefone'=> $this->getTelefone(),
	                ':cidade' => $this->getCidade()
	            );

				$pdo = new PDO('mysql:host=localhost;dbname=flisol', "root", "root");

				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $stmt = $pdo->prepare('INSERT INTO inscritos (categoria_id, nome, email, endereco, telefone, cidade) VALUES(:categoria_id, :nome, :email, :endereco, :telefone, :cidade)');
			    $stmt->execute($params);

			    return 'true'; 
		    } catch(PDOException $e) {
		    	echo 'Error: ' . $e->getMessage();
			}
		}else{		
			$this->atualizarInscrito();
		}
	}	

	public function verificarEmail(){

		$pdo = new PDO('mysql:host=localhost;dbname=flisol', "root", "root");

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$query = "SELECT email FROM inscritos WHERE email='".$this->getEmail()."'";
	    $stmt = $pdo->prepare($query);
	    $stmt->execute();
		$value = $stmt->fetch(PDO::FETCH_ASSOC);

		if($value){
			return true;
		}

	    return false;
	}

	public function atualizarInscrito(){

		$pdo = new PDO('mysql:host=localhost;dbname=flisol', "root", "root");

		$query = "UPDATE inscritos SET categoria_id='".$this->getCategoriaId()."', 
				  nome='".$this->getNome()."', endereco='".$this->getEndereco()."', 
				  telefone='".$this->getTelefone()."', cidade='".$this->getCidade()."'
				  WHERE email='".$this->getEmail()."'";

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $stmt = $pdo->prepare($query);
	    $stmt->execute();

	    return true;
	}

}
?>	