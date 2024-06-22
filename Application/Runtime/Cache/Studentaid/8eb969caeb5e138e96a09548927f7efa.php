<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo ($con['contactname']); ?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/Public/Studentaid/images/title_icon.ico"/>
	<meta property="og:title" content="聯合大學選課輔助系統" />
	<meta property="og:type"  content="article" />
	<meta property="og:description" content="最方便的選課輔助系統歐~~~" />
	<meta property="og:url" content="http://studentaid.nuucloud.com/" />
	<meta property="og:image" content="https://studentaid.nuucloud.com/Public/Studentaid/images/studentaid.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="/Public/Studentaid//css/reset.css" rel="stylesheet">
		
		<!--RWD設定--><!--電腦螢幕寬度1920px-1280px-->
		<link href="/Public/Studentaid//css/style.css" rel="stylesheet" type="text/css" />
		
		<!--1280以下--><!--ipad 橫放/電腦螢幕-->
		<link href="/Public/Studentaid//css/style-large.css" rel="stylesheet" type="text/css" media="only screen and (min-width: 770px) and (max-width: 1280px)"  />
		
		<!--手機直立/手機橫放/ipad直立-->
		<link href="/Public/Studentaid//css/style-small.css" rel="stylesheet" type="text/css" media="only screen and (min-width: 0px) and (max-width: 769px)" />
		
	</head>

		<!-- header end -->	
