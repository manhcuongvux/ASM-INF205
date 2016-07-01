<?php
class product {
    var $proid;
    var $proname;
    var $img;
    var $price;
    var $intro;
    var $typeid;
    var $idbrand;

    public function __construct() {
        if(func_num_args()==7){
            $this -> proid =  func_get_arg(0);
            $this -> proname = func_get_arg(1);
            $this -> img = func_get_arg(2);
            $this -> price = func_get_arg(3);
            $this -> intro = func_get_arg(4);
            $this -> typeid = func_get_arg(5);
            $this -> idbrand = func_get_arg(6);
        }
     }
  
  
    // Lấy danh sách sản phẩm từ database
     function getList()
    {
         $db = new connect();
         $select = "select * from products a  inner join producttype b on a.TypeId =b.TypeId inner join brandproduct c on a.IdBrand = c.IdBrand order by a.ProductID";
         $result = $db->getList($select);
         return $result->fetchAll();
     }
     
     function selectProductByID($select){
        $db = new connect();
        $select ="select * from products where ProductID = '$select'";
        $result = $db ->getInstance($select);
        return $result;
    }

     // Lấy thông tin chi tiết sản phẩm theo ID
     function getProductById($proid)
     {
         $db = new connect();
         $select = "select * from products a inner join producttype b on a.TypeId =b.TypeId inner join brandproduct c on a.IdBrand = c.IdBrand where ProductID=$proid";
         $result=$db->getInstance($select);
         return $result;
     }
     

     // Lấy sản phẩm mới nhất.
     function getProductNew(){
        $db = new connect();
        $select = "select * from products order by ProductID desc limit 0,8";
        $result = $db->getList($select);
        return $result->fetchAll();
     }
     // Lấy sản phẩm xem nhiều nhất
     function getFeatureProduct(){
        $db = new connect();
        $select = "select * from products order by Views desc limit 0,3";
        $result = $db->getList($select);
        return $result->fetchAll();
     }

    //Thêm sản phẩm mới
     function Addpro()
     {
            $db = new connect();
            echo $query = "INSERT INTO products VALUES ('$this->proid', '$this->proname', '$this->img', '$this->price',
                '$this->intro', '$this->typeid', '$this->idbrand', '')";
            $db->exec($query);
     }
     //Update sản phẩm
     function Editpro($proname, $img, $price, $intro, $typeid, $idbrand, $proid)
     {
         $db = new connect();
         $query = "UPDATE products SET ProductName='$proname', ProductImage='$img',
         ProductPrice='$price', ProductIntro='$intro', TypeId='$typeid', IdBrand='$idbrand' WHERE ProductID='$proid'";
         $db->exec($query);
     }
     //Xoá sản phẩm
     function Deletepro()
         {
            $db = new connect();
            $query = "DELETE from products where ProductID = $this->proid";
            $db->exec($query);
         }
    //Lấy danh mục sản phẩm
    function getProductType()
    {
        $db = new connect();
        $select = "select * from producttype";
        $result = $db->getList($select);
        return $result->fetchAll();
    }
    // Lấy danh mục sản phẩm theo  thương hiệu
    function getBrand(){
        $db = new connect();
        $query = "select * from brandproduct";
        $result = $db->getList($query);
        return $result->fetchAll();
    }
    // Lấy danh mục sản phẩm theo thương  hiệu và theo loại
    function getProducByBrand($idbrand,$typeId){
        $db = new connect();
        $query = "select * from products where IdBrand = '$idbrand' and TypeId = $typeId";
        $result = $db->getList($query);
        return $result->fetchAll();
    }

}

?>
