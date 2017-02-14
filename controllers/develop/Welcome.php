<?php

use App\Services\Controller;

class Welcome extends Controller
{

    public function index()
    {
        // 欢迎界面
        return process()
            ->next('Site@showWelcome');
    }

    public function chat($client, $message)
    {
        // 发送消息
        return push('new message', [$client, $message]);
    }

}
