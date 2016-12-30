<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuCollapse">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="menuCollapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#home">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">Sobre</a>
                </li>
                <li>
                    <a class="page-scroll" href="#habilidades">Habilidades</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contato">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    var $doc = $('html, body');
    $('a').click(function() {
        $doc.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        return false;
    });
</script>