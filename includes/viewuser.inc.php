<?php
class ViewUser extends User {

  // Properties

  //Methods
  public function showAllUsers(){
    $datas = $this->getAllUsers();
    foreach ($datas as $data) {
      echo "Username is".$data['uid']."<br />"; //Column name from the database
      echo "Password is".$data['pwd']."<br />"; //Column name from the database
    }
  }

}
 ?>
