<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="/share/Public/Home/css/new_work.css" rel="stylesheet" media="all" />
    <title>new_work</title>
</head>

<script type="text/javascript" language="javascript">
        function c_color(i) {
            var c = document.getElementById("c" + i);
            c.style.color = "red";
        }

        function c_back(i) {
            var c = document.getElementById("c" + i);
            c.style.color = "#aaa";
        }

    </script>

    <script type="text/javascript">

        function show(i) {


            var layer1 = document.getElementById("layer1");
            layer1.style.display = "none";
            var img1 = document.getElementById("img1");
            img1.style.display = "none";
            var title = document.getElementById("title1");
            title1.style.color = "#8e8e8e";


            var layer2 = document.getElementById("layer2");
            layer2.style.display = "none";
            var img2 = document.getElementById("img2");
            img2.style.display = "none";
            var title = document.getElementById("title2");
            title2.style.color = "#8e8e8e";


            var layer3 = document.getElementById("layer3");
            layer3.style.display = "none";
            var img3 = document.getElementById("img3");
            img3.style.display = "none";
            var title = document.getElementById("title3");
            title3.style.color = "#8e8e8e";


            var layer4 = document.getElementById("layer4");
            layer4.style.display = "none";
            var img4 = document.getElementById("img4");
            img4.style.display = "none";
            var title = document.getElementById("title4");
            title4.style.color = "#8e8e8e";

            var layer = document.getElementById("layer" + i);
            $("#layer"+i).slideDown().fadeIn("slow");
            var title = document.getElementById("title" + i);
            title.style.color = "#e52938";

            var img = document.getElementById("img" + i);
            img.style.display = "block";
        }

        function like_show(i)
        {
            var like = document.getElementById("like" + i);
            like.style.display = "block";
        }

        function like_back(i)
        {
            var like = document.getElementById("like" + i);
            like.style.display = "none";
        }
    </script>



