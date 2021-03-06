<?php
  session_start();
  // header('content-type:text/html; charset = utf-8');
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
  <title>菜谱大全</title>
  <link rel="stylesheet" href="../style/common.css">
  <link rel="stylesheet" href="../style/ms_common.css">
  <link rel="stylesheet" href="../style/reset.css">
  <link rel="stylesheet" href="../style/css/menu.css">
  <link rel="stylesheet" href="../layui/css/layui.css">
  <link rel="stylesheet" href="../style/css/lianxi.css">
  <link rel="shortcut icon" type="images/x-icon" href="../img/header/logo.jpg">
  <style>
    .next{
      font-size: 25px;
      width: 100px;
      height: 40px;
      display: inline-block;
      background: #fff;
      line-height: 40px;
      text-align: center;
      margin-top: 30px;
    }
    .l{
      margin-left: 275px;
    }
    .r{
      margin-left: 20px;
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
      <li><a href="menu.php" class="a"><strong class="cli layui-anim layui-anim-rotate">菜谱大全</strong></a>
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
      <li><a href="food_master.php" class="a"><strong class="cli">美食达人</strong></a></li>
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
                <textarea name="" id="message" cols="30" rows="10" name="proposal" oninvalid="setCustomValidity('请填写留言！')" required></textarea>
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
  <div class="content">
    <div class="main">
      <div class="listnav">
        <ul class="listnav_ul" id="listnav_ul">
          <li disable="1"><a class="link">我的美食属性（未开放）</a></li>
          <li class="current hover"><h1><a href="" class="link">家常菜谱</a></h1></li>
          <li><a href="./menu_2.php" class="link">中华菜系</a></li>
          <li><a href="" class="link">各地小吃</a></li>
          <li><a href="" class="link">外国菜谱</a></li><li><a href="/hongpei/" class="link">烘焙</a></li>
          <li><a href="" class="link">厨房百科</a></li><li><a href="" class="link">食材百科</a></li>
        </ul>
        <div class="listnav_con">
          <dl class="listnav_dl_1 bb1 w990">
            <dt class="listnav_dl_dt">家常菜谱</dt>
            <dd><a href="">家常菜</a></dd>
            <dd><a href="">私家菜</a></dd>
            <dd><a href="">凉菜</a></dd>
            <dd><a href="">海鲜</a></dd>
            <dd><a href="">热菜</a></dd>
            <dd><a href="">汤粥</a></dd>
            <dd><a href="">素食</a></dd>
            <dd><a href="">酱料蘸料</a></dd>
            <dd><a href="">微波炉</a></dd>
            <dd><a href="">火锅底料</a></dd>
            <dd><a href="">甜品点心</a></dd>
            <dd><a href="">糕点主食</a></dd>
            <dd><a href="">干果制作</a></dd>
            <dd><a href="">卤酱</a></dd>
            <dd><a href="">时尚饮品</a></dd>
          </dl>
          <dl class="listnav_dl_1 w300 br1">
            <dt>每日三餐</dt>
            <dd><a href="">早餐</a></dd>
            <dd><a href="">午餐</a></dd>
            <dd><a href="">晚餐</a></dd>
            <dd><a href="">下午茶</a></dd>
            <dd><a href="">夜宵</a></dd>
          </dl>
          <dl class="listnav_dl_1 w300 br1">
            <dt>每日三餐</dt>
            <dd><a href="">早餐</a></dd>
            <dd><a href="">午餐</a></dd>
            <dd><a href="">晚餐</a></dd>
            <dd><a href="">下午茶</a></dd>
            <dd><a href="">夜宵</a></dd>
          </dl>
          <dl class="listnav_dl_1 w360">
            <dt>功效</dt>
            <dd><a href="">疾病调理</a></dd>
            <dd><a href="">功能性调理</a></dd>
            <dd><a href="">脏腑调理</a></dd>
            <dd><a href="">人群膳食</a></dd>
          </dl>
        </div>
      </div>
      <div class="bbtitles">
        印象中的那些妈妈的味道
        <span class="paixu">
          <a href="" class="current">最新</a> | 
          <a href="">最热</a>
        </span>
      </div>

      <div class="liststyle_w">
        <div class="liststyle_left">
          <div class="style_top">
            <ul class="tab">
              <li class="li1 current"><a href="">普通筛选</a></li>
              <li class="li2"><a href="">食材筛选</a></li>
            </ul>
            <div class="tab_con">
              <dl class="clearfix on">
                <dt class="pngFix"><a>选择难度</a></dt>
                <dd class="clearfix">
                  <a href="">新手尝试</a>
                  <a href="">初级入门</a>
                  <a href="">初中水平</a>
                  <a href="">中级掌勺</a>
                  <a href="">高级厨师</a>
                  <a href="">厨神级</a>
                </dd>
              </dl>
              <dl class="clearfix">
                <dt class="pngFix"><a>选择工艺</a></dt>
                <dd class="clearfix">
                  <a href="">炒</a>
                  <a href="">蒸</a>
                  <a href="">煮</a>
                  <a href="">炖</a>
                  <a href="">焖</a>
                  <a href="">烧</a>
                </dd>
              </dl>
              <dl class="clearfix">
                <dt class="pngFix"><a>选择口味</a></dt>
                <dd class="clearfix">
                  <a href="">家常味</a>
                  <a href="">香辣味</a>
                  <a href="">咸鲜味</a>
                  <a href="">甜味</a>
                  <a href="">酸甜味</a>
                  <a href="">酸辣味</a>
                  <a href="">麻辣味</a>
                  <a href="">酱香味</a>
                  <a href="">奶香味</a>
                  <a href="">蒜香味</a>
                </dd>
              </dl>
              <dl class="clearfix">
                <dt class="pngFix"><a>选择时间</a></dt>
                <dd class="clearfix">
                  <a href=""><5min</a>
                  <a href=""><10min</a>
                  <a href=""><15min</a>
                  <a href=""><30min</a>
                  <a href=""><60min</a>
                  <a href=""><90min</a>
                  <a href=""><2H</a>
                  <a href=""><数小时</a>
                </dd>
              </dl>
            </div>
          </div>
        </div>
        <!-- right -->
        <div class="liststyle_q">
          <div class="liststyle_list">

            <?php
              // $sql = "select * from food_product order by id asc";
              // $query = mysqli_query($conn,$sql);
              // while($rs=mysqli_fetch_array($query)){

              $page=isset($_GET['p'])? $_GET['p']:1;//定义变量由浏览器传入
              $sql1 = "select * from food_product limit ".($page-1) * 12 .",12";//查询语句，limit后的两个参数第一个是查询的起始位置，第二个是显示的数据条数
              $result=mysqli_query($conn,$sql1);
              for($i = 0;$i<12;$i++){
                $rs=mysqli_fetch_array($result);
                // echo "<script>alert('{$rs['food_name']}')</script>";
                echo "<div class='list_1'>";
                echo "<a target='_blank' href='' title='{$rs['food_name']}' class='big'>";
                echo     "<img class='img' alt='{$rs['food_name']}' src='{$rs['food_url']}'>";
                echo     "<div class='i_w'>";
                echo       "<div class='i' style='margin-top: 0px;'>";
                echo         "<div class='c1'>";
                echo           "<strong>{$rs['food_name']}</strong><span>食材：{$rs['food_material']}</span><em>作者：{$rs['author']}</em>";
                echo         "</div>";
                echo         "<div class='c2'>";
                echo           "<ul><li class='li1'>8步 / 大概30分钟</li><li class='li2'>炒 / 家常味</li></ul>";
                echo        "</div>";
                echo       "</div>";
                echo     "</div>";
                echo   "</a>";
                echo "</div>";
              }

                mysqli_free_result($result);
                $to_sql="SELECT COUNT(*) FROM food_product";
                $result= mysqli_query($conn,$to_sql);
                $row=mysqli_fetch_array($result);
                $count=$row[0];
                $to_pages=ceil($count/12);
                if($page<=1){
                  echo "<a href='".$_SERVER['PHP_SELF']."?p=1' class='next l'>首页</a>";
                  }else{
                  echo "<a href='".$_SERVER['PHP_SELF']."?p=".($page-1)."' class='next l'>上一页</a>";
                }
                if ($page<$to_pages){
                  echo "<a href='".$_SERVER['PHP_SELF']."?p=".($page+1)."' class='next r'>下一页</a>";
                }else{
                  echo "<a href='".$_SERVER['PHP_SELF']."?p=".($to_pages)."' class='next r'>尾页</a>";
                }
                      

            ?>

            <!-- <div class="list_1">
              <a target="_blank" href="" title="姬松茸火锅" class="big">
                <img class="img" alt="姬松茸火锅" src="../img/菜谱界面/姬松茸火锅.jpg">
                <div class="i_w">
                  <div class="i" style="margin-top: 0px;">
                    <div class="c1">
                      <strong>姬松茸火锅</strong><span>0 评论  1 人气</span><em>hlybb</em>
                    </div>
                    <div class="c2">
                      <ul><li class="li1">8步 / 大概30分钟</li><li class="li2">炒 / 家常味</li></ul>
                    </div>					
                  </div>
                </div>
              </a>
            </div>
            <div class="list_1">
              <a target="_blank" href="" title="麻辣小龙虾" class="big">
                <img class="img" alt="麻辣小龙虾" src="../img/菜谱界面/麻辣小龙虾.jpg">
                <div class="i_w">
                  <div class="i" style="margin-top: 0px;">
                    <div class="c1">
                      <strong>麻辣小龙虾</strong><span>0 评论  1 人气</span><em>hlybb</em>
                    </div>
                    <div class="c2">
                      <ul><li class="li1">8步 / 大概30分钟</li><li class="li2">炒 / 家常味</li></ul>
                    </div>					
                  </div>
                </div>
              </a>
            </div>
            <div class="list_1">
              <a target="_blank" href="" title="香辣虾" class="big">
                <img class="img" alt="香辣虾" src="../img/菜谱界面/香辣虾.jpg">
                <div class="i_w">
                  <div class="i" style="margin-top: 0px;">
                    <div class="c1">
                      <strong>香辣虾</strong><span>0 评论  1 人气</span><em>hlybb</em>
                    </div>
                    <div class="c2">
                      <ul><li class="li1">8步 / 大概30分钟</li><li class="li2">炒 / 家常味</li></ul>
                    </div>					
                  </div>
                </div>
              </a>
            </div>
            <div class="list_1">
              <a target="_blank" href="" title="香菇酱烤金针菇" class="big">
                <img class="img" alt="香菇酱烤金针菇" src="../img/菜谱界面/香菇酱烤金针菇.jpg">
                <div class="i_w">
                  <div class="i" style="margin-top: 0px;">
                    <div class="c1">
                      <strong>香菇酱烤金针菇</strong><span>0 评论  1 人气</span><em>hlybb</em>
                    </div>
                    <div class="c2">
                      <ul><li class="li1">8步 / 大概30分钟</li><li class="li2">炒 / 家常味</li></ul>
                    </div>					
                  </div>
                </div>
              </a>
            </div>
            <div class="list_1">
              <a target="_blank" href="" title="香椿炒蛋" class="big">
                <img class="img" alt="香椿炒蛋" src="../img/菜谱界面/香椿炒蛋.jpg">
                <div class="i_w">
                  <div class="i" style="margin-top: 0px;">
                    <div class="c1">
                      <strong>香椿炒蛋</strong><span>0 评论  1 人气</span><em>hlybb</em>
                    </div>
                    <div class="c2">
                      <ul><li class="li1">8步 / 大概30分钟</li><li class="li2">炒 / 家常味</li></ul>
                    </div>					
                  </div>
                </div>
              </a>
            </div>
            <div class="list_1">
              <a target="_blank" href="" title="韭菜炒海兔" class="big">
                <img class="img" alt="韭菜炒海兔" src="../img/菜谱界面/韭菜炒海兔.jpg">
                <div class="i_w">
                  <div class="i" style="margin-top: 0px;">
                    <div class="c1">
                      <strong>韭菜炒海兔</strong><span>0 评论  1 人气</span><em>hlybb</em>
                    </div>
                    <div class="c2">
                      <ul><li class="li1">8步 / 大概30分钟</li><li class="li2">炒 / 家常味</li></ul>
                    </div>					
                  </div>
                </div>
              </a>
            </div>
            <div class="list_1">
              <a target="_blank" href="" title="金玉满堂" class="big">
                <img class="img" alt="金玉满堂" src="../img/菜谱界面/金玉满堂.jpg">
                <div class="i_w">
                  <div class="i" style="margin-top: 0px;">
                    <div class="c1">
                      <strong>金玉满堂</strong><span>0 评论  1 人气</span><em>hlybb</em>
                    </div>
                    <div class="c2">
                      <ul><li class="li1">8步 / 大概30分钟</li><li class="li2">炒 / 家常味</li></ul>
                    </div>					
                  </div>
                </div>
              </a>
            </div>
            <div class="list_1">
              <a target="_blank" href="" title="煎茄子" class="big">
                <img class="img" alt="煎茄子" src="../img/菜谱界面/煎茄子.jpg">
                <div class="i_w">
                  <div class="i" style="margin-top: 0px;">
                    <div class="c1">
                      <strong>煎茄子</strong><span>0 评论  1 人气</span><em>hlybb</em>
                    </div>
                    <div class="c2">
                      <ul><li class="li1">8步 / 大概30分钟</li><li class="li2">炒 / 家常味</li></ul>
                    </div>					
                  </div>
                </div>
              </a>
            </div>
            <div class="list_1">
              <a target="_blank" href="" title="焖猪大肠" class="big">
                <img class="img" alt="焖猪大肠" src="../img/菜谱界面/焖猪大肠.jpg">
                <div class="i_w">
                  <div class="i" style="margin-top: 0px;">
                    <div class="c1">
                      <strong>焖猪大肠</strong><span>0 评论  1 人气</span><em>hlybb</em>
                    </div>
                    <div class="c2">
                      <ul><li class="li1">8步 / 大概30分钟</li><li class="li2">炒 / 家常味</li></ul>
                    </div>					
                  </div>
                </div>
              </a>
            </div>
            <div class="list_1">
              <a target="_blank" href="" title="小龙虾" class="big">
                <img class="img" alt="小龙虾" src="../img/菜谱界面/小龙虾.jpg">
                <div class="i_w">
                  <div class="i" style="margin-top: 0px;">
                    <div class="c1">
                      <strong>小龙虾</strong><span>0 评论  1 人气</span><em>hlybb</em>
                    </div>
                    <div class="c2">
                      <ul><li class="li1">8步 / 大概30分钟</li><li class="li2">炒 / 家常味</li></ul>
                    </div>					
                  </div>
                </div>
              </a>
            </div>
            <div class="list_1">
              <a target="_blank" href="" title="原味战斧牛排" class="big">
                <img class="img" alt="原味战斧牛排" src="../img/菜谱界面/原味战斧牛排.jpg">
                <div class="i_w">
                  <div class="i" style="margin-top: 0px;">
                    <div class="c1">
                      <strong>原味战斧牛排</strong><span>0 评论  1 人气</span><em>hlybb</em>
                    </div>
                    <div class="c2">
                      <ul><li class="li1">8步 / 大概30分钟</li><li class="li2">炒 / 家常味</li></ul>
                    </div>					
                  </div>
                </div>
              </a>
            </div> -->
              <!-- 分页 -->
            <!-- <div class="listtyle1_page">
              <div class="listtyle1_page_w">
                <a href="" class="current">1</a>
                <a href="" class="">2</a>
                <a href="" class="">3</a>
                <a href="" class="">4</a>
                <a href="" class="">5</a>
                <span>...</span>
                <a href="" class="next">下一页</a>
                <span class="gopage">
                  <form action="">
                    <input type="hidden" value="13" name="lm">共56页，到第 
                    <input type="text" class="text" value="2" name="page"> 页 
                    <input type="submit" class="submit" value="确定">
                  </form>
                </span>
              </div>
            </div> -->
          </div>
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
  <script>
    document.querySelector("#bottom_back_top_top > a")

  </script>
</body>
</html>