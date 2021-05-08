<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ADChat|signin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <link rel="stylesheet" href="css/signin.css">

</head>

<body>
<div class="words">
        <span>A</span>
        <span>D</span>
        <span>C</span>
        <span>h</span>
        <span>a</span>
        <span>t</span>
    </div>

    <div class="main">
    <form action="">
    <div class="form">
            <input type="text" size="100" name="user_name" required autocomplete="off">
            <label for="user_name" class="label-name">
                <span class="content">Name</span>
            </label>
    </div>
    <br><br><br>
    <div class="form">
        <input class="input" size="100"  type="text" name="user_pass" required autocomplete="off">
        <label for="user_pass" class="label-name">
            <span class="content">Password</span>
        </label>
     </div>
    </form>
    </div>
    <div class="bubbles">
        <img src="images/bubble1.png">
        <img src="images/bubble1.png">
        <img src="images/bubble1.png">
        <img src="images/bubble1.png">
        <img src="images/bubble1.png">
        <img src="images/bubble1.png">
        <img src="images/bubble1.png">
        <img src="images/bubble1.png">
        <img src="images/bubble1.png">
        <img src="images/bubble1.png">
    </div>
</body>

</html>