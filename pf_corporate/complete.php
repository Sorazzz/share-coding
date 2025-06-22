<?php
$mailto = $_POST[ "email" ];
$subject = "お問い合わせ";
$header = "From:info@tobutori.com";
$header .= "\n";
$header .= "Bcc:sakurai@tobutori.com";
$message = "***************************************************" . "\n" . "\n" .
$_POST[ "name" ] . " 様、お問い合わせを頂き、誠にありがとうございます。" . "\n" .
"追って担当者よりご連絡させていただきます。" . "\n" . "\n" .
"こちらから送信したメールが迷惑フォルダに振り分けられてしまうケースがございます。" . "\n" .
"3日たっても返信がない場合はパソコンやスマートフォンの設定をご確認の上、恐れ入りますが、再度ご連絡を頂戴できればと存じます。" . "\n" . "\n" .
"***************************************************" . "\n" . "\n" .
"お客様からのお問い合わせを下記内容にて受け付けました" . "\n" . "\n" .
"氏名：" . $_POST[ "name" ] . "\n" .
"フリガナ：" . $_POST[ "huri" ] . "\n" .
"メールアドレス：" . $_POST[ "email" ] . "\n" .
"電話番号：" . $_POST[ "tel" ] . "\n" .
"ご連絡方法：" . $_POST[ "contact_means" ] . "\n" .
"お問い合わせ内容：" . "\n" . $_POST[ "comment" ];

mb_internal_encoding( "UTF-8" );

session_start();
// POSTされたトークンを取得
$token = isset($_POST["token"]) ? $_POST["token"] : "";
// セッション変数のトークンを取得
$session_token = isset($_SESSION["token"]) ? $_SESSION["token"] : "";
// セッション変数のトークンを削除
unset($_SESSION["token"]);
// POSTされたトークンとセッション変数のトークンの比較をして一致したら
if ($token != "" && $token == $session_token) {

  //メール送信
    mb_send_mail( $mailto, $subject, $message, $header );

  //文言
    $thanks = "お問い合わせフォームの送信を完了いたしました。";
    $thanks2 = "このたびはお問い合わせいただきありがとうございます。<br><br>
                ご入力いただいたメールアドレス宛に受付確認メールをお送りしましたのでご確認ください。<br><br>
                確認メールが届いていない場合には、メールアドレスが誤っているか、確認メールが迷惑メールフォルダ等に振り分けられている可能性がありますので、再度ご確認をお願いいたします。<br><br>
                なお、お問い合わせ内容につきましては、通常3営業日程度を目処に、弊社担当者よりご回答させていただきます。<br>
                いましばらくお待ちくださいませ。";

} else {

    $thanks = "メールの送信に失敗しました。";
    $thanks2 = "申し訳ございませんが、時間をおいて再度お試しください。";

}

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
                    <a href="index.php"><img src="images/logo.png" alt="ソーシャルテックのロゴ"></a>
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
                <a href="index.php"><img src="images/logo.png" alt="ソーシャルテックのロゴ"></a>
            </h1>
            <div class="header-right">
                <nav>
                    <ul>
                        <div class="header-menu">
                            <li class="header-menu-item"><a href="#home">HOME</a></li>
                            <li class="header-menu-item"><a href="#mission">MISSION</a></li>
                            <li class="header-menu-item"><a href="#project">PROJECT</a></li>
                            <li class="header-menu-item"><a href="#aboutus">ABOUT US</a></li>
                            <li class="header-menu-item"><a href="#vision">VISION</a></li>
                            <li class="header-menu-item"><a href="#company">COMPANY</a></li>
                            <li class="header-menu-item"><a href="#contact">CONTACT</a></li>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="thanks">
            <div class="wrapper-900">
                <h2 class="ttl-30 mg-b-30 br-pc"><?php echo $thanks ?></h2>
                <h2 class="ttl-30 mg-b-30 br-tab"><?php echo $thanks ?></h2>
                <p><?php echo $thanks2 ?></p>
                <div class="button-wrapper">
                    <button class="button2"><a href="index.php">TOPへ戻る</a></button>
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
                <div class="sns-content">
                    <a href="https://x.com" target="_blank"><img src="images/sns-icons/logo-white.png" alt="X" class="sns-icon mg-r-30"></a>
                    <a href="https://www.instagram.com" target="_blank"><img src="images/sns-icons/Instagram_Glyph_White.png" alt="Instagram" class="sns-icon mg-r-30"></a>
                    <a href="https://www.facebook.com" target="_blank"><img src="images/sns-icons/Facebook_Logo_Secondary.png" alt="Facebook" class="sns-icon"></a>
                </div>
                <p><small class="copyright">&copy; SocialTech, Inc. All Rights Reserved.</small></p>
            </div>
        </div>
    </footer>

</body>

    <script src="js/script.js"></script>

</html>