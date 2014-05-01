<?php

// ��X RSS �榡���e
class RssView extends View
{
	
	// �ഫ�� RSS ���e
    public function fetch()
    {
        $xml = '';
        $xml .= '<' . '?xml version="1.0" encoding="utf-8"?' . '>' . "\n";
        $xml .= '<rss version="2.0">';
        $xml .= '<channel>';
        $xml .= '<title>TEST</title>';
        $xml .= '<description>TEST</description>';
        foreach ($this->items as $item)
        {
            $xml .= '<item>';
            $xml .= '<title>' . $item['title'] . '</title>';
            $xml .= '<description>' . $item['body'] . '</description>';
            $xml .= '</item>';
        }
        $xml .= '</channel>';
        $xml .= '</rss>';
        return $xml;
    }

    // ��X
    public function render()
    {
        header('Content-Type: text/xml; charset=utf-8');
        echo $this->fetch();
    }

}
