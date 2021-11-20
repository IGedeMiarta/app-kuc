$(document).ready(function() {

    const table = $('#tabelAbsen').DataTable({
        "order": [
            [0, "desc"],
            [4, 'desc']
        ],
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "/tb-absen",
            "type": "GET"
        },

        "columns": [
            { data: 'tanggal', name: 'tanggal' },
            { data: 'Nama', name: 'nama' },
            { data: 'NamaJabatan', name: 'NamaJabatan' },
            { data: 'statusmasuk', name: 'statusmasuk' },
            { data: 'waktu', name: 'waktu' }
        ],
        "columnDefs": [{
                searchable: false,
                "render": function(data, type, row) {
                    return getTanggal(data);
                },
                "targets": 0
            },
            {
                searchable: true,
                "targets": 1
            },
            {
                searchable: false,
                "targets": 2
            },
            {
                searchable: false,
                "targets": 3,
            },
            {
                searchable: false,
                "targets": 4,
                "render": function(data, type, row) {
                    return getWaktu(data);
                },

            }
        ]

    })



    function getTanggal(tanggal) {
        var date = new Date(tanggal),
            d, m, y;
        d = date.getDate();
        m = date.getMonth();
        y = date.getFullYear();
        if (d < 10) {
            d = '0' + d;
        }
        if (m < 10) {
            m = '0' + m;
        }
        var tgl = d + '/' + m + '/' + y;

        return tgl;
    }



    function getWaktu(waktu) {
        var jam = new Date(waktu),
            d, m, y;
        d = jam.getHours();
        m = jam.getMinutes();
        y = jam.getSeconds();

        if (d < 10) {
            d = '0' + d;
        }
        if (m < 10) {
            m = '0' + m;
        }
        var jam = d + ':' + m;

        return jam;
    }

   
});


