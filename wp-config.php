<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');
// define('DB_NAME', 'prsab8yx_msestilo');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');
// define('DB_USER', 'prsab8yx_dev');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');
// define('DB_PASSWORD', 'cnQ7kSGJKy');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J!m8!U66okJc$og>aRIZyy*mF*YJ)j f!%k1NTGNOZW}~=rBBBH,,$fUO#90L])0');
define('SECURE_AUTH_KEY',  'ei8Q3Zl+?d:4N:8W(5p<oM~b|W%?UI#j6j6NmngnBSbuE1}c8eUsN,[gEKw!15KS');
define('LOGGED_IN_KEY',    'i6f-{~{{~ug}4UsN_.!_2<drQ^m6wN!4zF_W0r~NEcy|W(2MfGv{kS~>hN)bMOw5');
define('NONCE_KEY',        '6UB8<bX,qfF`2paix xY67GS9x>@y.Yy-hKFvZ5=GjvO~c_;xI}q$q2]yqW{J9Y9');
define('AUTH_SALT',        'g9)d*5Wg@-efY|Ee%7@s1d-T1Ts4u:;Je0>%{[eC/bl`2?Mu58b^@W/?,7eVt3E=');
define('SECURE_AUTH_SALT', '0O_gI;X)rkmU]{^D|+<c?Jm?#V4UuF[EFs)2]y &y^716vrkV^sI;!xv&32978E}');
define('LOGGED_IN_SALT',   'u, c5Lxf@fU3e2@4]axCZH0X/afx-J?S)r~%t5XF^BwLB:QF$ S,a8kkxBqvvBGV');
define('NONCE_SALT',       'k_iP?uhc 1;b+j-dZl{>f@;_n9Bt sH.fx4fKlZ-lg<wOcmk fP>?i`xS[:)HqX_');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
