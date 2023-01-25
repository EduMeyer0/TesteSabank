$(document).ready(function(){
    $('#cep').mask('00000-000');
    $('#phone').mask('(00) 0 0000-0000');
    $('#cpf').mask('000.000.000-00', {reverse: true});
    
    $('td[name="cpf"]').mask('000.000.000-00', {reverse: true});
    $('td[name="cep"]').mask('00000-000');
});

async function populateFieldsWithCep(cep){

    cep = $('#cep').cleanVal();

    if(cep.length != 8){
        this.enableOrDisbaleAdressFields(false);
        return;
    }

    const response = await fetch(`https://brasilapi.com.br/api/cep/v2/${cep}`)
        .then((response) => {
            if(response.status == 200){
                return response.json();
            }
            if(response.status == 404){
                showToast();
            }
        })
        .catch((error) => console.log(error));

    document.getElementById("street").value = response.street;
    document.getElementById("neighborhood").value = response.neighborhood;
    document.getElementById("city").value = response.city;
    document.getElementById("state").value = response.state;
    document.getElementById("country").value = "BR";

    this.enableOrDisbaleAdressFields(true);
}

function enableOrDisbaleAdressFields(value){
    document.getElementById("street").readOnly = value;
    document.getElementById("neighborhood").readOnly = value;
    document.getElementById("city").readOnly = value;
    document.getElementById("state").readOnly = value;
    document.getElementById("country").readOnly = value;
}

function showToast(){
    const msgToast = document.getElementById('msg-toast');
    const toast = new bootstrap.Toast(msgToast);
    toast.show();
}