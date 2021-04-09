

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
  <link href="css/style.css" rel="stylesheet">  
  <title>削除画面</title>
</head>
<body>

<div class="container">
    <header class="mt-5">
    <a href="/blog_login/brog_app/index.php">ブログTOP</a>

        <nav class="nav">
          <ul>
            <li><a href="/blog_login/brog_app/form.html">ブログを書く</a></li>    
            <li><a href="/blog_login/login_php/public/login.php">ログアウト</a></li>  
          </ul>
        </nav>

    </header>
    <div class="mt-5">
    <?PHP

      require_once('brog.php');

      $brog =new brog();
      $result = $brog->delete($_GET['id']);

    ?>
    </div>
    <br>
      <a href="/blog_login/brog_app/">戻る</a>
  </body>
</html>