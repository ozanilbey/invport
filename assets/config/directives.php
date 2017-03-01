<?php
    $root = 'http://'.$_SERVER['SERVER_NAME'];
    if ($_SERVER['SERVER_PORT'] == '9000') {
        $project = 'inoport';
        $root = $root.':'.$_SERVER['SERVER_PORT'].'/'.$project;
    }
?>