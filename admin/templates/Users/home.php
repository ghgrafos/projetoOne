<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('custom.min.css') ?>
<?= $this->Html->css('rk-style.css') ?>
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">

<div class="bs-component">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">RK-pinturas</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="users/">ADMIN-USERS <span class="sr-only">(current)</span></a></li>
                    <li><a href="template/contact.html">CONTATO</a></li>
                    <li><a href="template/rk.html">GALERIA</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CADASTRAR <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">CADASTRAR</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">User logado</a></li>
                            <li class="divider"></li>
                            <li><a href="#">ROLE</a></li>
                            <li class="divider"></li>
                            <li><a href="admin/">Dashboard</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">PESQUISAR</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">SAIR</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>


<main>


</main>


<footer class="footer-rk">
    <p class="col-md-4 mb-0 text-muted">&copy; Serviços Especializados</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
        </svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
</footer>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<?= $this->Html->script('bootstrap.min.js') ?>
<?= $this->Html->script('bootstrap.bundle.min.js') ?>
