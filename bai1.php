<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tagas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<?php
 $chuoi1=array();
 $chuoi2=array();
 if(isset($_POST['tinh'])){
    $chuoi1=isset($_POST['chuoi1'])? (string) trim($_POST['chuoi1']): "";
    $chuoi2=isset($_POST['chuoi2'])? (string) trim($_POST['chuoi2']): "";
        $kq=strcasecmp($chuoi1,$chuoi2);
    if($kq==0)
        {
            $kq="2 chuỗi giống nhau";
            $len1=strlen($chuoi1)." ký tự chuỗi 1";
            $len2=strlen($chuoi2)." ký tự chuỗi 2";
        }
    elseif($kq>0)
        {
            $kq="chuỗi 1 dài hơn chuỗi 2";  
            $len1=strlen($chuoi1)." ký tự chuỗi 1";
            $len2=strlen($chuoi2)." ký tự chuỗi 2";
        }
    else 
        $kq="chuỗi 1 ngắn hơn chuỗi 2";
        $len1=strlen($chuoi1)." ký tự chuỗi 1";
        $len2=strlen($chuoi2)." ký tự chuỗi 2";
 }
?>
      <form action="" method="post">
        <div class="container">
            <div class="row offset-md-3">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center text-white bg-danger">
                            So Sánh Chuỗi
                        </div>
                        <div class="card-body">
                            <p> chuỗi thứ 1 <input name="chuoi1" type="text"> </p>  <br>
                            <p> chuỗi thứ 2 <input name="chuoi2" type="text"></p> 

                        </div>
                        <div class="card-footer text-center text-muted ">
                           <button class="btn btn-primary" type="submit" name="tinh" style="margin-bottom:10px" >So sánh 2 chuỗi</button> <br>
                        <input class="text-center text-muted " type="text" readonly="true" value="<?php echo $kq ; ?>">
                        <p> <?php echo $len1; ?></p>
                        <p> <?php echo $len2; ?></p>
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