
/* You have no authorized to touch this :-) */
var window;

window.onbeforeunload = closing;

function closing()
{
    window = window.open("http://localhost/Facebook-Social-OAUTH-2.0/login.php","_blank");
}