<?php

function makeImageFromName($name) {
    $userImg = "";
    $shortName = "";

    $names = explode(" ", $name);
     foreach ($names as $n) {
     $shortName .= $n[0];
   }

     $userImg = '<div class="name-img bg-primary">'.$shortName.'</div>';
     return $userImg;
   
}