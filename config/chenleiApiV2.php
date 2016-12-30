<?php

return [
//==========================================B端=========================================
    '//' => [
        'tips' => '',
    ],
    '1' => [
        '//' => '消息列表页-标记已读(不再传递rlids参数, rlids为空也调接口标记为已读)',
        'url' => 'api/v1/reminder/mark_read',
    ],
    '2' => [
        '//' => '未读消息数目 info->user->urc'
    ],
    '3' => [
        '//' => '悬浮窗api',
        'url' => 'api/v1/reminder/list',
        'params' => [
            '//' => '固定给我传 1',
            'is_for_popup' => 1,
        ],
        'info' => [
            'user' => [
                'name' => 'shiyang123',
            ],
            'table_list' => [
                [
                    "title"=> "这是标题7",
                    "content"=> "这是主要内容",
                    "cts_display"=> "2016-12-28 18:16",
                    "is_unread"=> true,
                    "rlid"=> 3034724
                ],
                []
            ],
            'fcc' => []
        ],
    ],
    '4' => [
        '//' => '公告api',
        'url' => 'api/v1/reminder/list',
        'params' => [
            '//' => '固定给我传 1',
            'is_for_notice' => 1,
        ],
        'info' => [
            'user' => [
                'name' => 'shiyang123',
            ],
            'table_list' => [
                [
                    "title"=> "这是标题7",
                    "content"=> "这是主要内容",
                    "cts_display"=> "2016-12-28 18:16",
                    "is_unread"=> true,
                    "rlid"=> 3034724
                ]
            ],
            'fcc' => []
        ],
    ],
];