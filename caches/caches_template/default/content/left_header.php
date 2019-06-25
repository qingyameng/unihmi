<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!--body start-->
<div id="body">
	<!--focus start-->
	<div id="InnerBanner">

	</div>
	<!--foncus end-->
	<div class="HeightTab clearfix"></div>
	<!--inner start -->
	<div class="inner">


	<!--left start-->
	<div class="left">
		<div class="Sbox">
			<div class="kong"></div>

			<?php $ZHpar = '0,17';?>

				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=404717288fff0cd47ee40b951fe11707&sql=SELECT+catid%2Carrparentid%2Ccatname%2Ccatdir+FROM+u_category+WHERE+catid%3D%24catid&num=1&return=parCat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT catid,arrparentid,catname,catdir FROM u_category WHERE catid=$catid LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$parCat = $a;unset($a);?>	
				<?php 
				$parCat_str1 = str_replace($ZHpar.',','',$parCat[0]['arrparentid']);
				$parCat_str2 = str_replace($ZHpar,'',$parCat_str1);
				?>
					<?php if(!empty($parCat_str2)) { ?>
						<?php 
						$dat = explode(',',$parCat_str2); 
						$parCatid = $dat[0];
						?>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c57d80a4652c84cb20f038c13249d1cd&sql=SELECT+catid%2Ccatname%2Ccatdir+FROM+u_category+WHERE+catid%3D%24parCatid&num=%271%27\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT catid,catname,catdir FROM u_category WHERE catid=$parCatid LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
							<div class="topic"> <?php echo $data['0']['catname'];?>
								<span style="font-size: 13px;color: #999999;"><?php echo $data['0']['catdir'];?></span>
							</div>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php } else { ?>
					<div class="topic"> <?php echo $parCat['0']['catname'];?> 
						<span style="font-size: 13px;color: #999999;"><?php echo $parCat['0']['catdir'];?></span>
					</div>
					<?php } ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

			<?php if($parCat[0]['catid']==11 OR $data[0]['catid']==11) { ?>
		    <div class="ClassNav">
		    	<div class="NavTree">
		    	<ul>
		    		<?php if(isset($parCatid) And !empty($parCatid) ) { ?>
			    		<?php $arrPar = $ZHpar.','.$parCatid;?>
			    		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=40daf7a259c90fbbb14375e8e2361f1d&sql=SELECT+catid%2Ccatname%2Curl%2Cchild%2Carrchildid+FROM+u_category+WHERE+arrparentid%3D%27%24arrPar%27+ORDER+BY+listorder+ASC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT catid,catname,url,child,arrchildid FROM u_category WHERE arrparentid='$arrPar' ORDER BY listorder ASC LIMIT 8");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
			    		<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
							<li style="overflow: hidden;" <?php if($v['catid']==$catid) { ?> class='current' <?php } ?>>
				    			<a href="<?php echo $v['url'];?>" title="<?php echo $v['catname'];?>"><?php echo $v['catname'];?></a>
				    			<?php if(($v['child']==1) And ($v['catid']==$catid OR in_array($catid,explode(',',$v['arrchildid'])))) { ?>
				    			<?php $thisCatid = $v['catid'];?>
				    			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=03e440590a5cab9789c51d79dd8a8fb8&sql=SELECT+catid%2Ccatname%2Curl+FROM+u_category+WHERE+parentid%3D%27%24thisCatid%27+ORDER+BY+listorder+ASC&num=8&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT catid,catname,url FROM u_category WHERE parentid='$thisCatid' ORDER BY listorder ASC LIMIT 8");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$dat = $a;unset($a);?>
				    			<ul>
				    			<?php $n=1;if(is_array($dat)) foreach($dat AS $r) { ?>
				    			<li style="overflow: hidden;" <?php if($r['catid']==$catid) { ?> class='current' <?php } ?>><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></li> 
				    			<?php $n++;}unset($n); ?>			    			
				    			</ul>
				    			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
				    			<?php } ?>
				    		</li> 
						<?php $n++;}unset($n); ?>
			    		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		    		<?php } ?>
		    	</ul>
		    	</div>
		    </div>
		    <?php } else { ?>
		    <div class="blank">
		    	<ul>
		    		<?php if(isset($parCatid) And !empty($parCatid) ) { ?>
			    		<?php $arrPar = $ZHpar.','.$parCatid;?>
			    		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=de4429b7c113d99c02df4b60e05198fc&sql=SELECT+catid%2Ccatname%2Curl%2Cchild+FROM+u_category+WHERE+arrparentid%3D%27%24arrPar%27+ORDER+BY+listorder+ASC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT catid,catname,url,child FROM u_category WHERE arrparentid='$arrPar' ORDER BY listorder ASC LIMIT 8");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
			    		<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
							<li style="overflow: hidden;" <?php if($v['catid']==$catid) { ?> class='current' <?php } ?>>
				    			<a href="<?php echo $v['url'];?>" title="<?php echo $v['catname'];?>"><?php echo $v['catname'];?></a>
				    		</li> 
						<?php $n++;}unset($n); ?>
			    		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		    		<?php } ?>
		    	</ul>
		    </div>
		    <?php } ?>

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



	<!--right start-->
	<div class="right">
		<div class="Position" align="right">
			<span>您的位置：
				
				<a href="/">首页</a> > 
				<?php if($catid='111') { ?>
					<span><?php echo $catname;?></span></span>
				<?php } else { ?>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=197265c05a797c6cad54d787bdd38ba9&sql=SELECT+arrparentid+FROM+u_category+WHERE+catid%3D%24catid&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT arrparentid FROM u_category WHERE catid=$catid LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					<?php 
					$data_str1 = str_replace('0,17,','',$data[0]['arrparentid']);
					$data_str2 = str_replace('0,17','',$data_str1);
					?>
						<?php if(!empty($data_str2)) { ?>
						<?php $dat = explode(',',$data_str2); ?>
							<?php $n=1;if(is_array($dat)) foreach($dat AS $r) { ?>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c02054c0622f75f949e3e1d74473d857&sql=SELECT+url%2Ccatname+FROM+u_category+WHERE+catid%3D%24r&num=1&return=d\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT url,catname FROM u_category WHERE catid=$r LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$d = $a;unset($a);?>
									<a href="<?php echo $d['0']['url'];?>"><?php echo $d['0']['catname'];?></a> > 
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							<?php $n++;}unset($n); ?>
						<?php } ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

					<?php if(!empty($catname)) { ?>
						<a href='<?php echo $url;?>'><?php echo $catname;?></a>
					<?php } else { ?>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=9eb80e1f4dd1bee234468da5c8cc2abc&sql=SELECT+url%2Ccatname+FROM+u_category+WHERE+catid%3D%24catid&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT url,catname FROM u_category WHERE catid=$catid LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
							<?php if(isset($data[0]['catname'])) { ?>
							<a href="<?php echo $data['0']['url'];?>"><?php echo $data['0']['catname'];?></a>
							<?php } ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php } ?>
				<?php } ?>
			</span>

		</div>