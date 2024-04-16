<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionar cor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h2>Selecionar cor de fundo</h2>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $corFundo = $_POST["cor_fundo"];

            echo "<style>body {background-color: $corFundo;}</style>";
            echo "<div class='alert alert-success'>Cor de fundo atualizada com sucesso!</div>";
        } 
    ?>
   <form method="post">
    <div class="form-group">
         <label for="cor_fundo">Escolha uma cor:</label>
         <input type="color" id="cor_fundo" name="cor_fundo" class="form-control">
    </div>

        <button type="submit" class="btn btn-primary">Aplicar</button>
        </form>
</div>



</body>
</html>
