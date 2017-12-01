<?php

return [

    /*
     * Aqui pode-se documentar as páginas do sistema, para facilitar
     * a escrita dos redirecionamentos. Exemplo:
     *
     * return Redirect::route('index');
     *
     * Sintaxe:
     *
     * 'nome' => ['controlador', 'método']
     */


    'index'     => ['index', 'index'],
    
    'index.lista'     => ['index', 'lista'],
    
    'index.cont'     => ['index', 'cont'],
    
    'busca.index'     => ['busca', 'index'],
    
    'busca.search'     => ['busca', 'search'],
    
    'busca.search_lista'     => ['busca', 'search_lista'],

    'eventos.index'  => ['eventos', 'index'],

    'eventos.cadastrar'  => ['eventos', 'cadastrar'],

    'eventos.salvar'  => ['eventos', 'salvar'],

    'cadastro.teste' => ['cadastro', 'teste'],
    
    'cadastro.index' => ['cadastro', 'index'],

    'cadastro.salvar' => ['cadastro', 'salvar'],
    
    'cadastro.delete' => ['cadastro', 'delete'],
    
    'cadastro.editar' => ['cadastro', 'editar'],
    
    'cadastro.editarCadastro' => ['cadastro', 'editarCadastro'],
    
    'cadastro.login' => ['cadastro', 'login'],
    
    'cadastro.cadastroImoveis' => ['cadastro', 'cadastroImoveis'],
    
    'cadastro.delete_lista' => ['cadastro', 'delete_lista'],

    'login.logar' => ['login', 'logar'],

    'login.index' => ['login', 'index'],

    'login.logout' => ['login', 'logout'],
    
    'menu.index' => ['menu', 'index'],
    
    'menu.index' => ['menu', 'index'],
    
    'eventos.deletar' => ['eventos', 'deletar'],
    
    'pessoa.index' => ['pessoa', 'index'],
    
    'pessoa.deletar' => ['pessoa', 'deletar'],
    
    'pessoa.cadastrar' => ['pessoa', 'cadastrar'],
    
    'pessoa.editar' => ['pessoa', 'editar'],
    
    'pessoa.editar' => ['pessoa', 'editar'],
    
    'search.index' => ['search', 'index'],
    
    'xml.index' => ['xml', 'index'],
    
    'xml.ler' => ['xml', 'ler'],
    
    'lista.index' => ['lista', 'index']


];
