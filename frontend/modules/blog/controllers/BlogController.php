<?php

namespace frontend\modules\blog\controllers;

use common\libs\helpers\ArticleHelper;
use common\models\blog\BlogArticle;
use frontend\controllers\BaseController;

class BlogController extends BaseController {

	public $words = '我们长路漫漫，只因学无止境。';

	public function init() {
		parent::init(); // TODO: Change the autogenerated stub
	}

	/**
	 * @TODO 获取技术文章的首页列表
	 */
	public function actionIndex() {
		$articleList    = ArticleHelper::getRecentList();
		$newArticleList = ArticleHelper::getRecentList( 1, 10 );

		return $this->render( 'techList', [
			'articleList'    => $articleList,
			'newArticleList' => $newArticleList
		] );
	}

	/**
	 * @TODO 文章的详情页面
	 */
	public function actionDetail( $article_id ) {
		$articleModel   = BlogArticle::findOne( [ 'id' => $article_id, 'is_delete' => BlogArticle::NOT_DELETE ] );
		$newArticleList = ArticleHelper::getRecentList();

		return $this->render( 'teacDetail', [
			'articleModle'   => $articleModel,
			'newArticleList' => $newArticleList
		] );
	}
}