<?php

    $db = mysqli_connect('localhost', 'id20995045_root', 'Backend-23', 'id20995045_tpintegrador');


    if(!$db) {
        echo "It wasn't possible to connect to the Database";
        echo "Depuration errno: " . mysqli_connect_errno();
        echo "Depuration error: " . mysqli_connect_error();
        exit;
    };
