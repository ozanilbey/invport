<header>
    <div class="container">
        <img class="icon" src="<?php echo $root; ?>/assets/images/icons/bilgisayarmuhendisligi.png">
        <h1>Otizmli Çocuklar için Eğitim Uygulaması</h1>
    </div>
</header>
<section class="details">
    <div class="container">
        <p class="single">Proje önerinizi aşağıdaki alana yazabilirsiniz.</p>
    </div>
</section>
<section class="information">
    <div class="editable container">
        <h2>H2 - Öneri Başlığı</h2>
        <h3>H3 - Alt Başlık</h3>
        <p>P - Proje önerisinin yer alacağı örnek paragraf bu şekilde görünecek. Burada bulunan tüm yazıları seçerek değiştirebilirsiniz, resim ekleyebilir ve kaldırabilirsiniz.</p>
        <img src="<?php echo $root; ?>/assets/content/sample-project/image01.png">
        <p>Yukarıdaki resmi kaldirarak kendi resimlerinizi eklemeyi deneyin.</p>
        <h3>Bir Diğer Alt Başlık</h3>
        <p>Bu bölgede yer alan yazıları seçtiğinizde, onları değiştirebildiğinizi göreceksiniz. Yazıları <b>kalın</b>, <u>altı çizili</u> ya da <i>italik</i> yapabilirsiniz. İsterseniz <a href="http://www.google.com.tr">bir link</a> de ekleyebilirsiniz.</p>
    </div>
</section>
<section class="action">
    <div class="container">
        <a href="#" class="button" role="button">TASLAK KAYDET</a>
        <a href="#" class="caution button" role="button">TASLAĞI SİL</a>
    </div>
</section>
<script type="text/javascript" src="<?php echo $root; ?>/assets/scripts/editor.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>/assets/vendor/medium-editor/js/medium-editor.min.js"></script>
<script>
    var editor = new MediumEditor('.editable');
</script>
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $root; ?>/assets/vendor/medium-editor/css/medium-editor.min.css">
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $root; ?>/assets/vendor/medium-editor/css/theme.css">