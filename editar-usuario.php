<?php
require_once('./config/bootstrap.php');
loadModel('User');

authenticate();
loadView('editar-usuario');
