<?php

$livro = $database
    ->query("select * from livros where id = :id", livro::class, ['id' => $_GET['id']])
    ->fetch();


view('livro', compact('livro'));
