<?php
	//Arquivo: posts_controller.php
	
	class UEController{

		public function show(){
			$ue = Ue::all();
			require_once("views/ue/insert.php");
			require_once("views/ue/show.php");
		}
		public function insert(){
			ue::insert(new Ue(0,
						$_POST["nome"],
						$_POST["cpf"],
						$_POST["telefone"],
						$_POST["email"],
						$_POST["endereco"],
						$_POST["senha"],
						));
			$ue = Ue::all();
			require_once("views/ue/insert.php");
			require_once("views/ue/show.php");
		}
		public function delete(){
			ue::delete($_GET["cpf"]);
			$ue = Ue::all();
			require_once("views/ue/insert.php");
			require_once("views/ue/show.php");
		}

		public function update(){
			if(isset($_POST["cpf"])){
				Ue::update(new Ue($_POST["nome"], $_POST["cpf"], $_POST["telefone"], $_POST["email"], $_POST["endereco"], $_POST["senha"]));

				$ue = Ue::all();
				require_once("views/ups/insert.php");
				require_once("views/ups/show.php");
			} else{
				$ue=new Ue($_GET["cpf"], "", "");
				require_once("views/ue/update.php");
			}
		}

	}
?>