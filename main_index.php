<!DOCTYPE html>
<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous"
        />
        <script src="https://kit.fontawesome.com/c9ed11742c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./view/style.css" />
    </head>
    <div class="container">
            <div class="row sticky-top">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="img/logo.png" width="50" , height="44" />
                        </a>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div
                            class="collapse navbar-collapse"
                            id="navbarSupportedContent"
                        >
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a
                                        class="nav-link active"
                                        aria-current="page"
                                        href="#"
                                        >Home</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact us</a>
                                </li>
                                <li class="nav-item" id="login-nav">
                                    <a class="nav-link" href="#">Login</a>
                                </li>
                                <li class="nav-item" id="login-nav">
                                    <a class="nav-link" href="#">Register</a>
                                </li>
                            </ul>
                            <form class="d-flex" id="login-show">
                                <input
                                    class="form-control me-2"
                                    type="Username"
                                    placeholder="Username"
                                    aria-label="Search"
                                />
                                <input
                                    class="form-control me-2"
                                    type="Password"
                                    placeholder="Password"
                                    aria-label="Search"
                                />
                                <button
                                    class="btn btn-outline-success"
                                    type="submit"
                                >
                                    Login
                                </button>
                                <button
                                    class="btn btn-outline-success"
                                    type="submit"
                                >
                                    Register
                                </button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
<div class="header-content">

</div>
</div>

<div class="row">
                <div
                    id="carouselExampleControls"
                    class="carousel slide"
                    data-bs-ride="carousel"
                >
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img
                                src="./img/first.jpg"
                                class="d-block w-100"
                                alt="..."
                            />
                        </div>
                        <div class="carousel-item">
                            <img
                                src="./img/second.jpg"
                                class="d-block w-100"
                                alt="..."
                            />
                        </div>
                        <div class="carousel-item">
                            <img
                                src="./img/fifth.jpg"
                                class="d-block w-100"
                                alt="..."
                            />
                        </div>
                    </div>
                    <button
                        class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev"
                    >
                        <span
                            class="carousel-control-prev-icon"
                            aria-hidden="true"
                        ></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                        class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselExampleControls"
                        data-bs-slide="next"
                    >
                        <span
                            class="carousel-control-next-icon"
                            aria-hidden="true"
                        ></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 top-0 start-100 bg-light border rounded">
                    <p class="text-center lead quote-text">
                        Reliable and free repair quote
                    </p>
                </div>
                <div class="col-md-6 top-0 bg-light border rounded">
                    <p class="text-center lead quote-text">
                        Attractive promotional offers
                    </p>
                </div>
                <div class="col bg-light border rounded">
                    <p class="text-center lead quote-text">
                        Friendly staff and a nice atmosphere
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <figure class="text-center vertical-align" id="quote-text">
                        <blockquote class="blockquote">
                            <p>
                                "If you want good service, come to this car
                                workshop." - Satisfied customer
                            </p>
                        </blockquote>
                    </figure>
                </div>
                <div class="col">
                    <img
                        src="./img/thumb.jpg"
                        class="img-fluid"
                        alt="satisfied customer"
                    />
                </div>
            </div>
            <footer class="mt-auto" id="footer">
                <div class="row">
                    <div class="col border-end">
                        <p class="text-center lead quote-text">
                            Joe's car repair
                        </p>
                    </div>

                    <div class="col border-end">
                        <p class="text-center lead quote-text">
                            Copyright © 2021 Joe's Workshop
                        </p>
                    </div>

                    <div class="col border-end">
                        <p class="text-center lead quote-text">
                            Our social media
                        </p>
                        <div class="col" id="social-media">
                            <a href="#"><i class="fab fa-facebook-square icons"></i></a>
                            <a href="#"><i class="fab fa-instagram-square"></i></a>
                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                            
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
            integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
            crossorigin="anonymous"
        ></script>
</html>