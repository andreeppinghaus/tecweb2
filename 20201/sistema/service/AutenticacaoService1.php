<?php

class AutenticacaoService1 {
    
    public function verificaLogin() {
        
        
        if (! isset($_SESSION["logou"])) {
            $this->deslogar();        
        }
    
    
    }
    
    public function deslogar() {
        session_destroy();

        header("Location: https://aula-php-andre-eppinghaus.000webhostapp.com/index.html"); 

    }
}