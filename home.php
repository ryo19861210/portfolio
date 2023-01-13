<?php get_header(); ?>
<main>
  <!-- メインビジュアルここから -->
  <div class="mainvisual">
    <img src="<?php echo get_template_directory_uri(); ?>/img/メインビジュアル.jpg" alt="メインビジュアル画像">
  </div>
  <!-- メインビジュアルここまで -->
  <div class="container">
    <!-- サービスここから -->

    <section id="service">
      <div class="all_contents">
        <div class="title">
          <h1>Service</h1>
        </div>
        <div class="contents">
          <div class="content">
            <h2 class="content_name">ディレクション</h2>
            <p class="content_name_sub">DIRECTION</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/ディレクション.png" alt="バインダーのアイコン">
            <p class="content_text">
              お客様の要望をヒアリングし課題解決のためのプランを提示いたします。
              制作ではデザインに入る前の事前準備が重要になります。Webサイトについて不安な方にも分かりやすく、ご説明して費用対効果の高いWebサイト制作のための第一歩を作ります。
            </p>
          </div>
          <div class="content">
            <h2 class="content_name">デザイン</h2>
            <p class="content_name_sub">DESIGN</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/デザイン.png" alt="マウスのアイコン">
            <p class="content_text">
              ヒアリングに基づいたプランに沿って、デザインを作成いたします。訪れたユーザーが迷わず、快適に目的を達成できるデザインを意識しています。PC・スマホなどデバイスが違うことでユーザーの操作も変化します。その変化に最適な提案をいたします。

            </p>
          </div>
          <div class="content">
            <h2 class="content_name">コーディング</h2>
            <p class="content_name_sub">CODING</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/コーディング.png" alt="キーボードのアイコン">
            <p class="content_text">
              デザインの意図を理解し、余白や動き効果を適切に反映することでWebサイトの仕上がりは大きく変わります。ワードプレスを使用したブログ投稿など更新性の高いサイト、Javascriptを使用した動きのあるサイト、Rubyを使用したECサイトなど様々なサイトのコーディングを行なっております。
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- サービスここまで -->
    <!-- Worksここから -->
    <section id="works">
      <div class="works">
        <div class="title">
          <h1>Works</h1>
        </div>
        <ul id="grids">
          <li class="grid">
            <a href="https://ryo19861210.github.io/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/トレーナーサイト写真.jpg"></a>
          </li>
          <!-- <li class="grid">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/レストランサイト画像.jpg"></a>
          </li> -->
          <!-- <li class="grid">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/カフェサイト.jpg"></a>
          </li> -->
          <!-- <li class="grid">
            <a href="https://ryo19861210.github.io/furima-37671/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/フリマアプリ.jpg"></a>
          </li> -->
          <li class="grid">
            <a href="https://ryo19861210.github.io/ryo19861210/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/コーポレートサイト.jpg"></a>
          </li>
          <li class="grid">
            <a href="https://ryo19861210.github.io/kissa/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/喫茶サイト.jpg"></a>
          </li>
        </ul>
      </div>
    </section>
    <!-- Worksここまで -->
  </div>
  <button id="js-pagetop" class="pagetop"><span class="pagetop__arrow"></span></button>
</main>
<?php get_footer(); ?>
