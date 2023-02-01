<?php

return [
    'userManagement' => [
        'title'          => '使用者管理',
        'title_singular' => '使用者管理',
    ],
    'permission'     => [
        'title'          => '權限',
        'title_singular' => '權限',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'title'             => '標題',
            'title_helper'      => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => '角色',
        'title_singular' => '角色',
        'fields'         => [
            'id'                 => '編號',
            'id_helper'          => '',
            'title'              => '標題',
            'title_helper'       => '',
            'permissions'        => '權限',
            'permissions_helper' => '',
            'created_at'         => '建立時間',
            'created_at_helper'  => '',
            'updated_at'         => '更新時間',
            'updated_at_helper'  => '',
            'deleted_at'         => '刪除時間',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => '使用者',
        'title_singular' => '使用者',
        'fields'         => [
            'id'                         => '編號',
            'id_helper'                  => '',
            'name'                       => '名稱',
            'name_helper'                => '',
            'email'                      => '電子郵件',
            'email_helper'               => '',
            'email_verified_at'          => '電子郵件驗證時間',
            'email_verified_at_helper'   => '',
            'password'                   => '密碼',
            'password_helper'            => '',
            'new_password'               => '新密碼',
            'new_password_helper'        => '',
            'repeat_new_password'        => '確認新密碼',
            'repeat_new_password_helper' => '',
            'roles'                      => '角色',
            'roles_helper'               => '',
            'hospital'                   => '團隊',
            'hospital_helper'            => '',
            'remember_token'             => '記住令牌',
            'remember_token_helper'      => '',
            'created_at'                 => '建立時間',
            'created_at_helper'          => '',
            'updated_at'                 => '更新時間',
            'updated_at_helper'          => '',
            'deleted_at'                 => '刪除時間',
            'deleted_at_helper'          => '',
        ],
    ],
    'asset'         => [
        'title'          => '資產',
        'title_singular' => '資產',
        'fields'         => [
            'id'                   => '編號',
            'id_helper'            => '',
            'name'                 => '名稱',
            'name_helper'          => '',
            'description'          => '描述',
            'description_helper'   => '',
            'danger_level'         => '警戒線',
            'danger_level_helper'  => '',
            'created_at'           => '建立時間',
            'created_at_helper'    => '',
            'updated_at'           => '更新時間',
            'updated_at_helper'    => '',
            'deleted_at'           => '刪除時間',
            'deleted_at_helper'    => '',
        ],
    ],
    'hospital'           => [
        'title'          => '醫院',
        'title_singular' => '醫院',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '名稱',
            'name_helper'       => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'stock'          => [
        'title'          => '庫存量',
        'title_singular' => '庫存量',
        'fields'         => [
            'id'                   => '編號',
            'id_helper'            => '',
            'asset'                => '資產',
            'asset_helper'         => '',
            'history_of'           => '歷史有關',
            'history_of_helper'    => '',
            'hospital'             => '醫院',
            'hospital_helper'      => '',
            'current_stock'        => '目前庫存量',
            'current_stock_helper' => '',
            'danger_level'         => '警戒線',
            'danger_level_helper'  => '',
            'is_empty'             => '是空的',
            'is_empty_helper'      => '',
            'user'                 => '使用者',
            'user_helper'          => '',
            'amount'               => '數量',
            'amount_helper'        => '',
            'created_at'           => '建立時間',
            'created_at_helper'    => '',
            'updated_at'           => '更新時間',
            'updated_at_helper'    => '',
            'deleted_at'           => '刪除時間',
            'deleted_at_helper'    => '',
        ],
        'actions'         => [
            'add'    => '新增庫存量',
            'remove' => '刪除庫存量',
        ],
    ],
    'transaction'    => [
        'title'          => '交易',
        'title_singular' => '交易',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'asset'             => '資產',
            'asset_helper'      => '',
            'stock'             => '庫存量',
            'stock_helper'      => '',
            'hospital'          => '醫院',
            'hospital_helper'   => '',
            'user'              => '使用者',
            'user_helper'       => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
];