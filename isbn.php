<?php
const DIRECT_ACCESS = true;

$isbns = require('./config.php');

/**
 * Get book info from /* https://www.googleapis.com/books/v1/volumes?q=isbn:${ISBN}
 */
foreach ($isbns as $isbn) {
    renderTemplate(file_get_contents("https://www.googleapis.com/books/v1/volumes?q=isbn:$isbn"));
}

function renderTemplate($info)
{
    include './template.php';
}
