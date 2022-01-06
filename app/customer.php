<?php
/**
 * Created by PhpStorm.
 * User: your name
 * Date: todays date
 * Time: todays time
 */

class Student extends Main
{
	protected $id;

	public function __construct()
	{
		if (isset($_SESSION['student'])) {
		$this->id = $_SESSION['student'];
	}
		parent::__construct();
	}

	public function loginStudent($name,$password)
	{
		try{
			$stmnt=$this->conn->prepare("select student_id,cid from student where studentname=:studentname AND password=:password");
			$stmnt->bindParam("studentname", $name,PDO::PARAM_STR) ;
			$stmnt->bindParam("password", $password,PDO::PARAM_STR) ;
			 $stmnt->execute();
			$count=$stmnt->rowCount();
			
			if($count){
				$res=$stmnt->fetch(PDO::FETCH_ASSOC);
				$id = $res['student_id'];
				$_SESSION['student']= $id;
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

public function get_course(){
		try {
			$stmt = $this->conn->prepare("SELECT * FROM course");
			$stmt->execute();
			return $stmt;	
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}


	public function getCourseamt($id){
		  try {
		   $stmt = $this->conn->prepare("SELECT coursefees FROM course WHERE cid = '$id'");
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
	public function getCourseStudent($cid){
		try {
			$stmt = $this->conn->prepare("SELECT * FROM student where cid=:cid");
			$stmt->bindParam("cid", $cid) ;
			$stmt->execute();
			return $stmt;	
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}
	public function getStudentc($cid){
		try {
			$stmt = $this->conn->prepare("SELECT * FROM student where cid=".$cid." and student_id not in (select studentid from studentbtch)");
			$stmt->execute();
			return $stmt;	
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}
public function get_coursename(){
		try {
			$stmt = $this->conn->prepare("SELECT * FROM course");
			$stmt->execute();
			return $stmt;	
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}





	}
	
	




?>