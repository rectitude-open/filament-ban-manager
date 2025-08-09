<?php

return [
    'nav' => [
        'label' => 'Manager de Banări',
        'group' => 'Securitate',
    ],
    'resource' => [
        'label' => 'Banare',
    ],
    'field' => [
        'bannable_type' => 'Model',
        'bannable_id' => 'ID Model',
        'ip' => 'IP',
        'expired_at' => 'Data expirării',
        'metas' => 'Metadate',
        'comment' => 'Comentariu',
        'created_by' => 'Creat de',
        'created_at' => 'Creat la',
    ],
    'info' => [
        'key_label' => 'Cheie',
        'value_label' => 'Valoare',
        'unbanned_successfully' => 'Debanare realizată cu succes',
        'bannable_model_or_ip_required' => 'Trebuie completat Model sau IP.',
    ],
    'filter' => [
        'type' => 'Tip',
        'bannable_type_fuzzy' => 'Model (Căutare aproximativă)',
        'bannable_id' => 'ID Model',
    ],
    'button' => [
        'unban' => 'Debanare',
    ],
];
