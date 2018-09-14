<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Admin</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?=base_url()?>assest/admin/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">

                    <?php if ($this->session->flashdata("mesaj"))
                    { ?>

                    <button type="button" class="btn btn-danger btn-rounded">WARNING!
                    
                     <?=$this->session->flashdata("mesaj") ?></button>
                     <?php } ?>

                    <div class="login-title"><strong>Giriş</strong><p> Bilgilerinizi Giriniz</p></div>

                    <form action="login/login_ol" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" name="email" required class="form-control" placeholder="Mail Adresiniz"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="sifre" required class="form-control" placeholder="Şifreniz"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Şifremi Unuttum</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Giriş</button>
                        </div>
                    </div>
                    <div class="login-or">OR</div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-twitter"><span class="fa fa-twitter"></span> Twitter</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                        </div>
                        <div class="col-md-4">                            
                            <button class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</button>
                        </div>
                    </div>
                    
                    </form>
                </div>
                <div class="login-footer">
             
        </div>
        
    </body>
</html>






