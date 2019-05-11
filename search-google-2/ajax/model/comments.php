<?php

include __DIR__.'/db.php';

class comments extends db {

    public $table = 'comments';

    public function getListCommentsByPostID($post_id) {
        $sql = NULL;

        if ($post_id) {
            $sql = 'SELECT * FROM comments WHERE post_id = '.$post_id;
        }

        $comments = $this->select($sql);

        return $comments;
    }

    /**
     *
     * @param type $data
     * @return type
     */
    public function insertComment($data) {

        $sql = 'INSERT INTO comments(`comment_name`, `comment_description`, `post_id`) VALUES("'.$data['comment_name'].'","'.$data['comment_name'].'","'.$data['post_id'].'")';



        return $this->query($sql);
    }
}