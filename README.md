<h1 align="center">✨ Portfolio Website ✨</h1>

<p align="center"> 
  <img src="https://img.shields.io/badge/HTML-Structure-E34F26?style=for-the-badge&logo=html5&logoColor=white"/> 
  <img src="https://img.shields.io/badge/CSS-Styling-1572B6?style=for-the-badge&logo=css3&logoColor=white"/> 
  <img src="https://img.shields.io/badge/Bootstrap-Framework-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white"/> 
  <img src="https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge&logo=php&logoColor=white"/> 
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white"/> 
  <img src="https://img.shields.io/badge/AOS-Animate_On_Scroll-5dade2?style=for-the-badge&logo=javascript&logoColor=white"/> 
</p>

---

## 👩‍💻 Disusun Oleh

| Keterangan | Data |
|:----------|:-----|
| Nama | Zahraturramadhani |
| NIM | 2409116014 |
| Kelas | A'2024 – Sistem Informasi |

---

# 📌 Deskripsi Singkat Project 

  Website ini dibuat sebagai pengembangan dari Mini Project sebelumnya, dengan tujuan utama mengubah website dari yang bersifat statis menjadi dinamis. Pada tahap awal, seluruh data ditulis langsung di dalam kode HTML, sehingga setiap perubahan data harus dilakukan secara manual melalui pengeditan kode. Hal ini tentu kurang efisien dan tidak fleksibel, terutama jika data sering mengalami perubahan.
  
  Pada project ini, pendekatan tersebut diperbaiki dengan mengintegrasikan database MySQL dan bahasa pemrograman PHP sebagai backend. Data seperti description, skills, experiences, dan certificates tidak lagi ditulis langsung di dalam HTML, melainkan disimpan di dalam database dan diambil secara dinamis menggunakan query PHP. Dengan demikian, perubahan data dapat dilakukan dengan lebih mudah melalui database tanpa perlu mengubah struktur tampilan website.
  
  Dalam proses pengembangan, HTML digunakan sebagai dasar untuk membangun struktur halaman, sedangkan CSS dan Bootstrap dimanfaatkan untuk mengatur tampilan agar lebih menarik, rapi, dan responsif di berbagai ukuran layar. Selain itu, penggunaan komponen Bootstrap membantu mempercepat proses pembuatan layout tanpa mengurangi konsistensi desain.
  
  Implementasi PHP dalam project ini berperan penting dalam menghubungkan website dengan database, serta menampilkan data secara dinamis menggunakan perulangan seperti while. Hal ini memungkinkan konten pada website dapat bertambah atau berubah secara otomatis sesuai dengan data yang tersimpan di database.
  
  Dengan menggabungkan frontend dan backend, website ini tidak hanya berfungsi sebagai tampilan statis, tetapi juga sebagai sistem sederhana yang mampu mengelola dan menampilkan data secara real-time. Pendekatan ini mencerminkan konsep dasar pengembangan web modern yang memisahkan antara data dan tampilan.
  
  Secara keseluruhan, website ini dirancang dengan tampilan yang bersih, modern, dan user-friendly, sehingga nyaman digunakan oleh pengunjung. Setiap section disusun secara terstruktur agar informasi dapat disampaikan dengan jelas dan mudah dipahami. Selain itu, website tetap mempertahankan sifat responsif sehingga dapat diakses dengan baik melalui berbagai perangkat, baik desktop maupun mobile.

---

