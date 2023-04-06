$(document).ready(function() {
    var apiUrl = "http://localhost/realdelbosque2/api.php";

    $("#contact-form").submit(function(event) {
        event.preventDefault();

        var name = $("#name").val();   
        var lname = $("#lname").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
var zip = $("#zip").val();
var gender = $("#gender").val();
var dia = $("#dia").val();
var mes = $("#mes").val();
var year = $("#year").val();
var colegio = $("#colegio").val();


        if (name == "" || lname == "" || email == ""  || phone == ""  || zip == ""  || gender == ""   || dia == "" || mes == "" || year == ""  || colegio == "") {
            alert("Todos los campos son requeridos");
        } else {
            $.ajax({
                type: "POST",
                url: apiUrl,
                data: {
                    name: name,
                    lname: lname,
                    email: email,
                    phone: phone,
                    zip: zip,
                    gender: gender,
                    dia: dia,
                    mes: mes,
                    year: year,
                   colegio: colegio
                },
                success: function(response) {
                    $("#response").html(response);
                }
            });
        }
    });
});

