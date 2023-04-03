<?php

    class Morador{

        private $nome;
        private $bloco;
        private $apartamento;
        private $email;
        private $data_nasc;
        private $data_aqui;
        private $telefone;
        private $cpf;

        public function __construct($nome = NULL, $bloco = NULL, $apartamento = NULL,
        $email = NULL, $data_nasc = NULL, $data_aqui = NULL, $telefone = NULL,
        $cpf = NULL){
            $this->nome = $nome;
            $this->bloco = $bloco;
            $this->apartamento = $apartamento;
            $this->email = $email;
            $this->data_nasc = $data_nasc;
            $this->data_aqui = $data_aqui;
            $this->telefone = $telefone;
            $this->cpf = $cpf;
        }

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        public function getBloco()
        {
                return $this->bloco;
        }

        public function setBloco($bloco)
        {
                $this->bloco = $bloco;

                return $this;
        }

        public function getApartamento()
        {
                return $this->apartamento;
        }

        public function setApartamento($apartamento)
        {
                $this->apartamento = $apartamento;

                return $this;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        public function getData_nasc()
        {
                return $this->data_nasc;
        }

        public function setData_nasc($data_nasc)
        {
                $this->data_nasc = $data_nasc;

                return $this;
        }

        public function getData_aqui()
        {
                return $this->data_aqui;
        }

        public function setData_aqui($data_aqui)
        {
                $this->data_aqui = $data_aqui;

                return $this;
        }

        public function getTelefone()
        {
                return $this->telefone;
        }

        public function setTelefone($telefone)
        {
                $this->telefone = $telefone;

                return $this;
        }

        public function getCpf()
        {
                return $this->cpf;
        }

        public function setCpf($cpf)
        {
                $this->cpf = $cpf;

                return $this;
        }

    }

?>