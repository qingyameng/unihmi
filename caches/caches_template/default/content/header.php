<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>home/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>home/inner.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>home/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>home/verify.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>home/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>home/Functions.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>home/FocusSlide.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>home/iepngfix_tilebg.js"></script>
</head>
<body>
<div id="wrapper">
<!--head start-->
<div id="head">
<!--top start -->
<div class="top" style="background:url(<?php echo IMG_PATH;?>home/index_top_b.gif) repeat-x;">
<div class="TopLogo">
<div class="logo"><a href="/"><img src="<?php echo IMG_PATH;?>home/logo.png" alt="<?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?>" border="0"></a></div>
<div class="link">
    <div class="search">
        <table border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td><input type="text" id="q" class="searchTxt" size="15" placeholder="请输入关键词" value="<?php echo $_GET['q'];?>" /></td>
            <td><input type="image" src="<?php echo IMG_PATH;?>home/searchBtn.jpg" align="absmiddle" onclick="doSearch()" /></td>
          </tr>
        </table>
  </div>
  <div class="Language"><a href="http://www.unihmi.com/"><img src="<?php echo IMG_PATH;?>home/china.gif" /> 中文版</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.unihmi.com/EN/"><img src="<?php echo IMG_PATH;?>home/English.gif" /> ENGLISH</a></div>
</div>
<script type="text/javascript">
    function doSearch(){
        var keyword = $.trim($("#q").val());
        if(!keyword){
            alert("请输入关键词");
            return false;
        }else{
            // window.location.href="/index.php?m=content&c=index&a=lists&catid=111&q="+keyword;
        }
    }
</script>
<div class="tel">
<!--nav start-->
<div id="NavLink">
<div class="NavBG">
<!--Head Menu Start-->
<ul id='sddm'>
  <li class='CurrentLi'><a href='/'>网站首页</a></li>
    <?php $i=1;?>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bfe9993094685f60590451126c1dd196&action=category&catid=17&num=6&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'17','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'6',));}?>
    <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>

    <li>
        <?php $i++;?>
        <?php if($i<=5) { ?>
        <?php if($k=='16') $url='/ZH/About/Introduction/';?> 
        <?php if($k=='8')  $url='/ZH/News/CompanyNews/';?> 
        <?php if($k=='11') $url='/ZH/Product/ISP/';?> 
        <?php if($k=='19') $url='/ZH/Service/AfterSale/';?> 
        <a href='<?php echo $url;?>' onmouseover=mopen('m<?php echo $i;?>') onmouseout='mclosetime()'><?php echo $r['catname'];?></a>
        <?php } else { ?>
        <a href='<?php echo $r['url'];?>'><?php echo $r['catname'];?></a>
        <?php } ?>

        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d3f6258312dedc3cb11d7ddb33a97535&action=category&catid=%24k&num=8&siteid=%24siteid&order=listorder+ASC&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$dat = $content_tag->category(array('catid'=>$k,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
            <?php $left=75;?>
            <?php if($k=='8') $left=175;?> 
            <?php if($k=='11') $left=275;?> 
            <?php if($k=='19') $left=375;?> 
            <div id='m<?php echo $i;?>' onmouseover='mcancelclosetime()' onmouseout='mclosetime()' style='left: <?php echo $left;?>px;'>
            <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
            <a href='<?php echo $v['url'];?>'><?php echo $v['catname'];?></a> 
            <?php $n++;}unset($n); ?>
            </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

    </li>

    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


</ul>
<!--Head Menu End-->
</div>
<div class="clearfix"></div>
</div>
<!--nav end-->
</div>
</div>
</div>
<!--top end-->