<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<?php include template("content","left_header"); ?>


      <!--main start-->
      <div class="main">

        <!--content start-->
        <div class="content">
            <div class="maincontent clearfix">
                <table width="719" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                          <td width="10">&nbsp;</td>
                          <td colspan="2" class="xxian" height="30">
                            <img src="<?php echo IMG_PATH;?>home/ljt.gif"> 
                            <strong class="STYLE5"><?php echo $title;?></strong>
                          </td>
                          <td width="10">&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td width="399">&nbsp;</td>
                          <td width="300">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td class="td2">大&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;小：<?php echo $filesize;?></td>
                          <td rowspan="3" align="center">
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=78d61c64cd6b126a72292433616a771c&sql=select+downfiles+from+u_download_data+where+id%3D%24id&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select downfiles from u_download_data where id=$id LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                            <?php $df_arr = json_decode($data[0]['downfiles'],true); ?>
                            <?php if(isset($df_arr[0]['filename'])) { ?>
                            <?php $down_arr = explode('.',$df_arr[0]['fileurl']); 
                            $down_len = count($down_arr)-1; ?>
                            <a href="<?php echo $df_arr['0']['fileurl'];?>" target="_blank" download="<?php echo $df_arr['0']['filename'];?>.<?php echo $down_arr[$down_len];?>"><img src="<?php echo IMG_PATH;?>home/download_button.jpg" width="241" height="60" border="0"></a>
                            <?php } ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
                          
                          </td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td class="td2">日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;期：<?php echo $updatetime;?></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td class="td2">下载次数：<span id="hits"></span></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td class="td2">操作系统：<?php echo $systems;?></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="2"><table width="0" cellspacing="0" cellpadding="0" border="0">
                              <tbody><tr>
                                <td class="td2" width="66" valign="top">详细说明：</td>
                                <td class="td2" width="639"><?php echo $content;?></td>
                              </tr>
                          </tbody></table></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="2" class="xxian">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                  </tbody>
              </table>
            </div>
         
        </div>
        <!--content end-->

        </div>

        <!--main end-->

<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>

<?php include template("content","left_footer"); ?>

<?php include template("content","footer"); ?>