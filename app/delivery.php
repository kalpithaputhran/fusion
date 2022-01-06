<?php
/**
 * Created by PhpStorm.
 * User: your name
 * Date: todays date
 * Time: todays time
 */

class Staff extends Main
{
	protected $id;

	public function __construct()
	{
		if (isset($_SESSION['staff'])) {
		$this->id = $_SESSION['staff'];
	}
		parent::__construct();
	}

	public function loginStaff($name,$password)
	{
		try{
			$stmnt=$this->conn->prepare("select staff_id,batch from staff where staffname=:staffname AND password=:password and status='Active'");
			$stmnt->bindParam("staffname", $name,PDO::PARAM_STR) ;
			$stmnt->bindParam("password", $password,PDO::PARAM_STR) ;
			$stmnt->execute();
			$count=$stmnt->rowCount();
			if($count){

			$res=$stmnt->fetch(PDO::FETCH_ASSOC);
			$id = $res['staff_id'];
			$_SESSION['staff']= $id;
			$_SESSION['cid']= $res['cid'];
				return true;
			}else{
				return false;
			}

		}catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}

	}


	public function cud($res,$message){
		try {
			$stmt = $this->conn->prepare($res);
			$stmt->execute();

			$_SESSION['success_message'] = "Successfully ".$message;
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Sorry  still not ".$message;
			return false;
		}
	}

	public function Rcud($res){
		try {
			$stmt = $this->conn->prepare($res);
			$stmt->execute();
			$id = $this->conn->lastInsertId();
			//$_SESSION['success_message'] = "Successfully ".$message;
			return $id;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Sorry  still not ".$message;
			return false;
		}
	}
	
	public function ret($stmt){
		$stmt = $this->conn->prepare($stmt);
		$stmt->execute();
		return $stmt;	
	}


public function getstudent(){
		  try {
		   $stmt = $this->conn->prepare("SELECT * FROM student");
		   $stmt->execute();
		   return $stmt;
		} catch (PDOException $e) {
		   echo $e->getMessage();
		   return false;
		}
	}



	public function get_payroll_det(){
		try {
			$stmt = $this->conn->prepare("SELECT * FROM payroll where staff_id=:staff_id");
			$stmt->bindParam("staff_id", $this->id) ;
			$stmt->execute();
			return $stmt;	
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}



public function getCoursedet($id){
		try {
			$stmt = $this->conn->prepare("SELECT c.coursename as cname, 
				f.courseamt as camt, sum(f.amountpaid) as pamt
			 FROM fees f 
				right join course c on c.cid=f.course_id
			 WHERE f.student_id=:student_id");
			$stmt->execute(array(':student_id'=>$id));
			$editRow = $stmt->fetch(PDO::FETCH_ASSOC);
			return $editRow;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}






	



	}
	
	




?>