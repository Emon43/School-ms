<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
public function testThatWeCanGetTheFirstName()
{
$user=new \App\Model\User;
$this->assertEquals($user->getFirstName(), 'Emon');
}
}