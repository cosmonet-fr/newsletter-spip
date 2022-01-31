<?php

if (!defined('_ECRIRE_INC_VERSION')) {
    return;
}

/**
 * @param $tables
 * @return mixed
 */
function news_declarer_tables_principales($tables) {
    $tables['spip_newsletters'] = [
        'field' => [
            'id_auteur_newsletter' => 'INT(11) NOT NULL AUTO_INCREMENT',
            'email' => 'VARCHAR(255) NOT NULL'
        ],
        'key' => [
            'PRIMARY KEY' => 'id_auteur_newsletter'
        ]
    ];

    return $tables;
}