<?php
$guiche_fixo = "Guichê 4";
$pagina_atual = basename(__FILE__); // Isso retorna "guiche1.php"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo $guiche_fixo; ?> - Painel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2><?php echo $guiche_fixo; ?> - Painel de Atendimento</h2>
    <form action="acao_chamar.php" method="post">
        <input type="hidden" name="guiche" value="<?php echo $guiche_fixo; ?>">
        <input type="hidden" name="retorno" value="<?php echo $pagina_atual; ?>">
        <button type="submit" name="proximo">PRÓXIMO</button>
    </form>
</body>
</html>
