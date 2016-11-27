<html>
    <head>
        <meta charset="UTF-8">
        <title> SACE </title>   

        <!-- Bootstrap CSS -->
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<!--        <link href="assets/css/bootstrap.css" rel="stylesheet">-->
        <!--
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Ícone -->
        <link rel="icon" type="image/png" href="assets/imgs/icon.png"/>

        <script>
            function formatar(mascara, documento) {
                var i = documento.value.length;
                var saida = mascara.substring(0, 1);
                var texto = mascara.substring(i)

                if (texto.substring(0, 1) != saida) {
                    documento.value += texto.substring(0, 1);
                }

            }
        </script>

    </head>

    <body>

       <div class="login-form">
            <!--<h1>Sace</h1>-->
            <img id="logo" class="profile-img-card" src="assets/imgs/ic_icone_login.png" />
            
            <form class="form-horizontal" action = "login.php" method="post">
                <div class="form-group ">
                    <input id="cpf" class="form-control" name="cpf" type="text" placeholder="CPF" maxlength="14" OnKeyPress= "formatar('###.###.###-##', this)"/>
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group log-status">
                    <div class="controls">
                        <input id="senha" class="form-control" name="senha" maxlength="8" type="password" placeholder="Senha" />
                    <i class="fa fa-lock"></i>
                    </div>
                </div>
                
                <a class="link" href="#">Esqueceu sua senha?</a>
                <button class="log-btn" id="btBorder" type="submit" name="entrar">entrar</button> 
<!--                <button class="log-btn" id="btBorder" type="submit" name="outro">cadastrar</button> -->
            </form>
        </div>
        
                
                
                
          <?php
            /*$var = 2+2;
            if($var==4){
                echo "<div class=\"container\">
                    <div class=\"alert alert-danger alert-dismissable\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                        <strong>Login Inválido</strong> Senha e/ou CPF inválidos, verifique se os dados informados fora digitados corretamente.
                      </div>
                      </div>";
            }*/
          ?>
    </body>

</html>