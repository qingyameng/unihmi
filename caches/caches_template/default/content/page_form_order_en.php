<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_en"); ?>

<?php include template("content","left_header_en"); ?>


		<!--main start-->
	  <div class="main">

		 <!--FeedBack start-->
		 <div class="FeedBack">


		   <div class="clearfix"></div>
           <div class="IntroTitles clearfix"><?php echo $catname;?></div>
		   <div class="commentbox">
			<form id="form1" name="form1" method="post" action="<?php echo APP_PATH;?>?m=formguide&c=index&a=show&formid=13&siteid=1">
			  <table id="commentform" width="600" border="0" align="center" cellpadding="0" cellspacing="0">
			    <tr>
			      <td>Theme</td>
			      <td><input name='info[title]' type='text' id='title' size='30' maxlength="30"><span class="FontRed">*</span></td>
			    </tr>
			    <tr>
			      <td>Name</td>
			      <td><input name='info[name]' type='text' id='name' size='30' maxlength="30"><span class="FontRed">*</span></td>
			    </tr>
			    <tr>
			      <td>Phone</td>
			      <td><input name='info[phone]' type='text' id='phone' size='30' maxlength="30"><span class="FontRed">*</span></td>
			    </tr>
			    <tr>
			      <td>E-mail</td>
			      <td><input name='info[email]' type='text' id='email' size='30' maxlength="80"><span class="FontRed">*</span></td>
			    </tr>
			    <tr>
			      <td>QQ</td>
			      <td><input name='info[qq]' type='text' id='qq' size='30' maxlength="30"><span class="FontRed">*</span></td>
			    </tr>	
			    <tr>
			      <td>Content</td>
			      <td>
			        <textarea name="info[content]" id='content' cols="60" rows="7"  value="" ></textarea>
			            <span class="FontRed">*</span></td>    </tr>
			    <tr>
			      <td>Verification code</td>
			      <td>
			      	<input name="verycode" id="verycode"  size=10 class="codeInput"> 
			      	<div id="codeVerify" class="codeBox"></div>
			     </td>
			    </tr>	
			    <tr>
			      <td></td>
			      <td><input class="Cbutton" type="submit" name="dosubmit" id="dosubmit" value="Submit" onClick='javascript:return comment_check()'></td>
			    </tr>
			  </table>
			</form>
		   </div>

		</div>
		<!--FeedBack end-->

	  </div>
	  <!--main end-->


	<script type="text/javascript" src="<?php echo JS_PATH;?>home/verify.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>home/code_verify_en.js"></script>

<?php include template("content","left_footer_en"); ?>

<?php include template("content","footer_en"); ?>