# 📂 Struktur Project

  <img width="239" height="457" alt="image" src="https://github.com/user-attachments/assets/38a945d7-72fb-41dc-846d-7528d3e6c95f" />

  Struktur project ini dirancang secara sederhana namun tetap terorganisir dengan baik agar mudah dipahami dan dikembangkan. Pada folder utama terdapat beberapa file dan folder penting yang memiliki peran masing-masing dalam membangun keseluruhan sistem website.
  
  Folder **assets** digunakan untuk menyimpan seluruh file gambar yang digunakan pada website, seperti foto profil dan gambar sertifikat. Dengan memisahkan file gambar ke dalam satu folder khusus, pengelolaan file menjadi lebih rapi, terstruktur, dan mudah diakses ketika dibutuhkan. Hal ini juga membantu menjaga kebersihan struktur project agar tidak tercampur dengan file kode program.
  
  File **index.php** merupakan file utama yang berisi struktur dan tampilan website. Seluruh section seperti Home, About Me, Skills, Experience, dan Certificates ditampilkan melalui file ini. Selain itu, file ini juga berfungsi untuk menampilkan data secara dinamis dengan mengambil data dari database menggunakan PHP.
  
  File **koneksi.php** berfungsi sebagai penghubung antara website dan database MySQL. Di dalam file ini terdapat konfigurasi koneksi database yang memungkinkan website untuk melakukan pengambilan data. Dengan memisahkan koneksi ke dalam file tersendiri, kode menjadi lebih rapi, mudah digunakan kembali (reusable), serta mempermudah proses maintenance.
  
  File **style.css** digunakan untuk mengatur tampilan visual website, seperti warna, layout, typography, spacing, serta efek animasi. Penggunaan file CSS terpisah membantu menjaga struktur HTML tetap bersih dan memudahkan pengaturan desain secara terpusat.
  
  File **README.md** berisi dokumentasi lengkap mengenai project, mulai dari deskripsi, struktur folder, hingga penjelasan fitur dan teknologi yang digunakan. Dokumentasi ini sangat penting untuk membantu orang lain memahami isi project dengan lebih mudah.
  
  Secara keseluruhan, struktur project ini dibuat dengan pendekatan yang terorganisir dan modular, sehingga memudahkan dalam pengembangan lebih lanjut, seperti penambahan fitur baru atau integrasi dengan sistem lain di masa mendatang.

---

## 🗄️ Struktur Database

Database pada project ini terdiri dari beberapa tabel utama yang digunakan untuk menampilkan data secara dinamis pada website portfolio.

### 1. Tabel certificates
Menyimpan data sertifikat yang ditampilkan dalam bentuk card pada website.

- Isi Data: id, title (judul kegiatan), dan image (path gambar sertifikat).
- Fungsi: Data ditampilkan pada section Certificates dan dapat dilihat dalam bentuk preview (modal).

### 2. Tabel experiences
Menyimpan riwayat pengalaman organisasi dan kegiatan.

- Isi Data: id, title (nama kegiatan), year (tahun), dan description (deskripsi kegiatan).
- Fungsi: Ditampilkan pada section Experience untuk menunjukkan pengalaman dan aktivitas yang pernah dilakukan.

### 3. Tabel skills
Menyimpan data kemampuan atau keahlian.

- Isi Data: id, name (nama skill), dan level (tingkat kemampuan dalam persen).
- Fungsi: Ditampilkan dalam bentuk progress bar untuk menunjukkan tingkat penguasaan skill secara visual.

### 4. Tabel profile *(jika digunakan)*
Menyimpan informasi identitas pengguna.

- Isi Data: nama, peran, dan deskripsi singkat.
- Fungsi: Ditampilkan pada bagian utama website seperti Hero Section dan About Me.

---

# 🌐 Website Preview

 <img width="729" height="2560" alt="image" src="https://github.com/user-attachments/assets/1e2b7248-b659-4d7d-8fd6-788f4c0bd1f8" />

---

# 💻 Tampilan Setiap Section/Fitur

  ## 1️⃣ Section Home (Hero Section)

  <img width="1600" height="984" alt="image" src="https://github.com/user-attachments/assets/3caa7913-1bf1-4f95-90d0-059e99755a6e" />
  
  >Section Home merupakan bagian pertama yang langsung terlihat saat website dibuka. Pada bagian ini ditampilkan perkenalan singkat berupa nama, role sebagai Web Developer, serta deskripsi singkat mengenai minat dan fokus di bidang teknologi.
  >  
  >Di sisi kanan terdapat foto profil untuk memberikan kesan lebih personal. Selain itu, terdapat beberapa badge seperti Web Developer, UI/UX Enthusiast, dan Frontend Focused yang menggambarkan bidang yang diminati.
  >
  >Pada bagian ini juga ditambahkan tombol “Get to Know Me” yang mengarahkan ke section berikutnya, serta beberapa informasi singkat seperti jumlah project, sertifikat, dan lama belajar. Tampilan dibuat sederhana, bersih, dan nyaman dilihat agar pengunjung langsung mendapatkan gambaran umum tentang pemilik website.

  ## 2️⃣ Section About Me

  <img width="1541" height="2560" alt="image" src="https://github.com/user-attachments/assets/8e9dca66-70be-4ba7-8e58-8347675d4d9e" />

  >Pada bagian **About Me**, ditampilkan informasi mengenai latar belakang, minat, serta kemampuan yang dimiliki di bidang teknologi. Section ini dirancang untuk memberikan gambaran yang lebih mendalam kepada pengunjung mengenai profil pribadi secara singkat namun tetap informatif.
