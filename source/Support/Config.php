<?php
/**
 * DATABASE
 */

const CONF_DB_HOST = "localhost";
const CONF_DB_USER = "root";
const CONF_DB_PASS = "root";
const CONF_DB_NAME = "mvcoo";

/**
 * PROJECT URLs
 */
const CONF_URL_BASE = "http://www.localhost/mvcoo";
const CONF_URL_ADMIN = CONF_URL_BASE . "/admin";
const CONF_URL_ERROR = CONF_URL_BASE . "/404";

/**
 * DATES
 */
const CONF_DATE_BR = "d/m/Y H:i:s";
const CONF_DATE_APP = "Y-m-d H:i:s";

/**
 * SESSION
 */
const CONF_SES_PATH = __DIR__ . '/../../storage/sessions';

/**
 * PASSWORD
 */
const CONF_PASSWD_MIN_LEN = 8;
const CONF_PASSWD_MAX_LEN = 40;
const CONF_PASSWD_ALGO = PASSWORD_DEFAULT;
const CONF_PASSWD_OPTION = ['cost' => 10];

/**
 * MESSAGE
 */
const CONF_MESSAGE_CLASS = "trigger";
const CONF_MESSAGE_INFO = "info";
const CONF_MESSAGE_SUCCESS = "success";
const CONF_MESSAGE_WARNING = "warning";
const CONF_MESSAGE_ERROR = "error";

/**
 * VIEW
 */
const CONF_VIEW_PATH = __DIR__ . "/assets/view/test";
const CONF_VIEW_EXT = "php";


/**
 * MAIL
 */

const CONF_MAIL_HOST = "smtp.gmail.com";
const CONF_MAIL_PORT = "587";
const CONF_MAIL_USER = "fredericosantana11@gmail.com";
const CONF_MAIL_PASS = "engels967947";
const CONF_MAIL_SENDER = [
  "name" => "Frederico Santana",
  "address" => "fredericosantana11@gmail.com"
];
const CONF_MAIL_OPTIONS_LANG = "br";
const CONF_MAIL_OPTIONS_HTML = "true";
const CONF_MAIL_OPTIONS_AUTH = "true";
const CONF_MAIL_OPTIONS_SECURE = "tls";
const CONF_MAIL_OPTIONS_CHARSET = "utf-8";