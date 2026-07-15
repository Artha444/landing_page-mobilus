<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobilus - Bangun Software yang Membuat Bisnis Anda Lebih Cepat</title>
    <meta name="description" content="Mobilus adalah perusahaan IT/software yang berfokus pada hasil. Kami membangun solusi digital yang mempercepat pertumbuhan bisnis Anda.">
    
    <!-- SEO Optimization -->
    <meta property="og:title" content="Mobilus - Pengembangan Software Berorientasi Hasil">
    <meta property="og:description" content="Tingkatkan metrik bisnis Anda dengan ekosistem digital dari Mobilus. 98% success rate dan rilis MVP dalam 4 minggu.">
    <meta property="og:type" content="website">

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <a href="#" class="nav-brand">Mobilus<span>.</span></a>
            <div class="nav-links">
                <a href="#layanan" class="nav-item">Layanan</a>
                <a href="#proses" class="nav-item">Proses</a>
                <a href="#testimoni" class="nav-item">Testimoni</a>
                <a href="#faq" class="nav-item">FAQ</a>
                <a href="#konsultasi" class="btn btn-primary btn-small">Minta Konsultasi</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Bangun Software yang Membuat Bisnis Anda Lebih Cepat</h1>
                <p class="subheadline">Kami tidak hanya menulis kode, kami membangun ekosistem digital yang dirancang khusus untuk metrik bisnis Anda. Cepat, tangguh, dan berorientasi pada hasil.</p>
                <div class="hero-actions">
                    <a href="#konsultasi" class="btn btn-primary">Konsultasi Gratis <i class="ph ph-arrow-right" style="margin-left: 8px;"></i></a>
                    <a href="#layanan" class="btn btn-outline">Lihat Layanan</a>
                </div>
                
                <div class="stats-bar">
                    <div class="stat-item">
                        <h3>98%</h3>
                        <p>Tingkat Keberhasilan</p>
                    </div>
                    <div class="stat-item">
                        <h3>4 Mgg</h3>
                        <p>Rata-rata MVP Rilis</p>
                    </div>
                    <div class="stat-item">
                        <h3>15+</h3>
                        <p>Industri Terlayani</p>
                    </div>
                    <div class="stat-item">
                        <h3>5+ Thn</h3>
                        <p>Pengalaman Ahli</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Marquee -->
    <div class="marquee-section">
        <div class="marquee-container">
            <div class="marquee-content">
                <span class="marquee-item">LARAVEL</span>
                <span class="marquee-item">REACT</span>
                <span class="marquee-item">NODE.JS</span>
                <span class="marquee-item">VUE.JS</span>
                <span class="marquee-item">FLUTTER</span>
                <span class="marquee-item">AWS</span>
                <span class="marquee-item">DOCKER</span>
            </div>
            <!-- Duplicate for infinite effect -->
            <div class="marquee-content">
                <span class="marquee-item">LARAVEL</span>
                <span class="marquee-item">REACT</span>
                <span class="marquee-item">NODE.JS</span>
                <span class="marquee-item">VUE.JS</span>
                <span class="marquee-item">FLUTTER</span>
                <span class="marquee-item">AWS</span>
                <span class="marquee-item">DOCKER</span>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <section id="layanan" class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Keahlian Kami</span>
                <h2 class="section-title">Solusi Digital End-to-End</h2>
                <p class="section-desc">Kami tidak menawarkan template. Setiap baris kode ditulis untuk memecahkan masalah spesifik bisnis Anda, menghadirkan performa maksimal untuk memenangkan pasar.</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <i class="ph ph-desktop service-icon"></i>
                    <h3 class="service-title">Web App Enterprise</h3>
                    <p class="service-desc">Dashboard admin kompleks, sistem manajemen internal, dan platform SaaS dengan performa tinggi untuk kelancaran bisnis.</p>
                    <ul class="service-features">
                        <li><i class="ph ph-check-circle"></i> Arsitektur scalable cloud</li>
                        <li><i class="ph ph-check-circle"></i> Real-time data processing</li>
                        <li><i class="ph ph-check-circle"></i> Integrasi API pihak ketiga</li>
                    </ul>
                </div>
                <div class="service-card">
                    <i class="ph ph-device-mobile service-icon"></i>
                    <h3 class="service-title">Mobile App Native</h3>
                    <p class="service-desc">Aplikasi iOS & Android yang responsif, mulus, dan terintegrasi langsung dengan ekosistem operasional Anda secara real-time.</p>
                    <ul class="service-features">
                        <li><i class="ph ph-check-circle"></i> UX terspesialisasi mobile</li>
                        <li><i class="ph ph-check-circle"></i> Integrasi hardware native</li>
                        <li><i class="ph ph-check-circle"></i> Sistem Push notifications</li>
                    </ul>
                </div>
                <div class="service-card">
                    <i class="ph ph-shield-check service-icon"></i>
                    <h3 class="service-title">Modernisasi & Audit</h3>
                    <p class="service-desc">Perbaikan sistem legacy, optimasi database cloud, dan audit keamanan perangkat lunak menyeluruh untuk mencegah kebocoran data.</p>
                    <ul class="service-features">
                        <li><i class="ph ph-check-circle"></i> Refactoring kode legacy</li>
                        <li><i class="ph ph-check-circle"></i> Migrasi cloud AWS/GCP</li>
                        <li><i class="ph ph-check-circle"></i> Penetration testing</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="proses" class="section" style="background-color: var(--bg-card);">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-tag">Metodologi Kami</span>
                <h2 class="section-title">Bagaimana Kami Bekerja</h2>
                <p class="section-desc">Proses yang transparan, minim birokrasi, dan berorientasi pada kecepatan rilis produk tanpa mengorbankan kualitas.</p>
            </div>

            <div class="process-grid">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3 class="process-title">Discovery & Blueprint</h3>
                    <p class="service-desc">Kami membedah bisnis proses Anda, menemukan bottleneck operasional, dan merancang arsitektur solusi sistem dalam 1-2 minggu pertama.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3 class="process-title">Development Sprint</h3>
                    <p class="service-desc">Pengerjaan dengan metodologi Agile yang iteratif. Anda menerima pembaruan progres yang bisa ditest dan direview setiap 2 minggu.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3 class="process-title">Launch & Scale</h3>
                    <p class="service-desc">Deployment ke server produksi dengan zero-downtime, monitoring keamanan penuh, dan SLA support pemeliharaan berkesinambungan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimoni" class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Hasil Nyata (Proof Points)</span>
                <h2 class="section-title">Lebih dari Sekadar Testimoni</h2>
                <p class="section-desc">Kami diukur dari dampak dan metrik bisnis yang kami hasilkan untuk keberhasilan klien kami.</p>
            </div>

            <div class="testi-grid">
                <div class="testi-card">
                    <div class="testi-metric">Efisiensi Tim +40%</div>
                    <p class="testi-quote">"Mobilus mengubah cara operasional gudang kami. Sistem inventory lama yang lambat digantikan dengan dashboard real-time yang memangkas waktu kerja tim hingga 40% setiap hari."</p>
                    <div class="testi-author">
                        <div class="author-avatar"><i class="ph ph-user"></i></div>
                        <div class="author-info">
                            <h4>Budi Santoso</h4>
                            <p>COO, Logistik Nusantara</p>
                        </div>
                    </div>
                </div>
                <div class="testi-card">
                    <div class="testi-metric">User Growth 3x</div>
                    <p class="testi-quote">"Aplikasi mobile kami dulu sering crash saat traffic tinggi. Tim Mobilus merombak total backend kami di AWS. Sekarang kami bisa melayani 3x lipat user harian tanpa adanya downtime."</p>
                    <div class="testi-author">
                        <div class="author-avatar"><i class="ph ph-user"></i></div>
                        <div class="author-info">
                            <h4>Sarah Wijaya</h4>
                            <p>Founder, FinTech Startup</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="faq-section">
        <div class="container">
            <div class="faq-header">
                <h2>Pertanyaan yang Sering Diajukan</h2>
                <div class="faq-filters" id="faq-filters">
                    <button class="filter-btn active" data-filter="all">Semua</button>
                    <button class="filter-btn" data-filter="umum">Umum</button>
                    <button class="filter-btn" data-filter="biaya">Biaya & Waktu</button>
                    <button class="filter-btn" data-filter="teknologi">Teknologi</button>
                    <button class="filter-btn" data-filter="support">Support</button>
                </div>
            </div>

            <div class="faq-list" id="faq-list">
                <div class="faq-item" data-category="umum">
                    <div class="faq-question">
                        <span>Layanan apa saja yang ditawarkan Mobilus?</span>
                        <i class="ph ph-plus faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Kami menawarkan pengembangan web app custom, mobile app development (iOS & Android), integrasi sistem enterprise, serta audit keamanan perangkat lunak. Semua layanan dirancang untuk skala bisnis modern.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-category="biaya">
                    <div class="faq-question">
                        <span>Berapa lama rata-rata waktu pengerjaan project?</span>
                        <i class="ph ph-plus faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Untuk produk Minimum Viable Product (MVP), kami biasanya menyelesaikannya dalam waktu 4-6 minggu. Namun, durasi pasti tergantung pada kompleksitas fitur dan integrasi yang dibutuhkan.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="teknologi">
                    <div class="faq-question">
                        <span>Teknologi apa yang biasanya digunakan?</span>
                        <i class="ph ph-plus faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Kami sangat fleksibel, namun tech stack andalan kami meliputi Laravel, Node.js, React, Vue, dan Flutter. Kami memilih teknologi terbaik yang paling sesuai dengan kebutuhan jangka panjang project Anda.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="umum">
                    <div class="faq-question">
                        <span>Bagaimana cara mulai kerja sama dengan Mobilus?</span>
                        <i class="ph ph-plus faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Anda bisa memulai dengan menjadwalkan konsultasi gratis melalui tombol di website ini. Kami akan berdiskusi tentang visi, masalah yang ingin dipecahkan, dan membuat estimasi awal sebelum kontrak disepakati.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="support">
                    <div class="faq-question">
                        <span>Apakah ada layanan support pasca-project?</span>
                        <i class="ph ph-plus faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Tentu. Kami menyediakan masa garansi bug selama 3 bulan pertama dan menawarkan SLA support bulanan untuk pemeliharaan, update keamanan, serta penambahan fitur baru.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Box -->
    <section id="konsultasi" class="cta-section">
        <div class="container">
            <div class="cta-box">
                <div class="cta-pattern"></div>
                <h2>Siap Meluncurkan Produk Anda Berikutnya?</h2>
                <p>Jadwalkan panggilan 30 menit bersama Tech Lead kami untuk membedah ide Anda. Tanpa komitmen, murni konsultasi teknis gratis.</p>
                <a href="mailto:hello@mobilus.id" class="btn btn-primary" style="background:#111; color:#fff;">Jadwalkan Konsultasi <i class="ph ph-calendar" style="margin-left: 8px;"></i></a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-brand">
                    <h3>Mobilus<span>.</span></h3>
                    <p>Membangun masa depan digital dengan software yang tangguh, terukur, dan berpusat pada pertumbuhan.</p>
                </div>
                <div class="footer-col">
                    <h4>Navigasi</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#layanan">Layanan</a></li>
                        <li><a href="#proses">Metodologi</a></li>
                        <li><a href="#testimoni">Testimoni</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Kontak</h4>
                    <ul>
                        <li style="color: var(--text-muted); display: flex; align-items: center;"><i class="ph ph-map-pin" style="margin-right: 8px; font-size: 20px;"></i> Jakarta, Indonesia</li>
                        <li><a href="mailto:hello@mobilus.id" style="display: flex; align-items: center;"><i class="ph ph-envelope-simple" style="margin-right: 8px; font-size: 20px;"></i> hello@mobilus.id</a></li>
                    </ul>
                    <div class="social-links">
                        <a href="#" aria-label="LinkedIn"><i class="ph ph-linkedin-logo"></i></a>
                        <a href="#" aria-label="Instagram"><i class="ph ph-instagram-logo"></i></a>
                        <a href="#" aria-label="Twitter"><i class="ph ph-twitter-logo"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; 2026 Mobilus. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Interactive Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // FAQ Accordion Logic
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                question.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');
                    
                    // Close all items
                    faqItems.forEach(faq => {
                        faq.classList.remove('active');
                        const answer = faq.querySelector('.faq-answer');
                        answer.style.maxHeight = null;
                        
                        // Change icon back to plus
                        const icon = faq.querySelector('.faq-icon');
                        icon.classList.remove('ph-x');
                        icon.classList.add('ph-plus');
                    });

                    // Open clicked item if it wasn't active
                    if (!isActive) {
                        item.classList.add('active');
                        const answer = item.querySelector('.faq-answer');
                        answer.style.maxHeight = answer.scrollHeight + "px";
                        
                        // Change icon to X
                        const icon = item.querySelector('.faq-icon');
                        icon.classList.remove('ph-plus');
                        icon.classList.add('ph-x');
                    }
                });
            });

            // FAQ Filter Logic
            const filterBtns = document.querySelectorAll('.filter-btn');
            
            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    btn.classList.add('active');
                    
                    const filterValue = btn.getAttribute('data-filter');
                    
                    faqItems.forEach(item => {
                        // Close item before filtering
                        item.classList.remove('active');
                        const answer = item.querySelector('.faq-answer');
                        answer.style.maxHeight = null;
                        
                        const icon = item.querySelector('.faq-icon');
                        icon.classList.remove('ph-x');
                        icon.classList.add('ph-plus');

                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                            // Optional fade-in animation
                            item.style.opacity = '0';
                            setTimeout(() => {
                                item.style.transition = 'opacity 0.3s ease';
                                item.style.opacity = '1';
                            }, 50);
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>