>
>Pada bagian **Profile**, dijelaskan bahwa saya merupakan mahasiswa Sistem Informasi yang memiliki ketertarikan pada bidang Web Development dan UI/UX Design. Penjelasan disusun secara ringkas namun tetap jelas agar mudah dipahami oleh pengunjung tanpa terasa terlalu panjang. Beberapa kata penting juga diberikan penekanan untuk menonjolkan bidang keahlian yang menjadi fokus utama.
>
>Selanjutnya, pada bagian **Skills**, ditampilkan daftar kemampuan teknis seperti HTML, CSS, JavaScript, Bootstrap, dan Python dalam bentuk progress bar. Setiap skill memiliki persentase yang menunjukkan tingkat penguasaan. Penyajian dalam bentuk visual ini bertujuan agar informasi dapat dipahami dengan lebih cepat dan tidak membosankan. Data skills pada website ini ditampilkan secara dinamis dengan mengambil data dari database menggunakan PHP, sehingga dapat diperbarui dengan mudah tanpa mengubah kode tampilan.
>
>Masih dalam section yang sama, terdapat bagian **Experience** yang menampilkan pengalaman yang dimiliki, baik dalam bentuk project maupun kegiatan organisasi. Data pengalaman disusun dalam bentuk timeline agar terlihat lebih rapi, terstruktur, dan mudah diikuti berdasarkan urutan waktu. Setiap pengalaman dilengkapi dengan judul, tahun, serta deskripsi singkat mengenai peran atau kontribusi yang dilakukan.
>
>Berbeda dengan pendekatan sebelumnya yang menggunakan data statis, pada project ini data pengalaman ditampilkan secara dinamis menggunakan PHP dengan mengambil data langsung dari database MySQL. Dengan cara ini, penambahan atau perubahan data dapat dilakukan tanpa harus mengubah struktur HTML.
>
>Secara keseluruhan, section About Me dirancang dengan kombinasi antara tampilan visual yang menarik dan penyajian informasi yang terstruktur, sehingga pengunjung dapat dengan mudah memahami profil, kemampuan, serta pengalaman yang dimiliki.


  ## 3️⃣ Section Certificates

  <img width="1388" height="1600" alt="image" src="https://github.com/user-attachments/assets/1b18f089-94d3-4ac6-abfc-b0372e4432a8" />

  >Bagian Certificates menampilkan kumpulan sertifikat yang diperoleh dari berbagai kegiatan, seperti organisasi, pelatihan, dan webinar. Setiap sertifikat disajikan dalam bentuk card agar tampilan lebih terstruktur, rapi, dan mudah untuk ditelusuri oleh pengguna.
>
>Setiap card memuat gambar sertifikat serta judul kegiatan yang diikuti. Untuk melihat detail secara lebih jelas, pengguna dapat menekan tombol Preview yang tersedia pada setiap card. Fitur ini akan menampilkan sertifikat dalam ukuran yang lebih besar melalui pop-up, sehingga informasi dapat dibaca dengan lebih nyaman tanpa mengganggu tampilan utama halaman.
>
>Bagian ini bertujuan untuk menunjukkan pengalaman serta partisipasi dalam berbagai kegiatan yang mendukung pengembangan diri, baik dalam aspek akademik maupun non-akademik. Desain dibuat sederhana namun tetap informatif, sehingga tetap nyaman dilihat meskipun jumlah sertifikat yang ditampilkan cukup banyak.

  ## 4️⃣ Navbar

  <img width="1907" height="88" alt="image" src="https://github.com/user-attachments/assets/972bbd85-8703-418c-b347-91af91c85fca" />

  >
  >Navbar berada di bagian paling atas website dan berfungsi sebagai navigasi utama. Di dalamnya terdapat nama website “Zahra’s Portfolio” serta menu seperti Home, About Me, dan Certificates.
  >
  >Menu ini dibuat agar pengunjung bisa berpindah antar section dengan mudah tanpa harus scroll terlalu jauh. Navbar juga dibuat tetap berada di atas (fixed) sehingga tetap terlihat saat halaman digulir.
  >
  >Tampilan navbar dibuat sederhana dengan warna yang selaras dengan tema website agar terlihat bersih dan tidak terlalu ramai.

  ## 5️⃣ Footer

  <img width="1901" height="91" alt="image" src="https://github.com/user-attachments/assets/e2ae3517-b898-4681-a46d-3bdd386174e5" />

  >Footer berada di bagian paling bawah halaman dan berisi informasi copyright. Pada bagian ini ditampilkan tahun pembuatan website serta nama pemilik website.
  >
  >Walaupun sederhana, footer tetap penting karena menjadi penutup halaman dan memberikan identitas yang jelas terhadap website tersebut. Desainnya dibuat minimalis agar tetap konsisten dengan keseluruhan tampilan website.

