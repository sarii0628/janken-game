<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>じゃんけん</title>
</head>
<body>
	<h1>じゃんけんげーむ</h1>
	出す手を選んで勝負してください。
	<div class="form-box">
		<form action="battle.php" method="post">
			<label>
				<input type="radio" title="playerHand" name="playerHand" value="グー" checked>グー
			</label>
			<label>
				<input type="radio" title="playerHand" name="playerHand" value="チョキ">チョキ
			</label>
			<label>
				<input type="radio" title="playerHand" name="playerHand" value="パー">パー
			</label>
			<button type="submit" class="battle-button">勝負する！</button>
		</form>
	</div>
</body>
</html>