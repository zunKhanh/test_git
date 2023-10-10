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
    $ngay="";
    $thang="";
    $nam="";
    $chuoi="";
    if(isset($_POST['tinh']))
    {
        $ngay=isset($_POST['ngay'])? (float) trim($_POST['ngay']):"";
        $thang=isset($_POST['thang'])? (float) trim($_POST['thang']):"";
        $nam=isset($_POST['nam'])? (float) trim($_POST['nam']):"";
        $ngay_ht=date('d');
        $thang_ht=date('m');
        $nam_ht=date('Y');
        $gio_ht=date('G');
        $phut_ht=date('i');
        $giay_ht=date('s');
        $n1=mktime($gio_ht,$phut_ht,$giay_ht,$thang_ht,$ngay_ht,$nam_ht);
        
        $n2=mktime($gio_ht,$phut_ht,$giay_ht,$thang,$ngay,$nam_ht);
        //tuoi
        $lon=($n1>$n2)? $n1 : $n2;
        
        $nho=($n1<$n2)? $n1 : $n2;
        //tinh khoang cach giay
        $diff_seconds=$lon-$nho;
        //tinh khoang cach ngay
        $diff_days=floor($diff_seconds/86400);
        if($diff_days>0)
        {
            if($n2==$nho)
                {
                    $chuoi= "ngay sinh nhat cua ban da qua $diff_days ngay";
                }
            else
                {
                    $chuoi="con $diff_days ngay nua la den ngay sinh nhat cua ba";
                }
        }
        elseif ($diff_days==0) {
                    $chuoi="chuc mung sinh nhat ban ";
        }
        $tuoi=$nam_ht-$nam;
        $chuoi="nam nay ban $tuoi tuoi " .$chuoi;
    }
    
    ?>
      <form action="" method="post">
        <div class="container">
            <div class="row">
                .<div class="card">
                    <div class="card-header text-center text-white bg-danger">
                        Ngay Sinh
                    </div>
                    <div class="card-body " >
                      <p> Ngay / thang / nam <input name="ngay" size="2" type="text" value="<?php echo $ngay; ?>"> / <input  name="thang" size="2"  type="text" value="<?php echo $thang; ?>"> / <input size="2" name="nam" type="text" value="<?php echo $nam; ?>"> 
                      <button name="tinh" type="submit">Thong Bao</button> </p>
                    </div>
                    <div class="card-footer text-muted">
                        <span> <?php echo $chuoi; ?></span>
                    </div>
                </div>
            </div>
        </div>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS --><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>