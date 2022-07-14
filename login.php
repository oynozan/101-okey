<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>101 Okey | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="background"></div>
    <div class="container-fluid desktop-form-container max-width-1920">
        <div class="row h-100">
            <div class="col-2"></div>
            <div class="col-8 my-auto form-container">
                <div class="row button-menu-container">
                    <div class="col-12">
                        <div class="button-menu">
                            <button>ANA SAYFA</button>
                            <button>İLETİŞİM</button>
                            <button>AYARLAR</button>
                            <button>KULLANIM KOŞULLARI</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 login-container">
                        <form class="login">
                            <h1>Giriş Yap</h1>
                            <input placeholder="Kullanıcı adı veya E-Posta">
                            <input type="password" placeholder="Şifre">
                            <input type="submit" value="Giriş Yap">
                            <a href="#">Şifremi Unuttum</a>
                        </form>
                    </div>
                    <div class="col-7 register-container">
                        <form class="register">
                            <h1>Kayıt Ol</h1>
                            <input placeholder="Ad Soyad">
                            <input placeholder="Kullanıcı Adı">
                            <input type="email" placeholder="E-Posta">
                            <input type="password" placeholder="Şifre">
                            <input type="submit" value="Hesap Oluştur">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <div class="container-fluid mobile-form-container max-width-1920">
        <div class="row h-100">
            <div class="col-1"></div>
            <div class="col-10 my-auto form-container">
                <div class="row h-100">
                    <div class="col-12 my-auto login-container">
                        <form class="login">
                            <h1>Giriş Yap</h1>
                            <input placeholder="Kullanıcı adı veya E-Posta">
                            <input type="password" placeholder="Şifre">
                            <input type="submit" value="Giriş Yap">
                            <p>Hesabın yok mu? <a class="show-register-container">Hesap Oluştur</a></p>
                            <a href="#" class="forgot-password">Şifremi Unuttum</a>
                        </form>
                    </div>
                    <div class="col-12 my-auto register-container">
                        <form class="register">
                            <h1>Kayıt Ol</h1>
                            <input placeholder="Ad Soyad">
                            <input placeholder="Kullanıcı Adı">
                            <input type="email" placeholder="E-Posta">
                            <input type="password" placeholder="Şifre">
                            <input type="submit" value="Hesap Oluştur">
                            <p>Zaten hesabın var mı? <a class="show-login-container">Giriş Yap</a></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/resolution.js"></script>

    <script>
        $(".show-login-container").click(function() {
            $(".register-container").hide();
            $(".login-container").show();
        });
        $(".show-register-container").click(function() {
            $(".login-container").hide();
            $(".register-container").show();
        });
    </script>
</body>
</html>
