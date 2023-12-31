<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Автомобильная химия - Aliance Production</title>

    <link rel="shortcut icon" href="img/favicon-light.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/fonts.css" />
  </head>
  <body>
    <div class="wrapper">
      <?php $navbar_type = "navbar_light"; include_once("./templates/navbar.php"); ?>
      <?php 
        $page_title = "Автомобильная химия";
        $header_type = "header-inside_img";
        $header_page_breadcrumb = array(
          "Главная" => "/",
          "Контрактное производство" => "/contracts.php",
          "Автомобильная химия" => "",
        );
        include('./templates/header-page.php');
        $founder_in_container = "founder_in_container";
        $founder_amount_text = 2;
        $founde_img_link = "/img/avtohim-img-1.png";
        $founder_type = "_large";
        $founder_title = "Контрактное производство <br> автомобильной химии";
        $founder_text = array(
          "Прежде всего, начало повседневной работы по формированию позиции 
          однозначно фиксирует необходимость приоритизации разума над эмоциями. 
          Кстати, представители современных социальных резервов неоднозначны и 
          будут описаны максимально подробно.",
          "Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! 
          Безусловно, постоянный количественный рост и сфера нашей активности предоставляет широкие 
          возможности для системы обучения кадров, соответствующей насущным потребностям. В целом, 
          конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в 
          формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены 
          в исключительно положительном свете. Высокий уровень вовлечения представителей целевой аудитории является 
          четким доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт предпосылки 
          для глубокомысленных рассуждений. В своём стремлении повысить качество жизни, они забывают, что дальнейшее 
          развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые 
          горизонты для поставленных обществом задач."
        );
        include('./templates/founder.php');
      ?>
      <?php include('./templates/features-slider.php');?>
      <?php 
        $info_block_full_width = "_fullWidth";
        $info_block_title = "Изготовление автохимии";
        $info_block_img_link = "/img/avtohim-img-2.png";
        $info_block_text = array(
          "Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. 
          Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, 
          а значит, должны быть ассоциативно распределены по отраслям. В своём стремлении повысить качество жизни, они забывают, 
          что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - 
          безусловно открывает новые горизонты для поставленных обществом задач.",
        );
        $category_amount = 8;
        $category_svg = array(
          "img/sprite.svg#him",
          "img/sprite.svg#car-wash",
          "img/sprite.svg#him",
          "img/sprite.svg#car-wash",
          "img/sprite.svg#brushpaint",
          "img/sprite.svg#him",
          "img/sprite.svg#brushpaint",
          "img/sprite.svg#him",
        );
        $category_text = array(
          "Полное описание товаров",
          "Актуальные цены",
          "Полное описание товаров",
          "Актуальные цены",
          "Лаки и краски",
          "Химические производства",
          "Лаки и краски",
          "Химические производства",
        );
        include('./templates/info-block.php');
      ?>
      <div class="avtohim-types">
        <div class="avtohim-types__container container">
          <div class="avtohim-types__head">
            <div class="separator"></div>
            <h2 class="avtohim-types__title title title_h2">Виды автохимии</h2>
            <p class="avtohim-types__text">
              Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. 
              Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных 
              слоев населения, а значит, должны быть ассоциативно распределены по отраслям.
            </p>
          </div>
          <ul class="avtohim-types__list">
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Антискотч</span></li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Многоцелевая смазка</span></li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Жидкий ключ</span></li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Высокотемпературная смазка</span></li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Универсальный очиститель деталей
              </span></li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Силиконовая смазка</span></li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Цепная смазка</span></li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Медная смазка</span>
            </li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Графитовая смазка</span>
            </li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Очиститель кондиционера пенный</span>
            </li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Очиститель тормозных дисков</span>
            </li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Очиститель битумных пятен</span>
            </li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Очиститель кондционера</span>
            </li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Очиститель дросельной заслонки</span>
            </li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Очиститель обивки </span>
            </li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Тефлоновая смазка</span>
            </li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Очиститель двигателя</span>
            </li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Универсальный очиститель</span>
            </li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Чернитель шин</span>
            </li>
            <li class="avtohim-types__item">
              <svg class='avtohim-types__item-img'>
                <use href='img/sprite.svg#linePrimary'></use>
              </svg>
              <span class="avtohim-types__item-text">Чернитель шин + очистка</span>
            </li>
          </ul>
        </div>
        
      </div>
      <?php include('./templates/research-center.php');?>
      <?php include('./templates/procedure.php');?>
      <?php include('./templates/clients.php');?>
      <?php include('./templates/cta.php');?>
      <?php include('./templates/footer.php');?>
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