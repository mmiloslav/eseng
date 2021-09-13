<?php
	require_once "functions.php";
	$title = "Posts";
	require 'header.php';
	$head = getHeadsbyId ();
	$main = getMainsbyId ();
?>
<script src="script/scriptp.js"></script>
	<main>
		<div class="block1 fixed flex">
			<h2>Posts</h2>
			<div class="posts">
				<?php
					for ($i=0; $i < count($head); $i++) {
						echo '<div class="post">';
						echo '<div class="post-head flex">';
						echo '<div class="post-head__1"><h3>'.$head[$i]['ph2'].'</h3></div>';
						echo '<div class="post-head__2"><h3>'.$head[$i]['ph1'].'</h3></div>';
						echo '</div>';
						for ($j=0; $j < count($main); $j++) { 
							if ($head[$i]['id_ph'] == $main[$j]['post_head']) {
								echo '<div class="post-main">';
								echo '<div class="post-main__head"><h4>'.$main[$j]['pm_head'].'</h4></div>';
								echo '<div class="post-main__text">'.$main[$j]['pm_text'].'</div>';
								echo '</div>';
							}
						}
						echo '<img src="img/posts/post'.$head[$i]['id_ph'].'.png">';
						echo '</div>';
					}
				?>
			</div>
		</div>
	</main>
<?php
	 require 'footer.php';
?>