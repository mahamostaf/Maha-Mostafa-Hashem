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
            <div class=" align-items-center container">
                <form action="" method="post" class="p-5 mx-5">
                    <div class="col-sm-10 offset-sm-1 ">
                        <div class="col-12 text-center text-success">
                            <h3> Bank </h3><br>
                        </div>
                        <div class="form-group ">
                            <label for="name"><h6> Username </h6></label><br>
                            <input type="text" name="name" id="name" value="<?php if($_POST){ echo $_POST['name']; } ?>" class="form-control">
                        </div>
                        <div class="form-group ">
                            <label for="loan"><h6> Loan Amount </h6></label><br>
                            <input type="number" name="loan" id="loan" value="<?php if($_POST){ echo $_POST['loan']; } ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="loan"><h6>Loan Years </h6></label><br>
                            <input type="number" name="years" id="years" value="<?php if($_POST){ echo $_POST['years']; } ?>" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success ">Calculate</button><br><br>
                        </div>

                        <?php
                        if($_POST){
                            if($_POST['years'] <= 3){
                                $interest_rate = 0.1 * $_POST['loan'] * $_POST['years'] ;                                                                                    
                            }
                            else{
                                $interest_rate = 0.15 * $_POST['loan'] * $_POST['years'] ;
                            }

                            $loan_after_rate = $_POST['loan'] + $interest_rate ;
                            $monthly = $loan_after_rate / ( 12 * $_POST['years'] );

                        ?>

                        <div class="container">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center"> Username </th>
                                        <th class="text-center"> Interest Rate </th>
                                        <th class="text-center"> Loan After Rate </th>
                                        <th class="text-center"> Monthly </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <?php echo $_POST['name']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $interest_rate ; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $loan_after_rate ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $monthly ;?>
                                        </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>