<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $geckos = [['id' => 1,'name' => 'Leopard Gecko ','type' => 'R','description' => 'The leopard gecko or common leopard gecko is a ground-dwelling lizard native to the rocky dry grassland and desert regions of Afghanistan, Iran, Pakistan, India, and Nepal.','image' => 'img/leopard.png'],
        ['id' => 2,'name' => 'Black Gecko','type' => 'SR','description' => 'The Black Night Leopard Gecko is a rare leopard gecko morph that has been bred for its color. It is a very dark morph, or, to give it its proper technical term, it is a hypermelanistic leopard gecko. It is described as being full black with no pattern whatsoever. The morph is a small gecko and like most line bred morphs, it is prone to some health complaints.','image' => 'img/black.png'],
        ['id' => 3,'name' => 'Barking Gecko','type' => 'SSR','description' => 'Ptenopus is a small genus of lizards, known commonly as barking geckos, in the family Gekkonidae. The genus is endemic to southern Africa.There are only three described species in this genus.','image' => 'img/albino.png'],
        ['id' => 4,'name' => 'Sunglow Gecko','type' => 'R','description' => 'Sunglow leos are a Hybino subtype bred from a Super Hypo and Tremper Albino. Accordingly, they have a bright yellow or orange body color (hence the name) and typically Tremper albino pale-silverish-reddish eyes.','image' => 'img/yellow.png'],
        ['id' => 5,'name' => 'Albino Gecko','type' => 'SR','description' => 'Albino leopard geckos are members of the gecko subfamily Eublepharidae. These lizards share several of the same traits of tree-dwelling species. Except as ground-dwelling lizards, Eublepharid geckos have no need for the clinging toe-pads that allow other species to climb sheer walls and glass.','image' => 'img/barking.png'],
        ['id' => 6,'name' => 'Electric Blue Day Gecko','type' => 'SSR','description' => 'is a critically endangered species of lizard in the family Gekkonidae. The species is endemic to a small area of Tanzania. Common names include turquoise dwarf gecko, Williams dwarf gecko, and, in the pet trade, electric blue gecko.','image' => 'img/blue.png']
    ];
    return view('welcome', ['geckos' => $geckos]);
});
