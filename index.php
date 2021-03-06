<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Artem Nikulin - web-developer</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
            integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
            crossorigin="anonymous"></script>
</head>
<body>
<?php
//var_export($_POST);

$userMessage = '';

if ($_POST) {
    $name = cleanInput($_POST['name']);
    $email = cleanInput($_POST['mail']);
    $tel = cleanInput($_POST['tel']);
    $comment = cleanInput($_POST['comment']);

    $myEmail = "itsacats@gmail.com";
    $title = "Заявка с сайта от пользователя $name, телефон: $tel";
    $messageContent = "ФИО:" . $name . ". E-mail: " . $email . ' Комментарий: '. $comment;

    if (mail($myEmail, $title, $messageContent, "From: $email")) {
        $userMessage = "Сообщение успешно отправлено";
    } else {
        $userMessage = "При отправке сообщения возникли ошибки";
    }
}
function cleanInput(string $string): string {
    return trim(htmlspecialchars($string));
}?>
<header class="pt-1 bg-dark" id="header">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand light ms-5" href="#header">
                <strong>[ artemNikuln ]</strong>
            </a>
            <button class="navbar-toggler bg-light me-5" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item text-nowrap ms-5">
                        <a class="nav-link light" aria-current="page" href="#about">Обо мне</a>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link light" href="#skills">Навыки</a>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link light" href="#portfolio">Портфолио</a>
                    </li>
                    <li class="nav-item ms-5 w-25 bg-light border-success border-4 rounded">
                        <a class="nav-link text-center dark" href="#contact" tabindex="-1" aria-disabled="true">
                            <strong>Заказать</strong>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section class="bg-dark m-0">
    <div class="container justify-content-center" style="padding-top: 150px">
        <p id="js-hello" class="mb-0 text-center text-light" style="font-size: 28px"></p>
        <h2 id="js-developer" class="mt-0 mb-0 text-center text-light" style="font-size: 58px"></h2>
        <div class="text-center">
            <img src="img/Vector_kopia.png" alt="">
        </div>
        <ul class="nav justify-content-center mt-1 ms-2" style="padding-bottom: 150px">
            <li class="nav-item">
                <a class="nav-link" href="mailto:itsacats@gmail.com">
                    <img src="img/mail%20symbol.png" alt="">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/nikulinArtem">
                    <img src="img/github%20symbol.png" alt="">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://tula.hh.ru/resume/7d5239dbff04a0be5c0039ed1f515834784138">
                    <img src="img/hh%20logo.png" alt="">
                </a>
            </li>
        </ul>
    </div>
</section>

<section class="bg-dark bg-opacity-75">
    <div class="container m-0">
        <div class="row flex-nowrap">
            <div class="col-9 ms-5">
                <h3 class="pt-3 text-light">ПУТЬ В IT</h3>
                <p class="pb-3 text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam
                    aliquid architecto aut dolorum excepturi expedita magnam perferendis voluptatem. Distinctio dolore
                    doloremque eius esse libero quaerat, repellat sed voluptatem voluptates.</p>
            </div>
            <div class="col text-end">
                <img class="" src="img/Logo%20ITB.png" alt="" height="150px">
            </div>
        </div>
    </div>
</section>

