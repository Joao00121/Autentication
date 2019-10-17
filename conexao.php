<?php
     $servidor = "localhost";
     $porta = 5432;
     $bancoDeDados = "TESTE";
     $usuario = "postgres";
     $senha = "joao";

     $conn = pg_connect("host=localhost port=5432 dbname=TESTE user=postgres password=joao");
     if(!$conn) {
         die("Não foi possível se conectar ao banco de dados.");
     }

     /** aqui fiz a conexão com o banco de dados TESTE, colocando os dados correspondentes e usando a função
      * pg_connect
      */
    