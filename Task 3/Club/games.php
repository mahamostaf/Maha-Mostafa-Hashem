<?php
session_start();

if($_SERVER['REQUEST_METHOD'] =="POST" && !empty($_POST)) {
    print_r($_POST);
    header('location:result.php');
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
            <div class="justify-content-center align-items-center container">
                <form action="" method="post" class="p-5 mx-5">
                    <div class="col-sm-10 offset-sm-1">
                        <?php
                        for ($i = 0; $i < $_SESSION['count'] ; $i++) { ?>                        
                        <div class="form-group">    
                            <label class="text-primary" for="name">Member <?php echo $i+1 ?></label>
                            <input type="name" name=<?php echo "name".$i ; ?>  id=<?php echo "name".$i ; ?> value="" class="form-control" ><br>
                            <input type="checkbox" id="Football" name="sport[<?php echo $i ; ?>][Football]" value="Football" >
                            <div class="d-inline">Football </div><div class="d-inline font-weight-bold"> 300 LE</div><br>
                            <input type="checkbox" id="Swimming" name="sport[<?php echo $i ; ?>][Swimming]" value="Swimming">
                            <div class="d-inline">Swimming </div><div class="d-inline font-weight-bold"> 250 LE</div><br>
                            <input type="checkbox" id="Valleyball" name="sport[<?php echo $i ; ?>][Valleyball]" value="Valleyball">
                            <div class="d-inline">Volleyball </div><div class="d-inline font-weight-bold"> 150 LE</div><br>
                            <input type="checkbox" id="Others" name="sport[<?php echo $i ; ?>][Others]" value="Others">
                            <div class="d-inline">Others </div><div class="d-inline font-weight-bold"> 100 LE</div><br>
                        </div>
                        <?php }?>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary ">Submit</button><br><br>
                        </div>

                        <?php
                        if ($_POST) {
                            for ($i = 0; $i < $_SESSION['count']; $i++) {
                                $names["name{$i}"] = $_POST["name{$i}"];
                                $sports["member{$i}"]= $_POST["sport"][$i];
                            }
                            $_SESSION['names'] = $names;
                            $_SESSION['sports'] = $sports;
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