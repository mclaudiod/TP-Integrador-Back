<header id="conferencia">
    <nav id="nav" class="navbar bg-dark navbar-expand-xl fixed-top container-fluid" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand col-6 col-md-4 col-xl-2 fs-5" href="#">
                <img src="/public/build/img/codoacodo.png" alt="Logo" class="w-50 img-fluid">
                Conf Bs As
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav fs-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#conferencia">La conferencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#oradores">Los oradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lugar">El lugar y fecha</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#convertirse">Conviértete en orador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="" data-bs-toggle="modal" data-bs-target="#ticketModal">Comprar tickets</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carousel" class="carousel carousel-dark slide d-flex vh-100 bg-black align-items-center justify-content-end bg-opacity-50" data-bs-ride="carousel">
        <div class="container-fluid text-white m-0 me-md-5 col-lg-5 text-end">
            <h1 class="fw-semibold">Conf Bs As</h1>
            <p class="fs-5">Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. ¡Te esperamos!</p>
            <div class="d-flex justify-content-end column-gap-3">
                <a role="button" class="btn btn-outline-light" href="#convertirse">Quiero ser orador</a>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ticketModal">Comprar tickets</button>
            </div>
        </div>

        <div class="carousel-inner position-absolute vh-100 z-n1">
            <div class="carousel-item active">
                <img src="/public/build/img/ba1.jpg" class="d-block carousel-img" alt="Imagen Buenos Aires 1">
            </div>
            <div class="carousel-item">
                <img src="/public/build/img/ba2.jpg" class="d-block carousel-img" alt="Imagen Buenos Aires 2">
            </div>
            <div class="carousel-item">
                <img src="/public/build/img/ba3.jpg" class="d-block carousel-img" alt="Imagen Buenos Aires 3">
            </div>
        </div>
    </div>
</header>

<?php include_once __DIR__ . "/buytickets.php"; ?>

<main id="oradores">
    <div class="container mt-4">
        <div class="text-uppercase text-center">
            <p class="mb-0 text-secondary">Conoce a los</p>
            <h2 class="mt-0 fw-semibold">Oradores</h2>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card h-100">
                    <img src="/public/build/img/steve.jpg" class="card-img-top mb-2" alt="Imagen Steve Jobs">
                    <div class="card-body">
                        <span class="badge text-bg-warning">JavaScript</span>
                        <span class="badge text-bg-info text-white">React</span>
                        <h5 class="card-title fw-semibold">Steve Jobs</h5>
                        <p class="card-text mt-3 lh-lg">Fue un empresario, diseñador industrial, magnate empresarial, propietario de medios e inversor estadounidense. Fue cofundador y presidente ejecutivo de Apple y máximo accionista individual de The Walt Disney Company.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card h-100">
                    <img src="/public/build/img/bill.jpg" class="card-img-top mb-2" alt="Imagen Bill Gates">
                    <div class="card-body">
                        <span class="badge text-bg-warning">JavaScript</span>
                        <span class="badge text-bg-info text-white">React</span>
                        <h5 class="card-title fw-semibold">Bill Gates</h5>
                        <p class="card-text mt-3 lh-lg">Es un magnate empresarial, desarrollador de software, inversor, autor y filántropo estadounidense. Es cofundador de Microsoft. Fue uno de los principales empresarios de la revolución de las microcomputadoras de las décadas de 1970 y 1980.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <img src="/public/build/img/ada.jpeg" class="card-img-top mb-2" alt="Imagen Ada Lovelace">
                    <div class="card-body">
                        <span class="badge text-bg-secondary">Negocios</span>
                        <span class="badge text-bg-danger">Startups</span>
                        <h5 class="card-title fw-semibold">Ada Lovelace</h5>
                        <p class="card-text mt-3 lh-lg">Fue una matemática y escritora británica, célebre sobre todo por su trabajo acerca de la computadora mecánica de uso general de Charles Babbage. Se la considera como la primera programadora de ordenadores.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<section id="lugar">
    <div class="bg-dark d-flex flex-column flex-xl-row mt-4">
        <div class="col-xl-6">
            <img class="img-fluid" src="/public/build/img/honolulu.jpg" alt="Imagen Honolulu">
        </div>

        <div class="text-white m-3">
            <h2 class="fw-semibold">Bs As - Octubre</h2>
            <p class="lh-lg">Buenos Aires es la provincia y localidad más grande del estado de Argentina. En los Estados Unidos Honolulu es la más sureña de entre las más principales ciudades estadonidenses. Aunque el nombre de Honolulu se refiere al área urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado una ciudad-condado consolidada que cubre toda la ciudad (aproximadamente 600km2 de superficie).</p>
            <button type="button" class="btn btn-outline-light">Conocé más</button>
        </div>
    </div>
</section>

<section id="convertirse">
    <div class="container col-xxl-6 col-xl-8 col-lg-10 col-12 mx-auto my-4">
        <div class="text-center">
            <p class="text-uppercase mb-0 text-secondary">Conviértete en un</p>
            <h2 class="text-uppercase mt-0 fw-semibold">Orador</h2>
            <p class="mb-2">Anótate como orador para dar una <abbr title="Ignite es un evento de charlas ultrarrápidas de 5 minutos exactos, apoyadas por 20 transparencias programadas para avanzar cada 15 segundos.">charla ignite</abbr>. ¡Cuéntanos de qué quieres hablar!</p>
        </div>

        <form class="d-flex flex-column" id="messageForm" method="POST" action="/">
            <div class="row">
                <div class="col-lg mb-3">
                    <label type="hidden" for="name" class="form-label d-none"></label>
                    <input type="text" class="form-control val-message" id="name" placeholder="Nombre" aria-describedby="validationNameMessage" required>
                    <div id="validationNameMessage" class="invalid-feedback">Por favor escriba un nombre válido.</div>
                </div>

                <div class="col-lg mb-3">
                    <label type="hidden" for="surname" class="form-label d-none"></label>
                    <input type="text" class="form-control val-message" id="surname" placeholder="Apellido" aria-describedby="validationSurnameMessage" required>
                    <div id="validationSurnameMessage" class="invalid-feedback">Por favor escriba un apellido válido.</div>
                </div>
            </div>

            <div class="mb-3">
                <label type="hidden" for="textarea" class="form-label d-none"></label>
                <textarea class="form-control fs-5 val-message" id="textarea" rows="3" aria-describedby="textHelp validationMessage" placeholder="¿Sobre qué quieres hablar?" required></textarea>
                <div id="textHelp" class="form-text">Recuerda incluir un título para tu charla</div>
                <div id="validationMessage" class="invalid-feedback">Por favor escriba un tema válido.</div>
            </div>

            <button type="submit" class="btn btn-success fs-5 p-2" id="submitMessage" name="send-message" disabled>Enviar</button>
        </form>
    </div>
</section>

<?php if ($gotTicket === true) { ?>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Compra Realizada</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                ¡Tu compra se ha realizado con éxito!
            </div>
        </div>
    </div>
<?php }; ?>

<?php if ($ticketError === true) { ?>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Error en la Compra</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hubo un error al procesar tu compra... Por favor vuelva a intentarlo.
            </div>
        </div>
    </div>
<?php }; ?>

<?php if ($messageSent === true) { ?>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Mensaje Enviado</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                ¡Ya estás anotado como orador!
            </div>
        </div>
    </div>
<?php }; ?>