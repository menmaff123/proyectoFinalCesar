$("#about").append(
    '<div class="container">' +
    '<div class="row align-items-center">' +
    '<div class="col-md-6">' +
    '<h6 class="section-subtitle">Viajes premium</h6>' +
    '<h3 class="section-title">Viaja como más te guste</h3>' +
    '<p>Ya sea con el camión mas peligroso de japon, o la nube más velóz del planeta tierra.</p>' +
    '<a href="/viajes" class="btn btn-primary btn-sm w-md mt-4">Ver más</a>' +
    '</div>' +
    '<div class="col-md-6">' +
    '<div class="row">' +
    '<div class="col">' +
    '<img src="assets/imgs/camion-chan.png" class="w-100 rounded shadow">' +
    '</div>' +
    '<div class="col">' +
    '<img src="assets/imgs/nube.png" class="w-100 rounded shadow">' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '<div class="section-devider my-6 transparent"></div>' +
    '<div class="row align-items-center">' +
    '<div class="col-md-6">' +
    '<h6 class="section-subtitle">Viaja a donde quieras</h6>' +
    '<h3 class="section-title">Los mejores lugares de la galaxia</h3>' +
    '<p>Desde Namek hasta el Castillo Ambulante, llega a cualquier lugar con TusViajes</p>' +
    '<a href="/lugares" class="btn btn-primary btn-sm w-md mt-4">Ver más</a>' +
    '</div>' +
    '<div class="col-md-6 order-1 order-sm-first">' +
    '<div class="row">' +
    '<div class="col">' +
    '<img src="assets/imgs/namek.png" class="w-100 rounded shadow">' +
    '</div>' +
    '<div class="col">' +
    '<img src="assets/imgs/castillo.png" class="w-100 rounded shadow">' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>'
)

img = ['avatar.jpg', 'avatar-1.jpg', 'avatar-2.jpg'];
names = ['John', 'Margarot', 'Erick'];
texto = ['Está increible el servicio, todo esto es genial!', 'Que intuitivo es esto, simplemente increíble', 'Nunca pensé encontrar algo tan sencillo, me encanta!!!'];

for (let i = 0; i < 3; i++) {
    $("#testimonios").append(
        '<div class="col-md-4 my-3 my-md-0">' +
        '<div class="card">' +
        ' <div class="card-body">' +
        '<div class="media align-items-center mb-3">' +
        '<img class="mr-3" src="assets/imgs/' + img[i] + '">' +
        '<div class="media-body">' +
        '<h6 class="mt-1 mb-0" style="color:black;">' + names[i] + '</h6>' +
        ' <small class="text-muted mb-0">Business Analyst</small>' +
        '</div>' +
        '</div>' +
        '<p class="mb-0" style="color:black;">' + texto[i] + '</p>' +
        '</div>' +
        '</div>' +
        ' </div>'
    )
}


