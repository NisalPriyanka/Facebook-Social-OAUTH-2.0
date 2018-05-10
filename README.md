# Facebook-Social-OAUTH-2.0

<h3> How to make this work </h3>

<b> If you are not willing to change REDIRECT_URL [ Easy way ] </b>
<ul>
  <li>Your localhost should be "https://localhost/../.."</li>
  <li> Copy https://localhost/Facebook-Social-OAUTH-2.0/index.php, https://localhost/Facebook-Social-OAUTH-2.0/server.php , https://localhost/Facebook-Social-OAUTH-2.0/redirect.php into your facebook APP "Valid OAuth Redirect URIs"  </li>
  <li> 
    Change follwing parameters in following functions.
    <p>AUTH_URL($client_id,$redirect_url) -> change $client_id = your App id </p>
    <p>get_auth_code($client_id, $redirect_uri, $auth_code, $appID_secret_base64) -> change $client_id, $appID_secret_base64=Base64(YourAppId:Secret)  </p>
  </li>
  <li> Done! </li>
  
  
</ul>

<b> if your willing to change REDIRECT_URI or everything! </b>
<ul>

   <p> Following paremeters should change </p>
   <li> AUTH_URL($client_id,$redirect_url) => change both $client_id, $redirect_uri </li>
   <li> get_auth_code($client_id, $redirect_uri, $auth_code, $appID_secret_base64) => change $client_id, $redirect_uri, $appID_secret_base64. <b>Don't touch $auth_code parameter</b> </li>

</ul>
