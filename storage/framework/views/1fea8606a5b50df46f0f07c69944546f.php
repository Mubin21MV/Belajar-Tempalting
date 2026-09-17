

<?php $__env->startSection('title', 'Checkout'); ?>

<?php $__env->startSection('content'); ?>
    <h2 style="font-size: 24px; border-left: 4px solid #3182ce; padding-left: 10px;">Selesaikan Pembayaran</h2>

    <div class="checkout-wrapper">
        
        <!-- Form Pengiriman -->
        <div class="checkout-form">
            <h3 style="margin-bottom: 20px; color: #2d3748;">1. Informasi Pengiriman</h3>
            
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="nama">Nama Penerima</label>
                    <input type="text" id="nama" class="form-control" placeholder="Contoh: Budi Santoso">
                </div>
                
                <div class="form-group">
                    <label for="telepon">No. WhatsApp</label>
                    <input type="text" id="telepon" class="form-control" placeholder="08xxxxxxxxx">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <textarea id="alamat" rows="3" class="form-control" placeholder="Nama Jalan, RT/RW, Kecamatan, Kota"></textarea>
                </div>

                <hr style="border: 1px solid #edf2f7; margin: 30px 0;">

                <h3 style="margin-bottom: 20px; color: #2d3748;">2. Metode Pembayaran</h3>
                
                <label class="radio-group">
                    <input type="radio" name="metode" value="ewallet">
                    <div>
                        <div style="font-weight: bold;">E-Wallet / QRIS</div>
                        <div style="font-size: 13px; color: #718096;">GoPay, OVO, Dana, ShopeePay</div>
                    </div>
                </label>

                <label class="radio-group">
                    <input type="radio" name="metode" value="transfer">
                    <div>
                        <div style="font-weight: bold;">Transfer Bank</div>
                        <div style="font-size: 13px; color: #718096;">BCA, Mandiri, BNI, BRI</div>
                    </div>
                </label>
            </form>
        </div>

        <!-- Ringkasan Pesanan -->
        <div class="checkout-summary">
            <h3 style="margin-bottom: 20px; border-bottom: 1px solid #edf2f7; padding-bottom: 10px;">Ringkasan Pesanan</h3>
            
            <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                <span>Purple T-Shirt (x1)</span>
                <strong>Rp 120.000</strong>
            </div>
            
            <hr style="border: 1px solid #edf2f7; margin: 15px 0;">
            
            <div style="display: flex; justify-content: space-between; margin-bottom: 10px; color: #718096;">
                <span>Subtotal Produk</span>
                <span>Rp 120.000</span>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 20px; color: #718096;">
                <span>Ongkos Kirim</span>
                <span>Rp 15.000</span>
            </div>
            
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; background: #f7fafc; padding: 10px; border-radius: 5px;">
                <span style="font-weight: bold;">Total Tagihan</span>
                <span style="font-size: 20px; font-weight: bold; color: #3182ce;">Rp 135.000</span>
            </div>

            <button class="btn btn-primary">Proses Pesanan</button>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\website-OSSTORE\resources\views/pembayaran.blade.php ENDPATH**/ ?>