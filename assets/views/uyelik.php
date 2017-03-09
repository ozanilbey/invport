<header>
    <div class="container">
        <h1>Hoşgeldin! Hadi başlayalım...</h1>
        <p>Aşağıdaki formu doldurarak üyeliğini oluştur. Kayıtlı kullanıcıysan <a class="link" href="<?php echo $root; ?>/giris">buradan giriş yap</a>.</p>
        <div class="sign">
            <a class="option active" href="#">Fikir Sahibi Üyeliği</a>
            <a class="option" href="#">Firma Üyeliği</a>
            <div class="form">
                <form name="signupForm" id="signupForm" method="post" action="" novalidate="">
                    <fieldset>
                        <input id="fullname" type="text" name="fullname" size="30" placeholder="Adını ve soyadını gir">
                        <input id="email" type="text" name="email" size="30" placeholder="Email adresini gir">
                        <input id="password" type="text" name="password" size="30" placeholder="Şifreni oluştur">
                        <div class="checkbox">
                            <div class="boolean"></div>
                            <a href="" target="_blank">Üyelik Sözleşmesi</a>'ni okudum ve kabul ediyorum.
                            <input id="authorization" type="checkbox" name="authorization" />
                        </div>
                        <button id="submit" class="submit on" type="submit" disabled="">GİRİŞ YAP</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</header>