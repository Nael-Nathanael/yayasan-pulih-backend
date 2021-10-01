<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Altha Web Control Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= route_to("dashboard.landing.index") ?>">Landing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= route_to("dashboard.industries.index") ?>">Industries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= route_to("dashboard.insights.index") ?>">Insights</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= route_to("dashboard.webinars.index") ?>">Webinars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= route_to("dashboard.services.index") ?>">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= route_to("dashboard.careers.index") ?>">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= route_to("dashboard.about.index") ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= route_to("dashboard.contact.index") ?>">Contact Us</a>
                </li>
            </ul>
            <a href="<?= route_to("auth.logout") ?>" class="btn btn-outline-danger btn-sm">
                Log Out
            </a>
        </div>
    </div>
</nav>