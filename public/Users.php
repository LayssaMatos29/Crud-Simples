<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="crud">
        <h3>Lista de Usuarios</h3>

        <?php
            require('../app/Database.php');
            $Database = new Database();
            $sql = "SELECT * FROM usuarios WHERE id > :id";
            $binds = ['id' => 0];
            $result = $Database->select($sql, $binds);
            if($result->rowCount() >0){
                $dados = $result ->fetchAll(PDO::FETCH_OBJ);
                foreach ($dados as $item){
                    echo "Nome: {$item->nome} <br>";
                    echo "Email: {$item->email} <br>";
                    echo "Descrição: {$item->descricao} <br>";
                }
            }else{
                echo "Não possui usuários cadastrados";
            }
                                
        ?>


    </div>
</body>
</html>