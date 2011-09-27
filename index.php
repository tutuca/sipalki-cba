<?php
require_once(__DIR__.'/lib/base.php');
require_once(__DIR__.'/lib/flickr.php');

Flickr::setApikey('86e5f5039a05d7349f7e4d7ada8fa7c8');
Flickr::setFormat(Flickr::PHP);

F3::set('CACHE',FALSE);
F3::set('DEBUG',4);
F3::set('UI','templates/');

F3::route('GET /', 
    function() {
        $albums = array();
        /*
        $params = array(
           'user_id' => '67705846@N02',
           'method' => 'flickr.photosets.getList',

        );
        $response = unserialize(Flickr::makeCall($params));

        foreach ($response['photosets']['photoset'] as $value){
            $params = array(
               'photo_id' => $value['primary'],
               'method' => 'flickr.photos.getInfo',
            );
            $photo = unserialize(Flickr::makeCall($params));
            $albums[] = array(
                'id'=>$value['id'],
                'photo'=>$photo['photo'],
            );
        };
        */
        F3::set('albums', $albums);
        F3::set('title', 'Bienvenido');

        echo Template::serve('index.html');
    }
);

F3::route('GET /album/@album_id', 
    function() {
        $photos = array();
        /*$params = array(
            'photoset_id' => F3::get('PARAMS["album_id"]'),
            'method' => 'flickr.photosets.getPhotos',
            'extras' => 'url_m'
        );
        $photos = unserialize(Flickr::makeCall($params));
        */
        F3::set('title', 'Album');
        F3::set('photoset', $photos);
        echo Template::serve('album.html');
    }
);

F3::route('POST /contacto', 
    function() {
        F3::set('title', 'Bienvenido');
        echo Template::serve('index.html');
    }
);

F3::run();
?>
