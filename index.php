<?php
if (isset($_COOKIE['user'])) {
    header('Location: scriptPhp/authorized.php');
}else{
//-----------------------------------------------------?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <script src="script/script.js" defer></script>
            <link rel="stylesheet" type="text/css" href="style/yniSexStyle.css">
            <link rel="stylesheet" type="text/css" href="style/style.css">
            <title>авторизация</title>
        </head>
        <body>
            <div class="body">
                <div class="block_auth" id="visibil">
                    <h1 class="big_black_dick">форма авторизации</h1>
                    <form action="auth/auth.php" method="post">
                        <label> 
                            <span>введите имя</span>
                            <input type="text" class="input" name="login" value="<?=$_COOKIE['reg']?>"> 
                        </label>
                        <label> 
                            <span>введите пороль</span>
                            <input type="password" class="input" name="password">   
                        </label>
                        <div class="vibor">
                            <div class="vibor_ell1">
                                <button type="submit">авторизоваться</button>
                            </div>
                            <div class="vibor_ell2">
                                <input type="button" id="est" value="нет аккаунта?">
                            </div>
                        </div>
                    </form>
                </div>  
                <div class="block_reg" id="none">
                    <h1 class="big_black_dick">форма регистрации</h1>
                    <form action="auth/reg.php" method="post">
                        <label> 
                            <span>как вас обзывать?</span>
                            <input type="text" class="input" name="login">  
                        </label>
                        <label> 
                            <span>придумай пороль</span>
                            <input type="password" class="input" name="password">   
                        </label>
                        <div class="vibor">
                            <div class="vibor_ell1">
                                <button type="submit">зарегаться</button>
                            </div>
                            <div class="vibor_ell2">
                                <input type="button" id="net" value="есть аккаунт?">
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
        </body>
        </html>
<?php
}
?>