<body>
  <form id="form1" runat="server">
        <div id="container" class="container-min-width" style="display: block;">

                    <div class="work">
                        <a href="work.html" target="_top"><div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(1)" onmouseout="like_back(1)">
                            <div id="like1" class="likepin" style="display:none">
                                <div class="like_1"></div>
                                <div class="like_2"></div>
                                <div class="like_3"></div>

                            </div>

                        </div></a>
                        <div class="work_title">
                            <div class="title_1">
                                <a href="work.html" target="_top" style="text-decoration: none;color:#000"><h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h></a>
                            </div>
                            <div class="title_2">
                                <h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
                            </div>
                            <div class="title_3">
                                <img src="/share/Public/Home/image/index/pint.png" height="13" width="13"/>
                                <h style="font-size:12px;color:#808080;">111</h>
                                <img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;"/>
                                <h style="font-size:12px;color:#808080;">234</h>
                            </div>
                        </div>
                        <div class="work_p">
                            <a href="user.html" target="_top" style="text-decoration: none;">
                                <div class="p_1">
                                    <img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
                                </div>
                                <div class="p_2">
                                    <h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
                                    <h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
                                </div>
                            </a>
                            <a href="i_illustration.html" target="_top" style="text-decoration: none;">
                                <div class="p_3">
                                    <h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="work">
                     <a href="work.html" target="_top"><div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(2)" onmouseout="like_back(2)">
                            <div id="like2" class="likepin" style="display:none">
                                <div class="like_1"></div>
                                <div class="like_2"></div>
                                <div class="like_3"></div>

                            </div>

                        </div></a>
                        <div class="work_title">
                            <div class="title_1">
                                <a href="work.html" target="_top" style="text-decoration: none;color:#000"><h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h></a>
                            </div>
                            <div class="title_2">
                                <h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
                            </div>
                            <div class="title_3">
                                <img src="/share/Public/Home/image/index/pint.png" height="13" width="13"/>
                                <h style="font-size:12px;color:#808080;">111</h>
                                <img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;"/>
                                <h style="font-size:12px;color:#808080;">234</h>
                            </div>
                        </div>
                        <div class="work_p">
                            <a href="user.html" target="_top" style="text-decoration: none;">
                                <div class="p_1">
                                    <img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
                                </div>
                                <div class="p_2">
                                    <h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
                                    <h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
                                </div>
                            </a>
                            <a href="i_illustration.html" target="_top" style="text-decoration: none;">
                                <div class="p_3">
                                    <h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="work">
                     <a href=""><div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(3)" onmouseout="like_back(3)">
                            <div id="like3" class="likepin" style="display:none">
                                <div class="like_1"></div>
                                <div class="like_2"></div>
                                <div class="like_3"></div>
                            </div>

                        </div></a>
                        <div class="work_title">
                            <div class="title_1">
                                <a href="" style="text-decoration: none;color:#000"><h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h></a>
                            </div>
                            <div class="title_2">
                                <h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
                            </div>
                            <div class="title_3">
                                <img src="/share/Public/Home/image/index/pint.png" height="13" width="13"/>
                                <h style="font-size:12px;color:#808080;">111</h>
                                <img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;"/>
                                <h style="font-size:12px;color:#808080;">234</h>
                            </div>
                        </div>
                        <div class="work_p">
                            <a href="" style="text-decoration: none;">
                                <div class="p_1">
                                    <img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
                                </div>
                                <div class="p_2">
                                    <h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
                                    <h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
                                </div>
                            </a>
                            <a href="" style="text-decoration: none;">
                                <div class="p_3">
                                    <h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
                                </div>
                            </a>

                        </div>
                    </div>


                     <div class="work">
                     <a href=""><div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(4)" onmouseout="like_back(4)">
                            <div id="like4" class="likepin" style="display:none">
                                <div class="like_1"></div>
                                <div class="like_2"></div>
                                <div class="like_3"></div>
                            </div>

                        </div></a>
                        <div class="work_title">
                            <div class="title_1">
                                <a href="" style="text-decoration: none;color:#000"><h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h></a>
                            </div>
                            <div class="title_2">
                                <h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
                            </div>
                            <div class="title_3">
                                <img src="/share/Public/Home/image/index/pint.png" height="13" width="13"/>
                                <h style="font-size:12px;color:#808080;">111</h>
                                <img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;"/>
                                <h style="font-size:12px;color:#808080;">234</h>
                            </div>
                        </div>
                        <div class="work_p">
                            <a href="" style="text-decoration: none;">
                                <div class="p_1">
                                    <img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
                                </div>
                                <div class="p_2">
                                    <h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
                                    <h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
                                </div>
                            </a>
                            <a href="" style="text-decoration: none;">
                                <div class="p_3">
                                    <h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
                                </div>
                            </a>

                        </div>
                    </div>

                     <div class="work">
                     <a href=""><div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(5)" onmouseout="like_back(5)">
                            <div id="like5" class="likepin" style="display:none">
                                  <div class="like_1"></div>
                                <div class="like_2"></div>
                                <div class="like_3"></div>
                            </div>

                        </div></a>
                        <div class="work_title">
                            <div class="title_1">
                                <a href="" style="text-decoration: none;color:#000"><h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h></a>
                            </div>
                            <div class="title_2">
                                <h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
                            </div>
                            <div class="title_3">
                                <img src="/share/Public/Home/image/index/pint.png" height="13" width="13"/>
                                <h style="font-size:12px;color:#808080;">111</h>
                                <img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;"/>
                                <h style="font-size:12px;color:#808080;">234</h>
                            </div>
                        </div>
                        <div class="work_p">
                            <a href="" style="text-decoration: none;">
                                <div class="p_1">
                                    <img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
                                </div>
                                <div class="p_2">
                                    <h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
                                    <h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
                                </div>
                            </a>
                            <a href="" style="text-decoration: none;">
                                <div class="p_3">
                                    <h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
                                </div>
                            </a>

                        </div>
                    </div>

                     <div class="work">
                     <a href=""><div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(6)" onmouseout="like_back(6)">
                            <div id="like6" class="likepin" style="display:none">
                                  <div class="like_1"></div>
                                <div class="like_2"></div>
                                <div class="like_3"></div>
                            </div>

                        </div></a>
                        <div class="work_title">
                            <div class="title_1">
                                <a href="" style="text-decoration: none;color:#000"><h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h></a>
                            </div>
                            <div class="title_2">
                                <h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
                            </div>
                            <div class="title_3">
                                <img src="/share/Public/Home/image/index/pint.png" height="13" width="13"/>
                                <h style="font-size:12px;color:#808080;">111</h>
                                <img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;"/>
                                <h style="font-size:12px;color:#808080;">234</h>
                            </div>
                        </div>
                        <div class="work_p">
                            <a href="" style="text-decoration: none;">
                                <div class="p_1">
                                    <img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
                                </div>
                                <div class="p_2">
                                    <h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
                                    <h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
                                </div>
                            </a>
                            <a href="" style="text-decoration: none;">
                                <div class="p_3">
                                    <h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
                                </div>
                            </a>

                        </div>
                    </div>

                     <div class="work">
                     <a href=""><div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(7)" onmouseout="like_back(7)">
                            <div id="like7" class="likepin" style="display:none">
                                    <div class="like_1"></div>
                                <div class="like_2"></div>
                                <div class="like_3"></div>
                            </div>

                        </div></a>
                        <div class="work_title">
                            <div class="title_1">
                                <a href="" style="text-decoration: none;color:#000"><h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h></a>
                            </div>
                            <div class="title_2">
                                <h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
                            </div>
                            <div class="title_3">
                                <img src="/share/Public/Home/image/index/pint.png" height="13" width="13"/>
                                <h style="font-size:12px;color:#808080;">111</h>
                                <img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;"/>
                                <h style="font-size:12px;color:#808080;">234</h>
                            </div>
                        </div>
                        <div class="work_p">
                            <a href="" style="text-decoration: none;">
                                <div class="p_1">
                                    <img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
                                </div>
                                <div class="p_2">
                                    <h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
                                    <h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
                                </div>
                            </a>
                            <a href="" style="text-decoration: none;">
                                <div class="p_3">
                                    <h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
                                </div>
                            </a>

                        </div>
                    </div>

                     <div class="work">
                     <a href=""><div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(8)" onmouseout="like_back(8)">
                            <div id="like8" class="likepin" style="display:none">
                                  <div class="like_1"></div>
                                <div class="like_2"></div>
                                <div class="like_3"></div>
                            </div>

                        </div></a>
                        <div class="work_title">
                            <div class="title_1">
                                <a href="" style="text-decoration: none;color:#000"><h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h></a>
                            </div>
                            <div class="title_2">
                                <h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
                            </div>
                            <div class="title_3">
                                <img src="/share/Public/Home/image/index/pint.png" height="13" width="13"/>
                                <h style="font-size:12px;color:#808080;">111</h>
                                <img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;"/>
                                <h style="font-size:12px;color:#808080;">234</h>
                            </div>
                        </div>
                        <div class="work_p">
                            <a href="" style="text-decoration: none;">
                                <div class="p_1">
                                    <img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
                                </div>
                                <div class="p_2">
                                    <h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
                                    <h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
                                </div>
                            </a>
                            <a href="" style="text-decoration: none;">
                                <div class="p_3">
                                    <h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
                                </div>
                            </a>

                        </div>
                    </div>

                     <div class="work">
                     <a href=""><div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(9)" onmouseout="like_back(9)">
                            <div id="like9" class="likepin" style="display:none">
                                 <div class="like_1"></div>
                                <div class="like_2"></div>
                                <div class="like_3"></div>
                            </div>

                        </div></a>
                        <div class="work_title">
                            <div class="title_1">
                                <a href="" style="text-decoration: none;color:#000"><h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h></a>
                            </div>
                            <div class="title_2">
                                <h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
                            </div>
                            <div class="title_3">
                                <img src="/share/Public/Home/image/index/pint.png" height="13" width="13"/>
                                <h style="font-size:12px;color:#808080;">111</h>
                                <img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;"/>
                                <h style="font-size:12px;color:#808080;">234</h>
                            </div>
                        </div>
                        <div class="work_p">
                            <a href="" style="text-decoration: none;">
                                <div class="p_1">
                                    <img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
                                </div>
                                <div class="p_2">
                                    <h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
                                    <h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
                                </div>
                            </a>
                            <a href="" style="text-decoration: none;">
                                <div class="p_3">
                                    <h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
                                </div>
                            </a>

                        </div>
                    </div>

        </div>
    </form>
</body>
</html>