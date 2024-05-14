<?php 
    define('HOST', 'localhost');
    define('USER', 'id22132424_root');
    define('PASS', 'Guiju@1502');
    define('BASE', 'id22132424_bancosisteman');

    $conn = new MySQLi(HOST, USER, PASS, BASE);

    /*define('HOST2', 'localhost');
    define('USER2', 'root');
    define('PASS2', '');
    define('BASE2', 'cad_usuarios');

    $connCad = new MySQLi(HOST2, USER2, PASS2, BASE2);

    if($connCad->connect_errno)
    {
        echo "Erro";
    }
    else 
    {
        echo "Conecção banco cadastro efetuado com sucesso";
    }*/

?>