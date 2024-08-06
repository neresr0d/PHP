<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEU CEP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container">
        <h1>Consulta CEP</h1>
        <form method="POST" action="">
            <input type="text" name="cep" placeholder="Digite seu CEP" maxlength="8" required>
            <button type="submit">BUSCAR</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cep = $_POST['cep'];
            $endereco = buscarEnderecoPorCep($cep);

            if (is_array($endereco)) {
                echo '<div class="result">';
                echo "<p><strong>CEP:</strong> " . htmlspecialchars($endereco['cep']) . "</p>";
                echo "<p><strong>Logradouro:</strong> " . htmlspecialchars($endereco['logradouro']) . "</p>";
                echo "<p><strong>Bairro:</strong> " . htmlspecialchars($endereco['bairro']) . "</p>";
                echo "<p><strong>Cidade:</strong> " . htmlspecialchars($endereco['localidade']) . "</p>";
                echo "<p><strong>Estado:</strong> " . htmlspecialchars($endereco['uf']) . "</p>";
                echo "<p><strong>Complemento:</strong> " . htmlspecialchars($endereco['complemento']) . "</p>";
                echo '</div>';
            } else {
                echo '<div class="error">' . htmlspecialchars($endereco) . '</div>';
            }
        }

        function buscarEnderecoPorCep($cep) {
            // Remover caracteres não numéricos do CEP
            $cep = preg_replace('/\D/', '', $cep);

            // Verificar se o CEP tem 8 dígitos
            if (strlen($cep) != 8) {
                return 'CEP inválido. O CEP deve ter 8 dígitos.';
            }

            // URL da API ViaCEP
            $url = "https://viacep.com.br/ws/$cep/json/";

            // Obtendo a resposta da API
            $response = file_get_contents($url);

            // Verificando se houve erro na requisição
            if ($response === FALSE) {
                return 'Erro ao buscar dados do CEP.';
            }

            // Decodificando a resposta JSON
            $data = json_decode($response, true);

            // Verificando se a API retornou erro
            if (isset($data['erro']) && $data['erro'] == true) {
                return 'CEP não encontrado.';
            }

            // Retornando os dados do endereço
            return $data;
        }
        ?>
    </div>
</body>
</html>