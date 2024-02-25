<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocaFácil</title>

    <link rel="stylesheet" href="main.css".css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>
    <form action="./login.php" method="POST">
    <div class="container position-relative">


    <div class="card" id="cardLogin">
    <img src="IMAGEM/Logo.png" class="card-img-top" alt="logo">
      
    <div class="card-corpo">
        <p class="texto-card">
            <div class="mb-8">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu e-mail">
            </div>
            <div class="mb-8">
                <label for="senha" class="form-label">Senha</label>
                <input type="senha" name="senha" id="senha" class="form-control" placeholder="Digite sua senha" aria-describedby="password">
            </div>
        <br>
            <div class="mb-12">
               
                    <button type="submit" class="btn btn-outline-primary">Enviar</button>
                
        </p>
    </div>
    </div>
     </div>

    </form>
</body>
</html>