<?php
include_once 'conexao.php';
include_once '../Model/moradorModel.php';

    class MoradorDAO{

        public static function inserir($morador){

            $sql = "INSERT INTO moradores (nome, bloco, apartamento, email, datadenascimento,
            datadeaquisicao, telefone, cpf) VALUES"
            ."('".$morador->getNome()."','".$morador->getBloco()."',
            '".$morador->getApartamento()."','".$morador->getEmail()."',
            '".$morador->getData_nasc()."','".$morador->getData_aqui()."',
            '".$morador->getTelefone()."','".$morador->getCpf()."');";
            Conexao::executar($sql);

        }

        public static function buscar(){
            $sql = "SELECT nome, bloco, apartamento, email, datadenascimento, datadeaquisicao, 
            telefone, cpf, id FROM moradores ORDER BY nome";
            $result = Conexao::consultar($sql);
            $lista = new ArrayObject();
            if($result != null){
                while(list($_nome, $_bloco, $_apartamento, $_email, $_data_nasc, $_data_aqui, 
                $_telefone, $_cpf, $_id)
                 = mysqli_fetch_row($result)){
                    $morador = new Morador();
                    $morador->setId($_id);
                    $morador->setNome($_nome);
                    $morador->setBloco($_bloco);
                    $morador->setApartamento($_apartamento);
                    $morador->setEmail($_email);
                    $morador->setData_nasc($_data_nasc);
                    $morador->setData_aqui($_data_aqui);
                    $morador->setTelefone($_telefone);
                    $morador->setCpf($_cpf);
                    $lista->append($morador);
                }
            }
            return $lista;
        }

        public static function buscarPorId($id){
            $sql = "SELECT id, nome, bloco, apartamento, email, datadenascimento, datadeaquisicao, telefone, cpf FROM moradores
            WHERE id=".$id;
            $result = Conexao::consultar($sql);
            if($result != null){
                list($_id, $_nome, $_bloco, $_apartamento, $_email, $_data_nasc, $_data_aqui, $_telefone, $_cpf) = mysqli_fetch_row($result);
                    $morador = new Morador();
                    $morador->setId($_id);
                    $morador->setNome($_nome);
                    $morador->setBloco($_bloco);
                    $morador->setApartamento($_apartamento);
                    $morador->setEmail($_email);
                    $morador->setData_nasc($_data_nasc);
                    $morador->setData_aqui($_data_aqui);
                    $morador->setTelefone($_telefone);
                    $morador->setCpf($_cpf);
            }
            return $morador;
        }

        public static function editar($morador){
            $sql = "UPDATE moradores SET "
                    ."nome = '".$morador->getNome()."',"
                    ."bloco = '".$morador->getBloco()."',"
                    ."apartamento = '".$morador->getApartamento()."',"
                    ."email = '".$morador->getEmail()."',"
                    ."datadenascimento = '".$morador->getData_nasc()."',"
                    ."datadeaquisicao = '".$morador->getData_aqui()."',"
                    ."telefone = '".$morador->getTelefone()."',"
                    ."cpf = '".$morador->getCpf()."'"
                    ."WHERE id = ".$morador->getId();
                    echo ($sql);
            Conexao::executar($sql);
        }

        public static function excluir($id){
            $sql = "DELETE FROM moradores WHERE id=".$id;
            echo $sql;
            Conexao::executar($sql);
        }

    }

?>