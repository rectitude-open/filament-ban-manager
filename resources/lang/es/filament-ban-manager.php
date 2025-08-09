<?php

return [
    'nav' => [
        'label' => 'Gestor de Baneos',
        'group' => 'Seguridad',
    ],
    'resource' => [
        'label' => 'Baneo',
    ],
    'field' => [
        'bannable_type' => 'Modelo',
        'bannable_id' => 'ID del Modelo',
        'ip' => 'IP',
        'expired_at' => 'Expira en',
        'metas' => 'Metadatos',
        'comment' => 'Comentario',
        'created_by' => 'Creado por',
        'created_at' => 'Creado en',
    ],
    'info' => [
        'key_label' => 'Clave',
        'value_label' => 'Valor',
        'unbanned_successfully' => 'Desbaneado exitosamente',
        'bannable_model_or_ip_required' => 'Debe proporcionar Modelo o IP.',
    ],
    'filter' => [
        'type' => 'Tipo',
        'bannable_type_fuzzy' => 'Modelo (Búsqueda difusa)',
        'bannable_id' => 'ID del Modelo',
    ],
    'button' => [
        'unban' => 'Desbanear',
    ],
];
