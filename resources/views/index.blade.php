<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <script src="/js/jquery.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="/js/bootstrap.js"></script>
        <script src="/js/login.js"></script>
        <title>CRUD - Login </title>
    </head>
    <body>
        <div class="container text-center">
            <div class="col-sm-4"></div>
            <div id="div_login" class="col-sm-4">
                <h3>Bem-vindo!</h3>
                <form class="form-horizontal col-lg-10 col-lg-offset-1" id="form_login" action="/logar" method="post">
                    {!!csrf_field()!!}
                    <div class="form-group">
                        <input type="email" name="usuario" placeholder="Digite seu email" class="form-control" required="true"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="senha" placeholder="Digite sua senha" class="form-control" required="true"/>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="entrar" id="entrar" class="btn btn-primary btn-block">ENTRAR</button>
                    </div>
                </form>
                <div class="col-sm-12">
                    @if(\Session::has('error'))
                    <div class="alert alert-danger">
                         <a href="/login" class="close" data-dismiss='alert' arial-label="close">&times;</a>
                       {{\Session::get('error')}}
                    </div>
                    @endif
                </div>
            </div>
    </body>    
</html>