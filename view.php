<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="microcms.css">
		<title>Micro CMS Home</title>
	</head>
	<body>
		<header>
			<h1>Micro CMS</h1>
		</header>
	<?php foreach($articles as $article): ?>	
	<article>
		<h2> <?php echo $article['art_title']; ?> </h2>
		<h4> <?php echo $article['art_content']; ?> </h4>
	</article>
	<?php endforeach ?>
	</body>
	<footer class="footer">
		<a href="https://github.com/imadyaci/CMS">MicroCMS</a> is a minimalistic CMS built as a showcase for modern PHP development.
	</footer>
	
</html>