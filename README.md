### Как установить и запустить

1. **git clone https://github.com/yargliv/FeedbackForm **
2. **cd FeedbackForm**
3. **composer install**
4. **npm install**
5. Переименовать .env.example файл как .env
6. Настроить подключение к ДБ
7. **php artisan key:generate**
9. **php artisan config:cache**
10. **php artisan migrate**
11. **php artisan storage:link**
12. **php artisan serve**

Сайт крутится на **localhost:8000**
Отзывы сохраняются либо в базу данных (таблица **feedbacks**), либо в файл **feedbacks.json** (полный путь '**storage/app/public/feedbacks/feedbacks.json**')