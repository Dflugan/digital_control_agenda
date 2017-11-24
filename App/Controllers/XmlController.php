<?php

namespace App\Controllers;

use Foundation\Controller;
use App\Models\Imoveis;

class XmlController extends Controller {

    public function index() {
        $imoveis = (new Imoveis)->getAll();
        $this->render('xml/index', [
            'imoveis' => $imoveis
        ]);
        return $xml = $this->renderXml('bkp/backup');
    }

//    public function backup() {
//        
//
//        // Definimos o novo nome do arquivo
//        $novoNome = 'imoveis.xml';
//        // Configuramos os headers que serão enviados para o browser
//        header('Content-Description: File Transfer');
//        header('Content-Disposition: attachment; filename="' . $novoNome . '"');
//        header('Content-Type: application/octet-stream');
//        header('Content-Transfer-Encoding: binary');
//        header('Content-Length: ' . filesize($xml));
//        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
//        header('Pragma: public');
//        header('Expires: 0');
//// Envia o arquivo para o cliente
//        return readfile($aquivoNome);
//    }

}
