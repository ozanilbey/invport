<?php
    include_once('assets/config/directives.php');
    $main = $_GET['main'];
    $sub = $_GET['sub'];
    if(empty($main)) {
        $main = 'anasayfa';
    } else {
        $file = 'assets/config/sitemap.json';
        if(file_exists($file) == true) {
            $json = file_get_contents($file);
            $sitemap = json_decode($json, true);
        }
        if (!empty($main)) {
            if(!array_key_exists($main, $sitemap)) {
                header('404: Sayfa bulunamadı!');
                header('Location: '.$root.'/'.$main.'/'.$sub);
            }
        } else {
            $main = 'anasayfa';
        }
        if (!empty($sub)) {
            if(!array_key_exists($sub, $sitemap[$main])) {
                header('404: Sayfa bulunamadı!');
                header('Location: '.$root.'/'.$main.'/'.$sub);
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta property="og:title" content="<?php
            if (!empty($sub)) {
                echo $sitemap[$main][$sub].' | ';
            }
            echo $main;
    ?>" />
    <meta property="og:type" content="profile" />
    <meta property="og:url" content="<?php echo $root.'/'.$main; if (!empty($sub)) { echo '/'.$sub; } ?>" />
    <meta property="og:image" content="<?php if (!empty($sub)) { echo $root.'/assets/content/'.$main.'/'.$sub.'/thumbnail.png'; } else { echo $root.'/assets/images/thumbnails/'.$main.'.png'; } ?>" />
    <meta property="og:description" content="" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:site_name" content="" />
    <title><?php
            if (!empty($sub)) {
                echo $sitemap[$main][$sub].' | ';
            }
            echo $main;
    ?></title>
    <link rel="icon" type="image/png" href="<?php echo $root; ?>/assets/images/identity/inoport-icon.png">
    
    <link type="text/css" rel="stylesheet" href="<?php echo $root; ?>/assets/styles/reset.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $root; ?>/assets/styles/generic.css">
    <?php
        $file = 'assets/styles/'.$main.'.css';
        if (file_exists($file) == true) {
            print '<link type="text/css" rel="stylesheet" href="'.$root.'/assets/styles/'.$main.'.css">';
        }
    ?>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo $root; ?>/assets/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $root; ?>/assets/scripts/generic.js"></script>
    <?php
        $file = 'assets/scripts/'.$main.'.js';
        if (file_exists($file) == true) {
            print '<script type="text/javascript" src="'.$root.'/assets/scripts/'.$main.'.js"></script>';
        }
    ?>
</head>
<body id="<?php echo $main; ?>"<?php if(!empty($sub)) { echo ' class="'.$sub.'"'; } ?>>
    <nav>
        <div class="menu container">
            <a class="identity active" href="#/">
                <img src="<?php echo $root; ?>/assets/images/identity/logo.png">
            </a>
            <a href="#/<?php echo $root; ?>/nedir">NEDİR?</a>
            <a href="#/<?php echo $root; ?>/projeler">PROJELER</a>
            <a href="#/<?php echo $root; ?>/haberler">HABERLER</a>
            <a href="#/<?php echo $root; ?>/iletisim">İLETİŞİM</a>
            <a href="#/<?php echo $root; ?>/uyelik">ÜYE OL</a>
            <a href="#/<?php echo $root; ?>/giris">GİRİŞ YAP</a>
            <a class="switch" href="#">
                <img class="menu-icon" src="<?php echo $root; ?>/assets/images/interface/icon_menu.png">
                <img class="close-icon" src="<?php echo $root; ?>/assets/images/interface/icon_close.png">
            </a>
        </div>
    </nav>
    <?php
        if(empty($sub)) {
            include('assets/views/'.$main.'.php');
        } else {
            include('assets/views/'.$main.'/'.$sub.'.php');
        }
    ?>
    <footer>
        <div class="container">
            <div class="information">
                <div class="left">
                    <b>ESOGÜ Teknoloji Transfer Ofisi</b>
                    <br>
                    Eskişehir Osmangazi Üniversitesi Rektörlüğü
                    <br>
                    3. Kat Ofis No: 329-331-323-333-334
                    <br>
                    <b>Telefon:</b> <a class="link" href="tel:+902222293954">0 (222) 229 39 54</a>
                    <br>
                    <b>Faks:</b> <a class="link" href="tel:+902222396406">0 (222) 239 64 06</a>
                    <br>
                </div>
                <div class="middle">
                    <a href="https://"><img src="<?php echo $root; ?>/assets/images/logos/logo-esogu.png" /></a>
                    <br>
                    <a href="https://"><img src="<?php echo $root; ?>/assets/images/identity/logo.png" /></a>
                </div>
                <div class="right">
                    <b>Website:</b> <a class="link" href="https://ettom.ogu.edu.tr">https://ettom.ogu.edu.tr</a>
                    <br>
                    <b>E-Posta Adresi:</b> <a class="link" href="mailto:ettom@ogu.edu.tr">ettom@ogu.edu.tr</a>
                    <br>
                    <b>Facebook:</b> <a class="link" href="http://facebook.com/ttoettom">facebook.com/ttoettom</a>
                    <br>
                    <b>Instagram:</b> <a class="link" href="http://instagram/ttoettom">instagram/ttoettom</a>
                    <br>
                    <b>Twitter:</b> <a class="link" href="http://twitter.com/ttoettom">twitter.com/ttoettom</a>
                </div>
            </div>
            <div class="partners">
                <a href="https://"><img src="<?php echo $root; ?>/assets/images/logos/logo-otek.png" /></a>
                <a href="https://"><img src="<?php echo $root; ?>/assets/images/logos/logo-ettom.png" /></a>
                <a href="https://"><img src="<?php echo $root; ?>/assets/images/logos/logo-eso.png" /></a>
            </div>
        </div>
    </footer>
</body>
</html>