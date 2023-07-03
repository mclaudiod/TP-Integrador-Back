<main class="flex-grow-1">
    <form class="d-flex flex-column container col-xxl-6 col-xl-8 col-lg-10 col-12 mx-auto my-4" id="ticketForm" method="POST">

        <h2 class="text-center mb-3">Editar Compra</h2>

        <?php include_once __DIR__ . "/templates/ticketfields.php"; ?>

        <div class="d-flex flex-column">
            <a type="button" href="/tickets" class="btn btn-secondary mb-3" >Volver</a>
            <button type="submit" id="submitTicket" class="btn btn-success" name="buy-ticket">Guardar</button>
        </div>
    </form>
</main>