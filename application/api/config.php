<?php

//配置文件
return [
    'exception_handle' => '\\app\\api\\library\\ExceptionHandle',
    'notify_url'       => '/notify', //对应路由地址中的回调名称
    'image_domain'     => request()->domain(), //图片地址域名
];
