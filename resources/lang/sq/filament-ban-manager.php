<?php

return [
    'nav' => [
        'label' => 'Menaxheri i Ndalimeve',
        'group' => 'Siguria',
    ],
    'resource' => [
        'label' => 'Ndalim',
    ],
    'field' => [
        'bannable_type' => 'Modeli',
        'bannable_id' => 'ID e Modelit',
        'ip' => 'IP',
        'expired_at' => 'Data e Skadimit',
        'metas' => 'Meta',
        'comment' => 'Koment',
        'created_by' => 'Krijuar nga',
        'created_at' => 'Krijuar më',
    ],
    'info' => [
        'key_label' => 'Çelësi',
        'value_label' => 'Vlera',
        'unbanned_successfully' => 'Ndalimi u hoq me sukses',
        'bannable_model_or_ip_required' => 'Duhet të jepet Modeli ose IP.',
    ],
    'filter' => [
        'type' => 'Lloji',
        'bannable_type_fuzzy' => 'Modeli (Kërkim i përafërt)',
        'bannable_id' => 'ID e Modelit',
    ],
    'button' => [
        'unban' => 'Hiq ndalimin',
    ],
];
