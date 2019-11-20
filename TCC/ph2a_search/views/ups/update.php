<form action="index.php?controller=ups$action=update" method="post">
	<input type="hidden" name="cpf" value="<?php echo$post->getCpf()?>">
	<p> Nome: <input type="text" name="nome" value="<?php echo $ups->getNome()?>"></p>
	<p> Cpf <input type="text" name="cpf" value="<?php echo $ups->getCpf()?>"></p>
	<p> Telefone: <input type="text" name="telefone" value="<?php echo $ups->getTelefone()?>"></p>
	<p> Email <input type="text" name="email" value="<?php echo $ups->getEmail()?>"></p>
	<p> Endereco: <input type="text" name="endereco" value="<?php echo $ups->getEndereco()?>"></p>
	<p> Area_atuacao <input type="text" name="area_atuacao" value="<?php echo $ups->getAArea_atuacao()?>"></p>
	<p> Senha <input type="text" name="senha" value="<?php echo $ups->getSenha()?>"></p>
	<p><input type="submit" value="Gravar"></p>
</form>