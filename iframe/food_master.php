<?php
  session_start();
  @$User_type = $_SESSION["User_type"];
  if (!isset ($_SESSION['User_name']))
	{	
		echo "<script language=javascript>alert ('要访问的页面需要先登录。');</script>";
		// $_SESSION['userurl'] = $_SERVER['REQUEST_URI'];
		echo '<script language=javascript>window.location.href="../admin_li/login.php"</script>';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>美食达人</title>
  <link rel="stylesheet" href="../style/common.css">
  <link rel="stylesheet" href="../style/ms_common.css">
  <link rel="stylesheet" href="../style/reset.css">
  <link rel="stylesheet" href="../style/css/food_master.css">
  <link rel="stylesheet" href="../layui/css/layui.css">
  <link rel="stylesheet" href="../style/css/lianxi.css">
  <link rel="shortcut icon" type="images/x-icon" href="../img/header/logo.jpg">
</head>
<body>
  <!-- 头部 -->
  <div class="header">
    <div class="header_con">
      <a href="../img/header/logo.jpg"></a>

      <div class="header_con_main">
        <form action="" class="search">
          <input type="text" class="text" placeholder="请输入菜谱/菜单/食材/作者">
          <input type="submit" class="submit" value="search">
        </form>
      </div>
      <!-- <div class="clear"></div> -->

      <div class="header_con_right">
        <div class="news">
          <div class="userinfo">
          <?php 
              if(isset($_SESSION['User_name'])){
                echo "<a href='#'><img src='../img/header/touxiang.png' alt=''></a>";
              }
            ?>
            <!-- <a href="#"><img src="../img/header/touxiang.png" alt=""></a> -->
            <!-- <a href="#" class="username">李佳乐</a> -->

            <?php 
							if(isset($_SESSION['User_name'])){
                echo "亲爱的<a href='../iframe/kucun.php?username={$_SESSION["User_name"]}' style='color: yellow;font-size:18px;font-weight: 700;'>
                {$_SESSION['User_name']}
                </a>,您好!<a style='font-size:18px;display:inline;color:#fae8c8;margin-left:10px' href='../admin_li/zhuxiao.php?login=out'>注销</a>";   //若session值存在则显示session值即用户名，且链接指向个人空间
							}
							else{
								echo "亲爱的用户,请<a href='../admin_li/login.php' style='color: yellow;font-size:18px;font-weight: 700;'>登陆</a>";  //若session值不存在则显示登录，链接指向登录页面
							}?>
							</span></a>

            <!-- <a href="./admin_li/login.php" class="login l">登陆</a><span style="color: black;height:20px;font-weight: 700;">丨</span>
            <a href="./admin_li/register.php" class="res l">注册</a> -->
            <div class="userinfo_more">
              <!-- <div class="u">
                <a href="#"><img src="img/header/touxiang.png" alt=""></a>
              </div>
              <div class="n">
                <a href="">李佳乐</a>
              </div> -->
            </div>
          </div>
          <!-- <a href="" class="outer">收藏</a> -->
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <!-- 导航栏 -->
  <div class="nav">
    <div class="nav_ul">
      <li><a href="../index.php" class="nav_ul_a a"><strong class="cli">首页</strong></a>
      </li>
      <li><a href="menu.php" class="a"><strong class="cli">菜谱大全</strong></a>
        <div class="nav_div layui-anim layui-anim-fadein">
          <div class="nav_div_2">
            <div class="nav_div_box">
              <dl class="box_dl">
                <dt class="box_1">
                  <a href="" class="a_1 layui-anim layui-anim-upbit">家常菜谱</a>
                  <ul>
                    <li class="a_2"><a href="">凉菜</a></li>
                    <li class="a_2"><a href="">素食</a></li>
                    <li class="a_2"><a href="">晚餐</a></li>
                    <li class="a_2"><a href="">私家菜</a></li>
                    <li class="a_2"><a href="">热菜</a></li>
                    <li class="a_2"><a href="">海鲜</a></li>
                    <li class="a_2"><a href="">早餐</a></li>
                    <li class="a_2"><a href="">午餐</a></li>
                    <li class="a_2"><a href="">甜品</a></li>
                    <li class="a_2"><a href="">糖粥</a></li>
                    <li class="a_2"><a href="">微主食</a></li>
                  </ul>
                </dt>
                <div class="clear"></div>
                <dt class="box_1">
                  <a href="" class="a_1 layui-anim layui-anim-upbit">中华菜系</a>
                  <ul>
                    <li class="a_2"><a href="">川菜</a></li>
                    <li class="a_2"><a href="">粤菜</a></li>
                    <li class="a_2"><a href="">湘菜</a></li>
                    <li class="a_2"><a href="">湖北菜</a></li>
                    <li class="a_2"><a href="">清真菜</a></li>
                    <li class="a_2"><a href="">自制小菜</a></li>
                  </ul>
                </dt>
                <div class="clear"></div>
                <dt class="box_1">
                  <a href="" class="a_1 layui-anim layui-anim-upbit">外国菜谱</a>
                  <ul>
                    <li class="a_2"><a href="">韩国料理</a></li>
                    <li class="a_2"><a href="">日本料理</a></li>
                    <li class="a_2"><a href="">法国菜</a></li>
                    <li class="a_2"><a href="">西餐</a></li>
                    <li class="a_2"><a href="">中国特色小吃</a></li>
                    <li class="a_2"><a href="">意大利餐</a></li>
                  </ul>
                </dt>
                <div class="clear"></div>
                <dt class="box_1">
                  <a href="" class="a_1 layui-anim layui-anim-upbit">厨房百科</a>
                  <ul>
                    <li class="a_2"><a href="">摆盘围边</a></li>
                    <li class="a_2"><a href="">烹饪技巧</a></li>
                    <li class="a_2"><a href="">生活妙招</a></li>
                    <li class="a_2"><a href="">美食专题</a></li>
                  </ul>
                </dt>
                <div class="clear"></div>
              </dl>
            </div>
          </div>
        </div>
      </li>
      <li><a href="health.php" class="a"><strong class="cli">饮食健康</strong></a>
        <div class="nav_div layui-anim layui-anim-fadein">
          <div class="nav_div_2">
            <div class="nav_div_box">
              <dl class="box_dl">
                <dt class="box_1">
                  <a href="" class="a_1 layui-anim layui-anim-upbit">饮食健康</a>
                  <ul>
                    <li class="a_2"><a href="">饮食小常识</a></li>
                    <li class="a_2"><a href="">美容健身</a></li>
                    <li class="a_2"><a href="">食品安全</a></li>
                    <li class="a_2"><a href="">养生妙方</a></li>
                    <li class="a_2"><a href="">饮食禁忌</a></li>
                    <li class="a_2"><a href="">中医保健</a></li>
                    <li class="a_2"><a href="">母婴保健食品</a></li>
                    <li class="a_2"><a href="">饮食新闻</a></li>
                  </ul>
                </dt>
                <div class="clear"></div>
                <dt class="box_1">
                  <a href="" class="a_1">功能调理</a>
                  <ul>
                    <li class="a_2"><a href="">清热去火</a></li>
                    <li class="a_2"><a href="">减肥</a></li>
                    <li class="a_2"><a href="">祛痰</a></li>
                    <li class="a_2"><a href="">乌发</a></li>
                    <li class="a_2"><a href="">滋阴补肾</a></li>
                    <li class="a_2"><a href="">健脾开胃</a></li>
                    <li class="a_2"><a href="">消化不良</a></li>
                    <li class="a_2"><a href="">清热解毒</a></li>
                    <li class="a_2"><a href="">补阳壮阳</a></li>
                    <li class="a_2"><a href="">增肥</a></li>
                  </ul>
                </dt>
                <div class="clear"></div>
                <dt class="box_1">
                  <a href="" class="a_1 layui-anim layui-anim-upbit">疾病调理</a>
                  <ul>
                    <li class="a_2"><a href="">糖尿病</a></li>
                    <li class="a_2"><a href="">高血压</a></li>
                    <li class="a_2"><a href="">通风</a></li>
                    <li class="a_2"><a href="">胃炎</a></li>
                    <li class="a_2"><a href="">痔疮</a></li>
                    <li class="a_2"><a href="">更年期</a></li>
                  </ul>
                </dt>
                <div class="clear"></div>
                <dt class="box_1">
                  <a href="" class="a_1 layui-anim layui-anim-upbit">脏腑调理</a>
                  <ul>
                    <li class="a_2"><a href="">感冒</a></li>
                    <li class="a_2"><a href="">补肾</a></li>
                    <li class="a_2"><a href="">补血</a></li>
                    <li class="a_2"><a href="">便秘</a></li>
                    <li class="a_2"><a href="">腹泻</a></li>
                    <li class="a_2"><a href="">活血化瘀</a></li>
                  </ul>
                </dt>
                <div class="clear"></div>
              </dl>
            </div>
          </div>
        </div>
      </li>
      <li><a href="food_menu.php" class="a"><strong class="cli">美食菜单</strong></a></li>
      <!-- <li><a href="#" class="a"><strong class="cli">家居馆</strong></a></li> -->
      <li><a href="food_people.php" class="a"><strong class="cli layui-anim layui-anim-rotate">美食达人</strong></a></li>
      <li><a href="menu_video.php" class="a"><strong class="cli">菜谱视频</strong></a></li>
      <li style="position: relative;"><a href="#" class="a"><strong class="cli">联系我们</strong></a>
      <div class="nav_div layui-anim layui-anim-fadein l780">
          <div class="nav_div_2">
            <div class="nav_div_box">
              <form action="" id="fankui">
                <label for="name">姓名</label>
                <input type="text" id="name" <?php 
                  if(isset($_SESSION['User_name'])){echo "value='{$_SESSION['User_name']}'";}else{
                    echo "value=''";
                    } 
                    ?>>
                <label for="email">邮箱</label>
                <input type="text" id="email" name="email" oninvalid="setCustomValidity('请填写邮箱地址！')" required autofocus>
                <label for="message">留言</label>
                <textarea name="" id="message" cols="30" rows="10" name="proposal" oninvalid="setCustomValidity('请填写留言！')" required autofocus></textarea>
                <input type="submit" class="sub" value="发送"/>
              </form>
            </div>
          </div>
        </div>
      </li>
      <?php if($User_type=="1"){
            echo "<li><a href='./fankui.php' class='a'><strong class='cli'>用户反馈</strong></a></li>";
					}else{
						echo "";
					} ?>
    </div>
  </div>


  <!-- 内容 -->
  <div class="main_w">
    <div class="main">
       <!-- 轮播图 -->
      <div class="layui-carousel" id="test1" lay-filter="test1">
        <div carousel-item>
          <div><img src="../img/banner/matser/master_banner1.jpg" alt=""></div>
          <div><img src="../img/banner/matser/master_banner2.jpg" alt=""></div>
          <div><img src="../img/banner/matser/master_banner3.jpg" alt=""></div>
        </div>
      </div>
    </div>

    <!-- tx -->
    <div class="dr_mod2">
      <div class="dr_mod2_item">
        <a href="" target="_blank" class="tag1">
          <img src="../img/master/tx/tx8.png">
          <strong>中式菜</strong>
        </a>
      </div>

      <div class="dr_mod2_item">
        <a href="" target="_blank" class="tag1">
          <img src="../img/master/tx/tx7.png">
          <strong>西式菜</strong>
        </a>
      </div>
      <div class="dr_mod2_item">
        <a href="" target="_blank" class="tag1">
          <img src="../img/master/tx/tx6.jpg">
          <strong>烘焙</strong>
        </a>
      </div>
      <div class="dr_mod2_item">
        <a href="" target="_blank" class="tag1">
          <img src="../img/master/tx/tx5.jpg">
          <strong>素食</strong>
        </a>
      </div>
      <div class="dr_mod2_item">
        <a href="" target="_blank" class="tag1">
          <img src="../img/master/tx/tx4.jpg">
          <strong>轻食</strong>
        </a>
      </div>
      <div class="dr_mod2_item">
        <a href="" target="_blank" class="tag1">
          <img src="../img/master/tx/tx3.jpg">
          <strong>一人食</strong>
        </a>
      </div>
      <div class="dr_mod2_item">
        <a href="" target="_blank" class="tag1">
          <img src="../img/master/tx/tx2.jpg">
          <strong>孕婴</strong>
        </a>
      </div>
      <div class="dr_mod2_item">
        <a href="" target="_blank" class="tag1">
          <img src="../img/master/tx/tx1.jpg">
          <strong>养生</strong>
        </a>
      </div>
      <div class="dr_mod2_item">
        <a href="" target="_blank" class="tag1">
          <img src="../img/master/tx/tx3.jpg">
          <strong>技巧</strong>
        </a>
      </div>
      <div class="dr_mod2_item">
        <a href="" target="_blank" class="tag1">
          <img src="../img/master/tx/tx2.jpg">
          <strong>品味家</strong>
        </a>
      </div>
      <div class="dr_mod2_item">
        <a href="" target="_blank" class="tag1">
          <img src="../img/master/tx/tx1.jpg">
          <strong>营养师</strong>
        </a>
  </div>
    </div>

    <!-- 内容精选 -->
    <div class="w1050">
      <h3 class="dr_btitle">内容精选</h3>
      <div class="dr_mod3list">
        <!-- 1 -->
        <div class="dr_mod3">
          <a href="" target="_blank" class="img"><img src="../img/master/caipu/neirong_1.jpeg"></a>
          <div class="info">
            <a href="" target="_blank" class="title">吃剩的柚子皮不要扔，削一削，做成小零食，清甜不苦，下火润喉</a>
            <div class="i">2921浏览  · 7评论  · 13赞</div>
            <a href="" target="_blank" class="aun">代号001</a>
          </div>
        </div>
        <div class="dr_mod3">
          <a href="" target="_blank" class="img"><img src="../img/master/caipu/neirong_6.jpeg"></a>
          <div class="info">
            <a href="" target="_blank" class="title">秋季多吃这蔬菜，包饺子一口一个太香了！</a>
            <div class="i">2921浏览  · 7评论  · 13赞</div>
            <a href="" target="_blank" class="aun">代号002</a>
          </div>
        </div>
        <div class="dr_mod3">
          <a href="" target="_blank" class="img"><img src="../img/master/caipu/neirong_2.jpeg"></a>
          <div class="info">
            <a href="" target="_blank" class="title">这鱼肉多刺少，肥嫩鲜美，最适合做红烧，色泽光亮，又鲜又香！</a>
            <div class="i">2921浏览  · 7评论  · 13赞</div>
            <a href="" target="_blank" class="aun">代号003</a>
          </div>
        </div>
        <div class="dr_mod3">
          <a href="" target="_blank" class="img"><img src="../img/master/caipu/neirong_3.jpeg"></a>
          <div class="info">
            <a href="" target="_blank" class="title">皮脆肉酥的香酥鸭，酥而不油满口香，做法超级简单。</a>
            <div class="i">2921浏览  · 7评论  · 13赞</div>
            <a href="" target="_blank" class="aun">代号004</a>
          </div>
        </div>
        <div class="dr_mod3">
          <a href="" target="_blank" class="img"><img src="../img/master/caipu/neirong_4.jpeg"></a>
          <div class="info">
            <a href="" target="_blank" class="title">鲜虾面是该先煮虾还是先煮面？其实很多人都做错了</a>
            <div class="i">2921浏览  · 7评论  · 13赞</div>
            <a href="" target="_blank" class="aun">代号005</a>
          </div>
        </div>
        <div class="dr_mod3">
          <a href="" target="_blank" class="img"><img src="../img/master/caipu/neirong_5.jpeg"></a>
          <div class="info">
            <a href="" target="_blank" class="title">西兰花炒虾仁，补肝明目，保护视力，建议多给孩子吃一些</a>
            <div class="i">2921浏览  · 7评论  · 13赞</div>
            <a href="" target="_blank" class="aun">代号006</a>
          </div>
        </div>
      </div>
    </div>

    <!-- 大咖——活动 -->
    <div class="w1050 mt-20">
      <div class="w505">
        <h3 class="dr_btitle">大咖专栏</h3>
        <div class="dr_mod4">
          <a href="" target="_blank" class="big">
            <img src="../img/master/caipu/daka_1.jpeg">
            <div class="title">
              <strong>这小饼饭菜一锅出，比包子简单，比油条好吃，做少了根本不够吃</strong>
            </div>
          </a>
          <!-- 小图 -->
          <a href="" target="_blank" class="small">
            <img src="../img/master/caipu/daka_2.jpeg">
          </a>
          <a href="" target="_blank" class="small">
            <img src="../img/master/caipu/daka_3.jpeg">
          </a>
          <a href="" target="_blank" class="small">
            <img src="../img/master/caipu/daka_4.jpeg">
          </a>
        </div>
      </div>

      <div class="w505">
        <h3 class="dr_btitle">活动专栏</h3>
        <div class="dr_mod4">
          <a href="" target="_blank" class="big">
            <img src="../img/master/caipu/huodong_1.jpeg">
            <div class="title">
              <strong>三都港&美食杰联名菜谱征集活动获奖名单</strong>
            </div>
          </a>
          <!-- 小图 -->
          <a href="" target="_blank" class="small">
            <img src="../img/master/caipu/huodong_2.png">
          </a>
          <a href="" target="_blank" class="small">
            <img src="../img/master/caipu/huodong_3.png">
          </a>
          <a href="" target="_blank" class="small">
            <img src="../img/master/caipu/huodong_4.jpeg">
          </a>
        </div>
      </div>
    </div>
  </div>
 
 
 
 
 
 
 <!-- 底部 -->
 <div class="footer">
  <div class="footer_con1">
    <dl class="friend_link clearfix">
      <dt>友情链接</dt>
          <dd><a href="#" title="美食">美食</a></dd>
          <dd><a href="#" title="体质测试">体质测试</a></dd>
          <dd><a href="#" title="伊特">伊特</a></dd>
          <dd><a href="#" title="9酷音乐网">9酷音乐网</a></dd>
          <dd><a href="#" title="365音乐网">365音乐网</a></dd>
          <dd><a href="#" title="图吧">图吧</a></dd>
          <dd><a href="#" title="汽车论坛">汽车论坛</a></dd>
          <dd><a href="#" title="39健康饮食">39健康饮食</a></dd>
          <dd><a href="#" title="QQ下载 ">QQ下载</a></dd>
          <dd><a href="#" title="家具网">家具网</a></dd>
          <dd><a href="#" title="搜狐美食">搜狐美食</a></dd>
          <dd><a href="#" title="美食天下">美食天下</a></dd>
          <dd><a href="#" title="中华美食网">中华美食网</a></dd>
          <dd><a href="#" title="合肥公交网">合肥公交网</a></dd>
          <dd><a href="#" title="红餐微杂志">红餐微杂志</a></dd>
          <dd><a href="#" title="北京搜房网">北京搜房网</a></dd>
          <dd><a href="#" title="更多友情链接">更多友情链接</a></dd>
          </dl>
    <!-- <dl class="friend_link">
      <dt>友情链接</dt>
      <dd><a target="_blank" href="http://www.meishij.net" title="美食">美食</a></dd>
    </dl> -->
  </div>

  <div class="footer_con2">
    <ul class="clearfix">
      <li><a target="_blank" href="" title="公司简介">公司简介</a></li>
      <li><a target="_blank" href="" title="关于我们">关于我们</a></li>
      <li><a target="_blank" href="" title="产品下载">产品下载</a></li>
      <li><a target="_blank" href="" title="加入我们">加入我们</a></li>
      <li><a target="_blank" href="" title="联系我们">联系我们</a></li>		
      <li><a target="_blank" href="" title="商务合作">商务合作</a></li>
      <li><a target="_blank" href="" title="用户协议">用户协议</a></li>
      <li><a target="_blank" href="" title="用户协议">隐私政策</a></li>
      <li><a target="_blank" href="" title="网站地图">网站地图</a></li>
      <li><a target="_blank" href="" title="友情链接">友情链接</a></li>			
    </ul>
    <p><a target="_blank" href="" class="gray_a">京ICP备14030359号</a>/<a target="_blank" href="" class="gray_a"><img src="../img/header/标识.png">京公网安备11010802026928</a> Copyright © 2003-2020 MEISHIJ CO.,LTD.</p>
  </div>
</div>

<!-- 返回顶部 -->
<div class="bottom_back_top_top bottom_back_top_top_slideUp" id="bottom_back_top_top" style="left: 1130px; display: block; bottom: 20px;">
  <a href="#" class="backtotop pngFix">
    <!-- 返回顶部 -->
    <img src="../img/header/up.png" alt="">
  </a>
</div>



<script src="../layui/layui.js"></script>
<script>
  document.querySelector("#bottom_back_top_top > a")

  layui.use('carousel', function(){
    var carousel = layui.carousel;
    //建造实例
    carousel.render({
      elem: '#test1'
      ,width: '100%' //设置容器宽度
      ,arrow: 'always' //始终显示箭头
      //,anim: 'updown' //切换动画方式
    });
  });

</script>
</body>
</html>
