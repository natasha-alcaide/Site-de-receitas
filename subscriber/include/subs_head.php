<?php
session_start();
if (!isset($_SESSION["user_role"]) || $_SESSION["user_role"] != "subscriber") {
    header("Location: /index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escritor Receitas</title>

    <link rel="stylesheet" href="lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>