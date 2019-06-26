<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<?php include template("content","left_header"); ?>


      <!--main start-->
      <div class="main">

        <!--content start-->
        <div class="content">
            <div class="title"><h3><?php echo $title;?></h3></div>
            <div class="infos"><?php echo $inputtime;?>  点击：<span id="hits"></span></div>
            <div class="maincontent clearfix">
                <!-- <?php echo $content;?> -->
            </div>

            <div class="download ColorLink"><b>文件下载：</b>

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=78d61c64cd6b126a72292433616a771c&sql=select+downfiles+from+u_download_data+where+id%3D%24id&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select downfiles from u_download_data where id=$id LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                <?php $df_arr = json_decode($data[0]['downfiles'],true); ?>
                <?php if(isset($df_arr[0]['filename'])) { ?>
                    <?php $down_arr = explode('.',$df_arr[0]['fileurl']); 
                    $down_len = count($down_arr)-1; ?>
                <a href="<?php echo $df_arr['0']['fileurl'];?>" target="_blank" download="<?php echo $df_arr['0']['filename'];?>.<?php echo $down_arr[$down_len];?>"><?php echo $df_arr['0']['filename'];?></a>
                <span class="ListDate">(点击即可下载)</span>
                <?php } ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>            
            
            </div>

          <div class="prenext">
            <ul>
                <li>
                    上一篇：
                    <?php if($previous_page[title]=="第一页") { ?> 
                        第一页
                    <?php } else { ?>
                        <a href="<?php echo $previous_page['url'];?>" target='_blank' title='<?php echo $previous_page['title'];?>'><?php echo $previous_page['title'];?></a>
                    <?php } ?>
                </li>
                <li>
                    下一篇：
                    <?php if($next_page[title]=="最后一页") { ?> 
                        最后一页 
                    <?php } else { ?>
                        <a href="<?php echo $next_page['url'];?>" target='_blank' title='<?php echo $next_page['title'];?>'><?php echo $next_page['title'];?></a>
                    <?php } ?>
                </li>
            </ul>
          </div>

         
        </div>
        <!--content end-->

        </div>

        <!--main end-->

<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>

<?php include template("content","left_footer"); ?>

<?php include template("content","footer"); ?>