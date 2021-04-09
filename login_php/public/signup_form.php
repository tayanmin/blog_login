<?php 
session_start();
require_once '../functions.php';
// ini_set('display_errors', true);
require_once '../classes/UserLogic.php';

$result = UserLogic::checkLogin();
if($result){
  header('Location: mypage.php');
  return;
}

// 三項演算子
$login_err = isset($_SESSION['login_err']) ?  $_SESSION['login_err'] : null;
unset($_SESSION['login_err']);

?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
    <link href="style.css" rel="stylesheet">
  <title>ユーザー登録画面</title>
</head>
<body>
<div class="container">
  <h2 class="mt-5">ユーザー登録フォーム</h2>
  <?php if (isset($login_err)) : ?>
         <p><?php echo $login_err; ?></p> 
      <?php endif; ?> 
    <form action="register.php" method="POST">
    <p>
      <label for="username">ユーザー名</label>
      <input type="text" name="username">
    </p>
    <p>
      <label for="email">メールアドレス</label>
      <input type="email" name="email">
    </p>
    <p>
      <label for="password">パスワード</label>
      <input type="password" name="password">
    </p>
    <p>
      <label for="password_conf">パスワード確認</label>
      <input type="password" name="password_conf">
    </p>
      <input type="hidden" name="csrf_token" value="<?php echo h(setToken()); ?>">
    <p>
       <input type="submit" value="新規登録">
    </p>
    </form>
    </div>
</body>
</html>