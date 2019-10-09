<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Logar</title>
</head>

<body>
    <br>
    <div class="container jumbotron w-25">
        <h1 class="display-4">Logar-se</h1>
        <hr class="my-4">
        <form action="valida_login.php" method="POST" id="form">

            <div class="form-group">
                <label for="inputAddress">Seu e-mail</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail">
            </div>
            
            <div class="form-group">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
            </div>
                
            <div class="row mx-n2">
                    <div class="col-md px-2">
                        <button type="submit" class="btn btn-lg btn-primary w-100 mb-2">LOGIN</button>
                    </div>
                    <div class="col-md px-2">
                        <a href="/cadastro.php" class="btn btn-lg btn-success w-100 mb-2">CADASTRAR</a>
                    </div>
                </div>
        </form>
    </div>
</body>

</html>