<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
  
<body>
  
<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson_masamori;host=localhost;","root","mysql");
  
$stmt = $pdo->query("select * from 4each_keijiban2");
  
  
/*
while($row=$stmt->fetch()){
  echo $row['handlename'];
  echo $row['title'];
  echo $row['nakami'];
}*/
  
//  while($row=$stmt->fetch()){
//  echo"<div class="kiji">";
//  echo"<h2>"$row['title']."</h2>";
//  echo"<div class="nakami">";
//  echo $row['nakami'];
//  echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
//  echo"</div> " 
//  echo"</div>"
  
?>
  
<div class="logo">
<img src="4eachblog_logo.jpg">
    </div>
    
<header>
  <ul>
  <li>トップ</li>
  <li>プロフィール</li>
  <li>4eachについて</li>
  <li>登録フォーム</li>
  <li>問い合わせ</li>
  <li>その他</li>
  </ul>
</header>
  
<main>
  <div class="left">
  <h1>プログラミングに役立つ掲示板</h1>
  
  <form method="post" action="insert.php">
  <h2>入力フォーム</h2>
  
    <div>
    <label>ハンドルネーム</label><br>
    <input type="text" name="handlename" size="35" class="text">
    </div>
    
    <div>
    <label>タイトル</label><br>
    <input type="text" name="title" size="35" class="text">
    </div>
    
    <div>
    <label>コメント</label><br>
    <textarea name="comments" rows="5" cols="50"></textarea>
    </div>
    
    <input type="submit" class="submit" value="投稿する">
  
  </form>
    
<!--
  <div class="kiji">
  <div class="nakami">
  <h2>タイトル</h2>
  記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身。<br>
  記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身。<br>
  記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身。
  </div>  
  </div>
-->
  <?php
  
  while($row=$stmt->fetch()){
    
  echo"<div class='kiji'>";
  echo"<div class='nakami'>";
  echo"<h2>".$row['title']."</h2>";
  echo $row['comments'];
  echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
  echo"</div> " ;
  echo"</div>";
  }
  
  ?>
    
  
  </div>
  <div class="right">
<h2>人気の記事</h2>
<ul>
  <li>PHP オススメの本</li>
  <li>PHP MyAdminの使い方</li>
  <li>今人気のエディタ Top5</li>
  <li>HTMLの基礎</li>
</ul>
<h2>オススメリンク</h2>
<ul>
  <li>インターノウス株式会社</li>
  <li>XAMPPのダウンロード</li>
  <li>Eclipseのダウンロード</li>
  <li>Bracketsのダウンロード</li>
</ul>
<h2>カテゴリ</h2>
<ul>
  <li>HTML</li>
  <li>PHP</li>
  <li>MySQL</li>
  <li>JavaScript</li>
</ul>
</div>
  
</main>
  
<footer>
  copyrighy &copy; internous | 4each blog is the one which provides A to Z about programming.
</footer>

  
  
</body>
</html>