<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-primary">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $items)
                    {
                        $grand_total = $grand_total + $items['subtotal'];
                    }
                   
                echo "<h6>Total Belanja Anda : Rp. ".number_format($grand_total, 0,',','.');  
                    
                ?>
            </div><br><br>
            <h6>Input Alamat Pengiriman dan Pembayaran</h6>

            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

                <div class="form-group">
                    <label for="Nama Lengkap"></label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label for="Alamat Lengkap"></label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label for="No. telepon"></label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>JNE</option>
                        <option>GOJEK</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih Bank</label>
                    <select class="form-control">
                        <option>BCA - xxxxxxx</option>
                        <option>BRI - xxxxxxx</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
        
            </form>

            <?php
                }else{echo "<h4>keranjang belanja anda masih kosong";}
            ?>
        </div>

        
        <div class="col-md-2"></div>
    </div>
</div>