---
# 📝 Penjelasan Code Setiap Section/Fitur

## ➡️ Code Section Home (Hero Section)

<img width="655" height="915" alt="image" src="https://github.com/user-attachments/assets/3593e5ce-8402-4f78-b039-c0b01173b347" />

>Pada bagian **Home (Hero Section)**, struktur utama dibuat menggunakan elemen *section* dengan id **home** agar dapat diakses melalui navigasi pada navbar. Di dalamnya digunakan *container* dan *row* dari Bootstrap untuk membagi layout menjadi dua kolom, yaitu bagian kiri yang berisi teks dan bagian kanan yang menampilkan foto profil.
>
>Pada bagian kiri, terdapat beberapa elemen utama seperti heading (nama), role sebagai Web Developer, deskripsi singkat, badge, tombol navigasi, serta informasi statistik. Deskripsi pada section ini tidak lagi ditulis secara statis di dalam HTML, melainkan diambil secara dinamis dari database MySQL menggunakan PHP. Data tersebut diambil melalui query SQL dan ditampilkan menggunakan PHP, sehingga konten dapat diubah tanpa perlu mengedit kode HTML secara langsung.
>
>Untuk pengaturan tata letak, digunakan sistem grid dan utility class dari Bootstrap seperti flexbox dan spacing agar elemen tersusun rapi serta tetap responsif di berbagai ukuran layar. Pendekatan ini memudahkan dalam mengatur posisi elemen tanpa perlu banyak penyesuaian manual pada CSS.
>
>Pada bagian kanan, ditampilkan foto profil yang dibungkus dalam elemen khusus untuk memberikan efek visual seperti frame dan shadow. Selain itu, ditambahkan atribut animasi dari library AOS sehingga gambar muncul dengan efek transisi ketika halaman di-scroll, yang membuat tampilan lebih interaktif dan menarik.
>
>Styling tambahan seperti warna, gradient, shadow, serta efek hover diatur melalui file CSS terpisah (style.css) agar tampilan tetap konsisten dan mudah dikelola.
>
>Secara keseluruhan, section Home ini menggabungkan HTML sebagai struktur, CSS sebagai tampilan, Bootstrap untuk layout responsif, PHP untuk pengambilan data secara dinamis dari database, serta AOS untuk memberikan efek animasi pada elemen.

## ➡️ Code Section About Me

<img width="839" height="960" alt="image" src="https://github.com/user-attachments/assets/f865d1e9-7894-45b1-afe9-1b7e6b9d9b7e" />

<img width="839" height="484" alt="image" src="https://github.com/user-attachments/assets/2b712dad-f8c9-4783-af35-c0c9ae558795" />

>Pada section **About Me**, struktur utama dibuat menggunakan elemen *section* dengan id **about** agar dapat terhubung langsung dengan navigasi pada navbar maupun tombol pada Hero Section. Di dalamnya digunakan *container* untuk menjaga lebar konten tetap rapi, serta sistem grid dari Bootstrap untuk mengatur pembagian layout secara responsif.
>
>Bagian ini dibagi menjadi dua kolom utama. Kolom pertama berisi profil atau deskripsi diri, sedangkan kolom kedua menampilkan daftar skills. Penggunaan class grid seperti *col-lg-6* memungkinkan tampilan terbagi menjadi dua kolom pada layar besar, namun secara otomatis menyesuaikan menjadi satu kolom pada layar kecil sehingga tetap responsif.
>
>Pada bagian **Profile**, digunakan elemen heading dan paragraf untuk menyusun informasi secara terstruktur. Beberapa kata diberikan penekanan menggunakan elemen *strong* agar terlihat lebih menonjol. Pengaturan tampilan seperti warna teks, spacing, dan typography diatur melalui kombinasi class Bootstrap dan CSS custom pada file *style.css*.
>
>Pada bagian **Skills**, digunakan komponen progress bar untuk menampilkan tingkat kemampuan secara visual. Data skills tidak ditulis secara statis, melainkan diambil dari database MySQL menggunakan PHP. Proses pengambilan data dilakukan melalui query SQL, kemudian ditampilkan menggunakan perulangan *while*. Setiap skill ditampilkan dalam bentuk nama dan persentase, serta progress bar yang lebarnya menyesuaikan nilai yang tersimpan di database. Pendekatan ini membuat data skills dapat diperbarui dengan mudah tanpa perlu mengubah kode HTML.
>
>Masih dalam section yang sama, terdapat bagian **Experience** yang ditampilkan menggunakan struktur timeline. Data pengalaman juga diambil secara dinamis dari database MySQL menggunakan PHP dengan perulangan *while*. Setiap data pengalaman yang tersimpan akan otomatis ditampilkan dalam bentuk item timeline yang terdiri dari judul, tahun, dan deskripsi.
>
>Struktur timeline terdiri dari container utama, elemen titik (*timeline-dot*), serta konten pengalaman. Styling seperti garis vertikal, efek hover, dan transisi diatur melalui CSS custom agar tampilan lebih menarik dan tidak monoton.
>
>Secara keseluruhan, section About Me ini menggabungkan HTML sebagai struktur konten, Bootstrap untuk layout responsif dan komponen visual seperti progress bar, PHP untuk mengambil dan menampilkan data secara dinamis dari database, serta CSS custom untuk memperkuat tampilan dan pengalaman pengguna.

