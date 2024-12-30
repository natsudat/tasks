<?php



function task1 ($a)
{
    $b = $a % 10;
    if (($a > 9 && $a < 21) || ($b > 4 && $b < 9) || ($b == 0))
    {
        echo $a . ' компьютерoв';
    }
    else if ($a == 1 || $b == 1)
    {
        echo $a . ' компьютер';
    }
    else
    {
        echo $a . ' компьютера';
    }

    return 1;
}

function task2 ($mass)
{
    $vivod = [];
    $min = min($mass);
    $y = 0;

    for ($i = 2; $i <= $min; $i++)
    {
        $delit = 0;
        foreach ($mass as $value) {
            if($value%$i==0)
            {
                $delit++;
            }
        }
        //echo $delit;
        if ($delit == count($mass))
        {
            $vivod[$y] = $i;
            $y++;
        }

    }

    foreach ($vivod as $value) {
        echo $value.' ';
    }

    return 1;

}




function task3($min, $max) {
    $vivod = [];
    $b = 0;
    $maxer = 0;
    $minimum = 0;
    if ($max - $min < 4)
    {
        echo 'тут не будет 2 минимальных и 2 максимальных';
        return 0;
    }
    else
    { 
        if ($min == 1)
        {
            $min = 2;
        }

        for ($i = $min; $i <= $max; $i++)
        {
            if ($minimum < 2)
            {
                $m = 1;
                for ($j = 2; $j <= sqrt($i); $j++){
                    if ($i % $j == 0)
                    {
                        $m = 0;
                    } 
                }
                If ($m == 1)
                {
                    if( $minimum == 0)
                    {
                        $vivod[0] = $i;
                    }
                    else
                    {
                        $vivod[1] = $i;
                    }
                    $minimum++;
                }
            }
            if ($maxer < 2)    
            {
                $m = 1;
                for ($j = 2; $j <= sqrt($max-$b); $j++){
                    if (($max-$b) % $j == 0)
                    {
                        $m = 0;
                    } 
                }
                If ($m == 1)
                {                
                    if( $maxer == 1)
                    {
                        $vivod[2] = $max-$b;
                    }
                    else
                    {
                        $vivod[3] = $max-$b;
                    }
                    $maxer++;
                }
                $b++; 
            }

            if ($maxer + $minimum == 4)
            {
                break;
            }
        }
            
        sort($vivod);
        foreach ($vivod as $value) {
            echo $value.' ';
        }
        return $vivod;
    }



} 




function task4($a) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    for ($i = 1; $i <= $a; $i++) {
        echo $i."&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    for ($i = 1; $i <= $a; $i++) {
        echo $i."&nbsp;&nbsp;";
        for ($j = 1; $j <= $a; $j++) {
            $sum = $i*$j; 
            if( $sum < 10 )
            {
                echo $i*$j.'&nbsp;&nbsp;&nbsp;&nbsp;';
            }
            else
            {
                echo $i*$j.'&nbsp;&nbsp;';
            }            
        }
        echo "<br>";    
    }
    return $a;
}




// примеры
echo '<br> Задание 1 <br>';
$a = task1(1000000000);
echo '<br><br><br> Задание 2 <br>';
$a = task2([42, 12, 18]);
echo '<br><br><br> Задание 3 <br>';
$a = task3(11, 20);
echo '<br><br><br> Задание 4 <br>';
$a = task4(3);
?>