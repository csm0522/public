<?php
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller {
	public function _empty()
    {
		redirect(U('Error/index'));
    }
}