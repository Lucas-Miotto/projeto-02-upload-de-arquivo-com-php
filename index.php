<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Adicionar arquivo</title>
</head>

<body>
    <div id="container">
        <h1>Adicionar arquivo</h1>
        <form action="src/upload.php" method="post" enctype="multipart/form-data">
            <p>
                <label for="arquivo">Selecione o arquivo:</label>
                <input type="file" name="arquivo" id="arquivo">
            </p>
            <p>
                <button class="botao">
                    Enviar
                </button>
            </p>
        </form>
    </div>
</body>

</html>