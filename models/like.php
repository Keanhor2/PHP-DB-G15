<?php
    require_once "database.php";
    function get_likes()
    {
        global $database;
        $statment = $database->prepare("SELECT *FROM posts ORDER BY post_id DESC");
        $statment->execute();
        return $statment->fetchAll();
    }
// get number of like by ID
function get_like_ById($post_id)
{
    global $database;
    $statment = $database->prepare("SELECT *FROM likes where post_id = :post_id");
    $statment->execute([
        ':post_id' => $post_id,
    ]);
    $result = $statment->fetch(); 
    return $result;
}
