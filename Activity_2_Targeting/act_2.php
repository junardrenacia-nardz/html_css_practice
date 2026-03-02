<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .fruits {
            background-color: #E9CD61;
            font-weight: 700;
            color: #6B5C2E;
        }

        .veggies {
            background-color: #76C79F;
            color: #2F5D4B;
            font-weight: 700;
        }

        .snacks {
            background-color: #E58EB0;
            color: #6E3B52;
            font-weight: 700;
        }

        .reset {
            font-weight: 700;
        }

        .highlight button {
            border: none;
            border-radius: 25px;
            padding: 5px 15px;
            margin-right: 5px;
            font-weight: 700;
        }

        .active-fruit {
            background-color: #E9CD61;
            color: #6B5C2E;
        }

        .active-veggie {
            background-color: #76C79F;
            color: #2F5D4B;
        }

        .active-snack {
            background-color: #E58EB0;
            color: #6E3B52;
        }
    </style>
</head>

<body class="m-5">
    <h1>Target Many with querySelectorAll</h1>
    <div class="buttons">
        <button onclick="fruitsAll()" class="btn border-0 btn-warning fruits">Highlight Fruits</button>
        <button onclick="veggiesAll()" class="btn border-0 btn-success veggies">Highlight Veggies</button>
        <button onclick="snacksAll()" class="btn border-0 btn-danger snacks">Highlight Snacks</button>
        <button onclick="resetAll()" class="btn border-0 btn-secondary reset">Reset</button>
    </div>

    <div class="d-flex flex-row highlight mt-3">
        <div class="highlight-fruits d-flex">
            <button class="fruit ">Apple</button>
            <button class="fruit">Banana</button>
            <button class="fruit">Grapes</button>
        </div>
        <div class="highlight-veggies d-flex">
            <button class="veggie">Carrot</button>
            <button class="veggie">Brocolli</button>
            <button class="veggie">Corn</button>
        </div>
        <div class="highlight-snacks d-flex">
            <button class="snack">Pizza</button>
            <button class="snack">Fries</button>
            <button class="snack">Donut</button>
        </div>
    </div>
    <p class="found mt-4">
        0 elements are found
    </p>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
<script src="act_2.js"></script>

</html>