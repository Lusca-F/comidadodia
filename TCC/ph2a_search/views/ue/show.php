<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

<table id="Usario Empregador">
	<thead>
		<tr>
			
			<th>Nome</th>
			<th>Cpf</th>
			<th>Telefone</th>
			<th>Email</th>
			<th>Endereco</th>
			<th>Senha</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($ue as $ue) {
				echo "<tr>";
				echo "<td>".$ue->getNome()."</td>";
				echo "<td>".$ue->getCpf()."</td>";
				echo "<td>".$ue->getTelefone()."</td>";
				echo "<td>".$ue->getEmail()."</td>";
				echo "<td>".$ue->getEndereco()."</td>";
				echo "<td>".$ue->getSenha()."</td>";
				echo "<td>"."<a href=index.php?controller=ue&action=delete&id=".$ue->getCpf()."> deletar</a> "."<a href=index.php?controller=ue&action=update&id=".$ue->getCpf()."> atualizar</a> "."</td>";

			}
		?>
	</tbody>
</table>