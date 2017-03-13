<header>
    <div class="container">
        <h1>Hoşgeldin! Seni özlemiştik...</h1>
        <p>Üyelik bilgilerinle giriş yap. Kayıtlı kullanıcı değilsen <a class="link" href="<?php echo $root; ?>/uyelik">buradan üye ol</a>.</p>
        <div class="sign">
            <a id="uye" class="option active" href="#">Fikir Sahibi Girişi</a>
            <a id="firma" class="option" href="#">Firma Girişi</a>
            <div class="form">
                <form name="loginForm" id="loginForm" method="post" action="" novalidate="">
                    <fieldset>
                        <input id="email" type="text" name="email" size="30" placeholder="Email adresini gir" required="">
                        <input id="password" type="text" name="password" size="30" placeholder="Şifreni gir" required="">
                        <button id="submit" class="submit on" type="submit" disabled="">GİRİŞ YAP</button>
                    </fieldset>
                </form>
            </div>
            <a class="reminder link" href="#">Şifremi unuttum</a>
        </div>
    </div>
</header>
<!-- The code below is not to be published in working copy -->
<script type="text/javascript">
    $(document).ready(function() {
        $('button').click(function(e){
            e.preventDefault();
            var root = '<?php echo $root; ?>';
            var user = $('.option.active').attr('id');
            window.location.replace(root + '/' + user + '/profil');
        });
    });
</script>