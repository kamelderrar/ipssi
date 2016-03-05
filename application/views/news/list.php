<?php foreach ($news as$article):?>


	<h2><?php  echo $article['id']; ?>
	<?php  echo $article['title']; ?></h2>
	<p><?php  echo $article['text']; ?></p>


<?php endforeach; ?>



 