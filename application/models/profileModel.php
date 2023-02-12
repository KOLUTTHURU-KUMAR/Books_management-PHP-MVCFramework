<?php 

class profileModel extends database {

    public function addFruit($fruit){
        if($this->Query("INSERT INTO clothes (name, price, size, material, color, userId) VALUES (?,?,?,?,?,?)", $fruit)){
            return true;
        }
    }

    public function getData($userId){
        if($this->Query("SELECT * FROM clothes WHERE userId = ? ", [$userId])){
            $data = $this->fetchAll();
            return $data;
        }
    }

    public function edit_data($id, $userId){
        if($this->Query("SELECT * FROM clothes WHERE id = ? && userId = ? ", [$id, $userId])){
            $row = $this->fetch();
            return $row;
        }
    }

    public function updateFruit($updateData){
        if($this->Query("UPDATE clothes SET name = ? , price = ? , size = ?, material = ?, color = ? WHERE id = ? AND userId = ? ", $updateData)){
            return true;
        }
    }

    public function deleteFruit($id, $userId){
        if($this->Query("DELETE FROM clothes WHERE id = ? && userId = ? ", [$id, $userId])){
            return true;
        }
    }

}


?>