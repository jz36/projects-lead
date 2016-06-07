<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\OpenServer\domains\allmind\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'allmind');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '55|391+h*>y1bkT`pXEN2b(^Ft$@Mn[J1s@U$HJ1h>G%[B5N[e)APR|qm Wh7onk');
define('SECURE_AUTH_KEY',  'MtFxin+/g>tLHhM=)2%x^;J,Aa=B^ySB8#Zm1Dgx3 =9*H!HYVY.o=<vH2IQg-R9');
define('LOGGED_IN_KEY',    '#pV9q:.A*rpq8+HXQ{9[b;`K~[cu<NicX/LFH^Fjzwu.~ePgM<MGn]2q !j7&z`3');
define('NONCE_KEY',        '@,n]Yzf%`|62t[TK#= -Cg=%u+]g3Djo@`5he YtmE}8akFQ A=fZ8yH+%=N4ahA');
define('AUTH_SALT',        '+Dm1|cDru^Dp/;@v7%Fif*pL[zl+>A&OGF6wL`d|EFv-vB:[$mC^+&!+saaZ^!3;');
define('SECURE_AUTH_SALT', 'rF+J_5$L~eVyv2&<RN<F~fn5fR1Y])C:Q[1zVg7$?BljK/+KUq:aMaN].)|PeT:N');
define('LOGGED_IN_SALT',   'a:UY@&t|J5q)Nrl^z%9!)bE~gsGCG;kEy/ckt{tCgt<f3>vz,9qg=59QyhKVi8K$');
define('NONCE_SALT',       'cog0L2@J&il?B!$gNhrZgz%g)6yf]I:~D?i|24o2sdT!@%1qVC)U@7JTt(;K@^,^');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
