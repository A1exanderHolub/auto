<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'auto_bd' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?biR,{o^ssT>Sy]:+(vR#5I&e`;wkn3t<bnEe}WPYU(!>@Nzf1sr:=T9Y5#rG EV' );
define( 'SECURE_AUTH_KEY',  'e#sl4N`NnTDHSRVcHWTv^E/m!A,|~Wtm9W!u8{lE1d&,E:I*#fH Dk5;xT A$@K`' );
define( 'LOGGED_IN_KEY',    '7NVr:J/u:x`G2P=qU(z=<SE>2le`GS Za*>:o,Xw8-7li^6(Q~e.*XX< yM$}3WQ' );
define( 'NONCE_KEY',        '#L<C/F,9a9V!B=y 4w^L]8nGp xXRS3]]+vC2WEU%(R%dT40/9P7RR(X?BE.b-x]' );
define( 'AUTH_SALT',        'c^B7UuY;|PeL$.%) Nn1!e:y[Cn8~Na`9D4P2kcaKOE% p4PuX5t}U5~dF#]4Hk#' );
define( 'SECURE_AUTH_SALT', '7K86Fl~xRXk,h7+u2:%Xx<Yi~X^ec{I#eGdsxzN={6|O_)BrWXUv4.I9@jQii@^q' );
define( 'LOGGED_IN_SALT',   '8{d/}pvbSJ&Io%1MsSN~W@%h92X-v$axe-s:y1k FUKM oCqSw<WF|4chd>*!:xs' );
define( 'NONCE_SALT',       'w>Su(%.eC<t=Vvt}k@}=I:>UFLhyjTN=+qX3[5jOm2*QgIHy)D9e /]_1,OB<aYm' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
