<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = "Blogs";

$blogs = $db->query("SELECT * from blog")->fetchAll();

require "views/blogs_view.php";