## ➡️ Code Section Certificates

<img width="1030" height="924" alt="image" src="https://github.com/user-attachments/assets/56057fae-2acf-4509-9e92-0d57b6770b05" />

>Pada section Certificates, struktur utama dibangun menggunakan elemen <section> dengan atribut id="certificates", sehingga dapat terhubung langsung dengan menu navigasi pada navbar. Penggunaan class seperti py-5 berfungsi untuk memberikan jarak (padding) pada bagian atas dan bawah, sedangkan bg-soft digunakan untuk memberikan perbedaan warna latar belakang agar section ini terlihat terpisah dari bagian lainnya.
>
>Di dalam section tersebut, digunakan komponen container dan row dari Bootstrap untuk mengatur tata letak card sertifikat. Sistem grid Bootstrap seperti col-lg-4 dan col-md-6 memungkinkan jumlah card dalam satu baris menyesuaikan ukuran layar. Pada layar besar ditampilkan tiga card, pada layar sedang dua card, dan pada layar kecil satu card per baris, sehingga tampilan tetap responsif tanpa perlu penambahan media query secara manual.
>
>Data sertifikat tidak dituliskan secara statis di dalam HTML, melainkan diambil secara dinamis dari database MySQL menggunakan PHP. Proses ini dilakukan melalui query SQL SELECT * FROM certificates, kemudian data ditampilkan menggunakan perulangan while. Dengan pendekatan ini, setiap data yang tersimpan di database akan otomatis ditampilkan sebagai card, sehingga memudahkan pengelolaan dan pembaruan data tanpa harus mengubah struktur HTML secara langsung.
>
>Setiap sertifikat ditampilkan dalam bentuk komponen card yang berisi gambar dan judul kegiatan. Sumber gambar diambil dari field yang tersimpan di database, sehingga bersifat dinamis dan fleksibel. Hal ini menunjukkan adanya integrasi antara backend (PHP dan MySQL) dengan frontend (HTML dan Bootstrap) dalam menampilkan data.
>
>Selain itu, setiap card dilengkapi dengan tombol Preview yang terhubung dengan komponen modal Bootstrap. Ketika tombol ditekan, sertifikat akan ditampilkan dalam ukuran yang lebih besar melalui pop-up, sehingga pengguna dapat melihat detail dengan lebih jelas tanpa meninggalkan halaman utama.
>
>Untuk meningkatkan pengalaman pengguna, ditambahkan juga animasi menggunakan library AOS dengan atribut seperti data-aos="zoom-in", sehingga card muncul dengan efek transisi saat halaman di-scroll. Styling tambahan seperti bayangan (shadow), efek hover, dan tampilan card diatur melalui file CSS terpisah (style.css) untuk memperkuat aspek visual.
>
>Secara keseluruhan, section Certificates ini merupakan hasil integrasi antara HTML sebagai struktur utama, Bootstrap sebagai framework layout responsif, PHP sebagai penghubung ke database, MySQL sebagai penyimpanan data, AOS untuk animasi, serta CSS custom untuk mempercantik tampilan. Kombinasi ini menghasilkan tampilan yang dinamis, responsif, dan user-friendly.


## ➡️ Code Head (Import Library & Styling)

<img width="807" height="303" alt="image" src="https://github.com/user-attachments/assets/23f1da5f-678c-4c44-acfc-8c0cc2f451bb" />

