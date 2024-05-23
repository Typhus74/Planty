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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/>P?z;?iVfHQe<^hGAR2+heG$3tjH].rdc@ByDAM^0vbIF#j:e|r0lF`<za=%}u4' );
define( 'SECURE_AUTH_KEY',  'T5w=FWwCEnI&{O!;Tu3w}~~&f1v#+W[i#m:r{>W,F!i8r<pD0**unO0%Gqb]-d0v' );
define( 'LOGGED_IN_KEY',    ']cPCMV>ZRI*`&z5$bcNAH- r^ladu![IZN_W8d0fD=8E?f:4*@=9[eF{w8RY?k&x' );
define( 'NONCE_KEY',        '|a_ AS+zkW6A}8.?aL=n4>t0<e,.D*Rr^kV2wCXHoH)Dx]W70LKeh|7,YT?Km2%i' );
define( 'AUTH_SALT',        'ec>yEr+NKs]k=G+#Xz4QmYObo(N! Ak# .*%!M~)`~R!lT(3|.wxA$L% JJsOIFp' );
define( 'SECURE_AUTH_SALT', 'e[%M_V5eQ8]K>--:A};~!aJ30L>}JeB+!c4+NQlJkH<S)9+~f2c]yo3)@;nUF.lh' );
define( 'LOGGED_IN_SALT',   'q+4G-/sJs1OaJd+2&{4}iMt~| <lJ[8vgk ibl*$:PW(=f6cV`F)^u3w&7,Qx#iD' );
define( 'NONCE_SALT',       '<}j*Tz`5 aMT%CN} fP4Szr9ho?JhC1FW==C[w<r^rL?khaOi$`Xz&a8UePgI/1e' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
