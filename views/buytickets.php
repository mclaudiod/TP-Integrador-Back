<div class="modal fade" id="ticketModal" tabindex="-1" aria-labelledby="ticketModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ticketModalLabel">Comprar Tickets</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form class="d-flex flex-column" id="ticketForm" method="POST" action="/">
                <div class="modal-body pb-0">
                    <h2 class="fw-semibold text-uppercase text-center mb-3">Valor del ticket general $200</h2>
                    <div class="row mb-3">
                        <div class="col-lg-4 mb-3 mb--0">
                            <div class="card h-100 border-primary">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Estudiantes</h5>
                                    <p class="card-text">Tienen un descuento de</p>
                                    <p class="card-text fw-bold">80%</p>
                                    <p class="card-text"><small class="text-body-secondary">*presentar documentación</small></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3 mb--0">
                            <div class="card h-100 border-success">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Trainees</h5>
                                    <p class="card-text">Tienen un descuento de</p>
                                    <p class="card-text fw-bold">50%</p>
                                    <p class="card-text"><small class="text-body-secondary">*presentar documentación</small></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3 mb--0">
                            <div class="card h-100 border-warning">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Juniors</h5>
                                    <p class="card-text">Tienen un descuento de</p>
                                    <p class="card-text fw-bold">15%</p>
                                    <p class="card-text"><small class="text-body-secondary">*presentar documentación</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php include_once __DIR__ . "/templates/ticketfields.php"; ?>

                    <div class="mb-3">
                        <p class="border rounded border-primary-subtle bg-primary-subtle p-3">Total a Pagar: $<span id="total-ticket">200</span></p>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" onclick="cleanTicketForm();">Borrar</button>
                    <button type="submit" id="submitTicket" class="btn btn-success" name="buy-ticket" disabled>Comprar</button>
                </div>
            </form>
        </div>
    </div>
</div>