<?php

return [
    'nav' => [
        'label' => '封禁管理',
        'group' => '安全',
    ],
    'resource' => [
        'label' => '封禁',
    ],
    'field' => [
        'bannable_type' => '模型',
        'bannable_id' => '模型ID',
        'ip' => 'IP',
        'expired_at' => '過期時間',
        'metas' => '元資料',
        'comment' => '備註',
        'created_by' => '建立者',
        'created_at' => '建立時間',
    ],
    'info' => [
        'key_label' => '鍵名',
        'value_label' => '鍵值',
        'unbanned_successfully' => '解封成功',
        'bannable_model_or_ip_required' => '必須填寫 [模型] 或 [IP]。',
    ],
    'filter' => [
        'type' => '類型',
        'bannable_type_fuzzy' => '模型（模糊搜尋）',
        'bannable_id' => '模型ID',
    ],
    'button' => [
        'unban' => '解封',
    ],
];
