<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeaFoods</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha256-4hqlsNP9KM6+2eA8VUT0kk4RsMRTeS7QGHIM+MZ5sLY=" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css" integrity="sha512-uCQmAoax6aJTxC03VlH0uCEtE0iLi83TW1Qh6VezEZ5Y17rTrIE+8irz4H4ehM7Fbfbm8rb30OkxVkuwhXxrRg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/css/media.css">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/39b845f03b.js" crossorigin="anonymous"></script>

</head>

<body>
    <header class="header">
        <div class="container">
            <div class="navb nav-bg">
                <input type="checkbox" id="navb-check" onchange="burger()">
                <!-- <div class="navb-header">
          <div class="navb-title">
          </div>
        </div> -->
                <div class="navb-btn">
                    <label for="navb-check">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
                </div>

                <div class="navb-links">
                    <a class="nav-link nav-bar-links" href="index.blade.php">ГЛАВНАЯ</a>
                    <a class="nav-link nav-bar-links" href="#">МЕНЮ</a>
                    <!-- logo -->
                    <a class="logo" href="index.blade.php"><img src="img/svg/Logo.svg" alt=""></a>
                    <a class="nav-link nav-bar-links" href="recipie.blade.php">РЕЦЕПТЫ</a>
                    <a class="nav-link nav-bar-links" href="#">О НАС</a>
                    <!-- <button class="btn button-outline  my-2 my-sm-0 mobile-mod" onchange="navbar()" type="submit">Контакты</button> -->

                </div>
                <div class="navb-sp-btn">
                    <div class="form-inline my-lg-0">
                        <button id="get_mon" class="headerButton modalButton btn button-outline contact-button my-2 my-sm-0 desktop-mod log-in-btn" type="submit" data-popup="popupOne"> <img src="img/svg/log-in.svg" alt=""> </button>
                        <section class="modal modalWindow" id="popupOne">
                            <section class="modalWrapper firstPopup">
                                <div class="form-wrapper">
                                    <div class="modal-heading-text">
                                        <h2>Авторизация </h2>
                                        <p>Войти с помощью</p>
                                    </div>
                                    <div class="sf-social-log_in">
                                        <a href="" class="sf-social-log_in--item"><img src="./img/svg/icon-fb.svg" alt=""></a>
                                        <a href="" class="sf-social-log_in--item "><img src="./img/svg/icon-ggl.svg" alt=""></a>
                                    </div>
                                    <form id="wdh_form" class="log-in-form contact-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                                    <label for="contact-email" class="">Почта</label>
                                                    <input placeholder="daisy.watson@example.com" type="text" id="contact-email" name="email" class="form-control ds_element sf_login_email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                                    <label for="contact-name" class="">Пароль</label>
                                                    <input placeholder="Минимум 8 симв." type="text" id="contact-name" name="name" class="form-control ds_element sf_login_pass">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="log-in-btn">
                                        <a href="#" id="log_in_btn" class="log_in sf-log_in">Войти</a>
                                        <p>У вас нет аккаунта? <button class="sign-in-link link-anchor" type="submit" data-sign="signIn">Зарегистрироваться</button></p>
                                        <!-- <p>У вас нет аккаунта? <a href="">Зарегистрироваться</a></p> -->
                                    </div>
                                </div>
                            </section>
                            <!-- <p>У вас нет аккаунта? <button class="sign-in" type="submit" data-sign="signIn">Зарегистрироваться</button></p> -->

                            <section class="modalWrapper secondPopup">
                                <div class="form-wrapper">
                                    <div class="modal-heading-text">
                                        <h2>Регистрация</h2>

                                    </div>
                                    <form id="wdh_form" class="sign-in-form contact-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                                    <label for="contact-email" class="">Имя</label>
                                                    <input placeholder="Иван" type="text" id="contact-name " name="name" class="form-control ds_element sf_user-name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                                    <label for="contact-email" class="">Почта</label>
                                                    <input placeholder="daisy.watson@example.com" type="text" id="contact-email " name="email" class="form-control ds_element sf_email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <label for="contact-name" class="">Пароль</label>
                                                    <input placeholder="Минимум 8 симв." type="text" id="contact-password s" name="password" class="form-control ds_element sf_password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <label for="contact-name" class="">Телефон</label>
                                                    <input placeholder="Минимум 8 симв." type="text" id="contact-replay-password" name="replay-password" class="form-control ds_element">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="log-in-btn">
                                        <a href="#" id="sign_in_btn" class="sign_in sf-sign_up">Зарегистрироваться</a>
                                    </div>
                                </div>
                            </section>
                            <a class="closeBtn">CLOSE X</a>
                        </section>
                        <section class="modal overlay">








                    </div>
                    <button class="headerButton modalButton shop-cart-ul" type="submit" data-popup1="popupTwo"> <span class="shop-cart-img"><img src="img/svg/shop-cart.svg" alt=""></span> </button>
                    <section class="modal modalWindow shop-curt" id="popupTwo">
                        <section class="modalWrapper">
                            <div class="form-wrapper">
                                <div class="modal-heading-text">
                                    <h4>Вы заказали</h4>
                                </div>
                                <div class="curt-wrapper">
                                    <div class="curt-item">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="curt-total-price__wrapper">
                            <div class="curt-total-price">
                                475
                            </div>
                            <button class="order-btn sf_curt_order">Оформить заказ</button>
                        </div>
                        <a class="closeBtn">CLOSE X</a>
                    </section>
                    <section class="modal overlay">
                </div>
            </div>
        </div>
        </div>
    </header>


    <section class="menu-section">
        <div class="container">
            <section class="menu-tab-wrapper">
                <ul class="tabs">
                    <li class="tabs-li active">
                        <h5 class="active-menu-text">Мясо</h5>
                    </li>
                    <li class="tabs-li ">
                        <h5 class="active-menu-text">Соусы</h5>
                    </li>
                    <li>
                        <h5 class="active-menu-text">Криветки</h5>
                    </li>
                    <li>
                        <h5 class="active-menu-text">Вино</h5>
                    </li>
                    <li>
                        <h5 class="active-menu-text">Пиво</h5>
                    </li>
                    <li>
                        <h5 class="active-menu-text">Маринад</h5>
                    </li>
                </ul>
                <hr>

                <ul class="tab__content">
                    <li class="active">
                        <div class="content__wrapper product-wrapper">
                            <div class="products-menu__items">
                                <img src="./img/shrimps.jpg" alt="">
                                <h2 class="product-prise">426 <span>грн</span> </h2>
                                <button class="order-btn modal-popup">Show</button>
                            </div>
                            <div class="products-menu__items">
                                <img src="./img/mussels.jpg" alt="">
                                <h2 class="product-prise">426 <span>грн</span> </h2>
                                <button class="order-btn modal-popup1">Show</button>
                            </div>
                            <div class="products-menu__items">
                                <img src="./img/tuna.jpg" alt="">
                                <h2 class="product-prise">426 <span>грн</span> </h2>
                                <button class="order-btn ">Show</button>
                            </div>
                            <div class="products-menu__items">
                                <img src="./img/solomon2.jpg" alt="">
                                <h2 class="product-prise">426 <span>грн</span> </h2>
                                <button class="order-btn ">Show</button>
                            </div>
                            <div class="products-menu__items">
                                <img src="./img/solomon2.jpg" alt="">
                                <h2 class="product-prise">426 <span>грн</span> </h2>
                                <button class="order-btn ">Show</button>
                            </div>
                            <div class="products-menu__items">
                                <img src="./img/tuna.jpg" alt="">
                                <h2 class="product-prise">426 <span>грн</span> </h2>
                                <button class="order-btn ">Show</button>
                            </div>
                            <div class="products-menu__items">
                                <img src="./img/shrimps.jpg" alt="">
                                <h2 class="product-prise">426 <span>грн</span> </h2>
                                <button class="order-btn ">Show</button>
                            </div>
                            <div class="products-menu__items">
                                <img src="./img/mussels.jpg" alt="">
                                <h2 class="product-prise">426 <span>грн</span> </h2>
                                <button class="order-btn ">Show</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="content__wrapper product-wrapper">

                        </div>
                    </li>
                    <li>
                        <div class="content__wrapper product-wrapper">
                            <!-- <h2 class="text-color">About</h2> -->
                            <!-- <p>Created by <a class="text-color" href="http://lewihussey.com" target="_blank">Lewi Hussey</a></p> -->
                        </div>
                    </li>
                    <li>
                        <div class="content__wrapper">
                            <!-- <h2 class="text-color">
                                wine
                            </h2> -->
                        </div>
                    </li>
                    <li>
                        <div class="content__wrapper">
                            <!-- <h2 class="text-color">
                                gravy
                            </h2> -->
                        </div>
                    </li>
                    <li>
                        <div class="content__wrapper">
                            <!-- <h2 class="text-color">
                                beer
                            </h2> -->
                        </div>
                    </li>

                </ul>
                <ul class="tabs"></ul>
            </section>
            <div class="modal-frame modal-meat">
                <div class="modal-body">
                    <div class="modal-inner">
                        <button id="close" class="close"><i class="fa fa-times"></i></button>
                        <p>meat</p>
                    </div>
                </div>
                <div class="modal-overlay"></div>
            </div>
            <div class="modal-frame modal-sous">
                <div class="modal-body">
                    <div class="modal-inner">
                        <button id="close1" class="close"><i class="fa fa-times"></i></button>
                        <p>Sous</p>
                    </div>
                </div>
                <div class="modal-overlay"></div>
            </div>
            <!-- <div class="modal-frame modal-shrimp">
                <div class="modal-body">
                    <div class="modal-inner">
                        <button id="close" class="close"><i class="fa fa-times"></i></button>
                        <p>Shrimp</p>
                    </div>
                </div>
                <div class="modal-overlay"></div>
            </div> -->
        </div>
    </section>


    <footer class="footer mod-gray">
        <div class="container">
            <div class="sf-footer-wrapper">
                <div class="sf-footer-item">
                    <ul>
                        <li>
                            <img src="./img/svg/LogoDark.svg" alt="">
                        </li>
                        <li>seafoods</li>
                        <li></li>
                        <li>(с) Name Comapny.</li>
                        <li>All right reserved.</li>
                    </ul>
                </div>
                <div class="sf-footer-item">
                    <ul>
                        <li>Навигация</li>
                        <li>Главная</li>
                        <li>О нас</li>
                        <li>Меню</li>
                        <li>Блог</li>
                        <li>Контакты</li>
                    </ul>
                </div>
                <div class="sf-footer-item">
                    <ul>
                        <li>Контакты</li>
                        <li>+38 (067) 436 61 27</li>
                        <li>+38 (067) 436 61 27</li>
                        <li></li>
                        <li>nazargulkovskyi@gmail.com</li>
                        <li></li>
                        <li>
                            <img src="./img/svg/payment-system.svg" alt="">
                        </li>
                    </ul>
                </div>
                <div class="sf-footer-item">
                    <ul>
                        <li>Соц. сети</li>
                        <li class="sf-footer-social-icons">
                            <img src="./img/svg/Inst.svg" alt="">
                            <img src="./img/svg/Vector.svg" alt="">
                            <img src="./img/svg/Message.svg" alt="">
                        </li>
                        <li>Время работы:</li>
                        <li>с 11:00 до 22:45</li>
                        <li></li>
                        <li>Пользовательсоке соглашение</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js" integrity="sha512-VHsNaV1C4XbgKSc2O0rZDmkUOhMKPg/rIi8abX9qTaVDzVJnrDGHFnLnCnuPmZ3cNi1nQJm+fzJtBbZU9yRCww==" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>