<body>

    <div id="wrapper" none="true">
        <!--主背景框-->

        <header>

            <div id="top">
                <ul class="list-inline topul">
                    <a href="<?php echo u('Index/index');?>">
                        <li id="toptital"><?php echo ($con['contactname']); ?></li>
                    </a>
                    <li class="take" href="tagedi">修改課表</li>
                    <li class="take" href="tagpic">製作圖片</li>
                    <li class="take" href="taglist">列出清單</li>

                    <?php if($_SESSION['id']== ''): ?><li class="take" href="tagacc">綁定帳號</li>
                        <?php else: ?>
                        <li class="save">存檔</li>

                        <a href="<?php echo u('Work/logout');?>">
                            <li>登出</li>
                        </a><?php endif; ?>
                    <li><a href="<?php echo ($con['header_content']); ?>">課程索引</a></li>
                </ul>
                <input type="hidden" class="listbu" value='<?php if(is_array($myclass)): $k = 0; $__LIST__ = $myclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post): $mod = ($k % 2 );++$k; echo ($post["class_number"]); ?>@<?php endforeach; endif; else: echo "" ;endif; ?>' />
            </div>
        </header>
        <div class="first_box" id="tagedi" style="padding:50px 0 0 0;">
            <div id="left">
                <div class="ul_class">
                    <ul id="classification" class="list-inline">
                        <li id="canclass">可選</li>
                        <li id="topgo">|</li>
                        <li id="myclass" class=" table-hover">已選</li>
                    </ul>
                </div>
                <div id="canform">
                    <div class="form-inline searchform">
                        <input type="text" class="search form-control " placeholder="日資管 二坪">
                        <button type="button" class="btn btn-default searchbu ">搜尋</button>
                        <div class='cchose'>
                            <select class="chose form-control ">
                                <option>班級選必修</option>
							<?php if(is_array($class_type)): $k = 0; $__LIST__ = $class_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post): $mod = ($k % 2 );++$k;?><option><?php echo ($post[obligatory]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                <option >全部課程</option>

						</select></div>
                    </div>

                    <div class="nav listg" id="A">
                    </div>

                </div>
                <div id="myform">
                    <form class="form-inline numshow">

                        <label id="num"><?php echo ($num); ?></label>
                        <label>學分</label>
                    </form>
                    <div class="listg" id='B'>
                        <?php if(is_array($myclass)): $k = 0; $__LIST__ = $myclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post): $mod = ($k % 2 );++$k;?><blockquote class="sc" id="<?php echo ($post['class_number']); ?>" style="border-left: 5px solid <?php echo ($post['color']); ?>">
                                <p><?php echo ($post['class_name']); ?><br><?php echo ($post['class']); ?> <?php echo ($post['obligatory']); ?></p>
                                <p class="nonep">校區:<?php echo ($post['school']); ?>
                                    <br>上課時間:<?php echo ($post['class_sit']); ?>
                                    <br>學分數:<?php echo ($post['class_num']); ?>學分</p>
                            </blockquote><?php endforeach; endif; else: echo "" ;endif; ?>

                    </div>
                </div>

            </div>
            <div id="right">
                <div class="classtitle"><?php echo ($class); ?></div>
                <div class='svgbox'>
                    <svg class="rsvg">
                        <?php if(is_array($ar)): $xk = 0; $__LIST__ = $ar;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$x): $mod = ($xk % 2 );++$xk; if(is_array($x)): $yk = 0; $__LIST__ = $x;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$y): $mod = ($yk % 2 );++$yk; if(substr($y,0,1) == '['): ?><g class='nclass' id='<?php echo ($yk-1); ?>x<?php echo ($xk-1); ?>'>
                                        <rect x='2' y='2' rx='2' ry='2' width='10' height='10' class='rowclass' style='stroke-width:1;stroke:#cecece;opacity:0.8;fill:<?php echo ($ac[$xk-1][$yk-1]); ?>'
                                        />
                                        <text fill='black' class='textclass' style='fill:#f5f5f5;'><?php echo ($y); ?></text>
                                        <?php else: ?>
                                        <g class='cclass' id='<?php echo ($yk-1); ?>x<?php echo ($xk-1); ?>'>
                                            <rect x='2' y='2' width='10' height='10' class='rowclass' style='stroke-width:1;stroke:#cecece;opacity:0.8;fill:#fff;' />
                                            <text x='0' fill='black' class='textclass' style='textBaseline:middle;textAlign:center;fill:#212121;'><?php echo ($y); ?></text><?php endif; ?>

                                </g><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>

                        <text x="0" y="15" fill="#363F45" class='logo'>聯大輔助選課系統:https://nuuclass.hhk.one/index.php/</text>
                    </svg>
                    <div id="svgload">
                        <img src="/Public/Studentaid/images/rolling.svg" />
                    </div>
                </div>
            </div>
        </div>
        <div class="second_box" id="tagpic">
            <div class="pagetitle">製作圖片</div><br>
            <div type="button" class="createpic" style="color:#000;">製作</div><br>
            <canvas id="canvasId"></canvas>
        </div>
        <div class="normal_box" id="taglist">
            <div class="pagetitle">列出清單</div>
            <div class="message">*將開課代號輸入學校的選課系統即可</div><br>
            <div class="postlist">
                <table class=tab>
                    <tr>
                        <td BGColor='#ffffff'>班級</td>
                        <td BGColor='#ffffff'>選/必修</td>
                        <td BGColor='#ffffff'>課程</td>
                        <td BGColor='#616161' style='color:#fff'>開課課號</td>

                        <td BGColor='#ffffff'>老師</td>
                        <td BGColor='#ffffff'>學分數</td>
                        <td BGColor='#ffffff'>評價</td>
                    </tr>
                    <?php if(is_array($myclass)): $k = 0; $__LIST__ = $myclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post): $mod = ($k % 2 );++$k;?><tr>
                            <td BGColor='#ffffff'><?php echo ($post['class']); ?></td>
                            <td BGColor='#ffffff'><?php echo ($post['obligatory']); ?></td>
                            <td BGColor='#ffffff'><?php echo ($post['class_name']); ?></td>
                            <td BGColor='#616161' style='color:#fff'><?php echo ($post['class_number']); ?></td>
                            <td BGColor='#ffffff'><?php echo ($post['teacher']); ?></td>
                            <td BGColor='#ffffff'><?php echo ($post['class_num']); ?></td>
                            <td BGColor='#ffffff'><a href="https://www.dcard.tw/search?forum=nuu&query=<?php echo ($post['teacher']); ?>" target="_blank"><input type="button" value="評價" class="loginbu" /></a></td>

                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            </table>
        </div>

        <div id="fb" id="talk"></div>
    </div>
    <?php if($_SESSION['id']== ''): ?><div class="normal_box" id="tagacc" style="text-align:center;position: relative;">
            <div class="pagetitle">綁定帳號</div><br>
            <div class="message">*登入學校帳號(學號)、密碼(身分證字號)即可，我們不會保留您的個資</div><br> 帳號
            <input type="text" class="" id="account" /><br><br> 密碼
            <input type="password" id="password" /><br><br>
            <input type="button" class="login loginbu" value="登入" />
            <div id="logload">
                <img src="/Public/Studentaid/images/rolling.svg" />
            </div>
        </div><?php endif; ?>
    </div>
    <!-- footer start -->
<footer _height="none">
</footer>
<!--主背景框END-->
</body>
<link rel="stylesheet" href="/Public/Studentaid/css/jquery-ui.css">

