<?php
include_once './model/comments.php';
$obj_comment = new comments();

$comment = array(
    'post_id' => $_GET['id'],
    'comment_name' => $_GET['name'],
//    'email' => $_POST['email'],
//    'subject' => $_POST['subject'],
//    'message' => $_POST['message'],
);

$obj_comment->insertComment($comment);

echo 'ok';




?>