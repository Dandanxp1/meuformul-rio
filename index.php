<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (
        isset($_GET['name']) && isset($_GET['email']) && isset($_GET['phone']) &&
        isset($_GET['street']) && isset($_GET['city']) && isset($_GET['state']) &&
        isset($_GET['zipcode'])
    ) {
        $name = htmlspecialchars($_GET['name']);
        $email = htmlspecialchars($_GET['email']);
        $phone = htmlspecialchars($_GET['phone']);
        $street = htmlspecialchars($_GET['street']);
        $city = htmlspecialchars($_GET['city']);
        $state = htmlspecialchars($_GET['state']);
        $zipcode = htmlspecialchars($_GET['zipcode']);

        echo "<h2>Dados Recebidos:</h2>";
        echo "<p><strong>Nome:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Telefone:</strong> $phone</p>";
        echo "<p><strong>Endereço:</strong> $street, $city - $state, CEP: $zipcode</p>";
    } else {
        echo "<p style='color:red;'>Todos os campos são obrigatórios!</p>";
    }
} else {
    echo "<p style='color:red;'>Método inválido!</p>";
}
?>