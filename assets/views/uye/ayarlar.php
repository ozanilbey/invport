<!--
Bu sayfadaki bilgiler yalnızca üyenin kendisi tarafından görülebilecek.
Bu sayfadaki bilgiler daha önce hiç oluşturulmamışsa value değerleri boş gelecek.
Resime tıklanması durumunda resim seçici açılacak ve seçilen resim yüklenip adresi mevcut div etiketinin background-image url'ine yazılacak.
-->
<header>
    <div class="edit container">
        <div class="picture" style="background-image: url(<?php echo $root; ?>/assets/images/interface/picture-blank.png);"></div>
        <h1>
            <input id="username" type="text" name="username" size="50" placeholder="Lütfen buraya adınızı girin." value="Ozan İlbey Yılmaz"/>
        </h1>
        <p>
            <input id="useroccupation" name="useroccupation" rows="1" cols="50" placeholder="Lütfen buraya mesleğinizi girin." value="Öğrenci" />
            <br/>
            <input id="userinstitution" name="userinstitution" rows="1" cols="50" placeholder="Lütfen buraya okulunuzu/işyerinizi girin." value="Orta Doğu Teknik Üniversitesi" />
            <br/>
            <textarea id="useraddress" name="useraddress" rows="1" cols="50" placeholder="Lütfen buraya adresinizi girin.">İşçi Blokları Mh 1540 Sk 119/5 Çankaya/Ankara</textarea>
            <br/>
            <input id="userphone" name="userphone" rows="1" cols="50" placeholder="Lütfen buraya telefon numaranızı girin." value="0 (533) 745 97 35" />
        </p>
        <a class="password" href="<?php echo $root; ?>/sifre">Şifre değiştirmek için tıklayın</a>
    </div>
</header>
<section class="save">
    <div class="container">
        <button>DEĞİŞİKLİKLERİ KAYDET</button>
    </div>
</section>