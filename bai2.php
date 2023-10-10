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
$ho="";
$ten="";
$tendem="";
 if(isset($_POST['tinh'])){
    $hovaten=isset($_POST["hovaten"]) ?(string) trim($_POST["hovaten"]): " ";
    $mang=explode(" ",$hovaten);
    $n=count($mang);
    $ho=$mang[0];
    $ten=$mang[$n-1];
    for($i=1;$i<$n-1;$i++)
    {
        $tendem=$tendem.$mang[$i]."";
    }

 }
?>
      <form action="" method="post">
        <div class="container">
            <div class="row offset-md-3">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center text-white bg-primary">
                            Tách Họ Và Tên
                        </div>
                        <div class="card-body">
                            <p> Họ và tên:<input style="margin-left:50px;" name="hovaten" type="text"> </p>
                            <p> Họ :      <input style="margin-left:90px;" name="ho" value="<?php echo $ho; ?>"  readonly="true"  type="text"></p> 
                            <p> Tên Đệm : <input style="margin-left:50px;" name="tendem" value="<?php echo $tendem; ?>"   readonly="true" type="text"></p> 
                            <p> Tên :     <input style="margin-left:90px;" name="ten"  value="<?php echo $ten; ?>"  readonly="true"  type="text"></p> 

                        </div>
                        <div class="card-footer text-center text-muted ">
                           <button class="btn btn-primary" type="submit" name="tinh" style="margin-bottom:10px" >Tách họ và tên</button> <br>
                      
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>