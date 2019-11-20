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

<table id="Usario Prestador">
	<thead>
		<tr>
			
			<th>Nome</th>
			<th>Cpf</th>
			<th>Telefone</th>
			<th>Email</th>
			<th>Endereco</th>
			<th>Area_atuacao</th>
			<th>Senha</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($ups as $ups) {
				echo "<tr>";
				echo "<td>".$ups->getNome()."</td>";
				echo "<td>".$ups->getCpf()."</td>";
				echo "<td>".$ups->getTelefone()."</td>";
				echo "<td>".$ups->getEmail()."</td>";
				echo "<td>".$ups->getEndereco()."</td>";
				echo "<td>".$ups->getArea_atuacao()."</td>";
				echo "<td>".$ups->getSenha()."</td>";
				echo "<td>"."<a href=index.php?controller=ups&action=delete&id=".$ups->getCpf()."> deletar</a> "."<a href=index.php?controller=ups&action=update&id=".$ups->getCpf()."> atualizar</a> "."</td>";

			}
		?>
	</tbody>
</table>