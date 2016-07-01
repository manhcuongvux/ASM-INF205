<?php
class hoadon {
    public function __construct() {
        
    }
    public function CreateHD($UserID){
        $db= new connect();
        $date = new DateTime("now");
        $dateCreate = $date->format("Y-m-d");
        $strQuery = "INSERT INTO `orders` values('NULL','$dateCreate','0','$UserID')";
        $result = $db->exec($strQuery);
        $query = "SELECT `OrderID` from `orders` order by `OrderID` DESC limit 1";
        $int = $db->getInstance($query);
        return $int[0];
    }
    public function insertChiTietHD($OrderID,$ProductID,$ProductPrice,$Quantity,$Totals){
        $db = new connect();
        $strQuery = "INSERT INTO `orderdetails` values ('$OrderID','$ProductID','$ProductPrice','$Quantity','$Totals')";
        $result = $db->exec($strQuery);
    }
     public function updateTongHD($OrderID,$Total){
        $db = new connect();
        $strQuery = "UPDATE `orders` SET `OrderTotal` = $Total WHERE `OrderID` = $OrderID";
        $result = $db->exec($strQuery);
    }
    public function getListHD($OrderID){
        $db= new connect();
        $select = "SELECT `OrderID`,`OrderDate`,`OrderTotal`,k.`UserID`, k.`FullName` from `orders` as h inner join `Users` as k on h.`UserID` = k.`UserID` WHERE `OrderID`= $OrderID";
        $result = $db->getInstance($select);
        return $result;
    }
    public function getlistChiTietHD($OrderID){
        $db= new connect();
        $select= "select s.`ProductID`, `ProductName`, `ProductImage` , c.`Quantity` , s.`ProductPrice`, `Totals`  from `orderdetails` as c inner join `products` as s on c.`ProductID`=s.`ProductID` WHERE OrderID = $OrderID";
        $result = $db->getList($select);
        return $result->fetchAll();
    }
}