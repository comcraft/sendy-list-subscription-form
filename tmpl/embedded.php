<?php
// No direct access
defined('_JEXEC') or die; ?>
<!-- Modal -->
<div style="background-color: <?php echo $modal['bckgrd'] ?>">
      <h3  class="text-center" style="line-height:1"><?php echo $modal['title'];?> </br><small style="display:inline-block;" ><?php echo $modal['smalltxt'] ?> </small></h3>

  <form id="signup-form" name="signup-form" action="<?php echo $baseUrl . 'modules/mod_modalbox/comcraft/signup.php' ?>" method="POST" accept-charset="utf-8" >
    <div id ="status" style="text-align:center"></div>
   <div class="control-group">

      <div class="controls">
         <input type="text" name="name" id="name" placeholder="Name"/>
      </div>
   </div>
   <div class="control-group">
   <div class="controls">
      <input type="email" name="email" id="email" placeholder="Email"/><br/>
   </div>
   </div>
	<div style="display:none;">
      <label for="hp">HP</label><br/>
      <input type="text" name="hp" id="hp"/>
	</div>
	<input type="hidden" name="list" value="<?php echo $modal['list_id']?>"/>
	<input type="hidden" name="subform" value="yes"/>

   <div  style="background-color:transparent; text-align:center; border-top:0px solid non;">
   	<input class="btn btn-primary" type="submit" name="submit" id="submit-btn" value="Subscribe" style="background-color:#ed3237 !important; display:inline-block"/>
   </div>
  </form>
</div>
