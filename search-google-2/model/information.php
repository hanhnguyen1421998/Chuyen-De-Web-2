<?php

include __DIR__.'/db.php';

class information extends db {

    public $table = 'information';

    /**
     *
     * @param type $data
     * @return type
     */
    public function insertInfo($data) {

        $sql = 'INSERT INTO information(`keyword`, `url`, `title`, `content`, `image`) 
                VALUES("'.$data['keyword'].'","'.$data['url'].'","'.$data['title'].'","'.$data['content'].'","'.$data['image'].'")';
        return $this->query($sql);
    }
}

// for ($i = 0; $i < count($array_links); $i++) {

    //  $info = array(
    //     'keyword' => $_SESSION["keySearch"],
    //     'url' => $array_links[$i],
    //     'title' => $array_title[$i],
    //     'content' => $array_content[$i],
    //  );
    // }

    // $array[] = "('$links', '$content', '$title', '$image')";
    //  foreach ($array as $key => $value) {
    //   $sql = "INSERT INTO url(url_link, keyword, title, url, image) VALUES ('$arr[$i]', '$key')";
    // }

    // $info = array(
    //     'keyword' => $_SESSION["keySearch"],
    //     'url' => $array_links,
    //     'title' => $array_title,
    //     'content' => $array_content,
    //     'image' => $array_image,
    //  );

    // echo "<pre>";
    //      print_r($array);
    // echo "</pre>";



    // $obj_comment->insertComment($comment);


    // // gộp mảng
    // $result = array_merge($array_links, $array_content, $array_title, $array_image);
    // echo "<pre>";
    //      print_r();
    // echo "</pre>";