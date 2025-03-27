<?php

if (!isset($_SESSION["nome"]) || !isset($_SESSION["funcao"])) {
    header("Location: ../index.php");
    exit();
};