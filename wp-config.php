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
define('DB_NAME', 'voyagesdemesreves');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '&[B`B$ DwxbX+L}iL.3MDHry_?0tM~C0zfI#rp<{3ZI$]TGhDTl IwC1P67)CE_!');
define('SECURE_AUTH_KEY',  'G9Mrzvd|OQ.m n-Nvpdj`G7#5{I2os,T`Ury7C;lx*2~#IzaqPQ^z-k6?RazDC=:');
define('LOGGED_IN_KEY',    'sj}/hL`oo ~(Cn7VPIeHDW:;I>cT&9*2J^?|LQi}-GI0!R#D*mcq5/_P;jZB0bl6');
define('NONCE_KEY',        'zIcMkh8akls<UGh}/%;u`=QIeND{7nsk8[h{_2oH78Sc^so$G%e--pG Zg^aaMmQ');
define('AUTH_SALT',        'R?YA,.W0^u$8f|9GS$E }svympn?nroM`yr.zMje{-sh7wM!^rqXcl.M9}QaJUq9');
define('SECURE_AUTH_SALT', '=|I4DXwU([o!XIBY0l;2:(%EzpULG:Tch_#7D=-`R-.tqo,x?keP@|,XplhvA=JV');
define('LOGGED_IN_SALT',   'ykj88N~F{!d5{i2*M,bjNT7`Y3VXaDNk`C~,k70LC%LX{R0yb3yKLtA2gD4D>yoC');
define('NONCE_SALT',       ';OYAdHS8yY([;Qe8cJ#*%.QyW9JH*x~OWp_CM35UZ2$2h~y#]%}?GaIE$84~vKR2');
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
