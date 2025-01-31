<<<<<<< HEAD
Berikut adalah contoh BRD (Business Requirement Document) untuk sistem **Beasiswa Pertukaran Pelajar** dengan fitur utama terbatas pada pendaftaran peserta dan penerimaan beasiswa, sesuai urutan yang Anda minta:
=======
>>>>>>> fresh from the oven

---

# Dokumen Persyaratan Bisnis (BRD)
### Proyek: Beasiswa Pertukaran Pelajar
*Versi:* 1.0  
*Tanggal:* 14 November 2024  

---

## 1. Tujuan Proyek
Sistem ini bertujuan untuk memudahkan proses pendaftaran dan penerimaan beasiswa pertukaran pelajar secara online. Mahasiswa dapat mendaftar beasiswa setelah login ke sistem, dan admin dapat melihat daftar pendaftar serta menentukan penerima beasiswa. Dengan sistem ini, diharapkan proses seleksi penerima beasiswa lebih efisien dan terstruktur.

---

## 2. Fitur Utama

### Untuk Mahasiswa
- **Login**: Mahasiswa login ke sistem untuk mengakses pendaftaran beasiswa.
- **Pendaftaran Beasiswa**: Mahasiswa mengisi formulir pendaftaran beasiswa dengan data pribadi, akademik, dan motivasi.
- **Status Penerimaan**: Mahasiswa dapat melihat hasil penerimaan beasiswa setelah evaluasi admin selesai.
- **Logout**: Mahasiswa dapat keluar dari sistem setelah menyelesaikan proses.

### Untuk Admin
- **Login**: Admin login ke sistem untuk mengelola penerimaan beasiswa.
- **Penerimaan Beasiswa**: Admin melihat daftar pendaftar, mengevaluasi data, dan menetapkan mahasiswa yang diterima.
- **Logout**: Admin dapat keluar dari sistem setelah menyelesaikan tugas penerimaan.

---

## 3. Persyaratan Fungsional

### Sistem Login
- **Akses Berdasarkan Peran**: Mahasiswa login untuk mengakses pendaftaran dan melihat status penerimaan, sedangkan admin login untuk mengelola proses penerimaan beasiswa.

### Pendaftaran Beasiswa (Untuk Mahasiswa)
- **Formulir Pendaftaran Beasiswa**: Mahasiswa mengisi data pribadi, latar belakang akademik, dan motivasi mengikuti program.
- **Pengiriman Data**: Mahasiswa mengirimkan data pendaftaran ke sistem untuk ditinjau oleh admin.
- **Status Penerimaan**: Mahasiswa dapat memantau status pendaftaran beasiswa (diterima atau ditolak) melalui halaman utama.

### Penerimaan Beasiswa (Untuk Admin)
- **Lihat Daftar Pendaftar**: Admin dapat melihat data mahasiswa yang telah mendaftar beasiswa.
- **Evaluasi dan Status Penerimaan**: Admin mengevaluasi data pendaftar dan menentukan siapa yang diterima.
- **Notifikasi Penerimaan**: Setelah proses evaluasi, status penerimaan akan otomatis terlihat oleh mahasiswa.

---

## 4. Persyaratan Non-Fungsional

- **Keamanan Data**: Data pribadi mahasiswa harus terenkripsi dan hanya bisa diakses oleh admin untuk menjaga kerahasiaan.
- **Kemudahan Penggunaan**: Antarmuka yang sederhana untuk mahasiswa dan admin agar proses login, pendaftaran, dan evaluasi mudah dilakukan.
- **Kinerja Sistem**: Sistem mampu menangani banyak transaksi data mahasiswa tanpa penurunan performa yang signifikan.

---

## 5. Model, Migrasi, Resource, dan Data Awal yang Dibutuhkan

### Model

- **Applicants**: Menyimpan data pendaftar, termasuk informasi pribadi, akademik, dan motivasi mereka.
- **Evaluations**: Menyimpan catatan evaluasi dan status penerimaan.

### Struktur Tabel

- **Tabel Pendaftar (Applicants Table)**:
  - id: bigint UNSIGNED (Primary Key)
  - name: varchar(255) - Nama mahasiswa
  - email: varchar(255) - Email mahasiswa
  - academic_background: text - Latar belakang akademik
  - motivation: text - Motivasi mengikuti program
  - created_at: timestamp - Waktu pendaftaran
  - updated_at: timestamp - Waktu data diubah

- **Tabel Evaluasi (Evaluations Table)**:
  - id: bigint UNSIGNED (Primary Key)
  - applicant_id: bigint UNSIGNED - ID mahasiswa
  - status: enum('pending', 'accepted', 'rejected') - Status hasil seleksi
  - created_at: timestamp - Waktu evaluasi
  - updated_at: timestamp - Waktu evaluasi diubah

### Resource

#### Halaman untuk Mahasiswa
1. **Login**: Halaman login untuk mahasiswa agar bisa mengakses pendaftaran.
2. **Formulir Pendaftaran**: Halaman pendaftaran beasiswa yang memuat formulir online untuk diisi mahasiswa.
3. **Status Penerimaan**: Halaman untuk melihat status penerimaan beasiswa setelah evaluasi admin.
4. **Logout**: Fitur logout agar mahasiswa dapat keluar dari akun.

#### Halaman untuk Admin
1. **Login**: Halaman login khusus admin untuk mengakses penerimaan.
2. **Penerimaan Beasiswa**: Halaman yang memungkinkan admin untuk melihat daftar pendaftar, melakukan evaluasi, dan memperbarui status penerimaan.
3. **Logout**: Fitur logout agar admin dapat keluar dari akun.

### Data Awal (Seeder)
- Data awal untuk mahasiswa contoh yang telah mendaftar beasiswa.

---

BRD ini diharapkan mampu menjadi panduan bagi pengembangan aplikasi Beasiswa Pertukaran Pelajar yang memfasilitasi pendaftaran dan penerimaan beasiswa dengan urutan yang sederhana bagi mahasiswa dan admin.