function ConsultaCep() {
    var cep = document.getElementById('input-cep').value;
    var url = 'https://viacep.com.br/ws/' + cep + '/json/';
    $.ajax({
        url: url,
        type: 'GET',
        success: function(response) {
            $('#localidade').html(response.localidade + ', ' + response.uf + ' - ' + response.bairro);
            $('#logradouro').html(response.logradouro);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("CEP inexistente");
        }
    })
}

// Resultado em tempo Real
document.querySelector('#range-sexo').addEventListener('input', function() {
    document.querySelector('#resultadoTempoReal').textContent = Math.abs(this.value);
});