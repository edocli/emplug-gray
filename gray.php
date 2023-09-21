<?php
/*
Plugin Name: 网站变灰
Version: 0.1
Plugin URL: https://utf-x.cn/
Description: 该插件可将整个站点变为灰色，以示悼念。
ForEmlog: Pro
Author: UTF-X
Author URL: https://utf-x.cn/
*/

!defined('EMLOG_ROOT') && exit('access deined!');

function gray() {
    echo '<style>
            html {
                filter: grayscale(100%);
            }
        </style>';
}
addAction('index_head', 'gray');