<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Quan ly nhan vien</title>
  <style type="text/css">
    .style2 {
      font-size: 20px;
      font-family: LucidaHandwriting, LucidaCalligraphy;
      font-weight: bold;
      color: #CA4B00;
    }

    .style17 {
      font-family: Verdana, Arial, Helvetica, sans-serif;
      font-size: smaller;
    }

    .style18 {
      font-family: Verdana, Arial, Helvetica, sans-serif
    }
  </style>

  <?php

  ?>
</head>
<?php
class nhan_vien
{ aaaa
  public $ho_ten, $so_con, $ngay_sinh, $ngay_vao, $gioi_tinh, $hsl;
  const lcb = 45000;
  public function __construct($ho_ten, $so_con, $ngay_sinh, $ngay_vao, $gioi_tinh, $hsl)
  {
    $this->ho_ten = $ho_ten;
    $this->so_con = $so_con;
    $this->ngay_sinh = $ngay_sinh;
    $this->ngay_vao = $ngay_vao;
    $this->gioi_tinh = $gioi_tinh;
    $this->hsl = $hsl;
  }
  public function setho_ten($ho_ten)
  {
    $this->ho_ten = $ho_ten;
  }
  public function getho_ten()
  {
    return $this->ho_ten;
  }

  public function setso_con($so_con)
  {
    $this->so_con = $so_con;
  }
  public function getso_con()
  {
    return $this->so_con;
  }

  public function setngay_sinh($ngay_sinh)
  {
    $this->ngay_sinh = $ngay_sinh;
  }
  public function getngay_sinh()
  {
    return $this->ngay_sinh;
  }

  public function setngay_vao($ngay_vao)
  {
    $this->ngay_vao = $ngay_vao;
  }
  public function getngay_vao()
  {
    return $this->ngay_vao;
  }

  public function setgioi_tinh($gioi_tinh)
  {
    $this->gioi_tinh = $gioi_tinh;
  }
  public function getgioi_tinh()
  {
    return $this->gioi_tinh;
  }

  public function sethsl($hsl)
  {
    $this->hsl = $hsl;
  }
  public function gethsl()
  {
    return $this->hsl;
  }


  public function tro_cap()
  {
    return $this->so_con * 100000;
  }

  public function tien_luong()
  {
    return self::lcb * $this->hsl;

  }
}

class nv_vp extends nhan_vien
{
  public $vang;
  const dinh_muc_vang = 2;
  const gia_phat = 25000;
  public function __construct($ho_ten, $so_con, $ngay_sinh, $ngay_vao, $gioi_tinh, $hsl, $vang)
  {
    $this->ho_ten = $ho_ten;
    $this->so_con = $so_con;
    $this->ngay_sinh = $ngay_sinh;
    $this->ngay_vao = $ngay_vao;
    $this->gioi_tinh = $gioi_tinh;
    $this->hsl = $hsl;
    $this->vang = $vang;
  }

  public function setvang($vang)
  {
    $this->vang = $vang;
  }

  public function getvang()
  {
    return $this->vang;
  }

  public function tien_phat()
  {
    if ($this->getvang() > self::dinh_muc_vang) {
      return ($this->getvang() - self::dinh_muc_vang) * 25000;
    } else {
      return 0;
    }
  }

  public function tro_cap()
  {
    if ($this->getgioi_tinh() == "1") {
      return parent::tro_cap() * 1.2;
    } else {
      return parent::tro_cap();
    }
  }

  public function tien_luong()
  {
    return parent::tien_luong() - $this->tien_phat();
  }

}

class nv_sx extends nhan_vien
{
  public $sosp, $tangca;
  const DMSP = 100;
  const DONGIA = 12000;
  public function __construct($ho_ten, $so_con, $ngay_sinh, $ngay_vao, $gioi_tinh, $hsl, $sosp, $tangca)
  {
    $this->ho_ten = $ho_ten;
    $this->so_con = $so_con;
    $this->ngay_sinh = $ngay_sinh;
    $this->ngay_vao = $ngay_vao;
    $this->gioi_tinh = $gioi_tinh;
    $this->hsl = $hsl;
    $this->sosp = $sosp;
    $this->tangca = $tangca;
  }

  public function setsosp($sosp)
  {
    $this->sosp = $sosp;
  }
  public function settangca($tangca)
  {
    $this->tangca = $tangca;
  }
  public function getsosp()
  {
    return $this->sosp;
  }
  public function gettangca()
  {
    return $this->tangca;
  }

  public function tien_thuong()
  {
    if ($this->getsosp() > self::DMSP) {
      return ($this->getsosp() - self::DMSP) * self::DONGIA * 0.05;
    } else {
      return $this->getsosp() * self::DONGIA * 0.01;
    }
  }

  //phuong thuc tro tro_cap\
  public function tro_cap()
  {
    if ($this->gettangca() == "1") {
      return parent::tro_cap() + 200000;
    } else {
      return parent::tro_cap();
    }
  }

  public function tien_luong()
  {
    return $this->getsosp() * self::DONGIA + $this->tien_thuong();
  }
}
?>

<?php
$ho_ten = '';
$so_con = 0;
$ngay_sinh = '';
$ngay_vao_lam = ' ';
$gioi_tinh = '';
$hsl = 0;
$loai = '';
$vang = 0;
$sp = 0;
$tang_ca = '';
$thuc_linh = 0;
$tien_luong = 0;
$tro_cap = 0;

