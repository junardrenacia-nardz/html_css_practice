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
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid mx-5">
            <a href="#" class="navbar-brand">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/960px-Bootstrap_logo.svg.png"
                    alt="" width="30" height="24" class="d-inline-block align-text-top">
                Bootstrap
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navigation collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav d-flex flex-column flex-lg-row ms-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Link</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <h6 class="dropdown-header">Options</h6>
                            </li>
                            <li><a href="#" class="dropdown-item">Action</a></li>
                            <li><a href="#" class="dropdown-item">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <h6 class="dropdown-header">Another Options</h6>
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

        <div class="container-lg mt-5 pt-5">
            <h1 class="text-center">Learning Bootstrap</h1>
            <p class="text-secondary text-center"><i>by <b>Junard Paul Renacia</b></i></p>
            <div class="col-fluid mt-4" style="text-align: justify;">
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
                            <button class="btn-light btn" type="button" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">See more</button>
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
                            <button class="btn-light btn" type="button" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">See more</button>
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
                            <button class="btn-light btn" type="button" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">See more</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="label my-4 container-lg">
            <h1 class="text-center">Forms</h1>

            <form action="" class="row g-3 needs-validation" novalidate>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">First Name</label>
                    <input type="text" name="" id="validationCustom01" class="form-control" required>
                    <div class="valid-feedback">Looks Good!</div>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Last Name</label>
                    <input type="text" name="" id="validationCustom02" class="form-control" required>
                    <div class="valid-feedback">Looks Good!</div>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" id="validationCustomUsername" value="sample@gmail.com"
                            disabled>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">City</label>
                    <input type="text" name="" id="validationCustom03" class="form-control" required>
                    <div class="valid-feedback">Looks Good!</div>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">State</label>
                    <select name="" id="validationCustom04" class="form-select" required>
                        <option value="" selected disabled>Choose...</option>
                        <option value="capital">Capital City</option>
                        <option value="other">...</option>
                    </select>
                    <div class="valid-feedback">Looks Good!</div>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Zip</label>
                    <input type="text" name="" id="validationCustom05" class="form-control" required>
                    <div class="valid-feedback">Looks Good!</div>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input type="checkbox" name="" id="invalidCheck" class="form-check-input" required>
                        <label for="invalidCheck" class="form-check-label">Agree to terms and conditions</label>
                    </div>
                    <div class="valid-feedback">Already Checked</div>
                    <div class="invalid-feedback">
                        You must agree before submitting
                    </div>
                </div>

                <div id="liveAlertPlaceholder"></div>
                <div class="col-12 text-center">
                    <button class="btn-success btn w-75" type="submit" id="liveAlertBtn">Submit Form</button>
                </div>


            </form>
        </div>

    </main>


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal Title</h1>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" arial-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas reiciendis adipisci
                        minima
                        cumque? Ratione error accusantium cum pariatur soluta.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore eaque sunt esse dignissimos
                        deleniti dolorum unde velit aperiam neque accusantium magnam autem cum modi, harum voluptates
                        dolore
                        perferendis cupiditate alias, laboriosam voluptate nihil quasi quia dolorem. Odit porro rem,
                        commodi
                        a doloremque aliquid, pariatur perferendis ut omnis voluptatibus adipisci similique eos tempore
                        error sapiente ducimus soluta. Doloribus, accusantium rerum? Earum nisi doloribus non, aut
                        officia
                        voluptatum fugit enim. Magni obcaecati aperiam rem aut non veritatis sapiente, veniam suscipit!
                        Animi, esse tempora dicta illum eum at, praesentium voluptatem impedit et labore iusto debitis,
                        eaque recusandae reiciendis dignissimos. Velit ab ratione facilis!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas reiciendis adipisci
                        minima
                        cumque? Ratione error accusantium cum pariatur soluta.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore eaque sunt esse dignissimos
                        deleniti dolorum unde velit aperiam neque accusantium magnam autem cum modi, harum voluptates
                        dolore
                        perferendis cupiditate alias, laboriosam voluptate nihil quasi quia dolorem. Odit porro rem,
                        commodi
                        a doloremque aliquid, pariatur perferendis ut omnis voluptatibus adipisci similique eos tempore
                        error sapiente ducimus soluta. Doloribus, accusantium rerum? Earum nisi doloribus non, aut
                        officia
                        voluptatum fugit enim. Magni obcaecati aperiam rem aut non veritatis sapiente, veniam suscipit!
                        Animi, esse tempora dicta illum eum at, praesentium voluptatem impedit et labore iusto debitis,
                        eaque recusandae reiciendis dignissimos. Velit ab ratione facilis!</p>
                </div>
                <div class="modal-footer">
                    <button class="btn-secondary btn" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn-primary btn" type="button">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>


    <script>
        // Validations ===============================================
        (() => {
            const forms = document.querySelectorAll('.needs-validation')
            // Alerts ===============================================
            const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
            const appendAlert = (message, type) => {
                const wrapper = document.createElement('div')
                wrapper.innerHTML = `
                <div class="alert alert-${type} alert-dismissible" role = "alert">
                   <div> ${message} </div>
                   <button type="button" class = "btn-close" data-bs-dismiss="alert" aria-label = "Close"></button>
                </div>`
                alertPlaceholder.append(wrapper)
            };

            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {

                    event.preventDefault()
                    event.stopPropagation()


                    form.classList.add('was-validated')

                    if (form.checkValidity()) {
                        appendAlert('Form submitted Successfully!', 'success')
                    } else {
                        appendAlert('Please fill all required fields correctly.', 'danger')
                    }
                }, false)
            })
        })();



        // const alertTrigger = document.getElementById('liveAlertBtn')
        // if (alertTrigger) {
        //     alertTrigger.addEventListener('click', () => {
        //         appendAlert('Nice, you triggered this alert message!', 'success')
        //     })
        // };





    </script>

</body>

</html>