<?php
$connect = new PDO('mysql:host=localhost;dbname=webdata', 'root', '');
$error = '';
$comment_name = '';
$comment_mail = '';
$comment_content = '';
if(empty($_POST["comment_name"]))
{$error .= '<p class="text-danger">Name is required</p>';}
else{$comment_name = $_POST["comment_name"];}

if(empty($_POST["comment_content"]))
{$error .= '<p class="text-danger">Comment is required</p>';}
else{$comment_content = $_POST["comment_content"];}

if(empty($_POST["comment_mail"]))
{$error .= '<p class="text-danger">Comment is required</p>';}
else{$comment_mail = $_POST["comment_mail"];}


if($error == '')
{
 $query = "INSERT INTO tbl_comment (parent_comment_id, comment, comment_sender_name, comment_mail) 
 VALUES (:parent_comment_id, :comment, :comment_sender_name, :comment_mail)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment' => $comment_content,
   ':comment_sender_name' => $comment_name,
   ':comment_mail' => $comment_mail,
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>