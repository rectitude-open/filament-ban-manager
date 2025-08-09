<?php

return [
    'nav' => [
        'label' => 'Quản lý Cấm',
        'group' => 'Bảo mật',
    ],
    'resource' => [
        'label' => 'Cấm',
    ],
    'field' => [
        'bannable_type' => 'Mô hình',
        'bannable_id' => 'ID Mô hình',
        'ip' => 'IP',
        'expired_at' => 'Ngày hết hạn',
        'metas' => 'Siêu dữ liệu',
        'comment' => 'Ghi chú',
        'created_by' => 'Tạo bởi',
        'created_at' => 'Ngày tạo',
    ],
    'info' => [
        'key_label' => 'Khóa',
        'value_label' => 'Giá trị',
        'unbanned_successfully' => 'Bỏ cấm thành công',
        'bannable_model_or_ip_required' => 'Phải nhập Mô hình hoặc IP.',
    ],
    'filter' => [
        'type' => 'Loại',
        'bannable_type_fuzzy' => 'Mô hình (Tìm kiếm mờ)',
        'bannable_id' => 'ID Mô hình',
    ],
    'button' => [
        'unban' => 'Bỏ cấm',
    ],
];
