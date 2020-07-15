console.log("hola");

function UserCreate(form) {
    var nombre = $("#id_nombre").val();
    var correo = $("#id_ermail").val();
    var password = $("#id_contraseña").val();

    var myForm = document.getElementById("UserCreate");
    var datos = new FormData(myForm);
    var token = $('meta[name="csrf-token"]').attr("content");
    console.log(datos);
    $.ajax({
        type: "POST",
        url: "/usuarios/",
        processData: false,
        contentType: false,
        dataType: "json",
        headers: {
            "X-CSRF-TOKEN": token,
        },
        data: datos,
        success: function (respuesta) {
            alert("Usuario creado corectamente");
            window.location = "/usuarios/create";
            // $('#guardar').css('display', 'none');
            // $('#non-guardar').css('display', 'block');
        },
        error: function (respuesta) {
            alert("Error");
        },
    });
}
