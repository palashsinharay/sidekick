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
        <a href="<?php echo site_url();?>" class="current">Home</a>
  
      </li>
      <li>
        <a href="<?php echo site_url('index.php/main/page/1');?>">About Us</a>
      </li>
<?php 
$data['productList'] = $this->Cms->get_productList(); 
//echo "<pre>";
//print_r($data['productList']);
//echo "</pre>";
?>        
      <li>
        <a href="#">Products</a>
        <ul>
            <?php foreach($data['productList'] as $key => $row):?>
          <li>
            <a href="<?php echo site_url('index.php/main/product/'.$row->pid);?>"><?php echo $row->product_title;?></a>
           </li> 
            <?php endforeach;?>
       </ul>
          
       
    

  <li>
        <a href="#">gallery</a>
      </li>
  <li>
        <a href="<?php echo site_url('index.php/main/contact_us');?>">Contact Us</a>
      </li>
  </ul>
  
  
  </div>

</div>
</div>
</div>
</div>

</div>

<div class="border"></div>
