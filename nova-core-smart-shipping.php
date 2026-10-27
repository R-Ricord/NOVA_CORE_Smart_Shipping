
<?php
/**
 * Plugin Name: NOVA CORE | Smart Shipping
 * Description: Calcul personnalisé des frais de livraison pour NOVA CORE.
 * Version: 1.0.0
 * Author: NOVA CORE
 * Requires Plugins: woocommerce
 */
// Empêche l'accès direct au fichier depuis un navigateur.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once plugin_dir_path(__FILE__) . 'calcul-livraison.php';

// Enregistre notre future méthode de livraison auprès de WooCommerce.
add_action( 'woocommerce_shipping_init', 'nova_core_shipping_init' );

function nova_core_shipping_init() {

    class Nova_Core_Shipping_Method extends WC_Shipping_Method {

        public function __construct($instance_id = 0) {
            $this->instance_id = absint($instance_id);            $this->id = 'nova_core_shipping';
            $this->supports = array('shipping-zones', 'instance-settings');
            $this->method_title = 'NOVA CORE | Smart Shipping';
            $this->method_description = 'Livraison calculée selon le poids et le type de produit.';
            $this->enabled = 'yes';
            $this->title = 'Livraison NOVA CORE';
        }

        public function calculate_shipping($package = array()) {
            $poids_total = 0;
            $contient_pc = false;

            foreach ($package['contents'] as $article) {
                $produit = $article['data'];
                $quantite = $article['quantity'];

                $poids_total += $produit->get_weight() * $quantite;

                if (has_term('pc-gaming', 'product_cat', $produit->get_id())) {
                    $contient_pc = true;
                }
            }

            $montant_panier = WC()->cart->get_subtotal()
                            + WC()->cart->get_subtotal_tax();

            $frais_livraison = calculer_livraison_poids($poids_total, $montant_panier, $contient_pc);

            $this->add_rate(array(
                'id'    => $this->get_rate_id(),
                'label' => $this->title,
                'cost'  => $frais_livraison,
            ));
        }
    }
}

// Enregistre notre méthode de livraison auprès de WooCommerce.
add_filter('woocommerce_shipping_methods', 'nova_core_register_shipping');

function nova_core_register_shipping($methods) {
    $methods['nova_core_shipping'] = 'Nova_Core_Shipping_Method';

    return $methods;
}