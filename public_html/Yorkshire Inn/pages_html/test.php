<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container {
            max-width: 996px;
            margin: 0 auto;
            border: 5px solid blue;
            padding: 1px;
        }

        .available-rooms-image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            max-width: 100%;
            gap: 20px;
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            gap: 20px;
        }

        .col {
            flex: 1;
            max-width: 50%;
            border: 2px solid black;
            position: relative;
        }

        img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .rectangle {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background-color: #83032F;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-weight: bold;
        }

        @media only screen and (max-width: 900px) {

            html,
            body {
                margin: 0 auto;
                width: 90%;
                background-color: rgb(139, 161, 139);
            }

            .row {
                flex-direction: column;
            }

            .col {
                max-width: 100%;
            }

            .rectangle {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 60px;
                background-color: #83032F;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #fff;
                font-weight: bold;
            }


        }
    </style>


</head>

<body>

    <div class="container">


        <div class="available-rooms-image-container">
            <div class="row">
                <div class="col">
                    <img src="assets/images/homepage/home-blue-room.png">
                    <div class="rectangle">
                        <h3>Blue Room</h3>
                    </div>
                </div>
                <div class="col">
                    <img src="assets/images/homepage/home-bolero-room.png">
                    <div class="rectangle"><h3>Bolero Room</h3></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="assets/images/homepage/home-rose-suite.png">
                    <div class="rectangle"><h3>Rose Room</h3></div>
                </div>
                <div class="col">
                    <img src="assets/images/homepage/home-lodge-suite.png">
                    <div class="rectangle"><h3>Lodge Room</h3></div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>