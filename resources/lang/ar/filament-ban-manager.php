<?php

return [
    'nav' => [
        'label' => 'إدارة الحظر',
        'group' => 'الأمان',
    ],
    'resource' => [
        'label' => 'حظر',
    ],
    'field' => [
        'bannable_type' => 'النموذج',
        'bannable_id' => 'معرّف النموذج',
        'ip' => 'IP',
        'expired_at' => 'تاريخ الانتهاء',
        'metas' => 'البيانات الوصفية',
        'comment' => 'ملاحظة',
        'created_by' => 'أنشئ بواسطة',
        'created_at' => 'تاريخ الإنشاء',
    ],
    'info' => [
        'key_label' => 'المفتاح',
        'value_label' => 'القيمة',
        'unbanned_successfully' => 'تم إلغاء الحظر بنجاح',
        'bannable_model_or_ip_required' => 'يجب إدخال النموذج أو عنوان IP.',
    ],
    'filter' => [
        'type' => 'النوع',
        'bannable_type_fuzzy' => 'النموذج (بحث تقريبي)',
        'bannable_id' => 'معرّف النموذج',
    ],
    'button' => [
        'unban' => 'إلغاء الحظر',
    ],
];
