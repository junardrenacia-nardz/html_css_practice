<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="html_practice.css">
    <title>HTML Practice</title>
</head>

<body>

    <!--Heading Practice-->
    <div class="heading">
        <h1>Heading one</h1>
        <h2>Heading two</h2>
        <h3>Heading three</h3>
        <h4>Heading four</h4>
        <h5>Heading five</h5>
        <h6>Heading six</h6>
        <h6>Heading Another</h6>
    </div>


    <!--Paragraph Practice-->
    <div class="paragraph_one">
        <p><b>Success</b> <i>is rarely the result of sudden inspiration</i>; more often, it grows from consistent effort
            and
            quiet
            determination. Small daily habits, repeated over time, shape our skills and strengthen our confidence. While
            setbacks can feel discouraging, they often provide the most valuable lessons, teaching resilience and
            patience.
            By focusing on steady progress rather than immediate perfection, we create a foundation that supports
            long-term
            achievement and personal growth.
        </p>
    </div>


    <!--Lists Practice-->
    <center>
        <div>
            <hr>
        </div>
        <label class="list-lbl">LISTS</label>
        <div>
            <hr>
        </div>
    </center>

    <div class="lists">
        <div class="unordered">
            <label class="list-ul">Unordered Lists</label>
            <ul>
                <li>Wake up at 6:30 am</li>
                <li>Drink a glass of water</li>
                <li>Stretch for 5-10 minutes</li>
                <li>Take a shower</li>
                <li>Eat a healthy Breakfast</li>
                <li>Review the day's task</li>
                <li>Leave for work or school</li>
            </ul>
        </div>

        <div class="ordered">
            <label class="list-ol">Ordered Lists</label>
            <ol>
                <li>one</li>
                <li>two</li>
                <li>three</li>
                <li>four</li>
                <li>five</li>
                <li>six</li>
            </ol>
        </div>
    </div>

    <center style="margin-top: 20px;">
        <div>
            <hr>
        </div>
        <label class="list-lbl">TABLE</label>
        <div>
            <hr>
        </div>
    </center>
    <!--Table Practice-->
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th rowspan="2">Name</th>
                    <th colspan="2">Department and Section</th>
                    <th rowspan="2">Section</th>
                </tr>
                <tr>
                    <th>Department</th>
                    <th>Section</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Junard Paul P. Renacia</td>
                    <td>Information Technology</td>
                    <td>Grade 12</td>
                    <td>Bonifacio</td>
                </tr>
                <tr>
                    <td>Mark Andrei Datus</td>
                    <td>Information Technology</td>
                    <td>Grade 12</td>
                    <td>Bonifacio</td>
                </tr>
                <tr>
                    <td>John Paulo Ibe</td>
                    <td>Information Technology</td>
                    <td>Grade 12</td>
                    <td>Bonifacio</td>
                </tr>
                <tr>
                    <td>John Paul Borleo</td>
                    <td>Information Technology</td>
                    <td>Grade 12</td>
                    <td>Bonifacio</td>
                </tr>
            </tbody>
        </table>
    </div>


    <!--Form Practice-->
    <br>
    <center style="margin-top: 20px;">
        <div>
            <hr>
        </div>
        <label class="list-lbl">FORM</label>
        <div>
            <hr>
        </div>
    </center>

    <div class="formPrac">
        <div class="form-other">
            <form action="nextPage.php">
                <!--Input Text-->
                <div class="input">
                    <label>Your Name:</label>
                    <input type="text" placeholder="Enter your name">
                </div>

                <div class="input">
                    <label>Your Age:</label>
                    <input type="number" placeholder="Enter your number">
                </div>

                <!--Input Date-->
                <div class="input">
                    <label>Birthday:</label>
                    <input type="date">
                </div>

                <!--Option-->
                <div class="input">
                    <label>Your Gender:</label>
                    <select name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <!--Input Radio Button-->
                <div class="input">
                    <label> Civil Status: </label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="Single" id="">
                            Single
                        </label>
                        <label for="">
                            <input type="radio" name="Married" id="" checked>
                            Married
                        </label>
                        <label for="">
                            <input type="radio" name="Complicated" id="">
                            Complicated
                        </label>
                    </div>

                </div>

                <!--TextArea-->
                <div class="input">
                    <label>Address:</label>
                    <textarea name="address" id="" placeholder="Enter your full address"></textarea>
                </div>


                <div class="buttons">
                    <!--Submit Button-->
                    <input type="submit" value="Submit">
                    <!--Button-->
                    <button type="button" onclick="myAlert()">Cancel</button>
                </div>


            </form>
        </div>

    </div>



    <br>

    <!-- Abbreviation -->
    <center>
        <div class="cite">
            <p>The <abbr title="World Wide Web">WWW</abbr> is awesome</p>

            <p><cite>Spiderman</cite> by Stan Lee</p>
            <!-- Blockqoute -->
            <blockquote class="blockquote">
                "To be, or not to be..."
                <footer>— William Shakespeare, <cite>Hamlet</cite></footer>
            </blockquote>
        </div>
    </center>


    <!--Image and Anchor -->
    <footer class="site-footer">
        <div class="footer img img">
            <img src="sample_pic.jpg" alt="Footer image" class="">
        </div>
        <div class="footer footer-text">
            <p>The <abbr title="World Wide Web">WWW</abbr> is awesome</p>

            <p><cite>Spiderman</cite> by Stan Lee</p>
        </div>

    </footer>
</body>

<script>
    function myAlert() {
        alert("The data is canceled successfuly");
    };


</script>

</html>