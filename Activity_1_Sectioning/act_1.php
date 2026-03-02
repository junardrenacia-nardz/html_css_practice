<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        main {
            width: 900px;
            height: 100vh;

        }

        .left-div {
            height: 800px;
            background-color: tomato;

        }

        .right-div {
            height: 800px;
        }
    </style>
</head>

<body>

    <main class="mx-auto row d-flex flex-column justify-content-center g-0">
        <div class="left-div col-4"></div>
        <div class="right-div col-8">
            <div class="top-div gx-0 p-5 row justify-content-between" style="height: 500px; background-color: #FFDB58">
                <div class="blue col-7 bg-primary">
                </div>
                <div class="yellow-green col-4" style="background-color:yellowgreen;">
                </div>
            </div>
            <div class="bot-div p-5 row w-auto g-0" style="background-color: #7F00FF; height: 300px; ">
                <div class="black bg-dark">black</div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>