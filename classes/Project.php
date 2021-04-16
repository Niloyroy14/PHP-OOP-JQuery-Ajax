<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');

class Project{
	private $db;
	public function __construct(){
		$this->db = new Database();
	}

   public function checkUsername($username)
  {
    $query   = " SELECT * FROM tbl_user WHERE user_name='$username'";
    $getuser = $this->db->select($query);
    if ($username=="") {
      echo "<span class='error'>Please Enter UserName </span>";
      exit();
    }
    elseif ($getuser) {
      echo "<span class='error'><b> $username</b> Available! </span>";
      exit();
    }else {
      echo "<span class='success'> <b>$username</b> Not Available </span>";
      exit();
    }
  }

  public function checkautoComplete($skill)
  {
    $query   = " SELECT * FROM tbl_skill WHERE skill Like '%$skill%'";
    $getskill = $this->db->select($query);
    $result= '';
    $result .= '<div class="skill"><ul>';
    if($getskill){
      while ($data=$getskill->fetch_assoc()) {
            $result .='<li>'.$data['skill'].'</li>';
      }
    }
    else {
        $result .='<li>No Result Found</li>';
    }
      $result .= '</div></ul>';
      echo $result;
  }


  public function checkRefresh($body)
  {
    $query   = "INSERT INTO tbl_refresh(body) VALUES('$body')";
    $getbody = $this->db->insert($query);
  }



  public function getWithoutRefresh()
  {
    $query   = " SELECT * FROM tbl_refresh ORDER BY id DESC";
    $getcontent = $this->db->select($query);
    $result= '';
    $result .= '<div class="data"><ul>';
    if($getcontent){
      while ($data= $getcontent->fetch_assoc()) {
            $result .='<li>'.$data['body'].'</li>';
      }
    }
    else {
        $result .='<li>No Result Found</li>';
    }
      $result .= '</div></ul>';
      echo $result;
  }





  public function checkautoSearch($search)
  {

    $query   = " SELECT * FROM tbl_search WHERE name Like '%$search%'";
    $getsearch = $this->db->select($query);
    if ($getsearch) {
      $data= '';
      $data .= '<table class="tblone"><tr>
                 <th>Usename</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Password</th>
                 </tr> ';

                 while ($result=$getsearch->fetch_assoc()) {
                   $data .= '<tr>
                              <td>'.$result['username'].'</td>
                              <td>'.$result['name'].'</td>
                              <td>'.$result['email'].'</td>
                              <td>'.$result['password'].'</td>
                            </tr>';
                 }
         echo $data;
    }
    else {
      echo "Data Not Found";
    }


  }

}
?>
