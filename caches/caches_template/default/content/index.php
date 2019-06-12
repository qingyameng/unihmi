<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!--focus start-->
<div id="FocusBG">
<div class="fullSlide">
  <div class="bd">
<ul>
  <li style='background-image: url(<?php echo IMG_PATH;?>home/banner1.jpg); width: 1900px;'>
    <a href='http://www.nodka.com/Product/PCMonitor/' target='_blank'></a>
  </li>
    <li style='background-image: url(<?php echo IMG_PATH;?>home/banner2.jpg); width: 1900px;'>
      <a href='http://www.nodka.com/Product/PCMonitor/Monitor/' target='_blank'></a>
    </li>
    <li style='background-image: url(<?php echo IMG_PATH;?>home/banner3.jpg); width: 1900px;'>
      <a href='http://www.nodka.com/Product/PCMonitor/PanelPC/' target='_blank'></a>
    </li>
    <li style='background-image: url(<?php echo IMG_PATH;?>home/banner4.jpg); width: 1900px;'>
      <a href='http://www.nodka.com/Product/PCMonitor/PanelPC/' target='_blank'></a>
    </li>
    <li style='background-image: url(<?php echo IMG_PATH;?>home/banner1.jpg); width: 1900px;'>
      <a href='http://www.nodka.com/Product/7856431949.html' target='_blank'></a>
    </li>
    <li style='background-image: url(<?php echo IMG_PATH;?>home/banner2.jpg); width: 1900px;'>
      <a href='http://www.nodka.com/html/196804812.html' target='_blank'></a>
    </li>
