<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

Мета проекту:
Основною метою проекту є використання API для інтеграції з зовнішнім сервісом — The Movie Database (TMDb), що дозволяє отримувати актуальні дані про фільми, акторів та інші медіа-об'єкти. Завдяки використанню Livewire було реалізовано SearchDropdown, який динамічно взаємодіє з API, надаючи користувачу можливість швидко і ефективно здійснювати пошук без необхідності перезавантаження сторінки.

Ключові технології:
Laravel — фреймворк для створення веб-додатків.
Livewire — для створення інтерактивних компонентів без JavaScript.
API The Movie Database (TMDb) — сервіс для отримання даних про фільми, акторів, шоу тощо.
JSON — формат для передачі даних між сервером та клієнтом.

Основні етапи реалізації:
1. Використання API для отримання даних
Для інтеграції з TMDb API було реалізовано динамічний пошуковий компонент, який звертається до API для отримання даних про акторів або фільми. Запити до API виконуються через HTTP-запити, що надсилаються з компонента Livewire. Всі пошукові запити відправляються на сервер TMDb, який повертає результат у форматі JSON.
2. Обробка відповіді від API (JSON)
Отримані від API дані повертаються у форматі JSON, що зручно обробляється в PHP за допомогою методу .json(). Це дозволяє отримувати і ефективно використовувати великі обсяги даних, такі як списки акторів, фільмів, їхніх назв, описів і зображень.
3. Динамічний пошук за допомогою Livewire
Компонент SearchDropdown реагує на кожну зміну введеного пошукового терміну за допомогою Livewire. Кожного разу, коли користувач вводить нові символи, Livewire автоматично відправляє запит до API і оновлює результати на сторінці.Автоматичне оновлення: Livewire автоматично оновлює компонент після кожної зміни в полі введення.
Пагінація та обмеження результатів: Завдяки підтримці пагінації API, можна обмежувати кількість результатів, що завантажуються на кожній сторінці.
4. Виведення результатів у вигляді динамічного дропдауну
Результати пошуку відображаються у вигляді динамічного SearchDropdown. При цьому, користувач може побачити список акторів або фільмів, що відповідають введеному запиту, без перезавантаження сторінки. Це створює зручний та швидкий інтерфейс для пошуку.
5. Оптимізація та асинхронна обробка даних
Оскільки запити до API можуть займати деякий час, важливо було оптимізувати процес так, щоб користувач отримував результати миттєво. Завдяки Livewire дані завантажуються асинхронно, а це значно покращує взаємодію з користувачем, не створюючи затримок.
