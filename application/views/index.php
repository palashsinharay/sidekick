<?php 
  //print_r($data->newsList);
//print_r($data['newsList']) ;
//echo "<pre>";
//print_r($newsList[0]->content) ;
//die();


?>

<div class="container">

<!-- Slide show start -->

<div class="slideshow">

<!-- img_1 -->
<div class="slides" style="visibility:visible" id="image1">
    <img src="<?php echo site_url('images/img_1.png') ?>" alt="" />
</div>

<!-- img_2 -->
<div class="slides" id="image2">
<img src="<?php echo site_url('images/img_2.png') ?>" alt="" />
</div>

<!-- img_3 -->
<div class="slides" id="image3">
<img src="<?php echo site_url('images/img_3.png') ?>" alt="" />
</div>

<!-- img_4 -->
<div class="slides" id="image4">
<img src="<?php echo site_url('images/img_4.png') ?>" alt="" />
</div>

<!-- img_5 -->
<!--<div class="slides" id="image5">
<img src="images/img_5.png" alt="" />
</div>
-->
<!-- img_6 -->
<!--<div class="slides" id="image6">
<img src="images/img_6.png" alt="" />
</div>
-->
</div>


<div class="shadow"></div>


<!-- Slide show end -->


<div class="clear"></div>    
    


<div class="middle_pan">
<div class="column three margin">
    <img src="<?php echo site_url('images/small_img_1.jpg')?>" alt="" />
</div>

<div class="column three margin">
	<img src="<?php echo site_url('images/small_img_2.jpg')?>" alt="" />
</div>
<div class="column three margin">
	<img src="<?php echo site_url('images/small_img_3.jpg')?>" alt="" />
</div>

<div class="clear"></div>
</div>


<div class="content_area">
<div class="content">
<div class="content_area_left">
<h2>About Us</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with deskt3p publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with deskt3p publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with deskt3p publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<a href="#" class="more">...more</a>
</div>

<div class="content_area_rihgt">
<h2>Login</h2>

<table width="302" border="0">
  <tr>
    <td width="76" height="54"><p>Email:</p></td>
    <td width="10">&nbsp;</td>
    <td width="202"><input type="text" class="login" value="" /></td>
  </tr>
  <tr>
    <td height="43"><p>Password:</p></td>
    <td>&nbsp;</td>
    <td><input type="text" class="login" value="" /></td>
  </tr>
  <tr>
    <td height="34">&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="button" class="login_button" value="" /></td>
  </tr>
</table>
<div class="clear_20"></div>
<h2>Latest Offers</h2>
<?php
echo "<pre>";

print_r($newsList);
echo "<pre>";
?>
<ul>
<?php foreach($newslist as $row):?>
<li> <?php echo $row->content;?> </li>

<?php endforeach;?>
</ul>

<a href="#" class="more">...more</a>

</div> 
</div>

<div class="clear"></div>
</div>

</div>

<!--footer_section_start-->

