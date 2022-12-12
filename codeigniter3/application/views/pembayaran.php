<div class="container-fluid">
    <class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                }

                echo "<h4>Total Belanja Anda : Rp. " . number_format($grand_total, 0, ',', '.');
                ?></div>
            <br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                <div class="form-group">
                    <label>Nama Lengkap<label> <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat lengkap<label> <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>No Telepon<label> <input type="text" name="no telepon" placeholder="Nomor Telepon Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>JNT</option>
                        <option>JNE</option>
                        <option>SiCepat</option>
                        <option>Gojek</option>
                        <option>Grab</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pilih Bank</label>
                    <select class="form-control">
                        <option>BCA - XXXXXXX</option>
                        <option>BRI - XXXXXXX</option>
                        <option>BNI - XXXXXXX</option>
                        <option>MANDIRI - XXXXXXX</option>
                        <option>Gopay</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
        </div>
        </form>

        <div class="col-md-2"></div>

</div>
</div>