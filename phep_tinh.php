<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>Phep toan</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <style type="text/css">
    .style1 {
      bbbb
      font-size: large;
      font-weight: bold;
      color: #990000;
    }

    .style2 {
      font-family: Arial, Helvetica, sans-serif
    }

    .style9 {
      font-size: x-large
    }

    .style12 {
      font-family: MERcuriusScript, MYstical, NUeva;
      font-size: 20px;
      color: #CA4B00;
    }

    .style20 {
      font-family: Verdana, Arial, Helvetica, sans-serif;
      color: #2A0000;
      font-size: smaller;
      font-weight: bold;
    }

    .style21 {
      font-family: Verdana, Arial, Helvetica, sans-serif;
      font-size: smaller;
    }
  </style>
  <?php
  class phepTinh
  {
    public function __construct($a, $b)
    {
      $this->a = $a;
      $this->b = $b;
    }
    public function setA($a)
    {
      $this->a = $a;
    }
    public function setB($b)
    {
      $this->b = $b;
    }
    public function getA()
    {
      return $this->a;
    }
    public function getB()
    {
      return $this->b;
    }
    public function tinhTong()
    {
      return $this->getA() + $this->getB();
    }
    public function tinhHieu()
    {
      return $this->getA() - $this->getB();
    }
    public function tinhTich()
    {
      return $this->getA() * $this->getB();
    }
    public function tinhThuong()
    {
      return $this->getA() / $this->getB();
    }

  }
  ?>
</head>

<body>
  <?php
  $x = 0;
  $y = 0;
  $pt = ' ';
  $kq = 0;
  if (isset($_REQUEST["so_thu_1"]) && isset($_REQUEST["so_thu_2"])) {
    $x = $_REQUEST["so_thu_1"];
    $y = $_REQUEST["so_thu_2"];
    $pt = $_REQUEST["phep_tinh"];
    $obj = new phepTinh($x, $y);
    switch ($pt) {
      case '+':
        $kq = $x . "+" . $y . "= " . $obj->tinhTong();
        break;
      case '-':
        $kq = $x . "-" . $y . "= " . $obj->tinhHieu();
        break;
      case '*':
        $kq = $x . "*" . $y . "= " . $obj->tinhTich();
        break;
      case '/':
        $kq = $x . "/" . $y . "= " . $obj->tinhThuong();
        break;



    }
  }

  ?>
  <form name="form1" method="REQUEST" action="phep_tinh.php">
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFEBCA">
      <tr bgcolor="#FFCC66">
        <td colspan="3" align="center" bgcolor="#FFCC66" class="style1 style12">PHÉP TÍNH</td>
      </tr>
      <tr>
        <td width="98"><span class="style20">&nbsp;&nbsp;Số thứ nhất:</span></td>
        <td width="202" colspan="2"><span class="style2">
            <input name="so_thu_1" type="text" id="so_thu_12" size="20">
          </span></td>
      </tr>
      <tr>
        <td><span class="style20">&nbsp;&nbsp;Số thứ hai: </span></td>
        <td colspan="2"><span class="style2">
            <input name="so_thu_2" type="text" id="so_thu_22" size="20">
          </span></td>
      </tr>
      <tr align="center">
        <td height="35" colspan="3">
          <span class="style21">
            <input name="phep_tinh" type="radio" value="+" <?php if ($pt == '+')
              echo "checked='checked'"; ?>>
            Cộng
            <input type="radio" name="phep_tinh" value="-" <?php if ($pt == '-')
              echo "checked='checked'"; ?>>
            Trừ
            <input type="radio" name="phep_tinh" value="*" <?php if ($pt == '*')
              echo "checked='checked'"; ?>>
            Nhân
            <input type="radio" name="phep_tinh" value="/" <?php if ($pt == '/')
              echo "checked='checked'"; ?>>
            Chia&nbsp; </span>
          <input type="submit" name="Submit" value="Tính">
      </tr>
    </table>
  </form>


  <table width="400" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFCC">
    <tr bgcolor="#FFCC66">
      <td align="center" class="style12">KẾT QUẢ</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#FFEBCA">
        <?php echo $kq ?>
      </td>
    </tr>
  </table>

</body>

</html>