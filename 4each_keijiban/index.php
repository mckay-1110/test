<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$stmt = $pdo -> query("select * from 4each_keijiban");

?>


  <header>
    <div class="container">
      <img class="logo" src="4eachblog_logo.jpg">
    </div>
  </header>
  <nav>
    <div class="container">
      <ul>
        <li><a href="#">トップ</a></li>
        <li><a href="#">プロフィール</a></li>
        <li><a href="#">4eachについて</a></li>
        <li><a href="#">登録フォーム</a></li>
        <li><a href="#">問い合わせ</a></li>
        <li><a href="#">その他</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">

    <div class="side-menu">
      <article>
        <h2>人気の記事</h2>
        <a href="#">PHP オススメ本</a>
        <a href="#">PHP MyAdminの使い方</a>
        <a href="#">今人気のエディタ Top5</a>
        <a href="#">HTMLの基礎</a>
      </article>
      <article>
        <h2>オススメリンク</h2>
        <a href="#">インターノウス株式会社</a>
        <a href="#">XAMPPのダウンロード</a>
        <a href="#">Eclipseのダウンロード</a>
        <a href="#">Bracketsのダウンロード</a>
      </article>
      <article>
        <h2>カテゴリ</h2>
        <a href="#">HTML</a>
        <a href="#">PHP</a>
        <a href="#">MySQL</a>
        <a href="#">JavaScript</a>
      </article>
    </div>
    <div class="bbs">
      <h1>プログラミングに役立つ掲示板</h1>
      <form method="post" action="insert.php">
        <h3>入力フォーム</h3>
        <div>
          <label>ハンドルネーム</label>
          <br>
          <input type="text" size="35" name="handlename">
        </div>
        <div>
          <label>タイトル</label>
          <br>
          <input type="text" size="35" name="title">
        </div>
        <div>
          <label>コメント</label>
          <br>
          <textarea cols="35" rows="7" name="comments"></textarea>
        </div>
        <div>
          <input type="submit" class="submit" value="投稿する">
        </div>
      </form>
      <?php

      while($row = $stmt -> fetch()) {

      echo "<div class='kiji'>";
        echo "<h3>".$row['title']."</h3>";
        echo "<div class='contents'>";
          echo $row['comments'];
          echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
        echo "</div>";
      echo "</div>";
    }
      ?>
    </div>
  </div>
  <footer>
    <div class="container">
      <p><small>copyright &copy; internous | 4each blog is the one which provides A to Z about programming.</small></p>
    </div>
  </footer>

</body>


</html>
