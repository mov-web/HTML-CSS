<!DOCTYPE html>
<html lang="jp">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<meta content="宮城大学のクリエイティブサークル、mov（ムーヴ）のポートフォリオサイトです。" name="descripton"><!-- サイトの紹介文 -->
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/loading.js"></script>
  <link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="assets/img/favicons/favicon.ico" rel="icon" type="image/x-icon">
  <link href="assets/img/favicons/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
  <?php include('../setting.php'); ?>
	<title>mov</title>
</head>
<body>
  <header>
    <?php include('../nav.php'); ?>
  </header>
  <main>
    <h1>Works</h1>
    <section class="work-card">
      <h1 class="work-card_title">nagare.mov</h1>
      <ul class="work-card_zenre-list">
        <li class="work-card_zenre-option">Installation</li>
      </ul>
      <p class="work-card_explain">2018年宮城大学大学祭にインスタレーション展示を出展しました。</p>
      <p  class="work-card_pic-wrapper">
        <img class="work-card_pic-img" src="assets/img/nagare.png" alt="">
      </p>
      <button class="work-card_btn" onclick="location.href='./nagare'">more detail</button>
    </section>
    <section class="work-card">
      <h1 class="work-card_title">tsumugu.mov</h1>
      <ul class="work-card_zenre-list">
        <li class="work-card_zenre-option">Installation</li>
      </ul>
      <p class="work-card_explain">2019年宮城大学大学祭にインスタレーション展示を出展しました。</p>
      <p  class="work-card_pic-wrapper">
        <img class="work-card_pic-img" src="assets/img/tsumugu.png" alt="">
      </p>
      <button class="work-card_btn" onclick="location.href='./tsumugu'">more detail</button>
    </section>
    <section class="work-card">
      <h1 class="work-card_title">20th Aniversaly film</h1>
      <ul class="work-card_zenre-list">
        <li class="work-card_zenre-option">motion</li>
        <li class="work-card_zenre-option">3DCG</li>
      </ul>
      <p class="work-card_explain">宮城大学20周年記念レセプションのオープニングムービーを制作しました。</p>
      <p  class="work-card_pic-wrapper">
        <img class="work-card_pic-img" src="assets/img/20thanv.png" alt="">
      </p>
      <button class="work-card_btn" onclick="location.href='./20thanv'">more detail</button>
    </section>
    <section class="work-card">
      <h1 class="work-card_title">the Pranks</h1>
      <ul class="work-card_zenre-list">
        <li class="work-card_zenre-option">App</li>
        <li class="work-card_zenre-option">3DCG</li>
      </ul>
      <p class="work-card_explain">the Pranks</p>
      <p  class="work-card_pic-wrapper">
        <img class="work-card_pic-img" src="assets/img/thepranks.png" alt="">
      </p>
      <button class="work-card_btn" onclick="location.href='./thepranks'">more detail</button>
    </section>
  </main>
  <footer>
    Copyright © 2020 mov
  </footer>
</body>