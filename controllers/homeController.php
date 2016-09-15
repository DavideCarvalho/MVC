<?php
class homeController extends controller{
    public function index(){
        
        $dados = array(
            'name'=>'Davi'
        );
        
        $this->loadTemplate('home',$dados);
    }
}

