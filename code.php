<?php


class person

{
    public $name;
    public $email;

    //setname method
    function setName()
    {
        return $this->name = isset($_POST['name']) ? $_POST['name'] : null;
    }

    //setemail method
    function setEmail()
    {

        return $this->email = isset($_POST['email']) ? $_POST['email'] : null;
    }


    //getname method
    function getName()
    {
        $this->setName();
        if ($this->name == null) {
            echo "Name field is blank <br>";
        } else {
            echo " Input Name is :  {$this->name} <br>";
        }
    }


    //getemail method
    function getEmail()
    {
        $this->setEmail();
        if ($this->email == null) {
            echo "Email field is blank";
        } else {
            echo " Input Email is :  {$this->email}";
        }
    }
}

//
$personObject = new person();
$personObject->getName();
$personObject->getEmail();
