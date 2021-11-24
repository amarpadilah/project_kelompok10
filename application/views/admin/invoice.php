<div class="container-fluid">
    <h4>Invoice Pemesanan Program</h4>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>id invoice</th>
            <th>nama pemesan</th>
            <th>alamat pengiriman</th>
            <th>tanggak pemesanan</th>
            <th>batas pembayaran</th>
            <th>AKSI</th>
        </tr>

        <?php foreach ($invoice as $inv) : ?>
            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo $inv->batas_bayar ?></td>
                <td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-danger">Detail</div>')?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>