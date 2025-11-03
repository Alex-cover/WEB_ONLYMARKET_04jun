document.addEventListener('DOMContentLoaded' , () =>{
    const rows = document.querySelectorAll('tbody tr');

    rows.forEach(row =>{
        row.addEventListener('click', () =>{
            rows.forEach(r => r.classList.remove('selected'));

            row.classList.add('selected');

            const rowData = Array.from(row.children).map(cell =>
                cell.textContent);

                console.log('Fila seleccionada', rowData);
        })
    })
})