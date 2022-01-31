<?php

if (!defined('_ECRIRE_INC_VERSION')) {
    return;
}

/**
 * @param $flux
 * @return mixed
 */
function news_recuperer_fond($flux) {

    $fond = $flux['args']['fond'];

    if ($fond === 'navigation/dist') {
        $texte = $flux['data']['texte'];
        $texte .= recuperer_fond('inclure/inscription-newsletter');
        $flux['data']['texte'] = $texte;
    }
    return $flux;
}