<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href=<?php echo $CLIENT_PATH?> class="navbar-brand">Blog Site</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=<?php echo $CLIENT_PATH?>>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo $CLIENT_PATH."/about"?>>About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!">My Posts</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        $http_response_header
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>