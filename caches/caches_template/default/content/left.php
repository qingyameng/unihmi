<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>	<!--left start-->
	<div class="left">
		<div class="Sbox">
			<div class="kong"></div>

				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=1cee2f0eac6ba36d44ad0d79525184b7&sql=SELECT+arrparentid+FROM+u_category+WHERE+catid%3D%24catid&num=1&return=parCat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT arrparentid FROM u_category WHERE catid=$catid LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$parCat = $a;unset($a);?>
				<?php 
				$parCat_str1 = str_replace('0,17,','',$parCat[0]['arrparentid']);
				$parCat_str2 = str_replace('0,17','',$parCat_str1);
				?>
					<?php if(!empty($parCat_str2)) { ?>
						<?php 
						$dat = explode(',',$parCat_str2); 
						$parCatid = $dat[0];
						?>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=39f475251a1c4f5ab22192aa1c9b4871&sql=SELECT+catname%2Ccatdir+FROM+u_category+WHERE+catid%3D%24parCatid&num=%271%27\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT catname,catdir FROM u_category WHERE catid=$parCatid LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
							<div class="topic"> <?php echo $data['0']['catname'];?>
								<span style="font-size: 13px;color: #999999;"><?php echo $data['0']['catdir'];?></span>
							</div>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php } else { ?>
					<div class="topic"> <?php echo $catname;?> 
						<span style="font-size: 13px;color: #999999;"><?php echo $catdir;?></span>
					</div>
					<?php } ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

		    <div class="blank">
		    	<ul>
		    		<?php if(isset($parCatid) && !empty($parCatid) ) { ?>
		    		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=51cc9b46e2d34f35e1afc039dbc2148a&sql=SELECT+arrchildid+FROM+u_category+WHERE+catid%3D%24parCatid&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT arrchildid FROM u_category WHERE catid=$parCatid LIMIT 8");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
			    		<?php 
			    		$CurStr = $parCatid.',';
			    		$data_str1 = str_replace($CurStr,'',$data[0]['arrchildid']);
						$data_str2 = str_replace($parCatid,'',$data_str1);
						$dat = explode(',',$data_str2);
						?>
						<?php $n=1; if(is_array($dat)) foreach($dat AS $k => $v) { ?>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=236538150a204e0693f2dae26421ba11&sql=SELECT+catname%2Curl+FROM+u_category+WHERE+catid%3D%24v&num=1&return=d\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT catname,url FROM u_category WHERE catid=$v LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$d = $a;unset($a);?>	
								<li <?php if($v==$catid) { ?> class='current' <?php } ?>>
				    			<a href="<?php echo $d['0']['url'];?>"><?php echo $d['0']['catname'];?></a>
				    		</li> 
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						<?php $n++;}unset($n); ?>
		    		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		    		<?php } ?>

		    	</ul>
		    </div>
	    </div>
        <div class="Sbox">
        	<div class="kong2"></div>
            <a href="/ZH/Service/OrderProducts/">
              <img src="<?php echo IMG_PATH;?>home/left_01.jpg" border="0" />
            </a>
			<div class="HeightTab clearfix"></div>
			<a href="/ZH/Service/FeedBack/">
			  <img src="<?php echo IMG_PATH;?>home/left_03.jpg" border="0" />
			</a>
			<div class="HeightTab clearfix"></div>
			<a href="/ZH/Service/AfterSale/">
			  <img src="<?php echo IMG_PATH;?>home/left_05.jpg" border="0" />
			</a>
			<div class="HeightTab clearfix"></div>
			<a href="/ZH/Service/PF/Catalog/">
			  <img src="<?php echo IMG_PATH;?>home/left_07.jpg" border="0" />
			</a>
			<div class="HeightTab clearfix"></div>
			<a href="/ZH/Service/PF/Journal/">
			  <img src="<?php echo IMG_PATH;?>home/left_09.jpg" border="0" />
			</a>
		</div>
	</div>
	<!--left end-->
