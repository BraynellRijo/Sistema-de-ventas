var data = [
    { name: 'John Doe', position: 'Manager', office: 'New York', salary: '$120,000' },
    // Agrega más datos aquí...
  ];

  // Función para renderizar los datos en la tabla
  function renderTable() {
    var tbody = document.getElementById('data-table').getElementsByTagName('tbody')[0];
    tbody.innerHTML = '';
    for (var i = 0; i < data.length; i++) {
      var row = tbody.insertRow();
      for (var key in data[i]) {
        var cell = row.insertCell();
        cell.textContent = data[i][key];
      }
      var actionsCell = row.insertCell();
      actionsCell.textContent = 'Edit / Delete';  // Agrega funcionalidades de edición/eliminación aquí
    }
  }

  // Función para filtrar los datos de la tabla
  function filterTable() {
    var input = document.getElementById('search-input');
    var filter = input.value.toUpperCase();
    var tbody = document.getElementById('data-table').getElementsByTagName('tbody')[0];
    var rows = tbody.getElementsByTagName('tr');
    for (var i = 0; i < rows.length; i++) {
      var cells = rows[i].getElementsByTagName('td');
      var match = false;
      for (var j = 0; j < cells.length; j++) {
        var value = cells[j].textContent || cells[j].innerText;
        if (value.toUpperCase().indexOf(filter) > -1) {
          match = true;
          break;
        }
      }
      rows[i].style.display = match ? '' : 'none';
    }
  }

  // Función para agregar un nuevo registro a la tabla
  function addRecord() {
    var record = { name: 'New Record', position: 'New Position', office: 'New Office', salary: '$0' };
    data.push(record);
    renderTable();
  }

  // Agrega los listeners de eventos
  document.getElementById('search-input').addEventListener('keyup', filterTable);
  document.getElementById('add-button').addEventListener('click', addRecord);

  // Renderiza la tabla inicial
  renderTable();