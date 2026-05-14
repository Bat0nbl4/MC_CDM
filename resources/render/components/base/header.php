<header class="fixed-top header p-2" id="header">
    <div class="container d-flex flex-wrap flex-row justify-content-center align-items-center gap-2">
        <a class="d-flex flex-row text-decoration-none me-md-auto logo" href="<?php echo \core\routing\Router::route("index") ?>">
            <img class="img-fluid logo-img" src="<?php echo \core\helpers\Resource::get("img/app/icon.svg") ?>">
            <span class="text-main logo-text">
                КРАЕВОЙ<br>
                ДВОРЕЦ<br>
                МОЛОДЕЖИ
            </span>
        </a>
        <ul class="nav nav-pills gap-3">
            <li class="nav-item"><a class="nav-link " href="<?php echo \core\routing\Router::route("about") ?>">О нас</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo \core\routing\Router::route("residents") ?>">Резиденты</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo \core\routing\Router::route("contacts") ?>">Контакты</a></li>
        </ul>
    </div>
</header>