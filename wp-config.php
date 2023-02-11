<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'P6_DWP' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2fkM;=AYYxMV}(I6V;6fz-bFC?[g`~6>m6wy(DvYzXlgq@v$,`/;-#qi?,DGdnh~' );
define( 'SECURE_AUTH_KEY',  '4;}@_j/6&VFG6.r^ztWUQ8:B[N~eP1%%kT*?6$_m2=-L,yhP||WbmF5~,KN/X[a_' );
define( 'LOGGED_IN_KEY',    '8D]_gFL/k}-H{Qcev{Q|(:vSEOR9nDdm(w-iIk4G;SnHi?_3reQy@CZ+ow%m&ne(' );
define( 'NONCE_KEY',        '>()4wf})8k}tT~`!p8v]/l<?o.k=)z1eQBh3f{%?2Y.T8^d0e)}{&KWt<>VopMRR' );
define( 'AUTH_SALT',        '0606=Ykr]{+Nc--L>{K#)Q;_j=3MA*.[j7B;)hLeOBTk[(7T5f$7J<d*^b{)|D5{' );
define( 'SECURE_AUTH_SALT', 't,Z(*f0E87qc~lv{=z;b,]tgU icdtRNa+2QoxWe5fS(Be|/sePV5%Y&[/wwmyb|' );
define( 'LOGGED_IN_SALT',   '3Pe_T(oRh WX+]ICwRpl]{FMMOV{3I6Fq+/$[)A|u5iTNGf2S1Wf4{A;PuWEZB?b' );
define( 'NONCE_SALT',       '=x((9adZb1DO<[i68QJYgv|# +:HFif4=#-CDcU|F%L]WU&>7TbcG8{08;a!uLzt' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

// Contact form
define( 'WPCF7_AUTOP', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
