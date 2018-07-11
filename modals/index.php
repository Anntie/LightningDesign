<?php
  $lang = $_GET['lang'];

  $services = json_decode(file_get_contents("../services/services.json"), true);
  $prices = json_decode(file_get_contents("../services/prices.min.json"), true);
  $models = json_decode(file_get_contents("../services/models.json"), true);

  foreach ($models as $model => $value) :
?>
<!-- iPhone <?php echo $model ?> -->
<div class="service-modal modal fade" id="iPhone<?php echo $model ?>Modal" tabindex="-1" role="dialog" aria-hidden="true">
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
              <h2>iPhone <?php echo $model; if ($value['hasPlus']) echo " / " . $model . " Plus";?></h2>
              <h5 class="promo-badge pt-3 pb-3 rounded"><?php echo ($lang === "ru") ? "Закажите заранее и получите скидку 10%!" : "Замовте завчасно і отримайте знижку 10%!" ?></h5>
              <p class="item-intro text-muted"><?php echo ($lang === "ru") ? "Нажмите на нужный Вам вид работы, чтобы добавить его в заказ" : "Натисніть на бажаний вид роботи, щоб додати його до замовлення" ?></p>
              <?php if ($value['hasPlus']) : ?>
              <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link tab-link active" id="iphone<?php echo $model ?>-tab" data-toggle="tab" href="#iphone<?php echo $model ?>" role="tab" aria-controls="iphone<?php echo $model ?>" aria-selected="true">iPhone <?php echo $model ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link tab-link" id="iphone<?php echo $model ?>plus-tab" data-toggle="tab" href="#iphone<?php echo $model ?>plus" role="tab" aria-controls="iphone<?php echo $model ?>plus" aria-selected="false">iPhone <?php echo $model ?> Plus</a>
                </li>
              </ul>
              <div class="tab-content" id="iPhone<?php echo $model ?>TabContent">
                <div class="tab-pane fade show active" id="iphone<?php echo $model ?>" role="tabpanel" aria-labelledby="iphone<?php echo $model ?>-tab">
                  <div class="container">
                    <div class="row no-gutters">
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table left-table mb-0">
                          <tbody id="iPhone<?php echo $model ?>-tbody">
                            <?php $i = 0; ?>
                            <?php foreach ($prices["iPhone " . $model] as $key => $value) : ?>
                            <?php if ($i === 7) break; ?>
                            <tr>
                              <td><?php echo $services[$value["service_id"] - 1][$lang]; if ($value["service_id"] - 1 == 1) echo '<i class="fas fa-info-circle" data-original-title="Ремонт ' . ($lang === "ru") ? 
                              'в течении' : 'протягом' . ' дня" data-container="body" data-toggle="tooltip" data-placement="top"></i>'; ?></td>
                              <td>₴<?php echo $value["price"]; ?></td>
                            </tr>
                            <?php $i++ ?>
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table">
                          <tbody id="iPhone<?php echo $model ?>-tbody">
                            <?php foreach ($prices["iPhone " . $model] as $key => $value) : ?>
                            <?php if ($i < 7) continue; ?>
                            <tr>
                              <td><?php echo $services[$value["service_id"] - 1][$lang];?></td>
                              <td>₴<?php echo $value["price"]; ?></td>
                            </tr>
                            <?php $i++ ?>
                            <?php endforeach; ?>
                            <tr>
                              <td><?php echo ($lang === "ru") ? "Поклейка защитного стекла" : "Поклейка захисного скла" ?> <i class="fas fa-info-circle" data-original-title="<?php echo ($lang === "ru") ? "Бесплатно при ремонте дисплея" : "Безкоштовно при ремонті дисплею" ?>" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴199</td>
                            </tr>
                            <tr class="tr-disabled">
                              <td><?php echo ($lang === "ru") ? "Диагностика" : "Діагностика" ?> <i class="fas fa-info-circle" data-original-title="<?php echo ($lang === "ru") ? "При любом ремонте" : "При будь-якому ремонті" ?>" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td><?php echo ($lang === "ru") ? "Бесплатно" : "Безкоштовно" ?>!</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="iphone<?php echo $model ?>plus" role="tabpanel" aria-labelledby="iphone<?php echo $model ?>plus-tab">
                  <div class="container">
                    <div class="row no-gutters">
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table left-table mb-0">
                          <tbody id="iPhone<?php echo $model ?>Plus-tbody">
                            <?php $i = 0; ?>
                            <?php foreach ($prices["iPhone " . $model . "+"] as $key => $value) : ?>
                            <?php if ($i === 7) break; ?>
                            <tr>
                              <td><?php echo $services[$value["service_id"] - 1][$lang]; if ($value["service_id"] - 1 == 1) echo '<i class="fas fa-info-circle" data-original-title="Ремонт ' . ($lang === "ru") ? 
                              'в течении' : 'протягом' . ' дня" data-container="body" data-toggle="tooltip" data-placement="top"></i>'; ?></td>
                              <td>₴<?php echo $value["price"]; ?></td>
                            </tr>
                            <?php $i++ ?>
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <table class="table table-hover service-table">
                          <tbody id="iPhone<?php echo $model ?>Plus-tbody">
                            <?php foreach ($prices["iPhone " . $model . "+"] as $key => $value) : ?>
                            <?php if ($i < 7) continue; ?>
                            <tr>
                              <td><?php echo $services[$value["service_id"] - 1][$lang];?></td>
                              <td>₴<?php echo $value["price"]; ?></td>
                            </tr>
                            <?php $i++ ?>
                            <?php endforeach; ?>
                            <tr>
                              <td><?php echo ($lang === "ru") ? "Поклейка защитного стекла" : "Поклейка захисного скла" ?> <i class="fas fa-info-circle" data-original-title="<?php echo ($lang === "ru") ? "Бесплатно при ремонте дисплея" : "Безкоштовно при ремонті дисплею" ?>" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td>₴199</td>
                            </tr>
                            <tr class="tr-disabled">
                              <td><?php echo ($lang === "ru") ? "Диагностика" : "Діагностика" ?> <i class="fas fa-info-circle" data-original-title="<?php echo ($lang === "ru") ? "При любом ремонте" : "При будь-якому ремонті" ?>" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                              <td><?php echo ($lang === "ru") ? "Бесплатно" : "Безкоштовно" ?>!</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php else : ?>
              <div class="container">
                <div class="row no-gutters">
                  <div class="col-sm-12 col-md-6">
                    <table class="table table-hover service-table left-table mb-0">
                      <tbody id="iPhone<?php echo $model ?>-tbody">
                        <?php $i = 0; ?>
                        <?php foreach ($prices["iPhone " . $model] as $key => $value) : ?>
                        <?php if ($i === 7) break; ?>
                        <tr>
                          <td><?php echo $services[$value["service_id"] - 1][$lang]; if ($value["service_id"] - 1 == 1) echo '<i class="fas fa-info-circle" data-original-title="Ремонт ' . ($lang === "ru") ? 
                          'в течении' : 'протягом' . ' дня" data-container="body" data-toggle="tooltip" data-placement="top"></i>'; ?></td>
                          <td>₴<?php echo $value["price"]; ?></td>
                        </tr>
                        <?php $i++ ?>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <table class="table table-hover service-table">
                      <tbody id="iPhone<?php echo $model ?>-tbody">
                        <?php foreach ($prices["iPhone " . $model] as $key => $value) : ?>
                        <?php if ($i < 7) continue; ?>
                        <tr>
                          <td><?php echo $services[$value["service_id"] - 1][$lang];?></td>
                          <td>₴<?php echo $value["price"]; ?></td>
                        </tr>
                        <?php $i++ ?>
                        <?php endforeach; ?>
                        <tr>
                          <td><?php echo ($lang === "ru") ? "Поклейка защитного стекла" : "Поклейка захисного скла" ?> <i class="fas fa-info-circle" data-original-title="<?php echo ($lang === "ru") ? "Бесплатно при ремонте дисплея" : "Безкоштовно при ремонті дисплею" ?>" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                          <td>₴199</td>
                        </tr>
                        <tr class="tr-disabled">
                          <td><?php echo ($lang === "ru") ? "Диагностика" : "Діагностика" ?> <i class="fas fa-info-circle" data-original-title="<?php echo ($lang === "ru") ? "При любом ремонте" : "При будь-якому ремонті" ?>" data-container="body" data-toggle="tooltip" data-placement="top"></i></td>
                          <td><?php echo ($lang === "ru") ? "Бесплатно" : "Безкоштовно" ?>!</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <?php endif; ?>
              <h6 class="bg-dark text-light pt-2 pb-2"><?php echo ($lang === "ru") ? "Не можете определить поломку? Не устраивает цена? Звоните нам на номер" : "Не можете визначити поломку? Не влаштовує ціна? Дзвоніть нам на номер" ?> <a href="tel:+380963002435">+380963002435</a></h6>
              <h4 class="price d-none"></h4>
              <button href="#orderModal" class="btn btn-secondary page-scroll gotocart" data-toggle="modal" disabled="true" type="button"><?php echo ($lang === "ru") ? "Перейти к заказу" : "Перейти до замовлення" ?></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>