<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sidekick Sports</title>

<link href="<?php echo site_url('css/style.css');?>" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="<?php echo site_url('script/jquery-1.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('script/banner.js');?>"></script>

<script type="text/javascript">
$(function() {
    $(".carouel_area").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev"
    });
});

</script>

<!--######################################################-->

<link rel="stylesheet" href="<?php echo site_url('css/superfish.css')?>">
  
  <script>
    (function() {
      var jasmineEnv = jasmine.getEnv()
      jasmineEnv.addReporter(new jasmine.HtmlReporter)
      window.onload = function() {
        jasmineEnv.execute()
      };
    })();
  </script>

<!--######################################################-->

</head>

<body>
<!-- Content section -->
<div class="wrapper">
<div class="top_content">
<div class="top_pan">
    <div class="logo"><a href="index.html"><img src="<?php echo site_url('images/logo.png')?>" alt="Sidekick Sports" title="Sidekick Sports" /></a></div>
    

<div class="top_right">

    <ul>
    <li><a href="#">Home</a><span>|</span></li>
    <li><a href="#">Sitemap</a><span>|</span></li>
    <li><a href="#">Contacts</a></li>
    </ul>
    <div class="clear"></div>
    <div class="top_link">
    <h4>Follow us:</h4>
    <ul>
    <li><a href="#"><img src="<?php echo site_url('images/google.png')?>" alt="Google" title="Google" /></a></li>
    <li><a href="#"><img src="<?php echo site_url('images/twitter.png')?>" alt="Twitter" title="Twitter" /></a></li>
    <li><a href="#"><img src="<?php echo site_url('images/facebook.png')?>" alt="facebook" title="Facebook" /></a></li>
    <li><a href="#"><img src="<?php echo site_url('images/linkedin.png')?>" title="Linkedin" /></a></li>
    </ul>
    </div>
    
    </div>




</div>
</div>
<div class="menu_section">
<div class="menu_wrapper">
  <div id="jasmine_content">

    <ul class="sf-menu" id="example">
      <li>
        <a href="#" class="current">Home</a>
  
      </li>
      <li>
        <a href="#">About Us</a>
      </li>
      <li>
        <a href="#">Products</a>
        <ul>
          <li>
            <a href="#">Product 1</a>
           </li> 
           <li>
            <a href="#">Product 2</a>
           </li>  
           <li>
            <a href="#">Product 3</a>
           </li> 
            
            
            
            </ul>
          
       
    

  <li>
        <a href="#">gallery</a>
      </li>
  <li>
        <a href="#">Contact Us</a>
      </li>
  </ul>
  
  
  </div>

</div>
</div>
</div>
</div>

</div>

<div class="border"></div>
