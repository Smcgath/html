<!DOCTYPE html>
<html lang="en">
	<?php require 'header.php' ?>

	<body>

		<?php require 'navigation.php' ?> 
		<div class="container-fluid" id="Not_Ajax_Output">
			<h1>Index.php</h1>
			<div class="row">

              <?php
               $sql = 'SELECT id,name FROM category ORDER BY id';
               foreach ($pdo->query($sql) as $row) {
	                echo '<a href="#"><div class="col-4-lg myCategories" id="' . $row['id']. '">' . $row['name'] . '</div></a>';
               }
              ?>

				<a href=""><div class="col-4-lg">Games</div></a>
				<a href=""><div class="col-4-lg">Toys</div></a>
				<a href=""><div class="col-4-lg">Puzzles</div></a>
			</div>



			<div id="inner_ajax_Output">
			<div>



			<div>Content about category</div>
			<div>
				<div>image</div>
				<div>content about subcategory</div>
			</div>
		
		</div>

		<div class="container-fluid" id="ajax_Output">

		</div>


<?php require 'footer.php' ?>


	</body>

	
</html>





