<?php

// 留言版類別
class Guestbook
{

    // 留言
    private $messages;

    // 建構函式
    // 預先從檔案中取得所有留言
    public function __construct()
    {
        $this->messages = (file_exists(APP_STORAGE))
                        ? unserialize(file_get_contents(APP_STORAGE))
                        : array ();
    }

    // 取得所有留言
    public function getAllMessages()
    {
        return $this->messages;
    }
    
    // 新增留言
    // 在所有留言的最後加上一筆後寫回檔案
    public function addMessage($title, $author, $body)
    {
        $this->messages[] = array (
            'id'     => count($this->messages) + 1,
            'title'  => $title,
            'author' => $author,
            'body'   => $body,
        );

        file_put_contents(APP_STORAGE, serialize($this->messages));
    }

    // 解構函式
    public function __destruct()
    {
        $this->messages = NULL;
    }

}