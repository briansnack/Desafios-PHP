<?php

function validar_nome_usuario($nome) {
    return preg_match("/^[a-zA-Z0-9]+$/", $nome);
}

function validar_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validar_senha($senha) {
    return strlen($senha) >= 6;
}

?>
