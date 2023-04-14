Создайте функцию **link_to**, которая при вызове сгенерирует и вернет HTML-строку с тегом ссылки внутри. Функция должна принимать один параметр ($params) со следующими возможными полями: type (значения - default, phone, email), href, content. Далее идут примеры вызова функции вместе с ожидаемым ответом:

    link_to( [
        'type' => 'default',
        'content' => 'Link',
        'href' => 'http://example.com',
    ]);
    
    Output: <a href="http://example.com">Link</a>

    link_to( [
        'type' => 'email',
        'content' => 'johndoe@example.com',
    ]);
    
    Output <a href="mailto:johndoe@example.com">johndoe@example.com</a>

    link_to( [
        'type' => 'tel',
        'content' => '+38 123 456 78 90',
    ]);
    
    Output: <a href="tel:381234567890">+38 123 456 78 90</a>
