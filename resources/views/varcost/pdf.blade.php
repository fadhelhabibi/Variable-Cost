<!DOCTYPE html>
<html>
<head>
    <title>Data Varcost</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 6px; /* Ukuran font lebih kecil untuk seluruh halaman */
        }
        h3 {
            font-size: 10px; /* Ukuran font untuk judul */
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 6px; /* Ukuran font lebih kecil untuk isi tabel */
        }
        th, td {
            padding: 1px; /* Padding yang lebih kecil */
            text-align: center;
            border: 1px solid #000;
        }
        th {
            background-color: #f2f2f2;
        }
        .signature-section {
            font-size: 6px;
        }
        .signature-table {
            width: 100%;
            border: none; /* Menghilangkan border pada tabel tanda tangan */
        }
        .signature-table td {
            text-align: left;
            border: none; /* Menghilangkan border pada sel */
        }
        .signature-table .signature-cell {
            width: 25%; /* Lebar tiap kolom tanda tangan */
        }
    </style>
</head>
<body>
    <h3>Data Varcost</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Periode</th>
                <th>Tahun</th>
                <th>Site ID</th>
                <th>Site Name</th>
                <th>NOP</th>
                <th>CLUSTER</th>
                <th>Tiket SWFM</th>
                <th>Tanggal Pelaksanaan</th>
                <th>Aktivity</th>
                <th>Kode SL</th>
                <th>Qty</th>
                <th>Harga Satuan</th>
                <th>Fee</th>
                <th>Total Harga</th>
                <th>Status Ticket</th>
                <th>PO</th>
                <th>Status Pekerjaan</th>
                <th>Status Penagihan</th>
            </tr>
        </thead>
        <tbody>
            @php($no = 1)
            @foreach ($varcost as $row)
            <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->kategori }}</td>
                <td>{{ $row->periode }}</td>
                <td>{{ $row->tahun }}</td>
                <td>{{ $row->siteid }}</td>
                <td>{{ $row->sitename }}</td>
                <td>{{ $row->nop }}</td>
                <td>{{ $row->cluster }}</td>
                <td>{{ $row->tiketfiola }}</td>
                <td>{{ $row->tanggalpelaksanaan }}</td>
                <td>{{ $row->aktivity }}</td>
                <td>{{ $row->kodesl }}</td>
                <td>{{ $row->qty }}</td>
                <td>Rp.{{ number_format($row->hargasatuan, 0, ',', '.') }}</td>
                <td>{{ $row->fee }}%</td>
                <td>Rp.{{ number_format($row->total_harga, 0, ',', '.') }}</td>
                <td>{{ $row->statusticket }}</td>
                <td>{{ $row->po }}</td>
                <td>{{ $row->statuspekerjaan }}</td>
                <td>{{ $row->statuspenagihan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
   <!-- Tanda Tangan -->
   <div class="signature-section">
    <p>Makassar, ................</p>
    <p>Dibuat Oleh,</p>
    <table class="signature-table">
        <tr>
            <td class="signature-cell">
                <p>PT. Triple eGlobal Transformasi</p>
                <br><br><br><br>
                <p>Fany Fitria</p>
                <p>Lead O&M Sulawesi</p>
            </td>
            <td class="signature-cell">
                <p>PT. Triple eGlobal Transformasi</p>
                <br><br><br><br>
                <p>Fahrul Qistan</p>
                <p>ROH Ternate</p>
            </td>
            <td class="signature-cell">
                <p>PT. Triple eGlobal Transformasi</p>
                <br><br><br><br>
                <p>Mas Eko Prihantono</p>
                <p>Regional Lead Sulawesi</p>
            </td>
            <td class="signature-cell">
                <p>PT. Telkomsel</p>
                <br><br><br><br>
                <p>Fredi Tandibura</p>
                <p>Manager NOP Ternate</p>
            </td>
        </tr>
    </table>
</div>
</body>
</html>

