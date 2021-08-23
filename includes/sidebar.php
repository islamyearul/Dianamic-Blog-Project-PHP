<?php




?>




<div class="sidebar clear">
			<div class="samesidebar clear">
				<h2>Categories</h2>
				<ul>
					<?php   $query = "SELECT * FROM category";
  							$categories = $objDB->select($query);
  								while($Data = mysqli_fetch_assoc($categories)){ ?>
					<li><a href="#"><?php echo $Data['cat_name'] ?></a></li>
					<?php } ?>
				</ul>
			</div>

			<div class="samesidebar clear">
				<h2>Latest articles</h2>
				<div class="popular clear">
					<h3><a href="#">Post title will be go here..</a></h3>
					<a href="#"><img src="images/post1.jpg" alt="post image" /></a>
					<p>Sidebar text will be go here.Sidebar text will be go here.Sidebar text will be go here.Sidebar text will be go here.</p>
				</div>

				<div class="popular clear">
					<h3><a href="#">Post title will be go here..</a></h3>
					<a href="#"><img src="images/post1.jpg" alt="post image" /></a>
					<p>Sidebar text will be go here.Sidebar text will be go here.Sidebar text will be go here.Sidebar text will be go here.</p>
				</div>

				<div class="popular clear">
					<h3><a href="#">Post title will be go here..</a></h3>
					<a href="#"><img src="images/post1.jpg" alt="post image" /></a>
					<p>Sidebar text will be go here.Sidebar text will be go here.Sidebar text will be go here.Sidebar text will be go here.</p>
				</div>

				<div class="popular clear">
					<h3><a href="#">Post title will be go here..</a></h3>
					<a href="#"><img src="images/post1.jpg" alt="post image" /></a>
					<p>Sidebar text will be go here.Sidebar text will be go here.Sidebar text will be go here.Sidebar text will be go here.</p>
				</div>

			</div>

		</div>