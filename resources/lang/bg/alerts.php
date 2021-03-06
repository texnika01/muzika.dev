<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Языковые ресурсы вывода оповещений
    |--------------------------------------------------------------------------
    |
    | Следующие языковые ресурсы используются для вывода
    | сообщений в различных сценариях CRUD.
    | Вы можете свободно изменять эти языковые ресурсы в соответствии
    | с требованиями вашего приложения.
    |
    */

    'backend' => [
        'roles' => [
            'created' => 'Ролята беше създадена упешно.',
            'deleted' => 'Ролята беше изтрита успешно.',
            'updated' => 'Ролята беше успешно обновена.',
        ],
        'users' => [
            'cant_resend_confirmation' => 'В настоящее время приложение настроено на одобрение пользователей вручную.',
            'confirmed' => 'Пользователь подтвержден.',
            'session_cleared' => 'Сессия пользователя очищена.',
            'social_deleted' => 'Социальная учетная запись успешно удалена',
            'unconfirmed' => 'Пользователь изменен на статус не подтвержден',
            'confirmation_email' => 'Потвърдителен код беше изпратенна емеила които посочихте.',
            'created' => 'Потребителя беше създаден успешно.',
            'deleted' => 'Потребителя беше изтрит успешно.',
            'deleted_permanently' => 'Потребителя беше забранен успешно.',
            'restored' => 'Потребителя беше възтановен успешно.',
            'updated' => 'Потребителя беше обновен успешно.',
            'updated_password' => "Потребителската ви парола беше обновена успешно.",
        ],
    ],

    'frontend' => [
        'contact' => [
            'sent' => 'Вашия емеил беше успешно изпратен. Вижте съобщението в пощата си!',
        ],
    ],
];
