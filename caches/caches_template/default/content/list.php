<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<?php include template("content","left_header"); ?>


<!--main start-->
<div class="main">

<div class="ArticleList">
    <table  width="100%" border="0" cellspacing="0" cellpadding="0">
        <ul>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ab4b05e97fd14c3ed386604ee1a9399&action=lists&catid=%24catid&num=25&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <tr>
                <td width='90%' class='fw_t'>
                    · <a href='<?php echo $r['url'];?>' target='_blank'><?php echo $r['title'];?></a>
                </td>
                <td width='10%' class='fw_s'>[<?php echo date('Y-m-d',$r[inputtime]);?>]</td>
            </tr>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>        
    </table>
    <div class="clearfix"></div>
    <div class='t_page ColorLink'>
        <?php echo $pages;?>
    </div>
</div>

</div>
<!--main end-->


<?php include template("content","left_footer"); ?>

<?php include template("content","footer"); ?>