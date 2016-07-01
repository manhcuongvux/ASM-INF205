<?php
class connect {
    var $db = null;
    function __construct() {
        $dsn = "mysql:host=mysql.hostinger.vn;dbname=u227410870_data2";
        $user = 'u227410870_user1';
        $pass = 'vmc86899';
        $this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    function getList($select){
        $results = $this ->db-> query($select);
        return $results;
    }

    function getInstance($select){
        $results = $this ->db-> query($select);
        $result = $results -> fetch();
        return $result;
    }

    function exec($query){
        $result = $this ->db-> exec($query);
        return $result;
    }

}
?>
