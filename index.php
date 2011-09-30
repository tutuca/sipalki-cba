<?php
require_once(__DIR__.'/lib/flickr.php');

$app=require_once(__DIR__.'/lib/base.php');
$app->config('config.cfg');

Flickr::setApikey('86e5f5039a05d7349f7e4d7ada8fa7c8');
Flickr::setFormat(Flickr::PHP);

$app->route('GET /', 'Main->home');

$app->route('GET /album/@album_id','Main->album');

$app->route('POST /contacto', 
    function() use($app){
        
        $mail=new SMTP(
            $app->get('SMTP_SERVER'),
            $app->get('SMTP_PORT'),
            $app->get('SMTP_ENC'),
            $app->get('ADMIN_EMAIL'),
            $app->get('ADMIN_PASSWORD')
        );
        $app->set('name',$_POST['name']);
        $app->set('email',$_POST['email']);
        $app->set('to',$app->get('ADMIN_EMAIL'));
        $app->set('subject','[SPK_CBA] Nuevo mensaje desde nuestra web');
        $app->set('message',$_POST['message']);

        $mail->set('from','"'.$app->get('name').'"<'.$app->get('email').'>');
        $mail->set('to',$app->get('to'));
        $mail->set('subject','[SPK_CBA] Nuevo mensaje desde nuestra web');

        $mail->send(Template::serve('email.txt'));
    }
);

$app->run();
?>
