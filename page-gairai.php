<?php
/*
template name:gairai
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
<section class="page-anchor mt80 mt45-sp mb90 mb35-sp">
    <!-- TODO section with many buttons will go here -->
    <div class="container m-w800">
        <ul class="anchor-list">
            <li>
                <a class="goto" href="#gairai-sec03">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/gairai/item03.png" alt="外来担当医表" /></div>
                        <p class="goto-description">外来担当医表</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#gairai-sec02">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/gairai/item02.png" alt="受診される方へ" /></div>
                        <p class="goto-description">受診される方へ</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>

<section class="doctor-table bg-gray" id="gairai-sec03">
    <div class="container">
        <div class="m-w800">
            <h2 class="h2-ttl h2-mb">外来担当医表</h2>
            <p class="fz-20 fz-18-sp mb40 mb30-sp">このページでは次の情報をご案内しています。</p>
            <div class="recruit-info-gp">
                <ul class="recruit-info-li">
                    <li>
                        <a href="#recruit-info01">外来担当医勤務表</a>
                    </li>
                    <li>
                        <a href="#recruit-info02">外来担当医のご紹介</a>
                    </li>
                </ul>
            </div>

            <div id="open-btn" class="gairai-btn-dec list-open-btn">外来担当医表を開く</div>

            <div class="modal-container">
                <?php
                $args = array(
                    'post_type' => 'numazaki-doctors'
                );
                $wpqv = new WP_Query($args);
                if ($wpqv->have_posts()) :
                    while ($wpqv->have_posts()) : $wpqv->the_post();
                ?>
                        <ul class="doctor-list modal">
                            <li class="doctor-list-li" id="gairai01">
                                <div class="table-ttl">
                                    <h3 class="fz-20 fz-18-sp bd-line" id="recruit-info01">外来担当医勤務表</h3>
                                </div>
                                <table class="table-dec">
                                    <tr class="table-tr">
                                        <th class="table-th"></th>
                                        <th class="table-th">月</th>
                                        <th class="table-th">火</th>
                                        <th class="table-th">水</th>
                                        <th class="table-th">木</th>
                                        <th class="table-th">金</th>
                                        <th class="table-th">土</th>
                                    </tr>
                                    <!-- ループ処理 1回目だけthを表示させるためにcounterを使用 -->
                                    <?php $snd_doctors = SCF::get('snd_doctors'); ?>
                                    <?php if (!empty($snd_doctors[0]['snd_sei'])) : ?>
                                        <?php
                                        $counter = 0;
                                        foreach ($snd_doctors as $fields) {
                                            $counter++;
                                        ?>
                                            <tr class="table-tr">
                                                <!-- ループの1回目のみthを表示 -->
                                                <?php if ($counter == 1) : ?>
                                                    <th rowspan="10" class="single-th">午前</th>
                                                <?php endif; ?>
                                                <!-- thの件ここまで -->
                                                <!-- 診療科目ごとの表示非表示のif -->
                                                <?php if ($fields['snd_naika'] == '表示') : ?>
                                                    <td class="table-td">
                                                        <?php echo $fields['snd_sei']; ?>
                                                    </td>
                                                    <td class="table-td">
                                                        <?php echo $fields['snd_sei']; ?>
                                                    </td>
                                                    <td class="table-td">
                                                        <?php echo $fields['snd_sei']; ?>
                                                    </td>
                                                    <td class="table-td">
                                                        <?php echo $fields['snd_sei']; ?>
                                                    </td>
                                                    <td class="table-td">
                                                        <?php echo $fields['snd_sei']; ?>
                                                    </td>
                                                    <td class="table-td">
                                                        -
                                                    </td>
                                                <?php else : ?>
                                                <?php endif; ?>
                                                <!-- 表示非常時のifここまで -->
                                            </tr>
                                        <?php } ?>
                                    <?php else : ?>
                                    <?php endif; ?>
                                    <!-- ループここまで -->
                                </table>
                            </li>
                        </ul>
                <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
                <div class="btn-container">
                    <div id="close-btn" class="gairai-btn-dec list-close-btn">閉じる</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="intro-outdor-doctor" id="gairai-sec04">
    <div class="container">
        <div class="m-w800">
            <h2 class="h2-ttl h2-mb" id="recruit-info02">外来担当医のご紹介</h2>
            <ul class="intro-dr-block">
                <li class="intro-dtr-block-li">
                    <ul class="outer-flex">
                        <!-- ループ処理 -->
                        <li class="outer-flex-li-01">
                            <div class="outer-flex-li-sty">
                                <p class="outer-txt01">院長</p>
                                <p class="outer-ttl01">加藤　隆一</p>
                                <div class="outer-para01">
                                    <p class="fz-b">専門分野</p>
                                    <p>ダミーダミー</p>
                                </div>
                                <div class="outer-para02">
                                    <p class="fz-b">資格・略歴</p>
                                    <p>ダミーダミー
                                        ダミーダミー
                                        ダミーダミー
                                        ダミーダミー
                                        ダミーダミー</p>
                                </div>
                            </div>
                        </li>
                        <li class="outer-flex-li-01">
                            <div class="outer-flex-li-sty">
                                <p class="outer-txt01">副院長</p>
                                <p class="outer-ttl01">加藤　茂樹</p>
                                <div class="outer-para01">
                                    <p class="fz-b">専門分野</p>
                                    <p>ダミーダミー</p>
                                </div>
                                <div class="outer-para02">
                                    <p class="fz-b">資格・略歴</p>
                                    <p>ダミーダミー
                                        ダミーダミー
                                        ダミーダミー
                                        ダミーダミー
                                        ダミーダミー</p>
                                </div>
                            </div>
                        </li>
                        <!-- ループここまで -->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>


<section class="">
    <div class="container">
        <div class="abouts">
            <h2 class="h2-ttl" id="gairai-sec02">
                <span>受診される方へ</span>
            </h2>
            <div class="overview-table">
                <table>
                    <tbody>
                        <tr>
                            <td>診療科目</td>
                            <td> 内科</td>
                        </tr>
                        <tr>
                            <td>外来診察日</td>
                            <td>
                                月曜日～金曜日
                            </td>
                        </tr>
                        <tr>
                            <td>休診日</td>
                            <td>
                                土曜　日曜 祝日<br>
                                ※病院指定休診日（7月9日～7月10日羽幌神社祭）<br>
                                ※お盆休み（8月15日～8月16日）<br>
                                ※年末年始（12月28日（午後）～1月3日）
                            </td>
                        </tr>
                        <tr>
                            <td>受付時間</td>
                            <td>
                                8：30～11：45、13：15～16:30
                            </td>
                        </tr>
                        <tr>
                            <td>備考</td>
                            <td>
                                診療担当医・受付時間・診療時間につきましては、各診療科のご案内をご覧ください
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="procedure-con" style='margin-top : 30px'>
                <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="0">初めての受診の際は、以下のものをご用意ください。</h3>
                    <div class="procedure-detail-box accor" key="0" style="display: block;">
                        <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">受診前に必ずご用意ください。
                        </h4>
                        <ul class="procedure-detail">
                            <li>各種健康保険証</li>
                        </ul>
                    </div>
                    <div class="procedure-detail-box accor" key="0" style="display: block;">
                        <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">お持ちの場合は必ずお見せください。
                        </h4>
                        <ul class="procedure-detail">
                            <li>医療受給者証</li>
                            <li>お薬手帳</li>
                        </ul>
                    </div>
                </div>

                <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="0">必ずお読みください 保険証提示に関する注意です。</h3>

                    <ul class="procedure-detail">
                        <li>再診の方も医療法の規定により、月1回の保険証のご提示をお願いいたします。なお、ご提示が出来ない場合は、保険扱いできない場合があります。</li>
                        <li>保険証の変更があった場合は、必ずお申しでください。</li>
                        <li>保険証のコピーは（複写）は医療法の規定により、お取扱い出来ませんのでご了承ください。</li>
                    </ul>

                    <h3 class="procedure-ttl accor-ttl" key="0">マイナ保険証について</h3>

                    <p>
                        当院はオンライン資格確認を行う体制を有しており、マイナ保険証をご提示された患者様に対して <br>
                        受診歴、薬剤情報、特定健診情報その他必要な診療情報を取得・活用して診療等を行っております。<br>
                        診療情報を取得・活用することにより、質の高い医療の提供に努めておりますので、正確な情報を取得・活用するため、マイナ保険証の利用にご協力をお願いいたします。<br>
                        ■医療情報・システム基盤整備体制充実加算（初診時）
                        加算１：４点　　加算２：２点（マイナ保険証を利用した場合）
                    </p>


                    <h3 class="procedure-ttl accor-ttl mt40 mt20-sp" key="0">当院での受付～診察～会計の流れ</h3>

                    <ul class="procedure-detail">
                        <li>受付窓口で、「健康保険証」、「医療証」、「紹介状等」とともに受付窓口へ提出してください。</li>
                        <li>診療科の前の待合席でお待ちください。診察順が来ましたら診察室からお名前をお呼びします。</li>
                        <li>尚、検査などが必要な場合には、担当者がご案内します。</li>
                        <li>お薬が処方されている方には、院外処方箋をお渡しします。会計窓口でお名前をお呼びしますので、お待ちください。</li>
                        <li>会計窓口で精算をお済ませください。お薬は、4日以内に院外処方箋を持って、保険（調剤）薬局でお受け取りください。</li>
                    </ul>


                </div>


            </div>
        </div>
    </div>
</section>

<?php
get_footer();
