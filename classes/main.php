<?php
class Main extends F3instance {
    function home() {
        $albums = array();
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
        $this->set('albums', $albums);
        $this->set('title', 'Bienvenido');

        echo Template::serve('index.html');
    }
    
    function album() {
        $photos = array();
        $params = array(
            'photoset_id' => $this->get('PARAMS["album_id"]'),
            'method' => 'flickr.photosets.getPhotos',
            'extras' => 'url_z, url_t'
        );
        $response = unserialize(Flickr::makeCall($params));
        foreach ($response['photoset']['photo'] as $value){
            $photos[] = $value;
        }
        
        $this->set('photos', $photos);
        echo Template::serve('album.html');
    }

}

?>
