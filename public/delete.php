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
        <h3>Exclusão de cadastro</h3>

        <?php
            require('../app/Database.php');
            $sql = "DELETE FROM usuarios WHERE id = :id";
            $binds = ['id'=> 1];
            $Database=new Database();
            $result = $Database->delete($sql, $binds);
            if ($result){
                echo "Excluido com sucesso";
            }else{
                echo "Erro na exclusão";
            }
        ?>



    </div>
</body>
</html>