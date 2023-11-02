ALFACOM ТЕСТОВОЕ ЗАДАНИЕ

* Запуск проекта
Переименовать файл .env.example в .env
Для запуска необходима таблица 'alfacom' (в базе данных MySQL) с паролем и юзернеймом root
Запустить миграции (php artisan migrate)
Запустить сидеры:
    php artisan db:seed --class=NewsCategoriesSeeder
    php artisan db:seed --class=NewsItemsSeeder
    php artisan db:seed --class=NewsImagesSeeder
    php artisan db:seed --class=NewsItemCategorySeeder
Проект готов к запуску
