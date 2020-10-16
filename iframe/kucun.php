<?php
  session_start();
  include("../conn/conn.php");
  include("../conn/error.php");
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
  <link rel="stylesheet" href="../style/css/kucun.css">
  <link rel="stylesheet" href="../layui/css/layui.css">
  <link rel="stylesheet" href="../style/css/lianxi.css">
  <link rel="shortcut icon" type="images/x-icon" href="../img/header/logo.jpg">
  <style>
    .br>td{
      border: 1px solid black;
      padding:5px 0px;
    }
    .container{
      background: #fae8c8;
      margin-top: -20px;
    }
    .main{
      padding-top: 45px;
    }
  </style>
</head>
<body>
  <!-- 头部 -->
  <div class="header">
    <div class="header_con">
      <a href="../img/header/logo.jpg"></a>

      <div class="header_con_main">
        <form action="./menu_search.php" class="search" method="POST">
          <input type="text" class="text" placeholder="请输入菜谱/菜单/食材/作者" name="f_name">
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
      <li><a href="iframe/menu.php" class="a"><strong class="cli">菜谱大全</strong></a>
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
      <li><a href="iframe/health.php" class="a"><strong class="cli">饮食健康</strong></a>
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
      <li><a href="iframe/food_menu.php" class="a"><strong class="cli">美食菜单</strong></a></li>
      <!-- <li><a href="#" class="a"><strong class="cli">家居馆</strong></a></li> -->
      <li><a href="iframe/food_master.php" class="a"><strong class="cli">美食达人</strong></a></li>
      <li><a href="iframe/menu_video.php" class="a"><strong class="cli">菜谱视频</strong></a></li>
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
  <div class="container">
    <div class="main">
      <div class="wrapper">
        <h2 class="h2" style="text-align: center;font-size: 30px;">菜谱汇总</h2>
        <div class="add">
            <a href="add_food.php">添加菜谱</a>
        <!-- <a href="#" class="jiesuan">上架</a> -->
        </div>
        <table width="960">
            <tr style="text-align: left;color: black">
                <th style="text-align: center;border:1px solid black;padding:20px 0px;">图片</th>
                <th style="text-align: center;border:1px solid black;padding:20px 0px;">菜名</th>
                <th style="text-align: center;border:1px solid black;padding:20px 0px;">简介</th>
                <th style="text-align: center;border:1px solid black;padding:20px 0px;">食材</th>
                <th style="text-align: center;border:1px solid black;padding:20px 0px;">操作<img src="" alt=""></th>
            </tr>
    
  <?php 
               mysqli_query($conn,"set names 'utf8'");
    
                $sql = 'select * from food_product order by id asc';
                $result=mysqli_query($conn,$sql);
                $newsNum=mysqli_num_rows($result);  
                for($i=0; $i<$newsNum; $i++){
                $row = mysqli_fetch_assoc($result);
                    echo "<tr class='br'>";
                    echo "<td><img src='{$row['food_url']}' alt=''></td>";
                    echo "<td>{$row['food_name']}</td>";
                    echo "<td>{$row['food_introduction']}</td>";
                    echo "<td>{$row['food_material']}</td>";
                    echo "<td>
                            <a href='del.php?food_name={$row['food_name']}'>下架</a>
                            <a href='kucun_xiugai.php?food_name={$row['food_name']}'>修改</a>
                          </td>";
                    echo "</tr>";
                }
  ?>
        </table>
    </div>
      <script type="text/javascript">
      
          function del(food_name) {
              if (confirm("客官，你确定要抛弃我么？")){
                  window.location = "del.php?food_name="+food_name;
              }
          }
          // <a href='javascript:del({$row['food_name']})'>下架</a>
      </script>
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
        <p><a target="_blank" href="" class="gray_a">京ICP备14030359号</a>/<a target="_blank" href="" class="gray_a"><img src="img/header/标识.png">京公网安备11010802026928</a> Copyright © 2003-2020 MEISHIJ CO.,LTD.</p>
      </div>
    </div>
  </div>
  <!-- 返回顶部 -->
  <div class="bottom_back_top_top bottom_back_top_top_slideUp" id="bottom_back_top_top" style="left: 1130px; display: block; bottom: 20px;">
    <a href="#" class="backtotop pngFix">
      <!-- 返回顶部 -->
      <img src="img/header/up.png" alt="">
    </a>
  </div>

  <script src="../美食杰/layui/layui.js"></script>
  <script>
  layui.use('carousel', function(){
    var carousel = layui.carousel;
    //建造实例
    carousel.render({
      elem: '#test1'
      ,width: '100%' //设置容器宽度
      ,arrow: 'always' //始终显示箭头
      //,anim: 'updown' //切换动画方式
      });
  
      //监听轮播切换事件
      carousel.on('change(test1)', function(obj){ //test1来源于对应HTML容器的 lay-filter="test1" 属性值
        // console.log(obj.index); //当前条目的索引
        // console.log(obj.prevIndex); //上一个条目的索引
        console.log(obj.item.attr('data-text')); //当前条目的元素对象
        document.getElementsByClassName('describtion')[0].innerText =obj.item.attr('data-text');
      });
    });

    document.querySelector("#bottom_back_top_top > a");
  </script>
</body>
</html>