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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'bigudi' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'gt#n`K9%hUSsi]ltWj7g.FMM`LFf5UK$Mus> D>LAdLrzeEq~= BEI6u,P<%r(CZ' );
define( 'SECURE_AUTH_KEY',  'fv/7gSAvVbi^)a}IsvuJlVYa>R=wi7`}vkM#NF95OJQjs2HYyvIIZdjO=2Fws Nm' );
define( 'LOGGED_IN_KEY',    '1j%jQ=`*-qJX9q/Frft!WyItr3l1<?YHccwiB<M{a]]n!hA3K/kzsvgBI9<Us27&' );
define( 'NONCE_KEY',        '#pmt^|;[P*f=$4crwca!+w7[6pN/`85e%f|(OhQ.m_TH3xs&7Sw0zhT~cK#P <z^' );
define( 'AUTH_SALT',        '<;r00>Jb9Hm,Bs[d63K{jGl^u1]%7N& J[j<yz@hYglg71}}IW%Ugc1qXrADtjN4' );
define( 'SECURE_AUTH_SALT', 'L;6{2KZK+P9]6fCU?WZRTcbDPA5::ZOA}o85]TWVE9]F=GInl+5B/JT0+Fr:$r)m' );
define( 'LOGGED_IN_SALT',   '):[kJ{J4x&I)hBc0<5tfQFZ8rv]d|ftEV&zUT7-+I8_2eB3irH)&fJ02C%Cu{por' );
define( 'NONCE_SALT',       'mbLWyrlY^r03KmnwQjXXhh%:3i|hk6P[r]KmCSUT|c9R%E)yTw||:F&:b@yhOHja' );

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
