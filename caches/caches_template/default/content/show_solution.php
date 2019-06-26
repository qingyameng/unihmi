<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<?php include template("content","left_header"); ?>


      <!--main start-->
      <div class="main">

        <!--content start-->
        <div class="content">
            <div class="title"><h3><?php echo $title;?></h3></div>
            <div style="height:20px;"></div>
            <div class="maincontent clearfix">
                <table id="table1" class="ke-zeroborder" border="0" cellspacing="1" cellpadding="15" width="100%" bgcolor="#cccccc">
                    <tbody>
                        <tr>
                            <td bgcolor="#ffffff">
                                使用产品：
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=477b8923adb8e2a4686c6d17732ae823&action=relation&relation=%24relation&id=%24id&catid=%24catid&num=1&keywords=%24rs%5Bkeywords%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'relation')) {$data = $content_tag->relation(array('relation'=>$relation,'id'=>$id,'catid'=>$catid,'keywords'=>$rs[keywords],'limit'=>'1',));}?>
                                  <?php if($data) { ?>
                                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                        <a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a>
                                    <?php $n++;}unset($n); ?>
                                  <?php } ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                              
                                <br />
                                国家/城市：<?php echo $city;?><br />
                                更新日期：<?php echo $prodate;?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br />
                <?php echo $content;?>
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