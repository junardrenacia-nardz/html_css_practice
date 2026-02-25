<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .navigation a {
            text-decoration: none;
            color: black;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid mx-5">
            <a href="#" class="navbar-brand">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/960px-Bootstrap_logo.svg.png"
                    alt="" width="30" height="24" class="d-inline-block align-text-top">
                Bootstrap
            </a>
            <div class="navigation d-flex ">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#" class="dropdown-item">Action</a></li>
                            <li><a href="#" class="dropdown-item">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a href="#" class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input type="search" class="form-control me-2" placeholder="Search" aria-label="Search">
                    <button class="btn-outline-success btn" type="submit">Search</button>
                </form>
            </div>

        </div>
    </nav>

    <main>
        <div class="container-lg my-4">
            <h1 class="text-center">Learning Bootstrap</h1>
            <p class="text-secondary text-center"><i>by <b>Junard Paul Renacia</b></i></p>
            <div class="col-fluid mt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et laboriosam sapiente ipsam ab alias deserunt.
                Eligendi neque, a nisi corporis aliquam natus minima nemo tenetur eum modi? Cumque debitis eum quo
                aliquid architecto delectus dignissimos odio facere quae sunt! Laudantium molestias iure ipsa ipsum hic
                quas ab maxime voluptatibus quaerat possimus ea deserunt aliquid unde aliquam iste, amet quis explicabo
                debitis temporibus ullam tempora quo natus! Tempora cupiditate ducimus officiis doloribus laudantium
                inventore nisi, ullam est accusamus, vitae rerum illum vel. Incidunt repudiandae nostrum autem expedita
                consectetur consequuntur hic, ea non perferendis, laboriosam fugit, iste nulla exercitationem minima
                inventore facere.
            </div>
        </div>

        <div class="cards-apply container">
            <div class="row g-2">
                <div class="col-md-4">
                    <div class="card bg-success text-white">
                        <div class="card-header text-center">
                            <b>Sample Card 1</b>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                Card Sample
                            </div>
                            <div class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem explicabo accusamus
                                sapiente
                                magnam eos quos saepe error excepturi voluptates dicta.
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn-light btn" type="button">See more</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="card bg-warning text-black">
                        <div class="card-header text-center">
                            <b>Sample Card 2</b>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                Card Sample
                            </div>
                            <div class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem explicabo accusamus
                                sapiente
                                magnam eos quos saepe error excepturi voluptates dicta.
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn-light btn" type="button">See more</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-danger text-white">
                        <div class="card-header text-center">
                            <b>Sample Card 3</b>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                Card Sample
                            </div>
                            <div class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem explicabo accusamus
                                sapiente
                                magnam eos quos saepe error excepturi voluptates dicta.
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn-light btn" type="button">See more</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

</body>

</html>