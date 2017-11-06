<?php
/**
 * Created by PhpStorm.
 * User: 张强
 * Date: 2017/3/12
 * Time: 10:50
 */

namespace frontend\modules\life\controllers;

use common\models\blog\BlogArticle;
use Yii;

class AboutMeController extends \frontend\controllers\BaseController {
	public function actionIndex()
	{
		$this->words = '像“草根”一样，紧贴着地面，低调的存在，冬去春来，枯荣无恙。';

		return $this->render( 'aboutMe', [
			'article' => BlogArticle::findOne( [
				'id'       => '1',
				'is_delete' => BlogArticle::NOT_DELETE,
				'is_show'  => BlogArticle::SHOW
			] ),
			'' => '',
		] );
	}
}