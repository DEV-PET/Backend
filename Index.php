<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dev&Pet</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="Css/login.css">
</head>

<body>
    <div class="sidenav">
        <div class="login-main-text">
            <h2>Aplicação<br>Página de login</h2>
            <p>Entre ou cadastre-se para obter o acesso.</p>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label>Usuário</label>
                        <input type="text" name="user" class="form-control" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" name="password" class="form-control" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-black">Login</button>
                    <button type="submit" class="btn btn-secondary">cadastre-se</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</html>