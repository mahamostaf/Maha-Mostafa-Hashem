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

$flag1 = 1;
$flag2 = 1;
$score = 0;
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
                        <div class="col-12 text-center text-dark"><br>
                            <h3>Result</h3><br><br>
                        </div>
                        <div class="form-group">
                            <b><label for="question">Question</label></b>
                            <?php for ($space = 0; $space < 67; $space++) { ?>&nbsp; <?php } ?>
                            <b><label for="$rate">Reviews</label></b>
                        </div>
                        <hr style="width: 100%; height: 3px;" color="black">
                        <div class="row p-3">
                            <div class="form-group d-inline-block">
                                <?php foreach ($questions as $key => $quest) { ?>
                                    <label for="quest"> <?php echo $quest; ?> </label><br><br>
                                <?php } ?>
                            </div>
                            <?php for ($space = 0; $space < 40; $space++) { ?> &nbsp; <?php } ?>
                            <div class="form-group d-inline-block">
                                    <?php 
                                       if ($_SESSION) {
                                        foreach ($_SESSION['rates'] as $key => $value) {
                                            if ($value == "rate1") {
                                                $review = "Bad";
                                            } elseif ($value == "rate2") {
                                                $review = "Good";
                                            } elseif ($value == "rate3") {
                                                $review = "Very good";
                                            } elseif ($value == "rate4") {
                                                $review = "Excellent";
                                            }
                                            echo $review."<br><br>";
                                        }
                                    }  ?>
                                    
                            </div>
                        </div>
                    </div>
                    <?php if($_SESSION['post'] >= 25){ ?>
                        <div class="alert alert-success col-12 text-center" ><b>Thanks</b></button><br><br>
                        <?php 
                    }else{ ?>
                        <div class="alert alert-danger col-12 text-center" ><b>We will call you later on this phone: <?php echo $_SESSION['phone']; ?></b></button><br><br>
                    <?php } ?>
                    </div>
            </form>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>