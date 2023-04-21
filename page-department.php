<?php
/*
template name:department
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">部門紹介</h2>
            <span class="sub-mv-txt">Category Information</span>
        </div>
    </div>
</section>


<div class="panels dept-border">
    <section class="page-anchor mb90 mb50-sp mt60-sp dpt-right-tab pt50-sp">
        <!-- TODO section with many buttons will go here -->
        <div class="container m-w800 pt-80">
            <ul class="anchor-list">
                <li>
                    <a class="goto" href="#item01-sec">
                        <div class="goto-left-side">
                            <p class="goto-description">看護部</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="goto" href="#item02-sec">
                        <div class="goto-left-side">
                            <p class="goto-description">医療技術部門</p>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </section>
    <section id="item01-sec" class="item01-sec recruitment-information-list bg-gray">
        <div class="container m-w800">
            <h2 class="h2-ttl h2-mb">看護部門</h2>
            <!-- <p class="text-right mb20 mb10-sp">最終更新日　令和4年10月17日</p> -->
            <div class="recruit-info-gp">
                <ul class="recruit-info-li">

                    <li>
                        <a href="#nur01">看護部体制</a>
                    </li>

                    <li>
                        <a href="#nur02">看護部委員会活動</a>
                    </li>

                </ul>
            </div>
        </div>
    </section>

    <section id="nur01" class="about-recruitment mt70 mt50-sp">
        <div class="container m-w800">
            <h2 class="h2-ttl h2-mb">看護部体制</h2>

            <div>

                <p class="mb50 mb30-sp">
                    患者様中心の看護を実践する組織として、患者様や職員の声が通る、風通しの良い組織作りを目指しています。
                    1病棟35床で2交代勤務を行っています。
                </p>
            </div>

            <div class="recruitment-content">
                <h3 class="fz-20 fz-18-sp bd-line">勤務体制</h3>
                <div class="mb50 mb30-sp">
                    <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">日勤</h4>
                    <p class="pl20">
                        8時30分　～　17時00分　
                    </p>
                </div>
                <div class="mb50 mb30-sp">
                    <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">夜勤</h4>
                    <p class="pl20">16時30分 　～　9時00分</p>
                </div>
            </div>



        </div>
    </section>

    <section id="nur02" class="item01-sec item-sec-border-sp bg-gray">
        <div class="container m-w800">
            <h2 class="h2-ttl h2-mb">看護部委員会活動</h2>

            <p class="nav-desc">このページでは次の情報をご案内しています。</p>

            <div class="sec-nav" style="--text-color: #1e803d; margin-bottom:30px;">
                <a href="#management">医療安全管理委員会</a>
                <a href="#nosocomial">院内感染防止委員会</a>
                <a href="#committee">褥瘡防止対策委員会</a>

            </div>
            <div class="procedure-con">

                <div class="procedure-block mb40 mb0-sp">

                    <div class="accor" key="1" style="display: block;">
                        <div class="mb50 mb30-sp" id="management">
                            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">医療安全管理委員会
                            </h4>
                            <p>
                                インシデントレポート報告書の収集と分析を行い、再発防止に向けた対策を検討し、患者様が安心して治療に専念できるよう対策を講じています。<br>
                                医療安全に向けた人材育成のため、年に2回以上職員を対象として研修会を開催しています。
                            </p>
                        </div>
                        <div class="mb50 mb30-sp" id="nosocomial">
                            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">院内感染防止委員会
                            </h4>
                            <p>
                                院内における患者様及び医療従事者の感染予防に努めています。<br>
                                職員の教育・指導を目的とし年に2回以上職員を対象として研修会を開催しています
                            </p>
                        </div>
                        <div class="mb50 mb30-sp" id="committee">
                            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">褥瘡防止対策委員会</h4>
                            <p>入院患者様の褥瘡発生予防及び、褥瘡患者様のケアに関し実施内容の妥当性の検討、計画立案、評価を行っています。</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="item02-sec" class="item01-sec recruitment-information-list bg-gray">
        <div class="container m-w800">
            <h2 class="h2-ttl h2-mb">医療技術部門</h2>
            <!-- <p class="text-right mb20 mb10-sp">最終更新日　令和4年10月17日</p> -->
            <div class="recruit-info-gp">
                <ul class="recruit-info-li">

                    <li>
                        <a href="#med01">薬剤科紹介</a>
                    </li>

                    <li>
                        <a href="#med02">栄養科紹介</a>
                    </li>

                </ul>
            </div>
        </div>
    </section>

    <section id="med01" class="item01-sec item-sec-border-sp bg-gray">
        <div class="container m-w800">
            <h2 class="h2-ttl h2-mb">薬剤科紹介</h2>

            <p class="nav-desc">このページでは次の情報をご案内しています。</p>

            <div class="sec-nav" style="--text-color: #1e803d; margin-bottom:30px;">
                <a href="#dispensing">外来調剤・入院調剤</a>
                <a href="#business">注射薬業務</a>
            </div>
            <div class="procedure-con">

                <div class="procedure-block mb40 mb0-sp">

                    <div class="accor" key="1" style="display: block;">
                        <div class="mb50 mb30-sp" id="dispensing">
                            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">外来調剤・入院調剤
                            </h4>
                            <p>
                                当院では、原則として院外処方としています。そのため、調剤は、主に入院の処方せんを対応しております。また、療養病棟が主体ですので、錠剤そのままでは服用が困難な患者様が多く、入院処方の8割以上が錠剤・カプセルの粉砕等を含む散剤です。<br>
                                処方せんの受付時には薬の量や服用時間、飲み合わせの悪い薬の確認のほか、必要に応じ、粉砕の可否などの処方せん記載内容を確認し、患者様が服薬（服用）しやすいように対応しています。
                            </p>
                        </div>
                        <div class="mb50 mb30-sp" id="business">
                            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">注射薬業務
                            </h4>
                            <p>
                                注射薬は、一般に効果の発現が早く、その使い方には特に注意が必要です。注射薬も内服薬と同様に、薬剤師が処方せんの内容を確認した上で患者様ごとに取り揃えています。
                            </p>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="med02" class="item01-sec item-sec-border-sp bg-gray">
        <div class="container m-w800">
            <h2 class="h2-ttl h2-mb">栄養科紹介</h2>

            <p class="nav-desc">このページでは次の情報をご案内しています。</p>

            <div class="sec-nav" style="--text-color: #1e803d; margin-bottom:30px;">
                <a href="#meals">入院患者様の食事について</a>
                <a href="#nutrients">栄養管理について</a>
            </div>
            <div class="procedure-con">

                <div class="procedure-block mb40 mb0-sp">

                    <div class="accor" key="1" style="display: block;">
                        <div class="mb50 mb30-sp" id="meals">
                            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">入院患者様の食事について
                            </h4>
                            <p>
                                入院中の食事は、治療のため栄養的に考慮されたものとなっています。
                                食事の形態についても、その方の食べやすい形や飲み込みやすさを考慮し調理しています。
                                食物アレルギーのある方の食事についても、可能な限り対応しています。
                            </p>
                        </div>
                        <div class="mb50 mb30-sp" id="nutrients">
                            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">栄養管理について
                            </h4>
                            <p>
                                当院では、入院されているすべての患者様の栄養状態を把握し、栄養管理を行っています。
                                栄養科では他職種と連携を取り、チーム医療に取り組みながら、食事、栄養面からのサポートに力を入れております。
                            </p>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<?php
get_footer();