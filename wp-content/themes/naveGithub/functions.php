<?php

function my_rest_prepare_post($data, $post, $request) {
     $_data = $data->data;
     $fields = get_fields($post->ID);
     foreach ($fields as $key => $value){
         $_data[$key] = get_field($key, $post->ID);
     }
     $data->data = $_data;
     return $data;
 }
 
 add_filter("rest_prepare_streamer", 'my_rest_prepare_post', 10, 3);

?>