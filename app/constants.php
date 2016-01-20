<?php

// Enable/disable debug
defined('DEBUG') or define('DEBUG', false);
defined('DEBUG_FILE') or define('DEBUG_FILE', __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'debug.log');

// Plugin directory
defined('PLUGINS_DIR') or define('PLUGINS_DIR', __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'plugins');

// Application version
defined('APP_VERSION') or define('APP_VERSION', 'master');

// Database driver: sqlite, mysql or postgres
defined('DB_DRIVER') or define('DB_DRIVER', 'sqlite');

// Sqlite configuration
defined('DB_FILENAME') or define('DB_FILENAME', 'data'.DIRECTORY_SEPARATOR.'db.sqlite');

// Mysql/Postgres configuration
defined('DB_USERNAME') or define('DB_USERNAME', 'root');
defined('DB_PASSWORD') or define('DB_PASSWORD', '');
defined('DB_HOSTNAME') or define('DB_HOSTNAME', 'localhost');
defined('DB_NAME') or define('DB_NAME', 'kanboard');
defined('DB_PORT') or define('DB_PORT', null);

// LDAP configuration
defined('LDAP_AUTH') or define('LDAP_AUTH', false);
defined('LDAP_SERVER') or define('LDAP_SERVER', '');
defined('LDAP_PORT') or define('LDAP_PORT', 389);
defined('LDAP_SSL_VERIFY') or define('LDAP_SSL_VERIFY', true);
defined('LDAP_START_TLS') or define('LDAP_START_TLS', false);
defined('LDAP_USERNAME_CASE_SENSITIVE') or define('LDAP_USERNAME_CASE_SENSITIVE', false);

defined('LDAP_BIND_TYPE') or define('LDAP_BIND_TYPE', 'anonymous');
defined('LDAP_USERNAME') or define('LDAP_USERNAME', null);
defined('LDAP_PASSWORD') or define('LDAP_PASSWORD', null);

defined('LDAP_USER_BASE_DN') or define('LDAP_USER_BASE_DN', '');
defined('LDAP_USER_FILTER') or define('LDAP_USER_FILTER', '');
defined('LDAP_USER_ATTRIBUTE_USERNAME') or define('LDAP_USER_ATTRIBUTE_USERNAME', 'uid');
defined('LDAP_USER_ATTRIBUTE_FULLNAME') or define('LDAP_USER_ATTRIBUTE_FULLNAME', 'cn');
defined('LDAP_USER_ATTRIBUTE_EMAIL') or define('LDAP_USER_ATTRIBUTE_EMAIL', 'mail');
defined('LDAP_USER_ATTRIBUTE_GROUPS') or define('LDAP_USER_ATTRIBUTE_GROUPS', 'memberof');
defined('LDAP_USER_CREATION') or define('LDAP_USER_CREATION', true);

defined('LDAP_GROUP_ADMIN_DN') or define('LDAP_GROUP_ADMIN_DN', '');
defined('LDAP_GROUP_MANAGER_DN') or define('LDAP_GROUP_MANAGER_DN', '');

defined('LDAP_GROUP_PROVIDER') or define('LDAP_GROUP_PROVIDER', false);
defined('LDAP_GROUP_BASE_DN') or define('LDAP_GROUP_BASE_DN', '');
defined('LDAP_GROUP_FILTER') or define('LDAP_GROUP_FILTER', '');
defined('LDAP_GROUP_ATTRIBUTE_NAME') or define('LDAP_GROUP_ATTRIBUTE_NAME', 'cn');

// Google authentication
defined('GOOGLE_AUTH') or define('GOOGLE_AUTH', false);
defined('GOOGLE_CLIENT_ID') or define('GOOGLE_CLIENT_ID', '');
defined('GOOGLE_CLIENT_SECRET') or define('GOOGLE_CLIENT_SECRET', '');

// Github authentication
defined('GITHUB_AUTH') or define('GITHUB_AUTH', false);
defined('GITHUB_CLIENT_ID') or define('GITHUB_CLIENT_ID', '');
defined('GITHUB_CLIENT_SECRET') or define('GITHUB_CLIENT_SECRET', '');
defined('GITHUB_OAUTH_AUTHORIZE_URL') or define('GITHUB_OAUTH_AUTHORIZE_URL', 'https://github.com/login/oauth/authorize');
defined('GITHUB_OAUTH_TOKEN_URL') or define('GITHUB_OAUTH_TOKEN_URL', 'https://github.com/login/oauth/access_token');
defined('GITHUB_API_URL') or define('GITHUB_API_URL', 'https://api.github.com/');

