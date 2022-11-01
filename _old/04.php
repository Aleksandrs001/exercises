<?php


//1#####

$numbers1= [1,2,3,4,5,6,7,8,9,10];
foreach ($numbers1 as $numbers1)
{
    echo $numbers1. PHP_EOL;
}
echo PHP_EOL;

//2####

$numbers2= [1,2,3,4,5,6,7,8,9,10];
for($i=0; $i< count($numbers2);$i++ )
{
    echo $numbers2[$i] . PHP_EOL;
}
echo PHP_EOL;

//3####

$x=1;
while($x++ <10)
{
    echo "codelex" . PHP_EOL;
}
echo PHP_EOL;

//4####

$numbers= new stdClass();
$numbers->int= [1,2,3,4,5,6,7,8,9,10];
for($i=0; $i<= count($numbers->int);$i++)
{
    if($i%3==0)
    {
        echo $i;
    }
};
echo PHP_EOL;

//5####

$persons=
    [
    "pers1"=>"John", "Smith" , 33, 12.01,
    "pers2"=>"Daiga", "Ozolinja", 19, 15.09,
    "pers3"=> "Baiba", "Miksta", 22,22.05,
    ];
 foreach ($persons as $data ){
    echo($data)  .PHP_EOL;
 }
?>