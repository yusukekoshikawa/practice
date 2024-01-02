<!DOCTYPE html>
<html lang="ja">    
    <head>
        <meta charset="UTF-8">
        <!--css読み込み-->
        <link rel="stylesheet" type="text/css" href="test.css">
        <!--Jquery(CDN)読み込み-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <title>にせYahoo!</title>
    </head>
    <body>
        <div class="clsFlexBox0">
            <div class="clsFlexChildren01">
                <p class="clsTitle">やふぅ</p>
            </div>
            <div class="clsFlexChildren02">
                <p class="clsLogin"><a href="login.php">Login</a></p>
            </div>
        </div>        
        <div class="clsFlexBoxA">
            <div class="clsFlexChildrenA1">
                <div class="clsNewsTitle">LINK</div>
                <ul>
                    <ol  class="clsContents"><a href="zozo.php"><img src="./zozo.png" class="clsIcon" >ZOZOたうん行くよ</a></ol>
                    <ol  class="clsContents"><a href="katanaya.html"><img src="./katanaya.png" class="clsIcon" >ら～めん刀屋</a></ol>
                </ul>
                
            </div>
            <br><br>
            <div class="clsFlexChildrenA2">
                <div class="clsFlexBoxB">
                    <div class="clsFlexChildrenB1">
                        <div class="clsNewsTitle" id="clsNewsTitle">主要ニュース</div>
                        <div style="text-align:right;"><button style="background-color:beige">記事投稿</button></div>
                        <div width="500px" height="600px"><dialog id=editForm>

                                <div style="text-align:right;"><button style="color:red">×</button></div>
                                </br>
                                <div style="text-align:center">新規記事投稿画面</div>
                                </br>
                                <div>
                                    <div><lavel for="id">Title:</lavel></div>
                                    <input type="text" id="title" width="500px" height="50px">
                                </div>
                                <div>
                                    <div><lavel for="id">Contents:</lavel></div>
                                    <input type="text" id="contents" width="500px" height="500px">
                                </div></br>
                                <div style="text-align:right;"><button id="btnSend" onclick=senddata();>投稿</button></div>
                        </dialog></div>                        
                        <ul id="articleList"></ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    function senddata(){

        
    }

</script>