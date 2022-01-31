<?php

if (!defined('_ECRIRE_INC_VERSION')) {
    return;
}

function news_autoriser(){}

/**
 * @param $faire
 * @param $type
 * @param $id
 * @param $qui
 * @param $opt
 */
function autoriser_newsletter_afficher_dist($faire, $type, $id, $qui, $opt){
    return true;
}