<?php
class FnameTest extends \PHPUnit\Framework\TestCase
{
public function testThatWeCanGetFName()
{
$user = new \App\Model\Fname;
$user->f_name='Emon';
$this->assertEquals('Emon',$user->getFullName());
}
}