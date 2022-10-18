<?php

spl_autoload_register(function ($classe) {
    include "src/model/" . $classe . ".php";
});

$worksData = json_decode(file_get_contents("src/data/Works.json"), true);
$humansData = json_decode(file_get_contents("src/data/Humans.json"), true);

echo '<h1>Expo</h1>';

// $user1 = new User("Nat", "BNT", "nat.bnt@email.com");
// $author1 = new Author("Flo", "BNT", "flo.bnt@email.com", "0610000000");

foreach($humansData as $key=>$human) {
    if(isset($human['works'])) {
        $key = new Author($human["firstName"], $human["lastName"], $human["email"], $human["telNumber"], $human["works"]);
        $key->test2();
    } else {
        $key = new User($human["firstName"], $human["lastName"], $human["email"]);
        $key->test();
    }
}

// $user1->test();
// $author1->test();

// $work1 = new Work();

// foreach($worksData as $work) {
//     foreach($work as $name => $value) {
//         echo $name . " => " . $value . "<br>";
//     }
// }



// var_dump($worksData[1]);


// echo $worksData;
// echo $testDataDecoded["Ben"];
// src/model/Expo.php