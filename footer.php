<section class="section calltoaction">

    <div class="bg-gray section-cta">
      <img class="cta-image" src="img/cta.png" alt="call to action">

      <div class="cta-form-wrapper container">
        <form class="cta-form" method="POST" action="handler.php">
          <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
          <p class="cta-form-text">
            Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже
            в
            самых сложных случаях!
          </p>
      
          <div class="input-group-wrapper">
            <div class="input-group">
              <input class="input" id="user-name" type="text" name="username" placeholder=" " maxlength="100" required>
              <label class="input-group-label" for="user-name">Имя</label>
            </div>
            <!-- /.input-group -->
      
            <div class="input-group">
              <input class="input" id="user-phone" type="tel" name="userphone" placeholder=" " maxlength="30" required>
              <label class="input-group-label" for="user-phone">+_ (___) __-__-___</label>
            </div>
            <!-- /.input-group -->
          </div>
          <!-- /.input-group-wrapper -->
      
          <div class="cta-form-footer">
            <button class="button cta-form-button" type="submit">Отправить заявку</button>
            <div class="cta-notification">
              <svg class="cta-notification-icon" width="14" height="14">
                <use href="img/sprite.svg#shield"></use>
              </svg>
              <p class="cta-notification-text">
                Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
          <!-- /.calltoaction-form-footer -->
      
        </form>
      </div>
      <!-- /.calltoaction-form-wrapper -->
    </div>
    <!-- /.bg-gray section-cta -->

  </section>
  <!-- /.section calltoaction -->

  <footer class="footer">
    <div class="container">
      
      <div class="footer-top">
        <svg class="footer-logo">
          <use href="img/sprite.svg#logo"></use>
        </svg>
        <a class="footer-phone" href="tel:+79996861014">+7 (999) 686-10-14</a>

        <div class="footer-info">
          <div class="footer-info-address">
            <svg class="footer-info-icon-mark" width="24" height="24">
              <use href="img/sprite.svg#mark"></use>
            </svg>
            <address>г. Мосвка, Холодильный пер. 4к1с8</address>
          </div>
          <div class="footer-info-email">
            <svg class="footer-info-icon-mail" width="24" height="24">
              <use href="img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru">a.dragunov@tdaliance.ru</a>
          </div>
        </div>
        <!-- /.footer-info -->

        <div class="footer-socials">
          <a class="footer-socials-link" href="#">
            <svg class="footer-socials-icon" width="24" height="24">
              <use href="img/sprite.svg#vk"></use>
            </svg>
          </a>
          <a class="footer-socials-link" href="#">
            <svg class="footer-socials-icon" width="24" height="24">
              <use href="img/sprite.svg#inst"></use>
            </svg>
          </a>
        </div>
        <!-- /.footer-social -->

      </div>
      <!-- /.footer-top -->
    </div>
    <!-- /.container -->

    <div class="footer-seporator"></div>
    <!-- /.footer-seporator -->

    <div class="container">
      <div class="footer-bottom">

        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title">Контрактное производство</h2>
          <ul class="footer-menu-list footer-menu-columns-2">
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="#">Автомобильная химия</a>
            </li>
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="#">Бытовая химия</a>
            </li>
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="#">Дезинфицирующие средства</a>
            </li>
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="#">Пищевые аэрозоли</a>
            </li>
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="#">Косметическая продукция</a>
            </li>
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="#">Краски аэрозольные</a>
            </li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->

        <div class="footer-menu-wrapper footer-menu-wrapper-2">
          <h2 class="footer-menu-title">Собственные марки</h2>
          <ul class="footer-menu-list">
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="#">Автохимия AG-Tech</a>
            </li>
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="#">Автохимия AP</a>
            </li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->

        <div class="footer-menu-wrapper footer-menu-wrapper-3">
          <ul class="footer-menu-list footer-menu-list-bottom">
            <li class="footer-menu-item footer-menu-item-mb">
              <a class="footer-menu-link footer-menu-link-bold" href="#">О компании</a>
            </li>
            <li class="footer-menu-item footer-menu-item-mb">
              <a class="footer-menu-link footer-menu-link-bold" href="#">Новости</a>
            </li>
            <li class="footer-menu-item footer-menu-item-mb">
              <a class="footer-menu-link footer-menu-link-bold" href="#">Контакты</a>
            </li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->

      </div>
      <!-- /.footer-bottom -->
    </div>
    <!-- /.container -->

    <div class="footer-seporator"></div>
    <!-- /.footer-seporator -->

    <div class="container">
      <div class="footer-wrapper">
        <div class="footer-legal">
          <p class="footer-copyright">
            &copy; <?php echo date('d.m.Y') ?> «Aliance Production». Все права защищены.
          </p>
          <a class="footer-policy" href="#">Политики конфиденциальности</a>
        </div>
        <div class="footer-author">
          <span class="made-in made-in-desctop">Сделано в</span>
          <span class="made-in made-in-mobile">Дизайн и разработка:</span>
          <svg class="made-in-icon" width="52" height="11">
            <use href="img/sprite.svg#ruso"></use>
          </svg>
        </div>
        <!-- /.footer-author -->
        <!-- /.footer-legal -->
      </div>
      <!-- /.footer-wrapper -->
    </div>
    <!-- /.container -->
  </footer>
  <!-- /.footer -->