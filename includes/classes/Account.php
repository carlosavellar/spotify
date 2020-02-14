<?php
    class Account{

        private $errorArray;

        public function __construct(){
            $this->errorArray = array();
        }
        
        public function register($us, $fn, $ln, $em, $em2, $pw, $pw2){
            $this->validadeUsername($us);
            $this->validadeFirstName($fn);
            $this->validadeLastName($ln);
            $this->validadeEmails($em, $em2);
            $this->validadePassword($pw, $pw2);
        }
        private function validadeUsername($us){
                if(strlen($us) > 25 || strlen($us) < 5){
                    array_push($this->errorArray, "User name must between 5 and 25 caracteres");
                    return;
                }

                // TODO: check iof username axist
        }
        
        private function validadeFirstName($fn){
            if(strlen($fn) > 25 || strlen($fn) < 2){
                array_push($this->errorArray, "User name must between 2 and 25 caracteres");
                return;
            }
        }
        
        private function validadeLastName($ln){
            if(strlen($ln) > 25 || strlen($ln) < 2){
                array_push($this->errorArray, "User name must between 2 and 25 caracteres");
                return;
            }
        }
        
        private function validadeEmails($em, $em2){
            if($em != $em2){
                array_push($this->errorArray, "This emails don´t match");
                return;
            }
            if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
                array_push($this->errorArray, "This emails is invalid");
                return;
            }
        }
        
        private function validadePassword($pass, $pass2){
            
        }
    }
?>