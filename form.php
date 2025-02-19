<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $street = htmlspecialchars($_POST['street']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $zipcode = htmlspecialchars($_POST['zipcode']);

    echo "<h1>Dados Recebidos</h1>";
    echo "<p><strong>Nome:</strong>" . $name . " " . "</p>";
    echo "<p><strong>Email:</strong>" . $email . " " . "</p>";
    echo "<p><strong>Telefone:</strong>" . $phone . " " . "</p>";
    echo "<p><strong>Rua:</strong>" . $street . " " . "</p>";
    echo "<p><strong>Cidade:</strong>" . $city . " " . "</p>";
    echo "<p><strong>Estado:</strong>" . $state . " " . "</p>";
    echo "<p><strong>CEP:</strong>" . $zipcode . " " . "</p>";
}