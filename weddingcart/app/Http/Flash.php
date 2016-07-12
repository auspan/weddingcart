<?php
namespace weddingcart\Http;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class Flash {
    /**
     * Create a flash message
     *
     * @param string        $title
     * @param string        $message
     * @param string        $level
     * @param string|null   $key
     * @return void
     */
    public function create($title, $message, $level = 'info', $key = 'flash_message')
    {
        session()->flash($key, [
            'title' => $title,
            'message' => $message,
            'level' => $level
        ]);
    }

    /**
     * Create an information flash message
     * @param string    $title
     * @param string    $message
     * @return void
     */
    public function info($title, $message)
    {
        $this->create($title, $message, 'info');
    }

    public function error($title, $message)
    {
        $this->create($title, $message, 'error');
    }

    public function success($title, $message)
    {
        $this->create($title, $message, 'success');
    }

    public function overlay($title, $message, $level = 'success')
    {
        $this->create($title, $message, $level, 'flash_message_overlay');
    }

}