<?php
session_start();

$questions = [
    "Are you satisfied with level of cleanliness ?",
    "Are you satisfied with the service prices ?",
    "Are you satisfied with the nursing service ?",
    "Are you satisfied with the level of doctors ?",
    "Are you satisfied with the calm in the hospital ?"
];
$rates = [
    "Bad" => 0,
    "Good" => 3,
    "Very good" => 5,
    "Excellent" => 10
];

$flag = 1;
$score = 0;

if($_SERVER['REQUEST_METHOD'] =="POST" && !empty($_POST)) {
    header('location:Result.php');
}
?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="form-row">
            <div class="d-flex justify-content-center align-items-center container">
                <form action="" method="post" class="border-right-0">
                    <div class="col-sm-12 offset-sm-0">
                        <div class="col-12 text-center text-success"><br>
                            <h3>Review</h3><br><br>
                        </div>
                        <div class="form-group">
                            <b><label for="question">Question</label></b>
                            <?php for ($space = 0; $space < 40; $space++) { ?>&nbsp; <?php } ?>
                            <b><?php foreach ($rates as $rate => $score) { ?>
                                    <label for="$rate"> <?php echo $rate; ?></label>
                                    <?php for ($space = 0; $space < 6; $space++) { ?>&nbsp; <?php } ?>
                                <?php } ?></b>
                        </div>
                        <hr style="width: 100%; height: 3px;" color="black">
                        <div class="row p-3">
                            <div class="form-group d-inline-block">
                                <?php foreach ($questions as $key => $quest) { ?>
                                    <label for="quest"> <?php echo $quest; ?> </label><br><br>
                                <?php } ?>
                            </div>
                            <?php for ($space = 0; $space < 10; $space++) { ?> &nbsp; <?php } ?>
                            <div class="form-group d-inline-block">
                                <?php foreach ($questions as $key => $quest) { ?>
                                    <?php for ($x = 1; $x <= count($rates); $x++) { ?>
                                        <input type="radio" value="<?php echo "rate" . $x; ?>" name="<?php echo  "button" . $flag;  ?>">

                                        <?php for ($space = 0; $space < 11; $space++) { ?> &nbsp; <?php } ?>
                                    <?php
                                    }
                                    $flag++; ?>
                                    <br><br>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success col-12 text-center"><b>
                            <h5>Result</h5>
                        </b></button><br><br>
                    <?php
                    $score = 0;
                    if ($_POST) {
                        foreach ($_POST as $key => $value) {
                            if ($value == "rate1") {
                                $score += $rates["Bad"];
                            } elseif ($value == "rate2") {
                                $score += $rates["Good"];
                            } elseif ($value == "rate3") {
                                $score += $rates["Very good"];
                            } elseif ($value == "rate4") {
                                $score += $rates["Excellent"];
                            }
                        }
                        $_SESSION['post'] = $score;
                        $_SESSION['rates'] = $_POST ;
                    }
                    
                    ?>
                </div>

            </form>
        </div>
    </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

