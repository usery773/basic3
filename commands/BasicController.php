<?php

namespace app\commands;

use \yii\console\Controller;

class BasicController extends Controller {
public function actionIndex()
{
echo "HelloWorld";
return 0;
}
}
