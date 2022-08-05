 <?php

    use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

    session_start();
    $foot = 0;
    $swim = 0;
    $valley = 0;
    $other = 0;

    $price_total = 0;

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
             <div class=" align-items-center container">
                 <table class="table table-hover text-center">
                     <thead>
                         <tr>
                             <th class="text-center">Subscriber </th>
                             <th class="text-center"><?php echo $_SESSION['member'] ?></th>
                             <th class="text-center"></th>
                             <th class="text-center"></th>
                             <th class="text-center"></th>
                             <th class="text-center"></th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                            for ($i = 0; $i < $_SESSION['count']; $i++) {
                                $foot_price = 0;
                                $swim_price = 0;
                                $valley_price = 0;
                                $other_price = 0;
                                $counter = 0;
                            ?>
                             <tr>
                                 <td><?php echo $_SESSION["names"]["name{$i}"]; ?></td>
                                 <?php
                                    if (gettype($_SESSION["sports"]["member{$i}"]) == "array") {
                                        foreach ($_SESSION["sports"]["member{$i}"] as $sports) {  ?>
                                         <td><?php echo $sports ?></td>
                                         <?php if ($sports == "Football") {
                                                $foot_price = 300;
                                                $foot += $foot_price;
                                            } elseif ($sports == "Swimming") {
                                                $swim_price = 250;
                                                $swim += $swim_price;
                                            } elseif ($sports == "Valleyball") {
                                                $valley_price = 150;
                                                $valley += $valley_price;
                                            } elseif ($sports == "Others") {
                                                $other_price = 100;
                                                $other += $other_price;
                                            } ?>
                                     <?php }
                                        $total = $foot_price + $swim_price + $valley_price + $other_price; ?>
                                     <td><?php echo $total; ?></td>
                                     <?php $price_total += $total;
                                        $total = 0; ?>
                             </tr>
                     <?php }
                                } ?>
                     <tr>
                         <th>Total Price</th>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <th><?php echo $price_total; ?></th>
                     </tr>
                     </tbody>
                 </table>
                 <div class="col-12 text-center text-primary">
                     <h5> Sports </h5><br>
                 </div>
                 <table class="table table-hover">
                     <tbody>
                         <tr>
                             <th class="text-center">Football Club </th>
                             <td><?php echo $foot; ?></td>
                         </tr>
                         <tr>
                             <th class="text-center">Swimming Club </th>
                             <td><?php echo $swim; ?></td>
                         </tr>
                         <tr>
                             <th class="text-center">Valleyball Club </th>
                             <td><?php echo $valley; ?></td>
                         </tr>
                         <tr>
                             <th class="text-center">Other Clubs </th>
                             <td><?php echo $other; ?></td>
                         </tr>
                         <tr>
                             <th class="text-center">Club Supscription</th>
                             <td><?php echo $sub = 20000; ?></td>
                         </tr>
                         <tr>
                             <th class="text-center">Total Price </th>
                             <td><?php echo $foot + $valley + $swim + $other + $sub; ?></td>
                         </tr>
                     </tbody>
                 </table>
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