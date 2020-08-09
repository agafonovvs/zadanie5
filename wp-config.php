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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{aQxd[EVyWFx:hGVo7=qS(!GiAU*D*(w2w<bWXADfQ(%L:rmErW=)uCXtv#c81m?' );
define( 'SECURE_AUTH_KEY',  ';@zNAyeE-Arh3#fA*r,1_<8aO #Oa8.a1a,zAQdlK+layH{&e$hRu6U(@1yIllbF' );
define( 'LOGGED_IN_KEY',    ':geUB(u,Jo#[<0Qe3M(2uJZ;a/iA0ko$-jH-6@=.Uw>q%uoYID[2z1SJXW0`b}NF' );
define( 'NONCE_KEY',        'GaRZW<~GD.&b@=&:)EQ_N${<0kWETOJXc}6+zC}g+aX;P;r[}R-[XPR&UddleC(4' );
define( 'AUTH_SALT',        '3HeU&%xs.]_F#sVA.aY)yBAGx<W>X0Ga]m ,ve-49Q]XTsm$Mf]4[(r+/0R.`rup' );
define( 'SECURE_AUTH_SALT', 'pe}V^YHsu7Fh{bT[.2Y-_^E,6L+Ysf%yk}I+Wn9K=RmsWW9yKgZk7Q8(H2zPrc4?' );
define( 'LOGGED_IN_SALT',   '1`>|P<XnM:Oxy-H3 B@W6}OKV3j3`/(BSus9N9q^ ( {I-e90KFr^,1[ILM[@}p`' );
define( 'NONCE_SALT',       'TS,.OUGfAO5AiM5|A?P=LkB fLNg<%`C@(Y7i,88!E2r$25RSG[y*g`^AG~b{],M' );

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
