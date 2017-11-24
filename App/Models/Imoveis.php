<?php
namespace App\Models;

use Foundation\Database\Model;
use Foundation\Controller;
use App\Models\Login;
use App\Models\Imoveis;

class Imoveis extends Model
{
    public function getTableName() {
        return "tbl_imobel_cad";
    }
    
    public function search($search){
        $query = "SELECT * FROM tbl_imobel_cad WHERE codigo='{$search}'";
        $imoveis= $this->db->select($query);
        return $imoveis;
    }
}