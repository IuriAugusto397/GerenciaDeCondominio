<?php
        //classe será usada apenas se o login do sindico usar uma tabela do database
    class Sindico{

        private $login;
        private $senha;

        public function __construct($login = NULL, $senha = NULL){

            $this->login = $login;
            $this->senha = $senha;

        }

        public function getLogin()
        {
                return $this->login;
        }

        public function setLogin($login)
        {
                $this->login = $login;

                return $this;
        }

        public function getSenha()
        {
                return $this->senha;
        }

        public function setSenha($senha)
        {
                $this->senha = $senha;

                return $this;
        }

    }

?>