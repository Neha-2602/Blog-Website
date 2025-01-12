<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = "Blogs";
$currentUser = 1;

$blog = $db->query("SELECT * from blog WHERE id = :id", [
    'id' => $_GET['id']
])->fetch();

if (! $blog) {
    abort();
}

require "views/blog_view.php";
