<?php 
class Xe
{
	public $color = 'Red';
	protected function Height()
	{
		return '1m69';
	}
	public function Name()
	{
		return 'Kistx';
	}
	public function Hei()
	{
		return $this-> Height();
	}
}

class nguoi
{
	static $name = 'Kis';
	static function GetName()
	{
		return self ::$name; // Gọi thuộc tính tĩnh trong class
	}
}
$oto = new Xe();

echo $oto->color;
echo '</br>';

echo $oto->Hei(). '</br>';
echo $oto->Name() .'</br>';


$y = new nguoi();
echo 'Tên: '. nguoi::$name.'</br>';
echo 'Toàn tên: '. nguoi::GetName();



class cha
{
	protected $name ='Kis';
	public function GetName()
	{
		return 'Kokko';
	}
}

class con extends cha
{
	public function GetName()
	{
		parent::getName();
		return $this->name;
	}
}

echo '</br>';
$c = new con();
echo $c->GetName();


// FINAL: Không cho phép kế thừa.

abstract class bike
{
	abstract function banhXe();
	abstract function khungXe();
}
class xeDap extends bike
{
	public function banhXe()
	{

	}
	public function khungXe()
	{

	}
	public function GetName()
	{
		return __METHOD__;
	}
}

$object = new xeDap();
echo '</br>'. $object->GetName();
?>