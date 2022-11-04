<?php

use App\Database;

$db = new Database('blog');
$data = $db->query('SELECT * FROM articles');
var_dump($data);


// https://youtu.be/weE2adYHPG0?list=PLjwdMgw5TTLVDKy8ikf5Df5fnMqY-ec16&t=988