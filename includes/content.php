	
<?php
	 
	  $query = "SELECT * FROM posts";

	 $postss =  $obj->select($query);
	if($postss){ 
		while($posts = $postss->fetch_assoc()){
		

		

?>


<div class="maincontent clear">
			<div class="samepost clear">
				<h2><a href="">Our post title here</a></h2>
				<h4>April 10, 2016, 12:30 PM, By <a href="#">Delowar</a></h4>
				<a href="#"><img src="images/post1.jpg" alt="post image" /></a>
				<p>
					Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.
				</p>
				<div class="readmore clear">
					<a href="post.html">Read More</a>
				</div>
			</div>
			
</div> 

<?php  }	
	} else {
			header("location:404.php");
		}
 ?>
	
	

<!-- 
<div class="maincontent clear">
			<div class="samepost clear">
				<h2><a href="">Our post title here</a></h2>
				<h4>April 10, 2016, 12:30 PM, By <a href="#">Delowar</a></h4>
				<a href="#"><img src="images/post1.jpg" alt="post image" /></a>
				<p>
					Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.
				</p>
				<div class="readmore clear">
					<a href="post.html">Read More</a>
				</div>
			</div>
			
	</div> -->