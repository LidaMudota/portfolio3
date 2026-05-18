<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Noir Table — премиальный ресторан авторской кухни в Москве: дегустационные сеты, винная карта, private dining и камерные события.">
  <title>Noir Table — авторская гастрономия и private dining</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <a class="skip-link" href="#main">Перейти к содержанию</a>

  <header class="site-header" data-elevate>
    <nav class="nav" aria-label="Главная навигация">
      <a class="brand" href="#top" aria-label="Noir Table — на главную">
        <span class="brand__mark">NT</span>
        <span class="brand__text">Noir Table</span>
      </a>
      <button class="nav__toggle" type="button" aria-expanded="false" aria-controls="site-menu">
        <span></span><span></span><span></span>
        <span class="sr-only">Открыть меню</span>
      </button>
      <ul class="nav__list" id="site-menu">
        <li><a href="#concept">Концепция</a></li>
        <li><a href="#menu">Меню</a></li>
        <li><a href="#chef">Шеф</a></li>
        <li><a href="#private">Private dining</a></li>
        <li><a href="#reserve">Бронь</a></li>
      </ul>
      <a class="nav__cta" href="#reserve">Забронировать стол</a>
    </nav>
  </header>

  <main id="main">
    <section class="hero" id="top" aria-labelledby="hero-title">
      <div class="hero__ambient" aria-hidden="true"></div>
      <div class="container hero__grid">
        <div class="hero__content reveal">
          <p class="eyebrow">Авторская гастрономия · Москва</p>
          <h1 id="hero-title">Noir Table — вечер, в котором вкус звучит тише света.</h1>
          <p class="hero__lead">Камерный fine dining ресторан с дегустационными сетами, винной картой и private dining для тех, кто выбирает атмосферу, точность и эмоцию.</p>
          <div class="hero__actions">
            <a class="button button--primary" href="#reserve">Забронировать стол</a>
            <a class="button button--ghost" href="#menu">Смотреть меню</a>
          </div>
          <dl class="hero__stats" aria-label="Особенности Noir Table">
            <div><dt>8</dt><dd>курсов в signature set</dd></div>
            <div><dt>120+</dt><dd>позиций винной карты</dd></div>
            <div><dt>24</dt><dd>гостя в камерном зале</dd></div>
          </dl>
        </div>
        <div class="hero__visual reveal" aria-hidden="true">
          <img
            class="hero__image"
            src="assets/img/ChatGPT Image 18 мая 2026 г., 13 30 41 (2).png"
            width="1536"
            height="1024"
            alt=""
            decoding="async"
          >
        </div>
      </div>
    </section>

    <section class="section concept" id="concept" aria-labelledby="concept-title">
      <div class="container section__grid section__grid--split">
        <div class="section__intro reveal">
          <p class="eyebrow">Концепция ресторана</p>
          <h2 id="concept-title">Тёмная эстетика, спокойный сервис и кухня, построенная вокруг сезона.</h2>
        </div>
        <div class="concept__copy reveal">
          <p>Noir Table соединяет авторские техники, локальные продукты и тихую театральность подачи. Здесь нет случайных деталей: свет, музыка, текстуры и темп ужина работают как единая композиция.</p>
          <p>Формат подходит для романтического вечера, деловой встречи, камерного праздника и гастрономического знакомства с новым меню шефа.</p>
        </div>
      </div>
    </section>

    <section class="section menu" id="menu" aria-labelledby="menu-title">
      <div class="container">
        <div class="section__header reveal">
          <p class="eyebrow">Меню и сеты</p>
          <h2 id="menu-title">Выберите свой сценарий вечера.</h2>
          <a class="text-link" href="#reserve">Выбрать дегустационный сет</a>
        </div>
        <div class="cards cards--three">
          <article class="flip-card reveal" data-tilt-card>
            <div class="flip-card__inner">
              <div class="flip-card__face flip-card__front">
                <span class="card__tag">Signature</span>
                <h3>Дегустационный сет</h3>
                <p>8 курсов: дым, ферментация, соусы на выдержанных бульонах и финал с горьким шоколадом.</p>
              </div>
              <div class="flip-card__face flip-card__back">
                <h3>Noir Set</h3>
                <p>Подаётся с 18:00. Возможна винная или безалкогольная pairing-программа.</p>
                <a class="text-link" href="#reserve">Забронировать стол</a>
              </div>
            </div>
          </article>
          <article class="flip-card reveal" data-tilt-card>
            <div class="flip-card__inner">
              <div class="flip-card__face flip-card__front">
                <span class="card__tag">À la carte</span>
                <h3>Авторское меню</h3>
                <p>Тартар с копчёным желтком, палтус с шампань-соусом, утка с бордо и сезонные овощи.</p>
              </div>
              <div class="flip-card__face flip-card__back">
                <h3>Меню вечера</h3>
                <p>Состав обновляется по сезону, чтобы сохранять свежесть продукта и точность вкуса.</p>
                <a class="text-link" href="#gallery">Смотреть галерею</a>
              </div>
            </div>
          </article>
          <article class="flip-card reveal" data-tilt-card>
            <div class="flip-card__inner">
              <div class="flip-card__face flip-card__front">
                <span class="card__tag">Wine & Bar</span>
                <h3>Винная карта</h3>
                <p>Старый Свет, малые хозяйства, редкие игристые и коктейли на травах, специях и вермуте.</p>
              </div>
              <div class="flip-card__face flip-card__back">
                <h3>Pairing</h3>
                <p>Сомелье подберёт сопровождение под сет, настроение вечера и гастрономические предпочтения.</p>
                <a class="text-link" href="#reserve">Смотреть меню</a>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="section chef" id="chef" aria-labelledby="chef-title">
      <div class="container chef__grid">
        <div class="chef__portrait reveal" role="img" aria-label="Абстрактный портрет шеф-повара Noir Table"></div>
        <div class="chef__content reveal">
          <p class="eyebrow">Шеф-подход</p>
          <h2 id="chef-title">Каждый курс начинается не с рецепта, а с напряжения между продуктом, техникой и памятью.</h2>
          <p>Шеф Noir Table строит меню как последовательность ощущений: минеральность, дым, кислота, сливочность, горечь и долгий финал. Гость не просто пробует блюда — он проходит маршрут.</p>
          <ul class="chef__list">
            <li>сезонные продукты и ручные заготовки;</li>
            <li>открытая коммуникация с гостем у chef’s table;</li>
            <li>деликатная адаптация под ограничения питания.</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="section private" id="private" aria-labelledby="private-title">
      <div class="container">
        <div class="section__header reveal">
          <p class="eyebrow">Private dining и события</p>
          <h2 id="private-title">Организуйте вечер, который выглядит как закрытая премьера.</h2>
        </div>
        <div class="cards cards--three">
          <article class="depth-card reveal" data-tilt-card>
            <span class="card__tag">Private room</span>
            <h3>Закрытый ужин</h3>
            <p>Отдельная зона для переговоров, семейного события или предложения, где сервис остаётся незаметным.</p>
          </article>
          <article class="depth-card reveal" data-tilt-card>
            <span class="card__tag">Events</span>
            <h3>Мероприятия</h3>
            <p>Коктейльный welcome, сет-меню, винное сопровождение и сценарий света под формат вечера.</p>
          </article>
          <article class="depth-card reveal" data-tilt-card>
            <span class="card__tag">Chef’s table</span>
            <h3>Ужин у шефа</h3>
            <p>Гастрономическая беседа, открытая подача и индивидуальный темп для небольшой компании.</p>
          </article>
        </div>
        <div class="private__action reveal">
          <a class="button button--primary" href="#reserve">Организовать вечер</a>
        </div>
      </div>
    </section>

    <section class="section testimonials" aria-labelledby="testimonials-title">
      <div class="container">
        <div class="section__header reveal">
          <p class="eyebrow">Отзывы гостей</p>
          <h2 id="testimonials-title">Вымышленные впечатления для демонстрации сценариев.</h2>
        </div>
        <div class="testimonials__grid">
          <blockquote class="quote reveal">
            <p>«Сет ощущается как цельный фильм: тихое начало, сильная середина и послевкусие, о котором говоришь по дороге домой.»</p>
            <cite>Гость private dining</cite>
          </blockquote>
          <blockquote class="quote reveal">
            <p>«Идеальный баланс: ресторан выглядит дорого, но не холодно. Команда слышит гостя и не перегружает вниманием.»</p>
            <cite>Гостья вечернего зала</cite>
          </blockquote>
        </div>
      </div>
    </section>

    <section class="section reserve" id="reserve" aria-labelledby="reserve-title">
      <div class="container reserve__grid">
        <div class="reserve__content reveal">
          <p class="eyebrow">Бронирование</p>
          <h2 id="reserve-title">Забронируйте стол или обсудите закрытый вечер.</h2>
          <p>Оставьте запрос: администратор Noir Table уточнит дату, количество гостей, формат и предпочтения по сету или wine pairing.</p>
          <div class="contact-card">
            <a href="tel:+74950004455">+7 (495) 000-44-55</a>
            <a href="mailto:reserve@noirtable.demo">reserve@noirtable.demo</a>
            <span>г. Москва, ул. Вечерняя, 8</span>
          </div>
        </div>
        <form class="reserve__form reveal" action="#" method="post" aria-label="Форма бронирования Noir Table">
          <label>Имя
            <input type="text" name="name" placeholder="Как к вам обращаться" autocomplete="name">
          </label>
          <label>Телефон
            <input type="tel" name="phone" placeholder="+7 ___ ___-__-__" autocomplete="tel">
          </label>
          <label>Формат вечера
            <select name="occasion">
              <option>Дегустационный сет</option>
              <option>Стол в основном зале</option>
              <option>Private dining</option>
              <option>Мероприятие</option>
            </select>
          </label>
          <label>Комментарий
            <textarea name="message" rows="4" placeholder="Дата, количество гостей, пожелания"></textarea>
          </label>
          <button class="button button--primary" type="submit">Забронировать стол</button>
        </form>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container footer__grid">
      <div>
        <a class="brand" href="#top" aria-label="Noir Table — наверх">
          <span class="brand__mark">NT</span>
          <span class="brand__text">Noir Table</span>
        </a>
        <p>Премиальный ресторан авторской кухни. Демонстрационный проект.</p>
      </div>
      <div>
        <h2>Часы работы</h2>
        <p>Пн–Чт: 18:00–00:00<br>Пт–Сб: 18:00–02:00<br>Вс: 17:00–23:00</p>
      </div>
      <div>
        <h2>Контакты</h2>
        <p><a href="tel:+74950004455">+7 (495) 000-44-55</a><br><a href="mailto:reserve@noirtable.demo">reserve@noirtable.demo</a><br>г. Москва, ул. Вечерняя, 8</p>
      </div>
    </div>
  </footer>

  <script src="assets/js/main.js" defer></script>
</body>
</html>
