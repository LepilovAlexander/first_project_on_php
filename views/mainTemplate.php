<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?=$title?></title>
    <meta name="description" content="<?=$descr?>">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/main.css" />
</head>
<body>

    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">WATCH.COM.UA</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li <?if($active == "index"):?> class="active"<?endif?>?><a href="/">Главная</a></li>
                    <li <?if($active == "about"):?> class="active"<?endif?>?><a href="/about">О магазине</a></li>
                    <li <?if($active == "news"):?> class="active"<?endif?>?><a href="/news">Новости</a></li>
                    <li <?if($active == "production"):?> class="active"<?endif?>?><a href="/production">Продукция</a></li>
                    <li <?if($active == "contacts"):?> class="active"<?endif?>?><a href="/contacts">Контакты</a></li>
                </ul>
                <span style="float: right; color: #fff; margin-top: 0.8%">
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Войти</button>  
                </span>
            </div><!-- /.nav-collapse -->
            
        </div><!-- /.container -->
    </div>

    <div class="container">
       <? 
           include $contentView; 
       ?>

        <hr />
        <footer>
            <p>&copy; Company 2014</p>
        </footer>
    </div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Авторизация</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <a href="/registration" class="btn btn-success">Зарегестрироваться</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary">Войти</button>
      </div>
    </div>
  </div>
</div> <!-- End Modal -->

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>