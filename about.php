<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>О компании - Aliance Production</title>

    <link rel="shortcut icon" href="img/favicon-light.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/fonts.css" />
  </head>
  <body>
    <div class="wrapper">
      <?php 
      $page_title = "О компании";
      $header_type = "";
      include_once('./templates/header-page.php');
      ?>
      <section class="founder">
        <img class="founder__img" src="img/founder.jpg" alt="Founder" />
        <div class="founder__container container">
          <div class="founder__content">
            <div class="separator"></div>
            <h2 class="founder__title title title_h2">Отношение к делу и к клиентам</h2>
            <div class="founder__text-block">
              <p class="founder__text">
                Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика
                показывает, что укрепление и развитие внутренней структуры говорит о возможностях
                соответствующих условий активизации. Внезапно, независимые государства, которые
                представляют собой яркий пример континентально-европейского типа политической
                культуры, будут подвергнуты целой серии независимых исследований. С учётом
                сложившейся международной обстановки, синтетическое тестирование выявляет срочную
                потребность системы массового участия.
              </p>
              <p class="founder__text">
                А ещё действия представителей оппозиции, превозмогая сложившуюся непростую
                экономическую ситуацию, в равной степени предоставлены сами себе. Не следует,
                однако, забывать, что выбранный нами инновационный путь в значительной степени
                обусловливает важность дальнейших направлений развития.
              </p>
            </div>
            <a href="#" class="founder__button-link button-link">Подробнее о компании</a>
          </div>
        </div>
      </section>
      <?php include_once('./templates/clients.php');?>
      <?php include_once('./templates/footer.php');?>
    </div>
    <div class="modal">
      <div class="modal__container">
        <form action="#" class="modal__form cta__content">
          <div class="modal__top">
            <h2 class="modal__title cta__title title title_h2">Есть вопросы?</h2>
            <button class="modal__close-btn" type="button" data-toggle="modal">
              <svg class="modal__close-svg" width="24" height="24">
                <use href="img/sprite.svg#close"></use>
              </svg>
            </button>
          </div>
          <p class="modal__description cta__description">
            Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
            интересующие вопросы и поможем даже в самых сложных случаях!
          </p>
          <div class="modal__inputs cta__inputs">
            <div class="modal__input-group cta__input-group">
              <input
                class="modal__input cta__input input"
                id="modal-user-name"
                type="text"
                placeholder="Имя"
              />
              <label for="modal-user-name" class="modal__label cta__label">Имя</label>
            </div>
            <div class="modal__input-group cta__input-group">
              <input
                class="modal__input cta__input input"
                id="modal-user-phone"
                type="text"
                placeholder="Номер телефона"
              />
              <label for="modal-user-phone" class="modal__label cta__label">Номер телефона</label>
            </div>
          </div>
          <div class="modal__button-group cta__button-group">
            <button class="button modal__button cta__button" type="submit">Отправить заявку</button>
            <div class="modal__notify-group cta__notify-group">
              <svg class="modal__notify-img cta__notify-img" width="14" height="14">
                <use href="img/sprite.svg#shield"></use>
              </svg>
              <p class="modal__notify-text cta__notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
                конфиденциальность информации!
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