>Pada bagian **head**, ditambahkan beberapa file eksternal yang digunakan untuk mendukung tampilan serta fungsionalitas website secara keseluruhan. Bagian ini berperan penting dalam menentukan bagaimana website ditampilkan di berbagai perangkat serta bagaimana elemen-elemen visual dapat bekerja dengan baik.
>
>Meta tag *viewport* digunakan agar tampilan website dapat menyesuaikan ukuran layar perangkat, sehingga website tetap responsif baik di desktop maupun mobile. Selain itu, meta charset digunakan untuk memastikan karakter yang ditampilkan dapat terbaca dengan baik.
>
>Untuk membangun layout yang responsif dan terstruktur, digunakan framework Bootstrap yang diimpor melalui CDN. Bootstrap menyediakan berbagai komponen seperti navbar, grid system, card, dan utility class yang memudahkan dalam pengembangan tampilan website tanpa perlu membuat semuanya dari awal. Selain itu, Bootstrap Icons juga digunakan untuk menambahkan elemen visual berupa ikon agar tampilan lebih menarik.
>
>Library AOS (Animate On Scroll) ditambahkan untuk memberikan efek animasi pada elemen saat halaman di-scroll. Dengan penggunaan AOS, tampilan website menjadi lebih interaktif dan tidak terasa statis.
>
>Untuk memperindah tampilan teks, digunakan Google Fonts seperti *Poppins* dan *Montserrat*. Penggunaan font ini bertujuan untuk meningkatkan kualitas typography sehingga tampilan website terlihat lebih modern dan konsisten.
>
>Terakhir, ditambahkan file CSS eksternal (*style.css*) yang berfungsi untuk mengatur styling tambahan seperti warna tema, layout, spacing, shadow, serta efek hover. Pemisahan styling ke dalam file terpisah ini membantu menjaga struktur HTML tetap bersih serta memudahkan dalam pengelolaan desain website.
>
>Secara keseluruhan, bagian head ini mengintegrasikan berbagai library dan resource eksternal yang mendukung tampilan responsif, desain modern, serta pengalaman pengguna yang lebih baik.

## ➡️ Code Navbar

<img width="800" height="330" alt="image" src="https://github.com/user-attachments/assets/625a998b-29c1-4f7f-87c2-da228faa15a0" />

>Pada bagian **Navbar**, struktur utama dibuat menggunakan elemen *nav* dengan bantuan class dari Bootstrap seperti *navbar*, *navbar-expand-lg*, dan *fixed-top*. Class *navbar-expand-lg* digunakan agar menu navigasi ditampilkan secara horizontal pada layar besar, namun akan berubah menjadi menu toggle (hamburger) pada layar yang lebih kecil. Sementara itu, penggunaan *fixed-top* membuat navbar tetap berada di bagian atas halaman meskipun pengguna melakukan scroll.
>
>Di dalam navbar terdapat elemen *container* yang berfungsi untuk menjaga lebar konten agar tetap rapi dan terpusat. Pada bagian kiri, ditampilkan brand atau nama website menggunakan elemen *a* dengan class *navbar-brand*. Untuk memperkuat tampilan visual, ditambahkan ikon dari Bootstrap Icons yang memberikan kesan lebih menarik dan modern.
>
>Untuk mendukung tampilan responsif, digunakan tombol *navbar-toggler* yang berfungsi untuk membuka dan menutup menu navigasi pada perangkat dengan layar kecil. Fitur ini memanfaatkan atribut *data-bs-toggle* dan *data-bs-target* dari Bootstrap, sehingga dapat berjalan tanpa perlu menambahkan JavaScript secara manual.
>
>Menu navigasi ditampilkan dalam bentuk list menggunakan elemen *ul* dan *li* dengan class *navbar-nav*. Setiap item menu menggunakan anchor link seperti *#home*, *#about*, dan *#certificates*, sehingga ketika diklik halaman akan langsung berpindah ke section yang sesuai tanpa melakukan reload halaman.
>
>Selain itu, styling tambahan seperti warna, background gradient, serta efek hover diatur melalui CSS custom pada file *style.css* agar tampilan navbar tetap konsisten dengan tema keseluruhan website.
>
>Secara keseluruhan, bagian Navbar ini menggabungkan HTML sebagai struktur, Bootstrap untuk sistem navigasi responsif, serta CSS custom untuk memperkuat tampilan visual dan meningkatkan kenyamanan pengguna dalam melakukan navigasi.


## ➡️ Code Footer

<img width="741" height="94" alt="image" src="https://github.com/user-attachments/assets/07ca7b84-05b8-4d45-a0c5-e41452a7a377" />

