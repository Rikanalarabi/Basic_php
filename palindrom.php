<?php
$input = "kasur rusak";


if ($input == strrev($input)) {
    echo $input . " Kata Palindrom";
} else {
    echo $input . " bukan Kata Palindrom";
}
