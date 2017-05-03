<?php
 
// example.com/src/Calendar/Controller/LeapYearController.php
 
namespace Calendar\Controller;
 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Calendar\Model\LeapYear;
 
class LiuController
{
    public function index(Request $request, $year)
    {
        echo 1;
        exit;
    }
}