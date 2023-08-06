<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Yayasan Pulih Admin <sup><small>alpha 0.1</small></sup></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= route_to("dashboard.home.index") ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= route_to("dashboard.articles.index") ?>">Articles</a>
                </li>
            </ul>
            <a href="<?= route_to("auth.logout") ?>" class="btn btn-outline-danger btn-sm">
                Log Out
            </a>
        </div>
    </div>
</nav>