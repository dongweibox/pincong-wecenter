<?php
/*
+--------------------------------------------------------------------------
|   WeCenter [#RELEASE_VERSION#]
|   ========================================
|   by WeCenter Software
|   © 2011 - 2014 WeCenter. All Rights Reserved
|   http://www.wecenter.com
|   ========================================
|   Support: WeCenter@qq.com
|
+---------------------------------------------------------------------------
*/


if (!defined('IN_ANWSION'))
{
	die;
}

class find_password extends AWS_CONTROLLER
{

	public function get_access_rule()
	{
		$rule_action['rule_type'] = 'black'; //黑名单,黑名单中的检查  'white'白名单,白名单以外的检查
		$rule_action['actions'] = array();

		return $rule_action;
	}

	public function setup()
	{
		$this->crumb(AWS_APP::lang()->_t('找回密码'), '/account/find_password/');

		TPL::import_css('css/register.css');
	}

	public function index_action()
	{
		TPL::output('account/find_password/index');
	}

	public function process_success_action()
	{
		TPL::output('account/find_password/process_success');
	}

	public function modify_action()
	{

		{
			H::redirect_msg(AWS_APP::lang()->_t('链接已失效'), '/');
		}

		TPL::output('account/find_password/modify');
	}
}