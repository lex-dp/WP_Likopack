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
define('DB_NAME', 'likopak');

/** Имя пользователя MySQL */
define('DB_USER', 'Admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '159753');

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
define('AUTH_KEY',         'nl*,N&FE(JQe1%3S+56iZS,~4h7@_LPheo4yp*S0%3sq[NWuLK~Hsvv.<ue)|~M8');
define('SECURE_AUTH_KEY',  '@><Xxha Y`(]Wr|TT!G:%#^1#0|l(Ef Xsg;(%3mJdKPR;+nnAbg!Q=aQxX3sWyq');
define('LOGGED_IN_KEY',    'K+hA#SqEMD]@aSJ%krKrlReP5&Cx#+#/azyLd~>N$1;p}65yfs>R|SqEAhZ=4QUd');
define('NONCE_KEY',        '^AwFaL<91<`#j/JV}a4 sX@!=v4%v8(<N~y&.uz@}QHn<FA}&~:7~ZP^3;hjwWc;');
define('AUTH_SALT',        'UgL|L jVRwvIpI6?YDEEJ86 RXffC4^sR4io]&oxe@Hn1RF0F00Hr5)Z`@YW:!(t');
define('SECURE_AUTH_SALT', '+[b)l2tl/!D}f/RoT~k,a M}M-BV[ARpef2&?Q9AbRzGRmvL&a;X`tR*Tgc+.$MY');
define('LOGGED_IN_SALT',   '0IO8;,4jt=>O0OoL (DH92EkK06sI4foT@vI/qF/FIz2qB@G]xeI`Ebu:mYqo#:E');
define('NONCE_SALT',       'X)G)-`E7fLc TJ]9_*9}X_9}Ip_9;fRP<:I`ty9K~ ~(c_IYXZR9iP9]gs<K,^z ');

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
