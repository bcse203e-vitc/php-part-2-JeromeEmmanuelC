<?php
$students = array("Rahul"=>85,"Priya"=>92,"Arun"=>78,"Zoya"=>95,"Karan"=>88);
arsort($students);
$top = array_slice($students,0,3,true);
echo "Name\tMarks\n";
foreach($top as $name=>$marks){
    echo $name."\t".$marks."\n";
}
?>

