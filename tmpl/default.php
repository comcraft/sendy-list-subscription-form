<?php
// No direct access
defined('_JEXEC') or die; ?>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="background-color: <?php echo $modal['bckgrd'] ?>">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel" class="text-center" style="text-align:center;"><?php echo $modal['title'];?> </br><small style="display:inline-block: padding:10px 20px; line-height:1" ><?php echo $modal['smalltxt'] ?> </small></h3>
  </div>
  <form id="signup-form" name="signup-form" action="<?php echo $baseUrl . 'modules/mod_modalbox/comcraft/signup.php' ?>" method="POST" accept-charset="utf-8" class="form-horizontal">

  <div class="modal-body" style="padding: 20px auto !important;">
    <div id ="status" style="text-align:center"></div>
   <div class="control-group" style="">
      <label class="control-label" for="name">Name</label>
      <div class="controls">
         <input type="text" name="name" id="name"/>
      </div>
   </div>
   <div class="control-group">
	<label class="control-label"for="email">Email</label>
   <div class="controls">
      <input type="email" name="email" id="email"/><br/>
   </div>
   </div>
	<div style="display:none;">
      <label for="hp">HP</label><br/>
      <input type="text" name="hp" id="hp"/>
	</div>
	<input type="hidden" name="list" value="<?php echo $modal['list_id']?>"/>
	<input type="hidden" name="subform" value="yes"/>
  </div>
   <div class="modal-footer" style="background-color:transparent; text-align:center; border-top:0px solid non;">
   <button class="btn" data-dismiss="modal" aria-hidden="true" style="background-color:gray !important; display:inline-block">Close</button>
	<input class="btn btn-primary" type="submit" name="submit" id="submit-btn" value="Subscribe" style="background-color:#ed3237 !important; display:inline-block"/>
   </div>
  </form>
</div>
<?php
   if(!$session->get('news_signup')){?>
   <script>

    jQuery(window).on('load', function() {
    setTimeout(function(){
      jQuery('#myModal').modal('show');
    }, 1000);
    });
   </script>
   <?php
   }
    else{

    }
   ?>
