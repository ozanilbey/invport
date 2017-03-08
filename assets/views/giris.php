<header>
    <div class="container">
        <h1>Hoşgeldin! Seni özlemiştik...</h1>
        <p>Üyelik bilgilerinle giriş yap. Kayıtlı kullanıcı değilsen <a class="link" href="<?php echo $root; ?>/uyelik">buradan üye ol</a>.</p>
        <div class="login">
            <a class="option active" href="#">Fikir Sahibi Girişi</a>
            <a class="option" href="#">Firma Girişi</a>
            <div class="form">
                <form name="loginForm" id="loginForm" method="post" action="" novalidate="">
                    <fieldset>
                        <input placeholder="Email adresini gir" name="email" type="text" id="email" size="30" required="">
                        <input placeholder="Şifreni gir" name="password" type="text" id="password" size="30" required="">
                        <button id="submit" type="submit" class="submit on" disabled="">GİRİŞ YAP</button>
                    </fieldset>
                </form>
            </div>
            <a class="reminder link" href="#">Şifremi unuttum</a>
        </div>
    </div>
</header>