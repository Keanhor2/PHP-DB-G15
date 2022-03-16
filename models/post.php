<?php
require_once "database.php";
/**
 * 
 * Get all items  
 * @return array of items 
 */
function get_posts()
{
    global $database;
    $statment = $database->prepare("SELECT *FROM posts ORDER BY post_id DESC");
    $statment->execute();
    return $statment->fetchAll();
}

/**
 * Get a single item
 * @param integer $id :  the item id
 * @return the item related to given item id
 */
function get_posts_ById($post_id)
{
    global $database;
    $statment = $database->prepare("SELECT *FROM posts where post_id = :post_id");
    $statment->execute([
        ':post_id' => $post_id,
    ]);
    return $statment->fetch();
}

/**
 * Remove   item related to given item id
 * @param integer $id :  the item id
 * @return true if deletion was successful, false otherwise
 */
function delete_posts($post_id)
{
   global $database;
   $statment = $database->prepare("DELETE FROM posts WHERE post_id = :post_id");
   $statment->execute([':post_id' => $post_id]);
}

/**
 * Update a Item given id and attibutes
 * @param integer $id :  		the item id
 * @param string $item :  		the item item
 * @param integer $price :  		the item price
 * 
 
 * @return true if deletion was successful, false otherwise
 */
function update_posts($post_id, $post_content, $post_date)
{
    global $database;
    $statment = $database->prepare("UPDATE posts SET  post_content = :post_content, post_image = :post_image,post_date=:post_date where post_id = :post_id");
    $statment->execute([
        ':post_id'=> $post_id,
        ':post_content'=>$post_content,
        ':post_date'=>$post_date,
    ]);
}

/**
 * Create a new item 
 * @param string $item :  		the item name
 * @param integer $price :  		the price
 
 * @return true if create was successful, false otherwise
 */
function create_posts($post_content, $post_image)
{
    global $database;
    $post_content = $_POST['post_content'];
    $post_image = $_POST['post_image'];
    $statment =$database->prepare("INSERT INTO posts(post_content,post_image) VALUE(:post_content,:post_image)");
    $statment->execute([
        ':post_content'=>$post_content,
        ':post_image'=>$post_image,
    ]);
    return $statment->rowCount() >0 ;
}
?>