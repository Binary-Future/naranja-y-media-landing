<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="shortcut icon"
      type="image/png"
      href="./images/piezas/favicon.png"
    />
    <title>Naranja y Media</title>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/mobileMenu.css" />
    <!-- owlcarousel -->
    <link rel="stylesheet" href="./owlcarousel/assets/owl.carousel.min.css" />
    <link
      rel="stylesheet"
      href="./owlcarousel/assets/owl.theme.default.min.css"
    />
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-173797720-1"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-173797720-1");
    </script>
  </head>

  <body>
    <div class="wspButton wspOrangeCircle">
      <a href="https://wa.me/+573043358981" target="_blank"
        ><i class="fab fa-whatsapp"></i
      ></a>
    </div>

    <!-- header -->

    <header>
      <nav class="topnav">
        <ul class="navItemns" id="myLinks">
          <li><a href="#startup">STARTUP</a></li>
          <li><a href="#whatWeDo">LO QUE HACEMOS</a></li>
          <li>
            <div class="dropdown">
              <a href="#solutions">
                SOLUCIONES
                <i class="fa fa-caret-down smallArrowIcon"></i>
              </a>
              <div class="dropdown-content">
                <div class="dropItemContainer">
                  <a href="#loyalty">FIDELIZACIÓN</a>
                  <a href="#successStories">CASOS DE ÉXITO</a>
                </div>
              </div>
            </div>
          </li>

          <li><a href="#team">TEAM</a></li>
          <li><a href="#letsTalk">HABLEMOS</a></li>
        </ul>
        <ul class="navSocial navSocialTop">
          <a
            target="_blank"
            href="https://www.linkedin.com/company/naranjaymedia"
            ><i class="fab fa-linkedin-in"></i
          ></a>
          <a
            target="_blank"
            href="https://instagram.com/naranjaymediacol?igshid=kr7w3olevtju"
            ><i class="fab fa-instagram"></i
          ></a>
        </ul>
        <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
          <i class="fa fa-bars"></i>
        </a>
      </nav>

      <div class="heroContainer" data-aos="fade-in">
        <img src="images/ALBERT.png" class="albertImg" alt="albert-image" />
        <div class="titleHeader">
          <h1 class="title"><b>Naranja & Media</b></h1>
          <h2 class="subtitle">growth marketing</h2>
        </div>
        <a class="downArrowContainer" href="#startup">
          <div class="downArrow">
            <img src="./images/icons/down-arrow.svg" />
          </div>
        </a>
      </div>
    </header>

    <!-- startup -->

    <section id="startup" class="startupContainer">
      <div class="orangeCircle startUpIcon">
        <img src="./images/icons/crown.svg" alt="corona" />
      </div>

      <h1 class="mainTitle">StartUp Digital</h1>

      <div class="leyendContainer">
        <blockquote>
          <p class="startupLegend">
            Somos el Partner ideal de aquellas organizaciones que buscan
            transformarse y ser los Reyes del Marketing Digital.
          </p>
        </blockquote>
      </div>

      <div class="startupText" data-aos="fade-in">
        <p>
          Creamos Estrategias usando los mejores aceleradores de Inbound
          Marketing, generando propuestas de valor disruptivas que logren
          fidelizar, atraer nuevo público monetizando tu producto o servicio.
        </p>
        <p>
          Nos especializamos en transformar digitalmente los segmentos de
          empresas B2B y B2C acompañadolas en este proceso de aceleración,
          potenciando los productos o servicios en diferentes canales de venta.
        </p>
      </div>

      <div class="startupCrown">
        <img src="./images/piezas/corona marca de agua.png" alt="" />
      </div>
    </section>

    <!-- lo que hacemos -->

    <section id="whatWeDo" class="whatWeDoContainer">
      <div class="orangeCircle borderIconWhatWeDo">
        <img src="./images/icons/app.svg" alt="corona" />
      </div>
      <h1 class="mainTitle whatWeDoTitle">Lo que hacemos</h1>
      <p class="whatWeDoLegend">
        Nutrimos tu marca de manera creativa en los siguientes frentes:
      </p>
      <div class="whatWeDoItemList" data-aos="fade-in">
        <div class="whatWeDoItem">
          <img src="./images/icons/vitamin.svg" alt="vitamin" />
          <h1 class="whatWeDoItem-title">CAMPAÑAS DIGITALES</h1>
          <p>
            Creamos estrategias disruptivas usando los mejores formatos y
            canales para los segmentos B2B y B2C.
          </p>
        </div>
        <div class="whatWeDoItem">
          <img src="./images/icons/marketing.svg" alt="vitamin" />
          <h1 class="whatWeDoItem-title">COMUNICACIÓN DIGITAL</h1>
          <p>
            Realizamos contenidos ágiles, especializados y social media para tu
            marca, producto o servicio.
          </p>
        </div>
        <div class="whatWeDoItem">
          <img src="./images/icons/start-button.svg" alt="vitamin" />
          <h1 class="whatWeDoItem-title">AUTOMATIZACIÓN Y CRM</h1>
          <p>
            Desarrollamos e Implementamos plataformas de e-commerce,
            fidelización, Apps, people analytics y CRM.
          </p>
        </div>
        <div class="whatWeDoItem">
          <img src="./images/icons/money.svg" alt="vitamin" />
          <h1 class="whatWeDoItem-title">CONVERSION RATE OPTIMIZATION</h1>
          <p>
            Innovamos mediante técnicas de Inbound Marketing para lograr la
            mejor perfomance, leads calificados y Boost sales.
          </p>
        </div>
      </div>
    </section>

    <!-- apps -->

    <section id="solutions" class="appsContainer">
      <div class="appsTextContainer">
        <h1 class="mainTitle appsTitle">
          Nuestras Soluciones Digitales - Apps
        </h1>
        <p class="appsText">
          Desarrollamos aplicaciones first mobile con nuestro partner
          estratégico Binary Future para los sistemas Android y iOs con usos a
          medida y comerciales, además te ayudamos a monetizarla y generar
          cualquiera de los diferentes tipos de integración.
        </p>
      </div>
    </section>

    <!-- fidelizacion -->

    <section id="loyalty" class="loyaltyContainer">
      <img src="./images/piezas/pieza-loyalty.png" alt="" />
      <div class="loyaltyTextContainer">
        <h1 class="loyaltyTitle">
          Tecnologías de fidelización de clientes
        </h1>
        <p class="loyaltyText">
          Desarrollamos software de loyalty para la implementación de
          plataformas especializadas en planes de fidelización, personalizables
          y escalables.
        </p>
      </div>
    </section>

    <!-- team -->

    <section id="team" class="teamContainer">
      <h1 class="mainTitle mainTitleTeam">
        Team de profesionales Naranja & Media
      </h1>
      <h2 class="teamLegend">
        "El futuro no está por venir... ya llegó para quedarse en un formato
        100% Digital"
      </h2>
      <p class="teamLegendAutors">Philip Kotler + Naranja & Media</p>
      <div
        id="owl-one"
        class="owl-carousel owl-theme owl-loaded carousel"
        data-aos="fade-in"
      >
        <div class="owl-stage-outer">
          <div class="owl-stage">
            <div class="owl-item carouselItem">
              <div class="teamMember">
                <div class="orangeCircle">
                  <img src="./images/team/foto Diana.png" alt="avatar" />
                </div>
                <h1 class="teamMemberTextOne">
                  Especialista Publicidad y Growth Marketing
                </h1>
                <h1 class="teamMemberTextTwo">DIANA JUNCO</h1>
                <p class="teamMemberTextThree">
                  Founder & Director Colombia
                </p>
              </div>
            </div>
            <div class="owl-item carouselItem">
              <div class="teamMember">
                <div class="orangeCircle">
                  <img src="./images/team/foto Diego.png" alt="avatar" />
                </div>
                <h1 class="teamMemberTextOne">
                  Especialista en Marketing Estratégico
                </h1>
                <h1 class="teamMemberTextTwo">DIEGO CASTRO</h1>
                <p class="teamMemberTextThree">
                  Director Argentina
                </p>
              </div>
            </div>
            <div class="owl-item carouselItem">
              <div class="teamMember">
                <div class="orangeCircle">
                  <img src="./images/team/foto nahuel.png" alt="avatar" />
                </div>
                <h1 class="teamMemberTextOne">
                  Lic. en Comercio Internacional
                </h1>
                <h1 class="teamMemberTextTwo">NAHUEL PAILOS</h1>
                <p class="teamMemberTextThree">
                  Sales Director Argentina
                </p>
              </div>
            </div>
            <div class="owl-item carouselItem">
              <div class="teamMember">
                <div class="orangeCircle">
                  <img src="./images/team/foto laura.png" alt="avatar" />
                </div>
                <h1 class="teamMemberTextOne">
                  Lic. En Publicidad y Diseño
                </h1>
                <h1 class="teamMemberTextTwo">LAURA GUAYARA</h1>
                <p class="teamMemberTextThree">
                  Art Director
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- casos de exito -->

    <section id="successStories" class="successStoriesContainer columnCentered">
      <h1 class="successStoriesTitle">CASOS DE ÉXITO</h1>
      <div
        id="owl-two"
        class="owl-carousel owl-theme owl-loaded carousel"
        data-aos="fade-in"
      >
        <div class="owl-stage-outer">
          <div class="owl-stage">
            <div class="owl-item carouselItem">
              <div class="succesItem">
                <h1 class="succesItem-text">
                  Logré transformar y desarrollar canales de venta digitales
                  efectivos para mi tienda de ropa, además del acompañamiento
                  para lanzar las campañas de nuevos productos.
                </h1>
                <hr />
                <h1 class="succesItem-name">NOELIA GROTTESCHI</h1>
                <p class="succesItem-job">Fundadora de cherrymint.com.ar</p>
              </div>
            </div>
            <div class="owl-item carouselItem">
              <div class="succesItem">
                <h1 class="succesItem-text">
                  Gracias a la estrategia de Growth Marketing logramos conectar
                  a más de 10.000 personas en tiempo record y sumar apoyo
                  económico para el desarrollo de campaña con Embotéllate.
                </h1>
                <hr />
                <h1 class="succesItem-name">WILLIAM VERDUGO</h1>
                <p class="succesItem-job">CEO de Embotéllate</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- nuestros clientes -->

    <section id="customers" class="customersContainer columnCentered">
      <h1 class="mainTitle customersMainTitle">
        Algunos de nuestros clientes
      </h1>
      <div class="customersGrid">
        <div class="img-container">
          <img
            data-aos="fade-in"
            src="./images/logos-clientes/cherry.png"
            alt=""
          />
        </div>

        <div class="img-container">
          <img
            data-aos="fade-in"
            src="./images/logos-clientes/prana.png"
            alt=""
          />
        </div>

        <div class="img-container">
          <img
            data-aos="fade-in"
            src="./images/logos-clientes/camara-de-comercio.png"
            alt=""
          />
        </div>

        <div class="img-container">
          <img
            data-aos="fade-in"
            src="./images/logos-clientes/colperu.png"
            alt=""
          />
        </div>

        <div class="img-container">
          <img
            data-aos="fade-in"
            src="./images/logos-clientes/uniempresarial.png"
            alt=""
          />
        </div>

        <div class="img-container">
          <img
            data-aos="fade-in"
            src="./images/logos-clientes/rosen.png"
            alt=""
          />
        </div>

        <div class="img-container">
          <img
            data-aos="fade-in"
            src="./images/logos-clientes/zona-franca.png"
            alt=""
          />
        </div>

        <div class="img-container">
          <img
            data-aos="fade-in"
            src="./images/logos-clientes/otro sur.png"
            alt=""
          />
        </div>
      </div>
    </section>

    <div class="backgroundFooter">
      <!-- hablemos -->

      <section id="letsTalk" class="letsTalkContainer columnCentered">
        <h1 class="mainTitle letsTalkMainTitle">
          Hablemos
        </h1>
        <p class="letsTalkText">
          Déjanos tus datos y nos comunicaremos contigo a la brevedad
        </p>
        <form class="columnCentered inputContainer">
          <input
            id="nombre"
            class="formInput"
            type="text"
            required
            placeholder="Tu nombre"
          />
          <input
            id="email"
            class="formInput"
            type="email"
            required
            placeholder="Aquí tu email"
          />
          <input
            id="movil"
            class="formInput"
            type="tel"
            required
            placeholder="Móvil"
          />
          <textarea
            id="mensaje"
            class="formInput"
            type="textarea"
            required
            placeholder="Déjanos tu mensaje"
            rows="60"
          ></textarea>
          <small id="errorMessage" class="error-message d-none"
            >Todos los campos son obligatorios</small
          >
          <button id="formButton" class="formButton">
            <div id="send-status" class="d-none">
              <i class="fas fa-circle-notch fa-spin"></i> Enviando...
            </div>

            <div id="send">
              Enviar
            </div>
          </button>
        </form>
      </section>

      <!-- footer -->

      <footer class="footerContainer">
        <div class="firstLineFooter">
          <h1>Naranja & Media</h1>
          <ul class="navSocial">
            <a
              target="_blank"
              href="https://www.linkedin.com/company/naranjaymedia"
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a
              target="_blank"
              href="https://instagram.com/naranjaymediacol?igshid=kr7w3olevtju"
              ><i class="fab fa-instagram"></i
            ></a>
          </ul>
        </div>
        <div class="footerInfoTextPosition">
          <div class="footerInfoText">
            <p>Llerena 3150,</p>
            <p>Parque Chas, CABA, Argentina</p>
            <p>naranjamasmedia@gmail.com</p>
          </div>
          <div class="footerInfoText">
            <p>WeWork,</p>
            <p>Calle 93 # 19-55, Bogotá, Colombia</p>
            <p>naranjamasmedia@gmail.com</p>
          </div>
        </div>
        <div class="footerBrand">
          <h1>© 2020 Naranja & Media. All rights reserved</h1>
        </div>
      </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./owlcarousel/owl.carousel.min.js"></script>
    <script src="./scripts/owlcarousel.js"></script>
    <script src="./scripts/scroll.js"></script>
    <script src="./scripts/aos.js"></script>
    <script src="./scripts/form.js"></script>
    <script src="./scripts/mobileMenu.js"></script>
  </body>
</html>
