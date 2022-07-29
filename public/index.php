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
        <h3>Cadastro de Usuarios</h3>
        <form action="" method="POST">
            <input type="text" name="nome" placeholder="nome">
            <input type="email" name="email" id="" placeholder="email">
            <textarea name="descricao" id="" cols="30" rows="10" placeholder="descrição"></textarea>
            <button type="submit">Cadastrar</button>
        </form> 
    

        <?php
            require('../app/Database.php');
                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
                $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
                if(!empty($nome) && !empty($email) &&!empty($descricao)){
                    $Database = new Database();
                    $sql = "INSERT INTO usuarios SET nome = :nome, email = :email, descricao = :descricao";
                    $binds = ['nome' => $nome, 'email' => $email, 'descricao' => $descricao];
                    $result = $Database->insert($sql, $binds);
                    if($result){
                        echo "Cadastro feito com sucesso";
                    }else{
                        echo "Erro no cadastro";
                    }
                }
        ?>



    </div>
</body>
</html>