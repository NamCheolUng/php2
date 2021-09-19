<?php
class info {
  private $_name; //안쪽에서 사용한거라는 구분
  public $_age;


  public function setName($name){
  	$this->_name = $name;
  }
public function getName(){
	return $this->_name;
}

}




$a = new info();

  $a->setName("홍길동!");
  $a->_age = 1;

 // print_r($a); info Object ( [name] => 홍길동 [age] => 1 )
   echo $a->_age;  //public일때 사용
  echo $a->getName();
?>