if (isset($_POST['ho_ten'])) {
  $ho_ten = $_POST['ho_ten'];
$so_con = intval($_POST['so_con']);
$ngay_sinh = $_POST['ngay_sinh'];
$ngay_vao_lam = $_POST['ngay_vao'];
$gioi_tinh = $_POST['gioi_tinh'];
$hsl = $_POST['hsl'];
$loai = $_POST['loai'];
$vang = $_POST['vang'];
$sp = intval($_POST['sp']);
$tang_ca = $_POST['tang_ca'];

if ($loai=="1") {
  $vp=new nv_vp($ho_ten, $so_con, $ngay_sinh, $ngay_vao_lam, $gioi_tinh, $hsl, $vang);
  $tien_luong=number_format($vp->tien_luong());
  $tro_cap=number_format($vp->tro_cap());
  $thuc_linh=number_format(floatval($vp->tien_luong()+$vp->tro_cap()));
}
else
{
  $sx=new nv_sx($ho_ten, $so_con, $ngay_sinh, $ngay_vao_lam, $gioi_tinh, $hsl, $sosp, $tangca);
  $tien_luong=number_format($sx->tien_luong());
  $tro_cap=number_format($sx->tien_thuong());
  $thuc_linh=number_format(floatval($sx->tien_luong()+$sx->tien_thuong()));
}

}

?>

<body>
  <form id="form1" name="form1" method="post" action="  nhanvien.php">
    <table width="70%" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
      <tr>
        <td colspan="4" align="center" bgcolor="#FFCC66"><span class="style2">QUẢN LÝ NHÂN VIÊN</span></td>
      </tr>
      <tr>
        <td width="18%"><span class="style17">Họ và tên: </span></td>
        <td width="30%"><span class="style17">
            <label>
              <input name="ho_ten" type="text" id="ho_ten" size="25" value="<?php echo $ho_ten; ?>" />
            </label>
          </span></td>
        <td width="24%"><span class="style17">Số con: </span></td>
        <td width="28%"><span class="style17">
            <label>
              <input name="so_con" type="text" id="so_con" size="5" value="<?php echo $so_con; ?>" />
            </label>
          </span></td>
      </tr>
      <tr>
        <td valign="middle"><span class="style17">Ngày sinh: </span></td>
        <td><span class="style17">
            <label>
              <input name="ngay_sinh" type="text" id="ngay_sinh" size="20" value="<?php echo $ngay_sinh; ?>" />
            </label>
          </span></td>
        <td><span class="style17">Ngày vào làm: </span></td>
        <td><span class="style17">
            <label>
              <input name="ngay_vao" type="text" id="ngay_vao" size="20" value="<?php echo $ngay_vao_lam; ?>" />
            </label>
          </span></td>
      </tr>
      <tr>
        <td><span class="style17">Giới tính: </span></td>
        <td valign="middle">
          <p class="style17">
            <label>
              <input name="gioi_tinh" type="radio" value="0" <?php if ($gioi_tinh == '0')
                echo "checked='checked'"; ?> />
              Nam</label>
            <label>
              <input type="radio" name="gioi_tinh" value="1" <?php if ($gioi_tinh == '1')
                echo "checked='checked'"; ?> />
              Nữ</label>
          </p>
          <span class="style17">
            <label></label>
          </span>
        </td>
        <td><span class="style17">Hệ số lương: </span></td>
        <td><span class="style17">
            <label>
              <input name="hsl" type="text" id="hsl" size="5" value="<?php echo $hsl; ?>" />
            </label>
          </span></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFE1"><span class="style17">Loại nhân viên: </span></td>
        <td bgcolor="#FFFFE1">

          <span class="style17">
            <input type="radio" name="loai" value="1" <?php if ($loai == '1')
              echo "checked='checked'"; ?> />
            Văn phòng </span>
        </td>
        <td colspan="2" bgcolor="#FFFFE1">
          <span class="style17">
            <input type="radio" name="loai" value="0" <?php if ($loai == '0')
              echo "checked='checked'"; ?> />
            Sản xuất</span>
        </td>
      </tr>
      <tr>
        <td bgcolor="#FFFFE1"></td>
        <td bgcolor="#FFFFE1" class="style17">Số ngày vắng :
          <input name="vang" type="text" id="vang" size="5" value="<?php echo $vang; ?>" />
          </div>
          </div>
          </label>
        </td>
        <td colspan="2" bgcolor="#FFFFE1" class="style17">
          Số sản phẩm:
          <input name="sp" type="text" id="sp" size="5" value="<?php echo $sp; ?>" />
          Tăng ca:
          <label>
            <input name="tang_ca" type="radio" value="1" />
            Có</label>
          <label>
            <input type="radio" name="tang_ca" value="0" />
            Không</label>
        </td>
      </tr>
      <tr>
        <td><span class="style17">Tiền lương: </span></td>
        <td><span class="style17">
            <label>
              <input name="luong" type="text" id="luong" value="<?php echo $tien_luong; ?>" size="20" readonly="true" />
            </label>
          </span></td>
        <td><span class="style17">Trợ cấp: </span></td>
        <td><span class="style17">
            <label>
              <input name="tro_cap" type="text" id="tro_cap" value="<?php echo $tro_cap; ?>" size="20"
                readonly="true" />
            </label>
          </span></td>
      </tr>
      <tr>
        <td colspan="4" align="center" class="style17">Thực lĩnh:
          <label>
            <input name="thuc_linh" type="text" id="thuc_linh" readonly="true" value="<?php echo $thuc_linh; ?>" />
          </label>
        </td>
      </tr>
      <tr>
        <td height="25" colspan="4" align="center" bgcolor="#FFCC66">
          <input type="submit" name="Submit" value="Tính lương" />
        </td>
      </tr>
    </table>
  </form>
</body>

</html>