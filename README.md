# bitrix__module_als.hyphenator
Модуль битрикса для расстановки переносов

## Установка
1. Скопировать модуль в директорию: /local/modules/als.hyphenator/
2. Установить через Маркетплейс: Marketplace -> Установленные решения
3. В коде подключить модуль: CModule::IncludeModule('als.hyphenator');
4. Расставить переносы командой: CHyphenator::run('мой текст для переноса');

## Пример использования для компонента catalog.element
В файле result_modifier.php:
```php
CModule::IncludeModule('als.hyphenator');
$arResult['DETAIL_TEXT'] = CHyphenator::run($arResult['DETAIL_TEXT']);
```
