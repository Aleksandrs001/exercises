<?php
include_once "DeadPerson.php";


//vardabiga nāve
$typeOfDeadViolent=[];

//Nevardarbīga nāve
$typeOfDeadNonViolent=[];

//Nāves cēlonis nav noteikts

$typeOfDeadNON=[];

if (($handle = fopen("vtmec-causes-of-death.csv", "r")) !== FALSE)
{
    $counter=0;
    while (($lineData = fgetcsv($handle, 1000, ",")) !== FALSE)
    {
        $counter++;
        if($counter===1){
            continue;
        }

        $reason="";
        if(0===strcmp("Vardarbīga nāve",$lineData[2] )) {
            $reasonData = explode(";", $lineData[4]);
            $reason= $reasonData[0];
        }
        elseif(0===strcmp("Nevardarbīga nāve", $lineData[2])) {
            $reasonData = explode(";", $lineData[3]);
            $reason= $reasonData[1];
        }


        $dead= new DeadPerson($lineData[1],$reason,$lineData[2]);

        if(0===strcmp("Vardarbīga nāve",$dead->getTypeOfDead() )){

            $typeOfDeadViolent[] = $dead;
        }
        elseif(0===strcmp("Nevardarbīga nāve",$dead->getTypeOfDead() )) {

            $typeOfDeadNonViolent[] = $dead;
        }
        else
        {
            $typeOfDeadNON[] = $dead;
        }
    }
    fclose($handle);

}

$select=(int) 4;//readline( "Choice type of dead: \n 1: Vardabiga nāve. \n 2: Nevardarbīga nāve. \n 3: Nāves cēlonis nav noteikts\n 4: Statistika.\n");

if($select=== 1){
    $yearOfDead=(int) readline("Choice year of dead: ");
    foreach ( $typeOfDeadViolent as $key=> $dead)
    {
        $tempDate= substr($dead->getDate() ,0,4);
        if (0=== strcmp($yearOfDead,$tempDate) ){
            echo $key+1 .": Date:". $dead->getDate().". Reason: ". $dead->getReason(). PHP_EOL;

        }
    }

}
if($select=== 2){
    $yearOfDead=(int) readline("Choice year of dead: ");
    foreach ( $typeOfDeadNonViolent as $key=> $dead)
    {
        $tempDate= substr($dead->getDate() ,0,4);
        if (0=== strcmp($yearOfDead,$tempDate) ){
            echo $key+1 .": Date:". $dead->getDate().". Reason: ". $dead->getReason(). PHP_EOL;

        }
    }

}
if($select=== 3){
    $yearOfDead=(int) readline("Choice year of dead: ");
    foreach ( $typeOfDeadNON as $key1=> $dead)
    {
        $tempDate= substr($dead->getDate() ,0,4);
        if (0=== strcmp($yearOfDead,$tempDate) ){
            echo $key1+1 .": Date:". $dead->getDate()." Type of dead: ".$dead->getTypeOfDead(). PHP_EOL;

        }
    }

}


