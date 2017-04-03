<!--
Bu sayfadaki bilgiler yalnızca firmanın kendisi tarafından görülebilecek.
Bu sayfadaki bilgiler daha önce hiç oluşturulmamışsa value değerleri boş gelecek.
Logoya tıklanması durumunda resim seçici açılacak ve seçilen resim yüklenip adresi mevcut img etiketinin içine yazılacak.
-->
<header>
    <div class="edit container">
        <img class="logo" src="<?php echo $root; ?>/assets/images/interface/logo-blank.png">
        <fieldset>
            <h1>
                <input id="companyname" type="text" name="companyname" size="50" placeholder="Lütfen buraya firma adını girin." value="TÜLOMSAŞ"/>
            </h1>
            <p>
                <textarea id="companydescription" name="companydescription" rows="1" cols="50" placeholder="Lütfen buraya kısa açıklama ya da slogan girin.">Türkiye Lokomotif ve Motor Sanayi A.Ş.</textarea>
                <br/>
                <textarea id="companyaddress" name="companyaddress" rows="1" cols="50" placeholder="Lütfen buraya firma adresini girin.">Ahmet Kanatlı Caddesi 26490 Eskişehir/Türkiye</textarea>
            </p>
            <a class="password" href="<?php echo $root; ?>/sifre">Şifre değiştirmek için tıklayın</a>
            <div class="checkbox">
                <div class="boolean"></div>
                Firma bilgileri herkese açık olsun.
                <input id="authorization" type="checkbox" name="authorization" />
            </div>
        </fieldset>
    </div>
</header>
<section class="details">
    <div class="edit container">
        <fieldset>
            <p class="item"><input id="companyphone" type="text" name="companyphone" size="50" placeholder="Telefon Numarası" value="0 (222) 224 00 00"/></p>
            <p class="item"><input id="companyfax" type="text" name="companyfax" size="50" placeholder="Faks Numarası" value="0 (222) 225 72 72"/></p>
            <p class="item"><input id="companyweb" type="text" name="companyweb" size="50" placeholder="Website Adresi" value="tulomsas.com.tr"/></p>
        </fieldset>
    </div>
</section>
<section class="save">
    <div class="container">
        <button>DEĞİŞİKLİKLERİ KAYDET</button>
    </div>
</section>