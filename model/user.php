<?php
class user {
    var $userid;
    var $username;
    var $pass;
    var $fullname;
    var $email;
    var $address;
    var $phone;
    
    
    function __construct() {
        if(func_num_args()==7){
            $this -> userid =  func_get_arg(0);
            $this -> username = func_get_arg(1);
            $this -> pass = func_get_arg(2);
            $this -> fullname = func_get_arg(3);
            $this -> email = func_get_arg(4);
            $this -> address = func_get_arg(5);
            $this -> phone = func_get_arg(6);
        }
    }

    public function getList()
    {
    	$db = new connect();
    	$query = "select * from users ";
    	$result = $db->getList($query);
    	return $result;
    }

    public function getUserById($userid){
        $db = new connect();
        $query = "SELECT * FROM users WHERE UserID = '$userid'";
        $kq = $db ->getInstance($query);
        return $kq;
    }
    
     public function register(){
        $db = new connect();
        $query = "INSERT INTO users VALUES('$this->userid', n'$this->username', '$this->pass',
        '$this->fullname', '$this->email', '$this->address', '$this->phone')";
        $db->exec($query);
    }
    
    
    public function edituser($username, $pass, $fullname, $email, $address, $phone, $userid){
        $db = new connect();
        $query = "UPDATE users SET Username='$username', Password='$pass', FullName='$fullname',
        Email='$email', Address='$address', Phone='$phone' WHERE UserID='$userid'";
        $db->exec($query);
    }
    
    public function deleteuser(){
        $db = new connect();
        $query = "DELETE FROM users WHERE UserID='$this->userid'";
        $db->exec($query);
    }
    
    public function login($username,$password){
    	$db = new connect();
    	$query = "select * from users where Username = '$username'";
    	$result = $db->getInstance($query);
    	$total[] =0 ;
    	if($result['Username'] == $username && $password == $result['Password']){
    		$total[0] = 1;
    		$total[1] = $username;
    		return $total;
    	}else{
    		return 0;
    	}
    }

}

?>
