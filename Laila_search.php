<?php
session_start();

// get form content
$search_for = $_REQUEST['search'];

$search_for = explode(" ", $search_for);

// list (unique words combinations)
$question_strings = array('sproget bruges', 'applikationer', 'fordele ulemper', 'lært', 'erfarne uerfarne');

// Loop to find matches
foreach ($question_strings as $key => $value) {

    $question_array = explode(" ", $value);

    $result = array_intersect($search_for,$question_array);

    if(count($result) == count($question_array) && count($result) !== 0) {
        $answer_key = $key;
    }

}

// switch to sendt the correct message to the user
switch ($answer_key) {
    case '0':
        $_SESSION['result'] = array('Hvad kan sproget bruges til', 'Man bruger fortrinsvis PHP til at lave hjemmesider. PHP driver logikken bag hjemmesiden. PHP giver dig mulighed for at sende e-mails fra din hjemmeside, have login funktion på din hjemmeside, køre et forum, lave afstemninger, samt mange andre interaktive og databasedrevne webapplikationer');
        break;
    case '1':
        $_SESSION['result'] = array('Hvilke applikationer er skrevet i dette sprog?', 'Top 10 populære applikationer skrevet i PHP er: Facebook, Yahoo, Wikipedia, WordPress, Tumblr, MailChimp, Flickr, Digg, iStockPhoto og Baidu.');
        break;
    case '2':
        $_SESSION['result'] = array('Fordele og ulemper med sproget?', 'Fordele: PHP er let at lære, det er Open Source og dermed gratis at bruge, kan køre på flere platforme, der er fantastisk support, der findes et hav at frameworks man kan bruge og der er stor database kompatibilitet. Ulemper: Det er resourcekrævende. Der er mindre struktur, PHP er langsommere end andre sprog, siden skal reloade hvergang man laver en forespørgsel, men det kan man komme udenom med hjælp af AJAX ');
        break;
    case '3':
        $_SESSION['result'] = array('Hvordan har I lært det, som I lærte? ', 'Jeg har set en masse videoer fra Traversy Media på Youtube samt videoer fra Nemprogrammering.dk. Derudover har jeg lavet en masse søgninger på w3schools.com, geeksforgeeks.org og stackoverflow');
        break;
    case '4':
        $_SESSION['result'] = array('Hvordan kan erfarne og uerfarne udviklere arbejde sammen på en hensigtsmæssig måde?', 'Man kan bruge en teknik der hedder Parprogrammering. Parprogrammering er en softwareudviklingsteknik, hvor to programmører arbejder sammen ved et tastatur. Den ene skriver koden ind, og den anden reviewer hver kodelinje mens den bliver skrevet. Den person der skriver kaldes Driver. Den person der reviewer koden kaldes observer eller navigator. Man kan tilføje intimitet til denne metode og den kaldes så Spooning da den ene sidder bag den anden mens man programmerer.');
        break;
    default:
        $_SESSION['result'] = array('Beklager, vi har ikke svaret på dit spørgsmål, prøv at ringe til en ven!');
}

header("Location: /tmp");