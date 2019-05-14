<?php include 'includes/header.php';?>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/desktop.jpg" class="desktop" alt="asda" />
 <img src="images/phone.jpg" class="phone" alt="" />
 <p>My name is Sekllan ChenRuan, I am interested in music, comics, and animations.</p>
 <p>Currently I studying web development at Seattle Central College. I am studying the database track.</p>
 <p>I wanted to do front-end, but I am also interested in back-end web development.</p>
 <p>The current goal is to learn the fundamentals of both front-end and back-end so I can get a full view of how they work together.</p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Right Column</h3>
 <img src="images/tablet.jpg" class="tablet" alt="" />
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</aside>

<!--Contact Form Embed Start-->
<h3>Placeholder for contact form embed</h3>
<form action="" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="30"></textarea>
		</label>
	</div>	
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
<!--Contact Form Embed end-->

<!-- END RIGHT COL -->
 
<?php include 'includes/footer.php';?>
