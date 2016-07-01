<?php
class prodetail {
    var $proid;
    var $pin;
    var $hdh;
    var $ram;
    var $memory;
    var $dopg;
    var $manhinh;
    var $cam;
    var $nfc;
    var $wifi;
    var $net;

    public function __construct() {
        if(func_num_args()==11){
            $this -> proid =  func_get_arg(0);
            $this -> pin = func_get_arg(1);
            $this -> hdh = func_get_arg(2);
            $this -> ram = func_get_arg(3);
            $this -> memory = func_get_arg(4);
            $this -> dopg = func_get_arg(5);
            $this -> manhinh = func_get_arg(6);
            $this -> cam = func_get_arg(7);
            $this -> nfc = func_get_arg(8);
            $this -> wifi = func_get_arg(9);
            $this -> net = func_get_arg(10);
        }
     }
  
  
    // Lấy danh sách sản phẩm từ database
     function getList()
    {
         $db = new connect();
         $select = "select * from products a inner join productdetail b on a.ProductID=b.ProductID";
         $result = $db->getList($select);
         return $result->fetchAll();
     }
     

     // Lấy thông tin chi tiết sản phẩm theo ID
     function getProdetailById($proid)
     {
         $db = new connect();
         $select = "select * from products a inner join productdetail b on a.ProductID=b.ProductID where a.ProductID=$proid";
         $result=$db->getInstance($select);
         return $result;
     }
     
    //Thêm sản phẩm mới
     function Adddetail()
     {
            $db = new connect();
            echo $query = "INSERT INTO productdetail VALUES ('$this->proid', '$this->pin', '$this->hdh', '$this->ram', '$this->memory',
                '$this->dopg', '$this->manhinh', '$this->cam', '$this->nfc', '$this->wifi', '$this->net')";
            $db->exec($query);
     }
     //Update sản phẩm
     function Editdetail($pin, $hdh, $ram, $memory, $dopg, $manhinh, $cam, $nfc, $wifi, $net, $proid)
     {
         $db = new connect();
         $query = "UPDATE productdetail SET BatteryCapacity='$pin', Os='$hdh', Ram='$ram',
         InterialMemorize='$memory', Resolution='$dopg', ScreenSize='$manhinh', Camera='$cam',
         NFC='$nfc', Wifi='$wifi', Networks='$net' WHERE ProductID='$proid'";
         $db->exec($query);
     }
     //Xoá sản phẩm
     function Deletedetail()
         {
            $db = new connect();
            $query = "DELETE from productdetail where ProductID = $this->proid";
            $db->exec($query);
         }
}

?>
