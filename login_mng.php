
<?php
	  class Loginmng{

	  
	 function  _construct(){
		 	session_start();
		  $servername ='13.231.233.64';
		$username = 'project';
		 $password = '123456';
		 $dbname = 'CS281';
	  }


   function _desruct(){

	 }

	 function chkConnect(){
				$conn = new mysqli('13.231.233.64','project','123456','CS281');

		 if($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);
			 return false;
		 }
		 
		 return true;
	 }
		  
		  
		  function getInfo(){
			  $id = $_REQUEST['cid'];
			  $pass = $_REQUEST['cpassword'];

			  $sql = "SELECT * FROM custom WHERE c_id = '".$id."' AND c_pwd = '".$pass."'";
		  }
	  }

	  ?>
