<?php

return [
    'nav' => [
        'label' => 'バン管理',
        'group' => 'セキュリティ',
    ],
    'resource' => [
        'label' => 'バン',
    ],
    'field' => [
        'bannable_type' => 'モデル',
        'bannable_id' => 'モデルID',
        'ip' => 'IP',
        'expired_at' => '有効期限',
        'metas' => 'メタデータ',
        'comment' => 'コメント',
        'created_by' => '作成者',
        'created_at' => '作成日',
    ],
    'info' => [
        'key_label' => 'キー',
        'value_label' => '値',
        'unbanned_successfully' => 'バン解除に成功しました',
        'bannable_model_or_ip_required' => 'モデルまたはIPを入力してください。',
    ],
    'filter' => [
        'type' => 'タイプ',
        'bannable_type_fuzzy' => 'モデル（あいまい検索）',
        'bannable_id' => 'モデルID',
    ],
    'button' => [
        'unban' => 'バン解除',
    ],
];
