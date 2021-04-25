<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/** Desablilita o Editor de Temas em aparencia   */
define('DISALLOW_FILE_EDIT', true);



/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pG_P)@nT7[-f<3 c89^R5 pM8+cVk^`#V`P/OC:Zt!ZjEdx^TN(($h]v^m&rkrhB');
define('SECURE_AUTH_KEY',  'B#;CQCV^)9Xa;>67[.VAQ)l} IF!#e<<<MWj=Wtmd])49U#)mV*T8K1+G@D?#{^@');
define('LOGGED_IN_KEY',    'EJ-t/|$y&ATQ]>g|@u4}u|(hs:4&zVk!`]aX<a=]r|)==`0;}N6bC`=8GnZd8-V(');
define('NONCE_KEY',        'Fz[&fyM+4WdeauSSlq^M=AhQBf#W8sQHG8Tam(0W;:oDiF(*lK^1J7Z?Hk-bZ>Ld');
define('AUTH_SALT',        'G}D?5ZJ!x0+SFc(FZ%y-w,g{Kr,J=UD-ARNqRBjFp]|/R>Y84}ZDZds~3khMJCmp');
define('SECURE_AUTH_SALT', '7po#CB[+x+.Osj[f%=r_d^EJ0JrMlp:!ABG)LW/H8g)SwQ R|o|VL{`^Vu-%=NQn');
define('LOGGED_IN_SALT',   't!e.mtb{`XT;K}V-?%y2UcA}?4%r[[Vj~o:b+e[|;^p=w+ZG|#*1F=+RZ}/.SkZR');
define('NONCE_SALT',       's-A.-9iN2MKrQSZnFVC*4+01>0`-l?Qs.3TS7Ma+J0D(K_izZZQu6?]AWwFlWEO/');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

