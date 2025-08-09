<?php

return [
    'nav' => [
        'label' => 'Manajer Ban',
        'group' => 'Keamanan',
    ],
    'resource' => [
        'label' => 'Ban',
    ],
    'field' => [
        'bannable_type' => 'Model',
        'bannable_id' => 'ID Model',
        'ip' => 'IP',
        'expired_at' => 'Tanggal Kedaluwarsa',
        'metas' => 'Meta',
        'comment' => 'Komentar',
        'created_by' => 'Dibuat Oleh',
        'created_at' => 'Dibuat Pada',
    ],
    'info' => [
        'key_label' => 'Kunci',
        'value_label' => 'Nilai',
        'unbanned_successfully' => 'Berhasil dibuka blokir',
        'bannable_model_or_ip_required' => 'Model atau IP harus diisi.',
    ],
    'filter' => [
        'type' => 'Tipe',
        'bannable_type_fuzzy' => 'Model (Pencarian Fuzzy)',
        'bannable_id' => 'ID Model',
    ],
    'button' => [
        'unban' => 'Buka Blokir',
    ],
];