<script src="/Public/Studentaid/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="/Public/Studentaid/js/jquery-ui.js"></script>
<script src="/Public/Studentaid/js/facebook.js"></script>
<!-- 輪播圖片控制設定 -->
<script type="text/javascript" src="/Public/Studentaid/js/script.js"></script>
<!-- 頁面高度滿版  --> 
<!-- 回到頁頂  -->
<script>
	
	var styles = 'background: #f00; color: #fff; padding: 0 100px; font-size: 30px;';  
	
	console.log("%c" +"放下你萬惡的右手(´;ω;`)", styles);
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.5&appId=431779660362216";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));		
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91663402-3', 'auto');
  ga('send', 'pageview');
   if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) { 
   	alert("因為課表數據多，所以沒有設計手機版的介面，請同學還是用電腦來瀏覽體驗會最佳")
   }
</script>
</html>


    <script src="/Public/Studentaid/js/canvg.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {

            selectclass();
            var bg = ["#444444", "#A20055", "#8C0044", "#AA0000", "#880000", "#C63300", "#A42D00", "#CC6600",
                "#BB5500", "#AA7700", "#886600", "#BBBB00", "#888800", "#88AA00", "#668800", "#55AA00",
                "#227700", "#00AA00", "#008800", "#00AA55", "#008844", "#00AA88", "#008866", "#00AAAA",
                "#008888", "#0088A8", "#007799", "#003C9D", "#003377", "#0000AA", "#000088", "#2200AA",
                "#220088", "#4400B3", "#3A0088", "#66009D", "#550088", "#7A0099", "#660077", "#990099",
                "#770077"
            ];
            //隨機顏色
            function randcolor() {
                var x = parseInt(Math.random() * (bg.length - 1));
                return bg[x];
            }

            function updateclass() {
                var myhtml = $.ajax({
                    type: "POST", //傳值方式有分 post & get 
                    url: '<?php echo U("Work/uplist");?>',
                    data: {
                        name: $('.listbu').val()
                    }, //將表單的值設定好
                    async: false
                }).responseText;
                $('.postlist').html(
                    "<table class=tab><tr><td BGColor='#ffffff'>班級</td><td BGColor='#ffffff'>選/必修</td><td BGColor='#ffffff'>課程</td><td BGColor='#616161' style='color:#fff'>開課課號</td><td BGColor='#ffffff'>老師</td><td BGColor='#ffffff'>學分數</td><td BGColor='#ffffff'>評價</td></tr>" +
                    myhtml + "</table>");

            }
            var picid = parseInt(Math.random() * 100000);
            var svgw = parseInt($('.rsvg').css("width")) / 7;
            var svgh = parseInt($('.rsvg').css("height")) / 16;
            var mar = 20;
            var nowclass = "",nowid="";
            for (var i = 0; i <= 8; i++) {
                for (var j = 0; j <= 14; j++) {

                    $('#' + i + 'x' + j).attr('transform', 'translate(' + (mar + (i) * svgw) + ',' + (mar + (j) *
                        svgh) + ')');
                    $('#' + i + 'x' + j).children('rect').attr('width', svgw).attr('height', svgh);
                    $('#' + i + 'x' + j).children('text').attr('x', 10).attr('y', svgh / 2);
                }
            }
            $('.logo').attr('x', svgw / 2);
            //刪除課表
            $('#B').on('click', '.sc', function () {
                $("#svgload").css("display", "block");
                var myway = $(this);
                $.ajax({
                    type: "POST",
                    url: '<?php echo U("Work/sit_post");?>',
                    data: {
                        name: $(this).attr("id"),
                        ob: $('.chose').val()
                    },
                    success: function (res) {

                        var str = res.split(" ");
                        for (i = 1; i < str.length - 1; i++) {
                            $("#" + str[i]).children('text').text(" ");
                            $("#" + str[i]).attr("class", "cclass");
                            $("#" + str[i]).children('rect').css("fill", "#fff");

                        }
                        $("#num").text(parseInt($("#num").text()) - str[1]);
                        if (parseInt($("#num").text()) < 0) $("#num").text('0');
                        myway.css("border-left", "5px solid white");
                        $("#A").append(myway);
                        $('.listbu').attr("value",
                            $('.listbu').attr("value").replace(myway.attr("id") + "@",
                                ""));
                        updateclass();
                        $("#svgload").css("display", "none");
                    }
                });

            });
            //新增課表
            $('#A').on('click', '.sc', function () {
                var myway = $(this);
                $("#svgload").css("display", "block");
                if (nowclass != "" && $('.listbu').attr("value").indexOf(nowid)=='-1' && nowid!="" ) {
                    var str = nowclass.split(" ");
                    nowclass = "";
                    var rcolor = randcolor();

                    var ch = 1;
                    var te = "";

                    for (i = 2; i < str.length - 1; i++) {

                        te = $("#" + str[i]).children('text').text().toString();

                        if (te.toString() != '-' && te.toString() != str[0].toString()) ch = 0;
                    }

                    if (ch == 1) {

                        var te = myway.text().split(" ");

                        for (i = 2; i < str.length; i++) {
                            $("#" + str[i]).children('rect').css("fill", rcolor);
                            $("#" + str[i]).children('text').text(str[0]);
                            $("#" + str[i]).attr("class", "nclass");
                            $("#" + str[i]).children('rect').css("fill", rcolor);
                        }
                        $("#num").text(parseInt($("#num").text()) + parseInt(str[1]));
                        myway.children(".nonep").css("display", "none");
                        myway.css("border-left", "5px solid " + rcolor);
                        $('.listbu').attr("value", $('.listbu').attr("value") + myway.attr("id") + "@");
                        $("#B").prepend(myway);
                        updateclass();

                    } else {

                        $("#0x0").children('text').text("x");
                        $(this).css("background", "red");
                    }
                }
                $("#svgload").css("display", "none");

            });
            $("#A").on("hover", ".sc", function (e) {

                if ($("#svgload").css("display") != "block") {

                var myway = $(this);

                $(".sc").css("background", "");
                if (e.type == "mouseenter") {

                        if (nowclass != "" && $('.listbu').attr("value").indexOf(nowid)=='-1' && nowid!="" && nowid!=myway.attr("id")) {

                            var str = nowclass.split(" ");
                            nowclass = "";
                            nowid="";
                            for (i = 2; i < str.length - 1; i++) {
                                if ($("#" + str[i]).children('text').text() == str[0]) {
                                    $("#" + str[i]).children('text').text(" ");
                                    $("#" + str[i]).children('rect').css("fill", "#fff");
                                }
                            }
                        }

                        $("#svgload").css("display", "block");
                        nowid=$(this).attr("id");
                        var myhtml = $.ajax({
                            type: "POST",
                            url: '<?php echo U("Work/sit_post");?>',
                            data: {
                                name: $(this).attr("id"),
                                ob: $('.chose').val()
                            },
                            success: function (res) {
                                nowclass = res;
                                var str = res.split(" ");
                                var ch = "";
                                var link = "";
                                for (i = 2; i < str.length - 1; i++) {
                                    ch = ch + $("#" + str[i]).text();
                                    link = link + str[i] + " ";
                                }
                                ch = ch.trim();
                                if (ch.length < (str.length - 2)) {
                                    for (i = 2; i < str.length - 1; i++) {

                                        $("#" + str[i]).children('text').text(str[0]).css(
                                            "fill", "#fff");
                                        $("#" + str[i]).children('rect').css("fill",
                                            "#2856B6");
                                    }
                                    myway.css("background", "#2856B6");
                                } else {
                                    $("#0x0").children('text').text("x");
                                    myway.css("background", "red");
                                }
                                myway.children(".nonep").css("display", "inline");
                                $("#svgload").css("display", "none");
                            },
                        });
                    
                } else {

                    if ($("#0x0").text().trim() == "" && nowid!="") {
                        $(this).css("background", "");
                        $("#0x0").children('text').text("");
                        var str = nowclass.split(" ");
                        nowclass = "";
                        nowid="";
                        for (i = 2; i < str.length - 1; i++) {
                            if ($("#" + str[i]).children('text').text() == str[0]) {
                                $("#" + str[i]).children('text').text(" ");
                                $("#" + str[i]).children('rect').css("fill", "#fff");
                            }
                        }

                    } else {

                        $("#0x0").children('text').text("");
                    }

                    $(this).children(".nonep").css("display", "none");
                }
            }
            });
            $("#B").on("hover", ".sc", function (e) {
                if (e.type == "mouseenter") {

                    $(this).css("background", "#2856B6");
                    $(this).children(".nonep").css("display", "inline");
                } else {

                    $(this).css("background", "");

                    $(this).children(".nonep").css("display", "none");
                }
            });
            $("svg").on("hover", ".cclass", function (e) {
                if (e.type == "mouseenter") {
                    $(this).children('rect').css("fill", "#B2B2FF");

                } else {

                    $(this).children('rect').css("fill", "#fff");
                    $(this).children('text').css("fill", "#000");
                }

            });
            $("svg").on("click", ".cclass", function () {
                $("#A .sc").remove();
                var myhtml = $.ajax({
                    type: "POST", //傳值方式有分 post & get 
                    url: '<?php echo U("Work/name_post");?>',
                    data: {
                        id: $(this).attr("id"),
                        classname: $('.classtitle').text(),
                        ob: $('.chose').val(),
                        search: $('.search').val()
                    }, //將表單的值設定好
                    async: false
                }).responseText;
                $("#A").html("");
                $("#A").append(myhtml);
            });
            $('.listbu').click(function () {

                self.location.href = "listpost.php?data=" + $(this).attr("value") + "&department=" + $(
                    ".classtitle").text();
            });

            $('.chose').change(function () {
                selectclass();

            });

            function selectclass() {

                $("#A .sc").remove();
                var myhtml = $.ajax({
                    type: "POST", //傳值方式有分 post & get 
                    url: '<?php echo U("Work/name_post");?>',
                    data: {
                        id: "0x0",
                        classname: $('.classtitle').text(),
                        ob: $('.chose').val(),
                        search: $('.search').val()
                    }, //將表單的值設定好
                    async: false
                }).responseText;

                $("#A").html("");
                $("#A").append(myhtml);
            }
            $('.back').click(function () {
                self.location.href = "index.php";
            });
            $('#canclass').click(function () {
                $('#canform').css("display", "inline");
                $('#myform').css("display", "none");
            });
            $('#myclass').click(function () {
                $('#canform').css("display", "none");
                $('#myform').css("display", "inline");
            });
            $('.searchbu').click(function () {
                selectclass();
            });

            $('.take').click(function () {
                $('html,body').animate({
                    scrollTop: $('#' + $(this).attr('href')).offset().top
                }, 1000);

            });
            $('.takeshare').click(function () {
                $('#canvasId').attr('width', $('.rsvg').css("width")).attr('height', $('.rsvg').css(
                    "height"));
                var svdom = $('.svgbox').html().replace(/>\s+/g, ">").replace(/\s+</g, "<").replace(
                    /<canvas.+/g, "");
                svdom = svdom.replace("<tag></tag>", "<text x=0 y=15 fill=red>I love SVG!</text>");

                canvasId = document.getElementById('canvasId');
                canvg(canvasId, svdom);
            });
            $('.createpic').click(function () {
                var svdom = $('.svgbox').html().replace(/>\s+/g, ">").replace(/\s+</g, "<").replace(
                    /<canvas.+/g, "").replace('[必]', "").replace('[選]', "");
                $('#canvasId').attr('width', $('.rsvg').width()).attr('height', $('.rsvg').height());
                canvasId = document.getElementById('canvasId');
                canvg(canvasId, svdom);
            });
            $('.search').keypress(function (e) {
                code = (e.keyCode ? e.keyCode : e.which);
                if (code == 13) {
                    selectclass();
                }
            });

            $("#account").keypress(function (event) {

                if (event.keyCode == 13) {
                    checkaccount();
                }
            })
            $("#password").keypress(function (event) {

                if (event.keyCode == 13) {
                    checkaccount();
                }
            })

            function checkaccount() {

                $('#logload').css('display', 'block');
                $.ajax({
                    type: "POST",
                    url: '<?php echo U("Work/check");?>',
                    data: {
                        UID: $('#account').val(),
                        pass: $('#password').val(),
                        content: $('.listbu').attr('value'),
                        cl: $('.classtitle').html()
                    },
                    success: function (res) {
                        if (res.trim() == '2') {

                            alert('以綁定過，幫您儲存資料');
                            window.location.reload();


                        } else if (res.trim() == '1') {
                            alert('綁定成功');
                            window.location.reload();

                        } else {
                            alert('綁定失敗，請確認帳號密碼是否有誤');
                        }

                        $('#logload').css('display', 'none');
                    },
                    error:function(res){
                        console.log(res);
                    }
                });
            }

            $('.login').click(function () {
                checkaccount();

            })
            $('.save').click(function () {
                var myhtml = $.ajax({
                    type: "POST", //傳值方式有分 post & get 
                    url: '<?php echo U("Work/save");?>',
                    data: {
                        content: $('.listbu').attr('value')
                    }, //將表單的值設定好
                    async: false
                }).responseText;
                alert('存檔成功');
            });
        });
        show_fb_talks('fb', $(window).width(), 10, 'https://nuuclass.hhk.one/index.php/');
    </script>