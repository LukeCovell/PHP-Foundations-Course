<h1>Basic Uses for PHP examples</h1>
<div class="hline"><hr></div>


<?php

# basic use of echo  to display test to the webpage
echo 'Using echo to display text on a webpage';

?>

<div class="hline"><hr></div>

<?php

# basic use of a varibale
$basic_sentence = 'This is a sentence inside of a vairable.';
echo $basic_sentence;

?>

<div class="hline"><hr></div>

<?php

# Echoing a sentence that contains a ' when wrapped inside of ' due to having a \ before
echo 'There doesn\'t seem to be any issue with this sentence.';

?>

<div class="hline"><hr></div>

<?php

# test to show differnce between '', "" with vairables as well as using concatination with ''

$myage = 24;

echo 'My age is $myage <br><br>';
echo "My age is $myage <br><br>";
echo 'My age is ' . $myage;

?>

<div class="hline"><hr></div>

<?php

# A basic array that has been printed using print_r as you cant echo a array using the $ unless you add []

$basic_array = array('name', 'email', 'age');

print_r($basic_array);

echo "<br><br>";

echo $basic_array[2];

echo "<br><br>";

# A array that has the keys and values set

$basic_array2 = array(
    'name' => 'Luke',
    'age' => 24,
    'email' => 'luke@email.com'
);

print_r($basic_array2);

echo "<br><br>";

echo $basic_array2['age']

?>

<div class="hline"><hr></div>

<?php

#If, else and switch

$number = 1;

if($number==1){
    echo 'Number is set to 1' . '<br><br>';
};

if($number==1){
    echo 'Number is set to 2' . '<br><br>';
}else{
    echo 'Number is not set to 2' . '<br><br>';
};

if(!$number==1){
    echo 'Number is not equal to 1' . '<br><br>';
}else{
    echo 'Number is equal to 1 check ' . '<br><br>';
};

?>

<div class="hline"><hr></div>

<?php

# and, or inside of if statements

$number1 = 1;
$number2 = 1;
$number3 = 3;

if($number1 == $number2 || $number1 == $number3){
    echo 'One of these is true' . '<br><br>';
}else{
    echo 'Both are false' . '<br><br>';
};


if($number1 == $number2 && $number1 == $number3){
    echo 'Both of these are true' . '<br><br>';
}else{
    echo 'Both are false' . '<br><br>';
};


?>























<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

<style>

*{
    font-family: 'Roboto', sans-serif;
}

.hline{
    padding: 10px 0px;
}

h1{
    font-size:30px;
    font-weight:700;
    padding-bottom: 0px;
    padding-top: 10px;
}


</style>