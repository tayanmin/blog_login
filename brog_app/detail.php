<?php


  require_once('brog.php');

  $brog =new brog();
  $result = $brog->getById($_GET['id']);

?>




<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
    <link href="css/style.css" rel="stylesheet">
  <div class="container">

  <title>ブログ詳細</title>
</head>

<body>
  
<div class="container">

<header class="mt-5">
      
      <h1>
      <a href="/blog_login/brog_app/index.php">ブログTOP</a>
      </h1>
  
          <nav class="nav">
            <ul>
              <li><a href="/blog_login/brog_app/form.html">ブログを書く</a></li>    
              <li><a href="/blog_login/login_php/public/login.php">ログアウト</a></li>  
            </ul>
          </nav>
   
      </header>


<h2 class="mt-3">ブログ詳細</h2>
<h3 class="mt-3">タイトル：<?php echo $result['title'] ?></h3>
    <p>投稿日時：<?php echo $result['indate'] ?></p>
    <p>カテゴリ：<?php echo $brog->setCategoryName($result["category"]) ?></p>
    <hr>
    <p>本文：<?php echo $result['content'] ?></p>

  <a href="/blog_login/brog_app/index.php">戻る</a>
</div>
</body>
</html>