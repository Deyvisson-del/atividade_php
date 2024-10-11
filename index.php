<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<br><br>
    <div class="container">

        <form method="post" action="exercicio_1.php">
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome do produto</label>
                <input type="text" name="nome" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Valor do produto</label>
                <input type="text" name="valor" class="form-control" id="exampleInputPassword1">
            </div>
            
            
            <label for="select">Selecione a origem do produto</label><br>
            <select name="escolha" id="select1">
                    
                    <option value="null">Selecione</option>
                    <option value="Importado">Importado</option>
                    <option value="Nacional">Nascional</option>

            </select><br><br>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            
            <button type="submit" class="btn btn-primary">Finalizar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>