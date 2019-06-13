<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!--focus start-->
<div id="FocusBG">
<div class="fullSlide">
  <div class="bd">
  <ul>
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=3f030ac46fe7d549f49b349aba8bc7de&sql=SELECT+setting+FROM+u_poster+WHERE+spaceid+%3D+1+ORDER+BY+listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM u_poster WHERE spaceid = 1 ORDER BY listorder ASC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <?php 
    $narry = string2array($r[setting]); 
   ?>
    <li style='background-image: url(<?php echo $narry['1']['imageurl'];?>); width: 1900px;'>
      <a href='<?php echo $narry['1']['linkurl'];?>' target='_blank'></a>
    </li>
  <?php $n++;}unset($n); ?> 
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  </ul>
</div>
<span class="prev"></span> <span class="next"></span>
</div>
<script type="text/javascript">
jQuery(".fullSlide").hover(function() {
    jQuery(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.5)
},
function() {
    jQuery(this).find(".prev,.next").fadeOut()
});
jQuery(".fullSlide").slide({
    titCell: ".hd ul",
    mainCell: ".bd ul",
    effect: "fold",
    autoPlay: true,
    autoPage: true,
    trigger: "click",
    startFun: function(i) {
        var curLi = jQuery(".fullSlide .bd li").eq(i);
        if ( !! curLi.attr("_src")) {
            curLi.css("background-image", curLi.attr("_src")).removeAttr("_src")
        }
    }
});
</script>
</div>
<!--foncus end-->
</div>
<!--head end-->
<!--body start-->
<div id="body">
<div class="HeightTab clearfix"></div>
<div class="MainBlock">

    <?php $i=0;?>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f924043dcbaf69335a4aa91a1fd8edf7&action=category&catid=11&num=5&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'11','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'5',));}?>
    <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
      <?php $i++;?>
      <?php if($i=='1') $color='f39700';?> 
      <?php if($i=='2') $color='005bac';?> 
      <?php if($i=='3') $color='6eba2c';?> 
      <?php if($i=='4') $color='005bac';?> 
      <?php if($i=='5') $color='e4007f';?> 
      <div class='ItemBlock'>
        <a href='<?php echo $r['url'];?>' class='rs' >
          <div class='link' style='background:#<?php echo $color;?>;'></div>
          <div class='biaoti' style='background-image: url(<?php echo IMG_PATH;?>home/index_3_1.png); color: #<?php echo $color;?>;overflow: hidden;'>
            <ul>
              <li title="<?php echo $r['catname'];?>"><span style='font-family: 宋体;'>&gt;&gt;</span> <?php echo $r['catname'];?></li>
            </ul>
          </div>
          <div class='ItemImg'>
            <img src='<?php echo $r['image'];?>' />
          </div>
        </a>
        <div style='height:10px;'></div>
        <div class='liebiao'>
          <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d3f6258312dedc3cb11d7ddb33a97535&action=category&catid=%24k&num=8&siteid=%24siteid&order=listorder+ASC&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$dat = $content_tag->category(array('catid'=>$k,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
            <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
            <li title="<?php echo $v['catname'];?>">
              <a href='<?php echo $v['url'];?>' target='_blank'>
                <img src='<?php echo IMG_PATH;?>home/index_jt.png' /> <?php echo $v['catname'];?>
              </a>
            </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

          </ul>
        </div>
      </div>
      <?php if($i<5) { ?>
      <div class='ItemInner'></div>
      <?php } ?>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

</div>
<div class="HeightTab clearfix"></div>
</div>
<!--body end-->
<!--Middle start-->
<div id="Middle">
  <div class="Middle_bg" >
    <div class="new1" >
      <div class="nbt" >
        <div class="text" >
          <span style="font-family: 宋体;">&gt;&gt;</span> 新闻活动
        </div>
        <div class="More"> 
          <a  href='/ZH/News/CompanyNews/'>更多 
            <span style="font-family: 宋体;">&gt;&gt;</span>
          </a>
        </div>
      </div>
      <div class="HeightTab clearfix"></div>
      <table id="MBlockTable" width="100%" border="0" cellspacing="0" cellpadding="0" style="table-layout:fixed">
        <ul>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=bb5c1f884a714af7cc4dbe5468a9ecc5&sql=select+title%2Cdescription%2Curl%2Cupdatetime+from+u_news+where+catid%3D9+order+by+id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select title,description,url,updatetime from u_news where catid=9 order by id DESC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <tr>
            <td width='75%'>
              <img src='<?php echo IMG_PATH;?>home/index_jt2.png' class="newsImg" />&nbsp;&nbsp;&nbsp;
              <a href="<?php echo $r['url'];?>" target='_blank' title="<?php echo $r['title'];?>" class="newsTitle">
                <?php echo mb_substr($r['title'],0,18);?>
              </a>
            </td>
            <td width='25%' align='right'>
              <span><?php echo date('Y/m/d',$r['updatetime']);?></span>
            </td>
          </tr>
          <tr>
            <td colspan='2' style='padding-left:20px; border-bottom:1px solid #b1b1b1; padding-bottom: 6px;'>
              <a href="<?php echo $r['url'];?>" target='_blank' title="<?php echo $r['title'];?>" class="newsDes">
          &nbsp; &nbsp; 
          <?php if(mb_strlen($r['description'])>48) { ?>
          <?php echo mb_substr($r['description'],0,48);?>......
          <?php } else { ?>
          <?php echo $r['description'];?>
          <?php } ?>
             </a>
            </td>
          </tr>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

          <tr>
            <td height='5' colspan='2'>
          </tr>

          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=0092cb9b35b4321e9213555514993599&sql=select+title%2Cdescription%2Curl%2Cupdatetime+from+u_news+where+catid%3D9+order+by+id+DESC&start=1&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select title,description,url,updatetime from u_news where catid=9 order by id DESC LIMIT 1,3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <tr>
            <td width='75%'>
              <img src='<?php echo IMG_PATH;?>home/index_jt2.png' />&nbsp;&nbsp;&nbsp;
              <a href="<?php echo $r['url'];?>" target='_blank' title="<?php echo $r['title'];?>">
                <?php echo mb_substr($r['title'],0,18);?>
              </a>
            </td>
            <td width='25%' align='right'>
              <span><?php echo date('Y/m/d',$r['updatetime']);?></span>
            </td>
          </tr>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          
        </ul>
      </table>
    </div>
    <div class="new2"></div>
    <div class="new1" >
      <div class="nbt" >
        <div class="text" >
          <span style="font-family: 宋体;">&gt;&gt;</span> 解决方案
        </div>
        <div class="More"> 
          <a  href='/ZH/Solutions/'>更多 
            <span style="font-family: 宋体;">&gt;&gt;
            </span>
          </a>
        </div>
      </div>
      <div class="HeightTab clearfix"></div>
      <table id="MBlockTable" width="100%" border="0" cellspacing="0" cellpadding="0">
        <ul>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=fd07e9b9f80bb05e565926fcbc479c47&sql=select+title%2Cdescription%2Curl%2Cupdatetime+from+u_news+where+catid%3D20+order+by+id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select title,description,url,updatetime from u_news where catid=20 order by id DESC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <tr>
            <td width='75%'>
              <img src='<?php echo IMG_PATH;?>home/index_jt2.png' />&nbsp;&nbsp;&nbsp;
              <a href="<?php echo $r['url'];?>" target='_blank' title="<?php echo $r['title'];?>">
                <?php echo mb_substr($r['title'],0,18);?>
              </a>
            </td>
            <td width='25%' align='right'>
              <span><?php echo date('Y/m/d',$r['updatetime']);?></span>
            </td>
          </tr>
          <tr>
            <td colspan='2' style='padding-left:20px; border-bottom:1px solid #b1b1b1; padding-bottom: 6px;'>
              <a href="<?php echo $r['url'];?>" target='_blank' title="<?php echo $r['title'];?>" style='color:#666666'>
          &nbsp; &nbsp; 
          <?php if(mb_strlen($r['description'])>48) { ?>
          <?php echo mb_substr($r['description'],0,48);?>......
          <?php } else { ?>
          <?php echo $r['description'];?>
          <?php } ?>
             </a>
            </td>
          </tr>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

          <tr>
            <td height='5' colspan='2'>
          </tr>

          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=66be2069f60dadf3671c53a1ccf6c10b&sql=select+title%2Cdescription%2Curl%2Cupdatetime+from+u_news+where+catid%3D20+order+by+id+DESC&start=1&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select title,description,url,updatetime from u_news where catid=20 order by id DESC LIMIT 1,3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <tr>
            <td width='75%'>
              <img src='<?php echo IMG_PATH;?>home/index_jt2.png' />&nbsp;&nbsp;&nbsp;
              <a href="<?php echo $r['url'];?>" target='_blank' title="<?php echo $r['title'];?>">
                <?php echo mb_substr($r['title'],0,18);?>
              </a>
            </td>
            <td width='25%' align='right'>
              <span><?php echo date('Y/m/d',$r['updatetime']);?></span>
            </td>
          </tr>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        </ul>
      </table>
    </div>
    <div class="new2"></div>
    <div class="new3" >
      <table width="244" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="21"></td>
        </tr>
        <tr>
          <td><a href="/ZH/Service/OrderProducts/"><img src="<?php echo IMG_PATH;?>home/index_01.jpg" border="0"></a></td>
        </tr>
        <tr>
          <td height="5"></td>
        </tr>
        <tr>
          <td><a href="/ZH/Service/FeedBack/"><img src="<?php echo IMG_PATH;?>home/index_03.jpg" border="0" /></a></td>
        </tr>
        <tr>
          <td height="5"></td>
        </tr>
        <tr>
          <td><a href="/ZH/Service/AfterSale/"><img src="<?php echo IMG_PATH;?>home/index_05.jpg" border="0" /></a></td>
        </tr>
        <tr>
          <td height="5"></td>
        </tr>
        <tr>
          <td><a href="/ZH/Service/PF/Catalog/"><img src="<?php echo IMG_PATH;?>home/index_07.jpg" border="0" /></a></td>
        </tr>
        <tr>
          <td height="5"></td>
        </tr>
        <tr>
          <td><a href="/ZH/Service/PF/Journal/"><img src="<?php echo IMG_PATH;?>home/index_09.jpg" border="0" /></a></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<!--Middle end-->

<?php include template("content","footer"); ?>