<?php
// XSS対策関数（悪意あるHTMLが入っても安全にする）
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$name  = h($_POST['name']);
$item  = h($_POST['item']);
$amount = h($_POST['amount']);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>結果表示</title>
</head>
<body>

<p>私の名前は、 <?= $name ?></p>
<p>ご希望の商品は、 <?= $item ?></p>
<p>注文数は、 <?= $amount ?></p>

</body>
</html>
