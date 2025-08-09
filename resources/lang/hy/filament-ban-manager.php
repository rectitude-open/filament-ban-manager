<?php

return [
    'nav' => [
        'label' => 'Արգելափակման կառավարիչ',
        'group' => 'Անվտանգություն',
    ],
    'resource' => [
        'label' => 'Արգելափակում',
    ],
    'field' => [
        'bannable_type' => 'Մոդել',
        'bannable_id' => 'Մոդելի ID',
        'ip' => 'IP',
        'expired_at' => 'Ժամկետի ավարտը',
        'metas' => 'Մետատվյալներ',
        'comment' => 'Մեկնաբանություն',
        'created_by' => 'Ստեղծողը',
        'created_at' => 'Ստեղծման ամսաթիվ',
    ],
    'info' => [
        'key_label' => 'Բանալի',
        'value_label' => 'Արժեք',
        'unbanned_successfully' => 'Արգելափակումը հաջողությամբ հանվեց',
        'bannable_model_or_ip_required' => 'Պետք է մուտքագրել մոդել կամ IP:',
    ],
    'filter' => [
        'type' => 'Տեսակ',
        'bannable_type_fuzzy' => 'Մոդել (մոտավոր որոնում)',
        'bannable_id' => 'Մոդելի ID',
    ],
    'button' => [
        'unban' => 'Հանել արգելափակումը',
    ],
];
