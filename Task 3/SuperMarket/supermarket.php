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
                            <h3> Super Market </h3><br>
                        </div>
                        <div class="form-group ">
                            <label for="name">
                                <h6> Username </h6>
                            </label><br>
                            <input type="text" name="name" id="name" value="<?php if ($_POST) {
                                                                                echo $_POST['name'];
                                                                            } ?>" class="form-control">
                        </div>
                        <div class="form-group ">
                            <label for="city"><h6> City </h6></label><br>
                            <select name="city" id="city" class="form-control" >
                                <option value="Cairo"<?php if($_POST){ if($_POST['city']== "Cairo") echo "selected"; } ?> >Cairo</option>
                                <option value="Giza" <?php if($_POST){ if($_POST['city']== "Giza") echo "selected"; } ?> >Giza</option>
                                <option value="Alex" <?php if($_POST){ if($_POST['city']== "Alex") echo "selected"; } ?> >Alex</option>
                                <option value="Other"<?php if($_POST){ if($_POST['city']== "Other") echo "selected"; } ?> >Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="num">
                                <h6>Number Of Varities </h6>
                            </label><br>
                            <input type="number" name="num" id="num" value="<?php if ($_POST) {
                                                                                echo $_POST['num'];
                                                                            } ?>" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Enter Products</button><br><br>
                        </div>

                        <?php
                        if ($_POST && count($_POST) == 3) {
                        ?>
                            <div class="d-block">
                                <div class="form-group text-center text-success">
                                    <label for="city">
                                        <h6> Product Name </h6>
                                    </label><?php for ($s = 0; $s < 27; $s++) {
                                            ?>&nbsp;<?php
                                            } ?>
                                    <label for="city">
                                        <h6> Price </h6>
                                    </label><?php for ($s = 0; $s < 27; $s++) {
                                            ?>&nbsp;<?php
                                            } ?>
                                    <label for="city">
                                        <h6> Quantities </h6>
                                    </label>
                                </div>
                                <?php
                                for ($i = 1; $i <= $_POST['num']; $i++) { ?>
                                    <div class="form-group text-center">
                                        <input type="text" name=<?php echo "name".$i; ?> id=<?php echo "name.{$i}"; ?>>
                                        <input type="number" name=<?php echo "price".$i; ?> id=<?php echo "price.{$i}"; ?>>
                                        <input type="number" name=<?php echo "quant".$i; ?> id=<?php echo "quant.{$i}"; ?>>
                                    </div>
                                <?php
                                } ?>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success ">Receipt</button><br><br>
                                </div>
                            </div>
                        <?php } elseif($_POST) { 
                        ?> 
                            <table class="table table-hover text-center">
                                <thead>
                                    <tr class="text-success">
                                        <th class="text-center">Product Name </th>  
                                        <th class="text-center">Price </th>
                                        <th class="text-center">Quantities </th>
                                        <th class="text-center">Sub Total </th> 
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $total = 0 ; 
                                     for ($i=1 ; $i <= $_POST['num']; $i++ ) {?> 
                                        <tr>
                                            <td><?php echo $_POST["name".$i]; ?></td>
                                            <td><?php echo $_POST["price".$i]; ?></td>
                                            <td><?php echo $_POST["quant".$i]; ?></td>
                                            <td><?php echo $_POST["price".$i] * $_POST["quant".$i]; ?></td>
                                            <?php
                                            $price = $_POST["price".$i] * $_POST["quant".$i];
                                            $total += $price ;  ?>
                                        </tr>  
                                    <?php } ?>  
                                </tbody>
                            </table>
                            <?php if($total > 4500){
                                $discount = 0.2 * $total ;
                            } elseif($total < 4500){
                                $discount = 0.15 * $total ;
                            } elseif($total < 3000){
                                $discount = 0.1 * $total ;
                            } elseif($total < 1000){
                                $discount = 0 * $total ;
                            }

                            if ($_POST['city'] == 'Cairo'){
                                $delivery = 0 ;
                            } elseif ($_POST['city'] == 'Giza'){
                                $delivery = 30 ;
                            } elseif ($_POST['city'] == 'Alex'){
                                $delivery = 50 ;
                            } elseif ($_POST['other'] ){
                                $delivery = 100 ;
                            }
                            ?>
                            <div class="col-12 text-center text-success">
                                <h5> Receipt </h5><br>
                            </div>
                            <table class="table table-hover"> 
                                <tbody> 
                                    <tr>
                                        <th class="text-center">Client Name </th> 
                                        <td><?php echo $_POST["name"]; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">City </th> 
                                        <td><?php echo $_POST["city"]; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Total </th> 
                                        <td><?php echo $total ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Discount </th> 
                                        <td><?php echo $discount; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Total After Discount </th> 
                                        <td><?php echo $total - $discount ; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Delivary </th> 
                                        <td><?php echo $delivery ; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-center text-success">Net Total</th> 
                                        <td><?php echo $total - $discount + $delivery ; ?></td>
                                    </tr> 
                                </tbody>
                            </table> 
                        <?php } ?>
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