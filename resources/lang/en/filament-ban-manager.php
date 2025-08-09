<?php

return [
    'nav' => [
        'label' => 'Ban Manager',
        'group' => 'Security',
    ],
    'resource' => [
        'label' => 'Ban',
    ],
    'field' => [
        'bannable_type' => 'Model',
        'bannable_id' => 'Model ID',
        'ip' => 'IP',
        'expired_at' => 'Expired At',
        'metas' => 'Metas',
        'comment' => 'Comment',
        'created_by' => 'Created By',
        'created_at' => 'Created At',
    ],
    'info' => [
        'key_label' => 'Key',
        'value_label' => 'Value',
        'unbanned_successfully' => 'Unbanned successfully',
        'bannable_model_or_ip_required' => 'Either Model or IP must be provided.',
    ],
    'filter' => [
        'type' => 'Type',
        'bannable_type_fuzzy' => 'Model (Fuzzy Search)',
        'bannable_id' => 'Model ID',
    ],
    'button' => [
        'unban' => 'Unban',
    ],
];
