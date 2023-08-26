<fieldset class="formualario__fieldset">
    <legend class="formulario__legend">Informacion Evento</legend>
    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre Evento: </label>
        <input type="text" class="formulario__input" id="nombre" name="nombre" placeholder="Nombre Evento" value="<?php echo $evento->nombre; ?>">
    </div>
    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripcion Evento: </label>
        <textarea rows="7" class="formulario__input" id="descripcion" name="descripcion" placeholder="Descripcion Evento" ><?php echo $evento->descripcion; ?></textarea>
    </div>
    <div class="formulario__campo">
        <label for="categoria" class="formulario__label">Categoria: </label>
        <select class="formulario__select" name="categoria_id" id="categoria">
            <option value=""  disabled> -Seleccionar-</option>
            <?php foreach ($categorias as $categoria) { ?>
                <option <?php echo ($evento->categoria_id === $categoria->id) ? 'selected' : ''; ?>value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Selecciona el Dia: </label>
        <div class="formulario__radio">
            <?php foreach ($dias as $dia) { ?>
                <label for="<?php echo strtolower($dia->nombre); ?>"><?php echo $dia->nombre; ?></label>
                <input type="radio" id="<?php echo $dia->nombre; ?>" name="dia" value="<?php echo $dia->id; ?>" <?php echo ($evento->dia_id === $dia->id) ? 'checked' : ''; ?>>
            <?php } ?>
        </div>

        <input type="hidden" name="dia_id" value="<?php echo $evento->dia_id; ?>">
    </div>

    <div id="horas" class="formlario__campo">
        <label for="hora" class="formulario__label">Seleccionar Hora: </label>
        <ul id="horas" class="horas">
            <?php foreach ($horas as $hora) { ?>
                <li data-hora-id="<?php echo $hora->id; ?>" class="horas__hora horas__hora--deshabilitada"><?php echo $hora->hora; ?></li>
            <?php } ?>
        </ul>

        <input type="hidden" name="hora_id" value="<?php echo $evento->hora_id; ?>">
    </div>

</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formualrio__legend">Informacion Extra: </legend>
    <div class="formulario__campo">
        <label for="ponentes" class="formulario__label">Ponente: </label>
        <input type="text" class="formulario__input" id="ponentes" placeholder="Buscar Ponente">

        <ul id="listado-ponentes" class="listado-ponentes"></ul>
        <input type="hidden" name="ponente_id" value="<?php echo $evento->ponente_id; ?>">
    </div>
    <div class="formulario__campo">
        <label for="disponibles" class="formulario__label">Lugares Disponibles: </label>
        <input type="number" min="1" class="formulario__input" id="disponibles" name="disponibles" placeholder="Ej. 20" value="<?php echo $evento->disponibles; ?>">
    </div>
</fieldset>