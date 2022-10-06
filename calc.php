<?php
$numero = $_POST['n1'];

if($numero % 10 ==0 && $numero % 5 ==0 && $numero % 2 ==0){
    echo "$numero é divisivel por 10, por 5 e por 2";
}
else{
    echo "$numero não é divisivel";
}
