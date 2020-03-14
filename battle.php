<?php
require_once('janken.php');

//$janken = new Janken($_POST['playerHand']);
$janken = new Janken();
$janken->setPlayerHand($_POST['playerHand']);
$janken->setPcHand();
$janken->battle();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>じゃんけん</title>
</head>
<body>
    <h1>結果は・・・</h1>
        <p><?= $janken->getResult() ?>！</p>

        あなた：<?= $janken->getPlayerHand() ?><br>
        コンピューター：<?= $janken->getPcHand() ?><br>

        <p><a href="index.php">>>もう一回勝負する</a></p>
    </div>
</body>
</html>
