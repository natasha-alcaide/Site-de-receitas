<?php
$query = "INSERT INTO Categorias (cat_title) VALUES 
        ('Salgados'),
        ('Sobremesas'), 
        ('Carnes'), 
        ('Veganos'), 
        ('Sopas'),
        ('Massas'), 
        ('Bolos'), 
        ('Saladas'), 
        ('Lanches')";

$create_cat_query = mysqli_query($connection, $query);
