const estadoSelect = document.getElementById('estado');
const cidadeSelect = document.getElementById('cidade');

estadoSelect.addEventListener('change', function() {
    const selectedEstado = estadoSelect.value;

    if (selectedEstado === 'SP') {
        cidadeSelect.innerHTML = `
            <option value="" disabled selected>Selecione a cidade</option>
            <option value="SaoPaulo">São Paulo</option>
            <option value="Campinas">Campinas</option>
            <!-- Adicione mais opções de cidades de SP aqui -->
        `;
    } else if (selectedEstado === 'RJ') {
        cidadeSelect.innerHTML = `
            <option value="" disabled selected>Selecione a cidade</option>
            <option value="RioDeJaneiro">Rio de Janeiro</option>
            <option value="Niteroi">Niterói</option>
            <!-- Adicione mais opções de cidades do RJ aqui -->
        `;
    } else {
        cidadeSelect.innerHTML = '<option value="" disabled selected>Selecione o estado primeiro</option>';
    }
});
