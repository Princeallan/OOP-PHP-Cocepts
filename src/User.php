<?php
namespace allan;

//require_once("UserInterface.php");
//require "../vendor/autoload.php";

class User implements UserInterface
{
    use FullName;

	private $username;
	private $age;

	public function __construct($age = 24)
    {

    		$this->age = $age;

        
    }
    public function getAge(){

	    return $this->age;
    }

    public function setUsername($name)
    {
        $this->username = $name;

    }

    public function getUsername()
    {
        return $this->username;
    }

    public function fullUserName()
    {
        $this->setUsername('Allan Kirui');

        return $this->fullname($this->getUsername());
    }


}
class Student extends User{

}






