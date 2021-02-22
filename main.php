<?php
function checkAcc($acc){
    $pattern='/^[_a-z0-9]{6,}$/';
    if (preg_match($pattern,$acc)){
        echo 'account is valid<br>';
    }else{
        echo 'account invalid<br>';
    }
}


checkAcc('.@');
checkAcc('_abc123');