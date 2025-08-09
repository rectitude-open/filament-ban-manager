<?php

return [
    'nav' => [
        'label' => 'مدیریت مسدودسازی',
        'group' => 'امنیت',
    ],
    'resource' => [
        'label' => 'مسدودسازی',
    ],
    'field' => [
        'bannable_type' => 'مدل',
        'bannable_id' => 'شناسه مدل',
        'ip' => 'IP',
        'expired_at' => 'تاریخ انقضا',
        'metas' => 'فراداده',
        'comment' => 'توضیح',
        'created_by' => 'ایجاد شده توسط',
        'created_at' => 'تاریخ ایجاد',
    ],
    'info' => [
        'key_label' => 'کلید',
        'value_label' => 'مقدار',
        'unbanned_successfully' => 'رفع مسدودی با موفقیت انجام شد',
        'bannable_model_or_ip_required' => 'مدل یا IP باید وارد شود.',
    ],
    'filter' => [
        'type' => 'نوع',
        'bannable_type_fuzzy' => 'مدل (جستجوی تقریبی)',
        'bannable_id' => 'شناسه مدل',
    ],
    'button' => [
        'unban' => 'رفع مسدودی',
    ],
];