</ul>
</div>
<span class="prev"></span> <span class="next"></span>
</div>
<script type="text/javascript">
jQuery(".fullSlide").hover(function() {
    jQuery(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.5)
},
function() {
    jQuery(this).find(".prev,.next").fadeOut()
});
jQuery(".fullSlide").slide({
    titCell: ".hd ul",
    mainCell: ".bd ul",
    effect: "fold",
    autoPlay: true,
    autoPage: true,
    trigger: "click",
    startFun: function(i) {
        var curLi = jQuery(".fullSlide .bd li").eq(i);
        if ( !! curLi.attr("_src")) {
            curLi.css("background-image", curLi.attr("_src")).removeAttr("_src")
        }
    }
});
</script>
</div>
<!--foncus end-->
</div>
<!--head end-->
<!--body start-->
<div id="body">
<div class="HeightTab clearfix"></div>
<div class="MainBlock">
  <div class='ItemBlock'>
    <a href='Product/PCMonitor' class='rs' >
      <div class='link' style='background:#f39700;'></div>
      <div class='biaoti' style='background-image: url(<?php echo IMG_PATH;?>home/index_3_1.png); color: #f39700;'>
        <ul>
          <li><span style='font-family: 宋体;'>&gt;&gt;</span> 工业显示及系统产品</li>
        </ul>
      </div>
      <div class='ItemImg'>
        <img src='<?php echo IMG_PATH;?>home/index_2_1.jpg' />
      </div>
    </a>
    <div style='height:10px;'></div>
    <div class='liebiao'>
      <ul>
        <li>
          <a href='/Product/PCMonitor/PanelPC' target='_blank'>
            <img src='<?php echo IMG_PATH;?>home/index_jt.png' /> 工业平板电脑
          </a>
        </li>
        <li>
          <a href='/Product/PCMonitor/Monitor' target='_blank'>
            <img src='<?php echo IMG_PATH;?>home/index_jt.png' /> 工业显示器
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class='ItemInner'></div>
  <div class='ItemBlock'>
    <a href='Product/Embedded' class='rs' >
      <div class='link' style='background:#005bac;'></div>
      <div class='biaoti' style='background-image: url(<?php echo IMG_PATH;?>home/index_3_2.png); color: #005bac;'>
        <ul>
          <li><span style='font-family: 宋体;'>&gt;&gt;</span> 工业嵌入式计算机</li>
        </ul>
      </div>
      <div class='ItemImg'>
        <img src='<?php echo IMG_PATH;?>home/index_2_2.jpg' />
      </div>
    </a>
    <div style='height:10px;'></div>
    <div class='liebiao'>
      <ul>
        <li>
          <a href='/Product/Embedded/Boxpc' target='_blank'>
            <img src='<?php echo IMG_PATH;?>home/index_jt.png' /> 无风扇Boxpc
          </a>
        </li>
        <li>
          <a href='/Product/Embedded/IPC' target='_blank'>
            <img src='<?php echo IMG_PATH;?>home/index_jt.png' /> 第三代无风扇工控机
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class='ItemInner'></div>
  <div class='ItemBlock'>
    <a href='Product/Industry' class='rs' >
      <div class='link' style='background:#6eba2c;'></div>
      <div class='biaoti' style='background-image: url(<?php echo IMG_PATH;?>home/index_3_3.png); color: #6eba2c;'>
        <ul>
          <li>
            <span style='font-family: 宋体;'>&gt;&gt;</span> 行业专用计算机
          </li>
        </ul>
      </div>
      <div class='ItemImg'>
        <img src='<?php echo IMG_PATH;?>home/index_2_3.jpg' />
      </div>
    </a>
    <div style='height:10px;'></div>
    <div class='liebiao'>
      <ul>
        <li>
          <a href='/Product/Industry/RailTransit' target='_blank'>
            <img src='<?php echo IMG_PATH;?>home/index_jt.png' /> 轨道交通
          </a>
        </li>
        <li>
          <a href='/Product/Industry/CNCequipment' target='_blank'>
            <img src='<?php echo IMG_PATH;?>home/index_jt.png' /> 运动控制
          </a>
        </li>
        <li>
          <a href='/Product/Industry/ShipandCarPC' target='_blank'>
            <img src='<?php echo IMG_PATH;?>home/index_jt.png' /> 船舶和车载电脑
          </a>
        </li>
        <li>
          <a href='/Product/Industry/MachineVision' target='_blank'>
            <img src='<?php echo IMG_PATH;?>home/index_jt.png' /> 机器视觉
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class='ItemInner'></div>
  <div class='ItemBlock'>
    <a href='Product/OEMODM' class='rs' >
      <div class='link' style='background:#e4007f;'></div>
      <div class='biaoti' style='background-image: url(<?php echo IMG_PATH;?>home/index_3_4.png); color: #e4007f;'>
        <ul>
          <li>
            <span style='font-family: 宋体;'>&gt;&gt;</span> OEM/ODM客制化服务
          </li>
        </ul>
      </div>
      <div class='ItemImg'>
        <img src='<?php echo IMG_PATH;?>home/index_2_4.jpg' />
      </div>
    </a>
    <div style='height:10px;'></div>
    <div class='liebiao'>
      <ul>
        <li>
          <a href='/Product/OEMODM' target='_blank'>
            <img src='<?php echo IMG_PATH;?>home/index_jt.png' /> OEM/ODM服务领域
          </a>
        </li>
        <li>
          <a href='/Product/OEMODM' target='_blank'>
            <img src='<?php echo IMG_PATH;?>home/index_jt.png' /> OEM/ODM关键要素
          </a>
        </li>
        <li>
          <a href='/Product/OEMODM' target='_blank'>
            <img src='<?php echo IMG_PATH;?>home/index_jt.png' /> OEM/ODM服务流程
          </a>
        </li>
        <li>
          <a href='/Product/OEMODM' target='_blank'>
            <img src='<?php echo IMG_PATH;?>home/index_jt.png' /> OEM/ODM成功案例
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="HeightTab clearfix"></div>
</div>
<!--body end-->
<!--Middle start-->
<div id="Middle">
  <div class="Middle_bg" >
    <div class="new1" >
      <div class="nbt" >
        <div class="text" >
          <span style="font-family: 宋体;">&gt;&gt;</span> 新闻活动
        </div>
        <div class="More"> 
          <a  href='/News'>更多 
            <span style="font-family: 宋体;">&gt;&gt;</span>
          </a>
        </div>
      </div>
      <div class="HeightTab clearfix"></div>
      <table id="MBlockTable" width="100%" border="0" cellspacing="0" cellpadding="0">
        <ul>
          <tr>
            <td width='75%'>
              <img src='<?php echo IMG_PATH;?>home/index_jt2.png' />&nbsp;&nbsp;&nbsp;
              <a href='/html/2564035155.html' target='_blank' title='诺达佳诚邀您共赏第18届中国国际工业博览会'>诺达佳诚邀您共赏第18届中国国际工
              </a>
            </td>
            <td width='25%' align='right'>
              <span>2016/12/08</span>
            </td>
          </tr>
          <tr>
            <td colspan='2' style='padding-left:20px; border-bottom:1px solid #b1b1b1; padding-bottom: 6px;'>
              <a href='/html/2564035155.html' target='_blank' title='诺达佳诚邀您共赏第18届中国国际工业博览会' style='color:#666666'>
      	  &nbsp; &nbsp; 第18届中国国际工业博览会将于11月1日在上海国家会展中心盛大开幕，工博会每年举办一次......
             </a>
            </td>
          </tr>
          <tr>
            <td height='5' colspan='2'>
          </tr>
          <tr>
            <td width='75%'>
              <img src='<?php echo IMG_PATH;?>home/index_jt2.png' />&nbsp;&nbsp;&nbsp;
              <a href='/html/1765295020.html' target='_blank' title='热烈庆祝北京诺达佳自动化技术有限公司成立'>热烈庆祝北京诺达佳自动化技术有限公
              </a>
            </td>
            <td width='25%' align='right'>
              <span>2016/12/08</span>
            </td>
          </tr>
          <tr>
            <td width='75%'>
              <img src='<?php echo IMG_PATH;?>home/index_jt2.png' />&nbsp;&nbsp;&nbsp;
              <a href='/html/1382453450.html' target='_blank' title='诺达佳全体同仁恭祝大家中秋快乐'>诺达佳全体同仁恭祝大家中秋快乐
              </a>
            </td>
            <td width='25%' align='right'>
              <span>2016/09/14</span>
            </td>
          </tr>
          <tr>
            <td width='75%'>
              <img src='<?php echo IMG_PATH;?>home/index_jt2.png' />&nbsp;&nbsp;&nbsp;
              <a href='/html/2857304339.html' target='_blank' title='诺达佳再次应邀参加售货机及自助展'>诺达佳再次应邀参加售货机及自助展
              </a>
            </td>
            <td width='25%' align='right'>
              <span>2016/08/03</span>
            </td>
          </tr>
        </ul>
      </table>
    </div>
    <div class="new2"></div>
    <div class="new1" >
      <div class="nbt" >
        <div class="text" >
          <span style="font-family: 宋体;">&gt;&gt;</span> 解决方案
        </div>
        <div class="More"> 
          <a  href='/Solutions'>更多 
            <span style="font-family: 宋体;">&gt;&gt;
            </span>
          </a>
        </div>
      </div>
      <div class="HeightTab clearfix"></div>
      <table id="MBlockTable" width="100%" border="0" cellspacing="0" cellpadding="0">
        <ul>
          <tr>
            <td width='75%'>
              <img src='<?php echo IMG_PATH;?>home/index_jt2.png' />&nbsp;&nbsp;&nbsp;
              <a href='/Solutions/0361781823.html' target='_blank' title='工业平板电脑在水闸泵站监控系统中的应用'>工业平板电脑在水闸泵站监控系统中的
              </a>
            </td>
            <td width='25%' align='right'>
              <span>2014/03/04</span>
            </td>
          </tr>
          <tr>
            <td colspan='2' style='padding-left:20px; border-bottom:1px solid #b1b1b1; padding-bottom: 6px;'>
              <a href='/Solutions/0361781823.html' target='_blank' title='工业平板电脑在水闸泵站监控系统中的应用' style='color:#666666'>
                使用产品：TPC6000-8170T 
                国家/城市：广东
                更新日期：2011-10-23
			        </a>
            </td>
          </tr>
          <tr><td height='5' colspan='2'></tr>
          <tr>
            <td width='75%'>
              <img src='<?php echo IMG_PATH;?>home/index_jt2.png' />&nbsp;&nbsp;&nbsp;
              <a href='/Solutions/2098511343.html' target='_blank' title='工业平板电脑在环保行业的应用'>工业平板电脑在环保行业的应用
              </a>
            </td>
            <td width='25%' align='right'>
              <span>2014/03/04</span>
            </td>
          </tr>
          <tr>
            <td width='75%'>
              <img src='<?php echo IMG_PATH;?>home/index_jt2.png' />&nbsp;&nbsp;&nbsp;
              <a href='/Solutions/6829741241.html' target='_blank' title='工业平板电脑在电气火灾监控系统中的应用'>工业平板电脑在电气火灾监控系统中的
              </a>
            </td>
            <td width='25%' align='right'>
              <span>2014/03/04</span>
            </td>
          </tr>
          <tr>
            <td width='75%'>
              <img src='<?php echo IMG_PATH;?>home/index_jt2.png' />&nbsp;&nbsp;&nbsp;
              <a href='/Solutions/6379204913.html' target='_blank' title='工业平板电脑在船舶电气自动化控制设备上的运用 '>工业平板电脑在船舶电气自动化控制设
              </a>
            </td>
            <td width='25%' align='right'>
              <span>2013/12/25</span>
            </td>
          </tr>
        </ul>
      </table>
    </div>
    <div class="new2"></div>
    <div class="new3" >
      <table width="244" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="21"></td>
        </tr>
        <tr>
          <td><a href="/service/FeedBack/"><img src="<?php echo IMG_PATH;?>home/index_01.jpg" border="0"></a></td>
        </tr>
        <tr>
          <td height="5"></td>
        </tr>
        <tr>
          <td><a href="/service/FeedBack/"><img src="<?php echo IMG_PATH;?>home/index_03.jpg" border="0" /></a></td>
        </tr>
        <tr>
          <td height="5"></td>
        </tr>
        <tr>
          <td><a href="/service/service1/"><img src="<?php echo IMG_PATH;?>home/index_05.jpg" border="0" /></a></td>
        </tr>
        <tr>
          <td height="5"></td>
        </tr>
        <tr>
          <td><a href="/service/productinformation/Catalog/"><img src="<?php echo IMG_PATH;?>home/index_07.jpg" border="0" /></a></td>
        </tr>
        <tr>
          <td height="5"></td>
        </tr>
        <tr>
          <td><a href="/service/productinformation/Journal/"><img src="<?php echo IMG_PATH;?>home/index_09.jpg" border="0" /></a></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<!--Middle end-->

<?php include template("content","footer"); ?>