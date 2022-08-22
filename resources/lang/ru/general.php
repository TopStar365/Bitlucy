<?php

return [
    'language' => 'Русский',
    'head' => [
        'index' => 'Главная',
        'description' => 'Азартные игры на деньги с бонусами для новых игроков',
        'games' => 'Игры',
        'help' => 'Помощь',
        'wallet' => 'Пополнить',
        'wallet_open_demo' => 'Демо',
        'wallet_real' => 'Реальный счет',
        'wallet_demo' => 'Демо счет',
        'chat' => 'Чат',
        'admin' => 'Администрирование',
        'bonus' => 'Кран',
        'bonus_short' => 'Кран',
        'theme' => 'Тема',
        'profile' => 'Профиль',
        'logout' => 'Выйти',
        'invest' => 'Инвестиции'
    ],
    'chat_commands' => [
        '/tip' => 'Отправить чаевые',
        '/rain' => 'Отправить дождь',
        'modal' => [
            'rain' => [
                'amount' => 'Сумма',
                'number_of_users' => 'Количество пользователей (Максимум 25)',
                'send' => 'Отправить',
                'invalid_users_length' => 'Неверное количество пользователей',
                'invalid_amount' => 'Неверная сумма'
            ],
            'tip' => [
                'amount' => 'Сумма',
                'send' => 'Отправить',
                'user' => 'Имя пользователя',
                'make_public' => 'Публично (появится в чате)',
                'invalid_name' => 'Такого пользователя не существует',
                'invalid_amount' => 'Неверная сумма',
                'notify' => ':name отправил вам :value <i class=":icon" style="color: :style"></i>'
            ]
        ]
    ],
    'tip' => 'Чаевые',
    'tip_chat' => '<a href=":link">:name</a> отправил :value <i class=":icon" style="color: :style"></i> <a href=":tolink">:toname</a>',
    'wallet' => [
        'demo' => [
            'error' => 'Для получения баланса ваш демо счет должен быть равен нулю',
            'obtain' => 'Получить демо баланс'
        ]
    ],
    'demo' => [
        'title' => 'Внимание',
        'description' => 'Для игры на реальный баланс и получения бесплатных бонусов требуется регистрация.',
        'register' => 'Зарегистрироваться'
    ],
    'chat' => [
        'enter_message' => 'Сообщение...'
    ],
    'auth' => [
        'login' => 'Войти',
        'register' => 'Зарегистрироваться',
        'through_login' => 'Логин и пароль',
        'through_social' => 'Социальные сети',
        'wrong_credentials' => 'Неверный логин или пароль',
        'credentials' => [
            'login' => 'Логин',
            'password' => 'Пароль',
            'email' => 'Email'
        ],
        'create_account' => 'Создать аккаунт',
        'forgot_password' => 'Забыли пароль?',
        'notice' => 'Я подтверждаю, что мне исполнилось 18 лет и я ознакомился с <a href="/terms/terms_and_conditions">условиями предоставления услуг</a>'
    ],
    'footer' => [
        'copyright' => 'Copyright &copy; 2020 7my.com',
        'gaming_policy' => 'Игровая политика',
        'terms_and_conditions' => 'Условия и положения',
        'privacy_policy' => 'Политика конфиденциальности',
        'privacy_notice' => 'Уведомление о конфиденциальности',
        'fairness' => 'Честная игра',
        'game' => [
            'help' => 'Помощь',
            'sound' => 'Звук',
            'quick' => 'Быстрая игра',
            'client_seed' => 'Изменить Client seed'
        ]
    ],
    'profile' => [
        'settings' => 'Настройки',
        'wager' => 'Оборот',
        'games' => 'Всего игр',
        'best_mul' => 'Лучший коэфф.',
        'best_win' => 'Лучший выигрыш',
        'incognito' => 'Пользователь скрыл свой профиль',
        'set_private_profile' => 'Скрыть профиль',
        'set_private_bets' => 'Скрыть свои ставки',
        'empty' => 'Недостаточно данных для отображения',
        'privacy' => 'Приватность',
        'fairness' => 'Честная игра',
        'client_seed' => 'Сид клиента',
        'change' => 'Изменить',
        'change_avatar' => 'Загрузить аватар',
        'avatar' => 'Аватар',
        'stats' => 'Статистика',
        'latest_games' => 'Последние игры',
        'vip' => 'VIP',
        'partner' => 'Партнерская программа',
        'change_name' => 'Изменить имя',
        'new_name' => 'Новое имя',
        'social' => 'Привязанные аккаунты',
        'vk' => 'ВКонтакте',
        'fb' => 'Facebook',
        'google' => 'Google',
        'discord' => 'Discord',
        'link' => 'Привязать',
        'linked' => 'Привязан',
        'somebody_already_linked' => 'Этот аккаунт социальной сети уже был привязан к другому аккаунту 7my.com',
        'link_discord' => 'Для получения доступа к VIP промокодам и роли на сервере Discord требуется привязать свой аккаунт.',
        'discord_vip' => 'Присоединяйтесь к <a href="'.\App\Settings::where('name', 'discord_invite_link')->first()->value.'" target="_blank" class="disable-pjax">нашему серверу Discord</a> и получайте VIP промокоды!',
        'discord_vip_ok' => 'Обновить роль на сервере',
        'vip_discord_updated' => 'Роль на сервере Discord была обновлена.',
        'bets' => 'Ставок',
        'wins' => 'Побед',
        'losses' => 'Проигрышей',
        'wagered' => 'Оборот',
        'total_profit' => 'Выиграно',
        '2fa' => 'Двухфакторная аутентификация',
        'keep_secure' => 'Никому это не показывайте!',
        'copy_this_to_2fa' => 'Скопируйте этот код в приложение 2FA',
        '2fa_code' => 'Двухфакторный код',
        '2fa_enable' => 'Включить',
        'error_2fa' => 'Неверный код 2FA',
        '2fa_enabled' => '2FA включен на вашем аккаунте.<br>При каждой авторизации, а так же при запросе выплат вы должны будете ввести 2FA код.',
        'disable_2fa' => 'Отключить 2FA',
        '2fa_validate' => 'Проверить',
        '2fa_description' => 'Введите 6 значный код код из вашего приложения 2FA',
        '2fa_digits' => 'Осталось цифр: :digits'
    ],
    'notifications' => [
        'title' => 'Уведомления',
        'withdraw_accepted' => [
            'title' => 'Выплата',
            'message' => 'Ваша заявка на выплату, созданная :diff на сумму :sum была одобрена.'
        ],
        'withdraw_declined' => [
            'title' => 'Выплата',
            'message' => 'Ваша заявка на выплату, созданная :diff на сумму :sum была отклонена модератором. Причина: :reason'
        ],
        'vip_discord' => [
            'title' => 'VIP',
            'message' => "Вы получили <svg style='width: 14px; height: 14px'><use href='#vip-bronze'></use></svg> бронзовый уровень VIP статуса!
                         <br><br>Для получения эксклюзивных VIP промокодов присоединяйтесь к <a href='".\App\Settings::where('name', 'discord_invite_link')->first()->value."' class='disable-pjax' target='_blank'>нашему Discord серверу</a>
                         и <a onclick='$(\".notifications-overlay\").click();' href='/user/".(auth()->guest() ? '' : auth()->user()->_id)."#settings'>привяжите свой Discord аккаунт на странице настроек</a> для получения VIP роли на сервере.
                         <br><br><a href='javascript:void(0)' onclick='$(\".notifications-overlay\").click(); $.vip();' class='disable-pjax'>Ознакомиться со всеми возможностями VIP статуса</a>"
        ],
        'email_reminder' => [
            'title' => '7My',
            'message' => 'Не забудьте добавить свой email адрес, иначе вы можете потерять доступ к своему аккаунту! <a href="/user/'.(auth()->guest() ? '' : auth()->user()->_id).'#security">Добавить</a>'
        ],
        'deposit' => 'Поступил депозит на сумму :sum :currency'
    ],
    'fairness' => [
        'client_seed' => 'Client seed:',
        'server_seed' => 'Server seed:',
        'nonce' => 'Nonce:'
    ],
    'not_available' => 'Недоступно',
    'obtained' => 'Выполнено',
    'bets' => [
        'game' => 'Игра',
        'player' => 'Игрок',
        'time' => 'Время',
        'bet' => 'Ставка',
        'mul' => 'Коэфф.',
        'win' => 'Выигрыш',
        'manual' => 'Ручные',
        'auto' => 'Авто',
        'games' => 'Количество игр',
        'victory_stop' => 'Остановить при выигрыше',
        'on_win' => 'При выигрыше',
        'on_loss' => 'При проигрыше',
        'reset' => 'Сбросить',
        'increase' => 'Увеличить',
        'auto_games_blocked' => 'Для установки ограничения нажмите на &#8734;.',
        'hidden' => 'Игрок скрыл свой профиль',
        'hidden_name' => 'Скрыт',
        'make_bet' => 'Сделать ставку',
        'all' => 'Все ставки',
        'mine' => 'Мои ставки',
        'high_rollers' => 'Крупные ставки',
        'lucky_wins' => 'Удачливые'
    ],
    'error' => [
        'websocket_connect_error' => 'Подключение к серверу...',
        'token_grant_error' => 'Не удалось подключиться к серверу. Повторение через :seconds сек.',
        'token_grant_reconnecting' => 'Подключение к серверу...',
        'offline_node' => 'В данный момент мы не можем обрабатывать платежи этой валюты.',
        'auth' => 'Требуется авторизация',
        'wager' => 'Минимальная сумма ставки - :value',
        'disabled' => 'Игра временно недоступна',
        'unknown_game' => 'Неизвестная игра',
        'invalid_wager' => 'Недостаточно денег на счете',
        'unknown_error' => 'Произошла ошибка (код :code)',
        'empty' => 'Выберите ячейки!',
        'should_have_empty_balance' => 'Для получения бонуса ваш баланс должен быть равен нулю',
        'autobet_pick_something' => 'Выберите ячейки для автоматического режима ставок.',
        'disabled_notifications' => 'Вы отказались от принятия уведомлений. Это можно изменить в настройках вашего браузера.',
        'connection_lost' => 'Потеряно соединение с сервером',
        'connection_recovered' => 'Соединение восстановлено',
        'disabled_bets' => 'Прием ставок в данный момент игры недоступен.',
        'disabled_demo_bets' => 'Эта игра не принимает ставки в демо-режиме. Войдите на сайт или переключите свой счет на реальный.',
        'muted' => 'Чат заблокирован до :time',
        'invalid_withdraw' => 'Введенная сумма меньше требуемой для вывода (с учетом комисии)',
        'only_one_withdraw' => 'Вы уже заказывали выплату - невозможно создать новую заявку до модерации предыдущей.',
        'enter_wallet' => 'Введите номер кошелька!',
        'promo_limit' => 'Вы достигли лимита активаций промокодов в день.',
        'promo_balance' => 'Активация промокодов доступна только если ваш баланс меньше требуемого для вывода.',
        'autobet_mines_error' => 'Вы выбрали больше ячеек, чем доступных кристаллов.',
        'vip_only_promocode' => 'Этот промокод доступен только при наличии VIP статуса.'
    ],
    'profit_monitoring' => [
        'title' => 'Статистика',
        'wager' => 'Оборот',
        'profit' => 'Прибыль',
        'wins' => 'Побед',
        'losses' => 'Проигр.',
        'no_data' => 'Нет данных'
    ],
    'rain' => 'Попали под дождь!<br>:sum :currency',
    'snow' => 'Попали под снег!<br>:sum :currency',
    'quiz' => 'Вопрос:',
    'quiz_answer' => 'Правильный ответ:',
    'quiz_user' => 'Ответил:',
    'chart' => 'График',
    'crash' => 'КРАШ',
    'yes' => 'Да',
    'no' => 'Нет',
    'double' => 'Удвоить',
    'divide' => 'Разделить',
    'coming_soon' => 'Скоро',
    'reload' => 'Перезарядка:',
    'spin' => 'Крутить',
    'wager' => 'Сумма ставки',
    'chip' => 'Выберите фишку (:value)',
    'profit' => 'Прибыль',
    'payout' => 'Выплата',
    'play' => 'Играть',
    'cancel' => 'Отменить',
    'undo' => 'Отменить',
    'close' => 'Закрыть',
    'change' => 'Изменить',
    'even' => 'чет',
    'odd' => 'нечет',
    'unit' => 'Валют. ед.',
    'to' => ':1 до :2',
    'take' => 'Забрать :value <i class=":icon"></i>',
    'start' => 'Запустить',
    'stop' => 'Остановить',
    'overview' => 'Просмотр',
    'share_text' => 'Посмотрите мою игру на 7my.com!',
    'share_vk' => 'Поделиться ссылкой в ВКонтакте',
    'share_chat' => 'Отправить в чат',
    'share_telegram' => 'Поделиться ссылкой в Telegram',
    'share_twitter' => 'Поделиться ссылкой в Twitter',
    'share_link' => 'Поделиться ссылкой',
    'link_copied' => 'Ссылка скопирована!',
    'game_mode' => 'Режим игры',
    'color' => 'Цвет',
    'yellow' => 'Желтый',
    'blue' => 'Синий',
    'pins' => 'Количество пинов',
    'autopick' => '<i class="fas fa-wand-magic mr-1"></i> Автовыбор',
    'clear' => 'Очистить',
    'mines' => 'Количество мин',
    'edit' => 'Изменить',
    'add' => 'Добавить',
    'already_purchased' => 'Приобретен',
    'purchase_sticker_pack' => 'Приобрести за :coins <i class="fas fa-coins"></i>',
    'hilo-higher' => 'Выше',
    'hilo-lower' => 'Ниже',
    'hilo-same' => 'Та же',
    'chance' => 'Шанс',
    'chat_at' => 'Введите @<strong>имя пользователя</strong> для уведомления',
    'autoStop' => 'Автоматическая остановка на',
    'target_payout' => 'Целевой коэфф.',
    'win_chance' => 'Шанс победы',
    'wait_game_start' => 'Ожидание начала игры...',
    'demo_popup_link' => 'Играть на деньги',
    'got' => 'Выпало',
    'videopoker' => [
        'f_r' => 'Флеш рояль',
        's_f' => 'Стрит флеш',
        'k' => 'Каре',
        'f_h' => 'Фулл хаус',
        'f' => 'Флеш',
        's' => 'Стрит',
        't' => 'Тройка',
        't_p' => 'Две пары',
        'p' => 'Пара (J, Q, K, A)'
    ],
    'deal' => 'Раздать карты',
    'stand' => 'Стоп',
    'hit' => 'Взять',
    'split' => 'Сплит',
    'insurance' => 'Желаете страховку?<br>Она позволяет застраховаться от возможной руки дилера с блэкджеком.<br>Страховка стоит половину вашей ставки.',
    'accept' => 'Принять',
    'decline' => 'Отказаться',
    'insurance_success' => 'Вы купили страховку.',
    'blackjack' => [
        '0' => 'Ничья',
        '1' => 'Вы проиграли',
        '2' => 'Вы выиграли',
        '3' => 'Вы выиграли',
        '4' => 'Вы проиграли',
        '5' => 'Вы выиграли',
        '6' => 'Вы проиграли'
    ],
    'difficulty' => [
        'title' => 'Сложность',
        'low' => 'Низкая',
        'medium' => 'Средняя',
        'high' => 'Высокая'
    ],
    'baccarat' => [
        'player' => 'Игрок',
        'draw' => 'Ничья',
        'pair_player' => '[И] Пара',
        'pair_banker' => '[Д] Пара',
        'banker' => 'Дилер'
    ]
];
