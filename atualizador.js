setInterval(() => {
    fetch('dados.json')
        .then(res => res.json())
        .then(data => {
            document.getElementById('senha').textContent = data.senha;
            document.getElementById('guiche').textContent = data.guiche;
        });
}, 1000); // Atualiza a cada 2 segundos