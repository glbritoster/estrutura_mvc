<?php

class homeController extends controller{
    
    public function index(){   
        $anuncios = new Anuncios();
        $usuario = new Usuarios();
        
        $dados = array(
            'quantidade'=> $anuncios->getQuantidade() ,
            'nome' => $usuario->getNome(),
            'idade' => $usuario->getIdade()
        );        
        $this->loadTemplate('home', $dados);
        
    }
    
}