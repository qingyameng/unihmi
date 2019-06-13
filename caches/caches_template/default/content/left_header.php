<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!--body start-->
<div id="body">
	<!--focus start-->
	<div id="InnerBanner">

	</div>
	<!--foncus end-->
	<div class="HeightTab clearfix"></div>
	<!--inner start -->
	<div class="inner">



	<!--right start-->
	<div class="right">
		<div class="Position" align="right">
			<span>您的位置：
				
				<a href="/">首页</a> > 
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=197265c05a797c6cad54d787bdd38ba9&sql=SELECT+arrparentid+FROM+u_category+WHERE+catid%3D%24catid&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT arrparentid FROM u_category WHERE catid=$catid LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
				<?php 
				$data_str1 = str_replace('0,17,','',$data[0]['arrparentid']);
				$data_str2 = str_replace('0,17','',$data_str1);
				?>
					<?php if(!empty($data_str2)) { ?>
					<?php $dat = explode(',',$data_str2); ?>
						<?php $n=1;if(is_array($dat)) foreach($dat AS $r) { ?>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c02054c0622f75f949e3e1d74473d857&sql=SELECT+url%2Ccatname+FROM+u_category+WHERE+catid%3D%24r&num=1&return=d\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT url,catname FROM u_category WHERE catid=$r LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$d = $a;unset($a);?>
								<a href="<?php echo $d['0']['url'];?>"><?php echo $d['0']['catname'];?></a> > 
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						<?php $n++;}unset($n); ?>
					<?php } ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				
				<a href='<?php echo $url;?>'><?php echo $catname;?></a></span>
		</div>