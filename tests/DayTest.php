<?php
    require_once "src/Day.php";

    class DayTest extends PHPUnit_Framework_TestCase
    {
        function test()
        {
            $testDay = new Day;
            $input = "8/4/2017";

            $result = $testDay->findDay($input);

            $this->assertEquals(1, $result);
        }
    }


?>
