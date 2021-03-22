<?php

/**класс физических формул */
class Fiz{

    //получение скорости
    function get_speed($distance=1, $time=1)
    {
        try
        {
            $speed=$distance/$time;
            return $speed;
        }
        catch(exec)
        {
            return 0;
        }
        

    }

    //получение расстояния при равномерном движении
    function get_distance($speed=0, $time=0)
    {
        return $time*$speed;

    }



}
