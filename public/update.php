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
        <h3>Atualização de cadastro</h3>

        <?php
            require('../app/Database.php');
            $sql = "UPDATE usuarios SET descricao = :descricao WHERE id = :id";
            $binds = ['descricao'=>'Olá me chamo Alex Jesus','id'=> 1];
            $Database=new Database();
            $result = $Database->update($sql, $binds);
            if ($result){
                echo "Atualizado com sucesso";
            }else{
                echo "Erro na atualização";
            }
        ?>



    </div>
</body>
</html>