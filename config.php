<?php

    function POST($client_id, $redirect_uri, $auth_code, $appID_secret_base64)
    {
        //define parameter using array
        $data = array('grant_type'=>'authorization_code', 'client_id'=>$client_id,'redirect_uri'=>$redirect_uri,'code'=>$auth_code);

        //build http query 
        $query = http_build_query($data);

    //create http contex details
    $contex_data = array(
                         'method'=>'POST',
                         'header'=>'Authorization:Basic '.$appID_secret_base64,
                         'content'=>$query
                        );

    //create contex resource for POST request
    $contx = stream_context_create(array('http'=>$contex_data));

    //store resuts in variable
    $result = file_get_contents('https://graph.facebook.com/oauth/access_token',false,$contx);

    return $result;

    }


?>