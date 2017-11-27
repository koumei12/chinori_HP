<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>chonori_hp</title>
    <link rel="stylesheet" href="chinori_hp.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   </head>
<body>
  <header>
<div class="container">
<div class="header-left">
  <img class="header-logo" src=".img/logo.png" alt="chinori_logo">
</div>
<div class="header-right">
  <div class="header-icon">
  <img class="header-button blog-icon"  src=".img/blog-icon.png" alt="blog-icon">
  <span class="fa fa-instagram header-button" ></span>
  <span <i class="fa fa-facebook-official" aria-hidden="true"></i></span>
  </div>
  <div class="header-contents">
  <span class="button"><img src=".img/button.png" alt"ichimatsu-icon"></span><p>事業内容</p>
  <span class="button"><img src=".img/button.png" alt"ichimatsu-icon"></span><p>会社概要</p>
  <span class="button"><img src=".img/button.png" alt"ichimatsu-icon"></span><p>企業理念</p>
  <span class="button"><img src=".img/button.png" alt"ichimatsu-icon"></span><p>お知らせ</p>
  <span class="button"><img src=".img/button.png" alt"ichimatsu-icon"></span><p>お問い合わせ</p>
  </div>
</div>
</div>
  </header>


  <div class="main">
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">
      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <?php echo $_POST['name'] ?>

      <div class="form-item">■ 年齢</div>
      <?php echo $_POST['age'] ?>

      <div class="form-item">■ お問い合わせの種類</div>
      <!-- この下でcategoryを受け取りechoしましょう -->
      <?php echo$_POST["category"]?>

      <div class="form-item">■ 内容</div>
      <?php echo $_POST['body'] ?>
    </div>
</div>


<footer>
  <div class="container">
    <div class="footer-left">
      <img class="footer-logo" src=".img/logo.png" alt="chinori_logo">
      <p class="copyright">©︎ 2017 chinori LLC.</p>
    </div>
    <div class="footer-right">
      <div class="footer-contents">
      <p>事業内容</p>
      <p>会社概要</p>
      <p>企業理念</p>
      <p>お知らせ</p>
      <p>お問い合わせ</p>
    </div>
    <div class="footer-icon">
    <img class="footer-blog-icon" src=".img/blog-icon.png" alt="blog-icon">
    <span class="fa fa-instagram footer-sns" ></span>
    <span <i class="fa fa-facebook-official footer-sns" aria-hidden="true"></i></span>
    </div>
    </div>
  </div>
</footer>
</body>
</html>
