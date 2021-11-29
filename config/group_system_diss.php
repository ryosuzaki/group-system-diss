<?php

use App\Models\Group\Group;
use App\User;

return [
    "name"=>"sample",

    /**
     * 
     */
    'group_types'=>[
        'shelter'=>[
            "name"=> "避難所",
            "initial_info"=>[],
            "available_user_info"=>[],
            "admin"=>[
                "name"=>"管理者",
            ],
            "permission"=>[
                'group_info_bases'=>true,
                'group_roles'=>true,
            ],
        ],
        "danger_spot"=>[
            "name"=>"危険地点",
            "initial_info"=>[],
            "available_user_info"=>[],
            "admin"=>[
                "name"=>"作成者",
            ],
            "permission"=>[
                'group_info_bases'=>false,
                'group_roles'=>false,
            ],
        ],
    ],

    /**
     * 
     */
    "info_templates"=>[
        "diss"=>[
            Group::class=>[
                "info"=>[
                    'default_name'=>'基本情報',
                    'default_info'=>['body'=>''],
                    'default_viewable'=>true,
                    'description'=>'基本の情報表示',
                    "default_edit"=>['name'=>'変更','icon'=>'<i class="material-icons">edit</i>'],
                    "only_one"=>false,
                    'view'=>[
                        'show'=>[
                            'path'=>'',
                        ],
                        'edit'=>[
                            'path'=>'',
                        ],
                    ],
                ],
                "congestion"=>[
                    "default_name"=>"混雑状況",
                    'default_info'=>['degree'=>'0','color'=>"black",'detail'=>''],
                    'default_viewable'=>true,
                    'description'=>'混雑状況を表示します',
                    "default_edit"=>['name'=>'変更','icon'=>'<i class="material-icons">edit</i>'],
                    "only_one"=>false,
                ],
                "spot"=>[
                    'default_name'=>'地点情報',
                    'default_info'=>['type'=>'','detail'=>''],
                    'default_viewable'=>true,
                    'description'=>'地点情報を表示します',
                    "default_edit"=>['name'=>'変更','icon'=>'<i class="material-icons">edit</i>'],
                    "only_one"=>false,
                ],
                "notification"=>[
                    'default_name'=>'お知らせ',
                    'default_info'=>[],
                    'default_viewable'=>true,
                    'description'=>'お知らせ',
                    'default_edit'=>['name'=>'送信','icon'=>'<i class="material-icons">mail_outline</i>'],
                    "only_one"=>false,
                ],
            ],
            User::class=>[

            ],
        ],
    ],
];
