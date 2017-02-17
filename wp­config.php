<?php 
define('DB_NAME', 'wordpress'); 
define('DB_USER', 'wordpress'); 
define('DB_PASSWORD', 'piebohmaivee3bair7xeZ2ohlech4lah'); 
define('DB_HOST', 'db'); 
define('DB_CHARSET', 'utf8'); 
define('DB_COLLATE', ''); 
 
define('AUTH_KEY','Qh2DMX?XcGa>:<^>*=I|}6cthvTW#},f>pwP{owHi5QI2Za­d4886uR:X)3X|e9'); 
define('SECURE_AUTH_KEY', '~8WX>%F:,=Sv[6Puau@KTp%Xk0GQnS(pDk=_{0.HH$6fWV­=o&G8xxjJ*&jOl{l7'); 
define('LOGGED_IN_KEY', 'b:2+58CatNxU*Q$C=V/55.­G%0v?3y:wUc4%$(GLmNky:|?;{q3>c+B%viZo9dxj'); 
define('NONCE_KEY', '#99dXC9XUCf/((9{USC#0b3FNau%Z[­Wwci@`S4`m*G{Y|Rm1C9@Y:V$ Pnw)Ttf'); 
define('AUTH_SALT', '2eQNR­1w{d~,56jF<IqTyoL>Rfq2$u{hU­SeILjFXKiSGd!Q<LC?Pz^O8!1jhQAD'); 
define('SECURE_AUTH_SALT', ':tWqYc1AY~(6+!­y([uk9BH~aM[=b)kLWn%Q4D<D2R1D{gv|^[+|+&t­91,wNeoT'); 
define('LOGGED_IN_SALT',   'R­[%:C!Z]4L14T?iv+@`Ybe*/>,F­*fzk+s<1Ft1}}PjBMl#<>Q4­tG*+%6aua='); 
define('NONCE_SALT', 'zrAGH|c.|6;XHd1Y`dPL!j(rlnZPJu}7=CwR|rF:A+|­^x]R26X:R=o?!=i~1t/^'); 
 
$table_prefix  = 'wp_'; 

define('DISALLOW_FILE_EDIT', true); 
define('WP_DEBUG', false); 
 
/* That's all, stop editing! Happy blogging. */ 
 
/** Absolute path to the WordPress directory. */ 
if ( !defined('ABSPATH') ) 
        define('ABSPATH', dirname(__FILE__) . '/'); 
 
/** Sets up WordPress vars and included files. */ 
require_once(ABSPATH . 'wp­settings.php'); 
?>
