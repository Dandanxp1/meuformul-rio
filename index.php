<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
}
?>

<!DOCTYPE html><html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .input-group {
            display: flex;
            gap: 10px;
        }
        .input-group input {
            flex: 1;
        }
    </style>
</head>
<body><div class="container">
    <div class="form box">
        <h2 class="title">Formulário</h2>
        <form action="form.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Nome Completo" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="phone" placeholder="Telefone" required><h3>Endereço</h3>
            <input type="text" name="street" placeholder="Nome da Rua" required>

            <div class="input-group">
                <input type="text" name="city" placeholder="Cidade" required>
                <input type="text" name="state" placeholder="Estado" required>
                <input type="text" name="zipcode" placeholder="CEP" required>
            </div>

            <h3>Upload de Arquivo</h3>
            <input type="file" name="file" required>

            <button type="submit">Enviar Formulário</button>
        </form>
    </div>

</div></body>
</html>