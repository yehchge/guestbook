<?php

// ��H�������O
abstract class Controller
{

    // �ʧ@�W��
    protected $action = '';

    // ��H�G�w�]�ʧ@
    protected abstract function index();

    // ���Ѿ�
    protected $router = NULL;

    // �]�w���Ѿ�
    public function setRouter(Router $router)
    {
        if (method_exists($this, ($action = $router->getAction())))
        {
            $this->action = $action;
        }    	
    }

    // ����ʧ@
    public final function run()
    {
        $this->{$this->action}();
    }

    // �������ɦV
    protected function redirectTo($url)
    {
        header('Location: ' . $url);
    }

}