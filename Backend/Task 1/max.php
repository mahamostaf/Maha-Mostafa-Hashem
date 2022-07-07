
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
        <form action="" method="post" class="border border-success">
          <div class="col-sm-10 offset-sm-1">
            <div class="col-12 text-center text-dark"><br>
              <h3>Calculate Max and Min </h3><br>
            </div>
            <div class="form-group">
              <label for="num1">Number 1</label><br>
              <input type="number" name="num1" id="num1" class="form-control"><br>
            </div>
            <div class="form-group">
              <label for="num2">Number 2</label><br>
              <input type="number" name="num2" id="num2" class="form-control"><br>
            </div>
            <div class="form-group">
              <label for="num3">Number 3</label><br>
              <input type="number" name="num3" id="num3" class="form-control"><br>
            </div>
            <button type="submit" class="btn btn-success ">Calculate</button><br><br>
            <?php 
              if ($_POST){
                if(in_array('',$_POST)){
                  echo 'Please Fill All Input Fields <br><br>' ;
                  exit; 
                } 
                
                
                if ($_POST['num1'] > $_POST['num2'] && $_POST['num1'] > $_POST['num3']){
                  $max = $_POST['num1'];
                } elseif ($_POST['num2'] > $_POST['num1'] && $_POST['num2'] > $_POST['num3']){
                  $max = $_POST['num2'];
                } else {
                  $max = $_POST['num3'];
                }
 
                if ($_POST['num1'] < $_POST['num2'] && $_POST['num1'] < $_POST['num3']){
                  $min = $_POST['num1'];
                } elseif ($_POST['num2'] < $_POST['num1'] && $_POST['num2'] < $_POST['num3']){
                  $min = $_POST['num2'];
                } elseif ($_POST['num3'] < $_POST['num1'] && $_POST['num3'] < $_POST['num2']){
                  $min = $_POST['num3'];
                } 

                echo 'MAX is '.$max.'<br>' ;
                echo 'MIX is '.$min.'<br><br>' ;

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