>Pada bagian **Footer**, struktur dibuat menggunakan elemen *footer* yang diletakkan di bagian paling bawah halaman sebagai penutup dari seluruh konten website. Bagian ini berfungsi untuk memberikan informasi tambahan sekaligus identitas pemilik website.
>
>Class seperti *text-center* digunakan untuk membuat teks berada di posisi tengah secara horizontal, sehingga tampilan terlihat lebih rapi dan seimbang. Selain itu, class *py-4* digunakan untuk memberikan jarak (padding) pada bagian atas dan bawah agar footer tidak terlihat terlalu rapat dengan konten di atasnya.
>
>Isi dari footer berupa informasi *copyright* yang menampilkan tahun pembuatan website serta nama pemilik website. Walaupun sederhana, elemen ini memiliki peran penting sebagai penutup halaman sekaligus memberikan identitas yang jelas terhadap website tersebut.
>
>Styling tambahan seperti warna latar belakang, teks, serta konsistensi desain diatur melalui class custom seperti *footer-soft* yang didefinisikan dalam file *style.css*. Hal ini bertujuan agar tampilan footer tetap selaras dengan tema keseluruhan website.
>
>Secara keseluruhan, bagian Footer ini menggabungkan HTML sebagai struktur dasar dan CSS custom untuk memperkuat tampilan visual, sehingga menghasilkan desain yang sederhana namun tetap informatif dan konsisten.


## ➡️ Code JavaScript (AOS & Interactivity)

<img width="803" height="140" alt="image" src="https://github.com/user-attachments/assets/a64c918f-06b1-4a09-9d03-0acea2b80a60" />

>Pada bagian **script**, digunakan JavaScript untuk mendukung interaksi serta fungsionalitas tambahan pada website. Script yang digunakan pada project ini bersifat sederhana dan difokuskan pada penggunaan library eksternal untuk meningkatkan tampilan visual.
>
>Salah satu library yang digunakan adalah **Bootstrap JavaScript**, yang berfungsi untuk mendukung komponen interaktif seperti navbar toggle pada perangkat dengan layar kecil. Dengan adanya Bootstrap JS, fitur seperti menu dropdown dan hamburger dapat berjalan tanpa perlu menulis kode JavaScript secara manual.
>
>Selain itu, digunakan juga library **AOS (Animate On Scroll)** yang berfungsi untuk memberikan efek animasi pada elemen ketika halaman di-scroll. Inisialisasi AOS dilakukan melalui perintah *AOS.init()* dengan pengaturan durasi animasi agar transisi terlihat lebih halus dan menarik.
>
>Berbeda dengan versi sebelumnya yang menggunakan Vue JS untuk mengelola data dan interaksi, pada project ini tidak lagi menggunakan framework frontend tersebut. Seluruh data ditampilkan secara dinamis menggunakan PHP yang terhubung dengan database MySQL, sehingga peran JavaScript lebih difokuskan pada aspek tampilan dan interaktivitas saja.
>
>Dengan pendekatan ini, struktur kode menjadi lebih sederhana dan fokus pada pemisahan antara backend (PHP & database) dan frontend (HTML, CSS, dan JavaScript).
>
>Secara keseluruhan, bagian script ini menggabungkan Bootstrap JS untuk komponen interaktif serta AOS untuk animasi, sehingga menghasilkan tampilan website yang tetap dinamis dan menarik tanpa menggunakan framework tambahan seperti Vue JS.


## ➡️ Code CSS (style.css)

<img width="734" height="1018" alt="image" src="https://github.com/user-attachments/assets/233d30af-a391-4bf9-a029-ae2517ddaad5" />

>File **style.css** digunakan untuk menambahkan styling tambahan yang tidak sepenuhnya disediakan oleh Bootstrap. Meskipun Bootstrap sudah menyediakan berbagai komponen dan utility class, diperlukan penyesuaian lebih lanjut agar tampilan website memiliki identitas visual yang lebih unik dan sesuai dengan desain yang diinginkan.
>
>Pada file ini, saya mengatur berbagai aspek visual seperti warna utama (color palette), background gradient, jenis font, serta pengaturan spacing (margin dan padding) antar elemen. Pengaturan ini bertujuan untuk menciptakan tampilan yang konsisten, rapi, dan nyaman dilihat oleh pengguna.
>
>Beberapa bagian penting seperti **hero section**, **timeline pada Experience**, serta **progress bar pada Skills** juga diatur menggunakan CSS custom. Dengan penyesuaian ini, tampilan tidak hanya mengikuti default Bootstrap, tetapi memiliki gaya yang lebih modern dan menarik. Selain itu, ditambahkan juga efek *hover* pada elemen seperti card dan button untuk memberikan feedback visual ketika pengguna berinteraksi dengan website.
>
>File ini juga digunakan untuk mengatur elemen dekoratif seperti *shadow*, *border radius*, serta efek transisi (*transition*) agar setiap perubahan tampilan terasa lebih halus dan tidak kaku. Penggunaan efek ini membantu meningkatkan pengalaman pengguna (user experience) dengan memberikan kesan interaktif pada setiap elemen.
>
>Selain itu, CSS custom juga digunakan untuk mengatur elemen khusus seperti frame pada foto profil, garis timeline, serta detail kecil lainnya yang tidak tersedia secara langsung di Bootstrap. Hal ini memungkinkan desain website menjadi lebih fleksibel dan tidak terlihat seperti template bawaan.
>
>Secara keseluruhan, file **style.css** berfungsi sebagai pelengkap dari Bootstrap dalam membangun tampilan website, sekaligus memperkuat identitas visual agar terlihat lebih profesional, modern, dan konsisten di seluruh bagian website.

