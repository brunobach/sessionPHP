<!DOCTYPE html>
<html lang="pt-br">

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css"/>  
  <title>Cadastro de Usuario</title>
</head>

<body>
    <br>
    <div class="container jumbotron w-25">
        <h1 class="display-4">Cadastre-se</h1>
        <hr class="my-4">
        <form action="valida_cadastro.php" method="POST" onSubmit="return valida_campos()">
            <div class="form-group">
                <label for="inputAddress">Seu e-mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Seu e-mail">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" class="form-control" id="senha" placeholder="Senha">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Confirme a Senha</label>
                    <input type="password" name="senha" class="form-control" id="senha_confirmacao" placeholder="Confirme a senha">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Seu Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome">
            </div>
                     <div class="form-group"> 
                         <label class="control-label" for="date">Data de Nascimento</label>
                        <input class="form-control" startDate="01/11/2019"  id="date" name="date" placeholder="DD/MM/YYYY" type="text"/>
                    </div>
            <div class="form-group">
                <label for="inputSexo">Sexo</label>
                <select class="form-control" name="sexo" id="inputSexo">
                    <option>masculino</option>
                    <option>feminino</option>
                </select>
            </div>
            <div class="row mx-n2">
                <div class="col-md px-2">
                    <button type="submit" class="btn btn-lg btn-primary w-100 mb-2">CADASTRAR</button>
                </div>
                <div class="col-md px-2">
                    <a href="/login.php" class="btn btn-lg btn-success w-100 mb-2">LOGIN</a>
                </div>
            </div>
        </form>
    </div>
</body>
<script type="text/javascript">
            $(document).ready(function(){
            var date_input=$('input[name="date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            var options={
            format: 'dd/mm/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
            language:"pt-BR",
      };
      date_input.datepicker(options);
    })
    $("#StartDate").data("startdate")
function valida_campos(){
    if(document.getElementById('email').value == '')
    {alert('Preencha com seu e-mail.')
    
    document.getElementById('email').focus()
    return false
    }
    if(document.getElementById('senha').value == '' || document.getElementById('senha').value != document.getElementById('senha_confirmacao').value)
    {alert('As senhas precisam ser iguais!!!')
    
    document.getElementById('senha').focus()
    return false
    }

    if(document.getElementById('nome').value == '')
    {alert('Preencha o seu nome.')
    
    document.getElementById('nome').focus()
    return false
    }
}

</script>
</html>
