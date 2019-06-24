<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_en"); ?>

<?php include template("content","left_header_en"); ?>



<!--main start-->
<div class="main">

<!--content start-->
<div class="content">
<div class="MorePro">
<div class="CaseBlock">

    <div class="TitleType">
    <?php $defaultSize=0;?>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=71cdd7db356b7a002e3cb5f467575873&sql=SELECT+id%2Cfilesize+FROM+%60u_download%60+where+catid%3D%24catid+GROUP+BY+filesize+ORDER+BY+filesize+DESC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT id,filesize FROM `u_download` where catid=$catid GROUP BY filesize ORDER BY filesize DESC LIMIT 25");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $i=0;?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <?php $i++;?>
        <?php $width=(int)(99/count($data));?>
        <?php if($i==1){ $defaultSize=$r['filesize']; } ?>
        <?php $idval=str_replace('.','-',$r['filesize']);?>
        <a id="id<?php echo $idval;?>" onclick="getPro(<?php echo $r['filesize'];?>)" style="width:<?php echo $width;?>%;" <?php if($i==1) { ?> class="Typediv" <?php } else { ?> class="Typediv2" <?php } ?>>
            <?php echo $r['filesize'];?>寸
        </a>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    <div style="border-top: 1px solid #005bac; height:25px;"></div>

    <div class="list-cls">

        <?php if($defaultSize!=0) { ?> 
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d541943911565da75e3dae98633d6c09&sql=SELECT+a.id%2Ca.url%2Ca.title%2Ca.thumb%2Ca.model%2Cb.content+FROM+u_download+AS+a+LEFT+JOIN+u_download_data+AS+b+ON+a.id%3Db.id+WHERE+a.catid%3D%24catid+AND+a.filesize%3D%24defaultSize+ORDER+BY+a.id+DESC&num=200\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT a.id,a.url,a.title,a.thumb,a.model,b.content FROM u_download AS a LEFT JOIN u_download_data AS b ON a.id=b.id WHERE a.catid=$catid AND a.filesize=$defaultSize ORDER BY a.id DESC LIMIT 200");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="albumblock">
            <div class="inner">
                <a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>">
                    <img src="<?php echo $r['thumb'];?>">
                </a>
            </div>
            <div class="title">
                <a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['model'];?></a>
            </div>
            <div class="title"><?php echo $r['title'];?></div>
            <div class="content"><?php echo $r['content'];?></div>
        </div>
        <div style="height:25px;"></div>
        <div style="border-top: 1px dotted #999999; height:25px;"></div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <?php } ?>          

    </div>      

</div>
<div class="clearfix"></div>

</div>

</div>
<!--content end-->

</div>
<!--main end-->

<script type="text/javascript">
    function getPro(filesize){
        var catid="<?php echo $catid; ?>";
        var idval=('id'+filesize).replace('.','-');
        $.ajax({
            url:"<?php echo APP_PATH;?>api.php?op=getpro",
            data:{'filesize':filesize,'catid':catid},
            type:"GET",
            success:function(data){
                $(".list-cls").html(data);
                $(".TitleType a").attr('class','Typediv2');
                $("#"+idval).attr('class','Typediv');
            }
        });
    }
</script>

<?php include template("content","left_footer_en"); ?>

<?php include template("content","footer_en"); ?>