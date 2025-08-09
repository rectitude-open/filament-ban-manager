<?php

return [
    'nav' => [
        'label' => '차단 관리자',
        'group' => '보안',
    ],
    'resource' => [
        'label' => '차단',
    ],
    'field' => [
        'bannable_type' => '모델',
        'bannable_id' => '모델 ID',
        'ip' => 'IP',
        'expired_at' => '만료일',
        'metas' => '메타데이터',
        'comment' => '코멘트',
        'created_by' => '생성자',
        'created_at' => '생성일',
    ],
    'info' => [
        'key_label' => '키',
        'value_label' => '값',
        'unbanned_successfully' => '차단 해제 성공',
        'bannable_model_or_ip_required' => '모델 또는 IP를 입력해야 합니다.',
    ],
    'filter' => [
        'type' => '유형',
        'bannable_type_fuzzy' => '모델 (유사 검색)',
        'bannable_id' => '모델 ID',
    ],
    'button' => [
        'unban' => '차단 해제',
    ],
];
