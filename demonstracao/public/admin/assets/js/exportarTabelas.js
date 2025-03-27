function exportarTabelas(idTabela) {

    let tableData = [];
    const nomeArquivo = idTabela;

    document.querySelectorAll(`#${idTabela} tr`).forEach(row => {
        const rowData = [];
        row.querySelectorAll("td").forEach(cell => {
            if (!cell.classList.contains("restrict")) {
                rowData.push(cell.textContent);
            };
        });
        tableData.push(rowData);
    });

    // console.log(document.querySelectorAll(`#tabela-leads tr`));
    // console.log(tableData);
    // return false;

    fetch("../../api/utils/ExportarTabelas.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            data: tableData,
            file_name: nomeArquivo
        })
    })
        .then(response => response.blob())
        .then(blob => {
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement("a");
            a.href = url;

            let date = new Date();
            let currentDate = `${date.getDate()}${date.getMonth() + 1}${date.getFullYear()}`;
            let currentTime = `${date.getHours()}${date.getMinutes()}`;

            a.download = `${nomeArquivo}-${currentDate}-${currentTime}.xls`;
            document.body.appendChild(a);
            a.click();
            a.remove();
        })
        .catch(error => console.error("Error:", error));
};