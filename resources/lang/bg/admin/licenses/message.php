<?php

return array(

    'does_not_exist' => 'Лицензът не съществува.',
    'user_does_not_exist' => 'Потребителят не съществува.',
    'asset_does_not_exist' 	=> 'Активът, който се опитвате да свържете с този лиценз не съществува.',
    'owner_doesnt_match_asset' => 'Активът, който се опитвате да свържете с този лиценз е притежание на друго лице, различно от това, което е определено в падащия списък.',
    'assoc_users'	 => 'Този лиценз понастоящем е изписан на потребител и не може да бъде изтрит. Моля, първо впишете лиценза и тогава опитайте отново да го изтриете. ',
    'select_asset_or_person' => 'Трябва да изберете актив или потребител, но не и двете.',
    'not_found' => 'Лиценът не е намерен',


    'create' => array(
        'error'   => 'Лицензът не беше създаден. Моля, опитайте отново.',
        'success' => 'Лицензът е създаден.'
    ),

    'deletefile' => array(
        'error'   => 'Файлът не е изтрит. Моля, опитайте отново.',
        'success' => 'Файлът е изтрит.',
    ),

    'upload' => array(
        'error'   => 'Файлът (файловете) не е качен. Моля, опитайте отново.',
        'success' => 'Файлът (файловете) е качен.',
        'nofiles' => 'Не сте избрали файл за качване или файлът, който се опитвате да качите е твърде голям',
        'invalidfiles' => 'Един или повече от вашите файлове е твърде голям или е забранен тип файл. Разрешените типове файл са png, jpg, jpeg, doc, docx, pdf, txt, zip, rar, rtf, xml, и lic.',
    ),

    'update' => array(
        'error'   => 'Лицензът не беше обновен. Моля, опитайте отново',
        'success' => 'Лицензът е обновен.'
    ),

    'delete' => array(
        'confirm'   => 'Сигурни ли сте, че искате да изтриете този лиценз?',
        'error'   => 'Възникна проблем при изтриването на този лиценз. Моля, опитайте отново.',
        'success' => 'Лицензът е изтрит.'
    ),

    'checkout' => array(
        'error'   => 'Възникна проблем при изписването на лиценза. Моля, опитайте отново.',
        'success' => 'Лицензът е изписан'
    ),

    'checkin' => array(
        'error'   => 'Възникна проблем при вписването на лиценза. Моля, опитайте отново.',
        'success' => 'Лицензът е вписан'
    ),

);
