<?php

for ($i = 1; $i <= 100; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $i . "Bilangan FizzBuzz</br>";
    } elseif ($i % 3 == 0) {
        echo $i . "Bilangan Fizz</br>";
    } elseif ($i % 5 == 0) {
        echo $i . "Bilangan Buzz</br>";
    } else {
        echo $i . "</br>";
    }
}
