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
         <p>Think. Create. Design</p>
         <p>ZHIYAN XIE</p>
         <p>FRONT-END-DEVELOPER,UX DESIGNER</p>
     </div>
</div>



<?php endif;?>
<!-- work -->
<section id="work">

	<h1 class="heading">
			<span>Work & Projects</span>
			<span class="subtitle">A showcase of design</span>
			<span class="subtitle">development, experiments and more</span>
	</h1>
<div class="container">
   <div class="row">
     
    <div class="col-md-3 one project" style="background-color:lavender;">Machine Learning</div>
    <div class="col-md-9 two project" style="background-color:lavenderblush;"> Boring Online Game</div>
</div>
<div class="row projects">
    <div class="col-md-6 three project" style="background-color:lavender;">Vedio Compression</div>
    <div class="col-md-6 four project" style="background-color:lavenderblush;">RSA implementation</div>
</div>
<div class="row projects">
    <div class="col-md-4 five project" style="background-color:lavender;">Vedio Compression</div>
    <div class="col-md-4 six project" style="background-color:lavenderblush;">RSA implementation</div>
    <div class="col-md-4 seven project" style="background-color:lavender;">RSA implementation</div>
</div>
</div>
</section>

<!---resume_github-->
<section id="resume_github">
 <h1 class="heading">
			<span>Information</span>
			<span class="subtitle">Know more about me</span>
			<span class="subtitle">I love coding and perfecting pixels,things I would love to share </span>
 </h1>
   <div class="row">
      <div class="col-md-6">
        <h2 class="center-x"> Resume </h1>
      </div>
      <div class="col-md-6">
         <h2 class="center-x">Github</h1>
      </div>
   </div>
</section>

<!-- contact -->
<section id="contact">
<h1 class="heading">
			<span>Contact</span>
			<span class="subtitle">Currently available for hire</span>
			<span class="subtitle">Don't hesitate,Would love to hear from you</span>
	</h1>
contact
contact
</section>


</body>
</html>