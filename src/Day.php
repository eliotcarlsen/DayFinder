<?php
    class Day
    {
        function findDay($user_date)
        {
            return DateTime::createFromFormat('m/d/Y', $user_date)->format('l');
        }
    }

?>
