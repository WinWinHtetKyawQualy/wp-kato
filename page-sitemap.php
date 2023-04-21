<?php
/*
template name:sitemap
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">サイトマップ</h2>
            <span class="sub-mv-txt">Site Map</span>
        </div>
    </div>
</section>
<section class="sitemap-section">
    <div class="sitemap-container">
        <div class="">
            <ul class="sitemap-ul">
                <li class="sitemap-ul-li">
                    <ul class="column-ul">
                        <li class="column-li">
                            <a href="<?php echo home_url(); ?>" class="left-bdr-1">加藤病院</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/gairai/#gairai-sec01'; ?>">診療科目のご案内</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/news'; ?>">お知らせ</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/blog'; ?>">スタッフブログ</a>
                        </li>
                    </ul>

                    <ul class="column-ul">
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/gairai'; ?>" class="left-bdr-1">外来のご案内</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/gairai/#gairai-sec01'; ?>">診療科目</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/gairai/#gairai-sec02'; ?>">診療時間</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/gairai/#gairai-sec03'; ?>">外来担当医表</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/gairai/#gairai-sec04'; ?>">外来担当医のご紹介</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/gairai/#gairai-sec05'; ?>">外来について</a>
                        </li>
                    </ul>

                    <ul class="column-ul">
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/nyuuin'; ?>" class="left-bdr-1">入院のご案内</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/nyuuin/#item01-sec'; ?>">入院されるとき</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/nyuuin/#item02-sec'; ?>">注意事項</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/nyuuin/#item03-sec'; ?>">入院中の生活</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/nyuuin/#item04-sec'; ?>">面談・面会について</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/nyuuin/#item05-sec'; ?>">入院の費用</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/nyuuin/#item06-sec'; ?>">その他事項</a>
                        </li>
                    </ul>
                </li>

                <li class="sitemap-ul-li">
                    <ul class="column-ul">
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department'; ?>" class="left-bdr-1">部門紹介</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department/#dpt-sec01'; ?>" class="left-bdr-2">看護部門</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department/#itemr01-sec'; ?>">介護福祉士奨学金制度について</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department/#itemr02-sec'; ?>">看護部理念</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department/#itemr03-sec'; ?>">看護部の特色</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department/#itemr04-sec'; ?>">看護部体制</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department/#itemr05-sec'; ?>">看護部委員会活動</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department/#itemr06-sec'; ?>">看護学生奨学金制度について</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department/#itemr07-sec'; ?>">抑制廃止宣言</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department/#medical-tech-department'; ?>" class="left-bdr-2">医療技術部門</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department/#item01-sec'; ?>">薬剤科紹介</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department/#item02-sec'; ?>">リハビリテーション科紹介</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department/#item03-sec'; ?>">栄養科紹介</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/department/#item04-sec'; ?>">放射線科紹介</a>
                        </li>
                    </ul>

                    <ul class="column-ul">
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/about'; ?>" class="left-bdr-1">病院紹介</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/about/#greeting-section'; ?>">院長挨拶</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/about/#overview-section'; ?>">病院概要・沿革</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/about/#traffic-section'; ?>">交通アクセス</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/about/#floor-section'; ?>">フロアガイド</a>
                        </li>
                    </ul>

                    <ul class="mb-0 column-ul">
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/recruit'; ?>" class="left-bdr-1">採用情報詳細</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/recruit/#recruitment-information-list'; ?>">採用情報一覧</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/recruit/#about-recruitment'; ?>">職員募集について</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/recruit/#employment-information-list'; ?>">採用情報</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/recruit/#nursing-scholarship'; ?>">看護学生奨学金制度</a>
                        </li>
                        <li class="column-li">
                            <a href="<?php echo home_url() . '/recruit/#certified-worker-scholarship'; ?>">介護福祉士奨学金制度</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php
get_footer();
