<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = "Home";

$blogs = $db->query("SELECT * from blog")->fetchAll();

require "views/index_view.php";
