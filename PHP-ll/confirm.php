<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ内容確認</title>

  <!-- CSS -->
  <link rel="stylesheet" href="form2.css">
  
</head>
<body>

  <!-- 問い合わせ内容確認ページ -->
  <section class="contact">
    <div class="container">
      <div class="wrapper">
        <h2>お問合せ内容確認</h2>

        <p class="confirm">名前：<?php echo @$_POST['name']; ?></p>
        <p class="confirm">メールアドレス：<?php echo @$_POST['email']; ?></p>
        <p class="confirm">お問合せ内容：<br><?php echo @$_POST['comments']; ?></p>

        <div class="flexbox">

          <form class="half" action="form2.html">
            <p><input class="btn gray" type="submit" value="修正する"></p>
          </form>

          <form class="half" action="send_mail.php" method="POST">
            <p><input class="btn" type="submit" value="送信する"></p>
          </form>
        </div>
      </dif>
    </div>
  </section>

</body>
</html>