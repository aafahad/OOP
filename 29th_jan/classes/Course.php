<?php


class Course {

    function __set($a,$b)
    {
        echo "hi";
    }


    function __call($functionName, $arguments){

    echo "hello";
        var_dump($functionName);
        var_dump($arguments);
    }

    function __sleep()
    {

        echo "i m sleeping";
    }

}
