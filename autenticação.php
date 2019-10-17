<?php
    session_start();
    require("conexao.php");
    $login = $_POST['login'];
    $query =  "SELECT senha FROM usuarios WHERE login='$login'"; 

    $select = pg_query($conn, $query) or die( pg_error());

    if (pg_num_rows($select)<=0) {

        header('location: login.html');
    }
       
    while ($row = pg_fetch_assoc($select)){
        $a= $row['senha'] ;

    }
    if( password_verify( $_POST['senha'], $a)){
        md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
        $_SESSION['login'] = $login;

        header('location:pgprincipal.php');
    
    }
    else{
        unset ($_SESSION['login']);
        header('location:login.html');
    

    }
    
   /**como a senha está hasheada, selecionei apenas o login e para cada vez que eu tivesse no banco
    *  meu login igual ao
    * que o usuário digitasse, pegaria o registro da senha correspondente ao login do mesmo, e verificaria
    com o password_verify se a senha que digitei correspondia com a criptografia
     contida no banco, se sim entro, se não não entro na página e volto a tela de login */

    

   




    


            

           
/**selecionei os que eram iguais e fiz uma condição, se o numero de vezes que selecionasse fosse 0, não estaria logado
 * pois não selecionaria o banco, se não, ele teria selecionado o que tava guardado igual no banco, então estaria logado.
 */
?>
