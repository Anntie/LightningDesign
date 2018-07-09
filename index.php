﻿<?php
  session_start();
  $promo = false;
  if (isset($_SESSION['raveera'])) {
    $promo = true;
  }
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Выездной ремонт iPhone Киев | lightning</title>
    <meta name="description" content="Выездной ремонт Вашего айфона в удобное время в удобном месте за 20 минут." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="keywords" content="ремонт iphone киев, ремонт айфонов киев, выездной ремонт, ремонт с выездом мастера, замена дисплея" />
    <link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/images/icons/manifest.json">
    <link rel="mask-icon" href="/images/icons/safari-pinned-tab.svg" color="#1e824c">
    <link rel="shortcut icon" href="/images/icons/favicon.ico">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightning.css">
    <link rel="stylesheet" href="css/callback.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108636989-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-108636989-1');
    </script>
  </head>
  <body>
    <input type="hidden" id="promo" value="<?php echo $promo; ?>">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-green">
      <a class="navbar-brand" href="./"><img src="images/logo-2.svg" id="logo" style="margin-left: 1rem; width: 32px; height: 32px; margin-right: 4px;" class="d-inline-block align-top" alt="lightning"><span class="xxs-logo d-md-inline d-none">lightning</span><span class="xxs-logo d-lg-inline d-none" style="margin-left: 2px; color: #353b48;">service</span></a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active page-scroll d-none d-md-block" href="#about-section">О нас</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active page-scroll d-none d-md-block" href="#services-section">Цены</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active page-scroll d-none d-md-block" href="#features-section">Преимущества</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link active" href="accessories/">Магазин</a>
        </li>-->
      </ul>
      <ul class="navbar-nav ml-auto pull-xs-right justify-content-end">
        <li class="nav-item">
          <a class="nav-link-custom nav-text-custom d-none d-md-inline" href="tel:+380963002435">+380963002435</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-custom fa fa-phone d-inline d-md-none" href="tel:+380963002435"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link-custom fab fa-telegram-plane" href="tg://resolve?domain=lightningservice"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link-custom fab fa-viber" href="viber://chat?number=+380963002435"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link-custom fab fa-whatsapp" href="whatsapp://send?phone=+380963002435"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link-custom nav-text-custom" href="ukrainian.html">УКР</a>
        </li>
      </ul>
    </nav>
    <section class="cover-1 text-center">
      <div class="cover-container pb-25">
        <div class="cover-inner container">
          <h1 class="jumbotron-heading">Ремонт iPhone с выездом мастера в Киеве</h1>
          <p>
            <a href="#services-section" class="btn btn-primary btn-lg mb-2 mr-2 ml-2 page-scroll">Узнать стоимость ремонта</a>
            <a href="#" class="btn btn-primary btn-lg mb-2 ml-2 ml-2 call-service" data-toggle="modal" data-target="#helpModal">Вызвать мастера</a>
          </p>
        </div>
      </div>
    </section>
    <section id="about-section" class="content-4 d-none d-md-block">
      <div class="container">
        <div class="row justify-center">
          <div class="col-md-6 pl-5 pr-5 text-center" >
            <img class="mb-4 img-fluid" data-src="images/placeholder-phone-min.png" >
          </div>
          <div class="col-md-6 text-left" >
            <h2 class="h2-promo">Ремонт iPhone вышел на новый уровень.</h2>
            <p class="lead mt-4 mb-5 p-promo">Мастер самостоятельно, бесплатно приедет в удобное Вам место и починит сломанное устройство в кратчайшие сроки – 20-30 минут. В условиях мегаполиса это невероятно удобно - ведь иногда сама поездка в сервисный центр может растянуться на полдня. </p>

            <div class="row">
              <div class="col-md-6 col-feature mb-4">
                <h4 class="mb-3 h4-promo">Максимальное качество</h4>
                <p class="p-promo">Высококвалифицированные профессионалы выполнят любой ремонт надёжно и быстро. Мы даём гарантию на то, что делаем.</p>
              </div>
              <div class="col-md-6 col-feature mb-4">
                <h4 class="mb-3 h4-promo">Есть вопросы? Звоните!</h4>
                <p class="p-promo">Наш менеджер с радостью объяснит интересующие Вас детали, поможет оформить заказ и ответит на вопросы.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="steps p-5">
      <div class="container">
        <div class="row text-md-center steps-row">
          <div class="col-12 col-md-3 p-0">
            <div class="dotted-line float-right d-none d-md-block"></div>
            <div class="circle-empty rounded-circle d-none d-md-block"></div>
            <div class="steps-col">
              <h1 class="steps-number text-center d-inline-block d-md-block">1</h1>
              <h6 class="steps-text d-inline d-md-block">Вы назначаете встречу в любом месте</h6>
            </div>
          </div>
          <div class="col-12 col-md-3 p-0">
            <div class="dotted-line float-left d-none d-md-block"></div>
            <div class="dotted-line float-right d-none d-md-block"></div>
            <div class="circle-empty rounded-circle d-none d-md-block"></div>
            <div class="steps-col">
              <h1 class="steps-number text-center d-inline-block d-md-block">2</h1>
              <h6 class="steps-text d-inline d-md-block">Мастер приедет в удобное для Вас время</h6>
            </div>
          </div>
          <div class="col-12 col-md-3 p-0">
            <div class="dotted-line float-left d-none d-md-block"></div>
            <div class="dotted-line float-right d-none d-md-block"></div>
            <div class="circle-empty rounded-circle d-none d-md-block"></div>
            <div class="steps-col">
              <h1 class="steps-number text-center d-inline-block d-md-block">3</h1>
              <h6 class="steps-text d-inline d-md-block">Отремонтирует ваш телефон за 20 минут</h6>
            </div>
          </div>
          <div class="col-12 col-md-3 p-0">
            <div class="dotted-line float-left d-none d-md-block"></div>
            <div class="circle-full rounded-circle d-none d-md-block"></div>
            <div class="steps-col">
              <h1 class="steps-number text-center d-inline-block d-md-block">4</h1>
              <h6 class="steps-text d-inline d-md-block">Примет оплату и выдаст гарантию на 3 месяца</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="services text-center" id="services-section">
      <h2>Выберите свой iPhone</h2>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 card-layout">
            <div class="card">
              <a class="service-link" data-toggle="modal" href="#iPhone5Modal">
                <div class="service-hover">
                  <div class="service-hover-content">
                    <i class="fa fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="card-img-top" data-src="images/112-min.jpg" alt="iPhone 5">
              </a>
              <div class="card-body">
                <h4 class="card-title">iPhone 5</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 card-layout">
            <div class="card">
              <a class="service-link" data-toggle="modal" href="#iPhone5sModal">
                <div class="service-hover">
                  <div class="service-hover-content">
                    <i class="fa fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="card-img-top" data-src="images/iphone5s-min.jpg" alt="iPhone 5s">
              </a>
              <div class="card-body">
                <h4 class="card-title">iPhone 5s</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 card-layout">
            <div class="card">
              <a class="service-link" data-toggle="modal" href="#iPhoneSEModal">
                <div class="service-hover">
                  <div class="service-hover-content">
                    <i class="fa fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="card-img-top" data-src="images/se-min.jpg " alt="iPhone SE">
              </a>
              <div class="card-body">
                <h4 class="card-title">iPhone SE</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 card-layout">
            <div class="card">
              <a class="service-link" data-toggle="modal" href="#iPhone6Modal">
                <div class="service-hover">
                  <div class="service-hover-content">
                    <i class="fa fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="card-img-top" data-src="images/6-min.jpg" alt="iPhone 6">
              </a>
              <div class="card-body">
                <h4 class="card-title">iPhone 6 / 6 plus</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 card-layout">
            <div class="card">
              <a class="service-link" data-toggle="modal" href="#iPhone6sModal">
                <div class="service-hover">
                  <div class="service-hover-content">
                    <i class="fa fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="card-img-top" data-src="images/6s-min.jpg" alt="iPhone 6s">
              </a>
              <div class="card-body">
                <h4 class="card-title">iPhone 6s / 6s plus</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 card-layout">
            <div class="card">
              <a class="service-link" data-toggle="modal" href="#iPhone7Modal">
                <div class="service-hover">
                  <div class="service-hover-content">
                    <i class="fa fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="card-img-top" data-src="images/iphone7-min.jpg" alt="iPhone 7">
              </a>
              <div class="card-body">
                <h4 class="card-title">iPhone 7 / 7 plus</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xs-12 col-sm-6 col-md-4 card-layout">
            <div class="card">
              <a class="service-link" data-toggle="modal" href="#iPhone8Modal">
                <div class="service-hover">
                  <div class="service-hover-content">
                    <i class="fa fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="card-img-top" data-src="images/iphone8.jpg" alt="iPhone 8">
              </a>
              <div class="card-body">
                <h4 class="card-title">iPhone 8 / 8 plus</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 card-layout">
            <div class="card">
              <a class="service-link" data-toggle="modal" href="#iPhoneXModal">
                <div class="service-hover">
                  <div class="service-hover-content">
                    <i class="fa fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="card-img-top" data-src="images/iphonex.jpg" alt="iPhone X">
              </a>
              <div class="card-body">
                <h4 class="card-title">iPhone X</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="deals">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-4 p-0 deal">
            <img src="images/deal-glass.jpg" alt class="img-deal" />
            <div class="deal-desc bg-dark-blue deal-text-light">
              <h3>Разбили экран?</h3>
              <p>При ремонте дисплея защитное стекло в подарок!</p>
              <a href="#" class="btn btn-light btn-deal" data-toggle="modal" data-target="#deal1Modal">Подробнее</a>
            </div>
          </div>
          <div class="col-12 col-sm-4 p-0 deal">
            <img src="images/deal.jpg" alt class="img-deal" />
            <div class="deal-desc bg-green-dark deal-text-light">
              <h3>Горячее предложение!</h3>
              <p>Закажите ремонт на завтра и получите скидку 10%</p>
              <a href="#" class="btn btn-light btn-deal" data-toggle="modal" data-target="#deal2Modal">Подробнее</a>
            </div>
          </div>
          <div class="col-12 col-sm-4 p-0 deal">
            <img src="images/deal-3-magic.jpg" alt class="img-deal" />
            <div class="deal-desc bg-blue deal-text-light">
              <h3>Нужна консультация?</h3>
              <p>Наши специалисты помогут Вам определить поломку и ответят на все вопросы</p>
              <a href="#" class="btn btn-light btn-deal"  data-toggle="modal" data-target="#deal3Modal">Подробнее</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--
    <section class="accessories">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 pl-0 pr-0">
            <img src="images/accessories-iphone-201711.jpeg" class="img-accessories d-sm-block d-none " alt />
            <img src="images/deal-2-magic.jpg" class="img-accessories d-sm-none d-block" alt />
            <div class="accessories-text rounded">
              <h1>Аксессуары</h1>
              <h3><a href="accessories" class="accessories-link">Чехлы и зарядные устройства</a>&nbsp;&gt;</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    -->
    <section id="reviews-section" class="reviews text-center pt-5">
      <div class="container-fluid">
        <h2 style="color: #f5f6fa;">Отзывы о нашей работе</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 pt-4">
            <div class="card-columns">

              <div class="card">
                <div class="card-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-4 p-0 text-center">
                        <img src="images/customer-5.jpg" class="rounded-circle img-fluid" />
                        <p class="card-text">Олег Савёлов</p>
                      </div>
                      <div class="col-8">
                        <h5 class="card-title">Лучший сервис</h5>
                        <p class="card-text text-left">Утром в спешке уронил айфон и разбил дисплей, думал что день испорчен. Но жена быстренько нашла этих ребят, и через минут 40 мастер приехал и оперативно всё заменил. Однозначно рекомендую.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-4 p-0 text-center">
                        <img src="images/customer.jpg" class="rounded-circle img-fluid" />
                        <p class="card-text">Михаил Бондаренко</p>
                      </div>
                      <div class="col-8">
                        <h5 class="card-title">Хорошие спецы</h5>
                        <p class="card-text text-left">Отлично поговорили с мастером пока тот чинил мой айфон, получил бесплатную лекцию на тему отличий оригинальных дисплеев от копий) Рекомедую)</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-4 p-0 text-center">
                        <img src="images/customer-2.jpg" class="rounded-circle img-fluid" />
                        <p class="card-text">Макс Белкин</p>
                      </div>
                      <div class="col-8">
                        <h5 class="card-title">Быстро, как и обещали</h5>
                        <p class="card-text text-left">Мастер приехал за час, а отремонтировал вообще за 15 минут. Очень доволен качеством и скоростью, обращусь ещё при случае. Хотя, надеюсь, не придётся)</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-4 p-0 text-center">
                        <img src="images/customer-3.jpg" class="rounded-circle img-fluid" />
                        <p class="card-text">Юлия Кузнецова</p>
                      </div>
                      <div class="col-8">
                        <h5 class="card-title">Отличный сервис!</h5>
                        <p class="card-text text-left">Просто мастера своего дела, тут и сказать больше нечего.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-4 p-0 text-center">
                        <img src="images/customer-4.jpg" class="rounded-circle img-fluid" />
                        <p class="card-text">Ярослав Лозовой</p>
                      </div>
                      <div class="col-8">
                        <h5 class="card-title">Знают своё дело.</h5>
                        <p class="card-text text-left">Во время тусовки с друзьями в баре пробил телефон углом стола. Немного расстроился, но решил, что на следующий день пойду в СЦ и отремонтирую. Но знакомый предложил произвести ремонт тут и сейчас, пока мы будет развлекаться. Я подумал что это шутка, ведь ремонт подобного устройства мне представлялся сложным и долгим процессом. Но приехали ребята из lightning и всё сделали на том же злополучном столе. 5 из 5.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="review-contacts">
        <h5>Довольны качеством сервиса? Оставьте отзыв в <a href="tg://resolve?domain=lightningservice">Telegram</a>, <a href="viber://chat?number=+380963002435">Viber</a>, <a href="whatsapp://send?phone=+380963002435">Whatsapp</a><br /><a href="mailto:reviews@lightning-service.com.ua">reviews@lightning-service.com.ua</a></h5>
      </div>
    </section>
    <section id="features-section" class="features-4 text-center">
      <div class="container">
        <div class="row justify-center">
          <div class="col-md-8 text-center" >
            <h2>Наши преимущества</h2>
            <p class="lead mt-3">Молниеносный сервис Lightning выгодно отличается от других</p>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-feature">
              <div class="row">
                <div class="col-4 col-md-12">
                  <div class="rounded-circle justify-center">
                    <em class="fas fa-car fa-2x"></em>
                  </div>
                </div>
                <div class="col-8 col-md-12">
                  <h4 class="feature-desc">Бесплатный выезд по всему Киеву</h4>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-feature">
              <div class="row">
                <div class="col-4 col-md-12">
                  <div class="rounded-circle justify-center">
                    <em class="far fa-calendar-alt fa-2x"></em>
                  </div>
                </div>
                <div class="col-8 col-md-12">
                  <h4 class="feature-desc">Гарантия на работу - 3 месяца</h4>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-feature">
              <div class="row">
                <div class="col-4 col-md-12">
                  <div class="rounded-circle justify-center">
                    <em class="fas fa-mobile fa-2x"></em>
                  </div>
                </div>
                <div class="col-8 col-md-12">
                  <h4 class="feature-desc">Только проверенные детали</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-feature">
              <div class="row">
                <div class="col-4 col-md-12">
                  <div class="rounded-circle justify-center">
                    <em class="fas fa-credit-card fa-2x"></em>
                  </div>
                </div>
                <div class="col-8 col-md-12">
                  <h4 class="feature-desc">Можно оплатить картой без %</h4>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-feature">
              <div class="row">
                <div class="col-4 col-md-12">
                  <div class="rounded-circle justify-center">
                    <em class="fas fa-wrench fa-2x"></em>
                  </div>
                </div>
                <div class="col-8 col-md-12">
                  <h4 class="feature-desc">Самые лучшие мастера и инструменты</h4>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-feature">
              <div class="row">
                <div class="col-4 col-md-12">
                  <div class="rounded-circle justify-center">
                    <em class="far fa-clock fa-2x"></em>
                  </div>
                </div>
                <div class="col-8 col-md-12">
                  <h4 class="feature-desc">Ремонт от 10 минут</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer-2">
      <div class="container">
        <div class="row">
          <div class="col-md-4 text-center text-md-left">
            <span class="xxs-logo">lightning</span><span class="xxs-logo" style="margin-left: 2px; color: #353b48;">service</span>
          </div>
          <div class="col-md-8">
            <ul class="nav-footer mt-2 mt-md-0 ">
              <li class="nav-item">
                <p>&copy;2017 lightning service</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modals -->

    <!-- Callback -->
    <div class="modal fade modal-small" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="helpModalLabel">Вызвать мастера</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5 class="text-center" id="callback-h5">Оставьте номер, и мы Вам перезвоним!</h5>
            <div class="alert alert-success col-md-12" style="display: none;" id="success-cb" role="alert">
              Спасибо, мы Вам перезвоним в течении 20 минут.
            </div>
            <div class="alert alert-danger col-md-12" style="display: none;" id="error-cb" role="alert">
              Произошла ошибка. Попробуйте перезагрузить страницу.
            </div>
            <div class="alert alert-warning col-md-12" style="display: none;" id="warning-cb" role="alert">
              Пожалуйста, заполните форму.
            </div>
            <form class="mt-4" id="callback-form">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="input-group">
                      <span class="input-group-addon mb-4" id="basic-addon1">+38</span>
                      <input type="text" id="phonetocall" class="form-control-custom mb-4" aria-describedby="basic-addon1" placeholder="Ваш номер">
                      <input type="submit" class="btn btn-primary mb-4 btn-bigger" style="margin-left: 5px;" value="Перезвоните мне" />
                      <input type="submit" class="btn btn-primary mb-4 btn-smaller" style="margin-left: 5px;" value="OK" />
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- iPhone 5 -->
    <div class="service-modal modal fade" id="iPhone5Modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-10 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>iPhone 5</h2>
                  <h5 class="promo-badge pt-3 pb-3 rounded">Закажите заранее и получите скидку 10%!</h5>
                  <p class="item-intro text-muted">Нажмите на нужный Вам вид работы, чтобы добавить его в заказ</p>
                  <div class="container">
                    <div class="row no-gutters">
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table left-table mb-0">
                          <tbody id="iPhone5-tbody">
                            <tr>
                              <td>Замена стекла/экрана <i class="fas fa-info-circle" data-original-title="Ремонт в течении дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴599</td>
                            </tr>
                            <tr>
                              <td>Замена дисплея (хорошая копия)</td>
                              <td>₴999</td>
                            </tr>
                            <tr>
                              <td>Замена дисплея (оригинал с другого устройства)</td>
                              <td>₴1499</td>
                            </tr>
                            <tr>
                              <td>Замена аккумулятора</td>
                              <td>₴499</td>
                            </tr>
                            <tr>
                              <td>Замена основной камеры</td>
                              <td>₴499</td>
                            </tr>
                            <tr>
                              <td>Замена фронтальной камеры</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Замена кнопки Home</td>
                              <td>₴499</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table mb-0">
                          <tbody id="iPhone5-tbody">
                            <tr>
                              <td>Замена слухового динамика</td>
                              <td>₴299</td>
                            </tr>
                            <tr>
                              <td>Замена полифонического динамика</td>
                              <td>₴349</td>
                            </tr>
                            <tr>
                              <td>Замена разъема зарядки-синхронизации lightning</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Замена микрофона</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Замена вибромотора</td>
                              <td>₴199</td>
                            </tr>
                            <tr>
                              <td>Поклейка защитного стекла <i class="fas fa-info-circle" data-original-title="Бесплатно при ремонте дисплея" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴199</td>
                            </tr>
                            <tr class="tr-disabled">
                              <td>Диагностика <i class="fas fa-info-circle" data-original-title="При любом ремонте" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>Бесплатно!</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <h6 class="bg-dark text-light pt-2 pb-2">Не можете определить поломку? Не устраивает цена? Звоните нам на номер <a href="tel:+380963002435">+380963002435</a></h6>
                  <h4 class="price d-none"></h4>
                  <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button">Перейти к заказу</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- iPhone 5s -->
    <div class="service-modal modal fade" id="iPhone5sModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-10 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>iPhone 5s</h2>
                  <h5 class="promo-badge pt-3 pb-3 rounded">Закажите заранее и получите скидку 10%!</h5>
                  <p class="item-intro text-muted">Нажмите на нужный Вам вид работы, чтобы добавить его в заказ</p>
                  <div class="container">
                    <div class="row no-gutters">
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table left-table mb-0">
                          <tbody id="iPhone5s-tbody">
                            <tr>
                              <td>Замена стекла/экрана <i class="fas fa-info-circle" data-original-title="Ремонт в течении дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴599</td>
                            </tr>
                            <tr>
                              <td>Замена дисплея (хорошая копия)</td>
                              <td>₴999</td>
                            </tr>
                            <tr>
                              <td>Замена дисплея (оригинал с другого устройства)</td>
                              <td>₴1599</td>
                            </tr>
                            <tr>
                              <td>Замена аккумулятора</td>
                              <td>₴499</td>
                            </tr>
                            <tr>
                              <td>Замена основной камеры</td>
                              <td>₴499</td>
                            </tr>
                            <tr>
                              <td>Замена фронтальной камеры</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Замена кнопки Home</td>
                              <td>₴499</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table">
                          <tbody id="iPhone5s-tbody">
                            <tr>
                              <td>Замена слухового динамика</td>
                              <td>₴299</td>
                            </tr>
                            <tr>
                              <td>Замена полифонического динамика</td>
                              <td>₴349</td>
                            </tr>
                            <tr>
                              <td>Замена разъема зарядки-синхронизации lightning</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Замена микрофона</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Замена вибромотора</td>
                              <td>₴199</td>
                            </tr>
                            <tr>
                              <td>Поклейка защитного стекла <i class="fas fa-info-circle" data-original-title="Бесплатно при ремонте дисплея" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴199</td>
                            </tr>
                            <tr class="tr-disabled">
                              <td>Диагностика <i class="fas fa-info-circle" data-original-title="При любом ремонте" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>Бесплатно!</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <h6 class="bg-dark text-light pt-2 pb-2">Не можете определить поломку? Не устраивает цена? Звоните нам на номер <a href="tel:+380963002435">+380963002435</a></h6>
                  <h4 class="price d-none"></h4>
                  <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button">Перейти к заказу</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- iPhone SE -->
    <div class="service-modal modal fade" id="iPhoneSEModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-10 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>iPhone SE</h2>
                  <h5 class="promo-badge pt-3 pb-3 rounded">Закажите заранее и получите скидку 10%!</h5>
                  <p class="item-intro text-muted">Нажмите на нужный Вам вид работы, чтобы добавить его в заказ</p>
                  <div class="container">
                    <div class="row no-gutters">
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table left-table mb-0">
                          <tbody id="iPhoneSE-tbody">
                            <tr>
                              <td>Замена стекла/экрана <i class="fas fa-info-circle" data-original-title="Ремонт в течении дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴699</td>
                            </tr>
                            <tr>
                              <td>Замена дисплея (хорошая копия)</td>
                              <td>₴999</td>
                            </tr>
                            <tr>
                              <td>Замена дисплея (оригинал с другого устройства)</td>
                              <td>₴1999</td>
                            </tr>
                            <tr>
                              <td>Замена аккумулятора</td>
                              <td>₴599</td>
                            </tr>
                            <tr>
                              <td>Замена основной камеры</td>
                              <td>₴599</td>
                            </tr>
                            <tr>
                              <td>Замена фронтальной камеры</td>
                              <td>₴499</td>
                            </tr>
                            <tr>
                              <td>Замена кнопки Home</td>
                              <td>₴499</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table">
                          <tbody id="iPhoneSE-tbody">
                            <tr>
                              <td>Замена слухового динамика</td>
                              <td>₴349</td>
                            </tr>
                            <tr>
                              <td>Замена полифонического динамика</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Замена разъема зарядки-синхронизации lightning</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Замена микрофона</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Замена вибромотора</td>
                              <td>₴199</td>
                            </tr>
                            <tr>
                              <td>Поклейка защитного стекла <i class="fas fa-info-circle" data-original-title="Бесплатно при ремонте дисплея" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴199</td>
                            </tr>
                            <tr class="tr-disabled">
                              <td>Диагностика <i class="fas fa-info-circle" data-original-title="При любом ремонте" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>Бесплатно!</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <h6 class="bg-dark text-light pt-2 pb-2">Не можете определить поломку? Не устраивает цена? Звоните нам на номер <a href="tel:+380963002435">+380963002435</a></h6>
									<h4 class="price d-none"></h4>
                  <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button">Перейти к заказу</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- iPhone 6 -->
    <div class="service-modal modal fade" id="iPhone6Modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-10 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>iPhone 6 / 6 Plus</h2>
                  <h5 class="promo-badge pt-3 pb-3 rounded">Закажите заранее и получите скидку 10%!</h5>
                  <p class="item-intro text-muted">Нажмите на нужный Вам вид работы, чтобы добавить его в заказ</p>
                  <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link tab-link active" id="iphone6-tab" data-toggle="tab" href="#iphone6" role="tab" aria-controls="iphone6" aria-selected="true">iPhone 6</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link tab-link" id="iphone6plus-tab" data-toggle="tab" href="#iphone6plus" role="tab" aria-controls="iphone6plus" aria-selected="false">iPhone 6 Plus</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="iPhone6TabContent">
                    <div class="tab-pane fade show active" id="iphone6" role="tabpanel" aria-labelledby="iphone6-tab">
                      <div class="container">
                        <div class="row no-gutters">
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table left-table mb-0">
                              <tbody id="iPhone6-tbody">
                                <tr>
                                  <td>Замена стекла/экрана <i class="fas fa-info-circle" data-original-title="Ремонт в течении дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴999</td>
                                </tr>
                                <tr>
                                  <td>Замена дисплея (хорошая копия)</td>
                                  <td>₴1499</td>
                                </tr>
                                <tr>
                                  <td>Замена дисплея (оригинал с другого устройства)</td>
                                  <td>₴1999</td>
                                </tr>
                                <tr>
                                  <td>Замена аккумулятора</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Замена основной камеры</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Замена фронтальной камеры</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Замена кнопки Home</td>
                                  <td>₴499</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table">
                              <tbody id="iPhone6-tbody">
                                <tr>
                                  <td>Замена слухового динамика</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Замена полифонического динамика</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Замена разъема зарядки-синхронизации lightning</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Замена микрофона</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Замена вибромотора</td>
                                  <td>₴299</td>
                                </tr>
                                <tr>
                                  <td>Поклейка защитного стекла <i class="fas fa-info-circle" data-original-title="Бесплатно при ремонте дисплея" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴199</td>
                                </tr>
                                <tr class="tr-disabled">
                                  <td>Диагностика <i class="fas fa-info-circle" data-original-title="При любом ремонте" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>Бесплатно!</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="iphone6plus" role="tabpanel" aria-labelledby="iphone6plus-tab">
                      <div class="container">
                        <div class="row no-gutters">
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table left-table mb-0">
                              <tbody id="iPhone6Plus-tbody">
                                <tr>
                                  <td>Замена стекла/экрана <i class="fas fa-info-circle" data-original-title="Ремонт в течении дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴1499</td>
                                </tr>
                                <tr>
                                  <td>Замена дисплея (хорошая копия)</td>
                                  <td>₴1999</td>
                                </tr>
                                <tr>
                                  <td>Замена дисплея (оригинал с другого устройства)</td>
                                  <td>₴2499</td>
                                </tr>
                                <tr>
                                  <td>Замена аккумулятора</td>
                                  <td>₴649</td>
                                </tr>
                                <tr>
                                  <td>Замена основной камеры</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Замена фронтальной камеры</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Замена кнопки Home</td>
                                  <td>₴499</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table">
                              <tbody id="iPhone6Plus-tbody">
                                <tr>
                                  <td>Замена слухового динамика</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Замена полифонического динамика</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Замена разъема зарядки-синхронизации lightning</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Замена микрофона</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Замена вибромотора</td>
                                  <td>₴299</td>
                                </tr>
                                <tr>
                                  <td>Поклейка защитного стекла <i class="fas fa-info-circle" data-original-title="Бесплатно при ремонте дисплея" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴199</td>
                                </tr>
                                <tr class="tr-disabled">
                                  <td>Диагностика <i class="fas fa-info-circle" data-original-title="При любом ремонте" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>Бесплатно!</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h6 class="bg-dark text-light pt-2 pb-2">Не можете определить поломку? Не устраивает цена? Звоните нам на номер <a href="tel:+380963002435">+380963002435</a></h6>
									<h4 class="price d-none"></h4>
                  <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button">Перейти к заказу</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- iPhone 6s -->
    <div class="service-modal modal fade" id="iPhone6sModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-10 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>iPhone 6s / 6s Plus</h2>
                  <h5 class="promo-badge pt-3 pb-3 rounded">Закажите заранее и получите скидку 10%!</h5>
                  <p class="item-intro text-muted">Нажмите на нужный Вам вид работы, чтобы добавить его в заказ</p>
                  <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link tab-link active" id="iphone6s-tab" data-toggle="tab" href="#iphone6s" role="tab" aria-controls="iphone6s" aria-selected="true">iPhone 6s</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link tab-link" id="iphone6splus-tab" data-toggle="tab" href="#iphone6splus" role="tab" aria-controls="iphone6splus" aria-selected="false">iPhone 6s Plus</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="iPhone6sTabContent">
                    <div class="tab-pane fade show active" id="iphone6s" role="tabpanel" aria-labelledby="iphone6s-tab">
                      <div class="container">
                        <div class="row no-gutters">
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table left-table mb-0">
                              <tbody id="iPhone6s-tbody">
                                <tr>
                                  <td>Замена стекла/экрана <i class="fas fa-info-circle" data-original-title="Ремонт в течении дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴999</td>
                                </tr>
                                <tr>
                                  <td>Замена дисплея (хорошая копия)</td>
                                  <td>₴1599</td>
                                </tr>
                                <tr>
                                  <td>Замена дисплея (оригинал с другого устройства)</td>
                                  <td>₴2199</td>
                                </tr>
                                <tr>
                                  <td>Замена аккумулятора</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Замена основной камеры</td>
                                  <td>₴1199</td>
                                </tr>
                                <tr>
                                  <td>Замена фронтальной камеры</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Замена кнопки Home</td>
                                  <td>₴499</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table">
                              <tbody id="iPhone6s-tbody">
                                <tr>
                                  <td>Замена слухового динамика</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Замена полифонического динамика</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Замена разъема зарядки-синхронизации lightning</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Замена микрофона</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Замена вибромотора</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Поклейка защитного стекла <i class="fas fa-info-circle" data-original-title="Бесплатно при ремонте дисплея" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴199</td>
                                </tr>
                                <tr class="tr-disabled">
                                  <td>Диагностика <i class="fas fa-info-circle" data-original-title="При любом ремонте" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>Бесплатно!</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="iphone6splus" role="tabpanel" aria-labelledby="iphone6splus-tab">
                      <div class="container">
                        <div class="row no-gutters">
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table left-table mb-0">
                              <tbody id="iPhone6sPlus-tbody">
                                <tr>
                                  <tr>
                                    <td>Замена стекла/экрана <i class="fas fa-info-circle" data-original-title="Ремонт в течении дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                    <td>₴1499</td>
                                  </tr>
                                  <tr>
                                    <td>Замена дисплея (хорошая копия)</td>
                                    <td>₴2099</td>
                                  </tr>
                                  <tr>
                                    <td>Замена дисплея (оригинал с другого устройства)</td>
                                    <td>₴2999</td>
                                  </tr>
                                  <tr>
                                    <td>Замена аккумулятора</td>
                                    <td>₴649</td>
                                  </tr>
                                  <tr>
                                    <td>Замена основной камеры</td>
                                    <td>₴1199</td>
                                  </tr>
                                  <tr>
                                    <td>Замена фронтальной камеры</td>
                                    <td>₴499</td>
                                  </tr>
                                  <tr>
                                    <td>Замена кнопки Home</td>
                                    <td>₴499</td>
                                  </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table">
                              <tbody id="iPhone6sPlus-tbody">
                                <tr>
                                  <td>Замена слухового динамика</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Замена полифонического динамика</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Замена разъема зарядки-синхронизации lightning</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Замена микрофона</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Замена вибромотора</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Поклейка защитного стекла <i class="fas fa-info-circle" data-original-title="Бесплатно при ремонте дисплея" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴199</td>
                                </tr>
                                <tr class="tr-disabled">
                                  <td>Диагностика <i class="fas fa-info-circle" data-original-title="При любом ремонте" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>Бесплатно!</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h6 class="bg-dark text-light pt-2 pb-2">Не можете определить поломку? Не устраивает цена? Звоните нам на номер <a href="tel:+380963002435">+380963002435</a></h6>
									<h4 class="price d-none"></h4>
                  <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button">Перейти к заказу</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- iPhone 7 -->
    <div class="service-modal modal fade" id="iPhone7Modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-10 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>iPhone 7 / 7 Plus</h2>
                  <h5 class="promo-badge pt-3 pb-3 rounded">Закажите заранее и получите скидку 10%!</h5>
                  <p class="item-intro text-muted">Нажмите на нужный Вам вид работы, чтобы добавить его в заказ</p>
                  <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link tab-link active" id="iphone7-tab" data-toggle="tab" href="#iphone7" role="tab" aria-controls="iphone7" aria-selected="true">iPhone 7</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link tab-link" id="iphone7plus-tab" data-toggle="tab" href="#iphone7plus" role="tab" aria-controls="iphone7plus" aria-selected="false">iPhone 7 Plus</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="iPhone7TabContent">
                    <div class="tab-pane fade show active" id="iphone7" role="tabpanel" aria-labelledby="iphone7-tab">
                      <div class="container">
                        <div class="row no-gutters">
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table left-table mb-0">
                              <tbody id="iPhone7-tbody">
                                <tr>
                                  <td>Замена стекла/экрана <i class="fas fa-info-circle" data-original-title="Ремонт в течении дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴1799</td>
                                </tr>
                                <tr>
                                  <td>Замена дисплея (хорошая копия)</td>
                                  <td>₴1999</td>
                                </tr>
                                <tr>
                                  <td>Замена дисплея (оригинал с другого устройства)</td>
                                  <td>₴2999</td>
                                </tr>
                                <tr>
                                  <td>Замена аккумулятора</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Замена основной камеры</td>
                                  <td>₴1299</td>
                                </tr>
                                <tr>
                                  <td>Замена фронтальной камеры</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Замена кнопки Home</td>
                                  <td>₴499</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table">
                              <tbody id="iPhone7-tbody">
                                <tr>
                                  <td>Замена слухового динамика</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Замена полифонического динамика</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Замена разъема зарядки-синхронизации lightning</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Замена микрофона</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Замена вибромотора</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Поклейка защитного стекла <i class="fas fa-info-circle" data-original-title="Бесплатно при ремонте дисплея" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴199</td>
                                </tr>
                                <tr class="tr-disabled">
                                  <td>Диагностика <i class="fas fa-info-circle" data-original-title="При любом ремонте" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>Бесплатно!</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="iphone7plus" role="tabpanel" aria-labelledby="iphone7plus-tab">
                      <div class="container">
                        <div class="row no-gutters">
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table left-table mb-0">
                              <tbody id="iPhone7Plus-tbody">
                                <tr>
                                  <td>Замена стекла/экрана <i class="fas fa-info-circle" data-original-title="Ремонт в течении дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴2199</td>
                                </tr>
                                <tr>
                                  <td>Замена дисплея (хорошая копия)</td>
                                  <td>₴2599</td>
                                </tr>
                                <tr>
                                  <td>Замена дисплея (оригинал с другого устройства)</td>
                                  <td>₴4999</td>
                                </tr>
                                <tr>
                                  <td>Замена аккумулятора</td>
                                  <td>₴699</td>
                                </tr>
                                <tr>
                                  <td>Замена основной камеры</td>
                                  <td>₴2499</td>
                                </tr>
                                <tr>
                                  <td>Замена фронтальной камеры</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Замена кнопки Home</td>
                                  <td>₴499</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table">
                              <tbody id="iPhone7Plus-tbody">
                                <tr>
                                  <td>Замена слухового динамика</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Замена полифонического динамика</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Замена разъема зарядки-синхронизации lightning</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Замена микрофона</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Замена вибромотора</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Поклейка защитного стекла <i class="fas fa-info-circle" data-original-title="Бесплатно при ремонте дисплея" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴199</td>
                                </tr>
                                <tr class="tr-disabled">
                                  <td>Диагностика <i class="fas fa-info-circle" data-original-title="При любом ремонте" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>Бесплатно!</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h6 class="bg-dark text-light pt-2 pb-2">Не можете определить поломку? Не устраивает цена? Звоните нам на номер <a href="tel:+380963002435">+380963002435</a></h6>
									<h4 class="price d-none"></h4>
                  <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button">Перейти к заказу</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- iPhone 8 -->
    <div class="service-modal modal fade" id="iPhone8Modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-10 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>iPhone 8 / 8 Plus</h2>
                  <h5 class="promo-badge pt-3 pb-3 rounded">Закажите заранее и получите скидку 10%!</h5>
                  <p class="item-intro text-muted">Нажмите на нужный Вам вид работы, чтобы добавить его в заказ</p>
                  <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link tab-link active" id="iphone8-tab" data-toggle="tab" href="#iphone8" role="tab" aria-controls="iphone8" aria-selected="true">iPhone 8</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link tab-link" id="iphone8plus-tab" data-toggle="tab" href="#iphone8plus" role="tab" aria-controls="iphone8plus" aria-selected="false">iPhone 8 Plus</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="iPhone8TabContent">
                    <div class="tab-pane fade show active" id="iphone8" role="tabpanel" aria-labelledby="iphone8-tab">
                      <div class="container">
                        <div class="row no-gutters">
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table left-table mb-0">
                              <tbody id="iPhone8-tbody">
                                <tr>
                                  <td>Замена стекла/экрана <i class="fas fa-info-circle" data-original-title="Ремонт в течении дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴2499</td>
                                </tr>

                                <tr>
                                  <td>Замена дисплея (оригинал с другого устройства)</td>
                                  <td>₴7999</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table">
                              <tbody id="iPhone8-tbody">
                                <tr>
                                  <td>Поклейка защитного стекла <i class="fas fa-info-circle" data-original-title="Бесплатно при ремонте дисплея" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴299</td>
                                </tr>
                                <tr class="tr-disabled">
                                  <td>Диагностика <i class="fas fa-info-circle" data-original-title="При любом ремонте" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>Бесплатно!</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="iphone8plus" role="tabpanel" aria-labelledby="iphone8plus-tab">
                      <div class="container">
                        <div class="row no-gutters">
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table left-table mb-0">
                              <tbody id="iPhone8Plus-tbody">
                                <tr>
                                  <td>Замена стекла/экрана <i class="fas fa-info-circle" data-original-title="Ремонт в течении дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴3499</td>
                                </tr>

                                <tr>
                                  <td>Замена дисплея (оригинал с другого устройства)</td>
                                  <td>₴9999</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table">
                              <tbody id="iPhone8Plus-tbody">
                                <tr>
                                  <td>Поклейка защитного стекла <i class="fas fa-info-circle" data-original-title="Бесплатно при ремонте дисплея" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴299</td>
                                </tr>
                                <tr class="tr-disabled">
                                  <td>Диагностика <i class="fas fa-info-circle" data-original-title="При любом ремонте" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>Бесплатно!</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h6 class="bg-dark text-light pt-2 pb-2">Не можете определить поломку? Не устраивает цена? Звоните нам на номер <a href="tel:+380963002435">+380963002435</a></h6>
									<h4 class="price d-none"></h4>
                  <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button">Перейти к заказу</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- iPhone X -->
    <div class="service-modal modal fade" id="iPhoneXModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-10 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>iPhone X</h2>
                  <h5 class="promo-badge pt-3 pb-3 rounded">Закажите заранее и получите скидку 10%!</h5>
                  <p class="item-intro text-muted">Нажмите на нужный Вам вид работы, чтобы добавить его в заказ</p>
                  <div class="container">
                    <div class="row no-gutters">
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table left-table mb-0">
                          <tbody id="iPhoneX-tbody">
                            <tr>
                              <td>Замена стекла/экрана <i class="fas fa-info-circle" data-original-title="Ремонт в течении дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴5999</td>
                            </tr>

                            <tr>
                              <td>Замена дисплея (оригинал с другого устройства)</td>
                              <td>₴15999</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table">
                          <tbody id="iPhoneX-tbody">
                            <tr>
                              <td>Поклейка защитного стекла <i class="fas fa-info-circle" data-original-title="Бесплатно при ремонте дисплея" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴299</td>
                            </tr>
                            <tr class="tr-disabled">
                              <td>Диагностика <i class="fas fa-info-circle" data-original-title="При любом ремонте" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>Бесплатно!</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <h6 class="bg-dark text-light pt-2 pb-2">Не можете определить поломку? Не устраивает цена? Звоните нам на номер <a href="tel:+380963002435">+380963002435</a></h6>
                  <h4 class="price d-none"></h4>
                  <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button">Перейти к заказу</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Order modal -->
    <div class="service-modal modal fade" id="orderModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal-extended" data-dismiss="modal">
            <div class="arrows">
              <div class="goback-arrow-left"></div><div class="goback-arrow-right"></div>
            </div>
            <div class="arrow-text">
              <span class="goback-text">Вернуться назад</span>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-10 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Как мы можем с Вами связаться?</h2>
                  <h5 class="promo-badge pt-3 pb-3 rounded">Закажите заранее и получите скидку 10%!</h5>
                  <p class="item-intro text-muted">Оставьте Ваши контакты и мы Вам перезвоним в кратчайшие сроки</p>
                  <form class="contact-form mt-4" id="order-form">
                    <div class="alert alert-success col-md-12" style="display: none;" id="success" role="alert">
                      Ваш заказ принят!
                    </div>
                    <div class="alert alert-danger col-md-12" style="display: none;" id="error" role="alert">
                      Произошла ошибка при размещении заказа. Попробуйте перезагрузить страницу.
                    </div>
                    <div class="alert alert-warning col-md-12" style="display: none;" id="warning" role="alert">
                      Пожалуйста, заполните форму заказа.
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon mb-4"><span class="far fa-user"></span></span>
                            <input type="text" id="name" class="form-control-custom mb-4" placeholder="Имя">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon mb-4" id="basic-addon1">+38</span>
                            <input type="text" id="phone" class="form-control-custom mb-4" aria-describedby="basic-addon1" placeholder="Номер телефона">
                          </div>
                        </div>
                        <br />
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <h4 class="price d-none"></h4>
                        </div>
                        <div class="col-md-12">
                          <button id="submit" type="submit" class="btn btn-primary btn-lg">Отправить</button>
                        </div>
                      </div>
                    </div>
                    <input type="hidden" id="order-data" />
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Deal 1 -->
    <div class="modal fade modal-small" id="deal1Modal" tabindex="-1" role="dialog" aria-labelledby="deal1ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="helpModalLabel">Защитное стекло в подарок!</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5>При заказе услуги "Замена стекла/экрана" или "Замена дисплея" мы поклеим Вам защитное стекло и дадим гарантию на 3 месяца. <a class="page-scroll" href="#services-section" data-dismiss="modal">Узнать цены</a></h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Deal 2 -->
    <div class="modal fade modal-small" id="deal2Modal" tabindex="-1" role="dialog" aria-labelledby="deal2ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="helpModalLabel">Выгодное предложение!</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5 class="promo-badge pt-3 pb-3 rounded text-center mb-2" style="width: 100%;">Закажите заранее и получите скидку 10%!</h5>
            <h5>При заказе любых услуг на следующий день мы предоставим Вам скидку. Это даёт нам возможность заранее составить график для каждого мастера, чтобы он смог обслужить как можно больше клиентов, а Вам - выпить лишнюю чашечку кофе в компании друзей :)</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Deal 3 -->
    <div class="modal fade modal-small" id="deal3Modal" tabindex="-1" role="dialog" aria-labelledby="deal3ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="helpModalLabel">Бесплатная консультация!</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5>Есть вопросы по поводу ремонта или не можете самостоятельно определить поломку? Звоните нам на номер <a href="tel:+380963002435">+380963002435</a> или <a href="#" data-toggle="modal" data-target="#helpModal">оставьте свой номер</a> и мы Вам перезвоним в течении 20 минут (в рабочее время).</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Callback button -->
    <div class="callback-bt" id="callback-button">
      <div class="text-call">
          <i class="fa fa-phone"></i>
          <a href="#" data-toggle="modal" data-target="#helpModal"><span>заказать<br>звонок</span></a>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/lightning.js"></script>
    <script src="js/phone.js"></script>
  </body>
</html>
