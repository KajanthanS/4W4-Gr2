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
define( 'DB_NAME', '2023_id' );

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
define( 'AUTH_KEY',         '$m.ztRm){asj`*[,QbM|/gY=r:=z54yc$Vx2sdDFs+v<o%sJ$S^Sv,a(XUQeIWQ{' );
define( 'SECURE_AUTH_KEY',  'U1yOh0pI! iJh+t5i+1sYv6nb:!pSz6o8v&zGtGLQl;*CFwcK5#j=EF8v3kB5_~Z' );
define( 'LOGGED_IN_KEY',    'Wzf&@*.a^[.o7z{IO_Q7RASrqNFjzZ(UsYcOJ*}47n5WkO-y65r8^bkHqp~BoxqJ' );
define( 'NONCE_KEY',        'Awl*!HRk={PO{A2n-^):#})F+?<;SB(froX[&=u;mFbS<JGwJ7}!IPmhiz{+HeW%' );
define( 'AUTH_SALT',        'ZxiYZI#f,euC{(:9[^Eg1}Qtk<N&Uj^*]>:-0~kQ`Ji1Qhl1#DcB1L)+-!uFpmjQ' );
define( 'SECURE_AUTH_SALT', 'S+z[5;,s)NNka=@[C7bI0>xDWRC|FWiUrxe%AYE`VW%:AqbT39w_KEvYq>s99[$J' );
define( 'LOGGED_IN_SALT',   'C)2Zl&sY;_A$x8:OFw&@|WO4IOLtB-!8 Wr#lo%>OUd/}Nqi`[cAe%|f@&sj)Bt`' );
define( 'NONCE_SALT',       '@RC]_DdZ6kI8cPKMw[{a9au6_f{d4>dFO^J.sR*NrXj1U3iVup<g1ACA5=-:T{Yu' );
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
