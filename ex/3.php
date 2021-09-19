<?php
class info {
  private $name;
  public $age;


  public function setName($name){
  	$this->name = $name;
  }
public function getName(){
	return $this->name;
}

}




$a = new info();

  $a->setName("홍길동!");
  $a->age = 1;

 // print_r($a); info Object ( [name] => 홍길동 [age] => 1 )
  // echo $a->name;  public일때 사용
  echo $a->getName();
?>