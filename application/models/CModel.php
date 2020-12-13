<?php

class CModel extends CI_Model	

{
    private $table ='C_tabel';
    
    public function getall()
    {
        return $this->db->get($this->table)->result();
    }

    public function add($data_input)
    {
        $this->db->insert($this->table, $data_input);

        
    }
}

?>