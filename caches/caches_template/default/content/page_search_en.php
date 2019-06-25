<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_en"); ?>

<?php include template("content","left_header_en"); ?>


<?php
$q = trim($_GET['q']);
$sql = "SELECT id,url,title,inputtime FROM `u_download` WHERE (title LIKE '%".$q."%' OR model LIKE '%".$q."%') AND catid IN (SELECT catid FROM `u_category` WHERE arrparentid LIKE '0,22,25%') ORDER BY id DESC";
?>
<!--main start-->
<div class="main">

<div class="ArticleList">
    <table  width="100%" border="0" cellspacing="0" cellpadding="0">
        <ul>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=5d60d57323b8b720296c9e19fc959298&sql=%24sql&num=25&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM ($sql) T");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("$sql LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php if($data AND !empty($q)) { ?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <tr>
                <td width='90%' class='fw_t'>
                    · <a href='<?php echo $r['url'];?>' target='_blank'><?php echo $r['title'];?></a>
                </td>
                <td width='10%' class='fw_s'>[<?php echo date('Y-m-d',$r[inputtime]);?>]</td>
            </tr>
        <?php $n++;}unset($n); ?>
        <?php } else { ?>
            <tr>
                <td width='90%' class='fw_t'>
                    无数据
                </td>
                <td width='10%' class='fw_s'>&nbsp;</td>
            </tr>
        <?php } ?>
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


<?php include template("content","left_footer_en"); ?>

<?php include template("content","footer_en"); ?>