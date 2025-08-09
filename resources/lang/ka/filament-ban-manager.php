<?php

return [
    'nav' => [
        'label' => 'ბანის მენეჯერი',
        'group' => 'უსაფრთხოება',
    ],
    'resource' => [
        'label' => 'ბანი',
    ],
    'field' => [
        'bannable_type' => 'მოდელი',
        'bannable_id' => 'მოდელის ID',
        'ip' => 'IP',
        'expired_at' => 'ვადის გასვლა',
        'metas' => 'მეტა',
        'comment' => 'კომენტარი',
        'created_by' => 'შექმნა',
        'created_at' => 'შექმნის თარიღი',
    ],
    'info' => [
        'key_label' => 'გასაღები',
        'value_label' => 'მნიშვნელობა',
        'unbanned_successfully' => 'ბანი წარმატებით მოხსნილია',
        'bannable_model_or_ip_required' => 'მოდელი ან IP აუცილებელია.',
    ],
    'filter' => [
        'type' => 'ტიპი',
        'bannable_type_fuzzy' => 'მოდელი (ფაზური ძიება)',
        'bannable_id' => 'მოდელის ID',
    ],
    'button' => [
        'unban' => 'ბანის მოხსნა',
    ],
];
