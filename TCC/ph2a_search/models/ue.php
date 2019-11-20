<?php
	// Arquivo post.php

	class Post{
		private $nome;
		private $cpf;
		private $telefone;
		private $email;
		private $endereco;
		private $senha;
		
		public function __construct($nome, 
			$cpf, $telefone, $email, $endereco,  $senha ){
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->telefone = $telefone;
			$this->email = $email;
			$this->endereco = $endereco;
			$this->senha = $senha;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getCpf(){
			return $this->Cpf;
		}
		public function setCpf($Cpf){
			$this->Cpf = $Cpf;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function setTelefone($telefone){
			$this->telefone = $telefone;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function getEndereco($endereco){
			return $this->endereco;
		}
		public function setEndereco($endereco){
			$this->endereco = $endereco;
		}
		public function getSenha($senha){
			return $this->senha;
		}
		public function setSenha($senha){
			$this->senha = $senha;

		public static function all(){
			$bd = Db::getInstance();
			$list = [];
			$req = $bd->query('SELECT * FROM ue');
			foreach ($req->fetchAll() as $ue) {
				$list[] = new Ue(	$ue['nome'],
									$ue['cpf]'],
									$ue['telefone']
									$ue['email'],
									$ue['endereco'],
									$ue['senha']); 
			}
			return $list;
		}

		public static function insert($ue){
			$bd = Db::getInstance();
			$req = $bd->prepare("INSERT INTO 
							ue(nome, cpf, telefone, email, endereco, senha)
							VALUES(:nome, :cpf, :telefone, :email, :endereco, :senha)");
			$req->execute(array("nome" => $ue->nome,
							"cpf" => $ups->cpf, "telefone" => $ue->telefone,
							"email" => $ue->email, "endereco" => $ue->endereco,
							"senha" => $ue->senha,
							  ));
		}
		public static function delete($cpf){
			$bd = Db::getInstance();
			$cpf = intval($cpf);
			$req = $bd->prepare("DELETE FROM ue
								 WHERE cpf=:cpf");
			$req->execute(array("cpf"=>$cpf));
		}

		public static function update($ue){
			$bd = Db::getInstance();
			$req = $bd->prepare("UPDATE ue SET autor = :autor, conteudo = :conteudo WHERE id= :id");
			$req->execute(array("nome" => $ue->nome, "cpf" => $ue->cpf, "telefone" => $ue->telefone, "email" => $ue->email, "endereco" => $ue->endereco, "senha" => $ue->senha));
		}

	}
?>