<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<?php include template("content","left_header"); ?>

<link href="<?php echo CSS_PATH;?>home/verify.css" rel="stylesheet" type="text/css" />


    <!--main start-->
      <div class="main">

        <div class="Art">
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="33">&nbsp;</td>
                  <td><a href="/ZH/Service/PF/Catalog/"><img src="<?php echo IMG_PATH;?>home/xl.jpg" width="230" height="70" border="0" /></a></td>
                  <td>&nbsp;</td>
                  <td><a href="/ZH/Service/PF/Information/"><img src="<?php echo IMG_PATH;?>home/zl.jpg" width="230" height="70" border="0" /></a></td>
                  <td>&nbsp;</td>
                  <td><a href="/ZH/Service/PF/Journal/"><img src="<?php echo IMG_PATH;?>home/dz.jpg" width="230" height="70" border="0" /></a></td>
                  <td width="33">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="5">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td height="30" colspan="5" class="xxian"><img src="<?php echo IMG_PATH;?>home/ljt.gif" /> <strong><?php echo $catname;?></strong></strong></td>
                  <td>&nbsp;</td>
                </tr>
            </table>
            <div class="down-list">
                <ul class="down-ul">

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ab4b05e97fd14c3ed386604ee1a9399&action=lists&catid=%24catid&num=25&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <a href="<?php echo $r['url'];?>">
                            <img src="<?php echo $r['thumb'];?>">
                            <div class="down-item-content">
                                <div class="down-item-name"><?php echo $r['title'];?></div>
                            </div>
                        </a>
                    </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                </ul>
            </div>
            <div class="clearfix"></div>
            <div class='t_page ColorLink'>
            <?php echo $pages;?>
            </div>
        </div>

      </div>


        <!--main end-->


<?php include template("content","left_footer"); ?>

<?php include template("content","footer"); ?>