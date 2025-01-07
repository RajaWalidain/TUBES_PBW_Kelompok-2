# E-Learning System
## Pembelajararn E-learning.
E-learning telah menjadi alternatif utama dalam pembelajaran, namun pengembangannya menghadapi tantangan, seperti pengelolaan pengguna yang kompleks, manajemen materi oleh pengajar, dan pemberian penilaian. Pelajar sering menemui kendala dalam mengunggah tugas dan melihat penilaian, sementara interaksi antara pengajar dan pelajar sering terbatas. Selain itu, pengalaman pengguna yang kurang optimal dapat mengurangi partisipasi. Oleh karena itu, sistem e-learning perlu dirancang lebih efisien dengan fokus pada kemudahan penggunaan, manajemen konten, dan interaksi yang lebih baik antar pengguna untuk meningkatkan efektivitas pembelajaran.

### Nama Anggota Kelompok:

- Malaekha Rafli Lindan Iskandar - 4522210010
- Raja Walidain - 4522210013
- Daniel Daud Alberthus - 4522210055

## Penjelasan Actor, Use Case, ERD, Class Diagram, Dan Struktur Website. 

### Actor yang menggunakan:
1. User
2. Admin


### Usecase
![WhatsApp Image 2025-01-07 at 23 28 22_92214504](https://github.com/user-attachments/assets/881fb0a6-7a75-4697-8d6a-71c47ed8a449)

Usecase di atas merupakan representasi dari sistem e-learning yang melibatkan dua aktor utama, yaitu User dan Admin, dengan berbagai fungsi yang dapat diakses masing-masing. User memiliki kemampuan untuk mendaftar ke sistem (Register), masuk menggunakan akun yang sudah dibuat (Login), melihat daftar kursus yang tersedia (View Courses), serta mendaftar ke kursus pilihan (Enroll in Course). Sementara itu, Admin memiliki peran yang lebih luas dalam mengelola sistem, termasuk menambahkan pengguna baru (Add User), melihat daftar pengguna (View Users), serta mengelola kursus melalui fitur membuat kursus baru (Create Course), mengedit informasi kursus (Edit Course), menghapus kursus (Delete Course), dan memperbarui kursus (Update Course). Diagram ini mencerminkan pembagian peran yang jelas, di mana User berfokus pada penggunaan layanan, sedangkan Admin bertanggung jawab atas pengelolaan sistem secara keseluruhan.

### ERD
![WhatsApp Image 2025-01-07 at 23 26 49_b738297d](https://github.com/user-attachments/assets/0ddd7c47-eedf-44e8-9251-86714ba95e52)

ERD di atas merupakan representasi sistem e-learning yang melibatkan entitas User, Admin, dan Course dengan hubungan serta atribut masing-masing. User memiliki atribut berupa nama, email, dan password yang digunakan untuk mengakses sistem, serta memiliki kemampuan untuk melihat kursus yang tersedia. Admin memiliki atribut serupa, yaitu nama, email, dan password, dengan kemampuan tambahan berupa melakukan operasi CRUD (Create, Read, Update, Delete) pada data kursus. Entitas Course memiliki atribut berupa CourseID, harga (Price), judul (Judul), dan deskripsi (Deskripsi) yang menjadi informasi utama dalam pengelolaan kursus. Interaksi antara User dan Admin memungkinkan pengguna menambahkan kursus ke dalam sistem, sedangkan admin bertugas mengelola detail kursus yang tersedia. Diagram ini mencerminkan struktur sederhana dari pengelolaan data dan akses dalam sistem e-learning.


### Class Diagram
![WhatsApp Image 2025-01-07 at 23 07 59_992d5c2a](https://github.com/user-attachments/assets/6e48f966-1dd6-4678-a8f9-42ce770d8bca)

Class Diagram ini menggambarkan sistem pembelajaran online yang melibatkan tiga kelas utama: Admin, User, dan Course. Kelas Admin memiliki atribut seperti id, nama, email, dan password, dengan metode untuk mengelola kursus (create, edit, delete, update), menambah pengguna, dan melihat daftar pengguna. Kelas User memiliki atribut serupa dengan metode untuk login, register, dan melihat kursus berdasarkan CourseID. Kelas Course memiliki atribut id, nama, deskripsi, harga, dan penulis (author). Relasi antara Admin dan Course menunjukkan bahwa admin dapat mengelola kursus, sedangkan User dapat melihat kursus yang ada. Diagram ini menggambarkan struktur sistem dan relasi antar kelas dalam pengelolaan e-learning.
