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
  <?php include('setting.php'); ?>
	<title>mov</title>
</head>
<body>
  <header>
    <?php include('nav.php'); ?>
  </header>
  <main>
    <div class="header_container">
      <h1 class="header_text_main">
        creative <br>
        team <br>
        mov
      </h1>
      <p class="header_logo_wrapper">
        <img class="header_logo_img" src="assets/img/logo.svg" alt="mov">
      </p>
      <p class="header_text_sub">
        design <br>
        and <br>
        engineering
      </p>
    </div>
    <section class="section_wrapper_about">
      <!-- about -->
      <h2 class="section_title_about">about</h2>
      <section class="about-info_section">
        <div class="about-info_text-wrapper">
          <h3 class="about-info_title">
            movは宮城大学の学生によって結成された、クリエイティブサークルです。
          </h3>
          <p class="about-info_text">
            movにはデザイナーやエンジニアなどのクリエイターを志す学生たちが集まっています。学生同士で語り合える居場所を作ることで、互いの知識やモチベーションを高め合うことをmovの目的です。<br>
            また、多様なメンバーが集まることで一人では出来ないことができるのも魅力です
          </p>
        </div>
        <p class="about-info_illust-wrapper">
          <img class="about-info_illust-img" src="assets/img/about-info.png" alt="">
        </p>
      </section>
      <!-- activity -->
      <section class="about-actitity_section">
        <h2 class="section_title_about">activity</h2>
        <div class="activity-meeting_wrapper">
          <p class="activity-meeting_illust-wrapper">
            <img class="activity-meeting_illust-img" src="assets/img/activity-meeting.png" alt="">
          </p>
          <div class="activity-meeting_text-wrapper">
            <h3 class="activity-meeting_title">
              定期ミーティング
            </h3>
            <p class="activity-meeting_text">
              movの主な活動内容は定期的なミーティングです。<br>
              一週間に一度メンバーが集まって、進めているプロジェクトの進捗報告や個人の制作の相談などをします。<br>
              そのあとは各々雑談したりもくもく会に移行したり。<br>
              互いがやっていることを知ることで、モチベーションの向上や新たな知識の発見につながります。
            </p>
          </div>
        </div>
        <p class="about-activity_and">and...</p>
        <p class="about-activity_comment">
          メンバーのアイデアや希望、外部の方からの依頼<br>
          などを受けて様々な活動を行なっています。
        </p>
        <ul class="activity-more_content-wrapper">
          <button class="activity-more_btn_left"></button>
          <li class="activity-more_content">
            <div class="activity-more_text-box">
              <h3 class="activity-more_title">
                <span class="activity-more_title_num">01</span>
                学祭への参加
              </h3>
              <p class="activity-more_sentence">
                恒例と化してきている大学祭への参加。一昨年と昨年はインスタレーション作品を制作して展示しました。毎年、movのメンバーだからこそできることを試行錯誤しています。
              </p>
            </div>
            <p class="activity-more_illust-wrapper">
              <img class="activity-more_illust-img" src="assets/img/activity-more1.png" alt="">
            </p>
          </li>
          <button class="activity-more_btn_right"></button>
        </ul>
      </section>
    </section>
    <!-- member -->
    <section class="section_wrapper_member">
      <h2 class="section_title_member">member</h2>
      <ul class="member_list">
        <!-- 相澤 -->
        <li class="member_card">
          <caption class="member_comment">
            ヤモリとネコを飼ってます
          </caption>
          <p class="member_img-wrapper">
            <img class="member_img" src="assets/img/aizawa.png" alt="">
          </p>
          <h3 class="mamber_name">Shunka Aizawa</h3>
          <ul class="member_skill-list">
            <li class="member_skill-option">UX/UI</li>
            <li class="member_skill-option">web</li>
            <li class="member_skill-option">illust</li>
          </ul>
          <ul class="member_sns-list">
            <li class="member_sns-link">
              <a href="https://twitter.com/aizawa213"></a>
            </li>
            <li class="member_sns-link">
              <a href="http://aizawa-design.work/"></a>
            </li>
          </ul>
        </li>
        <!-- 西山 -->
        <li class="member_card">
          <caption class="member_comment">
          エンタメLOVE
          </caption>
          <p class="member_img-wrapper">
            <img class="member_img" src="assets/img/nishiyama.png" alt="">
          </p>
          <h3 class="mamber_name">Sakura Nishiyama</h3>
          <ul class="member_skill-list">
            <li class="member_skill-option">映像</li>
            <li class="member_skill-option">3DCG</li>
          </ul>
          <ul class="member_sns-list">
            <li class="member_sns-link">
              <a href="https://twitter.com/aizawa213"></a>
            </li>
            <li class="member_sns-link">
              <a href="http://aizawa-design.work/"></a>
            </li>
          </ul>
        </li>
        <!-- 葛西 -->
        <li class="member_card">
          <caption class="member_comment">
            つむじが2つあるかもしれません
          </caption>
          <p class="member_img-wrapper">
            <img class="member_img" src="assets/img/kasai.png" alt="">
          </p>
          <h3 class="mamber_name">Iori Kasai</h3>
          <ul class="member_skill-list">
            <li class="member_skill-option">UI</li>
            <li class="member_skill-option">UX</li>
            <li class="member_skill-option">App</li>
          </ul>
          <ul class="member_sns-list">
            <li class="member_sns-link">
              <a href="https://twitter.com/aizawa213"></a>
            </li>
            <li class="member_sns-link">
              <a href="http://aizawa-design.work/"></a>
            </li>
          </ul>
        </li>
        <!-- 小林 -->
        <li class="member_card">
          <caption class="member_comment">
            ヤモリとネコを飼ってます
          </caption>
          <p class="member_img-wrapper">
            <img class="member_img" src="assets/img/kobayashi.png" alt="">
          </p>
          <h3 class="mamber_name">Ramu Kobayashi</h3>
          <ul class="member_skill-list">
            <li class="member_skill-option">illust</li>
            <li class="member_skill-option">model</li>
          </ul>
          <ul class="member_sns-list">
            <li class="member_sns-link">
              <a href="https://twitter.com/aizawa213"></a>
            </li>
            <li class="member_sns-link">
              <a href="http://aizawa-design.work/"></a>
            </li>
          </ul>
        </li>
        <!-- 玉手 -->
        <li class="member_card">
          <caption class="member_comment">
            ヤモリとネコを飼ってます
          </caption>
          <p class="member_img-wrapper">
            <img class="member_img" src="assets/img/tamate.png" alt="">
          </p>
          <h3 class="mamber_name">Yui Tamate</h3>
          <ul class="member_skill-list">
            <li class="member_skill-option">UX/UI</li>
            <li class="member_skill-option">web</li>
            <li class="member_skill-option">graphic</li>
          </ul>
          <ul class="member_sns-list">
            <li class="member_sns-link">
              <a href="https://twitter.com/aizawa213"></a>
            </li>
            <li class="member_sns-link">
              <a href="http://aizawa-design.work/"></a>
            </li>
          </ul>
        </li>
        <!-- 港 -->
        <li class="member_card">
          <caption class="member_comment">
            ヤモリとネコを飼ってます
          </caption>
          <p class="member_img-wrapper">
            <img class="member_img" src="assets/img/minato.png" alt="">
          </p>
          <h3 class="mamber_name">Kaho Minato</h3>
          <ul class="member_skill-list">
            <li class="member_skill-option">UX/UI</li>
            <li class="member_skill-option">web</li>
            <li class="member_skill-option">graphic</li>
          </ul>
          <ul class="member_sns-list">
            <li class="member_sns-link">
              <a href="https://twitter.com/aizawa213"></a>
            </li>
            <li class="member_sns-link">
              <a href="http://aizawa-design.work/"></a>
            </li>
          </ul>
        </li>
      </ul>
      <section class="member-contact_container">
          <p class="member-contact_img-wrapper">
            <img class="member-contact_img" src="assets/img/member-contactmember-contact.png" alt="">
          </p>
          <button class="member-contact_btn">
            <h3 class="member-contact_btn-text">movのメンバーに加わってみませんか？</h3>
          </button>
          <p class="member-contact_img-wrapper_sub">
            <img class="member-contact_img_sub" src="assets/img/member-contact-sub.png" alt="">
          </p>
        </section>
    </section>
    <!-- work -->
    <section class="section_wrapper_work">
      <h2 class="section_title_work">work</h2>
      <button class="work_btn_left"></button>
      <ul class="work_card-contianer">
        <li class="work_card">
          <h3 class="work-card_title">tsumugu.mov</h3>
          <caption class="work-card_date">2019.10 Installation</caption>
          <div class="work-card_info">
            <p class="work-card_sentence">大学祭に「宇宙」をテーマにしたインスタレーション作品を展示しました。<br>
            スクリーン一面に宇宙が映し出されていて、鑑賞者はタブレットを用いて星座を作り宇宙に解き放つことで作品に参加出来ます。</p>
            <p class="work-card_picture-wrapper">
              <img class="work-card_picture-img" src="assets/img/tsumugu.jpg" alt="">
            </p>
          </div>
          <button class="work-card_more-btn">
            more detail
          </button>
        </li>
      </ul>
      <button class="work_btn_right"></button>
      <button class="work_all-btn">all works</button>
    </section>
    <!-- contact -->
    <section class="section_wrapper_contact">
      <h2 class="section_title_contact">contact</h2>
      <section class="contact-join_container">
        <p class="contact-join_illust-wrapper">
          <img class="contact-join_illust-img" src="assets/img/contact-join.png" alt="">
        </p>
        <h3 class="contact-join_title">movの活動に興味のある方</h3>
        <p class="contact-join_sentence">movではいつでも一緒に活動するメンバーを募集しています。<br>
        movに参加したい方も話だけ聞いてみたいという方も大歓迎です。<br>
        お気軽にご連絡ください！</p>
        <button class="contact-join_btn">コンタクトフォーム</button>
      </section>
      <section class="contact-work_container">
        <p class="contact-work_illust-wrapper">
          <img class="contact-work_illust-img" src="assets/img/contact-work.png" alt="">
        </p>
        <h3 class="contact-work_title">お仕事の依頼やご相談</h3>
        <p class="contact-work_sentence">movでは映像やweb、イラスト、アプリケーションのUI製作など、メンバーのスキルを活かせる仕事をお受けしています。<br>
        まずはお気軽にご相談ください。</p>
        <button class="contact-work_btn">コンタクトフォーム</button>
      </section>
    </section>
  </main>
	<footer>
    <p>
      movは、2017年から映像製作を中心に活動を開始しました。<br>
      動かすと感動するという意味を持つmove、<br>
      人・もの・ことの関係を接続する<br>
      media、visualization, video, movie, motion<br>
      などのビジュアルデザインに関わる言葉。<br>
      これらの言葉の要素を集約し、<br>
      「人を感動させるものを創り出すこと」、<br>
      及び「自分たちの活動から周りに影響を与えること」を目標に、<br>
      「mov（ムーブ）」という名称になりました。
    </p>
    <small>Copyright &copy; 2020 mov</small>
  </footer>
	<script>
    feather.replace()
  </script>
</body>
</html>