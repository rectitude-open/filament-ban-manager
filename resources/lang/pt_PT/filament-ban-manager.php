<?php

return [
    'nav' => [
        'label' => 'Gestor de Banimentos',
        'group' => 'Segurança',
    ],
    'resource' => [
        'label' => 'Banimento',
    ],
    'field' => [
        'bannable_type' => 'Modelo',
        'bannable_id' => 'ID do Modelo',
        'ip' => 'IP',
        'expired_at' => 'Expira em',
        'metas' => 'Metadados',
        'comment' => 'Comentário',
        'created_by' => 'Criado por',
        'created_at' => 'Criado em',
    ],
    'info' => [
        'key_label' => 'Chave',
        'value_label' => 'Valor',
        'unbanned_successfully' => 'Banimento removido com sucesso',
        'bannable_model_or_ip_required' => 'Modelo ou IP deve ser indicado.',
    ],
    'filter' => [
        'type' => 'Tipo',
        'bannable_type_fuzzy' => 'Modelo (Pesquisa aproximada)',
        'bannable_id' => 'ID do Modelo',
    ],
    'button' => [
        'unban' => 'Remover banimento',
    ],
];
