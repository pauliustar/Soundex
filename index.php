<?php

require_once 'include/SortingController.php';

$test_text = new SortingController();

$test_text->set_text('Lithuania (UK and US: Listeni/ˌlɪθuːˈeɪniə/,[11][12][13] Lithuanian: Lietuva
    [lʲɪɛtʊˈvɐ]), officially the Republic of Lithuania (Lithuanian: Lietuvos
    Respublika), is a country in Northern Europe.[14] One of the three Baltic
    states, it is situated along the southeastern shore of the Baltic Sea, to the
    east of Sweden and Denmark. It is bordered by Latvia to the north, Belarus to
    the east and south, Poland to the south, and Kaliningrad Oblast (a Russian
    exclave) to the southwest. Lithuania has an estimated population of 2.9 million
    people as of 2015, and its capital and largest city is Vilnius. Lithuanians are
    a Baltic people. The official language, Lithuanian, along with Latvian, is one
    of only two living languages in the Baltic branch of the Indo-European language
    family.');

$test_text->fix_text();
$test_text->convert_soundex();
$test_text->sort();
$test_text->sorted_top();

?>

<html>
<head>
    <title>Soundex</title>
</head>
<body>

<h1>Top 5</h1>
 
<?php foreach ($test_text->get_top() as $key) : ?>
<li>
    <?= $key ?>
</li>
<?php endforeach; ?>

</body>
</html>