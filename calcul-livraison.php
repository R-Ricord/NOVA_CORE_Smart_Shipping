<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


function calculer_livraison_poids($poids, $panier, $pc) {
    if ($panier >= 300) {
        return 0;
    }
    if ($pc == true) {
        return 0;
    }
    if ($poids <= 0.25) {
        return 2.90;
    }
    if ($poids <= 0.5) {
        return 3.90;
    }
    if ($poids <= 1) {
        return 5.90;
    }
    if ($poids <= 2) {
        return 7.90;
    }
    if ($poids <= 5) {
        return 9.90;
    }
    if ($poids <= 10) {
        return 14.90;
    }

    return 19.90;
}
