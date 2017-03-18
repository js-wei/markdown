<?php
return [
	'view_replace_str'  =>  [
		'__ROOT__'=>'/',
		'__PUBLIC__'=>'/static',
		'__PLUG__'=>'/bower_components',
	    '__CSS__'=>'/static/index/css',
	    '__IMAGES__'=>'/static/index/images',
	    '__SELF__'=>$_SERVER['REQUEST_URI'] 
	],
	//'default_return_type'=>'jsonp',
    'default_jsonp_handler'	 => 'callback',
	'paginate'               => [
	    'type'     => 'bootstrap',
	    'var_page' => 'p',
	    'list_rows'=>10
	],
	'THINK_EMAIL'=>[       //邮件发送
		'SMTP_HOST'=>'smtp.163.com',
		'SMTP_PORT'=>25,
		'SMTP_USER'=>'jswei30@163.com',
		'SMTP_PASS'=>'jswei30',
		'FROM_EMAIL'=>'jswei30@163.com',
		'FROM_NAME'=>'官方邮件'
	],
	'UPLOADE'=>[
		'path'=>ROOT_PATH . 'public' . DS.'uploads',
	],
    'UPLOADE_IMAGE'=>[
        'size'=>1024*1024*5,        //5M最大
        'ext'=>'jpg,png,gif,bmp,webp'
    ],
    'UPLOADE_FILE'=>[
        'size'=>1024*1024*8,        //8M最大
        'ext'=>'txt,zip,tar,xls,pdf,doc,docx,rar,xlsx'
    ],
    'UPLOADE_KINDEDITOR'=>[
        'size'=>1024*1024*8,        //8M最大
        'ext'=>'jpg,png,gif,txt,zip,rar,tar,xls,pdf,doc,docx,xlsx'
    ],
    'ENCRYPT_KEY'=>'THINK',         //加密key
];