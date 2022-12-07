@php
    include 'assets/views/head.php';
@endphp

<div class="row" style="margin-left: 5%; margin-right: 1%; margin-top: 4%;">
    <div class="d-flex flex-wrap col-xl-8" style="overflow-y: scroll; height: 400px;">
        @foreach ($viajes as $viaje)
            <div class="card text-bg-dark" style="width: 260px; height: 250px; padding: 3px;">
                <img src="{{ $viaje['image'] }}" class="card-img"
                    style="width: 100%; height: 75%; filter: brightness(0.5);" alt="...">
                <div class="card-img-overlay">
                    <h2 class="card-title" style="color: white">{{ $viaje['Nombre'] }}</h2>
                </div>
                <div class="row" style="margin-top: 3px;">
                    <div class="col-xl-6">
                        <button type="submit"
                            onclick="cambiaValores('{{ $viaje['Nombre'] }}','{{ $viaje['image'] }}',{{ $viaje['id'] }})"
                            style="background-color: rgb(73, 150, 73); color:white; width: 110px; margin-left:1px;"
                            class="btn ">Ver info</button>
                    </div>
                    <form class="col-xl-6" action="/viajes/delete/{{ $viaje['id'] }}" method="POST">
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
    <div class="col-xl-4">
        <form action="/viajes" method="POST" id="formAddViaje">
            {{ csrf_field() }}

        </form>
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
<script src="assets/js/viajes.js"></script>

</body>

</html>
