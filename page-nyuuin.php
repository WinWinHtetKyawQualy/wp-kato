<?php
/*
template name:nyuuin
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">入院のご案内</h2>
            <span class="sub-mv-txt">Hospitalization Information</span>
        </div>
    </div>
</section>
<section class="page-anchor pt80 pb100 pt60-sp pb60-sp">
    <!-- TODO section with many buttons will go here -->
    <div class="container m-w800">
        <ul class="anchor-list">
            <li>
                <a class="goto" href="#item03-sec">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block"
                                src="<?php bloginfo('template_directory'); ?>/assets/img/nyuuin//item03.png"
                                alt="入院中の生活" /></div>
                        <p class="goto-description">入院生活について</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#item04-sec">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block"
                                src="<?php bloginfo('template_directory'); ?>/assets/img/nyuuin//item05.png"
                                alt="入院の費用" /></div>
                        <p class="goto-description">費用とお支払方法</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#item05-sec">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block"
                                src="<?php bloginfo('template_directory'); ?>/assets/img/nyuuin//item04.png"
                                alt="面談・面会について" /></div>
                        <p class="goto-description">お見舞いについて</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>
<section class="item01-sec bg-gray">
    <div class="container m-w800">
        <div class="hosiptal-inn-conn hospital-comm-btn">
            <h2 class="h2-ttl h2-mb h2-mb-sp" id="item01-sec">入院の準備・手続き</h2>
            <!-- <div class="recruit-info-gp">
                <ul class="recruit-info-li">
                    <li>
                        <a href="#hosiptal-info01">担当医師</a>
                    </li>
                    <li>
                        <a href="#hosiptal-info02">看護体制</a>
                    </li>
                    <li>
                        <a href="#hosiptal-info03">病室のご案内</a>
                    </li>
                    <li>
                        <a href="#hosiptal-info04">プライバシーの保護</a>
                    </li>
                    <li>
                        <a href="#hosiptal-info05">食事について</a>
                    </li>
                    <li>
                        <a href="#hosiptal-info06">点灯・消灯時間について</a>
                    </li>
                    <li>
                        <a href="#hosiptal-info07">外出・外泊について</a>
                    </li>
                    <li>
                        <a href="#hosiptal-info08">付き添いについて</a>
                    </li>
                    <li>
                        <a href="#hosiptal-info09">喫煙について</a>
                    </li>
                    <li>
                        <a href="#hosiptal-info10">電気製品の持ち込みについて</a>
                    </li>
                    <li>
                        <a href="#hosiptal-info11">公衆電話</a>
                    </li>
                </ul>
            </div> -->


            <p class="nav-desc" style="margin-top:30px">このページでは次の情報をご案内しています。</p>

            <div class=" sec-nav" style="--text-color: #1e803d; margin-bottom:30px;">

                <a href="#hosiptal-info01">担当医師</a>


                <a href="#hosiptal-info02">看護体制</a>


                <a href="#hosiptal-info03">病室のご案内</a>


                <a href="#hosiptal-info04">プライバシーの保護</a>


                <a href="#hosiptal-info05">食事について</a>


                <a href="#hosiptal-info06">点灯・消灯時間について</a>


                <a href="#hosiptal-info07">外出・外泊について</a>


                <a href="#hosiptal-info08">付き添いについて</a>


                <a href="#hosiptal-info09">喫煙について</a>


                <a href="#hosiptal-info10">電気製品の持ち込みについて</a>


                <a href="#hosiptal-info11">公衆電話</a>

            </div>
        </div>
        <div class="procedure-con">
            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="0" id="hosiptal-info01">担当医師</h3>
                <div class="procedure-detail accor" key="0">
                    <p>入院の際に診療を担当する医師（主治医・担当医）が決まります。診療に関して疑問点やご希望がありましたら、お気軽にご相談ください。</p>
                </div>
            </div>
            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="1" id="hosiptal-info02">看護体制</h3>
                <div class="procedure-detail accor" key="1">
                    <p>受け持ちの看護師を決めていますが、心配な事などがありましたら、いつでもご相談ください。看護師一同、患者様に安心して入院生活を送っていただけるよう努めております。</p>
                </div>
            </div>
            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="2" id="hosiptal-info03">病室のご案内</h3>
                <div class="procedure-detail accor" key="2">
                    <p>病室は4人部屋、3人部屋、2人部屋、個室があります。入院中の病状の変化などにより、病棟、病室を移っていただく場合がありますので、あらかじめご了承ください。<br>なお、個室のご利用については病状を優先いたします。利用中であっても病室の移動をお願いする場合もありますので、ご理解とご協力お願いします。
                    </p>
                </div>
            </div>

            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="4" id="hosiptal-info04">プライバシーの保護</h3>
                <div class="procedure-detail accor" key="4">
                    <p>プライバシーの保護のため、電話での患者様に関するお問い合わせにはお答えしておりません。また、面会を希望されない方はお申し出ください。<br>安全確認の為,病室や点滴ボトル、検査のための蓄尿袋などに氏名表示をしておりますが、ご都合の悪い方は看護師へお申し出ください。
                    </p>
                </div>
            </div>

            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="5" id="hosiptal-info05">食事について</h3>
                <div class="procedure-detail accor" key="5">
                    <div>
                        <h4 class="pro-sub-ttl">食事時間</h4>
                        <p class="pb10">朝食7時45分　昼食11時45分　夕食17時15分</p>
                        <ul class="pro-sub-block">
                            <li>患者様の病状にあった食事をお出ししています。</li>
                            <li>アレルギーなどの理由で、召し上がれない食品がある方は、主治医または看護師にお申し出ください。</li>
                            <li>歩ける方、車椅子で移動ができる方は、食堂で食事をとることも出来ます。</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="6" id="hosiptal-info06">点灯・消灯時間について</h3>
                <div class="procedure-detail accor" key="6">
                    <p>点灯時間は6時00分、消灯時間は21時00分です。消灯時間を過ぎてからの点灯や、病棟を離れることはご遠慮ください。</p>
                </div>
            </div>

            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="7" id="hosiptal-info07">外出・外泊について</h3>
                <div class="procedure-detail accor" key="7">
                    <p>円滑な治療を遂行するために、外出・外泊はできるだけご遠慮ください。やむをえず外出・外泊を希望される場合は主治医にご相談ください。また、院内であっても病棟を離れる場合には、看護師へお申し出ください。
                    </p>
                </div>
            </div>

            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="8" id="hosiptal-info08">付き添いについて</h3>
                <div class="procedure-detail accor" key="8">
                    <p>医療保険制度に基づく看護を行っていますので、原則として付き添いの必要はありません。ただし、患者様やご家族から申し出があり、主治医が認めた場合は、付き添うことができます。</p>
                </div>
            </div>

            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="9" id="hosiptal-info09">喫煙について</h3>
                <div class="procedure-detail accor" key="9">
                    <p>喫煙は、ご自身はもとより周囲の方にも悪影響を及ぼすため、当院は敷地内全面禁煙を実施しています。病院内外において喫煙する場所はありませんので、禁煙にご協力をお願いします。なお、禁煙の指示を守られない場合は、防火管理上、退院または、転院していただくことがありますのでご了承ください。
                    </p>
                </div>
            </div>

            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="10" id="hosiptal-info10">電気製品の持ち込みについて</h3>
                <div class="procedure-detail accor" key="10">
                    <div>
                        <h4 class="pro-sub-ttl">使用できる電気製品</h4>
                        <p class="pb10">コンピュータ機器（パソコンなど）、音響機器（CD、MD、ラジオなど）、映像機器（DVDなど）、電気カミソリ、ドライヤーなど、充電機器類。</p>
                    </div>
                    <div>
                        <h4 class="pro-sub-ttl">注意事項</h4>
                        <ul class="pro-sub-block">
                            <li>医療機器優先で電源を使用することをご了承ください。</li>
                            <li>使用に当たっては、他の患者様への配慮（イヤホン使用など）をお願いします。</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="11" id="hosiptal-info11">公衆電話</h3>
                <div class="procedure-detail accor" key="11">
                    <p>公衆電話は1階と2階に設置してあります。</p>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="item03-sec">
    <div class="container m-w800">
        <div class="hosiptal-inn-conn hospital-comm-btn">
            <h2 class="h2-ttl h2-mb h2-mb-sp" id="item03-sec">費用とお支払方法</h2>


            <p class="nav-desc" style="margin-top:30px">このページでは次の情報をご案内しています。</p>

            <div class=" sec-nav" style="--text-color: #1e803d; margin-bottom:30px;">


                <a href="#hosiptal-info01">担当医師</a>


                <a href="#hosiptal-info02">看護体制</a>


                <a href="#hosiptal-info03">病室のご案内</a>

            </div>
        </div>
    </div>
    <div class="procedure-con  container m-w800">
        <div class="procedure-block">
            <h3 class="procedure-ttl accor-ttl" key="0" id="hosiptal-info01">担当医師</h3>
            <div class="procedure-detail accor" key="0">
                <p>入院の際に診療を担当する医師（主治医・担当医）が決まります。診療に関して疑問点やご希望がありましたら、お気軽にご相談ください。</p>
            </div>
        </div>
        <div class="procedure-block">
            <h3 class="procedure-ttl accor-ttl" key="1" id="hosiptal-info02">看護体制</h3>
            <div class="procedure-detail accor" key="1">
                <p>受け持ちの看護師を決めていますが、心配な事などがありましたら、いつでもご相談ください。看護師一同、患者様に安心して入院生活を送っていただけるよう努めております。</p>
            </div>
        </div>
        <div class="procedure-block">
            <h3 class="procedure-ttl accor-ttl" key="2" id="hosiptal-info03">病室のご案内</h3>
            <div class="procedure-detail accor" key="2">
                <p>病室は4人部屋、3人部屋、2人部屋、個室があります。入院中の病状の変化などにより、病棟、病室を移っていただく場合がありますので、あらかじめご了承ください。<br>なお、個室のご利用については病状を優先いたします。利用中であっても病室の移動をお願いする場合もありますので、ご理解とご協力お願いします。
                </p>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="item04-sec bg-gray">
    <div class="container m-w800">
        <div class="hosiptal-inn-conn">
            <h2 class="h2-ttl h2-mb h2-mb-sp" id="item04-sec">面談・面会について</h2>
        </div>
        <div class="procedure-con">
            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="19">主治医にお話をお聞きになりたいときは</h3>
                <div class="procedure-detail accor" key="19">
                    <p>予約制になっておりますので、あらかじめ病棟を通じて日程を確認してください。</p>
                </div>
            </div>
            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="20">面会</h3>
                <div class="procedure-detail accor" key="20">
                    <p>面会は原則自由ですが、病状が不安定な場合、医師が面会を制限することもございますので、あらかじめ主治医または病棟看護師にお尋ねください。</p>
                    <p class="pt25 pt15-sp">面会時間は下記の通りとなります。</p>
                    <p class="pt25 pt15-sp">9時00分～20時30分（平日・土日祝共通）※コロナ以前</p>
                    <p class="pt25 pt15-sp">現在は都度状況に合わせての対応となります。詳しくは<a class="txt-b dis-in"
                            href="<?php echo home_url() . '/news'; ?>">お知らせページ</a>をご確認ください。</p>
                    <p class="pt25 pt15-sp">ご面会につきましては、検査や作業療法など治療に関するものを優先させていただく場合もございますので、あらかじめ病棟にご確認くださるようお願いいたします。
                    </p>
                    <p class="pt25 pt15-sp">各病棟ごとの作業療法の時間は下記の通りとなります。作業療法の時間帯のご面会は、極力避けていただきますようお願い致します。</p>
                    <div class="interview-time">
                        <div class="time-list">
                            <div class="time-block">
                                <h4>西2・西4病棟</h4>
                                <p class="block-ti">午前 9:30～12:00</p>
                            </div>
                            <div class="time-block">
                                <h4>東2・西3・西5病棟</h4>
                                <p class="block-ti">午後 13:30～15:00</p>
                            </div>
                        </div>
                        <p>※ 作業療法の開始時、終了時の時間帯は、患者様の移動のためエレベーターがご利用できません。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="item05-sec">
    <div class="container m-w800">
        <div class="hosiptal-inn-conn">
            <h2 class="h2-ttl h2-mb h2-mb-sp" id="item05-sec">入院の費用</h2>
        </div>
        <div class="procedure-con">
            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="21">支払い</h3>
                <div class="procedure-detail accor" key="21">
                    <p>
                        入院費（医療費）は1ヵ月を取りまとめ翌月15日に請求書を発送しておりますので月内に受付でお支払いください。なお医療費についてご質問等ございましたら、病院受付へお申し出ください。<br />
                        ※ 郵便書留での支払いも可能ですが、お釣りの返送はできません
                    </p>
                    <p class="pt25 pt15-sp">入院費の支払い時間は下記の通りとなります。</p>
                    <p class="pt25 pt15-sp">平日：9時00分～17時00分<br>土曜日：9時00分～12時00分</p>
                </div>
            </div>
            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="22">お小遣い</h3>
                <div class="procedure-detail accor" key="22">
                    <p>主な用途は下記のとおりで1ヵ月約2万円が目安です。</p>
                    <ul>
                        <ol>
                            １．嗜好品（ジュース・お菓子等）、果物、日用品、化粧品など
                        </ol>
                        <ol>
                            ２．洗濯代（私物：院内・院外クリーニング）、院内美容・理容、新聞代など
                        </ol>
                    </ul>
                    <p class="p-txt-b mt35"><span>※</span>金銭管理を病院に委託される場合、約定書契約が必要です。</p>
                    <p class="p-txt-b"><span>※</span>預り金手数料をお支払いいただきますが、管理の仕方により金額が異なりますので病棟でご確認ください。</p>
                    <p class="p-txt-b"><span>※</span>約定書契約の場合、個人別に毎月明細書をお渡ししています。</p>
                    <p class="p-txt-b"><span>※</span>個人別台帳を作成しており、すべてコンピュータ処理をしております。なお台帳の保管は1年間とさせていただいております。</p>
                </div>
            </div>
            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="23">保険証の確認</h3>
                <div class="procedure-detail accor" key="23">
                    <p>
                        健康保険証の資格等による誤請求事故防止のために毎月月初めに確認いたしますので、病院受付にご提出ください。<br />
                        また、保険証に変更があった場合は、速やかにお申し出ください。
                    </p>
                </div>
            </div>

            <div class="tb-scrollbtn js-fix01" style="">
                <img class="inline-block sp"
                    src="<?php bloginfo('template_directory'); ?>/assets/img/nyuuin/sp-swipe.png" alt="Scroll" />
            </div>
        </div>
    </div>
</section>
<section class="item06-sec item06-sec-ow bg-gray">
    <div class="container m-w800">
        <div class="hosiptal-inn-conn">
            <h2 class="h2-ttl h2-mb h2-mb-sp" id="item06-sec">その他事項</h2>
        </div>
        <div class="procedure-con">
            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="44">医療相談</h3>
                <div class="procedure-detail accor" key="44">
                    <p>
                        入・退院時、医療費の助成、年金の申請方法、手続き等ご不明な点がございましたら、1階相談室をご利用ください。（予約制）<br />
                        また、各書類（診断書など）の窓口にもなっておりますので、御用の際は相談室まで直接お申し出ください。
                    </p>
                </div>
            </div>
            <div class="procedure-block">
                <h3 class="procedure-ttl accor-ttl" key="25">退院の手続き</h3>
                <div class="procedure-detail accor" key="25">
                    <p>
                        印鑑をお持ちください。入院費用（医療費）の支払いは退院時に病院受付にて済ませてください。<br />
                        入院時の保証金は領収書と引き換えにお返しします。お小遣いの精算は、退院して１週間ほどかかる場合もありますので、退院時に病棟受付にてご確認ください。
                    </p>
                </div>
            </div>
            <div class="procedure-block pb40 pb0-sp">
                <h3 class="procedure-ttl accor-ttl" key="26">その他</h3>
                <div class="procedure-detail accor procedure-other-detail" key="26">
                    <p>
                        個室や2人部屋などもございます。（差額室料が別途かかります）<br />病院の管理上、暴力団に関係する方の入院、通院及び面会等は固くお断りいたします。<br />
                        医療費・お小遣い等のお支払いが期日中になされない場合は、退院していただくこともありますのでご注意ください。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();