<?php

session_start();

session_destroy();
echo'<script> alert("Você foi desconectado com sucesso!"); document.location.href="index.php";</script>';

?>