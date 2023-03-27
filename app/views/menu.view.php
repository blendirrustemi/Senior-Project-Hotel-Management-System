<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
    <style>
        .menuBody {
            background-image: url("<?=ADMIN?>/assets/images/food.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        form {
            max-width: 400px;
            text-align: center;
            margin: 0 auto;
            border: 1px solid black;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 50px;
        }

        .form-section {
            display: inline-block;
            width: 100%;
            text-align: left;
            margin-bottom: 20px;
        }

        h2 {
            text-align: left;
            margin-bottom: 20px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 10px;
        }


        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            background: #931c63;
            color: white;
        }


        .back-button-menu {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            background-color: #931c63;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            text-decoration: none;
        }

        .radio-option, .checkbox-option {
            font-family: Arial, sans-serif;
            font-size: 16px;
            font-weight: normal;
            display: block;
            margin-bottom: 10px;
        }

        .radio-option input, .checkbox-option input {
            margin-right: 10px;
        }

        .order-summary {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
        }

        .order-summary h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .order-summary p {
            font-size: 18px;
            margin: 0;
        }

        .order-summary ul {
            margin: 10px 0;
            padding: 0;
        }

        .order-summary li {
            font-size: 16px;
            margin-bottom: 5px;
        }

        h1 {

            margin-top: 200px;
            font-size: 50px;

        }

    </style>

</head>

<body class="menuBody">
<a href="bookingedit" class="back-button-menu">Back to Admin Edit Page</a>


<h1>Food Selection</h1>

<form action="menu" method="post">
    <div class="form-section">
        <br>
        <br>
        <h2>Entrees</h2>
        <label class="radio-option"><input type="radio" name="entree" value="Gluten-free">Gluten-free</label><br>
        <label class="radio-option"><input type="radio" name="entree" value="Vegan">Vegan</label><br>
        <label class="radio-option"><input type="radio" name="entree" value="Fish">Fish</label><br>
        <label class="radio-option"><input type="radio" name="entree" value="Vegetarian">Vegetarian</label><br>
    </div>

    <div class="form-section">
        <h2>Sides</h2>
        <label class="checkbox-option"><input type="checkbox" name="sides[]" value="Mashed Potatoes">Mashed Potatoes</label><br>
        <label class="checkbox-option"><input type="checkbox" name="sides[]" value="Roasted Vegetables">Roasted Vegetables</label><br>
        <label class="checkbox-option"><input type="checkbox" name="sides[]" value="Rice">Rice</label><br>
        <label class="checkbox-option"><input type="checkbox" name="sides[]" value="Salad">Salad</label><br>
    </div>
    <input type="submit" value="Submit Order" style="font-weight: bold; font-size: 1.2em; font-family: Arial, sans-serif;">
    <button type="button" style="font-weight: bold; font-size: 1.2em; font-family: Arial, sans-serif width: 160px; height: 40px; background: #931c63; color: white;" onclick="location.href='<?php echo $_SERVER['PHP_SELF']; ?>'">Change</button>

</form>
<div class="order-summary">
    <h2>Your Food Selection Summary:</h2>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['entree']) && !empty(trim($_POST['entree']))) {
                $entree = htmlspecialchars($_POST['entree']);
                echo "Entree: $entree<br>";
            } else {
                echo "No entree selected.<br>";
            }
            
            if (isset($_POST['sides'])) {
                $sides      = $_POST['sides'];
                $sides_list = array_map('htmlspecialchars', $sides);
                $sides_str  = implode(", ", $sides_list);
                echo "Sides: $sides_str";
            } else {
                echo "No sides selected.";
            }
        }
    ?>
</div>
</body>
</html>
