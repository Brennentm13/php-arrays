<?php

$names = ['Brennen', 'John', 'Adam', 'Luke'];
$rumors = ['Showers with his clothes on', 'puts ketchup in cereal', 'Brushes teeth every other day', 'graduated high school at the age of 22'];

echo "<ol>";

for ($i=0;$i < count($names);$i++){
    echo "<li>";
    echo $names[$i];
    echo ", ";
    echo $rumors[$i];
    echo "</li>";
}

echo "</ol>";


$valencia = array("tuition" => "Tuition is $2,400 for in-state students.", "campuses" => " Valencia has 7 seperate campuses.", "resources" => " each campus has resources that benefit your learning.", "teachers" => " They also have teachers from every different field to help prepare you for your career.", "fun" => " Valencia also ensures that you and your peers get along and provide you all with exceptional opprutunities.");
echo $valencia['tuition'] . $valencia['campuses'] . $valencia['resources'] . $valencia['teachers'] . $valenica['fun'];