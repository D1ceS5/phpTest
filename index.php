<form action="index.php" method="get">

    <p>Поиск: <input type="text" name="search" /></p>
    <p><input type="submit" text="Поиск"/></p>
</form>
<?php
include "Post.php";
$array = array(
    new Post("Test ONE",'https://www.meme-arsenal.com/memes/fa92ab7edfe33295d3d3d87bbac0059b.jpg','13 540$','Сегодня 22:00','New-York',true,'#'),
    new Post("Test TWO",'https://www.meme-arsenal.com/memes/fa92ab7edfe33295d3d3d87bbac0059b.jpg','13 540$','Сегодня 22:00','New-York',true,'#'),
    new Post("Test THREE",'https://www.meme-arsenal.com/memes/fa92ab7edfe33295d3d3d87bbac0059b.jpg','13 540$','Сегодня 22:00','New-York',true,'#'),
    new Post("Test FOUR",'https://www.meme-arsenal.com/memes/fa92ab7edfe33295d3d3d87bbac0059b.jpg','13 540$','Сегодня 22:00','New-York',true,'#'),
    new Post("Test FIVE",'https://www.meme-arsenal.com/memes/fa92ab7edfe33295d3d3d87bbac0059b.jpg','13 540$','Сегодня 22:00','New-York',true,'#'),

);
$key = isset($_GET['search'])?$_GET['search']:"Test";
foreach (array_filter($array, function ($x) {global $key;  if(substr_count($x->title, $key) > 0) return $x;}) as $data){
    echo $data->getPost();
}
echo '<li>';


echo 'Max lol';
?>