<main class="flex-grow-1 table-responsive">
    <div class="container-fluid text-center mx-auto my-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($tickets as $ticket) { ?>
                    <tr>
                        <th scope="row" class="align-middle">
                            <?php echo $ticket->id; ?>
                        </th>

                        <td class="align-middle">
                            <?php echo $ticket->name; ?>
                        </td>

                        <td class="align-middle">
                            <?php echo $ticket->surname; ?>
                        </td>

                        <td class="align-middle">
                            <?php echo $ticket->email; ?>
                        </td>

                        <td class="align-middle">
                            <?php echo $ticket->quantity; ?>
                        </td>

                        <td class="align-middle">
                            <?php echo ucfirst(($ticket->category == "students") ? "estudiantes" : $ticket->category); ?>
                        </td>

                        <td class="d-flex align-items-center justify-content-center">
                            <a role="button" class="btn btn-secondary m-1" href="/tickets/editar?id=<?php echo $ticket->id; ?>">Editar</a>

                            <form action="/tickets/borrar" method="POST">
                                <input type="hidden" class="d-none" name="id" value="<?php echo $ticket->id; ?>">
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>
</main>