<section class="bg-secondary bg-opacity-50 pt-5" id="about">
    <div class="container d-flex flex-column pt-5 ">
        <h3 class="text-center text-nowrap w-25 align-self-center pt-2 pb-1 ps-0 pe-0 border border-dark border-5 g-0">
            ОБО МНЕ</h3>
        <p class="text-center mt-4 w-75 align-self-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Doloremque eligendi exercitationem expedita odio, ratione veniam! Amet aperiam, dolore illo magni nam
            necessitatibus nesciunt nisi omnis optio perspiciatis, soluta, voluptate voluptatum.</p>
        <div class="align-self-center mt-3 mb-4">
            <img src="img/Vector.png" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-12">
                    <div class="row ms-2">
                        <div class="col-3">
                            <img src="img/136378-200%201.png" alt="">
                        </div>
                        <div class="col w-25 position-absolute mt-3 ms-4">
                            <h4>Дизайн</h4>
                        </div>
                        <p class="mt-1 ms-4 mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
                            assumenda dicta magnam
                            molestias sed.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row ms-2">
                        <div class="col-3">
                            <img src="img/maintenance--v3%201.png" alt="">
                        </div>
                        <div class="col w-25 position-absolute mt-4 ms-4">
                            <h4>Разработка</h4>
                        </div>
                        <p class="mt-1 ms-4 mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
                            assumenda dicta magnam
                            molestias sed.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 mt-3 ms-2">
                    <div class="row ms-2">
                        <div class="col-3">
                            <img src="img/img_533288%201.png" alt="">
                        </div>
                        <div class="col-9 w-25 position-absolute mt-4 ms-5">
                            <h4>Поддержка</h4>
                        </div>
                        <p class="mt-1 ms-5 mb-2 pe-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
                            assumenda dicta magnam molestias sed.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center d-flex flex-column ms-1 mt-4 mb-5">
            <img class="align-self-center" src="img/Vector.png" alt="">
        </div>
    </div>
</section>

