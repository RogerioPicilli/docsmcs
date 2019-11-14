<?php 
class Permissions extends model {

	private $group;
	private $permissions;

	public function setGroup($id, $id_company) {
		$this->group = $id;
		$this->permissions = array();

		$sql = $this->db->prepare("SELECT params FROM permission_groups WHERE id = :id AND id_company = :id_company");
		$sql->bindValue(':id', $id);
		$sql->bindValue(':id_company', $id_company);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$row = $sql->fetch();
			$params = $row['params']; //NAO PRECISA DO EXPLORE PQ VAMOS GUARDAR NO DB SEPARADOS POR VIRGULA

			if(empty($row['params'])){  //vai acontecer quando não houver nenhuma permissao e para não dar erro
				$row['params'] = '0';  //no bindValue abaixo criamos uma com zero que não terá qq direito 
			}

			$sql = $this->db->prepare("SELECT name FROM permission_params WHERE id IN ($params)  AND id_company = :id_company");
			$sql->bindValue(':id_company', $id_company);
			$sql->execute();

			if($sql->rowcount() > 0) {
				$p = $sql->fetchAll();
				foreach($p as $item) {
					$this->permissions[] = $item['name'];
				}
			}
		}
	}

	public function hasPermission($name) {
		if(in_array($name, $this->permissions)) {
			return true;
		} else {
			return false;
		}
	}
}