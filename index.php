<?php 


    $meta_title = "Zhiyan Xie | Web Developer";
    include_once("header.php") ;

?>


<body class="home <?php if($detect->isMobile()) {echo 'mobile';} ?>">

<!-- nav -->
<?php include_once("navigation.php")?>
<!-- about -->



<?php if(!$detect->isMobile()):?>


<div class="veidoContainer">
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
1
work
work
</section>



<!-- contact -->
<section id="contact">
contact
contact
</section>


</body>
</html>