<section class="bg-secondary bg-opacity-50 pt-5" id="skills">
    <div class="container d-flex flex-column pt-4 pb-3">
        <h3 class="text-center w-25 align-self-center pt-2 pb-1 ps-3 pe-3 border border-dark border-5">НАВЫКИ</h3>
        <div class="w-50 align-self-center mt-3">
            <div class="container">
                <div class="row">
                    <h5 class="text-start mt-4">ИСПОЛЬЗУЮ СЕЙЧАС:</h5>
                    <div class="col-lg-3 col-sm-6 col-sm-6 justify-content-center">
                        <div class="row justify-content-center">
                            <img class="text-center img-fluid" src="img/html-bw.png" alt="" width="100%" height="auto">
                            <p class="text-center mt-1">HTML</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-sm-6">
                        <div class="row justify-content-center">
                            <img class="text-center img-fluid" src="img/css-bw.png" alt="" width="100%" height="auto">
                            <p class="text-center mt-1">CSS</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-sm-6">
                        <div class="row justify-content-center">
                            <img class="text-center img-fluid" src="img/bootstrap-bw.png" alt="" width="100%"
                                 height="auto">
                            <p class="text-center mt-1">Bootstrap</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-sm-6">
                        <div class="row justify-content-center">
                            <img class="text-center img-fluid" src="img/git.png" alt="" width="100%" height="auto">
                            <p class="text-center mt-1">Git</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-sm-6 justify-content-center">
                        <div class="row justify-content-center">
                            <img class="text-center img-fluid" src="img/js-bw.png" alt="" width="100%" height="auto">
                            <p class="text-center mt-1">JavaScript</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-sm-6">
                        <div class="row justify-content-center">
                            <img class="text-center img-fluid" src="img/react-bw.png" alt="" width="100%" height="auto">
                            <p class="text-center mt-1">React.js</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-sm-6">
                        <div class="row justify-content-center">
                            <img class="text-center img-fluid" src="img/php-bw.png" alt="" width="100%" height="auto">
                            <p class="text-center mt-1">PHP</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-sm-6">
                        <div class="row justify-content-center">
                            <img class="text-center img-fluid" src="img/figma.png" alt="" width="100%" height="auto">
                            <p class="text-center mt-1">Figma</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <h5 class="text-start mt-4">ИЗУЧАЮ:</h5>
                    <div class="col-lg-3 col-sm-6 col-sm-6 justify-content-center">
                        <div class="row justify-content-center">
                            <img class="text-center img-fluid" src="img/vue.png" alt="" width="100%" height="auto">
                            <p class="text-center mt-1">Vue.js</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-sm-6">
                        <div class="row justify-content-center">
                            <img class="text-center img-fluid" src="img/sass.png" alt="" width="100%" height="auto">
                            <p class="text-center mt-1">Sass</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-sm-6">
                        <div class="row justify-content-center">
                            <img class="text-center img-fluid" src="img/gulp.png" alt="" width="100%" height="auto">
                            <p class="text-center mt-1">Gulp</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-sm-6">
                        <div class="row justify-content-center">
                            <img class="text-center img-fluid" src="img/laravel.png" alt="" width="100%" height="auto">
                            <p class="text-center mt-1">Laravel</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark pt-5" id="portfolio">
    <div>
        <div class="d-flex flex-column">
            <h3 class="text-center text-light w-25 position-absolute align-self-center mt-5 pt-2 pb-1 ps-3 pe-3 border border-light border-5">
                ПОРТФОЛИО</h3>
        </div>
        <img src="img/mount.png" class="img-fluid w-100" alt="...">
    </div>

    <div class="container">
        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
            <li class="nav-item rounded-0" role="presentation">
                <a href="#" class="nav-link link-light active" id="home-tab" data-bs-toggle="tab"
                   data-bs-target="#tab-works" role="tab" aria-controls="home" aria-selected="true">ВСЕ РАБОТЫ</a>
            </li>
            <li class="nav-item rounded-0" role="presentation">
                <a href="#" class="nav-link link-light" id="profile-tab" data-bs-toggle="tab"
                   data-bs-target="#tab-programming" role="tab" aria-controls="profile" aria-selected="false">ПРОГРАММИРОВАНИЕ</a>
            </li>
            <li class="nav-item rounded-0" role="presentation">
                <a href="#" class="nav-link link-light" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab-design"
                   role="tab" aria-controls="contact" aria-selected="false">ДИЗАЙН</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active text-white" id="tab-works" role="tabpanel"
                 aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-sm-6 col-lg-4 border border-light border-1">
                        <img src="img/IM.png" alt="" class="img-fluid" width="100%" height="auto">
                    </div>
                    <div class="col-sm-6 col-lg-4 border border-light border-1">
                        <img src="img/this.png" alt="" class="img-fluid" width="100%" height="auto">
                    </div>
                    <div class="col-sm-6 col-lg-4">
                    </div>
                    <div class="col-sm-6 col-lg-4"></div>
                    <div class="col-sm-6 col-lg-4"></div>
                    <div class="col-sm-6 col-lg-4"></div>
                </div>
            </div>

            <div class="tab-pane fade text-white" id="tab-programming" role="tabpanel"
                 aria-labelledby="profile-tab">
                <div class="row">
                    <div class="col-sm-6 col-lg-4 border border-light border-1">
                        <img src="img/this.png" alt="" class="img-fluid" width="100%" height="auto">
                    </div>
                    <div class="col-sm-6 col-lg-4">
                    </div>
                    <div class="col-sm-6 col-lg-4"></div>
                    <div class="col-sm-6 col-lg-4"></div>
                    <div class="col-sm-6 col-lg-4"></div>
                </div>
            </div>

            <div class="tab-pane fade text-white" id="tab-design" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                    <div class="col-sm-6 col-lg-4 border border-light border-1">
                        <img src="img/IM.png" alt="" class="img-fluid" width="100%" height="auto">
                    </div>
                    <div class="col-sm-6 col-lg-4">
                    </div>
                    <div class="col-sm-6 col-lg-4"></div>
                    <div class="col-sm-6 col-lg-4"></div>
                    <div class="col-sm-6 col-lg-4"></div>
                </div>
            </div>
        </div>


        <!--        old    -->
        <!--<div class="row justify-content-center mt-2 mb-2 pb-2 tabs">
            <div class="col-sm-6 col-lg-4 mt-2 border-white border-bottom border-3 ">
                <a class="text-center nav-link link-light mb-0 tab-link" href="#">ВСЕ РАБОТЫ</a>
            </div>
            <div class="col-sm-6 col-lg-4 mt-2 border-secondary border-bottom border-3">
                <a class="text-center nav-link link-light mb-0 tab-link" href="#">ПРОГРАММИРОВАНИЕ</a>
            </div>
            <div class="col-sm-6 col-lg-4 mt-2  border-secondary border-bottom border-3">
                <a class="text-center nav-link link-light mb-0 tab-link" href="#">ДИЗАЙН</a>
            </div>
        </div>-->
        <!--        /old    -->

        <!--<div class="row justify-content-center pt-2 pb-2">
            <div class="col-sm-6 col-lg-4 border border-light border-1">
                <img src="img/IM.png" alt="" class="img-fluid" width="100%" height="auto">
            </div>
            <div class="col-sm-6 col-lg-4 border border-light border-1">
                <img src="img/this.png" alt="" class="img-fluid" width="100%" height="auto">
            </div>
            <div class="col-sm-6 col-lg-4">
            </div>
            <div class="col-sm-6 col-lg-4"></div>
            <div class="col-sm-6 col-lg-4"></div>
            <div class="col-sm-6 col-lg-4"></div>
        </div>-->
        <h5 class="text-center text-light mt-4 pb-1">
            ПОРТФОЛИО БУДЕТ ПОПОЛНЯТЬСЯ ПО МЕРЕ ПОСТУПЛЕНИЯ ЗАКАЗОВ
        </h5>
        <p class="text-center text-light mt-0">
            для получения обратной связи нужно заполнить форму
        </p>
        <div class="text-center pb-3">
            <img src="img/Vector_kopia.png" alt="">
        </div>
    </div>
