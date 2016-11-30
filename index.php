<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 28.11.16
 * Time: 15:09
 */

//phpinfo();

//use Application\Apple;

require_once('loader.php');

$apple = new Application\Apple();
$coconut = new Application\Coconut();
$monitor= new Application\Monitor();
$star = new Application\Star();
$star = new Application\Student();

$apple->test();

$coconut->test();

$monitor->test();

$star->test();

$star->test();


