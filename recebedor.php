<?php

$nome = filter_input(INPUT_POST, "nome");



$email = filter_input(INPUT_POST, "email");

echo "Nome" . "<br/>" . $nome;








echo "Email" . "<br/>" . $email;