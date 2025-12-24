(() => {
    const form = document.getElementById('websql-form');
    if (!form) {
        return;
    }

    const warning = document.getElementById('websql-warning');
    const tbody = document.getElementById('websql-tbody');
    const idInput = document.getElementById('websql-id');
    const nombresInput = document.getElementById('websql-nombres');
    const apellidosInput = document.getElementById('websql-apellidos');
    const createButton = document.getElementById('websql-create');
    const editButton = document.getElementById('websql-edit');
    const clearButton = document.getElementById('websql-clear');

    if (!window.openDatabase) {
        if (warning) {
            warning.classList.remove('d-none');
        }
        return;
    }

    const db = window.openDatabase('data', '1.0', 'data', 1 * 1024 * 1024);

    function renderRows(results) {
        tbody.innerHTML = '';
        for (let i = 0; i < results.rows.length; i += 1) {
            const row = results.rows.item(i);
            const tr = document.createElement('tr');

            const idCell = document.createElement('td');
            idCell.textContent = row.id;
            tr.appendChild(idCell);

            const nombresCell = document.createElement('td');
            nombresCell.textContent = row.p_nombres;
            tr.appendChild(nombresCell);

            const apellidosCell = document.createElement('td');
            apellidosCell.textContent = row.p_apellidos;
            tr.appendChild(apellidosCell);

            const actionCell = document.createElement('td');
            const deleteButton = document.createElement('button');
            deleteButton.type = 'button';
            deleteButton.className = 'btn btn-sm btn-outline-danger';
            deleteButton.textContent = 'Borrar';
            deleteButton.dataset.action = 'delete';
            deleteButton.dataset.id = row.id;
            actionCell.appendChild(deleteButton);
            tr.appendChild(actionCell);

            tbody.appendChild(tr);
        }
    }

    function mostrarPersona() {
        db.transaction((t) => {
            t.executeSql('select * from person', [], (tx, results) => {
                renderRows(results);
            });
        });
    }

    function guardarPersona(tipo) {
        const idValue = idInput.value.trim();
        const nombres = nombresInput.value.trim();
        const apellidos = apellidosInput.value.trim();

        if (tipo === 0) {
            if (!nombres || !apellidos) {
                return;
            }
            db.transaction((t) => {
                t.executeSql(
                    'insert into person(p_nombres, p_apellidos) values (?, ?)',
                    [nombres, apellidos],
                    () => mostrarPersona()
                );
            });
        } else {
            if (!idValue || !nombres || !apellidos) {
                return;
            }
            db.transaction((t) => {
                t.executeSql(
                    'update person set p_nombres = ?, p_apellidos = ? where id = ?',
                    [nombres, apellidos, idValue],
                    () => mostrarPersona()
                );
            });
        }

        form.reset();
    }

    function borrarTodo() {
        db.transaction((t) => {
            t.executeSql('delete from person', [], () => mostrarPersona());
        });
    }

    function borrarPersona(id) {
        db.transaction((t) => {
            t.executeSql('delete from person where id = ?', [id], () => mostrarPersona());
        });
    }

    createButton.addEventListener('click', () => guardarPersona(0));
    editButton.addEventListener('click', () => guardarPersona(1));
    clearButton.addEventListener('click', borrarTodo);

    tbody.addEventListener('click', (event) => {
        const button = event.target.closest('button[data-action="delete"]');
        if (!button) {
            return;
        }
        const id = Number(button.dataset.id);
        if (!Number.isFinite(id)) {
            return;
        }
        borrarPersona(id);
    });

    db.transaction((t) => {
        t.executeSql(
            'create table if not exists person (id INTEGER PRIMARY KEY, p_nombres TEXT, p_apellidos TEXT)',
            [],
            () => mostrarPersona()
        );
    });
})();
