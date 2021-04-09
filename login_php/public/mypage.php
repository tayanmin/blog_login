<?php

  session_start();
  require_once('../classes/UserLogic.php');
  require_once('../functions.php');

  // ログインしているか判定、していなかったら新規登録画面
  $result = UserLogic::checkLogin();

  if (!$result){
    $_SESSION['login_err'] = 'ユーザーを登録してログインしてください。';
    header('Location: signup_form.php');
   }
   $login_user = $_SESSION['login_user'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
    <link href="style.css" rel="stylesheet">
  <title>マイページ</title>
</head>
<body>
<h2>マイページ</h2>
<p>ログインユーザー：<?php echo h($login_user['name']) ?></p>
<p>メールアドレス：<?php echo h($login_user['email']) ?></p>
<a href="./login.php">ログアウト</a>


</body>
</html>