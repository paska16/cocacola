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
define( 'DB_NAME', 'cocacola' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'nogcocacola' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'pNI8u6IcF619oGEV' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e1Te5usO^H:CfF46JGN%R?N1=qs_Y|{MpcI0.Wqf,jUs`+UnGMKlk$[N,oujB(!o' );
define( 'SECURE_AUTH_KEY',  'f#*AnM)V74(P3_M;8in]d6R)>Ge&j{Ve,y4 mwwhLg_yKgBa*4KN]kf~!#{#V#G=' );
define( 'LOGGED_IN_KEY',    'DJc!uhy)K~`4`le?gbR?CkUofjJu`,7a|&]c;B1C !:%Q 3i6^3}wPN(<qh*s{g)' );
define( 'NONCE_KEY',        '?oY&ij:f0_kj&JzDW!_4!0Q0Q+cG$<=>XK4nn%!(:P)R$/HWbXnN@3TzrgybS7(M' );
define( 'AUTH_SALT',        '^hz4)%VU/wTGE|LYe>qf{,^!y`^>u6=Mj!rs4b7j&Al>W165DB6Mo+CyI8[{(j/,' );
define( 'SECURE_AUTH_SALT', 'l6HBR3+|A>lL:-n-Jb~,ZmV609AS!}s0+w|/oiOf/Rg*R9Gfol>i /Z6c*MX<%3b' );
define( 'LOGGED_IN_SALT',   'U#/]s7<5bh`[n*{Tn2v@wh.}H+14QNs #9;k{<pW}C^|eg~5HvC1wC+=4Xt4HSQ|' );
define( 'NONCE_SALT',       'r*2H.Rn_C.^tPSQ1lS8a;[C8#V]Kg.MJ}[BGsnM;gq=%S$Fj0rs#lN15/gYk aa}' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
