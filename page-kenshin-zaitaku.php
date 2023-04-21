<?php
/*
template name:kenshin-zaitaku
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">外来のご案内</h2>
            <span class="sub-mv-txt">Outpatient care Information</span>
        </div>
    </div>
</section>


<section class="page-anchor pt80 pb100 pt60-sp pb60-sp">
    <!-- TODO section with many buttons will go here -->
    <div class="container m-w800">
        <ul class="anchor-list">
            <li>
                <a class="goto" href="#information">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block"
                                src="<?php bloginfo('template_directory'); ?>/assets/img/kenshin/item01.png"
                                alt="各種健診・検査のご案内">
                        </div>
                        <p class="goto-description">各種健診・検査のご案内</p>
                    </div>
                </a>
            </li>

            <li>
                <a class="goto" href="#guidance">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block"
                                src="<?php bloginfo('template_directory'); ?>/assets/img/kenshin/item02.png"
                                alt="特定健康診査のご案内"></div>
                        <p class="goto-description">特定健康診査のご案内</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#homecare">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block"
                                src="<?php bloginfo('template_directory'); ?>/assets/img/kenshin/item03.png"
                                alt="在宅医療について"></div>
                        <p class="goto-description">在宅医療について</p>
                    </div>
                </a>
            </li>


        </ul>
    </div>
</section>


<section class="overview-section">
    <div class="container">
        <div class="abouts">
            <h2 class="h2-ttl" id="information">
                <span> 各種健診・検査のご案内</span>
            </h2>
            <h3 class="overview-text h3-ttl">当院で行っている健診</h3>
            <div class="overview-block">
                <p class="overview-pg">
                    健康に関心はあるけれど、つい自分のことは疎かにしてしまう。そんなことはありませんか？
                    毎日のお仕事や生活に追われて、皆様お忙しい日々をお過ごしかと思いますが、年に1度の健康診断の受診をお勧めします。
                </p>
            </div>
            <h3 class="overview-text h3-ttl">施設概要</h3>
            <div class="overview-table">
                <table>
                    <tbody>
                        <tr>
                            <td>健診名</td>
                            <td>内容</td>
                            <td>料金（税込）</td>
                        </tr>
                        <tr>
                            <td>一般定期健診</td>
                            <td>
                                労働安全衛生法による各職場で行われる企業検診や、個人が健康状態の評価のために行う一般健診などがあります。
                            </td>
                            <td>3,080円～</td>
                        </tr>
                        <tr>
                            <td>特定健康診査（メタボ健診）</td>
                            <td>厚生労働省により、平成20年から実施が義務付けられた、メタボリックシンドローム（内臓脂肪型肥満）に着目した健康診査です。</td>
                            <td>各種</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>

<section class="overview-section">
    <div class="container">
        <div class="abouts">
            <h2 class="h2-ttl" id="guidance">
                <span> 特定健康診査のご案内</span>
            </h2>
            <h3 class="overview-text h3-ttl">特定健診の目的</h3>
            <div class="overview-block">
                <p class="overview-pg">
                    医療制度改革に伴い、平成20年4月から国民健康保険や健康保険組合などすべての医療保険者において、「特定健康診査・特定保健指導」いわゆる「メタボ健診」の実施が義務付けられました。 <br>
                    新たな特定健診では、生活習慣病の早期発見の為、メタボリックッシンドロームに関する検査が追加され、生活習慣病予備軍に対して指導～治療が求められることになります。<br>
                    糖尿病などの生活習慣病、特に内臓脂肪症候群（メタボリックシンドローム）に着目した生活習慣病予防のための健診です。
                </p>
            </div>

            <h3 class="overview-text h3-ttl">特定健診の対象者</h3>
            <div class="overview-block">
                <p class="overview-pg">
                    特定健康診査の対象者は、特定健診の実施年度に40歳から74歳の年齢に達する者。
                </p>
            </div>

        </div>
    </div>
</section>

<section id="homecare" class="item01-sec item-sec-border-sp bg-gray">
    <div class="container m-w800">
        <h2 class="h2-ttl h2-mb">在宅医療について</h2>




        <p class="nav-desc">このページでは次の情報をご案内しています。</p>

        <div class="sec-nav" style="--text-color: #1e803d; margin-bottom:30px;">
            <a href="#home-medical">在宅医療とは？</a>
            <a href="#types">当院の在宅医療の種類と内容</a>
            <a href="#recive">在宅医療をうけるには</a>
        </div>

        <div class="procedure-con">

            <div class="procedure-block mb40 mb0-sp">

                <div class="accor" key="1" style="display: block;">
                    <div class="mb50 mb30-sp" id="home-medical">
                        <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">在宅医療とは？
                        </h4>
                        <p>
                            在宅医療とは、患者様のお宅に医療関係者が訪問して医療を行うことです。医療サービスには、入院や通院の他、住み慣れた自宅や施設で診療を受ける在宅医療という方法もあります。<br>
                            本来これらの受療手段は患者様に最も適したものが選択されるべきですが、在宅医療は入院や通院に比べて質・量ともに充実しているとは言い難いのが現状です。私たちは医療サービスの幅を広げて療養生活を豊かにするため在宅医療の発展に取り組んでいます。
                        </p>
                    </div>
                    <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2" id="types">
                        当院の在宅医療の種類と内容
                    </h4>
                    <div class=" overview-table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>種類</td>
                                    <td>訪問者</td>
                                    <td>内容の項目</td>
                                </tr>
                                <tr>
                                    <td rowspan='0'>訪問診療</td>
                                    <td rowspan='0'>
                                        医師・看護師
                                    </td>
                                    <td> 一般診療</td>
                                </tr>
                                <tr>

                                    <td>経管栄養の管理・指導</td>
                                </tr>
                                <tr>

                                    <td>導尿や尿カテーテルの管理・指導</td>
                                </tr>
                                <tr>

                                    <td>吸痰や吸入の管理・指導</td>
                                </tr>
                                <tr>

                                    <td>悪性腫瘍終末期診療</td>
                                </tr>
                                <tr>
                                    <td>末梢点滴・注射</td>
                                </tr>
                                <tr>
                                    <td>床ずれなどの創傷の予防や治療処置</td>
                                </tr>
                                <tr>
                                    <td>血液検査・尿検査・便検査</td>
                                </tr>
                                <tr>
                                    <td>心電図検査</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="procedure-detail-box accor" key="0" style="display: block; margin-top : 30px;"
                        id='recive'>
                        <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">在宅医療をうけるには
                        </h4>
                        <ul class="procedure-detail">
                            <li>寝たきりの状態、準寝たきりの状態、機器をつけたまま退院されて、通院困難になった場合に在宅医療を利用することが出来ます。</li>
                            <li>在宅医療を利用する場合、主治医にご相談ください。</li>
                            <li>介護保険をご利用の方は、担当ケアマネージャーにご相談ください。</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();