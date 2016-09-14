<?php
class homeController extends controller{
    public function index(){
        $usuario = new usuario();

        $usuario->setName('Davi');
        
        $dados = array(
            'name' =>$usuario->getName()
        );
        
        $this->loadView('home',$dados);
    }
}

