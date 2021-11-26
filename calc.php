<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
</head>
<style>
    body {
        background-color: burlywood;
        color: whitesmoke;
    }

    .main1 {
        background-color: gray;
        height: 450px;
        width: 850px;
        margin: auto;
        margin-top: 125px;
        border-radius: 20px;
        display: flex;
        box-sizing: border-box;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 30px;
    }

    .child1 {
        width: 400px;
        height: 380px;
        margin: auto;
        text-align: right;
        margin-right: 155px;
        margin-top: 130px;

    }

    .child2 {
        width: 400px;
        height: 380px;
        margin: auto;
        text-align: left;
        margin-left: 30px;
        margin-top: 100px;
    }

    input {
        border-radius: 10px;
        border: none;
        padding: 4px;
    }

    #select {
        border-radius: 10px;
        padding: 3px;
        width: 100px;
    }

    button {
        border-radius: 10px;
        padding: 4px;
        border: none;
        width: 164px;
    }

    #font {
        font-size: 20px;
        padding-top: 35px;
    }

    @media screen and (max-width:700px) {
        .main1 {
            display: block;
            width: 423px;
            height: 670px;
            margin-top: -75px;
            box-sizing: border-box;
        }

        .child1 {
            margin-top: 130px;
            width: 423px;
            height: 150px;
            text-align: center;
            padding-top: 50px;
        }

        .child2 {
            width: 400px;
            margin-top: 10px;
            text-align: center;
            box-sizing: border-box;
        }

        label {
            font-size: 19px;
        }

        form {
            margin-left: -30px;
        }

        #font {
            padding-top: 380px;
            font-size: 22px;
        }
    }
</style>

<body>

    <div class="main1 col-sm-12">
        <div class="child1">
            <h1 id="calc">Calculator</h1>
            <div class="child3">
                <p id="font">
                    <?php
                    if (isset($_GET['calculate'])) {
                        $num1 = $_GET['num1'];
                        $num2 = $_GET['num2'];
                        $operation = $_GET['operator'];
                        switch ($operation) {
                            case "add":
                                $addition = $num1 + $num2;
                                echo "Addition is : {$addition}";
                                break;

                            case "sub":
                                $subtraction = $num1 - $num2;
                                echo "Subtraction is : {$subtraction}";
                                break;

                            case "mult":
                                $multiplication = $num1 * $num2;
                                echo "Multiplication is : {$multiplication}";
                                break;

                            case "divi":
                                $division = $num1 / $num2;
                                echo "Division is : {$division}";
                                break;

                            default:
                                echo "Enter Some Values";
                                break;
                        }
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="child2">
            <form action="" method="get">
                <label>Enter 1st Number</label><br>
                <input type="text" name="num1"><br><br>
                <label>Enter 2nd Number</label><br>
                <input type="text" name="num2"><br><br>
                <select name="operator" id="select">
                    <option value="add">Addition</option>
                    <option value="sub">Subtraction</option>
                    <option value="mult">Multiplication</option>
                    <option value="divi">Division</option>
                </select><br><br><br>
                <button type="submit" name="calculate">Calculate</button>
            </form>
        </div>

    </div>
</body>

</html>