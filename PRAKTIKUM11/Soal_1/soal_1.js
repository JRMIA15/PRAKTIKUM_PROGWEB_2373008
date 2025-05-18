$(document).ready(function () {
  function loadData() {
    const selectedClass = $(":radio[name='kelas']:checked").val();
    let dataFile;

    if (selectedClass == "all") {
      dataFile = "nilai.json";
    } else if (selectedClass == "A") {
      dataFile = "nilaiA.json";
    } else if (selectedClass == "B") {
      dataFile = "nilaiB.json";
    }

    $.getJSON(dataFile, function (data) {
      displayData(data.nilai, selectedClass);
    }).fail(function () {
      alert("Gagal memuat data!");
    });
  }
  function displayData(students) {
    let html = `
            <table id = "tabel">
                <thead>
                    <tr id = "header_table">
                        <th>NRP</th>
                        <th>NAMA</th>
                        <th>KELAS</th>
                        <th>NILAI AKHIR</th>
                    </tr>
                </thead>
                <tbody>`;

    students.forEach(function (student) {
      html += `
                <tr>
                    <td>${student.nrp}</td>
                    <td>${student.nama}</td>
                    <td>${student.kelas}</td>
                    <td>${student.nilaiakhir}</td>
                </tr>`;
    });

    html += `</tbody></table>`;
    $("#hasil").html(html);
  }

  $("#searchBtn").click(function () {
    loadData();
  });
});
