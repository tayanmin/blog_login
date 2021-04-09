
<?php



  require_once('brog.php');
  // $id = $_GET['id'];

  $brog =new Brog();
  $brogDate = $brog -> getAll();

  function h ($s){
      return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
  }


?>




<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
    <link href="css/style.css" rel="stylesheet">

   <title>ブログTOP</title>
</head>
<body>



  <div class="container">

    
    <header !>

    <h1>
      <a href="/blog_login/brog_app/index.php">ブログTOP</a>
    </h1>

        <nav class="nav">
          <ul>
               <li><a href="/blog_login/brog_app/form.html">ブログを書く</a></li>    
              <!-- <li><a href="/blog_login/brog_app/index.php">一覧</a></li>   -->
              <li><a href="/blog_login/login_php/public/login.php">ログアウト</a></li>    
          </ul>
        </nav>
 
    </header>
    <!-- Header End -->



    <h5 class="mt-5">ブログ一覧</h5>
<!-- <p><a href="/brog_app/form.html">新規作成</a></p> -->


  <table>
    <tr>
      <th class="col-3">タイトル</th>
      <th class="col-3">カテゴリ</th>
      <th class="col-3">投稿日時</th>
      <th class="col-1"></th>
      <th class="col-1"></th>
    </tr>
    <?php foreach($brogDate as $column): ?>
    <tr>

      <td><?php echo h($column["title"]) ?></td>
      <td><?php echo h($brog->setCategoryName($column["category"])) ?></td>
      <td><?php echo h($column["indate"]) ?></td>
      <td><a href="/blog_login/brog_app/detail.php?id=<?php echo h($column["id"]) ?>">詳細</a></td>
      <td><a href="/blog_login/brog_app/brog_delete.php?id=<?php echo h($column["id"]) ?>">削除</a></td>
    
    </tr>
    <?php endforeach; ?>
  </table>  

  </div>
</body>
</html>






