<?php

if (!defined('_ECRIRE_INC_VERSION')) {
    return;
}

/**
 * @param $nom_meta_base_version
 * @param $version_cible
 */

function news_upgrade($nom_meta_base_version, $version_cible) {
    $maj = [];

    $maj['create'] = [
        ['news_creer_table', 'spip_newsletters']
    ];

    $maj['1.0.1'] = [
        ['maj_tables', ['spip_newsletters']]
    ];

    include_spip('base/upgrade');
    maj_plugin($nom_meta_base_version, $version_cible, $maj);
}

/**
 * @param $nom_meta_base_version
 */
function news_vider_table($nom_meta_base_version) {
    effacer_meta($nom_meta_base_version);
}

function news_creer_table($table) {
    sql_create(
        $table,
        [
            'id_auteur_newsletter' => 'INT(11) NOT NULL AUTO_INCREMENT',
            'email' => 'VARCHAR(255) NOT NULL'
        ],
        [
            'PRIMARY KEY' => 'id_auteur_newsletter'
        ]
    );
}

