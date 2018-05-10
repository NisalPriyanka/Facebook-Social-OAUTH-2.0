# Facebook-Social-OAUTH-2.0

<h3> How to make this work </h3>

<b> If you are not willing to change REDIRECT_URL [ Easy way ] </b>
<ul>
  <li>Your localhost should be "https://localhost/../.."</li>
  <li> Copy https://localhost/Facebook-Social-OAUTH-2.0/index.php, https://localhost/Facebook-Social-OAUTH-2.0/server.php , https://localhost/Facebook-Social-OAUTH-2.0/redirect.php into your facebook APP "Valid OAuth Redirect URIs"  </li>
  <li> 
    Change follwing parameters in following functions.
     <li> AUTH_URL($client_id,$redirect_url) -> change $client_id = your App id </li>
  </li>
  
  
</ul>
