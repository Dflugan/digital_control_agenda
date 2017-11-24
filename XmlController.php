<?php
namespace App\Controllers;

use Foundation\Controller;
use App\Models\Imoveis;

class XmlController extends Controller
{
    public function index(){
        $imoveis = (new Imoveis)->getAll();
        $this->render('xml/index',[
            'imoveis'=>$imoveis
        ]);
        return $this->renderXml('bkp/backup');
    }
}