<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
'default' => array(
    'type'           => 'mysqli',
    'connection'     => array(

        'hostname'       => 'localhost',
        'port'           => '3306',
        'database'       => 'wf',
        'username'       => 'root',
        'password'       => '',
        'persistent'     => false,
        'compress'       => false,
        'socket'         => '/tmp/mysql.sock',
    ),
    'identifier'   => '`',
    'table_prefix'   => '',
    'charset'        => 'utf8',
    'enable_cache'   => true,
    'profiling'      => false,
),

);
