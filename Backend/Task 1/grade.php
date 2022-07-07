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
      <div class="d-flex justify-content-center align-items-center container padding-top">
        <form action="" method="post" class="border border-success form-inline">
          <div class="col-sm-10 offset-sm-1">
            <div class="col-12 text-center text-dark"><br>
              <h3>Calculate The Grade</h3><br>
            </div>
            <div class="form-group">
              <label for="Physics">Physics</label><br>
              <input type="number" name="Physics" id="Physics" class="form-control"><br>
            </div>
            <div class="form-group">
              <label for="Chemistry">Chemistry</label><br>
              <input type="number" name="Chemistry" id="Chemistry" class="form-control"><br>
            </div>
            <div class="form-group">
              <label for="Biology">Biology</label><br>
              <input type="number" name="Biology" id="Biology" class="form-control"><br>
            </div>
            <div class="form-group">
              <label for="Mathematics">Mathematics</label><br>
              <input type="number" name="Mathematics" id="Mathematics" class="form-control"><br>
            </div>
            <div class="form-group">
              <label for="Computer">Computer</label><br>
              <input type="number" name="Computer" id="Computer" class="form-control"><br>
            </div>
            <br><button type="submit" class="btn btn-success ">Calculate</button><br><br>
            <?php
            $sum = 0;
            if($_POST){
                if(in_array('', $_POST)){
                    echo'Please Enter All Grades !<br><br>';
                }elseif(max($_POST)>100){
                    echo'Note: The max grade of each <br>subject shouldn\'t exceeds 100 <br> Change it Please !<br><br>';
                } else{
                    $sum = $_POST['Physics']+$_POST['Chemistry']+$_POST['Biology']+$_POST['Mathematics']+$_POST['Computer'];
                    $Percentage =  ($sum / 500) * 100 ;
                    if($Percentage >= 90){
                        $grade = 'A';
                    } elseif($Percentage >= 80){
                        $grade = 'B';
                    }elseif($Percentage >= 70){
                        $grade = 'C';
                    }elseif($Percentage >= 60){
                        $grade = 'D';
                    }elseif($Percentage >= 40){
                        $grade = 'E';
                    }else{
                        $grade = 'F';
                    }
                    echo "Total Percentage is {$Percentage}%<br>";
                    echo "Grade is {$grade}<br><br>";
                }
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