<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <li class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </li>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <?= Html::a('Polling-app', ['/site/index'], ['class' => 'nav-link px-2 link-dark']) ?>
                </li>
            </ul>

            <?php if (!Yii::$app->user->isGuest): ?>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= Yii::$app->user->identity->username ?>
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                        <li><a class="dropdown-item" href="#">Профиль</a></li>
                        <li><a class="dropdown-item" href="#">Создать опрос</a></li>
                        <li><a class="dropdown-item" href="#">Настройки</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <?= Html::beginForm(['/site/logout'], 'post', ['enctype' => 'multipart/form-data'])
                            . Html::submitButton('Выход (' . Yii::$app->user->identity->username . ')', ['class' => 'btn bg-white'])
                            . Html::endForm() ?>
                        </li>
                    </ul>
                </div>
            <?php else: ?>
                <?= Html::a('Регистрация', ['/site/signup'], ['class' => 'nav-link px-2 link-dark']) ?>
                <?= Html::a('Войти', ['/site/login'], ['class' => 'nav-link px-2 link-dark']) ?>
            <?php endif; ?>
        </div>
    </div>
</header>

<?= $content ?>

<footer class="footer mt-auto py-3 text-muted text-center">
    <p>©2021 Polling-app</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>
