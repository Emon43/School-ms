<?php
namespace app\Model;
class Name
{
public $last_name;
public $first_name;
public function getName()
{
return  "$this->first_name $this->last_name";
}

}