<?php
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
    <meta name="description" content="Виїздний ремонт Вашого айфона в зручному місці в зручний час за 20 хвилин." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="keywords" content="ремонт iphone київ, ремонт айфонів київ, виїздний ремонт, ремонт з виїздом майстра, заміна екрану" />
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108636989-1"></script>
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
          <a class="nav-link active page-scroll d-none d-md-block" href="#about-section">Про нас</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active page-scroll d-none d-md-block" href="#services-section">Ціни</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active page-scroll d-none d-md-block" href="#features-section">Переваги</a>
        </li>
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
          <a class="nav-link-custom nav-text-custom" href="./">РУС</a>
        </li>
      </ul>
    </nav>
    <section class="cover-1 text-center">
      <div class="cover-container pb-25">
        <div class="cover-inner container">
          <h1 class="jumbotron-heading">Ремонт iPhone з виїздом майcтра у Києві</h1>
          <p>
            <a href="#services-section" class="btn btn-primary btn-lg mb-2 mr-2 ml-2 page-scroll">Дізнатися вартість ремонту</a>
            <a href="#" class="btn btn-primary btn-lg mb-2 ml-2 ml-2 call-service" data-toggle="modal" data-target="#helpModal">Викликати майстра</a>
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
            <h2 class="h2-promo">Ремонт iPhone переходить на новий рівень.</h2>
            <p class="lead mt-4 mb-5 p-promo">Майстер самостійно та безкоштовно приїде у зручне для Вас місце та відремонтує зламаний телефон за 20-30 хвилин. Це дуже зручно в реаліях мегаполісу - адже іноді лише поїздка до сервісного центру може затягнутися на півдня.</p>

            <div class="row">
              <div class="col-md-6 col-feature mb-4">
                <h4 class="mb-3 h4-promo">Максимальна якість</h4>
                <p class="p-promo">Висококваліфіковані спеціалісти виконають будь-який ремонт надійно та швидко. Ми даємо гарантію на те, що робимо. </p>
              </div>
              <div class="col-md-6 col-feature mb-4">
                <h4 class="mb-3 h4-promo">Є запитання? Телефонуйте!</h4>
                <p class="p-promo">Наш оператор з радістю пояснить деталі, що Вас зацікавлять, допоможе оформити замовлення та відповість на Ваші запитання.</p>
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
              <h6 class="steps-text d-inline d-md-block">Ви призначаєте зустріч в зручному місці</h6>
            </div>
          </div>
          <div class="col-12 col-md-3 p-0">
            <div class="dotted-line float-left d-none d-md-block"></div>
            <div class="dotted-line float-right d-none d-md-block"></div>
            <div class="circle-empty rounded-circle d-none d-md-block"></div>
            <div class="steps-col">
              <h1 class="steps-number text-center d-inline-block d-md-block">2</h1>
              <h6 class="steps-text d-inline d-md-block">Майстер приїде в зручний для Вас час</h6>
            </div>
          </div>
          <div class="col-12 col-md-3 p-0">
            <div class="dotted-line float-left d-none d-md-block"></div>
            <div class="dotted-line float-right d-none d-md-block"></div>
            <div class="circle-empty rounded-circle d-none d-md-block"></div>
            <div class="steps-col">
              <h1 class="steps-number text-center d-inline-block d-md-block">3</h1>
              <h6 class="steps-text d-inline d-md-block">Відремонтує ваш телефон за 20 хвилин</h6>
            </div>
          </div>
          <div class="col-12 col-md-3 p-0">
            <div class="dotted-line float-left d-none d-md-block"></div>
            <div class="circle-full rounded-circle d-none d-md-block"></div>
            <div class="steps-col">
              <h1 class="steps-number text-center d-inline-block d-md-block">4</h1>
              <h6 class="steps-text d-inline d-md-block">Прийме оплату та видасть гарантію на 3 місяці</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="services text-center" id="services-section">
      <h2>Оберіть свій iPhone</h2>
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
              <h3>Розбили екран?</h3>
              <p>При ремонті дисплею захисне скло у подарунок!</p>
              <a href="#" class="btn btn-light btn-deal" data-toggle="modal" data-target="#deal1Modal">Детальніше</a>
            </div>
          </div>
          <div class="col-12 col-sm-4 p-0 deal">
            <img src="images/deal.jpg" alt class="img-deal" />
            <div class="deal-desc bg-green-dark deal-text-light">
              <h3>Горяча пропозиція!</h3>
              <p>Замовте ремонт на завтра і отримайте знижку 10%</p>
              <a href="#" class="btn btn-light btn-deal" data-toggle="modal" data-target="#deal2Modal">Детальніше</a>
            </div>
          </div>
          <div class="col-12 col-sm-4 p-0 deal">
            <img src="images/deal-3-magic.jpg" alt class="img-deal" />
            <div class="deal-desc bg-blue deal-text-light">
              <h3>Потрібна консультація?</h3>
              <p>Наші спеціалісти допоможуть Вам визначити поломку та дадуть відповідь на всі запитання</p>
              <a href="#" class="btn btn-light btn-deal"  data-toggle="modal" data-target="#deal3Modal">Детальніше</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="reviews-section" class="reviews text-center">
      <div class="review-contacts">
        <h5>Задоволені якісним сервісом? Залиште відгук у <a href="tg://resolve?domain=lightningservice">Telegram</a>, <a href="viber://chat?number=+380963002435">Viber</a>, <a href="whatsapp://send?phone=+380963002435">Whatsapp</a><br /><a href="mailto:reviews@lightning-service.com.ua">reviews@lightning-service.com.ua</a></h5>
      </div>
    </section>
    <section id="features-section" class="features-4 text-center">
      <div class="container">
        <div class="row justify-center">
          <div class="col-md-8 text-center" >
            <h2>Наші переваги</h2>
            <p class="lead mt-3">Швидкісний сервіс Lightning вигідно відрізняється від інших</p>
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
                  <h4 class="feature-desc">Безкоштовний виїзд у межах всього Києва</h4>
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
                  <h4 class="feature-desc">Гарантія на роботу - 3 місяці</h4>
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
                  <h4 class="feature-desc">Тільки перевірені деталі</h4>
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
                  <h4 class="feature-desc">Можна оплатити карткою без %</h4>
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
                  <h4 class="feature-desc">Найкращі майстри та інструменти</h4>
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
                  <h4 class="feature-desc">Ремонт від 10 хвилин</h4>
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
            <h5 class="modal-title" id="helpModalLabel">Викликати майстра</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5 id="callback-h5">Залиште ваш мобільний номер і вам зателефонують!</h5>
            <div class="alert alert-success col-md-12" style="display: none;" id="success-cb" role="alert">
              Дякуємо, Вам зателефонуються в межах 10 хвилин.
            </div>
            <div class="alert alert-danger col-md-12" style="display: none;" id="error-cb" role="alert">
              Помилка. Будь ласка, спробуйте перезавантажити сторінку.
            </div>
            <div class="alert alert-warning col-md-12" style="display: none;" id="warning-cb" role="alert">
              Будь ласка, введіть ваш мобільний номер.
            </div>
            <form class="mt-4" id="callback-form">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="input-group">
                      <span class="input-group-addon mb-4" id="basic-addon1">+38</span>
                      <input type="text" id="phonetocall" class="form-control-custom mb-4" aria-describedby="basic-addon1" placeholder="Ваш номер">
                      <input type="submit" class="btn btn-primary mb-4 btn-bigger" style="margin-left: 5px;" value="Зателефонуйте мені" />
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
                  <h5 class="promo-badge pt-3 pb-3 rounded">Замовте завчасно і отримайте знижку 10%!</h5>
                  <p class="item-intro text-muted">Натисніть на бажаний вид роботи, щоб додати його до замовлення</p>
                  <div class="container">
                    <div class="row no-gutters">
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table left-table mb-0">
                          <tbody id="iPhone5-tbody">
                            <tr>
                              <td>Заміна скла/екрана <i class="fas fa-info-circle" data-original-title="Ремонт протягом дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴599</td>
                            </tr>
                            <tr>
                              <td>Заміна дисплея (хороша копія)</td>
                              <td>₴999</td>
                            </tr>
                            <tr>
                              <td>Заміна дисплея (оригінал з іншого пристрою)</td>
                              <td>₴1499</td>
                            </tr>
                            <tr>
                              <td>Заміна батареї</td>
                              <td>₴499</td>
                            </tr>
                            <tr>
                              <td>Заміна основної камери</td>
                              <td>₴499</td>
                            </tr>
                            <tr>
                              <td>Заміна фронтальної камери</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Заміна кнопки Home</td>
                              <td>₴499</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table">
                          <tbody id="iPhone5-tbody">
                            <tr>
                              <td>Заміна слухового динаміка</td>
                              <td>₴299</td>
                            </tr>
                            <tr>
                              <td>Заміна поліфонічного динаміка</td>
                              <td>₴349</td>
                            </tr>
                            <tr>
                              <td>Заміна роз'єму зарядки-синхронізації lightning</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Заміна мікрофона</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Заміна вібромотора</td>
                              <td>₴199</td>
                            </tr>
                            <tr>
                              <td>Поклейка захисного скла <i class="fas fa-info-circle" data-original-title="Безкоштовно при ремонті дисплею" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴199</td>
                            </tr>
                            <tr class="tr-disabled">
                              <td>Діагностика <i class="fas fa-info-circle" data-original-title="При будь-якому ремонті" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>Безкоштовно!</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <h6 class="bg-dark text-light pt-2 pb-2">Не можете визначити поломку? Не влаштовує ціна? Дзвоніть нам на номер <a href="tel:+380963002435">+380963002435</a></h6>
                  <h4 class="price d-none"></h4>
                  <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button">Перейти до замовлення</button>
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
                  <h5 class="promo-badge pt-3 pb-3 rounded">Замовте завчасно і отримайте знижку 10%!</h5>
                  <p class="item-intro text-muted">Натисніть на бажаний вид роботи, щоб додати його до замовлення</p>
                  <div class="container">
                    <div class="row no-gutters">
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table left-table mb-0">
                          <tbody id="iPhone5s-tbody">
                            <tr>
                              <td>Заміна скла/екрана <i class="fas fa-info-circle" data-original-title="Ремонт протягом дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴599</td>
                            </tr>
                            <tr>
                              <td>Заміна дисплея (хороша копія)</td>
                              <td>₴999</td>
                            </tr>
                            <tr>
                              <td>Заміна дисплея (оригінал з іншого пристрою)</td>
                              <td>₴1599</td>
                            </tr>
                            <tr>
                              <td>Заміна батареї</td>
                              <td>₴499</td>
                            </tr>
                            <tr>
                              <td>Заміна основної камери</td>
                              <td>₴499</td>
                            </tr>
                            <tr>
                              <td>Заміна фронтальної камери</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Заміна кнопки Home</td>
                              <td>₴499</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table">
                          <tbody id="iPhone5s-tbody">
                            <tr>
                              <td>Заміна слухового динаміка</td>
                              <td>₴299</td>
                            </tr>
                            <tr>
                              <td>Заміна поліфонічного динаміка</td>
                              <td>₴349</td>
                            </tr>
                            <tr>
                              <td>Заміна роз'єму зарядки-синхронізації lightning</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Заміна мікрофона</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Заміна вібромотора</td>
                              <td>₴199</td>
                            </tr>
                            <tr>
                              <td>Поклейка захисного скла <i class="fas fa-info-circle" data-original-title="Безкоштовно при ремонті дисплею" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴199</td>
                            </tr>
                            <tr class="tr-disabled">
                              <td>Діагностика <i class="fas fa-info-circle" data-original-title="При будь-якому ремонті" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>Безкоштовно!</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <h6 class="bg-dark text-light pt-2 pb-2">Не можете визначити поломку? Не влаштовує ціна? Дзвоніть нам на номер <a href="tel:+380963002435">+380963002435</a></h6>
                  <h4 class="price d-none"></h4>
                  <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button">Перейти до замовлення</button>
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
                  <h5 class="promo-badge pt-3 pb-3 rounded">Замовте завчасно і отримайте знижку 10%!</h5>
                  <p class="item-intro text-muted">Натисніть на бажаний вид роботи, щоб додати його до замовлення</p>
                  <div class="container">
                    <div class="row no-gutters">
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table left-table mb-0">
                          <tbody id="iPhoneSE-tbody">
                            <tr>
                              <td>Заміна скла/екрана <i class="fas fa-info-circle" data-original-title="Ремонт протягом дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴699</td>
                            </tr>
                            <tr>
                              <td>Заміна дисплея (хороша копія)</td>
                              <td>₴999</td>
                            </tr>
                            <tr>
                              <td>Заміна дисплея (оригінал з іншого пристрою)</td>
                              <td>₴1999</td>
                            </tr>
                            <tr>
                              <td>Заміна батареї</td>
                              <td>₴599</td>
                            </tr>
                            <tr>
                              <td>Заміна основної камери</td>
                              <td>₴599</td>
                            </tr>
                            <tr>
                              <td>Заміна фронтальної камери</td>
                              <td>₴499</td>
                            </tr>
                            <tr>
                              <td>Заміна кнопки Home</td>
                              <td>₴499</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table">
                          <tbody id="iPhoneSE-tbody">
                            <tr>
                              <td>Заміна слухового динаміка</td>
                              <td>₴349</td>
                            </tr>
                            <tr>
                              <td>Заміна поліфонічного динаміка</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Заміна роз'єму зарядки-синхронізації lightning</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Заміна мікрофона</td>
                              <td>₴399</td>
                            </tr>
                            <tr>
                              <td>Заміна вібромотора</td>
                              <td>₴199</td>
                            </tr>
                            <tr>
                              <td>Поклейка захисного скла <i class="fas fa-info-circle" data-original-title="Безкоштовно при ремонті дисплею" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴199</td>
                            </tr>
                            <tr class="tr-disabled">
                              <td>Діагностика <i class="fas fa-info-circle" data-original-title="При будь-якому ремонті" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>Безкоштовно!</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <h6 class="bg-dark text-light pt-2 pb-2">Не можете визначити поломку? Не влаштовує ціна? Дзвоніть нам на номер <a href="tel:+380963002435">+380963002435</a></h6>
                  <h4 class="price d-none"></h4>
                  <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button">Перейти до замовлення</button>
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
                  <h5 class="promo-badge pt-3 pb-3 rounded">Замовте завчасно і отримайте знижку 10%!</h5>
                  <p class="item-intro text-muted">Натисніть на бажаний вид роботи, щоб додати його до замовлення</p>
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
                                  <td>Заміна скла/екрана <i class="fas fa-info-circle" data-original-title="Ремонт протягом дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴999</td>
                                </tr>
                                <tr>
                                  <td>Заміна дисплея (хороша копія)</td>
                                  <td>₴1499</td>
                                </tr>
                                <tr>
                                  <td>Заміна дисплея (оригінал з іншого пристрою)</td>
                                  <td>₴1999</td>
                                </tr>
                                <tr>
                                  <td>Заміна батареї</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Заміна основної камери</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Заміна фронтальної камери</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Заміна кнопки Home</td>
                                  <td>₴499</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table">
                              <tbody id="iPhone6-tbody">
                                <tr>
                                  <td>Заміна слухового динаміка</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Заміна поліфонічного динаміка</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Заміна роз'єму зарядки-синхронізації lightning</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Заміна мікрофона</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Заміна вібромотора</td>
                                  <td>₴299</td>
                                </tr>
                                <tr>
                                  <td>Поклейка захисного скла <i class="fas fa-info-circle" data-original-title="Безкоштовно при ремонті дисплею" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴199</td>
                                </tr>
                                <tr class="tr-disabled">
                                  <td>Діагностика <i class="fas fa-info-circle" data-original-title="При будь-якому ремонті" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>Безкоштовно!</td>
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
                                  <td>Заміна скла/екрана <i class="fas fa-info-circle" data-original-title="Ремонт протягом дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴1499</td>
                                </tr>
                                <tr>
                                  <td>Заміна дисплея (хороша копія)</td>
                                  <td>₴1999</td>
                                </tr>
                                <tr>
                                  <td>Заміна дисплея (оригінал з іншого пристрою)</td>
                                  <td>₴2499</td>
                                </tr>
                                <tr>
                                  <td>Заміна батареї</td>
                                  <td>₴649</td>
                                </tr>
                                <tr>
                                  <td>Заміна основної камери</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Заміна фронтальної камери</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Заміна кнопки Home</td>
                                  <td>₴499</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table">
                              <tbody id="iPhone6Plus-tbody">
                                <tr>
                                  <td>Заміна слухового динаміка</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Заміна поліфонічного динаміка</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Заміна роз'єму зарядки-синхронізації lightning</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Заміна мікрофона</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Заміна вібромотора</td>
                                  <td>₴299</td>
                                </tr>
                                <tr>
                                  <td>Поклейка захисного скла <i class="fas fa-info-circle" data-original-title="Безкоштовно при ремонті дисплею" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴199</td>
                                </tr>
                                <tr class="tr-disabled">
                                  <td>Діагностика <i class="fas fa-info-circle" data-original-title="При будь-якому ремонті" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>Безкоштовно!</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h6 class="bg-dark text-light pt-2 pb-2">Не можете визначити поломку? Не влаштовує ціна? Дзвоніть нам на номер <a href="tel:+380963002435">+380963002435</a></h6>
                  <h4 class="price d-none"></h4>
                  <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button">Перейти до замовлення</button>
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
                  <h5 class="promo-badge pt-3 pb-3 rounded">Замовте завчасно і отримайте знижку 10%!</h5>
                  <p class="item-intro text-muted">Натисніть на бажаний вид роботи, щоб додати його до замовлення</p>
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
                                  <td>Заміна скла/екрана <i class="fas fa-info-circle" data-original-title="Ремонт протягом дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴999</td>
                                </tr>
                                <tr>
                                  <td>Заміна дисплея (хороша копія)</td>
                                  <td>₴1599</td>
                                </tr>
                                <tr>
                                  <td>Заміна дисплея (оригінал з іншого пристрою)</td>
                                  <td>₴2199</td>
                                </tr>
                                <tr>
                                  <td>Заміна батареї</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Заміна основної камери</td>
                                  <td>₴1199</td>
                                </tr>
                                <tr>
                                  <td>Заміна фронтальної камери</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Заміна кнопки Home</td>
                                  <td>₴499</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table">
                              <tbody id="iPhone6s-tbody">
                                <tr>
                                  <td>Заміна слухового динаміка</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Заміна поліфонічного динаміка</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Заміна роз'єму зарядки-синхронізації lightning</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Заміна мікрофона</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Заміна вібромотора</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Поклейка захисного скла <i class="fas fa-info-circle" data-original-title="Безкоштовно при ремонті дисплею" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴199</td>
                                </tr>
                                <tr class="tr-disabled">
                                  <td>Діагностика <i class="fas fa-info-circle" data-original-title="При будь-якому ремонті" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>Безкоштовно!</td>
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
                                    <td>Заміна скла/екрана <i class="fas fa-info-circle" data-original-title="Ремонт протягом дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                    <td>₴1499</td>
                                  </tr>
                                  <tr>
                                    <td>Заміна дисплея (хороша копія)</td>
                                    <td>₴2099</td>
                                  </tr>
                                  <tr>
                                    <td>Заміна дисплея (оригінал з іншого пристрою)</td>
                                    <td>₴2999</td>
                                  </tr>
                                  <tr>
                                    <td>Заміна батареї</td>
                                    <td>₴649</td>
                                  </tr>
                                  <tr>
                                    <td>Заміна основної камери</td>
                                    <td>₴1199</td>
                                  </tr>
                                  <tr>
                                    <td>Заміна фронтальної камери</td>
                                    <td>₴499</td>
                                  </tr>
                                  <tr>
                                    <td>Заміна кнопки Home</td>
                                    <td>₴499</td>
                                  </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table">
                              <tbody id="iPhone6sPlus-tbody">
                                <tr>
                                  <td>Заміна слухового динаміка</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Заміна поліфонічного динаміка</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Заміна роз'єму зарядки-синхронізації lightning</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Заміна мікрофона</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Заміна вібромотора</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Поклейка захисного скла <i class="fas fa-info-circle" data-original-title="Безкоштовно при ремонті дисплею" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴199</td>
                                </tr>
                                <tr class="tr-disabled">
                                  <td>Діагностика <i class="fas fa-info-circle" data-original-title="При будь-якому ремонті" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>Безкоштовно!</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h6 class="bg-dark text-light pt-2 pb-2">Не можете визначити поломку? Не влаштовує ціна? Дзвоніть нам на номер <a href="tel:+380963002435">+380963002435</a></h6>
                  <h4 class="price d-none"></h4>
                  <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button">Перейти до замовлення</button>
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
                  <h5 class="promo-badge pt-3 pb-3 rounded">Замовте завчасно і отримайте знижку 10%!</h5>
                  <p class="item-intro text-muted">Натисніть на бажаний вид роботи, щоб додати його до замовлення</p>
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
                                  <td>Заміна скла/екрана <i class="fas fa-info-circle" data-original-title="Ремонт протягом дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴1799</td>
                                </tr>
                                <tr>
                                  <td>Заміна дисплея (хороша копія)</td>
                                  <td>₴1999</td>
                                </tr>
                                <tr>
                                  <td>Заміна дисплея (оригінал з іншого пристрою)</td>
                                  <td>₴2999</td>
                                </tr>
                                <tr>
                                  <td>Заміна батареї</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Заміна основної камери</td>
                                  <td>₴1299</td>
                                </tr>
                                <tr>
                                  <td>Заміна фронтальної камери</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Заміна кнопки Home</td>
                                  <td>₴499</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table">
                              <tbody id="iPhone7-tbody">
                                <tr>
                                  <td>Заміна слухового динаміка</td>
                                  <td>₴399</td>
                                </tr>
                                <tr>
                                  <td>Заміна поліфонічного динаміка</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Заміна роз'єму зарядки-синхронізації lightning</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Заміна мікрофона</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Заміна вібромотора</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Поклейка захисного скла <i class="fas fa-info-circle" data-original-title="Безкоштовно при ремонті дисплею" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴199</td>
                                </tr>
                                <tr class="tr-disabled">
                                  <td>Діагностика <i class="fas fa-info-circle" data-original-title="При будь-якому ремонті" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>Безкоштовно!</td>
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
                                  <td>Заміна скла/екрана <i class="fas fa-info-circle" data-original-title="Ремонт протягом дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴2199</td>
                                </tr>
                                <tr>
                                  <td>Заміна дисплея (хороша копія)</td>
                                  <td>₴2599</td>
                                </tr>
                                <tr>
                                  <td>Заміна дисплея (оригінал з іншого пристрою)</td>
                                  <td>₴4999</td>
                                </tr>
                                <tr>
                                  <td>Заміна батареї</td>
                                  <td>₴699</td>
                                </tr>
                                <tr>
                                  <td>Заміна основної камери</td>
                                  <td>₴2499</td>
                                </tr>
                                <tr>
                                  <td>Заміна фронтальної камери</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Заміна кнопки Home</td>
                                  <td>₴499</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table">
                              <tbody id="iPhone7Plus-tbody">
                                <tr>
                                  <td>Заміна слухового динаміка</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Заміна поліфонічного динаміка</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Заміна роз'єму зарядки-синхронізації lightning</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Заміна мікрофона</td>
                                  <td>₴599</td>
                                </tr>
                                <tr>
                                  <td>Заміна вібромотора</td>
                                  <td>₴499</td>
                                </tr>
                                <tr>
                                  <td>Поклейка захисного скла <i class="fas fa-info-circle" data-original-title="Безкоштовно при ремонті дисплею" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴199</td>
                                </tr>
                                <tr class="tr-disabled">
                                  <td>Діагностика <i class="fas fa-info-circle" data-original-title="При будь-якому ремонті" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>Безкоштовно!</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h6 class="bg-dark text-light pt-2 pb-2">Не можете визначити поломку? Не влаштовує ціна? Дзвоніть нам на номер <a href="tel:+380963002435">+380963002435</a></h6>
                  <h4 class="price d-none"></h4>
                  <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button">Перейти до замовлення</button>
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
                  <h5 class="promo-badge pt-3 pb-3 rounded">Замовте завчасно і отримайте знижку 10%!</h5>
                  <p class="item-intro text-muted">Натисніть на бажаний вид роботи, щоб додати його до замовлення</p>
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
                                  <td>Заміна скла/екрана <i class="fas fa-info-circle" data-original-title="Ремонт протягом дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴2499</td>
                                </tr>

                                <tr>
                                  <td>Заміна дисплея (оригінал з іншого пристрою)</td>
                                  <td>₴7999</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table">
                              <tbody id="iPhone8-tbody">
                                <tr>
                                  <td>Поклейка захисного скла <i class="fas fa-info-circle" data-original-title="Безкоштовно при ремонті дисплею" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴299</td>
                                </tr>
                                <tr class="tr-disabled">
                                  <td>Діагностика <i class="fas fa-info-circle" data-original-title="При будь-якому ремонті" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>Безкоштовно!</td>
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
                                  <td>Заміна скла/екрана <i class="fas fa-info-circle" data-original-title="Ремонт протягом дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴3499</td>
                                </tr>

                                <tr>
                                  <td>Заміна дисплея (оригінал з іншого пристрою)</td>
                                  <td>₴9999</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table class="table table-hover service-table">
                              <tbody id="iPhone8Plus-tbody">
                                <tr>
                                  <td>Поклейка захисного скла <i class="fas fa-info-circle" data-original-title="Безкоштовно при ремонті дисплею" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>₴299</td>
                                </tr>
                                <tr class="tr-disabled">
                                  <td>Діагностика <i class="fas fa-info-circle" data-original-title="При будь-якому ремонті" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                                  <td>Безкоштовно!</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h6 class="bg-dark text-light pt-2 pb-2">Не можете визначити поломку? Не влаштовує ціна? Дзвоніть нам на номер <a href="tel:+380963002435">+380963002435</a></h6>
                  <h4 class="price d-none"></h4>
                  <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button">Перейти до замовлення</button>
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
                  <h5 class="promo-badge pt-3 pb-3 rounded">Замовте завчасно і отримайте знижку 10%!</h5>
                  <p class="item-intro text-muted">Натисніть на бажаний вид роботи, щоб додати його до замовлення</p>
                  <div class="container">
                    <div class="row no-gutters">
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table left-table mb-0">
                          <tbody id="iPhoneX-tbody">
                            <tr>
                              <td>Заміна скла/екрана <i class="fas fa-info-circle" data-original-title="Ремонт протягом дня" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴5999</td>
                            </tr>

                            <tr>
                              <td>Заміна дисплея (оригінал з іншого пристрою)</td>
                              <td>₴15999</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table">
                          <tbody id="iPhoneX-tbody">
                            <tr>
                              <td>Поклейка захисного скла <i class="fas fa-info-circle" data-original-title="Безкоштовно при ремонті дисплею" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴299</td>
                            </tr>
                            <tr class="tr-disabled">
                              <td>Діагностика <i class="fas fa-info-circle" data-original-title="При будь-якому ремонті" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>Безкоштовно!</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <h6 class="bg-dark text-light pt-2 pb-2">Не можете визначити поломку? Не влаштовує ціна? Дзвоніть нам на номер <a href="tel:+380963002435">+380963002435</a></h6>
                  <h4 class="price d-none"></h4>
                  <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button">Перейти до замовлення</button>
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
              <span class="goback-text">Повернутися назад</span>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-10 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Як ми можемо з Вами зв'язатися?</h2>
                  <p class="item-intro text-muted">Залиште Ваші контакти і ми якнайшвидше Вам зателефонуємо</p>
                  <form class="contact-form mt-4" id="order-form">
                    <div class="alert alert-success col-md-12" style="display: none;" id="success" role="alert">
                      Ваше замовлення було прийнято!
                    </div>
                    <div class="alert alert-danger col-md-12" style="display: none;" id="error" role="alert">
                      Сталася помилка під час розміщення замовлення. Спробуйте перезавантажити сторінку.
                    </div>
                    <div class="alert alert-warning col-md-12" style="display: none;" id="warning" role="alert">
                      Будь ласка, заповніть форму замовлення.
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon mb-4"><span class="far fa-user"></span></span>
                            <input type="text" id="name" class="form-control-custom mb-4" placeholder="Ім'я">
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
                          <button id="submit" type="submit" class="btn btn-primary btn-lg">Надіслати</button>
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
            <h4 class="modal-title" id="helpModalLabel">Захисне скло у подарунок!</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5>При замовленні послуги "Заміна скла / екрану" або "Заміна дисплея" ми поклеїмо Вам захисне скло і дамо гарантію на 3 місяці. <a class="page-scroll" href="#services-section" data-dismiss="modal">Дізнатися ціни</a></h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Deal 2 -->
    <div class="modal fade modal-small" id="deal2Modal" tabindex="-1" role="dialog" aria-labelledby="deal2ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="helpModalLabel">Вигідна пропозиція!</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5 class="promo-badge pt-3 pb-3 rounded text-center mb-2" style="width: 100%;">Замовте завчасно і отримайте знижку 10%!</h5>
            <h5>При зазамовленні будь-яких послуг на наступний день ми даруємо Вам знижку. Це дає нам змогу створити графік для кожного майстра, щоб він зміг обслужити якомога більше клієнтів, а Вам - випити зайву чашку кави в компанії друзів :)</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Deal 3 -->
    <div class="modal fade modal-small" id="deal3Modal" tabindex="-1" role="dialog" aria-labelledby="deal3ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="helpModalLabel">Безкоштовна консультація!</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5>Є питання з приводу ремонту? Не можете самостійно визначити поломку? Дзвоніть нам на номер <a href="tel:+380963002435">+380963002435</a> або <a href="#" data-toggle="modal" data-target="#helpModal">залиште свій номер</a> і ми Вам передзвонимо протягом 20 хвилин (у робочий час).</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Callback button -->
    <div class="callback-bt" id="callback-button">
      <div class="text-call">
          <i class="fa fa-phone"></i>
          <a href="#" data-toggle="modal" data-target="#helpModal"><span>замовити<br>дзвінок</span></a>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/lightning-ukr.js"></script>
    <script src="js/phone.js"></script>
  </body>
</html>
