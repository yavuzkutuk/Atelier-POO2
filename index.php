<?php

// Require
require './Unit.php';
require './Elf.php';
require './Soldier.php';

// Instanciation de la class Unit
$unit = new \Unit\Unit();

echo'<hr/>';


// Instanciation de la class Elf
$elf = new \Unit\Elf();
$pos = $elf->walk('right');

// J'avance vers la gauche
echo 'Je suis en position ['.$pos[0].','.$pos[1].']';

// Faire appel à la méthode Attack de la class Elf
echo'<h3>Appel de la fonction Attack() - Elf</h3>';
echo $elf->attack();
echo'<hr/>';

// Instanciation de la class Soldier
$soldier = new \Unit\Soldier();
$pos = $soldier->walk('bottom');

// J'avance
echo 'Je suis en position ['.$pos[0].','.$pos[1].']<br/>';

// Faire appel à la méthode Attack de la class Soldier
echo'<h3>Appel de la fonction Attack() - Soldier</h3>';
echo $soldier->attack();
echo'<hr/>';