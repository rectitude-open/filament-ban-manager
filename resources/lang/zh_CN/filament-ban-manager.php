<?php

return [
    'nav' => [
        'label' => '封禁',
        'group' => '安全',
    ],
    'resource' => [
        'label' => '封禁',
    ],
    'field' => [
        'bannable_type' => '模型',
        'bannable_id' => '模型ID',
        'ip' => 'IP',
        'expired_at' => '过期时间',
        'metas' => '元数据',
        'comment' => '备注',
        'created_by' => '创建人',
        'created_at' => '创建时间',
    ],
    'info' => [
        'key_label' => '键名',
        'value_label' => '键值',
        'unbanned_successfully' => '解封成功',
        'bannable_model_or_ip_required' => '必须填写 [模型] 或 [IP]。',
    ],
    'filter' => [
        'type' => '类型',
        'bannable_type_fuzzy' => '模型（模糊搜索）',
        'bannable_id' => '模型ID',
    ],
    'button' => [
        'unban' => '解封',
    ],
];
