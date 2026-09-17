

<?php $__env->startSection('title', 'Katalog Pakaian'); ?>

<?php $__env->startSection('content'); ?>
    <h2 style="font-size: 24px; border-left: 4px solid #3182ce; padding-left: 10px; margin-bottom: 20px;">Produk Unggulan</h2>

    <div class="product-grid">
        
        <!-- Produk 1: Purple T-Shirt -->
        <div class="card">
            <div class="card-img">
                <!-- Memanggil gambar kaos-ungu.jpeg dari folder public/images -->
                <img src="<?php echo e(asset('images/kaos-ungu.jpeg')); ?>" alt="Purple T-Shirt">
            </div>
            <div class="card-body">
                <p class="category">T-Shirt</p>
                <h3 class="product-title">Purple T-Shirt - Feel Cool</h3>
                <p class="product-price">Rp 120.000</p>
                <a href="/pembayaran" class="btn btn-dark">Beli Sekarang</a>
            </div>
        </div>

        <!-- Produk 2: Bomber Jacket -->
        <div class="card">
            <div class="card-img">
                <!-- Memanggil gambar jaket-bomber.jpeg -->
                <img src="<?php echo e(asset('images/jaket-bomber.jpeg')); ?>" alt="Bomber Jacket">
            </div>
            <div class="card-body">
                <p class="category">Jacket</p>
                <h3 class="product-title">Navy Bomber Jacket</h3>
                <p class="product-price">Rp 250.000</p>
                <a href="/pembayaran" class="btn btn-dark">Beli Sekarang</a>
            </div>
        </div>

        <!-- Produk 3: Reversible Parka -->
        <div class="card">
            <div class="card-img">
                <!-- Memanggil gambar parka.jpeg -->
                <img src="<?php echo e(asset('images/parka.jpeg')); ?>" alt="Reversible Parka">
            </div>
            <div class="card-body">
                <p class="category">Outerwear</p>
                <h3 class="product-title">Reversible Green Parka</h3>
                <p class="product-price">Rp 300.000</p>
                <a href="/pembayaran" class="btn btn-dark">Beli Sekarang</a>
            </div>
        </div>

        <!-- Produk 4: Premium Vest -->
        <div class="card">
            <div class="card-img">
                <!-- Memanggil gambar rompi.jpeg -->
                <img src="<?php echo e(asset('images/rompi.jpeg')); ?>" alt="Premium Vest">
            </div>
            <div class="card-body">
                <p class="category">Vest</p>
                <h3 class="product-title">Premium Vest Orange</h3>
                <p class="product-price">Rp 180.000</p>
                <a href="/pembayaran" class="btn btn-dark">Beli Sekarang</a>
            </div>
        </div>

        <!-- Produk 5: BlueYellow T-Shirt -->
        <div class="card">
            <div class="card-img">
                <!-- Memanggil gambar jersey.jpeg -->
                <img src="<?php echo e(asset('images/jersey.jpeg')); ?>" alt="Nama Produk">
            </div>
            <div class="card-body">
                <p class="category">Jersey</p>
                <h3 class="product-title">Jersey BlueYellow T-Shirt</h3>
                <p class="product-price">Rp 150.000</p>
                <a href="/pembayaran" class="btn btn-dark">Beli Sekarang</a>
            </div>
        </div>

        <!-- Produk 6: Pakaian Dinas Haria Clean Profesional -->
        <div class="card">
            <div class="card-img">
                <!-- Memanggil gambar pdh-clean&profesional.jpeg -->
                <img src="<?php echo e(asset('images/pdh-clean&profesional.jpeg')); ?>" alt="Nama Produk">
            </div>
            <div class="card-body">
                <p class="category">Pakaian Dinas Harian</p>
                <h3 class="product-title">PDH Clean Profesional</h3>
                <p class="product-price">Rp 180.000</p>
                <a href="/pembayaran" class="btn btn-dark">Beli Sekarang</a>
            </div>
        </div>

        <!-- Produk 7: White T-Shirt -->
        <div class="card">
            <div class="card-img">
                <!-- Memanggil gambar t-shirt-white.jpeg -->
                <img src="<?php echo e(asset('images/t-shirt-white.jpeg')); ?>" alt="Nama Produk">
            </div>
            <div class="card-body">
                <p class="category">T-Shirt</p>
                <h3 class="product-title">White T-Shirt - Casual Youthful</h3>
                <p class="product-price">Rp 130.000</p>
                <a href="/pembayaran" class="btn btn-dark">Beli Sekarang</a>
            </div>
        </div>

        <!-- Produk 8: NavyBlue T-Shirt -->
        <div class="card">
            <div class="card-img">
                <!-- Memanggil gambar t-shirt-navyblue.jpeg -->
                <img src="<?php echo e(asset('images/t-shirt-navyblue.jpeg')); ?>" alt="Nama Produk">
            </div>
            <div class="card-body">
                <p class="category">T-Shirt</p>
                <h3 class="product-title">NavyBlue T-Shirt - Cotton Premium</h3>
                <p class="product-price">Rp 130.000</p>
                <a href="/pembayaran" class="btn btn-dark">Beli Sekarang</a>
            </div>
        </div>


    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\website-OSSTORE\resources\views/home.blade.php ENDPATH**/ ?>