<?php
require_once('./config/bootstrap.php');

authenticate();
loadView('listar-usuarios');
