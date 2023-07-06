<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'projet' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';OP*Afd!h6{A0TuH`c#8Zl24/gOHmy$O9 Pq<jES1>Gtm:$={0oaNNuP6/qUYKbO' );
define( 'SECURE_AUTH_KEY',  '|<GLC;s8uFU/r:0X]%WCq(cje?)/n)mB^r(669SE|LTHqT;g?|NRM#B9&QLtU~~a' );
define( 'LOGGED_IN_KEY',    'FiQB[qsgOMs%1;)N+5])~&uO}evYp4H8^w;xZf^iFA7z[qenu+E)i0F1g$5%&r)j' );
define( 'NONCE_KEY',        '@bK R(ZQ%CB]2{yzOmh>>$8@syQ.myob%.~#(H)cQdG0ttyRTC|!|sZZ<%^Z15XA' );
define( 'AUTH_SALT',        'SzlXR>+[w*aL@O:Q<aau2H0a5$HSnp|@l`[>k.N4{Uo~H>E1:cI9J;j<igw4Gh_Q' );
define( 'SECURE_AUTH_SALT', 'l``TC:1_t6xB8<e{[8JL{itgakM:T]7J#2Q+T942bHQVm%/%E$=-}.aZ{CmzRCR#' );
define( 'LOGGED_IN_SALT',   'FG3yIe^M[;E&VsjmI.tFenBx?s}IuDo:On_tlT!m#gFaW1)AF~ 5URO~{:8{!pqD' );
define( 'NONCE_SALT',       '=ph:mrM}u9gcV4i| Btb9g|a?9xH{X(WY1pN;zbQScqj-#4eB%^Rz5I#jImAN~,V' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
