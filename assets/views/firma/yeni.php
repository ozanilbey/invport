<header>
    <div class="edit container">
        <img class="icon" src="<?php echo $root; ?>/assets/images/icons/blank.png">
        <form name="signupForm" id="signupForm" method="post" action="" novalidate="">
            <fieldset>
                <h1>
                    <input id="projectname" type="text" name="projectname" size="50" placeholder="Lütfen buraya proje başlığı girin." value=""/>
                </h1>
                <p>
                    <textarea id="projectdescription" name="projectdescription" cols="50" placeholder="Lütfen buraya kısa açıklama girin."></textarea>
                </p>
            </fieldset>
        </form>
    </div>
</header>
<section class="details">
    <div class="edit container">
        <form name="signupForm" id="signupForm" method="post" action="" novalidate="">
            <fieldset>
                <p class="item"><input id="projectprize" type="text" name="projectprize" size="50" placeholder="Ödül miktarı girin" value=""/></p>
                <p class="item"><input id="projectdeadline" type="text" name="projectdeadline" size="50" placeholder="Son katılım tarihi girin" value=""/></p>
                <button class="item dropdown">
                    <a data-number="0" href="#">Endüstri tipi seçin</a>
                    <a data-number="1" href="#bilgisayarmuhendisligi">Bilgisayar Mühendisliği</a>
                    <a data-number="2" href="#gida-tarim">Gıda &amp; Tarım</a>
                    <a data-number="3" href="#matematik-istatistik">Matematik &amp; İstatistik</a>
                    <a data-number="4" href="#tasarim-mimari">Tasarım &amp; Mimari</a>
                    <a data-number="5" href="#saglik">Sağlık</a>
                </button>
                <input style="display: none;" id="projectindustry" type="text" name="projectindustry" size="50" placeholder="Sektör seçin." value="0"/>
            </fieldset>
        </form>
    </div>
</section>
<section class="information">
    <div class="editable container">
        <h2>H2 - Örnek Başlık</h2>
        <h3>H3 - Alt Başlık</h3>
        <p>P - Proje açıklamasının yer alacağı örnek paragraf bu şekilde görünecek. Burada bulunan tüm yazıları seçerek değiştirebilirsiniz, resim ekleyebilir ve kaldırabilirsiniz.</p>
        <img src="<?php echo $root; ?>/assets/content/sample-project/image01.png">
        <p>Yukarıdaki resmi kaldirarak kendi resimlerinizi eklemeyi deneyin.</p>
        <h3>Bir Diğer Alt Başlık</h3>
        <p>Bu bölgede yer alan yazıları seçtiğinizde, onları değiştirebildiğinizi göreceksiniz. Yazıları <b>kalın</b>, <u>altı çizili</u> ya da <i>italik</i> yapabilirsiniz. İsterseniz <a href="http://www.google.com.tr">bir link</a> de ekleyebilirsiniz.</p>
    </div>
</section>
<section class="action">
    <div class="container">
        <a href="#" class="button" role="button">KAYDET</a>
        <a href="#" class="caution button" role="button">İPTAL ET</a>
    </div>
</section>
<script type="text/javascript" src="<?php echo $root; ?>/assets/scripts/editor.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>/assets/vendor/medium-editor/js/medium-editor.min.js"></script>
<script>
    var editor = new MediumEditor('.editable');
</script>
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $root; ?>/assets/vendor/medium-editor/css/medium-editor.min.css">
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $root; ?>/assets/vendor/medium-editor/css/theme.css">