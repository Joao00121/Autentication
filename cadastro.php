<?php
    require("conexao.php");
/** requeri a conexão com o banco, para a integração dele com o php*/ 
    
    $login = $_POST['login'];
    $telegram = $_POST['telegram'];
    $email = $_POST['email'];
 
    $senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);
    $cpf = $_POST['cpf'];
    $datad = $_POST['datad'];
/**peguei os valores digitados do cliente na tela*/

    $selecionar ="SELECT login FROM usuarios where login='$login'"; 
    $loginigual = pg_query($conn, $selecionar);

    if (pg_num_rows($loginigual)==1){

        header("Location:telacadastro.html");
    
    

   
}
/** aqui fiz a condição para se eu pegasse algum valor que fosse igual ao login criado, eu voltasse para a tela
 * pois o cadastro já havia sido feito, dessa forma não se pode ter 2 logins iguais.
 */
    else{
        $query = "INSERT INTO usuarios (login, senha, email, telegram, cpf, datadenascimento) VALUES ('$login', '$senha', '$email','$telegram', '$cpf', '$datad')";
        $insert = pg_query($conn, $query);
    
        if ($insert)
            {
            echo "cadastrado";
            }
   
    } 

    
/**inseri no banco de dados os valores digitados*/



    
    
    
/** se o login for único, insiro no banco de dados os valores digitados*/



     
?>



