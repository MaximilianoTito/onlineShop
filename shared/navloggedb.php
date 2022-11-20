<nav style="background: #e67700;" class="navbar">
    <ul class="nav justify-content-center">
        <button style="background: #db7200;" class="btn" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
            <svg xmlns="http://www.w3.org/2000/svg" id="Filled" viewBox="0 0 24 24" width="22" height="22">
                <path
                    d="M24,9a3,3,0,0,0-3-3H18A6,6,0,0,0,6,6H3A3,3,0,0,0,0,9V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5ZM8,6a4,4,0,0,1,8,0Z" />
            </svg>
        </button>
        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
            aria-labelledby="offcanvasBottomLabel">

            <div class="offcanvas-body small">
                <h5 class="text-center pb-4" id="offcanvasBottomLabel">
                    <span style="color: red;">
                        ⛔ Solo Administradores ⛔
                    </span>
                </h5>
                <form action="/onlineShop/functions/auth/logout.php" method="post">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-danger" name="logout">
                            <svg fill="white" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24"
                                width="22" height="22">
                                <path
                                    d="M22.829,9.172,18.95,5.293a1,1,0,0,0-1.414,1.414l3.879,3.879a2.057,2.057,0,0,1,.3.39c-.015,0-.027-.008-.042-.008h0L5.989,11a1,1,0,0,0,0,2h0l15.678-.032c.028,0,.051-.014.078-.016a2,2,0,0,1-.334.462l-3.879,3.879a1,1,0,1,0,1.414,1.414l3.879-3.879a4,4,0,0,0,0-5.656Z" />
                                <path
                                    d="M7,22H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H7A1,1,0,0,0,7,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H7a1,1,0,0,0,0-2Z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <li class="nav-item">
            <a class="nav-link text-light" href="/onlineShop/views/auth/logged.php">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" id="Filled" viewBox="0 0 24 24" width="22" height="22">
                        <path
                            d="M15,7H10.17V5.414A2,2,0,0,0,6.756,4L.876,9.879a3,3,0,0,0,0,4.242L6.756,20a2,2,0,0,0,3.414-1.414V17H16a6.006,6.006,0,0,1,6,6,1,1,0,0,0,2,0V16A9.01,9.01,0,0,0,15,7Z" />
                    </svg>
                </span>
            </a>
        </li>
    </ul>
</nav>
