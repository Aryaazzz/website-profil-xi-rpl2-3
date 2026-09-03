# Website Profil XI RPL
 Website ini merupakan proyek pembelajaran kolaborasi Git dan GitHub. 
 ## Anggota Tim 
 1. Arya pamukluhur prabawa - Project Manager 
 2. alifa - Developer 
 3. Afrizal- Developer 
 4. Yeni - Developer

 ## URL repository:
 https://github.com/Aryaazzz/website-profil-xi-rpl2-3.git

 ## Apa arti hasil git status ?
 git status digunakan untuk melihat kondisi repository Git saat ini, seperti branch yang sedang dipakai, perubahan file, dan apakah ada proses merge atau conflict yang belum selesai.

 ## Mengapa setiap developer tidak langsung bekerja pada main ?
 Karena kalau semua developer langsung bekerja di main, perubahan mereka bisa saling bertabrakan dan membuat kode utama rusak. Biasanya setiap developer bekerja di branch masing-masing, lalu setelah selesai dan sudah dicek, baru di-merge ke main agar lebih aman dan terkontrol.

 ## Apa fungsi git pull ?
 git pull berfungsi untuk mengambil perubahan terbaru dari repository remote (misalnya GitHub) dan menggabungkannya ke branch lokal yang sedang digunakan.

 ## Apa yang terjadi jika programmer tidak melakukan git pull ?
 Jika programmer tidak melakukan git pull, kode di komputernya bisa tidak mendapatkan perubahan terbaru dari programmer lain, sehingga dapat menyebabkan konflik saat melakukan push atau merge.

 ## Mengapa main harus dijaga agar tetap stabil?
 Karena main biasanya merupakan versi utama yang siap digunakan. Jika main tidak stabil, perubahan yang belum selesai atau memiliki bug bisa mengganggu seluruh project.

 ## Mengapa conflict terjadi?
 Conflict terjadi karena dua developer mengubah bagian yang sama pada file dengan isi yang berbeda.

 ## Apakah conflict berarti git rusak?
 Tidak. Conflict bukan berarti Git rusak, tetapi merupakan kondisi normal ketika Git tidak dapat menentukan perubahan mana yang harus digunakan.

 ## Siapa yang harus menentukan versi kode yang benar?
 Programmer yang mengerjakan fitur tersebut atau tim yang bertanggung jawab terhadap kode menentukan versi yang benar.

 ## Mengapa komunikasi antar programmer penting?
 Komunikasi penting agar programmer dapat menyepakati perubahan yang digunakan dan menghindari kesalahan atau konflik dalam pengembangan.

## TROUBLESHOOTING LOG
No	Error/Masalah	Penyebab	Solusi	Berhasil
1	git push rejected (fetch first)	Repository remote memiliki perubahan yang belum ada di lokal	Melakukan git pull atau git fetch lalu menggabungkan perubahan	Ya
2	not something we can merge	Branch hanya tersedia di remote	Menggunakan git merge origin/nama-branch	Ya
3	untracked working tree files would be overwritten by merge	Ada file lokal yang belum di-track dan akan tertimpa saat merge	Commit atau pindahkan file terlebih dahulu, kemudian lakukan merge	Ya
4	you have unmerged files	Masih terdapat conflict dari proses merge sebelumnya	Menyelesaikan conflict, git add, lalu git commit	Ya
5	Masuk ke Vim saat merge	Git meminta commit message untuk menyelesaikan merge	Tekan Esc, ketik :wq, lalu Enter	Ya
|

## REFLEKSI INDIVIDU

1. Apa perbedaan bekerja sendiri dengan bekerja menggunakan Git dan GitHub? Bekerja sendiri hanya menyimpan dan mengelola kode secara lokal, sedangkan menggunakan Git dan GitHub memungkinkan kode dilacak versinya, disimpan secara online, dikerjakan bersama, dan dikelola melalui branch serta merge.
2. Apa manfaat branch? Branch digunakan untuk mengerjakan fitur atau perubahan secara terpisah tanpa mengganggu kode utama (main).
3. Mengapa Pull Request diperlukan? Pull Request diperlukan untuk mengajukan perubahan agar dapat diperiksa, didiskusikan, dan disetujui sebelum digabungkan ke branch utama (main).
4. Apa manfaat Code Review?Code Review bermanfaat untuk memeriksa kualitas kode, menemukan kesalahan, dan memastikan kode sesuai standar sebelum digabungkan ke main.
5. Error apa yang paling sulit kalian selesaikan? Error git push rejected (fetch first) karena harus menyamakan perubahan lokal dengan repository remote sebelum melakukan push.
6. Bagaimana kalian menemukan solusinya?Dengan membaca pesan error, mencari penyebabnya, berdiskusi dengan anggota kelompok, dan menggunakan AI untuk membantu menemukan solusi.
7. Apa kontribusi terbesar kalian dalam kelompok? Kontribusi terbesar saya adalah membantu membuat dan mengembangkan website serta menyelesaikan masalah Git dan GitHub selama pengerjaan proyek.
8. Jika menjadi programmer profesional, kebiasaan apa dari kegiatan ini yang akan kalian pertahankan?  Kebiasaan yang akan saya pertahankan adalah menggunakan Git dengan disiplin, melakukan commit secara teratur, melakukan code review, dan berkomunikasi dengan anggota tim.

## REFLEKSI AKHIR
Sebelum belajar GitHub, saya berpikir bahwa... Sebelum belajar GitHub, saya berpikir bahwa bekerja dengan kode hanya perlu dilakukan sendiri

Setelah melakukan kolaborasi dengan GitHub, saya memahami bahwa... Setelah melakukan kolaborasi dengan GitHub, saya memahami bahwa GitHub memudahkan programmer untuk bekerja sama dan mengelola perubahan kode.

Kesalahan/error yang saya alami mengajarkan saya bahwa... Kesalahan/error yang saya alami mengajarkan saya bahwa setiap masalah dapat diselesaikan dengan memahami penyebabnya.

Jika saya bekerja sebagai programmer dalam sebuah tim, saya akan... Jika saya bekerja sebagai programmer dalam sebuah tim, saya akan berkomunikasi dengan baik, menggunakan Git dengan benar, dan bertanggung jawab terhadap tugas saya.