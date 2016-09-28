<?php

// Change item rankings and related attribute data here
// If adding new entries than also add associated image

//if (!isset($_SESSION)) { session_start(); }

// Change App name tag here
$_SESSION['app'] = 'COTD';

// Change ranking order here
$_SESSION['ranks'] = array( 
    'adelaide',
    'canberra',
    'melbourne',
    'auckland',
    'sydney',
    'brisbane',
    'perth',
    'hobart',
    'wellington',
    'christchurch'
);

// Item attribute data goes from here
// Maintain order as per 'items' array

$_SESSION['items'] = array( 
    'cities/adelaide',
    'cities/melbourne',
    'cities/sydney',
    'cities/brisbane',
    'cities/perth',
    'cities/hobart',
    'cities/canberra',
    'cities/auckland',
    'cities/wellington',
    'cities/christchurch'
);

$_SESSION['titles'] = array( 
    'Adelaide',
    'Melbourne',
    'Sydney',
    'Brisbane',
    'Perth',
    'Hobart',
    'Canberra',
    'Auckland',
    'Wellington',
    'Christchurch'
);

// Change trivia here
$_SESSION['trivias'] = array( 
'<p>Among most liveable cities in the world. An extraordinary achievement given so few live there. Green credentials backed by policy of frequent random power outages. <small>Lord Mayor:&nbsp;Martin Haese</small></p>',
'<p>Famous for its dark narrow alley ways and cafe culture. When ordering do as the locals do and use the expression: Where is my goddam latte? The barista will love you for it. <small>Lord Mayor:&nbsp;Robert Doyle</small></p>',
'<p>The international city. Features most expensive airport parking in the world. Dine before 8pm to beat the lockout laws. <small>Lord Mayor:&nbsp;Clover Moore</small></p>',
'<p>Multiple modes of transport to get you quickly back to the airport including train, taxi and tinny during the wet season. The dry season occurs on August 21 at approximately 2:00 pm. <small>Lord Mayor:&nbsp;Graham Quirk</small></p>',
'<p>Perth. What is left to be said that has not been said. A lot actually as little has been said. <small>Lord Mayor:&nbsp;Lisa Scaffidi</small></p>',
'<p>Famous for the record breaking MONA museum. MONA features in all 10 spots of the top 10 things to do. <small>Lord Mayor:&nbsp;Sue Hickey</small></p>',
'<p>A resident of Canberra is known as a "Canberran". The site of Canberra was selected for the location of the nations capital in 1908 as a compromise between rivals Sydney and Melbourne<small>Canberra has no Lord Mayor</small></p>',
'<p>Built on one of the world’s youngest volcanic fields, Auckland is dotted with over 50 volcanoes<small>Lord Mayor:&nbsp;Len Brown</small></p>',
'<p>Wellington is a super cool and small city. So small in fact that 18,000 of the city’s residents walk or jog to work. <small>Lord Mayor:&nbsp;Celia Wade-Brown</small></p>',
'<p>As a result of the earthquake, almost 30 million tonnes of ice fell off the Tasman Glacier, resulting in effective tsunami conditions on the Tasman Lake<small>Lord Mayor:&nbsp;Lianne Dalziel</small></p>'    
);

?>
