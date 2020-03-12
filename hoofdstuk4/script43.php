<?php
$task2 = "Lancering in: ";
$counter = 19;

while($counter >= 0) {
    if($counter <= 19 && $counter >= 1) {
        $task2 = $task2 . $counter . ", ";
    } else {
        $task2 = $task2 . $counter;
    }
    $counter--;
}

$task3 = "Lancering in: ";
for($c=19;$c >= 0; $c--) {
    if($c <= 19 && $c >= 1) {
        $task3 = $task3 . $c . ", ";
    } else {
        $task3 = $task3 . $c;
    }
}

$task4 = "";
$counter4 = 1;

while ($counter4 <= 6) {
    $task4 = $task4 . "<h" . $counter4 . "> Dit is de " . $counter4 . "e iteratie</h" . $counter4 . ">";

    $counter4++;
}

$task5 = "";

for($c5 = 1; $c5 <= 10; $c5++) {

    $task5 =  $task5 . "<td>Dit is de " . $c5 . "e iteratie</td>";
}
$task5 = "<table><tr>" . $task5 . "</tr></table>";


$task6 = "";
$currentYear = 2020;
$birthYear = 1999;

while($currentYear >= $birthYear) {
    if($currentYear == 2020) {
        $task6 = $task6 . "<p>In " . $currentYear . " word ik " . ($currentYear-$birthYear) . " jaar oud</p>";
    } else if($currentYear <= 2020 && $currentYear > 1999) {
        $task6 = $task6 . "<p>In " . $currentYear . " was ik " . ($currentYear - $birthYear) . " jaar oud</p>";
    } else {
        $task6 = $task6 . "<p>In " . $currentYear . " ben ik geboren" . "</p>";
    }
    $currentYear--;
}

$task7 = "";
$birthYear2 = 1999;
for($currentYear2 = 2020; $currentYear2 >= $birthYear2; $currentYear2-- )
    switch ($currentYear2) {
        case 2020:
            $task7 = $task7 . "<p>In " . $currentYear2 . " word ik " . ($currentYear2-$birthYear2) . " jaar oud</p>";
            break;
        case 2019:
            $task7 = $task7 . "<p>In " . $currentYear2 . " was ik " . ($currentYear2 - $birthYear2) . " jaar oud en werd ik een volwassenen</p>";
        break;
        case 2017:
            $task7 = $task7 . "<p>In " . $currentYear2 . " was ik " . ($currentYear2 - $birthYear2) . " jaar oud en werd ik een adolescent</p>";
            break;
        case 2011:
            $task7 = $task7 . "<p>In " . $currentYear2 . " was ik " . ($currentYear2 - $birthYear2) . " jaar oud en werd ik een puber</p>";
            break;
        case 2007:
            $task7 = $task7 . "<p>In " . $currentYear2 . " was ik " . ($currentYear2 - $birthYear2) . " jaar oud en werd ik een tiener</p>";
            break;
        case 2003:
            $task7 = $task7 . "<p>In " . $currentYear2 . " was ik " . ($currentYear2 - $birthYear2) . " jaar oud en werd ik een kleuter</p>";
            break;
        case 2001:
            $task7 = $task7 . "<p>In " . $currentYear2 . " was ik " . ($currentYear2 - $birthYear2) . " jaar oud en werd ik een peuter</p>";
            break;
        case 1999:
        $task7 = $task7 . "<p>In " . $currentYear2 . " ben ik geboren en was ik een baby</p>";
        break;
        default:
        $task7 = $task7 . "<p>In " . $currentYear2 . " was ik " . ($currentYear2 - $birthYear2) . " jaar oud</p>";
}

?>
