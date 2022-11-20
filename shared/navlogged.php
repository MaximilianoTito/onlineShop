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
                        <svg fill="white" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="22" height="22">
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
            <a class="nav-link text-light" href="/onlineShop">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="18" height="18">
                        <path
                            d="M23.121,9.069,15.536,1.483a5.008,5.008,0,0,0-7.072,0L.879,9.069A2.978,2.978,0,0,0,0,11.19v9.817a3,3,0,0,0,3,3H21a3,3,0,0,0,3-3V11.19A2.978,2.978,0,0,0,23.121,9.069ZM15,22.007H9V18.073a3,3,0,0,1,6,0Zm7-1a1,1,0,0,1-1,1H17V18.073a5,5,0,0,0-10,0v3.934H3a1,1,0,0,1-1-1V11.19a1.008,1.008,0,0,1,.293-.707L9.878,2.9a3.008,3.008,0,0,1,4.244,0l7.585,7.586A1.008,1.008,0,0,1,22,11.19Z" />
                    </svg>
                    Inicio
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="/onlineShop/views/catalogue.php">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="22"
                    height="22">
                    <path
                        d="M24,4.591V20.688l-12,3.332L0,20.688V4.591c0-.771,.339-1.496,.931-1.989,.021-.018,.047-.029,.069-.046V19.928l11,3.053,11-3.053V2.556c.022,.017,.047,.028,.069,.046,.592,.494,.931,1.219,.931,1.989ZM12,21.02l-9-2.572V3.501c0-.792,.363-1.519,.995-1.996,.633-.477,1.432-.624,2.192-.408l4.189,1.197c.679,.194,1.247,.624,1.624,1.185,.377-.561,.945-.991,1.624-1.185l4.189-1.197c.76-.217,1.56-.069,2.192,.408,.632,.477,.995,1.205,.995,1.996v14.947l-9,2.572Zm.5-1.183l7.5-2.143V3.501c0-.475-.218-.912-.597-1.198-.265-.199-.579-.303-.899-.303-.139,0-.278,.02-.416,.059l-4.19,1.197c-.823,.235-1.398,.998-1.398,1.854v14.727Zm-1-14.727c0-.857-.575-1.62-1.398-1.854l-4.189-1.197c-.457-.131-.935-.042-1.315,.244-.379,.286-.597,.723-.597,1.198v14.193l7.5,2.143V5.11Z" />
                </svg>
                Catalogo
            </a>
        </li>
        <li class="nav-item">
            <a href="/onlineShop/views/auth/customers.php" class="nav-link text-light">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="21"
                    height="21">
                    <path
                        d="M12,10a3,3,0,0,1,0-6A3,3,0,0,1,12,10ZM8.968,15.249a3.183,3.183,0,0,1,6.063,0,1,1,0,0,0,1.938-.5c-1.311-4.947-8.63-4.945-9.937,0a1,1,0,1,0,1.936.5Zm3.041,8.416a2.01,2.01,0,0,1-1.338-.509L6.923,20H4a4,4,0,0,1-4-4V4A4,4,0,0,1,4,0H20a4,4,0,0,1,4,4V16a4,4,0,0,1-4,4H17.147L13.3,23.18A1.94,1.94,0,0,1,12.009,23.665ZM4,2A2,2,0,0,0,2,4V16a2,2,0,0,0,2,2H7.289a1,1,0,0,1,.644.235l4.046,3.41,4.172-3.416A1,1,0,0,1,16.788,18H20a2,2,0,0,0,2-2V4a2,2,0,0,0-2-2Z" />
                </svg>
                Clientes
            </a>
        </li>
    </ul>
</nav>