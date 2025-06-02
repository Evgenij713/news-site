<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?=SITE_CHARSET?>">
    <title><?=$title?></title>
    <link rel="canonical" href="<?=$canonical?>">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/main.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/news.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/categories.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/logs.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/auth.css">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <div class="logo__title h3">Мой сайт</div>
                    <div class="logo__subtitle h6">О некоторых темах</div>
                </div>
                <div class="auth-section">
                    <?php if (!empty($user)): ?>
                        <div class="user-dropdown">
                            <button class="user-btn">
                                <span class="user-name"><?=$user['name']?></span>
                                <svg class="dropdown-icon" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L6 6L11 1" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </button>
                            <div class="dropdown-menu">
                                <a href="<?=BASE_URL?>logout" class="dropdown-item">Выйти</a>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php if ($controller !== 'auth/login'): ?>
                            <a href="<?=BASE_URL?>login" class="login-btn">Войти</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
    <nav class="site-nav">
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?=BASE_URL?>">Главная</a>
                </li>
                <?php if ($usersRole === 1 || $usersRole === 2 || $usersRole === 3): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>article/add">Добавить статью</a>
                    </li>
                <?php endif; ?>
                <?php if ($usersRole === 1 || $usersRole === 2): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>categories">Редактор категорий</a>
                    </li>
                <?php endif; ?>
                <?php if ($usersRole === 1): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>logs">Просмотр логов</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <div class="site-content">
        <div class="container">
            <?=$content?>
        </div>
    </div>
    <footer class="site-footer">
        <div class="container">
            &copy; Копылов Евгений, 2025
        </div>
    </footer>
</body>
</html>