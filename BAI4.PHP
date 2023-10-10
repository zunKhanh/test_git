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
<?php
 if(isset($_POST['in'])){
    $chuoi=isset($_POST['chuoi'])? (string) trim($_POST['chuoi']): "";
    $a=isset($_POST['a'])? (string) trim($_POST['a']): "";
    $in='';
    $kq=strpos($chuoi,$a,0);

    if($kq>-1){
        $kq="da tim thay tu " . '$a' . "o vi tri ".$kq;
    }else{
        $kq="ko tim thay ket qua";
    }
 }
?>
      <form action="" method="post">
        <div class="container">
            <div class="row offset-md-3">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center text-white bg-danger">
                           tim tu trong chuoi
                        </div>
                        <div class="card-body">
                            <p> chuoi <input name="chuoi" type="text"> </p>  <br>
                            <p> tu can tim <input name="a" type="text"></p> 
                        </div>
                        <div class="card-footer text-center text-muted ">
                           <button class="btn btn-primary" type="submit" name="in" style="margin-bottom:10px" >tim kiem</button> <br>
                        <input class="text-center text-muted " type="text" readonly="true" value="<?php echo $kq ; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>