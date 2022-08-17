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
define( 'DB_NAME', 'media-services' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'wordpress' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '0Nc1ng8Q@Knv t[]e;14hEg)=ST)9nL^..r#HEF+8W]3e^<(/V4z><G>LLP_^vMS' );
define( 'SECURE_AUTH_KEY',  'ev(Y^J!OsHRf{v[12b0=66ZrktJ-hF|<NqCyt>x+&+b$rhYA=JApbz^OoXu^t}(?' );
define( 'LOGGED_IN_KEY',    'z2aWP9Pd|t]K7_|yn~t(Rj.Wv74QW2+h4xiH*`^|?>.cHQERZIg0|kJWPVJ$w3V$' );
define( 'NONCE_KEY',        'KXB:LzHHJ$-z~aKH]PSg3ciGGuti)`,,dYi!;hA/h/^]6,G+VAZ2cKm(u<,O90QB' );
define( 'AUTH_SALT',        'q#xG*5prCd`YwRC<#!5wwN+Y!Kx^NHQ:Kw2$D)!?}<3Wqx}/x}}|;Kd;q;sRKP-9' );
define( 'SECURE_AUTH_SALT', 'GYO&$=H 8+In>a#Rk$iy`2+E$I||lo.,czEGqD9AK!:5AuV7d`t_U84b0k$cb1<F' );
define( 'LOGGED_IN_SALT',   '`PW=Q,td(l>/yijknvoc{&oXYC+^Y%WJ]@JG-FoTp@Uqa[v6%r3R&_Q5&k.^x!d[' );
define( 'NONCE_SALT',       '|<4|]Ap~6dD*N_|H@X$ 5/eN#D3(F*HsVrZ$g.i8n5ev7X Bs$`%%n,wyzQyq}v]' );

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
