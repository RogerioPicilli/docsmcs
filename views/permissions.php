<h3>Permissions</h3>

<div class="tabarea">
	<div class="tabitem activetab">Grupos de Permissões</div>
	<div class="tabitem">Permissões</div>
</div>
<div class="tabcontent">
	<div class="tabbody" style="display: block"> <!-- La no css está escondento todos aqui selecione esta -->
		GRUPO DE PERMISSÕES		
	</div>
	<div class="tabbody">

		<a href="<?php echo BASE_URL; ?>/permissions/add">Adicionar Permissão</a>
		
		<table border="0" width="100%">
			<tr>
				<th>Nome da Permissão</th>
				<th>Ações</th>
			</tr>
			<?php foreach($permissions_list as $item): ?>
				<tr>
					<td><?php echo $item['name']; ?></td>
					<td><a href="<?php echo BASE_URL; ?>/permissions/delete/<?php echo $item['id']; ?>">Excluir</a></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>