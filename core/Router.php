<?php

// �w�]�����Ѿ�
class Router
{

    // �w�]���ʧ@
    protected $action = 'index';

    // �b�غc�禡���ѪR GET �ܼ�
    public function __construct()
    {
        $this->action = isset($_GET['act']) ? strtolower($_GET['act']) : 'index';
    }

    // ���o�ѪR�᪺�ʧ@�W��
    public function getAction()
    {
        return $this->action;
    }

}