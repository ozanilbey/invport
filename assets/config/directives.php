<?php
    $root = 'http://'.$_SERVER['SERVER_NAME'];
    if (!empty($_SERVER['SERVER_PORT'])) {
        $project = 'invport';
        $root = $root.':'.$_SERVER['SERVER_PORT'].'/'.$project;
    }
?>