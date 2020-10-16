<?php
  session_start();
  @$admin = $_SESSION["User_name"];
  @$User_type = $_SESSION["User_type"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>美食杰</title>
  <link rel="stylesheet" href="style/common.css">
  <link rel="stylesheet" href="style/ms_common.css">
  <link rel="stylesheet" href="style/reset.css">
  <link rel="stylesheet" href="style/css/index.css">
  <link rel="stylesheet" href="layui/css/layui.css">
  <link rel="stylesheet" href="./style/css/lianxi.css">
  <link rel="shortcut icon" type="images/x-icon" href="img/header/logo.jpg">

</head>
<body>
  <!-- 头部 -->
  <div class="header">
    <div class="header_con">
      <a href="../img/header/logo.jpg"></a>

      <div class="header_con_main">
        <form action="./iframe/menu_search.php" class="search" method="POST">
          <input type="text" class="text" placeholder="请输入菜谱/菜单/食材/作者"  autocomplete="off" required oninvalid="setCustomValidity('请输入菜谱/菜单/食材/作者')" name="f_name">
          <input type="submit" class="submit" value="search">
        </form>
      </div>
      <!-- <div class="clear"></div> -->

      <div class="header_con_right">
        <div class="news">
          <div class="userinfo">
            <?php 
              if(isset($_SESSION['User_name'])){
                echo "<a href='#'><img src='./img/header/touxiang.png' alt=''></a>";
              }
            ?>
            <!-- <a href="#"><img src="img/header/touxiang.png" alt=""></a> -->
            <!-- <a href="#" class="username">李佳乐</a> -->

            <?php 
							if(isset($_SESSION['User_name'])){
                echo "亲爱的<a href='./iframe/kucun.php?username={$admin}' style='color: yellow;font-size:18px;font-weight: 700;'>
                {$_SESSION['User_name']}
                </a>,您好!<a style='font-size:18px;display:inline;color:#fae8c8;margin-left:10px' href='./admin_li/zhuxiao.php?login=out'>注销</a>";   //若session值存在则显示session值即用户名，且链接指向个人空间
							}
							else{
								echo "亲爱的用户,请<a href='./admin_li/login.php' style='color: yellow;font-size:18px;font-weight: 700;'>登陆</a>";  //若session值不存在则显示登录，链接指向登录页面
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
      <li><a href="./index.php" class="nav_ul_a a"><strong class="cli layui-anim layui-anim-rotate">首页</strong></a>
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
      <li><a href="iframe/food_master.php" class="a"><strong class="cli">美食达人</strong></a></li>
      <li><a href="iframe/menu_video.php" class="a"><strong class="cli">菜谱视频</strong></a></li>
      <li style="position: relative;"><a href="#" class="a"><strong class="cli">联系我们</strong></a>
      <div class="nav_div layui-anim layui-anim-fadein l780">
          <div class="nav_div_2">
            <div class="nav_div_box">
              <form action="./iframe/recieve.php" id="fankui" method="POST">
                <label for="name">姓名</label>
                <input type="text" id="name" name="username" autofocus="autofocus" require="require" <?php 
                  if(isset($_SESSION['User_name'])){echo "value='{$_SESSION['User_name']}'";}else{
                    echo "value=''";
                    } 
                    ?>>
                <label for="email">邮箱</label>
                <input type="text" id="email" name="email" required autocomplete="off" oninvalid="setCustomValidity('请输入正确的邮箱地址！')">
                <label for="message">留言</label>
                <textarea id="message" cols="30" rows="10" name="proposal" required oninvalid="setCustomValidity('请填写留言内容！')"></textarea>
                <input type="submit" class="sub" value="发送"/>
              </form>
            </div>
          </div>
        </div>
      </li>
      <?php if($User_type=="1"){
            echo "<li><a href='./iframe/fankui.php' class='a'><strong class='cli'>用户反馈</strong></a></li>";
					}else{
						echo "";
					} ?>
    </div>
  </div>
  <!-- 内容 -->
  <div class="content">
    <div class="main">
      <div class="main_header">
        <div class="describtion" style="text-align: center;height:99px;line-height:99px; font-size: 24px; color: #222; background:#FAE8C8;">
          今日早餐推荐：动手做顿别人都羡慕的早餐
        </div>
      </div>
      <!-- 轮播图 -->
      <div class="layui-carousel test" id="test1" lay-filter="test1">
        <div carousel-item>
          <!-- <div data-text="今日早餐推荐：动手做顿别人都羡慕的早餐"><img src="img/header/3.png" alt=""></div> -->
          <div data-text="今日午餐推荐：快手凉拌菜，美味又省时"><img src="img/header/4.png" alt=""></div>
          <!-- <div data-text="今日下午茶推荐：DIY街边摊火爆小吃"><img src="img/header/2.png" alt=""></div> -->
          <div data-text="今日晚餐推荐：好吃不过家常菜"><img src="img/header/5.png" alt=""></div>
          <div data-text="今日夜宵推荐：饿了吧，美味宵夜来啦"><img src="img/header/1.png" alt=""></div>
        </div>
      </div>

      <h3 class="bbtitles">四月，补肾调阴阳，不负好春光
        <span class="paixu"><a href="#">更多食材 &gt;</a></span>
      </h3>
      
      <div class="index_fl">
        <ul class="index_fl_header">
          <li><a href="">水果</a>
            <div class="header_div_1" style="display: block;">
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/水果/菠萝.jpg"><p class="text">菠萝</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/水果/芒果.jpg"><p class="text">芒果</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/水果/草莓.jpg"><p class="text">草莓</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/水果/香蕉.jpg"><p class="text">香蕉</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/水果/椰子.jpg"><p class="text">椰子</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/水果/梨.jpg"><p class="text">梨</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/水果/桑葚.jpg"><p class="text">桑葚</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/水果/木瓜.jpg"><p class="text">木瓜</p></a>
              </div>
            </div>
            <div class="clear"></div>
          </li>
          <li><a href="">蔬菜</a>
            <div class="header_div_1">
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/蔬菜/油菜.jpg"><p class="text">油菜</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/蔬菜/茄子.jpg"><p class="text">茄子</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/蔬菜/菠菜.jpg"><p class="text">菠菜</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/蔬菜/黄瓜.jpg"><p class="text">黄瓜</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/蔬菜/油麦菜.jpg"><p class="text">油麦菜</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/蔬菜/西红柿.jpg"><p class="text">西红柿</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/蔬菜/苦瓜.jpg"><p class="text">苦瓜</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/蔬菜/莴笋.jpg"><p class="text">莴笋</p></a>
              </div>
            </div>
          </li>
          <li><a href="">五谷</a>
            <div class="header_div_1">
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/五谷/绿豆.jpg"><p class="text">绿豆</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/五谷/玉米（鲜）.jpg"><p class="text">玉米</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/五谷/燕麦.jpg"><p class="text">燕麦</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/五谷/小米.jpg"><p class="text">小米</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/五谷/赤小豆.jpg"><p class="text">赤小豆</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/五谷/大米.jpg"><p class="text">大米</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/五谷/黄豆.jpg"><p class="text">黄豆</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/五谷/核桃.jpg"><p class="text">核桃</p></a>
              </div>
            </div>
          </li>
          <li><a href="">生鲜</a>
            <div class="header_div_1">
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/生鲜/鲫鱼.jpg"><p class="text">鲫鱼</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/生鲜/皮皮虾.jpg"><p class="text">皮皮虾</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/生鲜/牡蛎.jpg"><p class="text">牡蛎</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/生鲜/黄鱼.jpg"><p class="text">黄鱼</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/生鲜/田螺.jpg"><p class="text">田螺</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/生鲜/鸭肉.jpg"><p class="text">鸭肉</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/生鲜/带鱼.jpg"><p class="text">带鱼</p></a>
              </div>
              <div class="header_div_d">
                <a target="_blank" href="#"><img src="img/生鲜/鸡腿.jpg"><p class="text">鸡腿</p></a>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!-- 四月结束 -->

      <div class="index_cp">
        <div class="index_cp_w">
          <div class="index_cp_1">
            <h3 class="bbtitles">一周热门菜谱推荐
              <span class="paixu"><a href="#">更多菜谱 &gt;</a></span>
            </h3>
            <div class="index_cp_photo">
              <div class="cp_1 m10">
                <a href="" class="big">
                  <img src="img/菜谱/土豆烩牛肉.jpg" alt="土豆烩牛肉">
                  <div class="i_w">
                    <div class="i">
                      <div class="c1">
                        <strong>土豆烩牛肉</strong>
                        <span>1 评论  0 人气</span>
                        <em>髅小彬</em>
                      </div>
                      <!-- <div class="c2">
                        <ul><li class="li1">10步 / 大概数小时</li><li class="li2">煮 / 甜味</li></ul>
                      </div> -->
                    </div>
                  </div>
                </a>
              </div>
              <div class="cp_1">
                <a href="" class="big">
                  <img src="img/菜谱/土豆猪肉馅饼.jpg" alt="土豆猪肉馅饼">
                  <div class="i_w">
                    <div class="i">
                      <div class="c1">
                        <strong>土豆猪肉馅饼</strong>
                        <span>1 评论  0 人气</span>
                        <em>髅小彬</em>
                      </div>
                      <!-- <div class="c2">
                        <ul><li class="li1">10步 / 大概数小时</li><li class="li2">煮 / 甜味</li></ul>
                      </div> -->
                    </div>
                  </div>
                </a>
              </div>
              <div class="cp_1">
                <a href="" class="big">
                  <img src="img/菜谱/法式牛奶甜粥.jpg" alt="法式牛奶甜粥">
                  <div class="i_w">
                    <div class="i">
                      <div class="c1">
                        <strong>法式牛奶甜粥</strong>
                        <span>1 评论  0 人气</span>
                        <em>髅小彬</em>
                      </div>
                      <!-- <div class="c2">
                        <ul><li class="li1">10步 / 大概数小时</li><li class="li2">煮 / 甜味</li></ul>
                      </div> -->
                    </div>
                  </div>
                </a>
              </div>
              <div class="cp_1">
                <a href="" class="big">
                  <img src="img/菜谱/自然红肠土豆.jpg" alt="自然红肠土豆">
                  <div class="i_w">
                    <div class="i">
                      <div class="c1">
                        <strong>自然红肠土豆</strong>
                        <span>1 评论  0 人气</span>
                        <em>髅小彬</em>
                      </div>
                      <!-- <div class="c2">
                        <ul><li class="li1">10步 / 大概数小时</li><li class="li2">煮 / 甜味</li></ul>
                      </div> -->
                    </div>
                  </div>
                </a>
              </div>
              <!-- 第一排结束 -->
              <div class="cp_1 m10">
                <a href="" class="big">
                  <img src="img/菜谱/蒸乌鸡.jpg" alt="蒸乌鸡">
                  <div class="i_w">
                    <div class="i">
                      <div class="c1">
                        <strong>蒸乌鸡</strong>
                        <span>1 评论  0 人气</span>
                        <em>髅小彬</em>
                      </div>
                      <!-- <div class="c2">
                        <ul><li class="li1">10步 / 大概数小时</li><li class="li2">煮 / 甜味</li></ul>
                      </div> -->
                    </div>
                  </div>
                </a>
              </div>
              <div class="cp_1">
                <a href="" class="big">
                  <img src="img/菜谱/黄油烤馒头.jpg" alt="黄油烤馒头">
                  <div class="i_w">
                    <div class="i">
                      <div class="c1">
                        <strong>黄油烤馒头</strong>
                        <span>1 评论  0 人气</span>
                        <em>髅小彬</em>
                      </div>
                      <!-- <div class="c2">
                        <ul><li class="li1">10步 / 大概数小时</li><li class="li2">煮 / 甜味</li></ul>
                      </div> -->
                    </div>
                  </div>
                </a>
              </div>
              <div class="cp_1">
                <a href="" class="big">
                  <img src="img/菜谱/爆炒田鸡.jpg" alt="爆炒田鸡">
                  <div class="i_w">
                    <div class="i">
                      <div class="c1">
                        <strong>爆炒田鸡</strong>
                        <span>1 评论  0 人气</span>
                        <em>髅小彬</em>
                      </div>
                      <!-- <div class="c2">
                        <ul><li class="li1">10步 / 大概数小时</li><li class="li2">煮 / 甜味</li></ul>
                      </div> -->
                    </div>
                  </div>
                </a>
              </div>
              <div class="cp_1">
                <a href="" class="big">
                  <img src="img/菜谱/菜脯炒蛋.jpg" alt="菜脯炒蛋">
                  <div class="i_w">
                    <div class="i">
                      <div class="c1">
                        <strong>菜脯炒蛋</strong>
                        <span>1 评论  0 人气</span>
                        <em>髅小彬</em>
                      </div>
                      <!-- <div class="c2">
                        <ul><li class="li1">10步 / 大概数小时</li><li class="li2">煮 / 甜味</li></ul>
                      </div> -->
                    </div>
                  </div>
                </a>
              </div>

            </div>
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
      <p><a target="_blank" href="" class="gray_a">京ICP备14030359号</a>/<a target="_blank" href="" class="gray_a"><img src="img/header/标识.png">京公网安备11010802026928</a> Copyright © 2003-2020 MEISHIJ CO.,LTD.</p>
    </div>
  </div>
  <!-- 返回顶部 -->
  <div class="bottom_back_top_top bottom_back_top_top_slideUp" id="bottom_back_top_top" style="left: 1130px; display: block; bottom: 20px;">
    <a href="#" class="backtotop pngFix">
      <!-- 返回顶部 -->
      <img src="img/header/up.png" alt="">
    </a>
  </div>

  <!-- <script src="../美食杰/layui/layui.js"></script> -->
  <script src="../food0/layui/layui.js"></script>
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
