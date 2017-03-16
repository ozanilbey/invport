<header>
    <div class="edit container">
        <img class="icon" src="<?php echo $root; ?>/assets/images/icons/bilgisayarmuhendisligi.png">
        <form name="signupForm" id="signupForm" method="post" action="" novalidate="">
            <fieldset>
                <h1>
                    <input id="projectname" type="text" name="projectname" size="50" placeholder="Lütfen buraya proje başlığı girin." value="Otizmli Çocuklar için Eğitim Uygulaması"/>
                </h1>
                <p>
                    <textarea id="projectdescription" name="projectdescription" cols="50" placeholder="Lütfen buraya kısa açıklama girin.">Otizmli çocukların yoğun ve kaliteli bir eğitim almaları için çocuklara gereken ve eksik kalan eğitimin tablet bilgisayarlar aracılığıyla evde verilmesini amaçlar.</textarea>
                </p>
            </fieldset>
        </form>
    </div>
</header>
<section class="details">
    <div class="edit container">
        <form name="signupForm" id="signupForm" method="post" action="" novalidate="">
            <fieldset>
                <p class="item"><input id="projectprize" type="text" name="projectprize" size="50" placeholder="Ödül miktarı girin" value="5500TL"/></p>
                <p class="item"><input id="projectdeadline" type="text" name="projectdeadline" size="50" placeholder="Son katılım tarihi girin" value="17 Nisan 2017"/></p>
                <button class="item dropdown">
                    <a data-number="0" href="#">Endüstri tipi seçin</a>
                    <a data-number="1" href="#bilgisayarmuhendisligi">Bilgisayar Mühendisliği</a>
                    <a data-number="2" href="#gida-tarim">Gıda &amp; Tarım</a>
                    <a data-number="3" href="#matematik-istatistik">Matematik &amp; İstatistik</a>
                    <a data-number="4" href="#tasarim-mimari">Tasarım &amp; Mimari</a>
                    <a data-number="5" href="#saglik">Sağlık</a>
                </button>
                <input style="display: none;" id="projectindustry" type="text" name="projectindustry" size="50" placeholder="Sektör seçin." value="1"/>
            </fieldset>
        </form>
    </div>
</section>
<section class="information">
    <div class="editable container">
        <p>Otizmli çocukların yoğun ve kaliteli bir eğitim almaları için çocuklara gereken ve eksik kalan eğitimin tablet bilgisayarlar aracılığıyla evde verilmesini amaçlar.</p>
        <h3>Otizm nedir?</h3>
        <p>Otizm üç yaşından önce başlayan ve ömür boyu süren, beynin gelişimini engelleyen bir rahatsızlıktır. The Autism Society‘nin verilerine göre dünya üzerinde otizmli sayısı toplam nüfusun %1,5 ine tekabül etmektedir. Otizmin neden kaynaklandığı bilinmemektedir. Bu nedenle net bir ilaç tedavisi veya tıbbi çözümü yoktur. Otizmin bugün için kabul edilen en önemli tedavi aracı, erken ve yoğun eğitimdir.</p>
        <img src="<?php echo $root; ?>/assets/content/sample-project/image01.png">
        <p>Ülkemizde otizm tanısı olan çocuklar yeterli eğitim alamamaktadırlar. Bunun başlıca sebepleri;</p>
        <ul>
            <li>Otizm eğitiminin çok pahalı olması,</li>
            <li>Devlet desteğinin ve otizm okullarının yetersiz kalması,</li>
            <li>Özel eğitmen ve yetişmiş kişilerin (dil, davranış terapisti vb.) azlığıdır.</li>
        </ul>
        <h3>Çözüm</h3>
        <p>Otizm eğitimini tablet bilgisayarlar üzerinden mobil olarak vermektir. Otizm sendromlu çocuklar için ücretsiz eğitsel oyunlar ve bu çocukların ailelerine veri analizine dayalı kontrol imkanı sunan mobil bir platforma ihtiyaç vardır.</p>
        <img src="<?php echo $root; ?>/assets/content/sample-project/image02.png">
    </div>
</section>
<section class="action">
    <div class="container">
        <a href="#" class="button" role="button">DEĞİŞİKLİKLERİ KAYDET</a>
        <a href="#" class="caution button" role="button">PROJEYİ SİL</a>
    </div>
</section>
<script type="text/javascript" src="<?php echo $root; ?>/assets/scripts/editor.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>/assets/vendor/medium-editor/js/medium-editor.min.js"></script>
<script>
    var editor = new MediumEditor('.editable');
</script>
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $root; ?>/assets/vendor/medium-editor/css/medium-editor.min.css">
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo $root; ?>/assets/vendor/medium-editor/css/theme.css">