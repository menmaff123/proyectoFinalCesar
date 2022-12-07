@php
    include 'assets/views/head.php';
@endphp

<div class="row" style="margin-left: 5%; margin-right: 1%; margin-top: 4%;">
    <form class="col-xl-4" id="formCompra" action="/compra" method="POST">
        <div class="form-group">
            {{ csrf_field() }}
            <label for="SelectLugar">Lugares</label>
            <select class="form-select" id="SelectLugar" name="id_lugar">
                @foreach ($lugares as $lugar)
                    <option value="{{ $lugar['id'] }}" style="color: black">{{ $lugar['Nombre'] }}</option>
                @endforeach
            </select>
            <label for="SelectViaje">Viaje</label>
            <select class="form-select" id="SelectViaje" name="id_viaje">
                @foreach ($viajes as $viaje)
                    <option value="{{ $viaje['id'] }}">{{ $viaje['Nombre'] }}</option>
                @endforeach
            </select>

            <label for="Textarea1">Notas</label>
            <textarea class="form-control" id="Notas" rows="3" name="Notas"></textarea>


        </div>
        <button type="submit" id="btnCompra" class="btn btn-primary btn-block">Agregar</button>

    </form>

    <div class="d-flex flex-wrap col-xl-8" style="overflow-y: scroll; height: 400px;">
        @foreach ($vuelos as $vuelo)
            <div class="card text-bg-dark" style="width: 260px; height: 250px; padding: 3px;">
                <img src="{{ $vuelo['lugar']['image'] }}" class="card-img"
                    style="width: 100%; height: 200px; filter: brightness(0.5);" alt="...">
                <div class="card-img-overlay">
                    <h3 class="card-title" style="color: white">Rumbo a {{ $vuelo['lugar']['Nombre'] }}</h3>
                </div>
                <div class="card-img-overlay" style="margin-top: 100px;">
                    <h6 class="card-title" style="color: white">Transporte: {{ $vuelo['viaje']['Nombre'] }}</h6>
                </div>

                <div class="row" style="margin-top: 3px;">
                    <div class="col-xl-6">
                        <button type="submit"
                            onclick="cambiaValores('{{ $vuelo['id_lugar'] }}','{{ $vuelo['id_viaje'] }}', '{{ $vuelo['Notas'] }}', {{ $vuelo['id'] }})"
                            style="background-color: rgb(73, 150, 73); color:white; width: 110px; margin-left:1px;"
                            class="btn ">Ver info</button>
                    </div>
                    <form class="col-xl-6" action="/compra/delete/{{ $vuelo['id'] }}" method="POST">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <div>
                            <button type="submit"
                                style="background-color: rgb(221, 74, 74); color:white; width: 110px; margin-right:1px;"
                                class="btn  ">Borrar</button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

</div>


{{-- Footer --}}
@php
    include 'assets/views/footer.php';
@endphp

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
<!-- Pigga js -->
<script src="assets/js/pigga.js"></script>
<script src="assets/js/lugaresViajes.js"></script>

</body>

</html>
