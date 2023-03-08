<?php
 use Db\Database\Conexao;

class Projecto{
    public static function selecionaTodos(){
        $con = Conexao::getConn();
         
        $sql = "SELECT * FROM ultprojectos";
        $sql= $con->prepare($sql);
        $sql->execute();
     //var_dump($sql->fetchAll());
         $resultado = array();
        
        while ($row = $sql->fetchobject('Projecto')) {
             $resultado[] = $row;
        }
        if (!$resultado) {
            throw new Exception("Não foi encontrado nenhum registro no banco de dados");
        }
        return $resultado;
     }
}

?>