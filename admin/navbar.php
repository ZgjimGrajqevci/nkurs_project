<header>
    <div class="container">
        <nav class="navbar navbar-expand-md">
            <a href="index.php" class="navbar-brand">
                <img id="navbarLogo" src="assets/images/nLogo.png">
                <spam>nkurs<sup>dashboard</sup></spam>
            </a>
            <button id="collapseBtn" class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                    <span class="navbar-toggler-icon">
                       <svg version="1.1" id="Layer_1" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 448 512" xml:space="preserve">
                            <g>
                                <path fill="currentColor" d="M423,135.9H25c-13.8,0-25-11.2-25-25V85.1c0-13.8,11.2-25,25-25h398c13.8,0,25,11.2,25,25v25.8
                                    C448,124.7,436.8,135.9,423,135.9z"/>
                                <path fill="currentColor" d="M423,293.9H25c-13.8,0-25-11.2-25-25v-25.8c0-13.8,11.2-25,25-25h398c13.8,0,25,11.2,25,25v25.8
                                    C448,282.7,436.8,293.9,423,293.9z"/>
                                <path fill="currentColor" d="M423,451.9H25c-13.8,0-25-11.2-25-25v-25.8c0-13.8,11.2-25,25-25h398c13.8,0,25,11.2,25,25v25.8
                                    C448,440.7,436.8,451.9,423,451.9z"/>
                            </g>
                        </svg>
                    </span>
            </button>
            <div class="collapse navbar-collapse" id="collapse_target">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.php">Users</a>
                    </li>
                    <div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $_SESSION['username'];?>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-danger" href="logout.php">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
    </div>
</header>
