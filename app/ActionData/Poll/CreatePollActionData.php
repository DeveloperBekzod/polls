<?php

namespace App\ActionData\Poll;

use Akbarali\ActionData\ActionDataBase;

/**
 * Author: Bekzod Raximov
 * Date: 19/02/2025
 * github: https://github.com/DeveloperBekzod
 * Email: devbekzod@gmail.com
 **/
class CreatePollActionData extends ActionDataBase
{
    public array $title;
    public array $text;
    public int $status = 1;

    protected array $rules = [
        'title' => 'required|array',
        'title.*' => 'required|string',
        'text' => 'required|array',
        'text.*' => 'required|string',
        'status' => 'required|integer',
    ];
}
