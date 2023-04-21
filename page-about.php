<?php
/*
template name:about
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">病院紹介</h2>
            <span class="sub-mv-txt">Hospital Information</span>
        </div>
    </div>
</section>
<section class="page-anchor pt80 pb100 pt60-sp pb60-sp">
    <!-- TODO section with many buttons will go here -->
    <div class="container m-w800">
        <ul class="anchor-list">
            <li>
                <a class="goto" href="#greeting-section">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block"
                                src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item01.png"
                                alt="院長　あいさつ" /></div>
                        <p class="goto-description">院長　あいさつ</p>
                    </div>
                </a>
            </li>

            <li>
                <a class="goto" href="#overview-section">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block"
                                src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item02.png"
                                alt="病院概要・沿革" /></div>
                        <p class="goto-description">病院概要・沿革</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#traffic-section">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block"
                                src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item03.png"
                                alt="交通アクセス" /></div>
                        <p class="goto-description">交通アクセス</p>
                    </div>
                </a>
            </li>

            <li>
                <a class="goto" href="#floor-section">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block"
                                src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item04.png"
                                alt="フロアガイド" /></div>
                        <p class="goto-description">フロアガイド</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>
<section class="greeting-section bg-gray">
    <div class="container">
        <div class="abouts">
            <h2 class="h2-ttl" id="greeting-section">
                <span> 院長　あいさつ </span>
            </h2>
            <div class="greeting-block">
                <p class="greeting-pg">
                    超高齢化と過疎化がすすむ地域で、どのように地域医療体制を整備維持していくかが当面の課題です。厚生労働省からは地域包括ケアシステムが提唱され、これまでの病院中心の医療から地域を中心とした医療へと転換が求められるところです。<br>
                    　現在のところ留萌中部医療圏では地域包括ケアの推進に向けたプロジェクトは進行していない状況ですが、早急に、近隣町村の行政を中心とした在宅医療・介護連携の推進事業が必要とされるところです。当院でも、積極的にこれらの活動に関わり、その任を果たして行きたいと思います。<br>
                    　また、同時に留萌中部医療圏における療養病床を維持して行けるよう努力する所存です。皆さまのご支援・ご鞭撻を賜ります様よろしくお願い申し上げます。
                </p>
                <p class="greeting-name">加藤病院　院長　　加藤　隆一</p>
            </div>
        </div>
    </div>
</section>

<section class="overview-section">
    <div class="container">
        <div class="abouts">
            <h2 class="h2-ttl" id="overview-section">
                <span> 病院概要・沿革</span>
            </h2>

            <p class="nav-desc" style="margin-top:30px">このページでは次の情報をご案内しています。</p>

            <div class=" sec-nav" style="--text-color: #1e803d; margin-bottom:30px;">
                <a href="#overview">病院概要。</a>
                <a href="#outline">施設概要</a>
                <a href="#history">沿革</a>
            </div>


            <h3 class="overview-text h3-ttl" id="overview">病院概要</h3>
            <div class="overview-block">
                <p class="overview-pg">
                    当院は、主に慢性疾患のご高齢の患者様を対象とした医療機関です。病状は安定しているものの継続的な療養が必要な患者様を対象に、快適な環境の中で在宅復帰を目指していただく病院です。
                </p>
            </div>
            <h3 class="overview-text h3-ttl" id="outline">施設概要</h3>
            <div class="overview-table">
                <table>
                    <tbody>
                        <tr>
                            <td>医療機関名</td>
                            <td>医療法人社団　心優会　加藤病院</td>
                        </tr>
                        <tr>
                            <td>所在地</td>
                            <td>
                                <ul>
                                    <li>〒078-4106　苫前郡羽幌町南6条5丁目13番地の1</li>
                                    <li>電話番号：0164-62-1005　　　Fax番号：0164-62-5970</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>病院長</td>
                            <td>加藤　隆一</td>
                        </tr>
                        <tr>
                            <td>病院種別</td>
                            <td>
                                一般病院
                            </td>
                        </tr>
                        <tr>
                            <td>許可病床数</td>
                            <td>
                                <ul>
                                    <li>・35床</li>
                                    <li>・2階：医療療養病床（15室/35床）</li>

                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>構造概要</td>
                            <td>
                                建築面積648.5平方メートル/延床面積1,472.6平方メートル
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="history" id="history">
                <h3 class="history-text h3-ttl">沿革</h3>
                <div class="history-list">
                    <ul>
                        <li>･昭和42年7月　加藤医院の発足</li>
                        <li>･昭和62年4月　現在の住所に移転し、加藤病院として開設</li>
                        <li>･平成28年10月　医療法人社団羽仁会加藤病院に名称変更</li>
                        <li>･平成29年9月　医療法人社団心優会加藤病院に名称変更</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="traffic-section bg-gray">
    <div class="container">
        <div class="abouts">
            <h2 class="h2-ttl" id="traffic-section">
                <span> 交通アクセス </span>
            </h2>
            <p class="traffic-text">当院へ来院される方へのアクセス情報です。</p>
            <div class="traffic-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2852.545545238067!2d141.7016661155822!3d44.36038617910336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0c2cb1c1e85db9%3A0xa8c1913fbffda24f!2z5pel5pys44CB44CSMDc4LTQxMDYg5YyX5rW36YGT6Iur5YmN6YOh57695bmM55S65Y2X77yW5p2h77yV5LiB55uu77yR77yT!5e0!3m2!1sja!2smm!4v1680592481697!5m2!1sja!2smm"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="car-block pb20">
                <p class='block-txt'>
                    医療法人社団 心優会　加藤病院 <br>
                    〒078-4106 北海道苫前郡羽幌町南6条5丁目13 <br>
                    電話　0164-62-1005（代表）<br>
                    FAX：0164-62-5970
                </p>
            </div>


        </div>
    </div>
</section>


<section class="floor-section">
    <div class="container">
        <div class="abouts">
            <h2 class="h2-ttl" id="floor-section">
                <span> フロアガイド </span>
            </h2>


            <p class="nav-desc" style="margin-top:30px">このページでは次の情報をご案内しています。</p>

            <div class=" sec-nav" style="--text-color: #1e803d; margin-bottom:30px;">
                <a href="#floor_1">1階。</a>
                <a href="#floor_2">2階</a>
                <a href="#floor_3">3階</a>
            </div>
            <div class="hospitalization-facility" id="floor_1">
                <h3 class=" floor-title h3-ttl">1階</h3>
                <div class="floor-photo-block">
                    <div class="floor-list">
                        <div class="floor-photo">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/f_guide01.jpg"
                                alt="病室">
                        </div>
                        <p class="floor-detail-txt">診察室／処置室／検査室／心電図室／物療室／内視鏡室／X線テレビ室／X線室／調理室／事務室／薬局／医局／待合ロビー 等</p>
                    </div>
                </div>
            </div>
            <div class="outpatient-facility" id="floor_2">
                <h3 class=" floor-title h3-ttl">2階</h3>
                <div class="floor-photo-block">
                    <div class="floor-list">
                        <div class="floor-photo">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/f_guide02.jpg"
                                alt="病室">
                        </div>

                        <p class="floor-detail-txt">病室／集中治療室／浴室／ 等</p>
                    </div>

                </div>
            </div>
            <div class="outpatient-facility" id="floor_3">
                <h3 class=" floor-title h3-ttl">3階</h3>
                <div class="floor-photo-block">
                    <div class="floor-list">
                        <div class="floor-photo">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/f_guide03.jpg"
                                alt="病室">
                        </div>

                        <p class="floor-detail-txt">機能訓練室／物品庫 等</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<?php
get_footer();