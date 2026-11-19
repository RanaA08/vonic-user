<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Vonic</title>
    <!-- Menghubungkan ke file CSS eksternal -->
    <link rel="stylesheet" href="profil.css">
    <!-- Menghubungkan Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts untuk tipografi -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Bagian Header / Navbar -->
    <header class="navbar">
        <div class="nav-left">
            <div class="logo">
                <i class="fa-solid fa-check-double" style="color: #2563eb; font-size: 24px;"></i>
                <span>Vonic</span>
            </div>
            <a href="#" class="nav-btn active">
                <i class="fa-solid fa-house"></i> Beranda
            </a>
            <a href="#" class="nav-btn">
                <i class="fa-regular fa-folder-open"></i> Riwayat Pemilihan
            </a>
        </div>
        <div class="nav-right">
            <button class="icon-btn">
                <i class="fa-regular fa-bell"></i>
            </button>
            <button class="profile-btn">
                <i class="fa-solid fa-circle-user" style="font-size: 20px; color: #2563eb;"></i>
                Melisa Danuar, S.Kom
                <i class="fa-solid fa-chevron-down" style="font-size: 12px; margin-left: 8px;"></i>
            </button>
        </div>
    </header>

    <!-- Konten Utama -->
    <main class="container">
        
        <!-- Bagian Kiri: Identitas -->
        <section class="identitas-section">
            <div class="section-header">
                <h2>Identitas</h2>
                <button class="edit-btn">
                    <i class="fa-solid fa-pen-to-square"></i> Edit Profile
                </button>
            </div>

            <div class="card profil-card">
                <div class="profile-image-container">
                    <!-- Gambar pantai sebagai placeholder avatar -->
                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Foto Profil">
                </div>
                
                <div class="info-list">
                    <div class="info-row">
                        <label>Nama</label>
                        <div class="info-value">Maria Danuar, S.Kom</div>
                    </div>
                    <div class="info-row">
                        <label>Email</label>
                        <div class="info-value">mariadanuar@mail.ugm.co.id</div>
                    </div>
                    <div class="info-row">
                        <label>Pekerjaan</label>
                        <div class="info-value">Dosen</div>
                    </div>
                    <div class="info-row">
                        <label>Unit Kerja</label>
                        <div class="info-value">Teknologi Rekayasa Perangkat Lunak</div>
                    </div>
                    <div class="info-row">
                        <label>No. Telp</label>
                        <div class="info-value">0897777000</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bagian Kanan: Riwayat Partisipasi -->
        <section class="riwayat-section">
            <div class="section-header">
                <h2>Riwayat Partisipasi</h2>
            </div>

            <div class="card riwayat-card">
                <div class="timeline">
                    
                    <!-- Item Riwayat 1 -->
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="riwayat-content">
                            <span class="riwayat-title">Piknik DTEDI Periode 2026</span>
                            <button class="btn-lihat">Lihat Riwayat</button>
                        </div>
                    </div>

                    <!-- Item Riwayat 2 -->
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="riwayat-content">
                            <span class="riwayat-title">Piknik DTEDI Periode 2026</span>
                            <button class="btn-lihat">Lihat Riwayat</button>
                        </div>
                    </div>

                    <!-- Item Riwayat 3 -->
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="riwayat-content">
                            <span class="riwayat-title">Piknik DTEDI Periode 2026</span>
                            <button class="btn-lihat">Lihat Riwayat</button>
                        </div>
                    </div>

                    <!-- Item Riwayat 4 -->
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="riwayat-content">
                            <span class="riwayat-title">Piknik DTEDI Periode 2026</span>
                            <button class="btn-lihat">Lihat Riwayat</button>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <i class="fa-solid fa-check-double" style="color: #2563eb;"></i>
        <span>Vonic</span>
    </footer>

</body>
</html>