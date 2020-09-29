<?php
class NameTest extends \PHPUnit\Framework\TestCase
{
public function testThatWeCanGetFullName()
{
$user = new \App\Model\Name;
$user->first_name='Emon';
$user->last_name='Mojnu';
$this->assertEquals('Emon Mojnu',$user->getName());
}
}