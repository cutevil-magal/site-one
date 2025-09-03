# 🚀 Code Birdy — онлайн-платформа для обучения детей программированию

**Fullstack-разработка образовательной CMS на базе OpenCart**

[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![OpenCart](https://img.shields.io/badge/OpenCart-4F9DCF?style=for-the-badge)](https://www.opencart.com/)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![Twig](https://img.shields.io/badge/Twig-1C9?style=for-the-badge)](https://twig.symfony.com/)
[![SCSS](https://img.shields.io/badge/SCSS-CC6699?style=for-the-badge&logo=sass&logoColor=white)](https://sass-lang.com/)

---

## 📖 О проекте

Code Birdy — это полнофункциональная образовательная система, разработанная на базе CMS OpenCart. Платформа превращает стандартную e-commerce систему в мощный инструмент для обучения детей программированию с комплексной системой отслеживания прогресса.

**Ключевая цель проекта:** Создать удобную и функциональную среду для последовательного обучения с автоматизацией контроля успеваемости.

### 🎯 Реализованная функциональность

- **📚 Система уроков:** Структурированное представление учебных материалов с навигацией
- **✅ Интерактивные тесты:** Проверка знаний с автоматической проверкой результатов
- **📊 Электронный дневник:** Визуализация прогресса обучения для учащихся и преподавателей
- **👨‍🏫 Панель администратора:** Полный контроль над учебным процессом и контентом
- **🔐 Механизм сессий:** Отслеживание прогресса пользователей через cookies и сессии
- **🎨 Кастомизация интерфейса:** Адаптация платформы под образовательные задачи

### 🛠 Технологический стек

**Backend:**
- PHP 7.4+
- OpenCart 3.x (MVC архитектура)
- MySQL 5.7+
- OCMOD модификаторы

**Frontend:**
- Twig (шаблонизация)
- JavaScript (ES6+)
- SCSS (препроцессор CSS)
- HTML5, CSS3

**База данных:**
- 14 связанных таблиц
- Оптимизированные запросы
- Нормализованная структура

---

## 🖼 Скриншоты системы

*(Здесь вы можете добавить 2-3 скриншота интерфейса платформы)*
<!-- ![Главная страница](/screenshots/main-page.png) -->
<!-- ![Личный кабинет](/screenshots/dashboard.png) -->
<!-- ![Админ-панель](/screenshots/admin-panel.png) -->

---
## 🚀 Запуск проекта (через OpenServer)

### Системные требования
- OpenServer 5.3.0 или выше
- PHP 7.4+
- MySQL 5.7+
- Apache web server

### Установка

1. **Клонирование репозитория**
   ```bash
   git clone https://github.com/cutevil-magal/site-one.git
   ```
2. **Настройка OpenServer**
- Скопируйте папку проекта в OpenServer/domains/
- Переименуйте папку в site-one
- Запустите OpenServer и активируйте модули: Apache, PHP 7.4, MySQL
3. **Настройка базы данных**
- Откройте phpMyAdmin через панель OpenServer
- Создайте новую базу данных с именем site-one
- Импортируйте дамп БД (файл database/dump.sql если имеется)
4. Конфигурация проекта
-Файл конфигурации уже настроен для работы с OpenServer:

```
<?php
// HTTP
define('HTTP_SERVER', 'http://site-one/');
define('HTTPS_SERVER', 'http://site-one/');

// DIR
define('DIR_APPLICATION', 'W:/domains/site-one/catalog/');
define('DIR_SYSTEM', 'W:/domains/site-one/system/');
define('DIR_IMAGE', 'W:/domains/site-one/image/');
define('DIR_STORAGE', 'W:/domains/storage/');
// ... остальные настройки
define('DB_DATABASE', 'site-one');
define('DB_PREFIX', 'oc_');
```
5. Проверка работы
- Откройте в браузере: http://site-one/
- Проект должен запуститься автоматически

##📊 Архитектурные решения
### База данных
Разработана сложная реляционная структура из 14 таблиц, включая:
- users (пользователи)
- courses (курсы)
- lessons (уроки)
- tests (тесты)
- progress (прогресс)
- user_sessions (сессии)

### OCMOD модификаторы
Использованы кастомизационные модификаторы OpenCart для:
- Изменения логики работы без правки ядра
- Добавления новой функциональности
- Интеграции образовательных модулей

### MVC архитектура
- Model: Работа с данными уроков и прогресса
- View: Twig-шаблоны для отображения контента
- Controller: Обработка запросов и бизнес-логика

## 📚 Документация

- [Руководство пользователя](/docs/user-guide.md)

---

## 🎯 Результаты и выводы

**Достигнутые результаты:**
- ✅ Создана полноценная образовательная платформа с нуля
- ✅ Реализована сложная бизнес-логика отслеживания прогресса
- ✅ Обеспечена масштабируемость и поддержка системы
- ✅ Интегрированы механизмы кастомизации без изменения ядра

**Приобретенные компетенции:**
- Глубокое понимание MVC-архитектуры в рамках OpenCart
- Опыт работы с модификаторами OCMOD для кастомизации
- Навыки проектирования сложной структуры базы данных
- Умение адаптировать e-commerce систему под образовательные задачи
- Опыт полного цикла разработки: от проектирования до тестирования

---

## 👥 Разработчик

**Анна Хвостикова** - Fullstack Developer

[![GitHub](https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/cutevil-magal)
[![Email](https://img.shields.io/badge/Email-ana.magal@yandex.by-D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:ana.magal@yandex.by)

---

## 📄 Лицензия

Этот проект является учебным и предназначен для демонстрации навыков разработки.
