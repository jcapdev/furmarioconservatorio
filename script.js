$(document).ready(function() {

    var apiUrl = "http://localhost/furmarioconservatorio/api.php";


    const yearSelect = document.getElementById("year");

    // Establecer un rango de años del 2000 al 2023
    const startYear = 1952;
    const endYear = new Date().getFullYear() - 10;
    


    // Agregar opciones al "select" para cada año en el rango
    for (let year = startYear; year <= endYear; year++) {
       const option = document.createElement("option");
        option.value = year;
        option.text = year;
        yearSelect.appendChild(option);
    }


    // funcion pra recolectar informacion

    $("#contact-form").submit(function(event) {
        event.preventDefault();

        var name = $("#name").val();   
        var lname = $("#lname").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var zip = $("#zip").val();
        var gender = document.querySelector('input[name="gender"]:checked').value;
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
                dataType: "json",
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
                success: function(resultado) {
                    console.log(resultado);
                    $("#response").html(resultado);

                    if(resultado.exito == 'true'){
                         alert("Registro Guardado");
                    }
                    else{
                        alert("Error al guardar");   
                    }

                }
            });
        }
    });
});

function mostrarDiasDelMes(mesSeleccionado) {
    var select = document.getElementById("mes");
    select.remove(0);

    // Obtener la cantidad de días en el mes seleccionado
    const diasEnMes = new Date(new Date().getFullYear(), mesSeleccionado, 0).getDate();
    
    // Generar la lista de opciones
    let opciones = '';
    for (let i = 1; i <= diasEnMes; i++) {
      opciones += `<option value="${i}">${i}</option>`;
    }
    
    // Agregar la lista de opciones al input de días
    document.getElementById('dia').innerHTML = opciones;
}

function SelectYear() {
    var select = document.getElementById("year");
    select.remove(0);

}