<?php

return [
    'nav' => [
        'label' => 'Менеджер банів',
        'group' => 'Безпека',
    ],
    'resource' => [
        'label' => 'Бан',
    ],
    'field' => [
        'bannable_type' => 'Модель',
        'bannable_id' => 'ID моделі',
        'ip' => 'IP',
        'expired_at' => 'Дата закінчення',
        'metas' => 'Метадані',
        'comment' => 'Коментар',
        'created_by' => 'Створено',
        'created_at' => 'Дата створення',
    ],
    'info' => [
        'key_label' => 'Ключ',
        'value_label' => 'Значення',
        'unbanned_successfully' => 'Бан успішно знято',
        'bannable_model_or_ip_required' => 'Потрібно вказати модель або IP.',
    ],
    'filter' => [
        'type' => 'Тип',
        'bannable_type_fuzzy' => 'Модель (неточний пошук)',
        'bannable_id' => 'ID моделі',
    ],
    'button' => [
        'unban' => 'Зняти бан',
    ],
];
