<?php
use zbsoft\helpers\Url;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= Url::to("/favicon.ico") ?>">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= Url::to("/assets/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= Url::to("/css/search.min.css") ?>" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row-offcanvas row-offcanvas-left">
            <div class="list-nav col-sm-1">
                <div class="list-group sidebar-offcanvas" id="sidebar-nav">
                    <a data-href="http://www.baidu.com" class="list-group-item active">百度</a>
                    <a data-href="http://global.bing.com/?FORM=HPCNEN&setmkt=en-us&setlang=en-us" class="list-group-item">Bing</a>
                    <a data-href="http://cn.bing.com/" class="list-group-item">必应</a>
                    <a data-href="http://weixin.sogou.com/?p=73141200&kw=" class="list-group-item">微信搜狗</a>
                    <a data-href="" class="list-group-item">&nbsp;</a>
                    <a data-href="" class="list-group-item">&nbsp;</a>
                    <a data-href="" class="list-group-item">&nbsp;</a>
                    <a data-href="" class="list-group-item">&nbsp;</a>
                    <a data-href="" class="list-group-item">&nbsp;</a>
                    <a data-href="" class="list-group-item">&nbsp;</a>
                    <a data-href="" class="list-group-item">&nbsp;</a>
                    <a data-href="" class="list-group-item">&nbsp;</a>
                    <a data-href="" class="list-group-item">&nbsp;</a>
                    <a data-href="" class="list-group-item">&nbsp;</a>
                </div>
                <div class="nav-toggler" data-toggle="offcanvas">
                    <span class="glyphicon glyphicon-chevron-right">&nbsp;</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-11 nav-content">
                <iframe id="nav-iframe" src="http://www.baidu.com" height="100%" width="100%" frameborder="0"></iframe>
            </div><!--/span-->
        </div><!--/row-->
    </div><!--/.container-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?=Url::to("/assets/bootstrap/js/vendor/jquery.min.js")?>"><\/script>')</script>
    <script src="<?= Url::to("/assets/bootstrap/js/bootstrap.min.js") ?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?= Url::to("/assets/bootstrap/assets/js/ie10-viewport-bug-workaround.js") ?>"></script>
    <script src="<?= Url::to("/js/search.min.js") ?>"></script>
<!--    <script src="--><?//= Url::to("/src/js/search.js") ?><!--"></script>-->
</body>
</html>