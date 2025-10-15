<?php

class ControllerInicio{
    
    public function inicio(){
        require_once VIEW_PATH. 'template_public.php';
        require_once PUBLIC_VIEW_PATH . 'inicio.php';
    }
    
    public function error(){
        echo "Página no encontrada";
    }
    
}

?>
