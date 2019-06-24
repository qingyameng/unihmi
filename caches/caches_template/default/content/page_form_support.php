<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<?php include template("content","left_header"); ?>


		<!--main start-->
	  <div class="main">

		 <!--FeedBack start-->
		 <div class="FeedBack">


		   <div class="clearfix"></div>
           <div class="IntroTitles clearfix"><?php echo $catname;?></div>
		   <div class="commentbox">
			<form id="form1" name="form1" method="post" action="<?php echo APP_PATH;?>?m=formguide&c=index&a=show&formid=12&siteid=1">
			  <table id="commentform" width="600" border="0" align="center" cellpadding="0" cellspacing="0">
			    <tr>
			      <td>主题</td>
			      <td><input name='info[title]' type='text' id='title' size='30' maxlength="30"><span class="FontRed">*</span></td>
			    </tr>
			    <tr>
			      <td>姓名</td>
			      <td><input name='info[name]' type='text' id='name' size='30' maxlength="30"><span class="FontRed">*</span></td>
			    </tr>
			    <tr>
			      <td>电话</td>
			      <td><input name='info[phone]' type='text' id='phone' size='30' maxlength="30"><span class="FontRed">*</span></td>
			    </tr>
			    <tr>
			      <td>电子邮件</td>
			      <td><input name='info[email]' type='text' id='email' size='30' maxlength="80"><span class="FontRed">*</span></td>
			    </tr>
			    <tr>
			      <td>QQ</td>
			      <td><input name='info[qq]' type='text' id='qq' size='30' maxlength="30"><span class="FontRed">*</span></td>
			    </tr>	
			    <tr>
			      <td>留言内容</td>
			      <td>
			        <textarea name="info[content]" id='content' cols="60" rows="7"  value="" ></textarea>
			            <span class="FontRed">*</span></td>    </tr>
			    <tr>
			      <td>验证码</td>
			      <td>
			      	<input name="verycode" id="verycode"  size=10 class="codeInput"> 
			      	<div id="codeVerify" class="codeBox"></div>
			     </td>
			    </tr>	
			    <tr>
			      <td></td>
			      <td><input class="Cbutton" type="submit" name="dosubmit" id="dosubmit" value="提交" onClick='javascript:return comment_check()'></td>
			    </tr>
			  </table>
			</form>
		   </div>

		</div>
		<!--FeedBack end-->

	  </div>
	  <!--main end-->


	<script type="text/javascript" src="<?php echo JS_PATH;?>home/verify.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>home/code_verify.js"></script>

<?php include template("content","left_footer"); ?>

<?php include template("content","footer"); ?>