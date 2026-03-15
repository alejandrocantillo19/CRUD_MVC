document.addEventListener('DOMContentLoaded', function() {

    let formCreate = document.getElementById('pacienteForm');
    if(formCreate) {
        formCreate.addEventListener('submit', function(e) {
            e.preventDefault();
            let doc = document.getElementById('num_doc').value;
            if(isNaN(doc)) {
                alert("El número de documento debe ser solo números.");
                return;
            }

            let msgDiv = document.getElementById('mensaje');
            fetch('index.php?action=create', { method: 'POST', body: new FormData(this) })
            .then(res => res.json())
            .then(data => {
                msgDiv.style.display = 'block';
                msgDiv.innerText = data.message;
                msgDiv.className = data.status === 'success' ? 'alert-success' : 'alert-danger';
                if(data.status === 'success') formCreate.reset();
            }).catch(err => console.error(err));
        });
    }

    let formEdit = document.getElementById('editForm');
    if(formEdit) {
        formEdit.addEventListener('submit', function(e) {
            e.preventDefault();
            let doc = document.getElementById('num_doc').value;
            if(isNaN(doc)) {
                alert("El documento debe ser numérico");
                return;
            }

            let resDiv = document.getElementById('res');
            fetch('index.php?action=edit', { method: 'POST', body: new FormData(this) })
            .then(r => r.json())
            .then(data => {
                resDiv.style.display = 'block';
                resDiv.innerText = data.message;
                resDiv.className = data.status === 'success' ? 'alert-success' : 'alert-danger';
                if(data.status === 'success') setTimeout(() => location.href='index.php', 1200);
            });
        });
    }
});