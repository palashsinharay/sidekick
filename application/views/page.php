<?php 
  //print_r($data->newsList);
//print_r($data['newsList']) ;
//echo "<pre>";
//print_r($pageDetail->content) ;
//die();


?>

<div class="container">


<div class="content_area">
<div class="content">
<div class="content_area_left">
<h2><?php echo $pageDetail->name;?></h2>
<p>
        <?php  print_r($pageDetail->content);?>
</p>


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

<ul>
<?php foreach($newsList as $key => $row):?>
<li> <?php echo $row->title;?> </li>

<?php endforeach;?>
</ul>

<a href="<?php echo site_url('index.php/main/newslist');?>" class="more">...more</a>

</div> 
</div>

<div class="clear"></div>
</div>

</div>

<!--footer_section_start-->

