<?php
function view($viewName, $data = []) {
    extract($data);
    include __DIR__ . "/views/{$viewName}.php";
}




