<?php
include('../connection.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_tujuan");
$html = '
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: center; /* Center align table text */
        }

        th, td {
            text-align: center; /* Center align table text */
            padding: 8px; /* Reduce padding to fit content within the page */
            font-size: 14px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .center {
            text-align: center;
        }
    </style>
    <center><h3>Data Tujuan</h3></center><hr/><br>
    <table border="1" width="100%">
        <tr>
            <th>From</th>
            <th>Destination</th>
            <th>Price</th>
        </tr>';
$no = 1;
while ($tujuan = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $tujuan['dari'] . "</td>
                <td>" . $tujuan['destination'] . "</td>
                <td>" . $tujuan['price'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream('report_jadwal.pdf');
?>
