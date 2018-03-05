<?php
/**
 * Created by PhpStorm.
 * User: Aspire
 * Date: 05.03.2018
 * Time: 15:32
 */

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
	public $name;
	public $email;

	public function rules()
	{
		return [
			[['name', 'email'], 'required'],
			['email', 'email'],
		];
	}
}