</section>

<section class="bg-secondary bg-opacity-50 pt-5" id="contact">
    <div class="container d-flex flex-column pt-5 pb-3">
        <h3 class="text-center w-25 align-self-center mt-3 border border-dark border-5">КОНТАКТЫ</h3>
        <p class="text-center mt-2 mb-0 w-75 align-self-center">
            При заполнении заявки Вы можете указать все пожелания по заказу.
        </p>
        <p class="text-center mt-0 w-75 align-self-center">
            Стоимость выполнения будет посчитана из индивидуальности комплекса работ.
        </p>
        <div class="text-center d-flex flex-column ms-1 mt-2 mb-5">
            <img class="align-self-center" src="img/Vector.png" alt="">
        </div>

        <div class="contact-form align-self-center w-75">
            <form method="post">
                <div class="mb-3">
                    <input type="text"
                           name="name"
                           class="form-control bg-secondary bg-opacity-25 border border-start border-bottom border-top-0 border-end-0 border-dark border-4"
                           placeholder="Иван Иванов" required>
                </div>

                <div class="mb-3">
                    <input type="email"
                           name="mail"
                           class="form-control bg-secondary bg-opacity-25 border border-start border-bottom border-top-0 border-end-0 border-dark border-4"
                           placeholder="name@example.com" required>
                </div>

                <div class="mb-3">
                    <input type="tel"
                           name="tel"
                           class="form-control bg-secondary bg-opacity-25 border border-start border-bottom border-top-0 border-end-0 border-dark border-4"
                           placeholder="+7 (123) 456-8910" required>
                </div>

                <div class="mb-3">
                    <textarea
                            name="comment"
                            class="form-control bg-secondary bg-opacity-25 border border-start border-bottom border-top-0 border-end-0 border-dark border-4"
                            rows="3" placeholder="Ваше сообщение" required></textarea>
                </div>

                <div class="d-flex flex-column text center">
                    <button type="submit" class="btn btn-dark align-self-center">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</section>

<footer class="bg-dark">
    <div class="container d-flex flex-column pt-3 pb-3">
        <a class="text-center nav-link link-light mt-0 mb-3 w-75 align-self-center" href="#header">
            <img src="img/ic_baseline-double-arrow.svg" alt=""
                 class="text-center align-self-center mt-3 pb-1 d-inline-block">
            <br>
            ВЕРНУТЬСЯ К НАЧАЛУ СТРАНИЦЫ
        </a>

        <ul class="nav justify-content-center mt-0 ms-2 pb-3">
            <li class="nav-item">
                <a class="nav-link" href="mailto:itsacats@gmail.com">
                    <img src="img/mail%20symbol.png" alt="">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="img/github%20symbol.png" alt="">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="img/hh%20logo.png" alt="">
                </a>
            </li>
        </ul>
    </div>
</footer>

<script src="script.js"></script>
<script>
    const userMessage = `<?=$userMessage?>`;
    if (userMessage) {
        alert(userMessage);
    }
</script>
</body>
</html>