<?php

session_start();
// 二重送信防止用トークンの発行
$token = uniqid('', true);
//トークンをセッション変数にセット
$_SESSION['token'] = $token;

function convert_char( $target ) {
    $target = stripslashes( $target );
    $target = htmlspecialchars( $target, ENT_QUOTES );
    return $target;
}

$name = isset($_POST["name"]) ? convert_char($_POST["name"]) : "";
$huri = isset($_POST["huri"]) ? convert_char($_POST["huri"]) : "";
$email = isset($_POST["email"]) ? convert_char($_POST["email"]) : "";
$tel = isset($_POST["tel"]) ? convert_char($_POST["tel"]) : "";
$contact_means = isset($_POST["contact_means"]) ? convert_char($_POST["contact_means"]) : "";
$comment = isset($_POST["comment"]) ? convert_char($_POST["comment"]) : "";

$comment_conv = nl2br( $comment, false );

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SocialTech | トップページ">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/vegas.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>SocialTech ver.2</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/vegas.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/messages_ja.js"></script>
</head>
<body>
    <header>
        <div class="wrapper-900">
            <div class="header-tab">
                <h1 class="header-logo">
                    <a href="index.html"><img src="images/logo.png" alt="ソーシャルテックのロゴ"></a>
                </h1>
                <button id="hamburger" class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
        <div id="header-wrapper" class="header-wrapper">
            <h1 class="header-logo logo-none">
                <a href="index.html"><img src="images/logo.png" alt="ソーシャルテックのロゴ"></a>
            </h1>
            <div class="header-right">
                <nav>
                    <ul>
                        <div class="header-menu">
                            <li class="header-menu-item"><a href="#mission">MISSION</a></li>
                            <li class="header-menu-item"><a href="#project">PROJECT</a></li>
                            <li class="header-menu-item"><a href="#aboutus">ABOUT US</a></li>
                            <li class="header-menu-item"><a href="#vision">VISION</a></li>
                            <li class="header-menu-item"><a href="#company">COMPANY</a></li>
                            <li class="header-menu-item"><a href="#contact">CONTACT</a></li>
                        </div>
                    </ul>
                </nav>
                <span class="header-line"></span>
                <div class="sns-content">
                    <a href="https://x.com" target="_blank"><img src="images/sns-icons/logo-black.png" alt="X" class="sns-icon mg-r-30"></a>
                    <a href="https://www.instagram.com" target="_blank"><img src="images/sns-icons/Instagram_Glyph_Gradient.png" alt="Instagram" class="sns-icon mg-r-30"></a>
                    <a href="https://www.facebook.com" target="_blank"><img src="images/sns-icons/Facebook_Logo_Primary.png" alt="Facebook" class="sns-icon"></a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="hero">
            <div class="hero-text">
                <h2 class="hero-ttl-en">WORLD PEACE</h2>
                <h2 class="hero-ttl-ja">IT教育で世界平和を実現する</h2>
            </div>
        </div>

        <div id="mission">
            <div class="wrapper-1440">
                <div class="mission-wrapper">
                    <div class="section-ttl mission-ttl">
                        <h2 class="ttl-en col-white">MISSION</h2>
                        <h2 class="ttl-ja col-white">私たちの使命</h2>
                    </div>
                    <div>
                        <div class="mission-content mission-line">
                            <h3 class="ttl-30 mg-b-30">世界平和の実現</h3>
                            <p>人類の悲願である世界平和。世界平和を脅かす様々な社会問題を解決するためには、イノベーションをどんどん起こしていく必要があります。SocialTechは、プログラミング教育を通してイノベーターを輩出することで、世界平和という大きなテーマに挑んでいきます。</p>
                        </div>
                        <div class="mission-content">
                            <h3 class="ttl-30 mg-b-30">S2DGsの実現</h3>
                            <p>国連が掲げる「Sustainable Development Goals（持続可能な開発目標）」に含まれる17つのグローバル目標のうち、以下の5つの目標の実現をミッションとしてサービスを展開しています。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="project" class="pd-tb-120">
            <div class="wrapper-1440">
                <div class="section-ttl">
                    <h2 class="ttl-en">PROJECT</h2>
                    <h2 class="ttl-ja">私たちの使命</h2>
                </div>
                <div class="project-wrapper">
                    <div class="project-content mg-b-100">
                        <img src="images/product-mantoman.png" alt="プログラミング教育" class="project-image">
                        <h3 class="ttl-30 mg-tb-30">プログラミング教育</h3>
                        <p>2013年より日本で唯一の専属講師によるマンツーマンのプログラミングレッスンを開始。AI/人工知能やウェブデザインの学習も可能です。</p>
                    </div>
                    <div class="project-content mg-b-100">
                        <img src="images/product-media.png" alt="プログラミング学習メディア" class="project-image">
                        <h3 class="ttl-30 mg-tb-30">プログラミング学習メディア</h3>
                        <p>月間200万人に読まれる日本最大級のプログラミング学習サイト「SocialTech Blog」やYouTubeチャネルにて学習情報を発信しています。</p>
                    </div>
                    <div class="project-content mg-b-100">
                        <img src="images/product-career.png" alt="人材紹介事業" class="project-image">
                        <h3 class="ttl-30 mg-tb-30">人材紹介事業</h3>
                        <p>エンジニアへの転職に特化した履歴書や職務経歴書のアドバイスや面接対策を行い、豊富な求人の中から最適なキャリア選択を支援します。</p>
                    </div>
                    <div class="project-content">
                        <img src="images/product-b2b.png" alt="法人研修事業" class="project-image">
                        <h3 class="ttl-30 mg-tb-30">法人研修事業</h3>
                        <p>エンジニアへの転職に特化した履歴書や職務経歴書のアドバイスや面接対策を行い、豊富な求人の中から最適なキャリア選択を支援します。</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="aboutus" class="pd-tb-120">
            <div class="aboutus-wrapper">
                <div class="aboutus-image"></div>
                <div class="section-ttl aboutus-ttl-tablet">
                    <h2 class="ttl-en">ABOUT US</h2>
                    <h2 class="ttl-ja">3つの組織文化</h2>
                </div>
                <div class="aboutus-text">
                    <div class="section-ttl aboutus-ttl-pc">
                        <h2 class="ttl-en">ABOUT US</h2>
                        <h2 class="ttl-ja">3つの組織文化</h2>
                    </div>
                    <div class="aboutus-content">
                        <div class="aboutus-ttl">
                            <h3 class="ttl-num">01</h3>
                            <h3 class="ttl-30">フレキシブル</h3>
                        </div>
                        <p>リモートワーク、フルフレックス、副業推奨など1人1人が最大限のパフォーマンスを発揮できる柔軟な働き方を促進しています。</p>
                    </div>

                    <span class="aboutus-line"></span>

                    <div class="aboutus-content">
                        <div class="aboutus-ttl">
                            <h3 class="ttl-num">02</h3>
                            <h3 class="ttl-30">ティール</h3>
                        </div>
                        <p>会社全体を1つの生命体として捉え、お互いが深く結びついた一階層型組織として部署・チーム関係なく課題解決をできる組織を目指しています。</p>
                    </div>

                    <span class="aboutus-line"></span>

                    <div class="aboutus-content">
                        <div class="aboutus-ttl">
                            <h3 class="ttl-num">03</h3>
                            <h3 class="ttl-30">自己実現</h3>
                        </div>
                        <p>クオーター毎に経営・部署・個人ごとにOKRを設定し個人のキャリアと会社の目指す方向の軌道修正を行っております。</p>
                    </div>

                    <span class="aboutus-line"></span>

                </div>
            </div>
        </div>

        <div id="vision" class="pd-tb-120">
            <div class="wrapper-1440">
                <div class="section-ttl">
                    <h2 class="ttl-en col-white">VISION</h2>
                    <h2 class="ttl-ja col-white">7つの行動指針</h2>
                </div>
                <div class="vision-content">
                    <div class="vision-item mg-rb-30">
                        <p class="ttl-num-2">01</p>
                        <div class="vision-ttl">
                            <h3 class="ttl-en-s">CUSTOMER IS BOSS</h3>
                            <h3 class="ttl-30">あなたのボスは顧客である</h3>
                        </div>
                        <p>私たちは常にお客様志向で行動し、お客様を喜ばせ、期待値を超えた感動を提供することを大切にします。</p>
                    </div>

                    <div class="vision-item mg-b-30">
                        <p class="ttl-num-2">02</p>
                        <div class="vision-ttl">
                            <h3 class="ttl-en-s">MOVE FAST</h3>
                            <h3 class="ttl-30">早さは価値</p>
                        </div>
                        <p>素早く試し、素早く実行することで新しい気付きや発見を見つけていきます。</p>
                    </div>

                    <div class="vision-item mg-rb-30">
                        <p class="ttl-num-2">03</p>
                        <div class="vision-ttl">
                            <h3 class="ttl-en-s">IMPACT DRIVEN</h3>
                            <h3 class="ttl-30">作業するのは仕事ではない</h3>
                        </div>
                        <p>問題から考え、成果とは何かを考え続け、インパクトのある成果を生むために仕事をしていきます。</p>
                    </div>

                    <div class="vision-item mg-b-30">
                        <p class="ttl-num-2">04</p>
                        <div class="vision-ttl">
                            <h3 class="ttl-en-s">SAVE TIME, SAVE MONEY</h3>
                            <h3 class="ttl-30">浪費は命取りになる</h3>
                        </div>
                        <p>少ないコストでできる方法を考えます。お金だけでなく、人の時間をいただいている自覚を持ち、あらゆるリソースを有意義に活用します。</p>
                    </div>

                    <div class="vision-item mg-rb-30">
                        <p class="ttl-num-2">05</p>
                        <div class="vision-ttl">
                            <h3 class="ttl-en-s">BE GENTLE</h3>
                            <h3 class="ttl-30">「優しくない」をなくす</h3>
                        </div>
                        <p>社会をすこしずつ優しくしていきます。自分、家族、同僚、顧客、他人、全ての人に優しくいることを心がけます。</p>
                    </div>

                    <div class="vision-item mg-b-30">
                        <p class="ttl-num-2">06</p>
                        <div class="vision-ttl">
                            <h3 class="ttl-en-s">ABC</h3>
                            <h3 class="ttl-30">当たり前の事をバカにせずにちゃんとやる</h3>
                        </div>
                        <p>礼儀、健康、嘘をつかない。当たり前の事が出来ているかを常に自問し、当たり前の基準を高く持って行動します。</p>
                    </div>

                    <div class="vision-item">
                        <p class="ttl-num-2">07</p>
                        <div class="vision-ttl">
                            <h3 class="ttl-en-s">ZTI</h3>
                            <h3 class="ttl-30">絶対的当事者意識</h3>
                        </div>
                        <p>役職や役割に応じた相対的な当事者意識ではなく、自身の身で起こることすべてに対する絶対的な当事者意識を持ちます。</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="company" class="pd-tb-120">
            <div class="wrapper-1440">
                <div class="section-ttl">
                    <h2 class="ttl-en">COMPANY</h2>
                    <h2 class="ttl-ja">会社概要</h2>
                </div>
                <div class="company-wrapper">
                    <table class="company-info">
                        <tr>
                            <th>会社名</th>
                            <td>株式会社SocialTech</td>
                        </tr>
                        <tr>
                            <th>所在地</th>
                            <td>〒101-0022<br>東京都千代田区神田練塀町300番地 住友不動産秋葉原駅前ビル5F</td>
                        </tr>
                        <tr>
                            <th>アクセス</th>
                            <td>JR「秋葉原駅」より徒歩1分</td>
                        </tr>
                        <tr>
                            <th>代表者</th>
                            <td>代表取締役 田中 太郎</td>
                        </tr>
                        <tr>
                            <th>設立</th>
                            <td>2015年3月19日</td>
                        </tr>
                    </table>
                    <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0686781169925!2d139.7720723109262!3d35.699927528833065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188fee13660e23%3A0x77137876edf742ac!2z5L2P5Y-L5LiN5YuV55Sj56eL6JGJ5Y6f6aeF5YmN44OT44Or!5e0!3m2!1sja!2sjp!4v1748554826342!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div id="contact" class="pd-tb-120">
            <div class="wrapper-900">
                <div class="section-ttl">
                    <h2 class="ttl-en">CONTACT</h2>
                    <h2 class="ttl-ja">お問い合わせ</h2>
                </div>
                <div class="contact-form">
                    <form action="complete.php" method="post" id="contact_form">
                        <div class="contact-item">
                            <div class="item-ttl"><label for="name">氏名</label><span class="required-icon">必須</span></div>
                            <input type="text" id="name" name="name" placeholder="例：田中 太郎" required>
                        </div>

                        <div class="contact-item">
                            <div class="item-ttl"><label for="huri">フリガナ</label><span class="required-icon">必須</span></div>
                            <input type="text" id="huri" name="huri" placeholder="例：タナカ タロウ" required>
                        </div>

                        <div class="contact-item">
                            <div class="item-ttl"><label for="email">メールアドレス</label><span class="required-icon">必須</span></div>
                            <input type="email" id="email" name="email" placeholder="例：example@gmail.com" required>
                        </div>
                        
                        <div class="contact-item">
                            <div class="item-ttl"><label for="tel">電話番号</label></div>
                            <input type="tel" id="tel" name="tel" placeholder="例：080-1234-5678" >
                        </div>
                        
                        <div class="contact-item">
                            <div class="item-ttl"><label for="contact">ご連絡方法</label><span class="required-icon">必須</span></div>
                            <div class="checkbox-group">
                                <label for="contact_phone"><input type="radio" id="phone" name="contact_means" value="お電話" class="checkbox" required>お電話</label>
                                <label for="contact_mail"><input type="radio" id="mail" name="contact_means" value="メール" class="checkbox" required>メール</label>
                                <label for="contact_both"><input type="radio" id="both" name="contact_means" value="どちらでも" class="checkbox" required>どちらでも</label>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="item-ttl"><label for="comment">お問い合わせ内容</label><span class="required-icon">必須</span></div>
                            <textarea id="comment" name="comment" rows="4" cols="70" required></textarea>
                        </div>
                        
                        <div class="contact-item">
                            <div class="item-ttl"><label for="privacy">個人情報の取り扱い</label><span class="required-icon">必須</span></div>
                            <div class="privacy-scroll">
                                <div class="privacy-item">
                                    <p class="privacy-ttl">１．組織の名称又は氏名</p>
                                    <p class="privacy-text">株式会社SocialTech</p>
                                </div>
                                <div class="privacy-item">
                                    <p class="privacy-ttl">２．個人情報保護管理者（若しくはその代理人）の氏名又は職名、所属及び連絡先</p>
                                    <p class="privacy-text">鈴木 一郎 コーポレート部<br>
                                        メールアドレス：samurai@example.com<br>
                                        TEL：03-1234-5678
                                    </p>
                                </div>
                                <div class="privacy-item">
                                    <p class="privacy-ttl">３．個人情報の利用目的</p>
                                    <div class="privacy-text">
                                        <ul class="privacy-list">
                                            <li>本サービス及び本サービスに関連する情報の提供又はそれらに関する連絡のため</li>
                                            <li>ユーザーの本人確認のため</li>
                                            <li>当社サービスのご案内のため</li>
                                            <li>当社の商品等の広告または宣伝（電子メールによるものを含むものとします。）</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="privacy-item">
                                    <p class="privacy-ttl">４．個人情報の取り扱い業務の委託</p>
                                    <p class="privacy-text">個人情報の取扱業務の全部または一部を外部に業務委託する場合があります。その際、弊社は、個人情報を適切に保護できる管理体制を敷き実行していることを条件として委託先を厳選したうえで、機密保持契約を委託先と締結し、お客様の個人情報を厳密に管理させます。</p>
                                </div>
                                <div class="privacy-item">
                                    <p class="privacy-ttl">５．個人情報の開示等の請求</p>
                                    <p class="privacy-text">お客様は、弊社に対してご自身の個人情報の開示等（利用目的の通知、開示、内容の訂正・追加・削除、利用の停止または消去、第三者への提供の停止）に関して、当社問合わせ窓口に申し出ることができます。
                                        その際、弊社はお客様ご本人を確認させていただいたうえで、合理的な期間内に対応いたします。
                                        なお、個人情報に関する弊社問合わせ先は、次の通りです。<br>
                                        株式会社SocialTech 個人情報問合せ窓口<br>
                                        〒150-0043 東京都千代田区神田練塀町300番地 住友不動産秋葉原駅前ビル5F<br>
                                        メールアドレス：samurai@example.com<br>
                                        TEL：03-1234-5678
                                    </p>
                                </div>
                                <div class="privacy-item">
                                    <p class="privacy-ttl">６．個人情報を提供されることの任意性について</p>
                                    <p class="privacy-text">お客様がご自身の個人情報を弊社に提供されるか否かは、お客様のご判断によりますが、もしご提供されない場合には、適切なサービスが提供できない場合がありますので予めご了承ください。</p>
                                </div>
                            </div>
                            <div class="checkbox-group">
                                <label><input type="checkbox" id="privacy" name="privacy" required class="checkbox">個人情報の取り扱いについてご同意いただける場合は、チェックをしてください。</label>
                            </div>
                        </div>
                        <div class="button-wrapper">
                            <input type="submit" name="submit" value="内容を送信する" id="submit" class="button-main hover">
                        </div>
                    </form>
                    <input type="hidden" name="token" value="<?php echo $token; ?>">
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-wrapper">
            <div class="footer-top">
                <div><img src="images/logo-sp.png" class="footer-logo" alt="ソーシャルテックのロゴ"></div>
                <nav>
                    <ul>
                        <div class="footer-menu">
                            <li class="footer-menu-item"><a href="#mission">MISSION</a></li>
                            <li class="footer-menu-item"><a href="#project">PROJECT</a></li>
                            <li class="footer-menu-item"><a href="#aboutus">ABOUT US</a></li>
                            <li class="footer-menu-item"><a href="#vision">VISION</a></li>
                            <li class="footer-menu-item"><a href="#company">COMPANY</a></li>
                            <li class="footer-menu-item"><a href="#contact">CONTACT</a></li>
                        </div>
                    </ul>
                </nav>
            </div>
            <div class="footer-bottom">
                <p><small class="copyright-pc">&copy; 2021 SocialTech, Inc. All Rights Reserved.</small></p>
                <div class="sns-content">
                    <a href="https://x.com" target="_blank"><img src="images/sns-icons/logo-white.png" alt="X" class="sns-icon mg-r-30"></a>
                    <a href="https://www.instagram.com" target="_blank"><img src="images/sns-icons/Instagram_Glyph_White.png" alt="Instagram" class="sns-icon mg-r-30"></a>
                    <a href="https://www.facebook.com" target="_blank"><img src="images/sns-icons/Facebook_Logo_Secondary.png" alt="Facebook" class="sns-icon"></a>
                </div>
                <small class="copyright-sp">&copy; 2021 SocialTech, Inc. All Rights Reserved.</small>
            </div>
        </div>
    </footer>

</body>

    <script src="js/script.js"></script>

</html>