<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Formulário</title>
    <!-- Inclua o jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<form id="meuForm">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="xp">Experiência:</label>
    <input type="number" id="xp" name="xp" required>

    <button type="button" onclick="enviarForm()">Enviar</button>
</form>

<div id="resultado"></div>

<script>
    function enviarForm() {
        var nome = $("#nome").val();
        var xp = $("#xp").val();

        $.ajax({
            type: "POST",
            url: "consulta.php",
            data: {nome: nome, xp: xp},
            success: function (response) {
                $("#resultado").html(response);
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
</script>

</body>
</html>
