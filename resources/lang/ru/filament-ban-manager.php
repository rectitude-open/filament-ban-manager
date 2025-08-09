<?php

return [
    'nav' => [
        'label' => 'Менеджер банов',
        'group' => 'Безопасность',
    ],
    'resource' => [
        'label' => 'Бан',
    ],
    'field' => [
        'bannable_type' => 'Модель',
        'bannable_id' => 'ID модели',
        'ip' => 'IP',
        'expired_at' => 'Дата окончания',
        'metas' => 'Метаданные',
        'comment' => 'Комментарий',
        'created_by' => 'Создано',
        'created_at' => 'Дата создания',
    ],
    'info' => [
        'key_label' => 'Ключ',
        'value_label' => 'Значение',
        'unbanned_successfully' => 'Бан успешно снят',
        'bannable_model_or_ip_required' => 'Необходимо указать модель или IP.',
    ],
    'filter' => [
        'type' => 'Тип',
        'bannable_type_fuzzy' => 'Модель (неточный поиск)',
        'bannable_id' => 'ID модели',
    ],
    'button' => [
        'unban' => 'Снять бан',
    ],
];
