<?php

// 自訂的 Controller
class IndexController extends Controller
{

    // 共用的留言板物件
    private $guestbook = NULL;

    // 建構函式
    public function __construct()
    {
        $this->guestbook = new GuestBook;
    }

    // 預設的列表功能
    protected function index()
    {
        $view = new HtmlView;
        $view->setVar('messages', $this->guestbook->getAllMessages());
        $view->render('index.tpl.php');
    }

    // 新增表單頁
    protected function add()
    {
        $view = new HtmlView;
        $view->setVar('action', 'doAdd');
        $view->render('edit.tpl.php');
    }

    // 新增留言
    protected function doAdd()
    {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $body = $_POST['body'];
        
        $this->guestbook->addMessage($title, $author, $body);
        $this->redirectTo('./');
    }

    // 輸出 RSS
    protected function rss()
    {
        $view = new RssView;
        $view->setVar('items', $this->guestbook->getAllMessages());
        $view->render();
    }

    // 解構函式
    public function __destruct()
    {
        $this->guestbook = NULL;
    }

}