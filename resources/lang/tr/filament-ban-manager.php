<?php

return [
    'nav' => [
        'label' => 'Yasaklama Yöneticisi',
        'group' => 'Güvenlik',
    ],
    'resource' => [
        'label' => 'Yasak',
    ],
    'field' => [
        'bannable_type' => 'Model',
        'bannable_id' => 'Model ID',
        'ip' => 'IP',
        'expired_at' => 'Bitiş Tarihi',
        'metas' => 'Meta',
        'comment' => 'Açıklama',
        'created_by' => 'Oluşturan',
        'created_at' => 'Oluşturulma Tarihi',
    ],
    'info' => [
        'key_label' => 'Anahtar',
        'value_label' => 'Değer',
        'unbanned_successfully' => 'Yasak başarıyla kaldırıldı',
        'bannable_model_or_ip_required' => 'Model veya IP girilmelidir.',
    ],
    'filter' => [
        'type' => 'Tür',
        'bannable_type_fuzzy' => 'Model (Yaklaşık Arama)',
        'bannable_id' => 'Model ID',
    ],
    'button' => [
        'unban' => 'Yasağı Kaldır',
    ],
];
