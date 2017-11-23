<?php
namespace App\Models;

use Foundation\Database\Model;

class Imoveis extends Model
{
    public function getTableName() {
        return "tbl_imobel_cad";
    }
}