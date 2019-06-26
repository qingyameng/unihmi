<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_en"); ?>

<?php include template("content","left_header_en"); ?>


<!--main start-->
<div class="main">

<!--content start-->
<div class="content">
<div class="ProInfo">
<div class="product">
    <div class="image">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=57882d0e2115400baef2711211e5f806&sql=select+images+from+u_download_data+where+id%3D%24id&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select images from u_download_data where id=$id LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $df_arr = json_decode($data[0]['images'],true); ?>
        <?php if(isset($df_arr[0]['url'])) { ?>
            <a href="<?php echo $df_arr['0']['url'];?>" rel="clearbox" title="<?php echo $title;?>" id="url">
                <img src="<?php echo $df_arr['0']['url'];?>" height="270" width="360" id="img">
            </a>
        <?php } ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
    </div>
    <div class="Imageproduct">

        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=57882d0e2115400baef2711211e5f806&sql=select+images+from+u_download_data+where+id%3D%24id&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select images from u_download_data where id=$id LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $df_arr = json_decode($data[0]['images'],true); ?>
        <?php $n=1; if(is_array($df_arr)) foreach($df_arr AS $k => $r) { ?>
            <?php $currImg = $r['url'];?>
            <?php
            if($k==0){
                $cls='class="ImageBlockBG"';
            }else{
                $cls='class="ImageBlockBG2"';
            }
            ?>
            <div <?php echo $cls;?>>
                <div class="ImageBlock">
                    <img src="<?php echo $currImg;?>" alt="<?php echo $title;?>" onmouseover="document.getElementById('img').src='<?php echo $currImg;?>';document.getElementById('url').href='<?php echo $currImg;?>'">
                </div>
            </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 

    </div>
</div>

<div class="column">
<div class="title" style="color:#005bac"><h3><?php echo $model;?></h3><?php echo $title;?></div>
<div class="infos">更新：<?php if(!empty($updatetime)) { ?><?php echo $updatetime;?><?php } else { ?><?php echo $inputtime;?><?php } ?> 点击：<span id="hits"></span></div>
<div class="content"><?php echo $content;?></div>
<div style="height: 40px;padding-top: 20px;padding-left: 20px;">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=78d61c64cd6b126a72292433616a771c&sql=select+downfiles+from+u_download_data+where+id%3D%24id&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select downfiles from u_download_data where id=$id LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
    <?php $df_arr = json_decode($data[0]['downfiles'],true); ?>
    <?php if(isset($df_arr[0]['filename'])) { ?>
        <?php $down_arr = explode('.',$df_arr[0]['fileurl']); 
        $down_len = count($down_arr)-1; ?>
        <a href="<?php echo $df_arr['0']['fileurl'];?>" target="_blank" download="<?php echo $df_arr['0']['filename'];?>.<?php echo $down_arr[$down_len];?>"><img src="<?php echo IMG_PATH;?>home/pdf2.jpg" width="31" height="30" align="absmiddle"><?php echo $df_arr['0']['filename'];?></a>
    <?php } ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>       

</div>
</div>
<div class="clearfix"></div>
</div>
<div>
<div class="IntroTitle" align="center" id="bdi1" onmouseover="document.getElementById(&#39;tid1&#39;).style.display=&#39;block&#39;;document.getElementById(&#39;tid2&#39;).style.display=&#39;none&#39;;document.getElementById(&#39;tid3&#39;).style.display=&#39;none&#39;;document.getElementById(&#39;tid4&#39;).style.display=&#39;none&#39;;this.className=&#39;IntroTitle&#39;;bdi2.className=&#39;IntroTitle2&#39;;bdi3.className=&#39;IntroTitle2&#39;;bdi4.className=&#39;IntroTitle2&#39;">产品介绍</div>
<div class="IntroTitle3"></div>
<div class="IntroTitle2" align="center" id="bdi2" onmouseover="document.getElementById(&#39;tid2&#39;).style.display=&#39;block&#39;;document.getElementById(&#39;tid1&#39;).style.display=&#39;none&#39;;document.getElementById(&#39;tid3&#39;).style.display=&#39;none&#39;;document.getElementById(&#39;tid4&#39;).style.display=&#39;none&#39;;this.className=&#39;IntroTitle&#39;;bdi1.className=&#39;IntroTitle2&#39;;bdi3.className=&#39;IntroTitle2&#39;;bdi4.className=&#39;IntroTitle2&#39;">产品规格</div>
<div class="IntroTitle3"></div>
<div class="IntroTitle2" align="center" id="bdi3" onmouseover="document.getElementById(&#39;tid3&#39;).style.display=&#39;block&#39;;document.getElementById(&#39;tid1&#39;).style.display=&#39;none&#39;;document.getElementById(&#39;tid2&#39;).style.display=&#39;none&#39;;document.getElementById(&#39;tid4&#39;).style.display=&#39;none&#39;;this.className=&#39;IntroTitle&#39;;bdi1.className=&#39;IntroTitle2&#39;;bdi2.className=&#39;IntroTitle2&#39;;bdi4.className=&#39;IntroTitle2&#39;">订购信息</div>
<div class="IntroTitle3"></div>
<div class="IntroTitle2" align="center" id="bdi4" onmouseover="document.getElementById(&#39;tid4&#39;).style.display=&#39;block&#39;;document.getElementById(&#39;tid1&#39;).style.display=&#39;none&#39;;document.getElementById(&#39;tid2&#39;).style.display=&#39;none&#39;;document.getElementById(&#39;tid3&#39;).style.display=&#39;none&#39;;this.className=&#39;IntroTitle&#39;;bdi1.className=&#39;IntroTitle2&#39;;bdi2.className=&#39;IntroTitle2&#39;;bdi3.className=&#39;IntroTitle2&#39;">驱动程序</div>
<div class="IntroTitle4"></div>
</div>
<div class="maincontent clearfix">
<div class="tid" id="tid1" style="display: block;">
<?php echo $introduce;?>
</div>
<div class="tid" id="tid2" style="display:none;">
<?php echo $specs;?>
<br>
<br>
</div>
<div class="tid" id="tid3" style="display: none;">
<?php echo $order;?>
</div>
<div class="tid" id="tid4" style="display:none;">   

    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=59d3146c936b0bbb61d83c4d89437c20&action=relation&relation=%24relation&id=%24id&catid=%24catid&num=5&keywords=%24rs%5Bkeywords%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'relation')) {$data = $content_tag->relation(array('relation'=>$relation,'id'=>$id,'catid'=>$catid,'keywords'=>$rs[keywords],'limit'=>'5',));}?>
          <?php if($data) { ?>
            <table width="100%" border="0" cellspacing="1" cellpadding="0">
                <tbody>
                    <tr>
                        <td height="24" align="center" bgcolor="#C8E3FF" style="font-size: 13px">名 称</td>
                        <td align="center" bgcolor="#C8E3FF" style="font-size: 13px">大 小</td>
                        <td align="center" bgcolor="#C8E3FF" style="font-size: 13px">操作系统</td>
                        <td align="center" bgcolor="#C8E3FF" style="font-size: 13px">日 期</td>
                        <td align="center" bgcolor="#C8E3FF" style="font-size: 13px">下 载</td>
                    </tr>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <tr>
                            <td height="24" align="center" bgcolor="#ffffff" style="font-size: 13px"><?php echo $r['title'];?></td>
                            <td align="center" bgcolor="#ffffff" style="font-size: 13px"><?php echo $r['filesize'];?></td>
                            <td align="center" bgcolor="#ffffff" style="font-size: 13px"><?php echo $r['systems'];?></td>
                            <td align="center" bgcolor="#ffffff" style="font-size: 13px"><?php echo $r['updatetime'];?></td>
                            <td align="center" bgcolor="#ffffff" style="font-size: 13px">
                                <a href="<?php echo $r['url'];?>" target="_blank">进入下载页面<img src="<?php echo IMG_PATH;?>home/dc.gif" width="16" height="16" border="0" align="absmiddle"></a>
                            </td>
                        </tr>
                    <?php $n++;}unset($n); ?>
                </tbody>
            </table>
          <?php } ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

</div>
</div>

</div>
<!--content end-->

</div>
<!--main end-->

<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>

<?php include template("content","left_footer_en"); ?>

<?php include template("content","footer_en"); ?>