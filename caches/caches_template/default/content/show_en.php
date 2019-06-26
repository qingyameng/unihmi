<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_en"); ?>

<?php include template("content","left_header_en"); ?>


      <!--main start-->
      <div class="main">

        <!--content start-->
        <div class="content">
            <div class="title"><h3><?php echo $title;?></h3></div>
            <div class="infos"><?php echo $inputtime;?>  Page View：<span id="hits"></span></div>
            <div class="maincontent clearfix">
                <?php echo $content;?>
            </div>


          <div class="prenext">
            <ul>
                <li>
                    The previous article：
                    <?php if($previous_page[title]=="第一页") { ?> 
                        First page 
                    <?php } else { ?>
                        <a href="<?php echo $previous_page['url'];?>" target='_blank' title='<?php echo $previous_page['title'];?>'><?php echo $previous_page['title'];?></a>
                    <?php } ?>
                </li>
                <li>
                    The next article：
                    <?php if($next_page[title]=="最后一页") { ?> 
                        Last page 
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

<?php include template("content","left_footer_en"); ?>

<?php include template("content","footer_en"); ?>