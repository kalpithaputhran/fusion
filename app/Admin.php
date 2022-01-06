<?php
/**
 * Created by PhpStorm.
 * User: your name
 * Date: todays date
 * Time: todays time
 */

class Admin extends Main
{
	protected $id;

	public function __construct()
	{
		if (isset($_SESSION['admin'])) {
			# code...
			$this->id = $_SESSION['admin'];
		}
		
		parent::__construct();
	}

	public function loginAdmin($name,$password)
	{
		try{
			$stmnt=$this->conn->prepare("select a_id from adminprofile where adminname=:adminname AND password=:password");
			$stmnt->bindParam("adminname", $name,PDO::PARAM_STR) ;
			$stmnt->bindParam("password", $password,PDO::PARAM_STR) ;
			$stmnt->execute();
			$count=$stmnt->rowCount();
			$res=$stmnt->fetch(PDO::FETCH_ASSOC);
			$id = $res['a_id'];
			if($count){
				$_SESSION['admin']= $id;
				return true;
			}else{
				return false;
			}

		}catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}

	}


	
	

		// Create Update Delete Code
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


	public function addStudent($dateofregistration,$studentphoto,$studentname,$dob,$gender,$address,$contactno1,$contactno2,$email,$parentname,$parentcontact,$collegename,$placeofcollege,$previousqualification,$overallpercentage,$noofbacklogs,$cid,$courseamt,$paidamt,$password){
		try {
			$stmt = $this->conn->prepare("INSERT INTO student(dateofregistration,studentphoto,studentname,dob,gender,address,contactno1,contactno2,email,parentname,parentcontact,collegename,placeofcollege,previousqualification,overallpercentage,noofbacklogs,cid,password) VALUES(:dateofregistration,:studentphoto,:studentname,:dob,:gender,:address,:contactno1,:contactno2,:email,:parentname,:parentcontact,:collegename,:placeofcollege,:previousqualification,:overallpercentage,:noofbacklogs,:cid,:password)");
			$stmt->bindParam(":dateofregistration", $dateofregistration);
			$stmt->bindParam(":studentphoto", $studentphoto);
			$stmt->bindParam(":studentname", $studentname);
			$stmt->bindParam(":dob", $dob);
			$stmt->bindParam(":gender", $gender);
			$stmt->bindParam(":address", $address);
			$stmt->bindParam(":contactno1", $contactno1);
			$stmt->bindParam(":contactno2", $contactno2);
			$stmt->bindParam(":email", $email);
			$stmt->bindParam(":parentname", $parentname);
			$stmt->bindParam(":parentcontact", $parentcontact);
			$stmt->bindParam(":collegename", $collegename);
			$stmt->bindParam(":placeofcollege", $placeofcollege);
			$stmt->bindParam(":previousqualification", $previousqualification);
			$stmt->bindParam(":overallpercentage", $overallpercentage);
			$stmt->bindParam(":noofbacklogs", $noofbacklogs);
			$stmt->bindParam(":cid", $cid);
			$stmt->bindParam(":password", $password);
			$stmt->execute();



			$date = Date('Y-m-d');
			$last_id = $this->conn->lastInsertId();

			$stmt = $this->conn->prepare("INSERT INTO fees(course_id,courseamt,student_id,paid_date,amountpaid) VALUES(:course_id,:courseamt,:student_id,:paid_date,:amountpaid)");
			$stmt->bindParam(":course_id", $cid);
			$stmt->bindParam(":courseamt", $courseamt);
			$stmt->bindParam(":student_id", $last_id);
			$stmt->bindParam(":paid_date", $date);
			$stmt->bindParam(":amountpaid", $paidamt);
			$stmt->execute();




			return true;
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


	public function get_approachedcompany(){
		  try {
		   $stmt = $this->conn->prepare("SELECT * FROM approachedcompany");
		   $stmt->execute();
		   return $stmt;
		} catch (PDOException $e) {
		   echo $e->getMessage();
		   return false;
		}
	}



	public function get_interview(){
		  try {
		   $stmt = $this->conn->prepare("SELECT i.idate as intdate, 
		   i.itime as inttime, a.companyname as cname,a.hrname as hr,a.location as loc,a.description as des,a.phoneno as phone, i.ilocation as intloc, i.i_id as i_id
		   	FROM interview i 
		   	inner join approachedcompany a on a.ap_id=i.ap_id

		   	");
		   $stmt->execute();
		   return $stmt;
		} catch (PDOException $e) {
		   echo $e->getMessage();
		   return false;
		}
	}


	public function get_interview_company(){
		  try {

		   $stmt = $this->conn->prepare("

		 		select a.companyname as aname , s.studentname as sname,i.ilocation as iloc ,p.package as salary ,c.coursename as cname
		   		from placement p 
		   		inner join student s on s.student_id=p.student_id
		   		inner join interview i on i.i_id=p.i_id inner join approachedcompany a on a.ap_id=i.ap_id inner join course c on c.cid=s.cid

		   	");
			$stmt->bindParam("ap_id", $ap_id) ;
		   $stmt->execute();
		   return $stmt;
		} catch (PDOException $e) {
		   echo $e->getMessage();
		   return false;
		}
	}

	public function getinterviewlocation($cid){
		try {
			$stmt = $this->conn->prepare("SELECT ilocation FROM interview where i_id=:i_id");
			$stmt->bindParam("i_id", $i_id) ;
			$stmt->execute();
			return $stmt;	
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

public function getStudent(){
		try {
			$stmt = $this->conn->prepare("SELECT * FROM student");
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


public function getbatch(){
		try {
			$stmt = $this->conn->prepare("SELECT * FROM batch");
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
	public function get_timetable(){
		try {
			$stmt = $this->conn->prepare("SELECT s.studentname as sname,c.coursename as cname ,b.batchtiming as btime
		from timetable t 
            inner join  student s on s.student_id=t.student_id 
            inner join course c on c.cid=t.coursename
            INNER JOIN batch b on b.batch_id=t.batch_id");
			$stmt->execute();
			return $stmt;	
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}



public function get_staff(){
		try {
			$stmt = $this->conn->prepare("SELECT * FROM staff");
			$stmt->execute();
			return $stmt;	
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

public function get_subject(){
		try {
			$stmt = $this->conn->prepare("SELECT * FROM subject");
			$stmt->execute();
			return $stmt;	
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

public function get_topic(){
		try {
			$stmt = $this->conn->prepare("SELECT * FROM topics");
			$stmt->execute();
			return $stmt;	
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}




}
?>