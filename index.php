<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ul>
		<?php for ($number=0;$number<=8;++$number) {?>
			<li>
				<a href="00<?php echo $number ?>.php">
					00<?php echo $number ?>
				</a>
			</li>
		<?php } ?>
	</ul>
</body>
</html>