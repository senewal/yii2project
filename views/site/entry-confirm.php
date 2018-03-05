<?php
/**
 * Created by PhpStorm.
 * User: Aspire
 * Date: 05.03.2018
 * Time: 15:55
 */

use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
	<li><label>Name</label>: <?= Html::encode($model->name) ?></li>
	<li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>