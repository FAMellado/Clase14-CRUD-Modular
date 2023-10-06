<div class="container p-5">

<div class="row">


    <form action="guardar.php" method="POST">

        <div class="col">

            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nombre</span>
            <input type="text" name="nombre" class="form-control" placeholder="Peugeot" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <select class="form-select" aria-label="Default select example" name="origen">
                <option selected>Seleccionar Origen</option>
                <option value="japon">Japón</option>
                <option value="china">China</option>
                <option value="francia">Francia</option>
            </select>

            <br>

            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Logo</span>
            <input type="text" name="logo" class="form-control" placeholder="asdasd" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Guardar</button>

        </div>

    </form>

</div>