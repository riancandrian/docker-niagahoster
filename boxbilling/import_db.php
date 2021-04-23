<?php

    define('BB_PATH_ROOT', realpath(dirname(__FILE__) . '/sql'));
    define('BB_PATH_SQL', BB_PATH_ROOT . '/structure.sql');
    define('BB_PATH_SQL_DATA', BB_PATH_ROOT . '/content.sql');

    $host = getenv('DB_HOST');
    $user = getenv('DB_USER');
    $pass = getenv('DB_PASS');
    $db   = getenv('DB_NAME');

    $pdo = new \PDO('mysql:host='.$host,
        $user,
        $pass,
        array(
            \PDO::MYSQL_ATTR_USE_BUFFERED_QUERY         => true,
            \PDO::ATTR_ERRMODE                          => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE               => \PDO::FETCH_ASSOC,
        )
    );

    $pdo->exec( 'SET NAMES "utf8"' );
    $pdo->exec( 'SET CHARACTER SET utf8' );
    $pdo->exec( 'SET CHARACTER_SET_CONNECTION = utf8' );
    $pdo->exec( 'SET CHARACTER_SET_DATABASE = utf8' );
    $pdo->exec( 'SET character_set_results = utf8' );
    $pdo->exec( 'SET character_set_server = utf8' );
    $pdo->exec( 'SET SESSION interactive_timeout = 28800' );
    $pdo->exec( 'SET SESSION wait_timeout = 28800' );

    // try create database if permissions allows
    try {
        $pdo->exec("CREATE DATABASE `$db` CHARACTER SET utf8 COLLATE utf8_general_ci;");
    } catch (PDOException $e) {
        error_log($e->getMessage());
    }

    $pdo->query("USE $db;");

    // $pdo = $this->getPdo($host, $db, $user, $pass);

    $sql = file_get_contents(BB_PATH_SQL);
    $sql_content = file_get_contents(BB_PATH_SQL_DATA);

    if (!$sql || !$sql_content) {
        throw new Exception('Could not read structure.sql file');
    }

    $sql .= $sql_content;

    $sql = preg_split('/\;[\r]*\n/ism', $sql);
    $sql = array_map('trim', $sql);
    $err = '';
    foreach ($sql as $query) {
        if (!trim($query)) {
            continue;
        }

        $res = $pdo->query($query);
    }

    $stmt = $pdo->prepare("INSERT INTO admin (role, name, email, pass, protected, created_at, updated_at) VALUES('admin', :admin_name, :admin_email, :admin_pass, 1, NOW(), NOW());");
    $stmt->execute(array(
        'admin_name'  => 'Admin',//$ns->get('admin_name'),
        'admin_email' => 'admin@niagahoster',//$ns->get('admin_email'),
        'admin_pass'  => '$2y$10$hAACuYIhiOVYR.iQjqeJeeeGqn4GkuxoSjOb1snmRHmTawh7ZV1GO',
    ));

    echo 'Import data berhasil dilakukan, silahkan klik <a href="index.php">disini</a> untuk kembali ke halaman sebelumnya';
?>