<?php

/**
 * Version:    1.0
 * Author:     Alfred Bez <alfred.bez@gmail.com>
 * Author URI: http://www.alfredbez.de
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'ab_useparentmediafiles',
    'title'        => 'Alfred Bez :: use parent Media Files',
    'description'  => 'Wenn ein Variante eines Artikels keine eigenen Medien-Dateien hat, werden die des Elternartikels geladen',
    'version'      => '1.0',
    'author'       => 'Alfred Bez',
    'url'          => 'http://www.bkm-medien.de',
    'email'        => 'a.bez@bkm-medien.de',
    'extend'       => array(
        'oxwarticledetails'  => 'ab_useparentmediafiles/models/ab_useparentmediafiles'
    )
);
