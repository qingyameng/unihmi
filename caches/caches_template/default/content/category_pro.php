<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<?php include template("content","left_header"); ?>


<!--main start-->
<div class="main">

<!--content start-->
<div class="content">
<div class="MorePro">
<div class="CaseBlock">
<ul>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cd609b7b9ac4fadeb42b5e7f97a5f535&action=category&catid=%24catid&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <div class="albumblock"><div class="inner"><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><img src="<?php echo $r['image'];?>"></a></div><div class="title"><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></div><div class="content"><?php echo $r['description'];?></div></div><div class="kong"><div style="border-bottom: 1px dotted #999999; height:25px;"></div></div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

</ul>
</div>
<div class="clearfix"></div>

</div>

</div>
<!--content end-->

</div>
<!--main end-->


<?php include template("content","left_footer"); ?>

<?php include template("content","footer"); ?>