// Gitlab authentication
defined('GITLAB_AUTH') or define('GITLAB_AUTH', false);
defined('GITLAB_CLIENT_ID') or define('GITLAB_CLIENT_ID', '');
defined('GITLAB_CLIENT_SECRET') or define('GITLAB_CLIENT_SECRET', '');
defined('GITLAB_OAUTH_AUTHORIZE_URL') or define('GITLAB_OAUTH_AUTHORIZE_URL', 'https://gitlab.com/oauth/authorize');
defined('GITLAB_OAUTH_TOKEN_URL') or define('GITLAB_OAUTH_TOKEN_URL', 'https://gitlab.com/oauth/token');
defined('GITLAB_API_URL') or define('GITLAB_API_URL', 'https://gitlab.com/api/v3/');

// Proxy authentication
defined('REVERSE_PROXY_AUTH') or define('REVERSE_PROXY_AUTH', false);
defined('REVERSE_PROXY_USER_HEADER') or define('REVERSE_PROXY_USER_HEADER', 'REMOTE_USER');
defined('REVERSE_PROXY_DEFAULT_ADMIN') or define('REVERSE_PROXY_DEFAULT_ADMIN', '');
defined('REVERSE_PROXY_DEFAULT_DOMAIN') or define('REVERSE_PROXY_DEFAULT_DOMAIN', '');

// Remember me authentication
defined('REMEMBER_ME_AUTH') or define('REMEMBER_ME_AUTH', true);

// Mail configuration
defined('MAIL_FROM') or define('MAIL_FROM', 'notifications@kanboard.local');
defined('MAIL_TRANSPORT') or define('MAIL_TRANSPORT', 'mail');
defined('MAIL_SMTP_HOSTNAME') or define('MAIL_SMTP_HOSTNAME', '');
defined('MAIL_SMTP_PORT') or define('MAIL_SMTP_PORT', 25);
defined('MAIL_SMTP_USERNAME') or define('MAIL_SMTP_USERNAME', '');
defined('MAIL_SMTP_PASSWORD') or define('MAIL_SMTP_PASSWORD', '');
defined('MAIL_SMTP_ENCRYPTION') or define('MAIL_SMTP_ENCRYPTION', null);
defined('MAIL_SENDMAIL_COMMAND') or define('MAIL_SENDMAIL_COMMAND', '/usr/sbin/sendmail -bs');

// Enable or disable "Strict-Transport-Security" HTTP header
defined('ENABLE_HSTS') or define('ENABLE_HSTS', true);

// Enable or disable "X-Frame-Options: DENY" HTTP header
defined('ENABLE_XFRAME') or define('ENABLE_XFRAME', true);

// Syslog
defined('ENABLE_SYSLOG') or define('ENABLE_SYSLOG', true);

// Default files directory
defined('FILES_DIR') or define('FILES_DIR', 'data'.DIRECTORY_SEPARATOR.'files');

// Escape html inside markdown text
defined('MARKDOWN_ESCAPE_HTML') or define('MARKDOWN_ESCAPE_HTML', true);

// API alternative authentication header, the default is HTTP Basic Authentication defined in RFC2617
defined('API_AUTHENTICATION_HEADER') or define('API_AUTHENTICATION_HEADER', '');

// Enable/disable url rewrite
defined('ENABLE_URL_REWRITE') or define('ENABLE_URL_REWRITE', isset($_SERVER['HTTP_MOD_REWRITE']));

// Hide login form
defined('HIDE_LOGIN_FORM') or define('HIDE_LOGIN_FORM', false);

// Bruteforce protection
defined('BRUTEFORCE_CAPTCHA') or define('BRUTEFORCE_CAPTCHA', 3);
defined('BRUTEFORCE_LOCKDOWN') or define('BRUTEFORCE_LOCKDOWN', 6);
defined('BRUTEFORCE_LOCKDOWN_DURATION') or define('BRUTEFORCE_LOCKDOWN_DURATION', 15);

// Session duration in second (0 = until the browser is closed)
// See http://php.net/manual/en/session.configuration.php#ini.session.cookie-lifetime
defined('SESSION_DURATION') or define('SESSION_DURATION', 0);

// HTTP client proxy
defined('HTTP_PROXY_HOSTNAME') or define('HTTP_PROXY_HOSTNAME', '');
defined('HTTP_PROXY_PORT') or define('HTTP_PROXY_PORT', '3128');
defined('HTTP_PROXY_USERNAME') or define('HTTP_PROXY_USERNAME', '');
defined('HTTP_PROXY_PASSWORD') or define('HTTP_PROXY_PASSWORD', '');