---

# 🛠️ Teknologi yang digunakan

## <img src="https://img.shields.io/badge/HTML-Structure-E34F26?style=for-the-badge&logo=html5&logoColor=white"/>

Digunakan untuk membangun struktur dasar website seperti section, navbar, card, heading, dan elemen konten lainnya. HTML menjadi fondasi utama dalam menyusun tata letak halaman.

Selain itu, penggunaan elemen semantik seperti _**section**_, _**nav**_, dan _**footer**_ membantu membuat struktur halaman lebih terorganisir dan mudah dipahami, baik oleh pengguna maupun mesin pencari.

---

## <img src="https://img.shields.io/badge/CSS-Styling-1572B6?style=for-the-badge&logo=css3&logoColor=white"/> 

Digunakan untuk mengatur tampilan visual seperti warna, font, spacing, gradient, shadow, serta efek hover. Styling tambahan disimpan dalam file style.css agar tampilan lebih rapi dan terpisah dari struktur HTML.

CSS juga digunakan untuk menyesuaikan komponen Bootstrap agar sesuai dengan tema website yang diinginkan, seperti pengaturan warna utama, efek transisi, serta desain timeline pada bagian Experience.

---

## <img src="https://img.shields.io/badge/Bootstrap-Framework-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white"/> 

Digunakan untuk membantu pembuatan layout responsif melalui sistem grid serta komponen siap pakai seperti navbar, card, button, dan progress bar. Bootstrap membuat tampilan tetap konsisten di berbagai ukuran layar tanpa perlu banyak media query manual.

Dengan memanfaatkan utility class seperti spacing (mt, mb, py), flexbox, dan sistem kolom (col-lg, col-md), proses pengembangan menjadi lebih cepat dan efisien.

---

## <img src="https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge&logo=php&logoColor=white"/> 

Digunakan sebagai bahasa pemrograman backend untuk menghubungkan website dengan database MySQL serta menampilkan data secara dinamis.

Pada project ini, PHP berperan dalam mengambil data dari database menggunakan query SQL, seperti data description, skills, experiences, dan certificates. Data tersebut kemudian ditampilkan ke dalam halaman website menggunakan perulangan seperti *while*, sehingga setiap perubahan data di database akan langsung tercermin pada tampilan website tanpa perlu mengubah kode HTML.

Selain itu, penggunaan PHP memungkinkan pemisahan antara data dan tampilan (separation of concern), sehingga struktur kode menjadi lebih rapi, mudah dikelola, dan dapat dikembangkan lebih lanjut.


---

## <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white"/> 

Digunakan sebagai sistem manajemen database untuk menyimpan seluruh data yang ditampilkan pada website.

Pada project ini, MySQL digunakan untuk menyimpan berbagai data seperti deskripsi profil, daftar skills, pengalaman (experiences), serta sertifikat (certificates). Data disimpan dalam bentuk tabel yang terstruktur, sehingga mudah untuk diakses, diperbarui, maupun ditambahkan.

Dengan menggunakan database, pengelolaan data menjadi lebih fleksibel dibandingkan dengan penulisan data secara statis di dalam HTML. Setiap perubahan data dapat dilakukan langsung melalui database tanpa perlu mengubah kode program, sehingga proses maintenance menjadi lebih efisien dan praktis.


---

## ![AOS](https://img.shields.io/badge/AOS-Animate_On_Scroll-5dade2?style=for-the-badge&logo=javascript&logoColor=white)

Digunakan untuk memberikan efek animasi saat elemen muncul ketika halaman discroll.

Library ini membantu meningkatkan pengalaman pengguna (user experience) dengan membuat transisi antar elemen terasa lebih halus dan tidak statis. Implementasi dilakukan melalui atribut seperti data-aos, tanpa perlu menulis animasi JavaScript secara manual.
