<?php

setcookie('name', 'aline');
setcookie('auth', 'ok', time() + 3);
echo $_COOKIE['name'];