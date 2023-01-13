<?php
echo 'Deployment</br>';
$res = shell_exec('cd .. && git pull 2>&1 && export HOME="/var/www/p55/data/" && php composer.phar install 2>&1 && php yii migrate --interactive=0 2>&1 && php yii cache/flush-all 2>&1');
echo nl2br($res);