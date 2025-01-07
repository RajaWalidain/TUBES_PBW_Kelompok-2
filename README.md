# E-Learning System
## Pembelajararn E-learning.
E-learning telah menjadi alternatif utama dalam pembelajaran, namun pengembangannya menghadapi tantangan, seperti pengelolaan pengguna yang kompleks, manajemen materi oleh pengajar, dan pemberian penilaian. Pelajar sering menemui kendala dalam mengunggah tugas dan melihat penilaian, sementara interaksi antara pengajar dan pelajar sering terbatas. Selain itu, pengalaman pengguna yang kurang optimal dapat mengurangi partisipasi. Oleh karena itu, sistem e-learning perlu dirancang lebih efisien dengan fokus pada kemudahan penggunaan, manajemen konten, dan interaksi yang lebih baik antar pengguna untuk meningkatkan efektivitas pembelajaran.

### Nama Anggota Kelompok:

- Malaekha Rafli Lindan Iskandar - 4522210010
- Raja Walidain - 4522210013
- Daniel Daud Alberthus - 4522210055

## Penjelasan Actor, Use Case, ERD, Class Diagram, Dan Struktur Website. 

### Actor yang menggunakan:
1. Teacher
2. Student
3. Admin


### Usecase
![USE CASE](https://github.com/user-attachments/assets/aa977bc9-bdee-4398-88c1-228dcd4d77ec)
Usecase tersebut menggambarkan sistem pembelajaran online dengan 3 pengguna utama: Pelajar, Admin, dan Pengajar. Pelajar dapat mendaftar kursus, mengakses materi, dan mengerjakan tugas. Admin mengelola pengguna dan kursus serta sistem login. Pengajar bertugas membuat kursus, mengunggah materi, dan memberikan tugas serta penilaian. Semua aktivitas terhubung melalui sistem autentikasi.

### ERD
![WhatsApp Image 2025-01-07 at 23 26 49_b738297d](https://github.com/user-attachments/assets/0ddd7c47-eedf-44e8-9251-86714ba95e52)

ERD ini menampilkan sistem pembelajaran online dengan 5 entitas utama: User (dengan atribut seperti UserID, nama, email, password, no HP, dan peran sebagai pengajar/pelajar/admin), Course (dengan detail courseID, judul, deskripsi, tanggal mulai/selesai, dan instrukturID), Materi (berisi materiID, courseID, judul, konten, dan tanggal unggah), Tugas (mencakup tugasID, courseID, judul, deskripsi, dan deadline), serta entitas penghubung berupa Pendaftaran (untuk mencatat registrasi course) dan Pengumpulan (untuk submission tugas). Setiap entitas saling terhubung melalui relasi yang menunjukkan interaksi antar komponen dalam sistem, seperti user memiliki course, course memiliki materi dan tugas, serta user melakukan pendaftaran dan pengumpulan tugas.


### Class Diagram
![WhatsApp Image 2025-01-07 at 23 07 59_992d5c2a](https://github.com/user-attachments/assets/6e48f966-1dd6-4678-a8f9-42ce770d8bca)

Class Diagram ini menggambarkan sistem pembelajaran online dengan 6 kelas utama yang saling terhubung: User (pengguna sistem), Course (mata pelajaran), Materi (konten pembelajaran), Tugas (penugasan), Pendaftaran (registrasi kursus), dan Pengumpulan (submission tugas). User dapat mengajar atau mengikuti Course, di mana setiap Course memiliki Materi dan Tugas. Siswa dapat mendaftar ke Course melalui kelas Pendaftaran dan mengumpulkan tugas melalui kelas Pengumpulan. Setiap kelas memiliki atribut yang diperlukan (seperti ID, nama, tanggal, dll) dan method-method untuk mengelola datanya (seperti create, update, delete).
