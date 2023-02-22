<?php

// Administrador

$username = "admin";
$firstname = "Administrador";
$lastname = "para Teste";
$email = "admin@teste.com";
$user_pwd = "admin123";
$user_role = "admin";

$query = "INSERT INTO Usuarios (username, firstname, lastname, email, user_pwd,user_role, reg_date)";
$query .= "VALUES('{$username}','{$firstname}','{$lastname}','{$email}','{$user_pwd}','{$user_role}', current_timestamp())";

$create_user_query = mysqli_query($connection, $query);

// Escritor

$username = "user";
$firstname = "Usuario";
$lastname = "para Teste";
$email = "user@teste.com";
$user_pwd = "user123";
$user_role = "subscriber";

$query = "INSERT INTO Usuarios (username, firstname, lastname, email, user_pwd,user_role, reg_date)";
$query .= "VALUES('{$username}','{$firstname}','{$lastname}','{$email}','{$user_pwd}','{$user_role}', current_timestamp())";

$create_user_query = mysqli_query($connection, $query);
