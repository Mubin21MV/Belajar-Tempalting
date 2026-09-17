<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> - OSIS Store</title>
    
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Memanggil CSS Terpisah -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

    <header>
        <div class="container header-content">
            <a href="/" class="logo">OSIS <span>Store</span></a>
            <nav>
                <a href="/">Beranda</a>
                <a href="/katalog">Katalog</a>
                <a href="/pembayaran">Checkout</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h3 class="footer-title">OSIS Store</h3>
                    <p>Marketplace resmi untuk merchandise dan pakaian berkualitas. Tampil keren dan percaya diri dengan koleksi terbaik kami.</p>
                </div>
                <div>
                    <h3 class="footer-title">Layanan</h3>
                    <ul>
                        <li><a href="#" style="color: inherit;">Cara Pembelian</a></li>
                        <li><a href="#" style="color: inherit;">Lacak Pesanan</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="footer-title">Hubungi Kami</h3>
                    <p>Punya pertanyaan atau butuh bantuan pesanan?</p>
                    <p class="footer-contact">Whatsapp: 08138974378 (Mubin)</p>
                </div>
            </div>
            <div style="text-align: center; border-top: 1px solid #2d3748; padding-top: 20px; font-size: 14px;">
                &copy; 2026 OSIS Store. All rights reserved.
            </div>
        </div>
    </footer>

</body>
</html><?php /**PATH C:\website-OSSTORE\resources\views/layouts/app.blade.php ENDPATH**/ ?>