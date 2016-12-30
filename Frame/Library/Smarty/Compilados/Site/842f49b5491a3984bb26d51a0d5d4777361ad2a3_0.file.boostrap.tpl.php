<?php
/* Smarty version 3.1.30, created on 2016-12-26 01:42:11
  from "C:\xampp\htdocs\FramePHP-Simples\App\Views\Site\boostrap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58606763edd762_88345403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '842f49b5491a3984bb26d51a0d5d4777361ad2a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FramePHP-Simples\\App\\Views\\Site\\boostrap.tpl',
      1 => 1482692664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58606763edd762_88345403 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container-fluid">
    <div class="row">
        <div class="item">
            <img src="<?php echo @constant('URL_IMG');?>
/548306.jpg" class="img-responsive img-heightFull">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-xs-12">
            <a href="#" class="thumbnail">
                <img src="<?php echo @constant('URL_IMG');?>
/548306.jpg" alt="Imagem">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-12">
            <a href="#" class="thumbnail">
                <img src="<?php echo @constant('URL_IMG');?>
/548306.jpg" alt="Imagem">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-12">
            <a href="#" class="thumbnail">
                <img src="<?php echo @constant('URL_IMG');?>
/548306.jpg" alt="Imagem">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-12">
            <a href="#" class="thumbnail">
                <img src="<?php echo @constant('URL_IMG');?>
/548306.jpg" alt="Imagem">
            </a>
        </div>
    </div>
    <div class="row">
        <h1>Cards</h1>
        <div class="col-xs-12 col-md-4 col-lg-6">
            <div class="thumbnail">
                <img src="<?php echo @constant('URL_IMG');?>
/548306.jpg" alt="Imagem">
                <div class="caption text-center">
                    EXAMPLE
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <h1>Panel</h1>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">TÍTULO DO PANEL</h3>
            </div>
            <div class="panel-body">
                ISSO É O TEXTO DO PANEL HAHA
            </div>
            <div class="panel-footer">
                rodapé não fica muito legal..
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-body">
                ISSO É O TEXTO DO PANEL HAHA
            </div>
            <div class="panel-footer">
                rodapé não fica muito legal..
            </div>
        </div>
    </div>
    <div class="row">
        <h1>List</h1>
        <ul class="list-group">
            <li class="list-group-item">Text</li>
            <li class="list-group-item">Text 1</li>
            <li class="list-group-item">Text 2</li>
        </ul>
    </div>
    <div class="row">
        <ul class="list-group">
            <li class="list-group-item list-group-item-danger">
                <span class="badge">13</span>
                Text
            </li>
            <li class="list-group-item">Text 1</li>
            <li class="list-group-item">Text 2</li>
        </ul>
    </div>
    <div class="row">
        <div class="list-group">
            <a href="#" class="list-group-item active">Testando</a>
            <a href="#" class="list-group-item">Testando</a>
            <a href="#" class="list-group-item">Testando</a>
        </div>
    </div>


    <div class="row">
        <h1>Tabs</h1>
        <ul class="nav nav-tabs">
            <li><a href="#">Images</a></li>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Images</a></li>
            <li><a href="#">Images</a></li>
            <li><a href="#">Images</a></li>
        </ul>
        <ul class="nav nav-pills">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Images</a></li>
            <li><a href="#">Images</a></li>
        </ul>
        <ul class="nav nav-pills nav-stacked">
            <li><a href="#">Images</a></li>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Images</a></li>
            <li><a href="#">Images</a></li>
        </ul>
    </div>
    <div class="row">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab" aria-controls="home">Home</a></li>
            <li><a href="#image" data-toggle="tab" aria-controls="image">Image</a></li>
            <li><a href="#blog" data-toggle="tab" aria-controls="blog">Blog</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                TESTANDO
            </div>
            <div role="tabpanel" class="tab-pane" id="image">
                TESTANDO image
            </div>
            <div role="tabpanel" class="tab-pane" id="blog">
                TESTANDO blog
            </div>
        </div>
    </div>
    <div class="row">
        <h1>Modal</h1>
        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modalExample">Open Modal</button>
        <div id="modalExample" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Modal Title</h4>
                    </div>
                    <div class="modal-body">
                        CORPO DO MODAL
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <h1>Alert</h1>
        <div class="alert alert-success">
            SUCESSO !!
        </div>
    </div>

    <div class="row">
        <h1>Medias</h1>
        <div class="media">
            <div class="media-left media-middle">
                <a href="#">
                    <img src="<?php echo @constant('URL_IMG');?>
/548306.jpg" alt="Imagem" style="width:64 px; height: 64px;">
                </a>
            </div>
            <div class="media-body">
               <h4 class="media-heading">
                    Título Media
               </h4>
                Example title huahuauhahahua
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-lg-12">
        <nav>
            <ul class="pagination">
                <li><a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="disabled"><a href="#">4</a></li>
                <li><a href="#" aria-label="Next" title="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
        <nav>
            <ul class="pagination pagination-sm">
                <li><a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
        <nav>
            <ul class="pagination pagination-lg">
                <li><a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-xs-10 col-md-10">
            <h1>Icons</h1>
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-education" aria-hidden="true" style="font-size: 40px; color:#2e6da4"></span>
            <span class="glyphicon glyphicon-user text-danger" aria-hidden="true" style="font-size: 40px;"></span>
            <button class="btn btn-info glyphicon glyphicon-camera btn-xs" aria-hidden="true"></button>
        </div>
        <div class="col-lg-10 col-xs-10 col-md-10">
            <div class="row">
                <h1>Basic</h1>
                <form>
                    <div class="form-group">
                        <label>Email Adress:</label>
                        <input type="email" class="form-control" placeholder="Email Adress">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Check me out
                        </label>
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
            <div class="row">
                <h1>Inline</h1>
                <form class="form-inline">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
            <div class="row">
                <h1>Buttons</h1>
                <button class="btn btn-default" type="submit">Default</button>
                <button class="btn btn-primary" type="submit">Primary</button>
                <button class="btn btn-success" type="submit">Sucess</button>
                <button class="btn btn-danger" type="submit">Danger</button>
                <button class="btn btn-info" type="submit">Info</button>
                <button class="btn btn-warning" type="submit">Warning</button>
            </div>
            <div>
                <h1>Sizes</h1>
                <button class="btn btn-success btn-lg" type="submit">Larger Button</button>
                <button class="btn btn-success" type="submit">Normal Button</button>
                <button class="btn btn-success btn-sm" type="submit">Small Button</button>
                <button class="btn btn-success btn-xs" type="submit">Very Small Button</button>
            </div>
            <div>
                <h1>Block</h1>
                <button class="btn btn-success btn-lg btn-block" type="submit">Block level Button</button>
            </div>
        </div>
        <div class="col-lg-2 col-xs-2 col-md-2">TESTANDO 1</div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-md-12">
            <h1>Image Responsive</h1>
            <img src="<?php echo @constant('URL_IMG');?>
/548306.jpg" class="img-responsive center-block">
            <h1>Image shape</h1>
            <img src="<?php echo @constant('URL_IMG');?>
/548306.jpg" class="img-thumbnail img-responsive center-block">
        </div>
    </div>
</div>

<nav class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuCollapse">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">PORTO CONTÁBIL</a>
        </div>

        <div class="collapse navbar-collapse" id="menuCollapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropup">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Services</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php }
}
