
<?php include("config/config.php") ?>
<?php include("library/Database.php") ?>
<?php include("helpers/format.php") ?>
<?php

$objDB = new Database();
	
	  $query = "SELECT * FROM posts limit 3";

	 $postss =  $objDB->select($query);
    
$objDT = new Format()	
		

		

?>

<?php include("includes/header.php") ?>


<?php include_once("includes/slider.php") ?>

<div class="contentsection contemplete clear">
    
    <div class="maincontent clear">
    <?php if($postss){ while($posts = $postss->fetch_assoc()){ ?>
        <div class="samepost clear">
				<h2><a href=""><?php echo $posts['post_title'] ?></a></h2>
				<h4><?php echo $objDT->dateFormat($posts['post_date']) ; ?>, By <a href="#"><?php echo $posts['post_author'] ?></a></h4>
				<a href="#"><img src="images/<?php echo $posts['post_image'] ?>" alt="post image" /></a>
				<p>
                <?php echo $objDT->contentLimit($posts['post_content']) ?>
				</p>
				<div class="readmore clear">
					<a href="post.php?id=<?php echo $posts['post_'] ?>">Read More</a>
				</div>
		</div>
        <?php  }
	   
	} else {
			header("location:404.php");
		} ?>
			
    </div> 


<?php include_once("includes/sidebar.php") ?>



</div>








<?php include_once("includes/footer.php") ?>

