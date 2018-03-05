<?php
/**
 * Created by PhpStorm.
 * User: Aspire
 * Date: 05.03.2018
 * Time: 14:19
 */
use yii\helpers\Html;
?>
<?= Html::encode($message);
?>
<H2>Hello,world - your message is -  <?php echo Html::encode($message)?></H2>
