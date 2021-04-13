<?php

class Permissions extends model {

private $group;
private $permissions;

        public function setGroup($id, $id_company){
            $this->group = $id;

            $this->db->prepare("SELECT params FROM permissions_group WHERE id = :id AND id_company = :id_company");
            $this->bindValue(':id, $id');
            $this->bindValue(':id_company, $id_company');
            $sql->execute();

            if ($sql -> rowCount() > 0){
                $row = $sql -> fetch();

                if (empty($row['params'])){
                    $row['params'] = '0';
                }

                $row = explode(',', $row);

                $sql = $this->db->prepare("SELECT name FROM permissions_params WHERE id IN (:id) AND id_company = :id_company");
                $sql->bindvalue('id', $row['params']);
                $sql->bindvalue(':id_company', $id_company);
                $sql->execute();

                if($sql->rowCount() > 0){
                    $p = $sql->fetchAll();
                    foreach($sql->fetchAll() as $item){
                        $this->permissions [] = $item['name'];
                    }
                }

            }
        }
}

