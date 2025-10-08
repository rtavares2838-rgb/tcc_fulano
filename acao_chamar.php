<?php
if (!isset($_POST['guiche'])) {
    echo "Guichê não selecionado.";
    exit;
}

$guiche = $_POST['guiche'];

// Lê e incrementa a última senha
$contadorPath = 'contador.json';
$contadorData = file_exists($contadorPath) ? json_decode(file_get_contents($contadorPath), true) : ['ultima_senha' => 0];
$ultimaSenha = $contadorData['ultima_senha'] ?? 0;
$novaSenha = $ultimaSenha + 1;
$contadorData['ultima_senha'] = $novaSenha;
file_put_contents($contadorPath, json_encode($contadorData));

// Salva dados para exibição
$dado = [
    'senha' => str_pad($novaSenha, 3, '0', STR_PAD_LEFT),
    'guiche' => $guiche,
    'timestamp' => time()
];
file_put_contents('dados.json', json_encode($dado));

// Recupera a página de retorno corretamente
$retorno = $_POST['retorno'] ?? '';
if (!empty($retorno) && file_exists($retorno)) {
    header("Location: $retorno");
} else {
    header("Location: chamar.php"); // fallback
}
exit;
