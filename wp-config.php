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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'api_wp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UA_ RDghZ8f2q$^WK0rF}&lJR@nc`sX!Ho+.X5us([I7WG,292*(Z?,r%)^ZhS$b');
define('SECURE_AUTH_KEY',  '[tvx}6jm{1ZWPNE})jK&]^$:_Y7g bOs/hBIU>(NMIadg]6X]b|4 }FxXU[flAyU');
define('LOGGED_IN_KEY',    'f,m|om~qy#&c><?OidJ7TL_{fgM+xzZ?j>Yf^#gAZM35`6-xeW%R)#AVRY9y( ~z');
define('NONCE_KEY',        'bm:C[7bF9=5;2H3sW>zt#GecmI%vkcry5lv<Mt$*kJ8>tO|R.N<$KS2jMu*f^{%>');
define('AUTH_SALT',        '@!ckN>Efx#1>+%XpOQ(x}L;<(yb@yA)p#kQKGBZ06mANa</^S*va;>k}(LmiBjtI');
define('SECURE_AUTH_SALT', 'i?j>`z&>M]42[]y97_{/b3dv<:zqym f-Ii[{mq>o+j#=f3fVp4-rH[g:ery/x/x');
define('LOGGED_IN_SALT',   'TW7/Bv<Do/4=6[?/tkxx#{./C!f+4Y;w%C*,DL[Te$:.{II&U5PR<kjp5&.COZ(K');
define('NONCE_SALT',       ')#^2L5/o!(nt!jie#v[0Fuq^hZhY&L9)n7b3p0K7b4>Wim|UC*9t=0DX/*1[VSDv');
define('JWT_AUTH_SECRET_KEY', 'Rc+x2qU]KuGHq-8 q$+A#=,D)p?^5bvHzXr8+;hs[,~[h-0a,,,}7n|Ck|aJeE6f');
define('JWT_AUTH_CORS_ENABLE', true);

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
