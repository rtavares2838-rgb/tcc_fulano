<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Chamar Senha</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Painel de Atendimento</h2>
    <form action="acao_chamar.php" method="post">
        <label>Selecione o Guichê:</label>
        <select name="guiche">
            <option value="Guichê 1">Guichê 1</option>
            <option value="Guichê 2">Guichê 2</option>
            <option value="Guichê 3">Guichê 3</option>
            <option value="Guichê 4">Guichê 4</option>
        </select><br><br>
        <button type="submit" name="proximo">PRÓXIMO</button>
    </form>
</body>
</html>
