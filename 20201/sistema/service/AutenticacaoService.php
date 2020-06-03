<?php

class AutenticacaoService {
    
    public function verificaLogin() {
        if (! isset($_SESSION["logou"])) {
          $this->deslogar();
        }
        
    }
    
    public function deslogar() {
        header("Location: https://aula-php-andre-eppinghaus.000webhostapp.com/index.html"); 
        session_destroy();
    }
    
}
