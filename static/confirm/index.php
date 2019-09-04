<?php
if ($_FILES['images']){
  $tempfile = $_FILES['images']['tmp_name'];
  $filesize = $_FILES['images']['size'];
  $filename = '../upload/file_' . date('Y-m-d') . '_' . $_FILES['images']['name'];
  if (is_uploaded_file($tempfile)) {
    if ( move_uploaded_file($tempfile, $filename)) {
    } else {
      echo "ファイルをアップロードできません。";
    }
  }
}
if ($_POST['お名前']) {
  $name = trim(htmlspecialchars($_POST['お名前'], ENT_QUOTES, 'UTF-8'));
  $name_text = "【お名前】{$name}";
}
if ($_POST['住所']) {
  $address = trim(htmlspecialchars($_POST['住所'], ENT_QUOTES, 'UTF-8'));
  $address_text = "【住所】{$address}";
}
if ($_POST['住所2']) {
  $address2 = trim(htmlspecialchars($_POST['住所2'], ENT_QUOTES, 'UTF-8'));
  $address2_text = "【住所2】{$address2}";
}
if ($_POST['メールアドレス']) {
  $email = trim(htmlspecialchars($_POST['メールアドレス'], ENT_QUOTES, 'UTF-8'));
  $email_text = "【メールアドレス】{$email}";
}
if ($_POST['電話番号']) {
  $tel = trim(htmlspecialchars($_POST['電話番号'], ENT_QUOTES, 'UTF-8'));
  $tel_text = "【電話番号】{$tel}";
}
if ($_POST['filepass']) {
  $filepass = $_POST['filepass'];
}
if(isset($_POST['submit'])) {
$boundary = "__BOUNDARY__";
mb_language("japanese");
mb_internal_encoding("UTF-8");
$emailTo = 'gogo7979@icloud.com';
$subject = 'トイレリフォームドットコム';
$headers = "Content-Type: multipart/mixed;boundary=\"" . $boundary . "\"\n";
$headers .= 'From: '.$from.' <'.$emailTo.'>';
$body = "--" . $boundary . "\n";
$body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
$body .= "トイレリフォームドットコムからのお問い合わせ

お問い合わせ内容
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
{$name_text}
{$address_text}
{$address2_text}
{$email_text}
{$tel_text}
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

このメールに心当たりの無い場合は、お手数ですが
下記連絡先までお問い合わせください。
この度はお問い合わせ重ねてお礼申し上げます。

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
トイレリフォームドットコム

アドレス：gogo7979@icloud.com
URL：https://toire-reform.com
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

";
if ($filepass){
$body .= "--" . $boundary . "\n";
$body .= "Content-Type: application/octet-stream; name=\"" . basename($filepass) . "\"\n";
$body .= "Content-Disposition: attachment; filename=\"" . basename($filepass) . "\"\n";
$body .= "Content-Transfer-Encoding: base64\n";
$body .= "\n";
$body .= chunk_split(base64_encode(file_get_contents($filepass)))."\n";

$body .= "--" . $boundary . "--";
}
$from = mb_encode_mimeheader(mb_convert_encoding("トイレリフォームドットコム","UTF-8"));
mb_send_mail($emailTo, $subject, $body, $headers);
//自動返信用
$subject = '【トイレリフォームドットコム】お問い合わせを受け付けました。';
$from = mb_encode_mimeheader(mb_convert_encoding("トイレリフォームドットコム","UTF-8"));
$headers = "Content-Type: multipart/mixed;boundary=\"" . $boundary . "\"\n";
$headers .= 'From: '.$from.' <'.$emailTo.'>';
$body = "--" . $boundary . "\n";
$body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
$body .= "{$name}様

トイレリフォームドットコムへのお問い合わせありがとうございます。

下記内容で承りました。

内容を確認いたしまして、
担当からご連絡させていただきます。
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
{$name_text}
{$address_text}
{$address2_text}
{$email_text}
{$tel_text}
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

このメールに心当たりの無い場合は、お手数ですが
下記連絡先までお問い合わせください。
この度はお問い合わせ重ねてお礼申し上げます。
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
トイレリフォームドットコム

アドレス：gogo7979@icloud.com
URL：https://toire-reform.com
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

";
if ($filepass){
$body .= "--" . $boundary . "\n";
$body .= "Content-Type: application/octet-stream; name=\"" . basename($filepass) . "\"\n";
$body .= "Content-Disposition: attachment; filename=\"" . basename($filepass) . "\"\n";
$body .= "Content-Transfer-Encoding: base64\n";
$body .= "\n";
$body .= chunk_split(base64_encode(file_get_contents($filepass)))."\n";
$body .= "--" . $boundary . "--";
}
    mb_send_mail($email,$subject, $body, $headers);
    $emailSent = true;
    header("Location: ../complete");
	exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset=utf-8" />
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="theme-color" content="#00CED0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>内容確認｜トイレリフォームドットコム</title>
<link rel="stylesheet" href="../css/confirm.min.css">
</head>
<body>
  <header class="blue">
    <div class="st-inner">
      <h1>
        <span>自社施工と、独自の仕入れルートで安心価格、誠実対応！</span>
        トイレリフォームドットコム
      </h1>
    </div>
  </header>
  <main>
  <section class="st-confirm">
    <div class="st-confirm__inner">
      <h2>確認画面</h2>
      <form method="POST">
          <?php if ($_POST['お名前']): ?><input type="hidden" name="お名前" value="<?php echo $name ?>"><?php endif;?>
          <?php if ($_POST['住所']): ?><input type="hidden" name="住所" value="<?php echo $address ?>"><?php endif;?>
          <?php if ($_POST['住所2']): ?><input type="hidden" name="住所2" value="<?php if ($_POST['住所2']) echo $address2?>"><?php endif;?>
          <?php if ($_POST['電話番号']): ?><input type="hidden" name="電話番号" value="<?php if ($_POST['電話番号']) echo $tel?>"><?php endif;?>
          <?php if ($_POST['メールアドレス']): ?><input type="hidden" name="メールアドレス" value="<?php if ($_POST['メールアドレス']) echo $email?>"><?php endif;?>
          <?php if ($_FILES['images']): ?><input type="hidden" name="filepass" value="<?php if ($_FILES['images']) echo $filename?>"><?php endif;?>
          <div class="st-content">
              <?php if ($_POST['お名前']): ?>
                <dl>
                  <dt>お名前</dt>
                  <dd><?php echo $name?></dd>
                </dl>
              <?php endif;?>
              <?php if ($_POST['住所']): ?>
                <dl>
                  <dt>住所</dt>
                  <dd><?php echo $address?></dd>
                </dl>
              <?php endif;?>
              <?php if ($_POST['住所2']): ?>
                <dl>
                  <dt>住所2</dt>
                  <dd><?php echo $address2?></dd>
                </dl>
              <?php endif;?>
              <?php if ($_POST['メールアドレス']): ?>
                <dl>
                  <dt>メールアドレス</dt>
                  <dd><?php echo $email?></dd>
                </dl>
              <?php endif;?>
              <?php if ($_POST['電話番号']): ?>
                <dl>
                  <dt>電話番号</dt>
                  <dd><?php echo $tel?></dd>
                </dl>
              <?php endif;?>
              <?php if ($_FILES['images']): ?>
                <?php if ($filesize > 5242880 ):?>
                <p class="center">5MB以下の画像を添付してください</p>
                <?php else: ?>
                  <dl>
                    <dt>トイレの画像</dt>
                    <dd>
                      <?php
                      echo '<img src="'.$filename.'">';
                      ?>
                    </dd>
                  </dl>
                <?php endif;?>
              <?php endif;?>
          </div>
          <div class="st-confirm__button">
              <button class="st-back gray" type="button" onclick="history.back()"><span>戻る</span></button>
              <?php if ($filesize < 5242880 ):?>
              <button class="st-button" name="submit" type="submit"><span>送信</span></button>
              <?php endif;?>
          </div>
        </form>
      </div>
    </section>
  </main>
  <footer>
    <h1>トイレリフォームドットコム</h1>
    <p><small>©︎ トイレリフォームドットコム. All rights reserved.</small></p>
  </footer>
</body>
</html>
