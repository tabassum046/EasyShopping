<?php include 'inc/header.php';?>


<div class="category">
			<h2>CATEGORIES</h2>
				<ul>
                    <?php 

						$getCat = $cat->getAllCat();
						if ($getCat) {
							while ($result = $getCat->fetch_assoc()) {
								
						
						 ?>
				      <li><a href="productbycat.php?catId=<?php echo $result['catId']; ?>"><?php echo $result['catName']; ?></a></li>
				      <?php }} ?>

                 </ul>
    	
</div>
    				



  <?php include 'inc/footer.php';?>