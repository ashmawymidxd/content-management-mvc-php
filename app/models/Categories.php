<?php
namespace ahmed\models;

use ahmed\core\DB;

class Categories extends DB{

    public function insertCategory($data){
        return $this->insert($data);
    }

    public function getCategories(){
        return $this->select();
    }

    public function deleteCategory($id){
        return $this->delete($id);
    }

    public function upgradeCategory($data){
        return $this->update($data);
    }

    public function countCategory($query){
        return $this->sqlQuery($query);
    }
    
}