<?php
Yii::import('user.controllers.LoginController', true);
class LoginWithHOAuthController extends LoginController
{
	public function actions()
	{
		return array(
			'oauth' => array(
				'class'=>'application.vendor.sleepwalker.hoauth.HOAuthAction',
			),
			'oauthadmin' => array(
				'class'=>'application.vendor.sleepwalker.hoauth.HOAuthAdminAction',
			),
		);
	}

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('login','oauth'),
				'users'=>array('*'),
			),
			array('allow',
				'actions'=>array('oauthadmin'),
				'users'=>UserModule::getAdmins(),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
}