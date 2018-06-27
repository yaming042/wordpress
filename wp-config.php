<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wp_blog');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'ef667be0e4');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N-}D~G=i,+!M<YbCmq dAjaN:x<Wz[hx;1S/qYJ3W8A%=]HsJS)X^{<A81h403pp');
define('SECURE_AUTH_KEY',  'd5GDN,uZ`P5w.7j+LBj~K1Xm7x-YKn7-tS-*)~_ 9zZ](*1~]Gqfux<r)[C4f[Tz');
define('LOGGED_IN_KEY',    'WPxb(f(gt$5NMz;ROj,E0=VqVwd6}b;:W^&~!KQc]q5[+B|:x)JqsW$zw<R-zQZF');
define('NONCE_KEY',        'EZ],2%QQI3 WW}$MSO]H(U7GXzJ-mwIzV%(gdnrDV(-{Vy=-z-lP$R~Ql-%XeFqe');
define('AUTH_SALT',        '9[D-95QQ&l6iBLw^3 r=_l~AYTEiF-/h@{?2bw1vIn*o``C{qv-Xu7sMUf6u#O j');
define('SECURE_AUTH_SALT', '2D0x 1R7oQQUM^Q[i.X#hbcoIQgR~B[FS@d$yP`#JL> hCpt:0|gBD5jgz/H$3<2');
define('LOGGED_IN_SALT',   'Z<)s3~[i[:V;vs!4~a1<LqT}cZ/xu#+PyQPHOD|F[;`0Vj$/]irFvs({J!91u:VE');
define('NONCE_SALT',       'MpesjV;Eh[Uf{CO edFgD}$Tj@i`I@AV Ll_;#jAq~.?;EoKf*$Z^=$z0OsvD*|F');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/**插件安装略过ftp链接，另外需要修改目录权限为777，事后需要改回原权限*/
define("FS_METHOD","direct");

define("FS_CHMOD_DIR", 0777);

define("FS_CHMOD_FILE", 0777);


/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
