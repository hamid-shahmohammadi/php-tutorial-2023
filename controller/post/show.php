<?php

use Core\Database;

$AuthUserId = 3;
$errors = [];
$success = null;

$config = require base_path('config');
$db = new Database($config['database']);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!isset($_POST['token']) || !isset($_SESSION["token"])) {
        $errors['csrf'] = 'CSRF Token not set';
    } elseif ($_POST['token'] !== $_SESSION["token"]) {
        $errors['csrf'] = 'CSRF Token Not Match';
    }

    if (empty($errors)) {
        $post = $db->query(
            'select * from posts where id = :id',
            [
                'id' => $_GET['id']
            ]
        )->findOrFail();


        athorize($post['user_id'] === $AuthUserId);

        $db->query('delete from posts where id = :id', ['id' => $_POST['id']]);

        header('location: /posts');
        exit();
    }
} else {

    $post = $db->query(
        'select * from posts where id = :id',
        [
            'id' => $_GET['id']
        ]
    )->findOrFail();


    athorize($post['user_id'] === $AuthUserId);


    view('post/show', [
        'heading' => 'Post',
        'config' => $config,
        'post' => $post,

    ]);
}
