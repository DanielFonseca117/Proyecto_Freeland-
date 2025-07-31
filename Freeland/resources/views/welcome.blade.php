
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freeland</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="principal_container">
        <!-- Header -->
        <div class="seccion_uno">
            <header>
                <!-- Logo -->
                <div class="contLogo">
                    <img class="logo" src="{{ asset('images/logo.png') }}" 
                    style="height: 50px; width: auto; margin-top: -30px;"alt="Logo Freeland">
                    <h1>Freeland</h1>
                </div>

                <!-- Menú -->
                <nav class="menu_usuario">
                    <ul>
                        <li><a class="boton_header_text" href="{{ route('login') }}">Login</a></li>
                        <li><a class="boton_header_text" href="{{ route('register') }}">Sign up</a></li>
                    </ul>
                </nav>
            </header>

            <!-- Imagen principal -->
            <div class="seccion_uno_img">
                <img src="{{ asset('app/vistas/dist/img/fondo.jpg') }}" alt="Imagen principal">
            </div>
        </div>

        <!-- Sección 2: ¿Qué es Freeland? -->
        <div class="section_2">
            <div class="section_2_container">
                <div class="EVA_description">
                    <h1>¿Qué es Freeland?</h1>
                    <br>
                    <p>
                        Freeland es una plataforma digital diseñada para empoderar a los trabajadores independientes,
                        permitiéndoles crear una presencia profesional en línea sin necesidad de conocimientos técnicos.
                        Su propósito es facilitar la promoción, gestión y prestación de servicios a través de herramientas accesibles,
                        eficientes e intuitivas.
                    </p>
                </div>
            </div>
        </div>

        <!-- Sección 3: Características -->
        <div class="section_3">
            <div class="section_3_container">
                <div class="Caracteristicas">
                    <h1>Características</h1>
                    <br>
                    <p>
                        • Creación de páginas personalizadas <br>
                        • Videollamadas grabables <br>
                        • Clases y espacios interactivos de aprendizaje <br>
                        • Gestión de clientes y reservas <br>
                        • Multiperfil profesional <br>
                        • Accesibilidad y facilidad de uso <br><br>
                    </p>
                </div>
            </div>
        </div>

        <!-- Sección 4: Misión, Visión, Objetivos -->
        <div class="section_2">
            <div class="section_2_container">
                <div class="MVO_description">
                    <h1>Misión</h1>
                    <p>
                        Empoderar a los trabajadores independientes mediante una plataforma digital intuitiva,
                        flexible y profesional, que les permita construir su marca personal,
                        gestionar eficientemente sus servicios y conectar con sus clientes a nivel global.
                        Freeland busca democratizar el acceso a herramientas tecnológicas,
                        reduciendo barreras técnicas y económicas,
                        y fortaleciendo el crecimiento del trabajo autónomo en el entorno digital.
                    </p>
                    <br>

                    <h1>Visión</h1>
                    <p>
                        Ser la plataforma líder en transformación digital para freelancers en América Latina y el mundo,
                        reconocida por su innovación, facilidad de uso y capacidad de adaptarse a múltiples profesiones.
                        Aspiramos a convertirnos en el puente entre el talento independiente y las oportunidades globales,
                        promoviendo el desarrollo profesional, la educación continua y el emprendimiento digital.
                    </p>
                    <br>

                    <div class="objetivo">
                        <h1>Objetivos</h1>
                        <p class="objetivos">
                            • Facilitar la creación de presencia digital profesional sin conocimientos técnicos <br>
                            • Optimizar la gestión de servicios, reservas y comunicación con clientes <br>
                            • Fomentar el aprendizaje y la enseñanza virtual como medio de crecimiento profesional <br>
                            • Apoyar la inclusión digital de trabajadores independientes en economías emergentes <br>
                            • Convertirse en un ecosistema confiable y sostenible para el trabajo freelance <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <p>Para más información o preguntas, contáctanos en 
                <a href="mailto:iaevaia2024@gmail.com">IAevaIA2024@gmail.com</a>
            </p>
            <a href="https://www.privacypolicies.com/live/5deb296f-ca6f-45b4-9d33-cfb6e850fae7">
                Política de privacidad
            </a>
            <p>© Copyright - Todos los derechos de autor reservados</p>
        </footer>
    </div>
</body>
</html>
