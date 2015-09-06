<?php 


    $meta_title = "Zhiyan Xie | Web Developer";
    include_once("header.php") ;
    
?>


<body class="home <?php if($detect->isMobile()) {echo 'mobile';} ?>">

<!-- nav -->
<?php include_once("navigation.php")?>
<!-- about -->



<?php if(!$detect->isMobile()):?>


<div class="vedioContainer">
     <video autoplay loop  id="vid">
            <source src="vedio/clouds.mp4" type="video/mp4">
     </video>
     <div class="intro">
         <p class="about_title">Think. Create. Design</p>
         <p class="about_subtitle">FRONT-END-DEVELOPER,UX DESIGNER</p>
     </div>
</div>



<?php endif;?>
<!-- work -->
<section id="work">

	<h1 class="heading">
			<span class="title">Work</span>
			<span class="subtitle">A showcase of design</span>
			<span class="subtitle">development, experiments and more</span>
	</h1>
<div class="container">
   <div class="row">
    <ul class="list-unstyled">
      <li class="col-md-3  col-sm-12 project";>
        <a href="#">
           
			<div class="description">
								<h4>Machine Learning</h4>
								<span class="snippet">Analyzed patient data with Relative Comparisons (SVM) in Matlab.</span>
								<span class="link">View Case Study</span>
			</div>  
        </a>
      </li>
      <li class="col-md-9 col-sm-12 two project" style="background-color:lavenderblush;"> Boring Online Game</li>

 
      <li class="col-md-6 col-sm-12 three project" style="background-color:lavender;">Vedio Compression</li>
      <li class="col-md-6 col-sm-12 four project" style="background-color:lavenderblush;">RSA implementation</li>
       
       <li class="col-md-4 col-sm-12 five project" style="background-color:lavender;">Vedio Compression</li>
       <li class="col-md-4 col-sm-12 six project" style="background-color:lavenderblush;">RSA implementation</li>
       <li class="col-md-4 col-sm-12 seven project" style="background-color:lavender;">RSA implementation</li>
   </ul>
</div>
</div>
</section>

<!---resume_github-->
<section id="resume_github">
 <h1 class="heading">
			<span class="title">Information</span>
			<span class="subtitle">Know more about me</span>
			<span class="subtitle">I love coding and perfecting pixels,things I would love to share </span>
 </h1>
  <div class="container">
        <div class="component">
        <a href="#" class="icon icon-cube facebook">facebook</a>
        <a href="#" class="icon icon-cube twitter">twitter</a>
        <a href="#" class="icon icon-cube googleplus">google+</a>
        <a href="#" class="icon icon-cube github">github</a>
        </div>
        
     </div>
  
  
</section>

<!-- contact -->
<section id="contact">
     <h1 class="heading">
			<span class="title">Contact</span>
			<span class="subtitle">Currently available for hire</span>
			<span class="subtitle">Don't hesitate,Would love to hear from you</span>
	 </h1>
  <!-- email-->
     <div class="container center-x">
            <form id="ajax-contact" method="post" action="scripts/mailer.php" role="form" >
								<div class="input form-group">							
									<label class="name" for="name"></label>
									<input class="form-control" type="text" id="name" name="name" placeholder="Your Name" required/>
                                   
								</div>

								<div class="input form-group">
									<label class="email" for="email"></label>
									<input class="form-control" type="email" id="email" name="email" placeholder="Your Email" required/>
                                  
								</div>

								<div class="input form-group">
									<label class="message" for="message"></label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Your Message" required></textarea>
                                </div>
                                <button class="btn btn-default" type="submit">Submit</button>
                                <div id="form-messages"></div>
                               
	        </form>
     
  
     </div>
 
   

</section>
  
   <script src="js/app.js"></script>
   
</body>
</html>