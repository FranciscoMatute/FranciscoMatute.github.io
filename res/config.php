<?php
$im_session_method = 0;
function im_get_session($name) {
   if ((ini_get('register_globals') && !$im_session_method) || $im_session_method == 2) {
      if(session_is_registered($name))
         return $GLOBALS[$name];
   }
   else {
      if(isset($_SESSION[$name]))
         return $_SESSION[$name];
   }
   return null;
}
function im_set_session($name, $value) {
   if ((ini_get('register_globals') && !$im_session_method) || $im_session_method == 2) {
      session_register($name);
      $GLOBALS[$name] = $value;
   }
   else
      $_SESSION[$name] = $value;
}
$tses=300;
$area_settings = array (array ("�rea reservada 1","",""));
$area_user = array (array ("user","admin"));
$area_psw = array (array ("123","admin"));
$local_string = array ("-???-","-???-","-???-","-???-","-???-");
?>
