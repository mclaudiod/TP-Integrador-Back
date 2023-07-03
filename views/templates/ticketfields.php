<div class="row">
    <div class="col-lg mb-3">
        <div class="form-floating">
            <input type="text" class="form-control val" id="name-ticket" placeholder="Nombre" aria-describedby="validationName" name="name" value="<?php echo $ticket->name ?? ""; ?>" required>
            <label for="name-ticket">Nombre</label>
            <div id="validationName" class="invalid-feedback">Por favor escriba un nombre válido.</div>
        </div>
    </div>

    <div class="col-lg mb-3">
        <div class="form-floating">
            <input type="text" class="form-control val" id="surname-ticket" placeholder="Apellido" aria-describedby="validationSurname" name="surname" value="<?php echo $ticket->surname ?? ""; ?>" required>
            <label for="surname-ticket">Apellido</label>
            <div id="validationSurname" class="invalid-feedback">Por favor escriba un apellido válido.</div>
        </div>
    </div>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control val" id="email-ticket" placeholder="Correo Electrónico" aria-describedby="validationEmail" name="email" value="<?php echo $ticket->email ?? ""; ?>" required>
    <label for="email-ticket">Correo Electrónico</label>
    <div id="validationEmail" class="invalid-feedback">Por favor escriba una dirección de correo electrónico válida.</div>
</div>

<div class="row">
    <div class="col-lg mb-3">
        <div class="form-floating">
            <input type="number" class="form-control val" id="quantity-ticket" min="1" max="10" name="quantity" value="<?php echo $ticket->quantity ?? ""; ?>" required>
            <label for="quantity-ticket">Cantidad</label>
        </div>
    </div>

    <div class="col-lg mb-3">
        <div class="form-floating">
            <select class="form-select" id="category-ticket" name="category" required>
                <option value="general" <?php if(isset($ticket) &&$ticket->category == "general") echo "selected"; ?>>General</option>
                <option value="students" <?php if(isset($ticket) &&$ticket->category == "students") echo "selected"; ?>>Estudiantes</option>
                <option value="trainees" <?php if(isset($ticket) &&$ticket->category == "trainees") echo "selected"; ?>>Trainees</option>
                <option value="juniors" <?php if(isset($ticket) &&$ticket->category == "juniors") echo "selected"; ?>>Juniors</option>
            </select>
            <label for="category-ticket">Categoría</label>
        </div>
    </div>
</div>