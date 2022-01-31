<?php

if (!defined('_ECRIRE_INC_VERSION')) {
    return;
}
/**
 * Chargement du form
 */
function formulaires_inscription_newsletter_saisies_dist() {
    return [
        'email' => [
            'saisie' => 'email',
            'options' => [
                'nom' => 'email',
                'label' => 'Votre e-mail',
                'obligatoire' => 'oui',
                'info_obligatoire' => '*'
            ],
            'verifier' => [
                'type' => 'email'
            ]
        ]
];
}

/**
 * Vérif du form
 */
function formulaires_inscription_newsletter_verifier_dist() {
    $erreurs = [];

    //Véfif des saisies
    include_spip('inc/saisies');
    $erreurs = saisies_verifier(formulaires_inscription_newsletter_saisies_dist());


    if (sql_countsel('spip_newsletters', 'email = ' . sql_quote(_request('email'))) > 0) {
        $erreurs['email'] = 'Vous êtes déja inscrit';
    }

    if ($erreurs) {
        $erreurs['message_erreur'] = 'Saisie invalide';
    }

    return $erreurs;
}

/**
 * Traitement du form
 */
function formulaires_inscription_newsletter_traiter_dist() {
    $email = _request('email');

    if (!sql_insertq('spip_newsletters', ['email' => $email])) {
        return ['message_erreur' => 'Inscription échouée !'];
    }

    return ['message_ok' => 'Inscription validée ! \o/'];
}