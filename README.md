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

<b> if your willing to change REDIRECT_URI or everything! [Expert Way] </b>
<ul>
  <li> Your localhost should be "https:" </li>
  <li> include all your redirect urls into your facebook APP "Valid OAuth Redirect URIs" section </li>
  <p> <li> Following paremeters should change in functions </li> </p>
   <li> AUTH_URL($client_id,$redirect_url) => change both $client_id, $redirect_uri (where my Authorization code should send) </li>
   <li> get_auth_code($client_id, $redirect_uri, $auth_code, $appID_secret_base64) => change $client_id, $redirect_uri (where my Access token should send), $appID_secret_base64. <b>Don't touch $auth_code parameter</b> </li>
   <li> Done!</li>

</ul>

<h4> <code> Developed and Coded by : Nisal Priyanka </code> </h4>
<h4> <code> Mail : nisalpriyanka96@gmail.com</code> </h4>
