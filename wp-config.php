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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'alura' );

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
define( 'AUTH_KEY',         'n?R5u>HO/)8r8iC;&<,Fe+_oWH?>?E9R*OR1zYNr94;9.W#^xGH4vd3&VbxS{peG' );
define( 'SECURE_AUTH_KEY',  'ILB>g9Qi^mPtc_yB6uW|%H[=w0jnb9?aN-jj3-,oqeJe~zCQHn+|C`7bL*b_sj$6' );
define( 'LOGGED_IN_KEY',    'PkbuTJ=_D$/_bT(-/<* ^p&M4{hUggUPh5Ea~pG$&=!~m_z[#<(LI|g&b*4T/#})' );
define( 'NONCE_KEY',        'j%6kJ4b@Ag<io<?s|^!_MkY9.ZhOF<^rp+a5~wEra`VYVKeYXM6MK|:u]&psy`=%' );
define( 'AUTH_SALT',        't|$BH|!Y+bxSs7R2~$DDt#Htd>k+^%C0:%Lw?jPJ:0^!Y/ip4uQakPu/w!f}:NB[' );
define( 'SECURE_AUTH_SALT', 'O9yz?}RgTC@4.w:|;Jo]c-KqXHN1.;!#>UuYw,LQiZfPj!dmNWQ_ms8OeUbRUrCB' );
define( 'LOGGED_IN_SALT',   ',q-!8QVTNZ,M=QpE_0_*`uq9k)MZM_SbqsD;j.*2qvUPc/nhK=%xPZPx4i~[/MFT' );
define( 'NONCE_SALT',       'DmD-4D#AV1GTbh8`,q0gD%lzn@ET@Wji?9yFp[ZE:RS}c<6GhYD7**~j|J8@L^ll' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
