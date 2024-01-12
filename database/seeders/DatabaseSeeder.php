<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Resources;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        Resources::insert([
          [
            'identifier' => 'penting-manufaktur-perlu-terapkan-artificial-intelligence-2',
            'type' => 'article',
            'title' => 'Penting! Manufaktur Perlu Terapkan Artificial Intelligence',
            'img-path' => 'https://ravelware.files.wordpress.com/2024/01/image-9.png',
            'tags' => 'Artificial Intelligence, industri 4.0, Internet of Things',
            'date' => 'January 12, 2024',
            'content' => "
          
          <p>Artificial Intelligence (AI) atau kecerdasan buatan adalah bidang ilmu komputer yang bertujuan untuk menciptakan komputer atau sistem komputasi yang mampu meniru perilaku manusia atau memiliki kemampuan yang mirip dengan pikiran manusia.</p>
          <p>Pengembangan AI telah menyentuh berbagai bidang, termasuk transportasi otomatis, sistem rekomendasi, pelayanan kesehatan, keamanan siber, dan banyak lagi.</p>
          <p>Dalam manufaktur penggunaan AI dalam manufaktur bertujuan untuk meningkatkan efisiensi produksi, mengoptimalkan proses, mengurangi biaya, dan meningkatkan kualitas produk. Berikut 3 alasan penting penggunaan AI dalam manufaktur yang perlu diperhatikan :</p>
          <ul>
          <li>Prediksi Permintaan (Demand Forecasting) : AI menggunakan data historis dan faktor-faktor eksternal seperti cuaca, tren pasar, atau peristiwa khusus untuk memprediksi permintaan produk di masa mendatang, membantu perusahaan manufaktur dalam merencanakan produksi dan persediaan dengan lebih efektif.</li>
          </ul>
          <ul>
          <li>Kualitas dan Inspeksi : AI dapat digunakan untuk memeriksa dan mengidentifikasi cacat atau ketidaksesuaian pada produk secara otomatis melalui analisis gambar dan teknologi penglihatan komputer. Dengan demikian, meningkatkan tingkat keakuratan dan konsistensi inspeksi.</li>
          </ul>
          <ul>
          <li>Prediksi Perawatan (Predictive Maintenance) : AI dapat digunakan untuk memprediksi kegagalan peralatan atau mesin di pabrik sebelum terjadi kerusakan yang serius. Dengan menganalisis data sensor dan performa mesin secara real-time, AI dapat memberikan peringatan dini, memungkinkan perawatan preventif, dan menghindari kerugian akibat downtime produksi yang tidak terduga.</li>
          </ul>
          <p>Dengan penggunaan AI dalam manufaktur, perusahaan dapat meningkatkan efisiensi produksi, mengurangi biaya operasional, meningkatkan kualitas produk, dan merespons perubahan pasar dengan lebih cepat dan tepat. Namun, penerapan AI dalam manufaktur juga memerlukan integrasi teknologi yang cermat, pelatihan karyawan, dan kebijakan keamanan yang tepat agar dapat berjalan dengan sukses.</p>
          ",
            'views' => 0,
            'visitors' => 0,
            'likes' => 0
          ],
          [
            'identifier' => 'potensi-aplikasi-graphene-dalam-intelligent-manufacture-system',
            'type' => 'article',
            'title' => 'Potensi Aplikasi Graphene dalam Intelligent Manufacture System',
            'img-path' => 'https://ravelware.files.wordpress.com/2024/01/image-8.png',
            'tags' => 'Graphene, industri 4.0',
            'date' => 'January 11, 2024',
            'content' => "
          
          <p>Graphene, sebagai material dengan sifat-sifat unik seperti konduktivitas termal dan listrik yang tinggi, kekuatan yang luar biasa, dan fleksibilitas, dapat memiliki beberapa aplikasi dalam sistem manufaktur cerdas atau Intelligent Manufacturing System (IMS).</p>
          <p>Penggunaan graphene dalam IMS bergantung pada kebutuhan spesifik dan aplikasi tertentu dalam industri manufaktur cerdas. Karena sifat uniknya, graphene memiliki potensi untuk mengoptimalkan proses dan meningkatkan kinerja dalam berbagai aplikasi dalam konteks IMS.</p>
          <p>Berikut adalah beberapa potensi aplikasi graphene dalam IMS:</p>
          <ul>
          <li>Sensor dan Material Kuat</li>
          </ul>
          <p>Graphene dapat digunakan sebagai bahan sensor karena sensitivitasnya terhadap perubahan lingkungan. Dalam IMS, sensor berbasis graphene dapat digunakan untuk memonitor parameter-proses kritis seperti suhu, tekanan, dan kelembaban. Serta penambahan material komposit, graphene dapat meningkatkan kekuatan dan sifat mekaniknya. Ini dapat diterapkan dalam pembuatan komponen-komponen mesin atau struktur dalam IMS untuk meningkatkan kinerja dan daya tahan</p>
          <ul>
          <li>Penghantar dan Penyimpan Energi</li>
          </ul>
          <p>Sifat konduktif graphene dapat diterapkan dalam manufaktur perangkat elektronik yang canggih dan sistem terkait. Ini dapat membantu dalam pembuatan perangkat elektronik yang lebih efisien dari segi energi dan performa. Graphene dapat diterapkan dalam pengembangan baterai dan superkapasitor berkinerja tinggi. Dalam konteks IMS, ini dapat meningkatkan efisiensi energi dan mendukung solusi penyimpanan energi yang andal.</p>
          <ul>
          <li>Pengembangan Komponen Elektronik</li>
          </ul>
          <p>Dalam upaya untuk mengintegrasikan IoT (Internet of Things) dan sensor cerdas dalam IMS, graphene dapat digunakan untuk mengembangkan komponen elektronik cerdas yang lebih ringkas dan efisien. Graphene dapat digunakan sebagai lapisan pelindung untuk melindungi komponen kritis dari aus atau korosi. Ini dapat meningkatkan umur dan keandalan peralatan dalam sistem manufaktur.</p>
          ",
            'views' => 0,
            'visitors' => 0,
            'likes' => 0
          ],
          [
            'identifier' => 'ravelware-smart-logistic-terkini-untuk-efisiensi-dan-kinerja-optimal',
            'type' => 'article',
            'title' => 'Ravelware : Smart Logistic Terkini untuk Efisiensi dan Kinerja Optimal',
            'img-path' => 'https://ravelware.files.wordpress.com/2024/01/image-7.png',
            'tags' => 'big data, industri 4.0, Internet of Things, Radio Frequency Identification',
            'date' => 'January 10, 2024',
            'content' => "
          
          <p>Dalam era yang terus berkembang dan berubah dengan cepat, industri logistik terus mencari solusi inovatif untuk meningkatkan efisiensi dan kinerja operasional mereka. Sistem Smart Logistic by Ravelware dapat mencakup berbagai teknologi canggih seperti penggunaan kecerdasan buatan (AI) untuk meramalkan permintaan, mengoptimalkan rute pengiriman, atau mengelola inventaris secara lebih efisien.</p>
          <p>Berikut 3 keunggulan Smart logistic untuk meningkatkan efisiensi dan kinerja yang lebih optimal :</p>
          <ul>
          <li>Rantai Pasok Berbasis AI</li>
          </ul>
          <p>Salah satu solusi terkini yang mengemuka adalah pemanfaatan kecerdasan buatan (AI) dalam sistem manajemen rantai pasok. Teknologi ini memungkinkan perusahaan untuk menganalisis data secara mendalam dari berbagai sumber, termasuk prediksi permintaan, pengelolaan persediaan, dan optimisasi rute pengiriman.</p>
          <ul>
          <li>IoT Pelacakan dan Monitoring</li>
          </ul>
          <p>Penerapan Internet of Things (IoT) telah membuka peluang baru dalam pemantauan dan pelacakan barang selama proses logistik. Sensor-sensor yang terhubung dapat memberikan visibilitas yang lebih baik terhadap perjalanan barang, mulai dari gudang hingga titik tujuan akhir.</p>
          <ul>
          <li>Manajemen Logistik</li>
          </ul>
          <p>Dalam rantai pasok, teknologi ini memungkinkan pencatatan transaksi yang tidak dapat diubah dan terdistribusi secara terbuka, sehingga mengurangi risiko kecurangan, meningkatkan akurasi inventaris, serta mempercepat proses verifikasi dokumen.</p>
          <p>Penerapan ketiga solusi ini telah membuktikan dampaknya dalam meningkatkan efisiensi dan kinerja operasional dalam industri logistik. Namun demikian, untuk mengadopsi teknologi ini dengan sukses, perusahaan perlu mempertimbangkan tantangan implementasi serta investasi yang diperlukan. </p>
          <p>Dengan terus mengembangkan sistem logistik berbasis teknologi terkini, perusahaan dapat tetap relevan dan bersaing dalam pasar yang terus berubah dan kompetitif.</p>
          ",
            'views' => 0,
            'visitors' => 0,
            'likes' => 0
          ],
          [
            'identifier' => 'rfid-untuk-melindungi-privasi-dan-integritas-informasi',
            'type' => 'article',
            'title' => 'RFID Untuk Melindungi Privasi dan Integritas Informasi',
            'img-path' => 'https://ravelware.files.wordpress.com/2024/01/image-6.png',
            'tags' => 'industri 4.0, Radio Frequency Identification',
            'date' => 'January 9, 2024',
            'content' => "
          
          <p>RFID adalah singkatan dari “Radio Frequency Identification” (Identifikasi Frekuensi Radio). Ini adalah teknologi yang memungkinkan pengiriman data melalui gelombang radio untuk mengidentifikasi dan melacak objek tertentu yang dilengkapi dengan tag atau label RFID. </p>
          <p>Dalam konteks keamanan sering digunakan sebagai bagian dari sistem identifikasi, pengawasan akses, dan manajemen keamanan di berbagai lingkungan. Berikut 3 kegunaan RFID guna melindungi privasi dan integritas informasi :</p>
          <ul>
          <li>Pengamanan Data</li>
          </ul>
          <p>RFID dapat digunakan dalam konteks keamanan informasi untuk memfasilitasi akses terhadap data yang sensitif. Dengan menggunakan tag RFID yang terenkripsi dan diotorisasi, sistem keamanan dapat secara otomatis mengontrol akses dan memverifikasi identitas pengguna.</p>
          <ul>
          <li>Pengamanan Privasi</li>
          </ul>
          <p>Dalam konteks bisnis atau organisasi, RFID dapat digunakan untuk melacak dan mengelola aset dengan tetap menjaga privasi. Penggunaan tag RFID yang terlindungi secara aman memungkinkan untuk memantau pergerakan barang atau aset tanpa harus mengidentifikasi individu yang terlibat dalam proses tersebut.</p>
          <ul>
          <li>Sistem Pembayaran</li>
          </ul>
          <p>Dalam aplikasi pembayaran elektronik, RFID dapat digunakan untuk memberikan keamanan dan privasi yang lebih baik. Contohnya, RFID pada kartu pembayaran atau dompet elektronik yang terenkripsi dapat memberikan lapisan tambahan perlindungan terhadap pencurian data atau penggunaan tidak sah.</p>
          <p>Penggunaan teknologi RFID harus dipertimbangkan dengan cermat untuk memastikan bahwa privasi dan integritas informasi tetap terjaga sambil memanfaatkan keuntungan yang ditawarkan oleh teknologi ini.</p>
          ",
            'views' => 0,
            'visitors' => 0,
            'likes' => 0
          ],
          [
            'identifier' => 'transformasi-bisnis-melalui-internet-of-things',
            'type' => 'article',
            'title' => 'Transformasi Bisnis Melalui Internet of Things',
            'img-path' => 'https://ravelware.files.wordpress.com/2024/01/image-3.png',
            'tags' => 'industri 4.0, Internet of Things, IoT',
            'date' => 'January 8, 2024',
            'content' => "
          
          <p>Transformasi bisnis melalui Internet of Things (IoT) adalah proses di mana perusahaan menggunakan teknologi IoT untuk meningkatkan efisiensi operasional, mengembangkan model bisnis baru, dan meningkatkan pengalaman pelanggan.</p>
          <p>IoT mengacu pada jaringan perangkat fisik yang terhubung dan saling berkomunikasi melalui internet, memungkinkan pertukaran data dan kontrol otomatis. Transformasi bisnis melalui IoT memerlukan strategi yang baik, investasi yang tepat, dan kemampuan untuk menerapkan teknologi ini secara efektif guna mendapatkan manfaat yang maksimal.</p>
          <p>Berikut 3 transformasi bisnis melalui internet of things :</p>
          <ul>
          <li>Efisiensi Proses Produksi</li>
          </ul>
          <p>Perusahaan dapat menggunakan sensor IoT untuk memantau mesin dan proses produksi secara real-time. Hal ini memungkinkan untuk mengidentifikasi potensi kerusakan atau kegagalan mesin sebelum terjadi, sehingga meminimalkan waktu henti produksi.</p>
          <ul>
          <li>Pelayanan yang Lebih Personalisasi</li>
          </ul>
          <p>Dengan data yang dikumpulkan dari perangkat IoT, perusahaan dapat memahami kebutuhan pelanggan dengan lebih baik. Hal ini memungkinkan penyedia layanan untuk menawarkan solusi yang lebih dipersonalisasi dan sesuai dengan preferensi pelanggan.</p>
          <ul>
          <li>Pemantauan Lingkungan dan Keamanan</li>
          </ul>
          <p>Sensor IoT memungkinkan pemantauan lingkungan kerja dan keamanan yang lebih baik. Misalnya, sensor kebakaran atau sensor deteksi gas dapat memperingatkan bahaya secara real-time, memungkinkan respon yang cepat untuk mengurangi risiko.</p>
          <p>Transformasi bisnis melalui IoT memungkinkan perusahaan untuk mengoptimalkan proses, meningkatkan efisiensi, dan memberikan pengalaman yang lebih baik kepada pelanggan. Namun, dengan adanya perubahan ini juga datang tantangan, termasuk keamanan data, privasi, interoperabilitas perangkat, dan investasi yang diperlukan untuk infrastruktur dan pelatihan sumber daya manusia.</p>
          ",
            'views' => 0,
            'visitors' => 0,
            'likes' => 0
          ],
          [
            'identifier' => 'graphene-dalam-penelitian-dan-pengembangan-pertanian-presisi',
            'type' => 'article',
            'title' => 'Graphene dalam Penelitian dan Pengembangan Pertanian Presisi',
            'img-path' => 'https://ravelware.files.wordpress.com/2024/01/image-2.png',
            'tags' => 'Graphene, industri 4.0',
            'date' => 'January 4, 2024',
            'content' => "
          
          <p>Penggunaan langsung graphene dalam pertanian presisi masih dilakukan pada area penelitian dan pengembangan. Pertanian presisi ialah kegiatan pertanian yang melibatkan penggunaan teknologi untuk mengoptimalkan berbagai aspek pertanian, termasuk manajemen tanaman, pemanfaatan sumber daya, dan pemantauan.</p>
          <p>Graphene, dengan sifat uniknya seperti konduktivitas tinggi, kekuatan, dan fleksibilitas, memiliki potensi aplikasi dalam pertanian. Beberapa penggunaan potensial graphene dalam pertanian presisi dapat mencakup :</p>
          <ul>
          <li>Sensor</li>
          </ul>
          <p>Sensor berbasis graphene dapat digunakan untuk mendeteksi berbagai parameter dalam tanah, seperti tingkat kelembaban, kandungan nutrisi, dan pH. Sensor ini dapat menyediakan data real-time kepada petani, memungkinkan mereka membuat keputusan yang lebih informasional tentang irigasi dan pemupukan.</p>
          <ul>
          <li>Nanomaterial untuk Perlindungan Tanaman</li>
          </ul>
          <p>Bahan nanomaterial berbasis graphene mungkin dapat dieksplorasi untuk pengembangan bahan pintar dengan sifat antimikroba. Bahan ini dapat digunakan untuk perlindungan tanaman, mengurangi kebutuhan akan pestisida tradisional.</p>
          <ul>
          <li>Peralatan Smart Farming </li>
          </ul>
          <p>Konduktivitas listrik graphene dapat dimanfaatkan dalam pengembangan komponen elektronik yang lebih efisien dan tahan lama untuk peralatan pertanian pintar. Ini dapat mencakup sensor pada mesin pertanian atau drone yang dilengkapi dengan teknologi berbasis graphene untuk pengumpulan dan analisis data.</p>
          <p>PT. Ravelware Technology  merupakan penyedia dan pengembang utama graphene yang berdedikasi untuk memajukan inovasi dalam industri. Sebagai perusahaan yang fokus pada pengembangan graphene, Ravelware berkomitmen untuk menyediakan produk berkualitas tinggi yang dapat meningkatkan berbagai sektor, termasuk pertanian presisi, dan berbagai bidang lainnya. </p>
          <p>Ravelware terus berinovasi untuk memperluas penggunaan graphene, mendorong kemajuan teknologi, dan memberikan kontribusi positif terhadap perkembangan industri global.</p>
          ",
            'views' => 0,
            'visitors' => 0,
            'likes' => 0
          ],
          [
            'identifier' => 'ravelware-smart-lighting-sistem-pintar-ravelware-untuk-efisiensi',
            'type' => 'article',
            'title' => 'Ravelware : Smart Lighting, Sistem Pintar Ravelware untuk Efisiensi',
            'img-path' => 'https://ravelware.files.wordpress.com/2024/01/image-1.png',
            'tags' => 'big data, industri 4.0, Internet of Things, Radio Frequency Identification',
            'date' => 'January 3, 2024',
            'content' => "
          
          <p>Sistem pintar pencahayaan atau smart lighting adalah teknologi yang memanfaatkan perangkat pintar untuk mengontrol pencahayaan di dalam rumah atau bangunan secara otomatis atau melalui perintah pengguna. Ravelware adalah perusahaan yang mungkin menawarkan solusi pintar untuk efisiensi energi, termasuk dalam hal sistem pencahayaan.</p>
          <p>Ravelware menawarkan berbagai solusi dalam sistem pintar pencahayaan, seperti sensor gerak, lampu yang dapat dikendalikan secara nirkabel, atau sistem manajemen energi pintar yang terhubung dengan aplikasi pintar untuk mengatur pencahayaan sesuai kebutuhan.</p>
          <p>Berikut 3 keunggulan penggunaan smart lighting system by Ravelware : </p>
          <ul>
          <li>Jadwal Otomatis</li>
          </ul>
          <p>Sistem pintar pencahayaan memungkinkan pengguna untuk membuat jadwal otomatis untuk menyalakan atau mematikan lampu pada waktu tertentu. Ini membantu dalam mengurangi penggunaan energi yang tidak perlu saat tidak ada orang di rumah atau saat ruangan tidak digunakan.</p>
          <ul>
          <li>Kontrol Pintar</li>
          </ul>
          <p>Melalui aplikasi smartphone atau perangkat lainnya, pengguna dapat mengontrol pencahayaan dari jarak jauh. Ini memungkinkan pengguna untuk mematikan lampu yang terlupakan atau mengatur intensitas cahaya tanpa harus berada di tempat.</p>
          <ul>
          <li>Integrasi Pintar</li>
          </ul>
          <p>Sistem pencahayaan pintar dapat diintegrasikan dengan sistem pintar lainnya di rumah, seperti sistem pintar untuk pengaturan suhu (thermostat) atau perangkat pintar lainnya. Ini memungkinkan sinergi antara perangkat dan mengoptimalkan penggunaan energi secara keseluruhan.</p>
          <p>Penggunaan sistem pintar pencahayaan dapat membantu meningkatkan efisiensi energi, kenyamanan, dan manajemen rumah atau bangunan. Namun, penting untuk melakukan riset yang teliti sebelum mengadopsi sistem tertentu dan memastikan bahwa hal tersebut sesuai dengan kebutuhan dan situasi.</p>
          ",
            'views' => 0,
            'visitors' => 0,
            'likes' => 0
          ],
          [
            'identifier' => 'peran-iot-dalam-transportasi-cerdas',
            'type' => 'article',
            'title' => 'Peran IoT dalam Transportasi Cerdas',
            'img-path' => 'https://ravelware.files.wordpress.com/2024/01/image.png',
            'tags' => 'industri 4.0, Internet of Things',
            'date' => 'January 2, 2024',
            'content' => "
          
          <p>Dalam lingkup IoT, berbagai perangkat seperti sensor, kamera, kendaraan, peralatan rumah tangga pintar, atau bahkan perangkat medis dilengkapi dengan teknologi yang memungkinkan mereka untuk terhubung ke internet, mengumpulkan data, berbagi informasi, dan melakukan tindakan yang sesuai berdasarkan data yang terkumpul.</p>
          <p>Tujuan utama dari IoT adalah untuk menciptakan keterhubungan yang lebih baik antara perangkat, memungkinkan pengumpulan data yang lebih luas dan kemampuan analisis yang lebih baik untuk menghasilkan informasi yang berguna.</p>
          <p>Berikut adalah tiga peran utama IoT dalam transportasi cerdas:</p>
          <ul>
          <li>Monitoring</li>
          </ul>
          <p>IoT memungkinkan penggunaan sensor yang terhubung untuk memantau kondisi lalu lintas secara real-time. Sensor-sensor ini dapat dipasang pada jalan, kendaraan, atau infrastruktur transportasi lainnya untuk mengumpulkan data tentang lalu lintas, kepadatan, kecepatan kendaraan, serta kondisi jalan.</p>
          <ul>
          <li>Kendaraan Terhubung</li>
          </ul>
          <p>IoT memungkinkan mobil dan kendaraan lainnya untuk terhubung satu sama lain serta dengan infrastruktur jalan. Melalui teknologi ini, kendaraan dapat saling berkomunikasi dan bertukar informasi, seperti informasi lalu lintas, kecelakaan, cuaca, dan lainnya.</p>
          <ul>
          <li>Pemantauan dan Perawatan</li>
          </ul>
          <p>IoT juga memainkan peran penting dalam pemeliharaan kendaraan. Sensor-sensor yang terpasang pada kendaraan dapat memantau kondisi mesin, performa, dan suku cadang yang memungkinkan untuk perawatan yang lebih tepat waktu dan efisien.</p>
          <p>Secara keseluruhan, IoT menggambarkan konsep di mana perangkat-perangkat yang berbeda dapat terhubung dan berkomunikasi melalui internet, membentuk jaringan yang cerdas dan mendukung berbagai aplikasi untuk memperbaiki proses, meningkatkan efisiensi, dan meningkatkan kualitas hidup.</p>
          ",
            'views' => 0,
            'visitors' => 0,
            'likes' => 0
          ],
          [
            'identifier' => 'tingkat-daya-saing-perusahaan-dengan-m2m-2',
            'type' => 'article',
            'title' => 'Tingkat Daya Saing Perusahaan Dengan M2M',
            'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-18.png',
            'tags' => 'big data, industri 4.0, Internet of Things, Radio Frequency Identification',
            'date' => 'December 29, 2023',
            'content' => "
          
          <p>Maraknya penggunaan teknologi digital seperti kecerdasan buatan, teknologi robotic dan internet of things dapat menjadi kunci sebuah perusahaan untuk meningkatkan daya saing dengan mengadopsi teknologi tersebut.</p>
          <p>Mengadopsi teknologi yang mendukung perkembangan dan integrasi konektivitas, teknologi, informasi dan komunikasi merupakan kunci bagi bisnis untuk bertransformasi secara digital.</p>
          <ul>
          <li>Pengertian M2M</li>
          </ul>
          <p>M2M merupakan sebuah metode konektivitas di mana setiap mesin yang terlibat di dalamnya mampu berkomunikasi untuk menyelesaikan suatu tugas tertentu secara otomatis.</p>
          <p>M2M atau yang biasa dikenal dengan Machine to Machine merupakan sebuah teknologi terbaru yang memanfaatkan teknologi komunikasi nirkabel berbasis cloud. Dengan menghubungkan yang satu ke mesin lainnya secara real time. M2M tersendiri sudah banyak digunakan pada perusahaan [erusahaan yang menginginkan efisiensi dalam controlling.</p>
          <p>Dalam sistem M2M, perangkat elektronik, seperti sensor, mesin, atau perangkat keras lainnya, dapat saling berkomunikasi dan bertukar informasi secara otomatis melalui jaringan komunikasi, seperti internet atau jaringan seluler.</p>
          <ul>
          <li>Penerapan M2M</li>
          </ul>
          <p>Informasi yang dikumpulkan oleh perangkat M2M dapat digunakan untuk pemantauan, pengawasan, analisis, pengambilan keputusan otomatis, atau untuk mengoptimalkan operasi yang melibatkan perangkat tersebut.</p>
          <p>Contoh penggunaan M2M dapat ditemukan dalam berbagai industri, seperti industri otomotif (misalnya, sistem telematika dalam mobil), kesehatan (misalnya, perangkat pemantauan pasien jarak jauh), energi (misalnya, pengukuran pintar dan manajemen jaringan), dan banyak lagi.</p>
          <ul>
          <li>M2M Untuk Daya Saing</li>
          </ul>
          <p>Dengan menggunakan embedded SIM card yang mentransmisikan data secara nirkabel melalui jaringan seluler yang aman, M2M mampu melacak kendaraan dan aset untuk efisiensi dan keamanan yang lebih baik.</p>
          <p>Dengan memungkinkan semua kendaraan pengiriman, untuk terhubung secara otomatis ke sistem manajemen pusat perusahaan di mana pun mereka berada, M2M memiliki dampak besar pada rantai pasokan.</p>
          ",
            'views' => 0,
            'visitors' => 0,
            'likes' => 0
          ],
          [
            'identifier' => '3-inovasi-sensor-berbasis-graphene',
            'type' => 'article',
            'title' => '3 Inovasi Sensor Berbasis Graphene',
            'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-17.png',
            'tags' => 'Graphene, industri 4.0',
            'date' => 'December 28, 2023',
            'content' => "
          
          <p>Penggunaan graphene dalam pengembangan sensor yang lebih canggih dan berkinerja tinggi untuk berbagai aplikasi, mulai dari industri hingga perawatan kesehatan. </p>
          <p>Keunggulan seperti kepekaan tinggi, ukuran yang lebih kecil, dan fleksibilitas dalam desain sensor adalah beberapa faktor yang membuat sensor berbasis graphene menjadi fokus pengembangan teknologi sensor masa depan.</p>
          <p>Terdapat berbagai inovasi menarik dalam pengembangan sensor berbasis graphene yang memanfaatkan sifat unik material ini. Berikut adalah tiga inovasi utama:</p>
          <ul>
          <li>Sensor Suhu Ultra-Responsif</li>
          </ul>
          <p>Sensor suhu berbasis graphene menawarkan respons yang sangat cepat terhadap perubahan suhu. Karena konduktivitas termal yang luar biasa dari graphene, sensor suhu ini dapat mendeteksi perubahan suhu dengan sangat akurat dan cepat, membuatnya ideal untuk aplikasi di bidang industri, seperti pemantauan suhu dalam sistem elektronik atau pendinginan industri.</p>
          <ul>
          <li>Sensor Kelembaban</li>
          </ul>
          <p>Sensor kelembaban berbasis graphene mampu mendeteksi kadar kelembaban dalam lingkungan dengan tingkat sensitivitas yang tinggi. Hal ini penting dalam banyak aplikasi, termasuk kontrol iklim dalam bangunan, perawatan tanaman, penyimpanan makanan, dan pengawasan lingkungan yang membutuhkan pemantauan kelembaban yang akurat.</p>
          <ul>
          <li>Sensor Tekanan Darah Fleksibel</li>
          </ul>
          <p>Sensor tekanan darah yang terbuat dari graphene dapat dirancang secara fleksibel untuk aplikasi medis yang inovatif. Sensor ini dapat ditempatkan pada perangkat wearable atau bahkan di baju untuk memantau tekanan darah secara terus-menerus pada pasien tanpa mengganggu aktivitas sehari-hari. Hal ini dapat mengarah pada pemantauan kesehatan yang lebih baik dan deteksi dini kondisi medis.</p>
          ",
            'views' => 0,
            'visitors' => 0,
            'likes' => 0
          ],
          [
            'identifier' => 'iot-efisiensi-produktivitas-dan-keunggulan-bersaing',
            'type' => 'article',
            'title' => 'IoT : Efisiensi, Produktivitas, dan Keunggulan Bersaing',
            'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-16.png',
            'tags' => 'Internet of Things, IoT',
            'date' => 'December 27, 2023',
            'content' => "
          
          <p>Internet of Things (IoT) atau Internet Hal-hal adalah konsep di mana perangkat fisik, objek, atau mesin dapat terhubung ke internet dan saling berkomunikasi, mengumpulkan, dan berbagi data tanpa intervensi manusia. Dalam IoT, perangkat-perangkat ini dilengkapi dengan sensor, perangkat lunak, dan teknologi lainnya yang memungkinkan mereka untuk saling berkomunikasi dan bertindak berdasarkan informasi yang diterima.</p>
          <p>Penerapan IoT telah memberikan berbagai manfaat yang signifikan bagi berbagai industri, termasuk efisiensi, produktivitas, dan keunggulan bersaing, antara lain :</p>
          <ul>
          <li>Monitoring dan Manajemen Energi</li>
          </ul>
          <p>IoT memungkinkan pemantauan real-time dan pengendalian otomatis atas berbagai sistem. Contohnya, dalam manufaktur, IoT memungkinkan peralatan untuk dikontrol secara otomatis, mengoptimalkan waktu produksi dan mengurangi limbah. Dalam lingkungan bisnis dan industri, IoT memungkinkan pengelolaan yang lebih efisien terhadap penggunaan energi dengan mengumpulkan data tentang konsumsi energi dan mengidentifikasi area yang memerlukan perbaikan.</p>
          <ul>
          <li>Prediksi Perawatan dan Rantai Pasok</li>
          </ul>
          <p>IoT memungkinkan pemantauan kondisi peralatan secara real-time. Hal ini memungkinkan perusahaan untuk meramalkan potensi kerusakan atau kegagalan, sehingga perawatan dapat dilakukan sebelum terjadi downtime yang tidak terduga. IoT memungkinkan visibilitas dan pengelolaan yang lebih baik terhadap rantai pasokan, termasuk pelacakan inventaris secara real-time, mempercepat pengiriman, dan mengoptimalkan proses distribusi.</p>
          <ul>
          <li>Inovasi Produk dan Layanan</li>
          </ul>
          <p>IoT memungkinkan perusahaan untuk mengembangkan produk dan layanan baru yang terhubung dengan teknologi, seperti perangkat pintar yang mengumpulkan data untuk memperbaiki pengalaman pengguna. Dengan mengumpulkan dan menganalisis data dari IoT, perusahaan dapat membuat keputusan yang lebih cerdas dan strategis, membantu mereka mengantisipasi tren pasar dan kebutuhan pelanggan.</p>
          ",
            'views' => 0,
            'visitors' => 0,
            'likes' => 0
          ],
          [
            'identifier' => '4-effect-positif-penggunaan-supply-chain-management-2',
            'type' => 'article',
            'title' => '4 Effect Positif Penggunaan Supply Chain Management',
            'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-15.png',
            'tags' => 'big data, industri 4.0, Internet of Things, Radio Frequency Identification',
            'date' => 'December 22, 2023',
            'content' => "
          
          <p>Supply chain ialah pengelolaan aliran barang, informasi serta jasa yang melibatkan koordinasi sdan kerjasama antara berbagai pihak dalam rantai pasokan untuk menghasilkan kualitas yang baik bagi pelanggan. </p>
          <p>SCM tentu saja melibatkan perencanaan, pengendalian dan pengawasan terhadap semua aktivitas yang terlibat mulai dari proses produksi sampai dengan disribusi.</p>
          <p>Tujuan utama yang ingin dicapai SCM adalah untuk mengoptimalkan kinerja dan efisiensi rantai pasok secara keseluruhan dengan cara mengintegrasikan aktivitas maupun proses mulai tahap awal hingga tahap akhir.</p>
          <p>Selain itu, perusahaan juga dapat menghubungkan semua pihak yang terlibat di dalam proses perubahan bahan baku menjadi barang jadi. Karena itulah, proses produksi maupun pendistribusian barang/jasa yang dihasilkan oleh sebuah perusahaan dapat berjalan dengan lebih efektif dan efisien. Berikut 4 effect positif penggunaan supply chain management :</p>
          <ul>
          <li>Menurunkan Biaya</li>
          </ul>
          <p>Dengan penggunaan SCM perusahaan dapat menekan biaya yang harus mereka keluarkan untuk proses tersebut, hadirnya pengintegrasian aliran produk dari sebuah perusahaan kepada para konsumen dapat mengurangi biaya yang harus dikeluarkan pada jalur produksi dan juga distribusi.</p>
          <ul>
          <li>Pemanfaatan Aset</li>
          </ul>
          <p>Dalam menerapkan manajemen rantai pasokan, teknologi memiliki peran yang cukup penting. Dengan adanya teknologi yang terdapat pada manajemen rantai pasokan tersebut, perusahaan dituntut untuk meningkatkan kinerja para karyawanya.</p>
          <p>Karyawan sebagai salah satu aset terbesar dalam perusahaan tentu saja akan berusaha meningkatkan keterampilan dan juga pengetahuannya agar dapat menerapkan manajemen rantai pasokan dengan maksimal.</p>
          <ul>
          <li>Kepuasan Pelanggan</li>
          </ul>
          <p>Penggunaan supply chain dapat membuat perusahaan dengan mudah memberikan rasa puas terhadap para pelanggannya. Pelanggan meerupakan target utama sebuah perusahaan dalam aktivitas produksi karena mereka ialah pihak yang akan membeli dan menggunakan barang maupun jasa yang dihasilkan perusahaan.</p>
          <ul>
          <li>Meningkatkan Pendapatan</li>
          </ul>
          <p>Semakin banyak konsumen yang setia untuk menggunakan barang/jasa sebuah perusahaan dalam jangka waktu yang lama, semakin besar pula peluang perusahaan tersebut untuk meningkatkan pendapatannya. Barang-barang yang dihasilkan oleh perusahaan tersebut juga tidak akan terbuang sia-sia setelah di produksi karena barang itu diminati dan juga dipakai oleh para konsumen.</p>
          ",
            'views' => 0,
            'visitors' => 0,
            'likes' => 0
          ],
            [
              'identifier' => 'keamanan-lebih-dengan-chipless-rfid',
              'type' => 'article',
              'title' => 'Keamanan Lebih dengan Chipless RFID',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-14.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'December 21, 2023',
              'content' => "
            
            <p class='mb-4'>Teknologi Chipless Radio Frequency Identification (RFID) merupakan suatu bentuk dari teknologi RFID yang tidak menggunakan chip terpisah untuk menyimpan informasi. Sebaliknya, teknologi ini menyematkan informasi langsung ke dalam tag RFID tanpa memerlukan komponen elektronik tambahan seperti chip yang terdapat pada tag RFID konvensional.</p>
            <p class='mb-4'>Keunggulan utama dari Chipless RFID adalah aspek keamanan yang ditingkatkan, yang terjadi karena beberapa alasan:</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Data Pada Satu Chip</span></span>
            
            <p class='mb-4'>Dalam Chipless RFID, data tidak disimpan dalam chip terpisah yang dapat diakses atau diretas. Sebagai gantinya, informasi dikodekan langsung ke dalam pola atau struktur fisik tag RFID, yang membuatnya sulit diakses atau diubah tanpa alat pembaca khusus.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pencurian Identitas</span></span>
            
            <p class='mb-4'>Dikarenakan tidak adanya chip terpisah, yang bisa diakses secara langsung, ada perlindungan tambahan terhadap pencurian identitas atau manipulasi data. Ini mengurangi risiko dari serangan siber yang dapat dimanfaatkan untuk mengakses atau mengubah informasi pada chip RFID.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Tidak Dapat Diretas</span></span>
            
            <p class='mb-4'>Teknologi Chipless RFID menggunakan metode enkripsi atau kode fisik yang kompleks yang sulit dipalsukan atau diretas tanpa pengetahuan yang mendalam tentang teknologi dan alat pembaca yang sesuai.</p>
            <p class='mb-4'>Namun, seperti teknologi apapun, tidak ada yang sepenuhnya kebal terhadap risiko keamanan. Sementara Chipless RFID menawarkan keamanan tambahan, risiko terhadap serangan siber atau manipulasi data masih ada. Oleh karena itu, pembaruan dan peningkatan konstan dalam teknologi keamanan tetap diperlukan untuk menjaga ketahanan sistem.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-automatic-package-measurement',
              'type' => 'article',
              'title' => 'Ravelware : Automatic Package Measurement',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-13.png',
              'tags' => 'big data,industri 4.0,Internet of Things,Radio Frequency Identification',
              'date' => 'December 20, 2023',
              'content' => "
            
            <p class='mb-4'>Automatic Package Measurement (APM) adalah teknologi yang memungkinkan pengukuran otomatis dari dimensi dan berat paket atau barang tanpa intervensi manual. APM menggunakan sensor, kamera, atau teknologi lainnya untuk mengambil data yang diperlukan secara otomatis dan akurat, tanpa memerlukan pengukuran manual oleh operator.</p>
            <p class='mb-4'>Teknologi APM dapat digunakan dalam industri logistik, kurir, atau pergudangan di mana pengukuran dimensi dan berat paket penting untuk proses pengiriman dan penanganan barang.</p>
            <p class='mb-4'>Berikut 3 keunggulan penggunaan Automatic Package Measurement :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Proses Pengiriman</span></span>
            
            <p class='mb-4'>APM membantu meningkatkan efisiensi dalam proses pengiriman dengan mengurangi waktu yang dibutuhkan untuk mengukur dimensi dan berat paket secara manual. Hal ini mempercepat proses persiapan pengiriman dan pemrosesan kiriman.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Akurasi Pengukuran</span></span>
            
            <p class='mb-4'>Dibandingkan dengan pengukuran manual yang dapat rentan terhadap kesalahan manusia, APM memberikan tingkat akurasi yang lebih tinggi dalam mengukur dimensi dan berat paket. Ini dapat membantu dalam menghindari kesalahan dalam estimasi biaya pengiriman atau kesalahan pemrosesan pengiriman.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengoptimalan Biaya</span></span>
            
            <p class='mb-4'>Dengan memastikan pengukuran yang akurat, APM membantu perusahaan kurir atau logistik dalam menetapkan biaya pengiriman yang lebih tepat berdasarkan dimensi dan berat aktual paket. Hal ini dapat mengurangi risiko biaya tambahan yang disebabkan oleh perbedaan antara estimasi dan ukuran sebenarnya.</p>
            <p class='mb-4'>Penerapan Automatic Package Measurement tidak hanya membantu dalam meningkatkan efisiensi operasional perusahaan logistik, tetapi juga memberikan keuntungan bagi pelanggan melalui pengiriman yang lebih cepat, akurat, dan pengukuran biaya yang lebih tepat.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'manfaat-dan-tantangan-big-data-dalam-era-digital',
              'type' => 'article',
              'title' => 'Manfaat dan Tantangan Big Data Dalam Era Digital',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-12.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'December 19, 2023',
              'content' => "
            
            <p class='mb-4'>Big Data adalah istilah yang mengacu pada jumlah data yang sangat besar, kompleks, dan beragam yang dikelola dan dianalisis menggunakan teknologi khusus. Karakteristik utama dari Big Data dapat dijelaskan dengan 3V: Volume, Velocity, dan Variety.</p>
            <p class='mb-4'>Big Data memiliki peran penting dalam berbagai industri, mulai dari bisnis, ilmu pengetahuan, kesehatan, keuangan, hingga pemerintahan. Dengan kemampuannya untuk menyediakan wawasan yang mendalam dari data yang besar dan beragam, Big Data memberikan potensi besar untuk mengubah cara kita bekerja, berinteraksi, dan membuat keputusan.</p>
            <p class='mb-4'>Berikut 3 tantangan pengelolaan big data yang perlu diketahui :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengolahan Data</span></span>
            
            <p class='mb-4'>Big Data sering kali sangat besar, heterogen, dan tidak terstruktur. Mengelola, menyimpan, dan mengolah volume data yang besar ini memerlukan infrastruktur teknologi yang kuat dan biaya yang signifikan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Keamanan Data</span></span>
            
            <p class='mb-4'>Data besar sering kali berisi informasi sensitif dan pribadi. Ini menimbulkan tantangan dalam hal privasi dan keamanan data. Organisasi harus memastikan bahwa data yang dikumpulkan dan disimpan terlindungi dari ancaman keamanan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kesalahan Interpretasi</span></span>
            
            <p class='mb-4'>Penggunaan algoritma yang tidak tepat atau kesalahan dalam interpretasi data bisa mengarah pada kesimpulan yang salah atau keputusan yang buruk. Diperlukan pemahaman mendalam tentang data yang dianalisis untuk menghindari hal ini.</p>
            <p class='mb-4'>Meskipun ada tantangan dalam pemanfaatan Big Data, manfaatnya yang besar dalam memberikan wawasan yang dalam, peningkatan efisiensi, dan kemungkinan inovasi membuatnya menjadi aset berharga dalam era digital. Organisasi yang mampu mengelola dan menganalisis data besar dengan baik memiliki keunggulan kompetitif yang signifikan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'total-productive-maintenance-sebagai-teknologi-digital',
              'type' => 'article',
              'title' => 'Total Productive Maintenance Sebagai Teknologi Digital',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-11.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'December 18, 2023',
              'content' => "
            
            <p class='mb-4'>Total Productive Maintenance (TPM) adalah filosofi manajemen perawatan yang bertujuan untuk mempertahankan peralatan produksi dalam kondisi optimal dengan melibatkan seluruh anggota tim dari operator hingga manajer. Implementasi TPM telah berkembang menjadi lebih canggih dengan integrasi teknologi digital dan pemeliharaan terencana yang lebih efisien.</p>
            <p class='mb-4'>Dengan menerapkan prinsip-prinsip TPM secara konsisten, perusahaan dapat meningkatkan efisiensi produksi, mengurangi waktu henti, memperpanjang umur pakai peralatan, dan secara keseluruhan, mencapai tujuan untuk menciptakan lingkungan produksi yang lebih efisien dan andal.</p>
            <p class='mb-4'>Berikut adalah bagaimana TPM dapat dikaitkan dengan teknologi digital dan pemeliharaan terencana :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemantauan Kondisi</span></span>
            
            <p class='mb-4'>Sensor yang terpasang pada peralatan memungkinkan pengumpulan data real-time tentang kondisi mesin dan kinerja operasional. IoT memfasilitasi pengumpulan dan analisis data yang dapat membantu dalam memprediksi kegagalan, mencegah downtime, dan mengoptimalkan kinerja peralatan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Analisis Big Data</span></span>
            
            <p class='mb-4'>Penggunaan analitika dan algoritma machine learning pada data yang dihasilkan oleh sensor dan sistem lainnya memungkinkan peramalan yang lebih akurat terkait pemeliharaan peralatan. Dengan memprediksi potensi kegagalan peralatan, TPM dapat menerapkan perawatan yang diperlukan sebelum masalah terjadi, mengurangi downtime secara signifikan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Perencanaan dan Pemantauan</span></span>
            
            <p class='mb-4'>Penggunaan perangkat lunak khusus memungkinkan manajemen pemeliharaan yang lebih terencana dan terstruktur. Ini meliputi jadwal perawatan, pemantauan inventaris suku cadang, dan pelaporan kinerja peralatan secara otomatis.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'terapkan-lean-tpm-agar-lingkungan-kerja-lebih-produktif-2',
              'type' => 'article',
              'title' => 'Terapkan Lean TPM Agar Lingkungan Kerja Lebih Produktif',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-10.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'December 15, 2023',
              'content' => "
            
            <p class='mb-4'>TPM adalah sebuah buadaya kerja khususnya di bidang manufacturing dan operasional, makna TPM jauh lebih luas daripada sebuah kegiatan pemeliharaan atau operasional produksi manufacturing.</p>
            <p class='mb-4'>Total Productive Maintenance (TPM) adalah suatu pendekatan manajemen yang bertujuan untuk memelihara dan meningkatkan kinerja mesin dan peralatan produksi agar tetap dalam kondisi yang optimal.</p>
            <p class='mb-4'>Pendekatan ini melibatkan semua tingkat organisasi, termasuk manajemen, operator, dan perawatan teknis, dalam upaya menjaga dan meningkatkan efisiensi dan kualitas operasional. TPM berfungsi sebagai pemelihara peralatan agar selalu dalam keadaan maupun kondisi prima, untuk memenuhi kebutuhan tersebut maka diperlukan maintenance yang teratur.</p>
            <p class='mb-4'>Dalam penerapannya TPM tentunya memerlukan partisipasi dari seluruh unit produksi dan maintenance agar dapat bekerja sama dengan tujuan untuk mencapai goals yang telah dibicarakan. Penerapan TPM tentunya memerlukan beberapa langkah seperti dibawah ini :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Perawatan otonom</span></span>
            
            <p class='mb-4'>Libatkan operator dalam perawatan otonom, di mana mereka bertanggung jawab untuk memeriksa, membersihkan, dan merawat peralatan mereka sehari-hari. Berikan pelatihan kepada operator mengenai tanda-tanda awal kerusakan dan bagaimana melakukan perawatan dasar. Ini membantu mengidentifikasi masalah sejak dini dan menghindari kerusakan lebih lanjut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Analisis akar masalah</span></span>
            
            <p class='mb-4'>Saat terjadi kerusakan atau masalah pada peralatan, lakukan analisis akar penyebab masalah (root cause analysis) untuk menemukan sumber masalah tersebut. Dengan mengetahui akar penyebabnya, Anda dapat mengambil langkah-langkah pencegahan yang tepat untuk mencegah masalah serupa di masa depan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Monitoring kinerja</span></span>
            
            <p class='mb-4'>Gunakan indikator kinerja kunci (Key Performance Indicators/KPIs) untuk mengukur dan memantau kinerja peralatan. Monitor waktu henti, waktu pemulihan, biaya perawatan, dan metrik lain yang relevan untuk mengidentifikasi area yang memerlukan perbaikan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemeliharaan preventif</span></span>
            
            <p class='mb-4'>Rancang dan terapkan jadwal perawatan preventif untuk setiap peralatan kritis. Perawatan preventif melibatkan pemeriksaan rutin, pembersihan, pelumasan, dan penggantian komponen yang haus.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'aplikasi-graphene-pada-aerospace',
              'type' => 'article',
              'title' => 'Aplikasi Graphene Pada Aerospace',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-9.png',
              'tags' => 'big data,Graphene,industri 4.0,Internet of Things',
              'date' => 'December 14, 2023',
              'content' => "
            
            <p class='mb-4'>Graphene, bahan yang terdiri dari lapisan atom karbon tunggal, memiliki sifat unik yang membuatnya potensial untuk berbagai aplikasi di sektor aerospace. Graphene juga memiliki konduktivitas listrik yang sangat tinggi.</p>
            <p class='mb-4'>Elektron dapat mengalir melalui graphene dengan sangat efisien, menjadikannya bahan yang potensial untuk elektronik yang lebih cepat dan efisien. Selain konduktivitas listrik, graphene juga memiliki konduktivitas termal yang baik. Ia dapat menghantarkan panas dengan sangat efisien, yang dapat berguna dalam berbagai aplikasi termal.</p>
            <p class='mb-4'>Graphene sangat fleksibel sehingga dapat ditekuk atau dilenturkan tanpa kehilangan kekuatan mekanisnya. Hal ini membuka pintu untuk penggunaannya dalam sensor fleksibel, elektronik yang dapat dilipat, dan material yang dapat disesuaikan dengan berbagai bentuk.</p>
            <p class='mb-4'>Berikut 3 aplikasi graphene pada aerospace dan konstruksi :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Material Ringan dan Kuat</span></span>
            
            <p class='mb-4'>Graphene memiliki kekuatan yang luar biasa meskipun tipis. Ketahanan dan kekuatannya membuatnya menjadi kandidat yang menarik untuk penggunaan dalam pengembangan struktur pesawat. Memiliki berat yang ringan sangat penting dalam industri aerospace untuk mengurangi beban pesawat dan meningkatkan efisiensi bahan bakar.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Konduktivitas Termal dan Listrik</span></span>
            
            <p class='mb-4'>Kemampuan graphene dalam menghantarkan panas dan listrik sangat baik. Dalam konteks aerospace, hal ini bisa digunakan untuk merancang komponen-komponen yang memerlukan konduktivitas yang baik, seperti sensor suhu, pelindung panas, dan komponen elektronik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Perlindungan dari Korosi dan Ketahanan terhadap Suhu Tinggi</span></span>
            
            <p class='mb-4'>Graphene juga menunjukkan sifat ketahanan terhadap korosi dan suhu tinggi. Hal ini bisa dimanfaatkan dalam pembuatan lapisan protektif untuk perlindungan dari lingkungan yang ekstrim di luar angkasa.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-pir-lux-sensor-for-ravelight-smart-lighting',
              'type' => 'article',
              'title' => 'Ravelware :  PIR & Lux Sensor for Ravelight Smart Lighting',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-8.png',
              'tags' => 'big data,efisiensi energi,industri 4.0,Internet of Things,penghematan energi listrik,Radio Frequency Identification',
              'date' => 'December 13, 2023',
              'content' => "
            
            <p class='mb-4'>PIR (Passive Infrared) sensor dan Lux sensor adalah dua jenis sensor yang sering digunakan dalam teknologi pencahayaan pintar seperti Ravelight Smart Lighting.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>PIR (Passive Infrared Sensor)</span></span>
            
            <p class='mb-4'>Sensor PIR mendeteksi perubahan suhu yang dihasilkan oleh gerakan manusia atau objek di sekitarnya. Ini memungkinkan pencahayaan otomatis untuk menyala saat ada gerakan terdeteksi dan mati saat tidak ada aktivitas. Dengan kemampuannya untuk mendeteksi kehadiran manusia atau aktivitas, PIR sensor membantu mengoptimalkan penggunaan energi dengan mengaktifkan atau mematikan pencahayaan hanya saat diperlukan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Lux Sensor</span></span>
            
            <p class='mb-4'>Lux sensor mengukur intensitas cahaya di lingkungan sekitarnya. Ini memungkinkan pencahayaan pintar untuk menyesuaikan tingkat kecerahan berdasarkan tingkat cahaya alami yang tersedia. Dengan kemampuannya untuk menyesuaikan pencahayaan berdasarkan intensitas cahaya alami, Lux sensor membantu mengoptimalkan penggunaan energi dengan mematikan atau mengurangi intensitas pencahayaan saat cahaya alami cukup terang.</p>
            <p class='mb-4'>Manfaat Kombinasi PIR dan Lux Sensor dalam Ravelight Smart Lighting:</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Optimasi Energi : Dengan menggunakan kedua sensor ini bersama-sama, pencahayaan pintar dapat secara cerdas menyesuaikan tingkat kecerahan berdasarkan gerakan manusia dan tingkat cahaya alami.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Fungsionalitas Otomatis : Kombinasi PIR dan Lux sensor memberikan fungsionalitas otomatis yang lebih canggih, memastikan bahwa pencahayaan dinyalakan hanya ketika diperlukan dan disesuaikan dengan kondisi lingkungan secara real-time.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kenyamanan dan Efisiensi : Memberikan pengalaman yang lebih nyaman bagi pengguna dengan pencahayaan yang diatur secara otomatis sesuai dengan kebutuhan dan lingkungan sekitarnya, sambil mengurangi konsumsi energi yang tidak perlu.</span></span>
            
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'tpm-langkah-langkah-menuju-zero-breakdown',
              'type' => 'article',
              'title' => 'TPM : Langkah Langkah Menuju Zero Breakdown',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-7.png',
              'tags' => 'industri 4.0,Internet of Things,total productive maintenance',
              'date' => 'December 12, 2023',
              'content' => "
            
            <p class='mb-4'>Total Productive Maintenance (TPM) adalah suatu pendekatan manajemen untuk meningkatkan efisiensi dan kinerja peralatan produksi dengan melibatkan seluruh anggota tim, mulai dari pekerja hingga manajemen. Tujuan utama dari TPM adalah mencapai “zero breakdown” di mana tidak ada gangguan atau kerusakan pada peralatan produksi yang mengganggu proses produksi.</p>
            <p class='mb-4'>Berikut 3 langkah TPM menuju zero breakdown :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Autonomous Maintenance</span></span>
            
            <p class='mb-4'>Pemeliharaan otonom merupakan salah satu langkah kunci dalam TPM yang menekankan tanggung jawab karyawan terhadap pemeliharaan dan perawatan peralatan. Karyawan dilatih untuk memahami peralatan dengan mendalam, termasuk cara kerja, pemeliharaan rutin, dan cara mengatasi masalah umum. Karyawan didorong untuk mengidentifikasi dan mengatasi penyebab utama masalah atau kegagalan peralatan, serta memberikan saran perbaikan yang dapat meningkatkan efisiensi dan kualitas produksi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Scheduled Maintenance</span></span>
            
            <p class='mb-4'>Perawatan terjadwal merujuk pada jadwal pemeliharaan yang ditetapkan untuk melakukan perawatan secara berkala dan terencana pada peralatan produksi. Menjadwalkan dan melaksanakan pemeliharaan preventif secara teratur untuk menghindari kegagalan peralatan yang tidak terduga. Melakukan inspeksi yang lebih rinci atau komprehensif pada interval tertentu untuk mengidentifikasi masalah yang mungkin tidak terdeteksi selama perawatan harian.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Continuous Improvement</span></span>
            
            <p class='mb-4'>Fokus pada perbaikan berkelanjutan (continuous improvement) adalah prinsip kunci dalam TPM yang menggalakkan upaya terus-menerus untuk meningkatkan efisiensi, produktivitas, dan kualitas. Mengidentifikasi akar penyebab masalah dan mengambil langkah-langkah untuk mencegahnya agar tidak terulang kembali. Menggunakan data dan metrik untuk memantau kinerja peralatan, menganalisis tren, dan mengidentifikasi area yang memerlukan perbaikan lebih lanjut.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'potensi-big-data-untuk-pertumbuhan-bisnis',
              'type' => 'article',
              'title' => 'Potensi Big Data Untuk Pertumbuhan Bisnis',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-6.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'December 11, 2023',
              'content' => "
            
            <p class='mb-4'>Big Data adalah istilah yang mengacu pada jumlah data yang sangat besar, kompleksitasnya, dan kecepatan pertumbuhannya yang cepat. Data ini sering kali sulit untuk dikelola dan diproses menggunakan alat dan teknik tradisional.</p>
            <p class='mb-4'>Pemanfaatan Big Data dalam bisnis membutuhkan infrastruktur teknologi yang tepat, serta keahlian analitis yang mumpuni untuk menginterpretasikan dan mengambil manfaat dari data yang ada.</p>
            <p class='mb-4'>Organisasi yang dapat menggabungkan Big Data dengan strategi bisnis mereka akan memiliki keunggulan kompetitif yang signifikan di pasar yang terus berubah ini. Berikut keunggulan big data untuk pertumbuhan bisnis ;</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Analisis Mendalam</span></span>
            
            <p class='mb-4'>Big data memungkinkan perusahaan untuk menganalisis data dalam jumlah besar dari berbagai sumber. Dengan melakukan analisis yang mendalam terhadap data ini, perusahaan dapat memahami tren, pola, dan perilaku pelanggan secara lebih baik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengambilan Keputusan</span></span>
            
            <p class='mb-4'>Big data membantu perusahaan untuk membuat keputusan yang didukung oleh data dan bukan hanya berdasarkan intuisi semata. Dengan analisis yang tepat, perusahaan dapat memprediksi tren pasar, melakukan segmentasi pelanggan dengan lebih baik, meningkatkan efisiensi operasional, dan mengidentifikasi peluang baru untuk pertumbuhan bisnis.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Inovasi</span></span>
            
            <p class='mb-4'>Analisis data yang mendalam juga dapat membantu dalam proses inovasi, memungkinkan perusahaan untuk mengidentifikasi tren yang muncul, serta mendapatkan wawasan baru untuk menciptakan produk baru yang lebih menarik bagi pelanggan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-cara-hilangkan-waste-dengan-lean-manufacturing-2',
              'type' => 'article',
              'title' => '4 Cara Hilangkan Waste Dengan Lean Manufacturing',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-5.png',
              'tags' => 'big data,industri 4.0,Internet of Things,kaizen,Radio Frequency Identification,total productive maintenance',
              'date' => 'December 8, 2023',
              'content' => "
            
            <p class='mb-4'>Perkembangan yang terus menerus terjadi menyebabkan banyaknya muncul inovasi baru dalam dunia industri, dengan begitu perusahaan perlu memperhatikan kondisi internal seperti sumber daya, biaya serta waktu yang dibutuhkan dalam sebuah produksi.</p>
            <p class='mb-4'>Lean manufacturing merupakan suatu solusi maupun inovasi yang mempertimbangkan segala pengeluaran sumber daya yang ada untuk mendapatkan nilai ekonomis terhadap pelanggan.</p>
            <p class='mb-4'>Prinsip utama lean manufacturing adalah mengidentifikasi dan mengurangi pemborosan dalam proses produksi. Pemborosan ini dapat berupa waktu yang tidak produktif, kelebihan inventaris, pergerakan yang tidak perlu, perbaikan yang terlalu sering, atau cacat produk.</p>
            <p class='mb-4'>Dengan menghilangkan pemborosan, perusahaan dapat meningkatkan produktivitas, mengurangi biaya produksi, dan memberikan nilai tambah yang lebih tinggi kepada pelanggan. Berikut prinsip dan teknik dalam lean manufacturing yang beretujuan untuk mengurangi waste :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Just in Time</span></span>
            
            <p class='mb-4'>Dalam sistem JIT, produksi dimulai hanya ketika ada permintaan aktual dari pelanggan. Ini berarti bahwa tidak ada inventaris yang besar atau stok cadangan yang dijaga. Pemasok juga diminta untuk memberikan komponen atau bahan mentah tepat waktu agar proses produksi dapat berjalan lancar.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Sistem 5S</span></span>
            
            <p class='mb-4'>5S merupakan metode pengorganisasian yang terdiri dari lima kata dalam bahasa Jepang. Lima kata tersebut merupakan lima langkah untuk mengurangi pemborosan dan meningkatkan produktivitas, yakni Seiri, Seiton, Seiso, Seiketsu, dan Shitsuke.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kaizen</span></span>
            
            <p class='mb-4'>Prinsip dasar dari Kaizen adalah bahwa perbaikan kecil yang berkelanjutan dalam proses dan praktik kerja akan menghasilkan peningkatan keseluruhan yang signifikan. Ini melibatkan partisipasi semua anggota tim, dari pekerja hingga manajemen, dalam mengidentifikasi dan mengimplementasikan perubahan yang lebih baik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kanban</span></span>
            
            <p class='mb-4'>Teknik Kanban membantu menyisihkan persediaan dan pemborosan produksi berlebih. Hal ini dilakukan dengan menerapkan metode untuk mengatur aliran barang di dalam dan di luar tempat produksi. Metode Kanban bergantung pada sinyal visual untuk membantu pekerja mengontrol barang persediaan. Kartu Kanban biasanya ditempatkan di area yang mudah terlihat.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'mengoptimalkan-proses-logistik-dan-persediaan-dengan-chipless',
              'type' => 'article',
              'title' => 'Mengoptimalkan Proses Logistik dan Persediaan dengan Chipless',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-4.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'December 7, 2023',
              'content' => "
            
            <p class='mb-4'>Chipless RFID atau identifikasi frekuensi radio tanpa chip telah menjadi subjek penelitian yang menarik dalam rangka mengoptimalkan proses logistik dan manajemen persediaan. Teknologi ini memungkinkan pengidentifikasian objek tanpa menggunakan tag elektronik aktif atau pasif yang berisi chip terintegrasi.</p>
            <p class='mb-4'>Berbeda dengan RFID konvensional yang menggunakan tag yang memiliki chip untuk menyimpan informasi, chipless RFID menggunakan metode khusus untuk menyimpan dan mengirim data tanpa memerlukan chip terpisah. Teknologi chipless RFID menggunakan pola atau struktur fisik yang unik pada tag atau label untuk menyimpan informasi.</p>
            <p class='mb-4'>Penerapan chipless RFID dalam proses logistik dan manajemen persediaan memiliki beberapa manfaat potensial, di antaranya:</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Biaya yang lebih rendah</span></span>
            
            <p class='mb-4'>Karena tidak memerlukan chip terintegrasi dalam tag, teknologi chipless RFID dapat menjadi solusi yang lebih ekonomis daripada RFID konvensional. Ini dapat mengurangi biaya produksi tag dan memungkinkan penggunaan yang lebih luas dalam berbagai aplikasi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Optimalisasi rantai pasokan</span></span>
            
            <p class='mb-4'>Penggunaan chipless RFID dapat membantu meningkatkan efisiensi di seluruh rantai pasokan. Dari pengiriman barang, pemantauan inventaris, hingga manajemen gudang, teknologi ini dapat mengoptimalkan proses-proses tersebut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Identifikasi yang lebih cepat</span></span>
            
            <p class='mb-4'>Chipless RFID dapat memungkinkan identifikasi barang dalam jumlah besar dengan cepat. Ini mempercepat proses pengiriman, penerimaan, dan pengelolaan persediaan, yang pada gilirannya dapat mengurangi waktu tunggu dan mempercepat aliran barang.</p>
            <p class='mb-4'>Penggunaan teknologi ini akan tergantung pada kebutuhan spesifik perusahaan serta infrastruktur yang diperlukan untuk menerapkannya. Evaluasi menyeluruh tentang keunggulan dan keterbatasan teknologi ini akan menjadi langkah penting sebelum mengadopsinya dalam skala besar dalam konteks logistik dan manajemen persediaan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-user-friendly-integrated-dashboard',
              'type' => 'article',
              'title' => 'Ravelware : User Friendly Integrated Dashboard',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-3.png',
              'tags' => 'big data,industri 4.0,Internet of Things',
              'date' => 'December 6, 2023',
              'content' => "
            
            <p class='mb-4'>Integrated Dashboard adalah suatu visual yang dapat menyajikan informasi dari berbagai sumber dalam satu tampilan yang terstruktur. Dashboard ini dapat menggabungkan data dari berbagai sistem atau platform yang berbeda, seperti database, aplikasi perangkat lunak, layanan web, dan sumber data lainnya.</p>
            <p class='mb-4'>Tujuan utama dari Integrated Dashboard adalah untuk memberikan pemahaman yang komprehensif tentang informasi dan kinerja dalam satu tampilan yang mudah dipahami. Dengan menggunakan visualisasi data yang efektif seperti grafik, tabel, dan metrik kunci lainnya, integrated dashboard memungkinkan pengguna untuk memantau, menganalisis, dan mengambil keputusan berdasarkan data dari berbagai sumber dengan lebih efisien.</p>
            <p class='mb-4'>Berikut 3 keunggulan yang didapatkan dari penggunaan user friendly integrated dashboard :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemantauan Realtime</span></span>
            
            <p class='mb-4'>Integrated dashboard memungkinkan pengguna untuk melacak data secara real-time dari berbagai sumber dalam satu tampilan. Dengan kemampuan ini, pengguna dapat dengan cepat mengetahui informasi terkini terkait kinerja, metrik penting, dan perubahan yang signifikan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Visualisasi Data</span></span>
            
            <p class='mb-4'>Dashboard yang terintegrasi menyajikan informasi dari berbagai sumber dalam format visual yang mudah dipahami. Pengguna dapat melihat tren, analisis komparatif, dan gambaran menyeluruh tentang kinerja atau informasi yang relevan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Informasi Berbagai Sumber</span></span>
            
            <p class='mb-4'>Keunggulan lain dari integrated dashboard adalah kemampuannya untuk menggabungkan data dari berbagai sistem atau platform yang berbeda. Hal ini memungkinkan pengguna untuk memiliki pandangan yang holistik terhadap berbagai aspek operasional, keuangan, pemasaran, dan lainnya dari suatu organisasi atau proses bisnis.</p>
            <p class='mb-4'>Dengan kombinasi dari ketiga keunggulan tersebut, integrated dashboard dapat menjadi alat yang sangat berguna bagi pengambil keputusan dalam memahami informasi, melakukan analisis, dan mengarahkan strategi berdasarkan data yang terintegrasi dan mudah dipahami.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'kaizen-untuk-keunggulan-bisnis',
              'type' => 'article',
              'title' => 'Kaizen Untuk Keunggulan Bisnis',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-2.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'December 5, 2023',
              'content' => "
            
            <p class='mb-4'>Kaizen merupakan konsep Jepang yang mengacu pada filosofi perbaikan berkelanjutan dalam sebuah organisasi. Tujuan utamanya adalah untuk terus-menerus meningkatkan proses, produk, layanan, dan budaya kerja dengan cara yang bertahap, bertanggung jawab, dan melibatkan seluruh anggota organisasi. </p>
            <p class='mb-4'>Kaizen dapat memberikan banyak manfaat untuk mencapai keunggulan dalam bisnis, di antaranya:</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Peningkatan Efisiensi</span></span>
            
            <p class='mb-4'>Dengan menerapkan prinsip Kaizen, perusahaan dapat mengidentifikasi area-area di mana proses bisnis dapat dioptimalkan. Hal ini membantu dalam mengurangi pemborosan waktu, tenaga, dan sumber daya, sehingga meningkatkan efisiensi secara keseluruhan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Inovasi Berkelanjutan</span></span>
            
            <p class='mb-4'>Melalui pendekatan Kaizen, budaya inovasi ditekankan dalam organisasi. Karyawan didorong untuk mencari cara-cara baru untuk melakukan tugas mereka dengan lebih baik dan lebih efektif, yang pada gilirannya dapat menghasilkan inovasi yang berkelanjutan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Keterlibatan Karyawan</span></span>
            
            <p class='mb-4'>Kaizen mendorong partisipasi karyawan dalam meningkatkan proses kerja. Dengan melibatkan semua anggota organisasi, Kaizen membantu dalam menciptakan iklim kerja yang kolaboratif dan memperkuat keterlibatan karyawan.</p>
            <p class='mb-4'>Bagi Kaizen untuk berhasil, penting untuk memperhatikan beberapa hal, seperti komitmen dari semua tingkatan dalam organisasi, memastikan umpan balik dari karyawan, dan menciptakan budaya yang mendukung perbaikan terus-menerus.</p>
            <p class='mb-4'>Dengan menerapkan filosofi Kaizen secara konsisten, perusahaan dapat mencapai perbaikan berkelanjutan yang pada akhirnya akan membantu dalam mencapai keunggulan kompetitif dalam bisnis.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'iot-untuk-mengatasi-ancaman-dan-risiko',
              'type' => 'article',
              'title' => 'IoT Untuk Mengatasi Ancaman dan Risiko',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image-1.png',
              'tags' => 'industri 4.0,Internet of Things,IoT',
              'date' => 'December 4, 2023',
              'content' => "
            
            <p class='mb-4'>IoT, singkatan dari Internet of Things, adalah konsep di mana objek atau perangkat fisik tertentu dilengkapi dengan teknologi, seperti sensor, atau koneksi internet, yang memungkinkan mereka untuk saling berkomunikasi dan bertukar data dengan perangkat lainnya melalui internet. </p>
            <p class='mb-4'>Ide utamanya adalah menghubungkan objek sehari-hari ke internet untuk memfasilitasi pertukaran informasi dan pengendalian yang lebih efisien serta otomatis. </p>
            <p class='mb-4'>Internet of Things (IoT) dapat digunakan sebagai solusi untuk mengatasi berbagai ancaman dan risiko dalam berbagai konteks. Berikut adalah beberapa cara di mana IoT dapat membantu mengurangi ancaman dan risiko :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemantauan Keamanan</span></span>
            
            <p class='mb-4'>Sensor dan kamera IoT dapat digunakan untuk memantau lingkungan secara real-time, seperti memantau perusahaan atau rumah dari jarak jauh. Sensor keamanan yang terhubung ke jaringan dapat mendeteksi insiden atau aktivitas mencurigakan, seperti gerakan yang tidak biasa atau kebocoran gas.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Perlindungan Data</span></span>
            
            <p class='mb-4'>IoT membutuhkan perlindungan terhadap serangan siber. Penggunaan enkripsi dan keamanan jaringan yang kuat diperlukan untuk melindungi data yang dikirim dan diterima oleh perangkat IoT. Perangkat lunak keamanan IoT yang diperbarui secara teratur dapat membantu mencegah serangan siber dan akses tidak sah.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Optimasi Sumber Daya</span></span>
            
            <p class='mb-4'>Pada berbagai sektor, seperti manufaktur, transportasi, atau manajemen energi, penggunaan sensor IoT memungkinkan pemantauan yang lebih akurat terhadap penggunaan energi, air, atau bahan bakar, sehingga memungkinkan pengoptimalan sumber daya dan pengurangan limbah.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'realtime-big-data-untuk-smart-factory-2',
              'type' => 'article',
              'title' => 'Realtime Big Data Untuk Smart Factory',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/12/image.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'December 1, 2023',
              'content' => "
            
            <p class='mb-4'>Industri 4.0 mendorong para pelaku bisnis dan tim untuk tetap mengikuti perkembangan teknologi-teknologi yang mendukung produksi dan penjualan. </p>
            <p class='mb-4'>Semakin lambat perusahaan menghadapi tantangan ini, semakin kecil pula peluang untuk bisa bersaing dengan kompetitor yang sudah mempersiapkan bisnisnya menghadapi industry 4.0 yang terus menerus berkembang.</p>
            <p class='mb-4'>Industri 4.0 merupakan penyempurnaan kolaborasi industri dengan proses tradisional dengan teknologi-teknologi terbarukan. Teknologi-teknologi tersebut seperti, Internet of Thinks (IoT), Artificial Intelligence (AI),</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Smart Factory</span></span>
            
            <p class='mb-4'>Smart Factory merupakan inti dari Industri 4.0. Di mana, alur data dalam big data berjalan dengan lebih stabil, baik dari operasional maupun pusat produksi yang menjadi penggerak bisnis. Smart Factory memiliki kelebihan di mana perusahaan dapat melakukan prediksi dengan cepat, tentu mengelola data dengan bantuan AI adalah hal yang sangat mudah.</p>
            <p class='mb-4'>Istilah Smart Factory menggambarkan lingkungan lantai produksi di mana mesin dan peralatan dapat meningkatkan proses melalui otomatisasi dan optimalisasi diri. Manfaatnya juga melampaui kualitas fisik barang, tapi juga kualitas pada hal lainnya, yakni perencanaan, logistik rantai pasokan, dan bahkan pengembangan produk.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Realtime Big Data</span></span>
            
            <p class='mb-4'>Sebuah industri dapat mengimplementasikan Industri 4.0 dengan membangun smart factory di dalam pabrik. Hal ini dapat dimulai dengan membuat visualisasi atau menampilkan data manufaktur, seperti data ketersediaan mesin, data kinerja mesin, dan data kualitas produk yang dikumpulkan secara real-time dari mesin, lini produksi, hingga keseluruhan pabrik. </p>
            <p class='mb-4'>Data yang ditampilkan dapat dimonitor secara real-time, sehingga manajer dapat mengolah dan menganalisa data tersebut secara real-time untuk mengoptimalkan produktivitas pada pabrik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Manfaat Realtime</span></span>
            
            <p class='mb-4'>Untuk perusahaan, solusi realtime big data ini dapat digunakan untuk berbagai kebutuhan seperti untuk meningkatkan alur kerja, menyeleraskan strategi pemasaran dan penjualan, memahami perilaku pelanggan, menetapkan prosedur keuangan, dan masih banyak lagi. Solusi ini banyak dimanfaatkan untuk case tertentu yang berkaitan dengan Big Data.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'penggunaan-graphene-pada-manufaktur',
              'type' => 'article',
              'title' => 'Penggunaan Graphene Pada Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-23.png',
              'tags' => 'Graphene,industri 4.0',
              'date' => 'November 30, 2023',
              'content' => "
            
            <p class='mb-4'>Graphene ialah sebuah bentuk karbon yang terdiri dari lapisan atom karbon yang sangat tipis, terbentuk dalam struktur dua dimensi (2D) yang terdiri dari satu lapisan atom karbon yang tersusun dalam pola heksagonal seperti sarang lebah. Dengan adalah materi yang sangat kuat, fleksibel, ringan, dan memiliki sifat listrik serta termal yang luar biasa.</p>
            <p class='mb-4'>Penggunaan graphene dalam manufaktur memiliki potensi besar karena sifat uniknya yang sangat kuat, konduktifitas listrik yang tinggi, serta kemampuannya untuk mendispersikan panas dengan sangat baik. Beberapa aplikasi graphene dalam manufaktur meliputi :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Material Kuat dan Ringan</span></span>
            
            <p class='mb-4'>Graphene dapat digunakan dalam pembuatan material komposit yang sangat kuat dan ringan. Ketika graphene dicampur dengan material lain seperti logam, plastik, atau bahan komposit lainnya, ia dapat meningkatkan kekuatan dan kekakuan material sambil tetap mempertahankan keberatannya yang rendah. Misalnya, dalam industri otomotif, penggunaan material komposit graphene dapat membantu mengurangi berat kendaraan tanpa mengorbankan kekuatan struktural, sehingga meningkatkan efisiensi bahan bakar.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Elektronik</span></span>
            
            <p class='mb-4'>Graphene memiliki konduktivitas listrik yang sangat baik, sehingga digunakan dalam elektronik canggih seperti transistor, sensor, dan layar sentuh. Ketebalannya yang sangat tipis memungkinkan penggunaan graphene dalam pengembangan perangkat elektronik yang lebih kecil dan lebih efisien. Selain itu, sifat transparannya membuatnya ideal untuk aplikasi pada layar sentuh yang fleksibel dan tahan lama.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pelapis Material</span></span>
            
            <p class='mb-4'>Dapat digunakan sebagai pelapis untuk melindungi permukaan logam dari korosi dan abrasi. Penggunaannya sebagai pelapis anti-korosi meningkatkan umur pakai material dan mencegah kerusakan akibat kondisi lingkungan yang keras. Selain itu, sifat konduktif graphene juga membuatnya berguna dalam perlindungan material dari korsivitas yang disebabkan oleh lingkungan ekstrem atau suhu tinggi.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-digital-checksheet',
              'type' => 'article',
              'title' => 'Ravelware : Digital Checksheet',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-22.png',
              'tags' => 'big data,industri 4.0,Internet of Things,Radio Frequency Identification',
              'date' => 'November 29, 2023',
              'content' => "
            
            <p class='mb-4'>Digital checksheet adalah sebuah alat atau sistem yang digunakan untuk melakukan pengecekan, pemantauan, atau pencatatan secara elektronik terhadap berbagai item, pekerjaan, atau proses tertentu. Biasanya, digital checksheet digunakan untuk memastikan bahwa suatu tugas atau serangkaian tugas telah dilakukan atau dipenuhi dengan benar sesuai dengan standar atau kriteria yang ditetapkan.</p>
            <p class='mb-4'>Penggunaan digital checksheet meliputi daftar periksa perawatan mesin, survei kepuasan pelanggan secara online, checklist keamanan, pencatatan inventaris, dan banyak lagi. Sistem ini dapat disesuaikan dengan kebutuhan dan jenis pengecekan yang ingin dilakukan oleh pengguna.</p>
            <p class='mb-4'>Penggunaan digital checksheet menawarkan beberapa keuntungan yang signifikan dalam berbagai konteks dan industri. Berikut adalah tiga keuntungan utama dari penggunaan digital checksheet :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Analisis</span></span>
            
            <p class='mb-4'>Digital checksheet menciptakan lingkungan yang mendukung pengumpulan data yang lebih terstruktur dan terorganisir. Data yang terkumpul dapat dianalisis secara lebih efektif dan efisien. Analisis ini dapat memberikan wawasan yang lebih mendalam terkait dengan tren, pola, atau masalah yang mungkin terjadi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kolaborasi</span></span>
            
            <p class='mb-4'>Dengan digital checksheet, berbagai anggota tim atau departemen dapat mengakses dan menggunakan platform yang sama untuk melakukan pengecekan atau pencatatan. Hal ini memungkinkan kolaborasi yang lebih baik antara tim, memperbaiki komunikasi, serta memastikan bahwa semua pihak terlibat dalam pemantauan dan pencatatan yang diperlukan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi</span></span>
            
            <p class='mb-4'>Menggunakan digital checksheet dapat secara signifikan meningkatkan efisiensi dalam proses pencatatan dan pengecekan. Dengan alat digital, penyelesaian tugas dapat dilakukan lebih cepat, pengisian data menjadi lebih mudah, dan validasi otomatis memungkinkan untuk mengurangi kesalahan manusia.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-alasan-penting-iot-untuk-smart-factory',
              'type' => 'article',
              'title' => '3 Alasan Penting IoT Untuk Smart Factory',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-21.png',
              'tags' => 'industri 4.0,Internet of Things,IoT',
              'date' => 'November 28, 2023',
              'content' => "
            
            <p class='mb-4'>Internet of Things (IoT) adalah teknologi yang memungkinkan perangkat elektronik untuk saling terhubung dan berkomunikasi melalui internet. Di dalam konteks Smart Factory (pabrik pintar), IoT memiliki beberapa peran penting yang dapat meningkatkan efisiensi, produktivitas, dan keamanan. Berikut adalah tiga alasan mengapa IoT sangat penting untuk Smart Factory :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemantauan Produksi</span></span>
            
            <p class='mb-4'>IoT memungkinkan perangkat dan mesin di dalam pabrik untuk terhubung dan bertukar data secara real-time. Sensor-sensor yang terpasang pada mesin, peralatan, dan perangkat lainnya dapat mengumpulkan data yang berkaitan dengan performa, kondisi, dan efisiensi operasional.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Prediksi Perawatan</span></span>
            
            <p class='mb-4'>IoT memungkinkan implementasi sistem pemeliharaan prediktif di mana sensor-sensor pada peralatan dapat mengirim data tentang kesehatan mesin secara real-time. Dengan menggunakan analisis data dan kecerdasan buatan (AI), pabrik dapat memprediksi kapan suatu peralatan mungkin mengalami kerusakan atau kegagalan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Optimalisasi</span></span>
            
            <p class='mb-4'>Dalam Smart Factory, IoT memungkinkan integrasi yang lebih baik antara berbagai tahap dalam rantai pasokan. Data yang diperoleh dari sensor IoT dapat membantu dalam mengoptimalkan inventaris, pengiriman, dan logistik. Selain itu, dengan adanya IoT, pabrik dapat menjadi lebih adaptif terhadap permintaan pasar yang berubah dengan cepat.</p>
            <p class='mb-4'>Secara keseluruhan, IoT memiliki peran yang krusial dalam mengubah pabrik konvensional menjadi Smart Factory yang lebih efisien, adaptif, dan terhubung. Integrasi teknologi IoT memungkinkan penggunaan data secara cerdas untuk mengoptimalkan operasi pabrik, meningkatkan produktivitas, dan meminimalkan waktu henti produksi yang tidak direncanakan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'manajemen-gudang-lebih-cerdas-dengan-rfid',
              'type' => 'article',
              'title' => 'Manajemen Gudang Lebih Cerdas Dengan RFID',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-20.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'November 27, 2023',
              'content' => "
            
            <p class='mb-4'>Pada era modern ini, teknologi RFID (Radio Frequency Identification) membawa manajemen gudang ke tingkat yang lebih cerdas. Aplikasi umum RFID meliputi pelacakan inventaris, manajemen rantai pasokan, pengendalian akses, dan masih banyak lagi. RFID tentunya dapat membantu meningkatkan efisiensi operasional mereka dan mengurangi kesalahan manusia dalam manajemen barang-barang</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Manajemen Gudang</span></span>
            
            <p class='mb-4'>Manajemen gudang merupakan kegiatan penting dalam rantai pasok yang melibatkan penyimpanan, pengaturan, dan pengawasan barang atau material yang masuk dan keluar dari gudang. Dalam pengenalan ini, kita akan membahas peran penting manajemen gudang dalam menjaga kelancaran operasional perusahaan dan meningkatkan kepuasan pelanggan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Keuntungan Manajemen Gudang Dengan RFID</span></span>
            
            <p class='mb-4'>Penggunaan teknologi RFID memberikan berbagai keuntungan dalam manajemen gudang. Dengan RFID, perusahaan dapat meningkatkan efisiensi dan produktivitas, mengurangi kesalahan manusia, meningkatkan akurasi inventarisasi, dan mengoptimalkan pengelolaan stok. Selain itu, RFID juga memungkinkan pemantauan real-time, pelacakan yang akurat, serta peningkatan keamanan dan kontrol inventaris.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Implementasi Teknologi RFID</span></span>
            
            <p class='mb-4'>Proses implementasi teknologi RFID dalam manajemen gudang melibatkan pemilihan teknologi yang tepat, pemasangan infrastruktur yang diperlukan, dan penggabungan RFID dengan sistem manajemen gudang yang ada. Selain itu, pelatihan dan pengenalan kepada karyawan juga penting agar perusahaan dapat mengoptimalkan manfaat yang diberikan oleh teknologi RFID.</p>
            <p class='mb-4'>Namun, implementasi RFID juga menimbulkan beberapa tantangan. Oleh karena itu, sebelum mengadopsi teknologi RFID, perusahaan perlu melakukan evaluasi menyeluruh dan memastikan bahwa infrastruktur, sumber daya manusia, dan sistem yang ada siap untuk mengadopsi teknologi ini. Dengan langkah-langkah yang tepat, perusahaan dapat memperoleh manfaat maksimal dari penggunaan teknologi RFID dalam manajemen gudang.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-peran-iot-cloud-computing-untuk-perusahaan-2',
              'type' => 'article',
              'title' => '3 Peran IoT Cloud Computing Untuk Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-19.png',
              'tags' => 'industri 4.0,Internet of Things,IoT',
              'date' => 'November 24, 2023',
              'content' => "
            
            <p class='mb-4'>Pada era revolusi industri 4.0 mengharuskan seluruh sektor untuk segera beralih menggunakan teknologi, semua perusahaan yang ada saat ini perlu mulai untuk beradaptasi agar tetap mampu bersaing dengan competitor yang ada.</p>
            <p class='mb-4'>Salah satu solusinya adalah dengan memanfaatkan teknologi yang ada, seperti Cloud Computing. Cloud Computing ini bukan hanya solusi yang trendi dan inovatif, namun juga model bisnis yang relatif baru yang berlaku untuk semua jenis perusahaan, baik perusahaan besar maupun kecil.</p>
            <p class='mb-4'>Keuntungan cloud computing meliputi kemampuan untuk mengakses sumber daya komputasi secara elastis sesuai kebutuhan, skalabilitas yang mudah, biaya operasional yang lebih rendah karena tidak ada keharusan untuk mengelola infrastruktur sendiri, dan kemampuan untuk mengakses data dan aplikasi dari mana saja dengan koneksi internet.</p>
            <p class='mb-4'>Berikut 3 peran cloud computing dalam perusahaan :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Hemat Biaya</span></span>
            
            <p class='mb-4'>Salah satu alasan terbesar perusahaan memilih beralih ke cloud adalah karena cloud dapat menghemat biaya. Penggunaan cloud computing menghemat biaya karena untuk dialokasikan kepada perangkat keras. Cloud computing juga tidak memerlukan maintenance dan mengurangi pemakaian listrik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Fleksibel</span></span>
            
            <p class='mb-4'>Ketika data yang dimiliki terlalu besar ukurannya, maka cloud secara otomatis dapat menambah kapasitasnya hanya dalam hitungan menit dengan melakukan self-provisioning. Karena hal tersebut perusahaan tidak perlu melakukan penambahan jumlah komputer. </p>
            <p class='mb-4'>Selain itu, karena terdapat data yang tersimpan di dalam server pada internet, maka akan mudah bagi pengguna untuk mengakses data di manapun dan kapanpun asal komputer atau PC mereka terhubung dengan koneksi internet. </p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi</span></span>
            
            <p class='mb-4'>Apabila bisnis membutuhkan lebih banyak RAM, ruang hard drive atau pun CPU, masing-masing bisa ditambahkan dengan cepat. Pengguna tidak perlu membeli RAM baru, tetapi cukup meminta pada cloud provider untuk menambah atau memperbarui beberapa Gigabyte saja. Selebihnya, pengguna bisa mengurangi atau downgrade RAM ke spesifikasi semula.  </p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-alasan-chipless-cocok-untuk-industri',
              'type' => 'article',
              'title' => '3 Alasan Chipless Cocok Untuk Industri',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-18.png',
              'tags' => 'chipless,industri 4.0,Radio Frequency Identification',
              'date' => 'November 23, 2023',
              'content' => "
            
            <p class='mb-4'>Chipless RFID adalah bentuk RFID (Radio-Frequency Identification) yang tidak menggunakan chip terintegrasi, seperti yang umumnya digunakan dalam sistem RFID konvensional. Sebaliknya, teknologi chipless RFID mengidentifikasi objek atau barang dengan menggunakan metode yang berbeda, sering kali berfokus pada fitur atau pola unik yang terkandung dalam tag atau label RFID, tanpa perlu memasukkan sebuah chip elektronik.</p>
            <p class='mb-4'>Chipless adalah sebuah teknologi yang dapat digunakan pada berbagai industri. Teknologi chipless ini sangat cocok untuk digunakan karena memiliki beberapa kelebihan yang tidak dimiliki oleh teknologi lain. Berikut 3 alasan chipless cocok untuk berbagai macam industri :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Harga Lebih Terjangkau</span></span>
            
            <p class='mb-4'>Harga teknologi chipless relatif lebih murah dibandingkan teknologi conventional RFID, membuatnya lebih terjangkau untuk berbagai industri. Teknologi “chipless” memungkinkan perusahaan untuk mengidentifikasi dan melacak barang tanpa harus memasang atau mengganti chip pada setiap item. Ini menghemat biaya investasi awal dan biaya perawatan jangka panjang.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kebutuhan Energi Yang Rendah</span></span>
            
            <p class='mb-4'>Teknologi chipless memerlukan daya yang lebih rendah untuk beroperasi sehingga dapat menghemat biaya listrik dan baterai. Dengan begitu maka memungkinkan perusahaan untuk menyimpan lebih banyak data tentang setiap produk atau barang dengan energi yang lebih rendah, yang dapat digunakan untuk pelacakan, pelaporan, dan analisis yang lebih lanjut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Lebih Ramah Lingkungan</span></span>
            
            <p class='mb-4'>Teknologi chipless tidak memerlukan penggunaan logam berat seperti chip pada RFID conventional sehingga lebih ramah lingkungan. Memungkinkan perusahaan untuk mengadopsi sistem pelabelan atau pelacakan yang lebih cepat dan lebih efisien tanpa perlu pelatihan yang intensif. Kemudahan penggunaan ini sangat penting dalam lingkungan produksi yang berorientasi pada efisiensi.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-automatic-inventory-tracking',
              'type' => 'article',
              'title' => 'Ravelware : Automatic Inventory Tracking',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-17.png',
              'tags' => 'big data,industri 4.0,Internet of Things',
              'date' => 'November 22, 2023',
              'content' => "
            
            <p class='mb-4'>Automatic Inventory Tracking adalah suatu sistem atau proses yang menggunakan teknologi otomatis, seperti perangkat lunak khusus, sensor, RFID (Radio-Frequency Identification), dan peralatan lainnya untuk memantau, mencatat, dan mengelola stok barang atau inventaris dengan cara yang lebih efisien dan akurat.</p>
            <p class='mb-4'>Tujuan utama dari Automatic Inventory Tracking adalah untuk mengurangi kesalahan manusia, meningkatkan visibilitas inventaris, dan mengoptimalkan pengelolaan persediaan. Inventory tracking dapat secara otomatis memperbarui informasi inventaris setelah ada perubahan, seperti penjualan atau pengadaan barang.</p>
            <p class='mb-4'>Berikut 3 manfaat Automatic Inventory Tracking :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Optimalkan Efisiensi</span></span>
            
            <p class='mb-4'>Dengan pelacakan otomatis, dapat mengurangi waktu yang dihabiskan untuk melakukan inventarisasi manual dan fokus pada aktivitas lain yang lebih penting. Mempercepat pemantauan inventaris, pembaruan data, dan pergerakan barang. Hal ini membantu mengurangi waktu yang diperlukan untuk mengelola inventaris.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Peningkatan Produktivitas</span></span>
            
            <p class='mb-4'>Dengan pengelolaan inventaris yang efisien, dapat mengoptimalkan produksi dan distribusi barang, meningkatkan produktivitas bisnis. Membantu mengalokasikan waktu dan sumber daya karyawan ke tugas-tugas lain yang lebih penting daripada pemantauan inventaris manual.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penghematan Biaya</span></span>
            
            <p class='mb-4'>Dengan pelacakan inventaris otomatis, Anda dapat menghindari kehilangan atau kepunahan persediaan, menghemat biaya dan meningkatkan laba bisnis. Mengurangi biaya yang terkait dengan kesalahan inventaris, biaya penyimpanan, dan penundaan pengiriman. Pengelolaan persediaan yang lebih baik juga dapat menghemat biaya perusahaan.</p>
            <p class='mb-4'>Manfaat-manfaat ini menjadikan Automatic Inventory Tracking alat yang penting untuk meningkatkan efisiensi operasional dan pengelolaan persediaan yang lebih efektif, yang pada gilirannya dapat meningkatkan keuntungan dan daya saing perusahaan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-jenis-perawatan-dengan-total-productive-maintenance',
              'type' => 'article',
              'title' => '3 Jenis Perawatan Dengan Total Productive Maintenance',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-16.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'November 21, 2023',
              'content' => "
            
            <p class='mb-4'>TPM adalah filosofi yang bertujuan untuk memperbaiki efektivitas mesin dan peralatan melalui partisipasi semua individu dalam organisasi. TPM terdiri dari beberapa pilar penting seperti perawatan terencana, perbaikan terencana, dan pengembangan karyawan.</p>
            <p class='mb-4'>Dengan TPM, bisnis dapat mengoptimalkan efisiensi produksi, meningkatkan kualitas produk, dan mengurangi kerusakan mesin serta waktu henti produksi. Upaya menerapkan TPM, perusahaan dapat mencapai produksi yang lebih andal, berkualitas tinggi, dan efisien, yang pada gilirannya dapat meningkatkan daya saing dan profitabilitas.</p>
            <p class='mb-4'>Dalam Total Productive Maintenance (TPM), ada berbagai jenis perawatan mesin yang diterapkan untuk menjaga kinerja dan keandalan mesin. Berikut beberapa jenis perawatan mesin yang umum dalam kerangka TPM:</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemeliharaan Kualitas (Quality Maintenance) :</span></span>
            
            <p class='mb-4'>Pemeliharaan kualitas fokus pada perbaikan kualitas produk yang dihasilkan oleh mesin. Hal ini dapat mencakup perbaikan desain produk, penggunaan bahan berkualitas tinggi, dan pemantauan yang ketat terhadap produk cacat yang dapat menyebabkan kerusakan mesin.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemeliharaan Keselamatan (Safety Maintenance) :</span></span>
            
            <p class='mb-4'>Pemeliharaan keselamatan melibatkan upaya untuk menjaga keamanan mesin dan peralatan agar sesuai dengan standar keselamatan kerja. Ini mencakup pemeriksaan rutin dan pemeliharaan yang ditujukan untuk menghindari kecelakaan atau cedera pekerja.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemeliharaan Preventif (Preventive Maintenance) :</span></span>
            
            <p class='mb-4'>Pemeliharaan preventif adalah jenis pemeliharaan terjadwal yang melibatkan perawatan rutin berdasarkan kalender atau hitungan jam kerja. Ini mencakup pembersihan, pelumasan, penggantian suku cadang, dan inspeksi teratur untuk mencegah kerusakan mesin.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-tantangan-penerapan-kaizen',
              'type' => 'article',
              'title' => '3 Tantangan Penerapan Kaizen',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-15.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'November 20, 2023',
              'content' => "
            
            <p class='mb-4'>Kaizen adalah filosofi manajemen yang berfokus pada peningkatan terus-menerus dalam segala hal, dari proses kerja hingga kehidupan pribadi. Dalam pandangan Kaizen, setiap aktivitas dapat ditingkatkan untuk mencapai hasil yang lebih baik.</p>
            <p class='mb-4'>Kaizen merupakan sebuah proses yang berkelanjutan dan memerlukan komitmen jangka panjang untuk perbaikan berkelanjutan. Dengan melibatkan karyawan, mengidentifikasi pemborosan, dan mengukur kinerja. </p>
            <p class='mb-4'>Dengan fokus pada perbaikan berkelanjutan, Kaizen membantu dalam meningkatkan kualitas produk atau layanan. Hal ini dapat mengurangi cacat, menghindari kesalahan, dan meningkatkan kepuasan pelanggan.</p>
            <p class='mb-4'>Dalam penerapannya kaizen tentunya memiliki kendala sebagai berikut :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Tidak Memprioritaskan Waktu</span></span>
            
            <p class='mb-4'>Masalah umum dalam proses perbaikan adalah kelelahan dan kebosanan dengan hal yang dilakukan secara terus menerus oleh karenanya, secara berkala memberikan-permintaan akan mendapatkan dukungan dari setiap anggota.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Tidak Menerima Perubahan</span></span>
            
            <p class='mb-4'>Sebagai manusia, saya lebih suka menjaga hal-hal tetap sama, yang mungkin sulit ketika semua orang mencoba melakukan beberapa perubahan.Karena perubahan yang dilakukan tersebut banyak sekali perusahaan yang gagal menerapkan kaizen karena para anggotanya tidak dapat menerima perubahan dengan baik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kesulitan Menentukan Tujuan</span></span>
            
            <p class='mb-4'>Tujuan perbaikan harus sesuai dengan kebutuhan bisnis dan harus memperhatikan banyak faktor tertentu, seperti keterbatasan sumber daya atau tingkat persaingan bisnis. Tujuan dalam menerapkan kaizen tentunya sangatlah penting karna dengan tujuan maka kita dapat mengetahui kearah mana kaizen harus diterapkan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-manfaat-penerapan-smart-factory-2',
              'type' => 'article',
              'title' => '3 Manfaat Penerapan Smart Factory',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-13.png',
              'tags' => 'big data,industri 4.0,Internet of Things',
              'date' => 'November 17, 2023',
              'content' => "
            
            <p class='mb-4'>Smart Factory ialah sebuah konsep industri yang menghubungkan teknologi canggih diantaranya seperti kecerdasan buatan (AI), robotika, internet of things (IoT) serta otomatisasi yang memiliki tujuan untuk memaksimalkan proses manufaktur.</p>
            <p class='mb-4'>Smart factory merupakan sistem yang terhubung secara real time memantau dan mengendalikan jalannya proses produksi, pengumpulan data dan pengambilan keputusan yang didasarkan analisis data untuk meningkatkan efisiensi serta kualitas.</p>
            <p class='mb-4'>Smart factory juga memungkinkan perusahaan untuk merespons dengan cepat terhadap perubahan permintaan pasar dan mengoptimalkan penggunaan sumber daya. </p>
            <p class='mb-4'>Tujuan utama dari smart factory adalah menciptakan sistem produksi yang cerdas, adaptif, dan efisien, yang mampu menghadapi tantangan dan peluang yang ada di era digital. Berikut 3 manfaat yang bisa didapatkan dari penerapan smart factory :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Produktivitas Meningkat</span></span>
            
            <p class='mb-4'>Dengan mengadopsi teknologi otomatisasi dan robotika, smart factory dapat meningkatkan produktivitas dengan mengurangi pekerjaan pada pekerja manusia. Robot dan sistem otomatis dapat bekerja secara terus-menerus dan melakukan tugas-tugas yang berulang dengan tepat dan tentunya dengan kecepatan yang tinggi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Fleksibilitas Produksi</span></span>
            
            <p class='mb-4'>Smart factory memiliki kemampuan untuk menyesuaikan serta mengubah jalur produksi dengan cepat sesuai permintaan pasar yang sering berubah ubah. Dengan adanya sistem yang terhubung dan terintegrasi, perubahan spesifikasi produk maupun penambahan produk baru dapat dilakukan dengan secara efisien tanpa memerlukan perubahan yang signifikan dalam infrastruktur produksi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Hemat Biaya</span></span>
            
            <p class='mb-4'>Meskipun investasi awal pada implementasi smart factory tinggi, tetapi jangka panjangnya dapat menghasilkan penghematan biaya yang signifikan. Efisiensi operasional yang ditingkatkan, pengurangan limbah, dan penggunaan sumber daya yang lebih baik kedepannya dapat mengurangi biaya produksi dan meningkatkan keuntungan perusahaan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'graphene-vs-material-lain',
              'type' => 'article',
              'title' => 'Graphene vs. Material Lain',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-12.png',
              'tags' => 'Graphene,industri 4.0',
              'date' => 'November 16, 2023',
              'content' => "
            
            <p class='mb-4'>Dalam dunia material, silikon, grafit, nanotube karbon, dan graphene adalah beberapa bahan yang sangat penting. Masing-masing material ini memiliki karakteristik yang unik, yang memiliki dampak besar pada berbagai aplikasi di berbagai sektor industri. Berikut perbandingan secara mendalam untuk memahami keunggulan dan kekurangan masing-masing material.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Silikon</span></span>
            
            <p class='mb-4'>Silikon telah menjadi bahan dasar dalam teknologi semikonduktor. Keunggulan utamanya adalah memiliki konduktivitas elektronik yang sangat baik, menjadikannya pilihan utama dalam perangkat elektronik seperti transistor. Silikon mudah ditemukan dan diproses dalam skala besar. Namun, silikon kurang efisien dalam mengatasi panas, yang dapat membatasi beberapa aplikasinya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Grafit</span></span>
            
            <p class='mb-4'>Grafit, seperti yang ditemukan dalam pensil, memiliki karakteristik unik. Grafit memiliki struktur lapisan yang serupa dengan graphene, dengan lapisan-lapisan atom yang menggelung. Grafit memiliki konduktivitas panas yang baik, sehingga digunakan dalam aplikasi berkinerja tinggi. Meskipun konduktivitas panasnya baik, grafit tidak efisien dalam menghantarkan listrik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Nanotube Karbon</span></span>
            
            <p class='mb-4'>Nanotube karbon adalah silinder graphene dan memiliki keunggulan yaitu sangat kuat dan memiliki kekakuan yang tinggi, menjadikannya bahan yang ideal untuk aplikasi struktural. Seperti graphene, nanotube karbon memiliki konduktivitas elektronik yang sangat baik. Kekurangannya ialah produksi nanotube karbon masih relatif mahal, membuatnya kurang terjangkau dalam banyak aplikasi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Graphene</span></span>
            
            <p class='mb-4'>Graphene adalah bahan revolusioner dengan keunggulan seperti memiliki konduktivitas elektronik dan panas yang luar biasa. Meskipun hanya terdiri dari satu lapisan atom, graphene sangat kuat dan ringan. Graphene adalah material fleksibel dan transparan, cocok untuk berbagai aplikasi. Kekurangan dari graphene yaitu produksi graphene dalam jumlah besar masih menjadi tantangan. Penggunaan graphene dalam beberapa aplikasi masih terhambat oleh biaya produksi yang tinggi.</p>
            <p class='mb-4'>Graphene, silikon, grafit, dan nanotube karbon memiliki karakteristik unik yang menguntungkan dalam berbagai aplikasi. Pemahaman keunggulan dan kekurangan masing-masing material adalah kunci untuk memilih bahan yang sesuai dengan tujuan aplikasi. Graphene, dengan konduktivitas yang luar biasa, ringan, dan fleksibel, menunjukkan potensi besar untuk mengganggu berbagai sektor industri dan teknologi di masa depan.</p>
            <p class='mb-4'>Ravelware adalah perusahaan memiliki pengembangan dan produksi berbagai produk dan komponen berbasis graphene. Ravelware dapat menjadi solusi yang sangat efektif bagi berbagai perusahaan yang membutuhkan material graphene untuk berbagai aplikasi. </p>
            <p class='mb-4'>Ketika perusahaan bergantung pada material yang langka dan mahal seperti graphene, keandalan penyedia sangat penting. Ravelware menjadi penyedia yang andal dengan pengetahuan mendalam tentang graphene. serta terus melakukan penelitian dan pengembangan untuk meningkatkan aplikasi graphene. </p>
            <p class='mb-4'>Dengan demikian, Ravelware dapat dianggap sebagai solusi yang kuat bagi perusahaan yang membutuhkan material graphene. Ravelware dapat memberikan akses ke material berkualitas tinggi, dukungan teknis, dan kolaborasi inovatif yang dapat membantu perusahaan memanfaatkan potensi graphene untuk berbagai aplikasi industri.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-intelligent-manufacture-system',
              'type' => 'article',
              'title' => 'Ravelware : Intelligent Manufacture System',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-11.png',
              'tags' => 'big data,industri 4.0,Internet of Things',
              'date' => 'November 15, 2023',
              'content' => "
            
            <p class='mb-4'>Intelligent Manufacture System (IMS) adalah sistem manufaktur cerdas yang memanfaatkan teknologi canggih, seperti Internet of Things (IoT), kecerdasan buatan (AI), analisis data, otomatisasi, dan teknologi digital lainnya untuk mengoptimalkan proses produksi dan manajemen manufaktur.</p>
            <p class='mb-4'>IMS berfokus pada meningkatkan efisiensi, fleksibilitas, dan kualitas dalam lingkungan manufaktur. IMS adalah bagian dari evolusi manufaktur menuju konsep Manufaktur Cerdas (Smart Manufacturing) atau Industri 4.0.</p>
            <p class='mb-4'>Ini bertujuan untuk menciptakan pabrik yang lebih responsif, adaptif, dan efisien, yang dapat bersaing dalam ekonomi global yang semakin berubah dan kompetitif. IMS memanfaatkan teknologi untuk menghadirkan inovasi dan keunggulan kompetitif dalam industri manufaktur.</p>
            <p class='mb-4'>Berikut 3 manfaat penggunaan Intelligent Manufacture System dari Ravelware :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Produktivitas Meningkat</span></span>
            
            <p class='mb-4'>IMS memungkinkan produksi yang lebih efisien dan terkoordinasi. Dengan otomatisasi, manajemen persediaan yang cerdas, dan perencanaan produksi yang terinformasi, IMS dapat meningkatkan produktivitas secara signifikan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Peningkatan Kualitas Produk</span></span>
            
            <p class='mb-4'>Dengan menggunakan IMS untuk memantau, menganalisis, dan mengoptimalkan produksi, perusahaan dapat secara konsisten menghasilkan produk dengan kualitas yang lebih tinggi, mengurangi jumlah produk cacat, dan meningkatkan kepuasan pelanggan. Peningkatan kualitas ini dapat mengarah pada reputasi yang lebih baik, peningkatan pangsa pasar, dan keunggulan kompetitif.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengurangan Biaya Produksi</span></span>
            
            <p class='mb-4'>Dengan manajemen persediaan yang lebih efisien, penggunaan energi yang lebih bijak, dan prediksi perawatan mesin, IMS membantu mengurangi biaya produksi secara keseluruhan. Serta membantu perusahaan mengurangi biaya produksi secara keseluruhan, dan mencapai efisiensi yang lebih besar dalam bisnis.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-peranan-iot-untuk-quality-control',
              'type' => 'article',
              'title' => '3 Peranan IoT Untuk Quality Control',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-10.png',
              'tags' => 'industri 4.0,Internet of Things,IoT',
              'date' => 'November 14, 2023',
              'content' => "
            
            <p class='mb-4'>IoT adalah singkatan dari Internet of Things yang memiliki arti menghubungkan berbagai macam benda ke internet. Merupakan sebuah konsep di mana berbagai perangkat fisik dan objek sehari-hari terhubung ke internet dan saling berkomunikasi.</p>
            <p class='mb-4'>IoT memungkinkan objek-objek tersebut untuk mengumpulkan data, bertukar informasi, dan bahkan mengambil tindakan secara otomatis tanpa intervensi manusia. Prinsip dasar dari IoT melibatkan penggunaan sensor, perangkat keras, perangkat lunak, dan konektivitas internet untuk menciptakan ekosistem yang terhubung.</p>
            <p class='mb-4'>Dalam penggunaannya, IoT tentunya memiliki banyak sekali manfaat. Salah satunya adalah fungi IoT untuk quality control sebagai berikut :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Real time Monitoring</span></span>
            
            <p class='mb-4'>IoT memungkinkan perusahaan untuk mengawasi produksi dan proses manufaktur secara real-time. Sensor-sensor yang terhubung ke jaringan IoT dapat mengukur berbagai parameter, seperti suhu, kelembaban, tekanan, dan berat, sehingga perusahaan dapat mendeteksi perubahan atau masalah dengan cepat.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Prediksi Kegagalan</span></span>
            
            <p class='mb-4'>IoT juga dapat digunakan untuk menganalisis data historis dan sensor saat ini untuk memprediksi potensi kegagalan mesin atau peralatan produksi. Dengan memantau parameter kunci, seperti getaran, suhu, atau tekanan, perusahaan dapat mengidentifikasi tanda-tanda keausan atau potensi kerusakan sebelum terjadi kegagalan besar.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Prediksi Perawatan</span></span>
            
            <p class='mb-4'>IoT memungkinkan prediksi kegagalan peralatan dan mesin dengan menganalisis data sensor. Dengan informasi ini, perusahaan dapat merencanakan perawatan preventif sehingga peralatan tetap beroperasi dengan optimal, mengurangi gangguan dalam produksi, dan memperpanjang umur peralatan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-proses-industri-manufaktur-dengan-ai',
              'type' => 'article',
              'title' => '3 Proses Industri Manufaktur Dengan AI',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-9.png',
              'tags' => 'big data,industri 4.0,Internet of Things',
              'date' => 'November 13, 2023',
              'content' => "
            
            <p class='mb-4'>Artificial Intelligence atau dalam bahasa Indonesia dikenal sebagai Kecerdasan Buatan. AI adalah bidang dalam ilmu komputer yang berkaitan dengan pengembangan sistem komputer yang mampu mengeksekusi tugas yang biasanya memerlukan kecerdasan manusia.</p>
            <p class='mb-4'>Sistem AI dirancang untuk meniru beberapa aspek kecerdasan manusia, seperti pemahaman bahasa alami, pengambilan keputusan, pembelajaran, dan pemecahan masalah. AI memiliki potensi aplikasi yang luas dalam berbagai bidang, termasuk manufaktur, kesehatan, transportasi, keuangan, ilmu pengetahuan, dan banyak lagi.</p>
            <p class='mb-4'>Kemajuan dalam teknologi AI telah membawa perubahan besar dalam cara organisasi dan individu memproses informasi, mengotomatiskan pekerjaan rutin, meningkatkan efisiensi, dan menciptakan layanan dan produk baru.</p>
            <p class='mb-4'>Berikut 3 proses industri manufaktur yang memerlukan AI :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Perencanaan Produksi</span></span>
            
            <p class='mb-4'>Sistem AI dapat menganalisis data sejarah penjualan, tren pasar, dan faktor-faktor lainnya untuk memprediksi permintaan masa depan. Ini memungkinkan produsen untuk merencanakan produksi dengan lebih baik, menghindari kelebihan persediaan atau kekurangan stok, dan mengurangi biaya pergudangan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Rantai Pasokan</span></span>
            
            <p class='mb-4'>AI dapat membantu dalam manajemen rantai pasokan dengan mengidentifikasi cara terbaik untuk mendapatkan bahan baku, mengatur pengiriman, dan mengoptimalkan jaringan rantai pasokan secara keseluruhan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Proses Produksi</span></span>
            
            <p class='mb-4'>Sistem AI dapat memantau proses produksi secara real-time. Ini memungkinkan deteksi dini cacat atau masalah dalam produksi dan mengambil tindakan korektif sebelum produk cacat berlanjut dalam proses produksi. Penggunaan AI dalam proses produksi dapat mengoptimalkan efisiensi, meningkatkan kualitas produk, dan memungkinkan pemantauan yang lebih baik.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-manfaat-line-balancing-untuk-industry-manufaktur-2',
              'type' => 'article',
              'title' => '3 Manfaat Line Balancing Untuk Industry Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-8.png',
              'tags' => 'industri 4.0,Internet of Things,Radio Frequency Identification',
              'date' => 'November 10, 2023',
              'content' => "
            
            <p class='mb-4'>Line balancing adalah suatu strategi produksi yang memiliki cara dengan membagi tugas kepa sejumlah pekerja dalam bagian kerja tertentu. Dalam setiap bagian kerja tersebut tentunya memiliki tahapan yang saling terhubung satu sama lainnya. </p>
            <p class='mb-4'>Line balancing juga dapat dikatakan sebagai metode untuk menyeimbangkan berbagai macam pekerjaan dengan cara melihat komponen dari tugas yang ada.</p>
            <p class='mb-4'>Salah satu fungsi utama dari line balancing adalah untuk membuat pekerjaan semakin terartur serta terarah guna mempermudah proses produksi tersebut, dengan kata lain penerapan line balancing maka proses produksi akan menjadi lebih lancar. Menerapkan line balancing maka perusahaan akan mendapatkan manfaat sebagai berikut :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi Waktu</span></span>
            
            <p class='mb-4'>Waktu merupakan hal yang sangat penting dalam sebuha proses produksi, terlalu banyak membuang waktu maka kegiatan produksi akan menjadi tidak efisien dan tentunya akan menimbulkan kerugian dalam bisnis. </p>
            <p class='mb-4'>Beberapa jenis pemborosan waktu ialah saat mesin menunggu bahan baku produksi yang dibutuhkan. Dengan penerapan line balancing dapat membantu perusahaan untuk dapat mengurangi pemborosan waktu pada saat produksi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningktakan Koordinasi</span></span>
            
            <p class='mb-4'>Dalam kegiatan produksi yang lancar serta tanpa hambatan tentu saya disebabkan oleh koordinasi antar pekerja yang bertugas pada saat kegiatan produksi berlanngsung. Tiap pekerja dihimbau untuk tidak membuang buang waktu serta dapat beketrja dengan efisien. Line balancing dapat membuat hal tersebut semakin lebih baik lagi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menetapkan Alur Produksi</span></span>
            
            <p class='mb-4'>Menggunakan metode line balancing jumlah stasiun kerja dapat diarahkan sehingga jauh lebih efektif. Line balancing adalah salah satu cara tepat untuk menentukan kegiatan produksi yang tepat. Dengan line balancing juga dapat dibuat ketentuan mengenai kegiatan yang akan dilakukan pada setiap stasiun kerja.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-safety-access-gate',
              'type' => 'article',
              'title' => 'Ravelware : Safety Access Gate',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-7.png',
              'tags' => 'big data,industri 4.0,Internet of Things',
              'date' => 'November 8, 2023',
              'content' => "
            
            <p class='mb-4'>Safety Access Gate adalah pintu akses yang dirancang khusus untuk meningkatkan keamanan dan keselamatan di area tertentu, seperti tempat kerja, fasilitas industri, atau lokasi lainnya yang memerlukan pengendalian akses. </p>
            <p class='mb-4'>Fungsi utama dari Safety Access Gate adalah untuk mencegah akses yang tidak sah ke area berbahaya atau terbatas, serta untuk memastikan bahwa hanya orang yang diizinkan yang dapat memasuki area tersebut.</p>
            <p class='mb-4'>Safety Access Gate sering digunakan di berbagai lingkungan, termasuk pabrik, fasilitas industri, pembangkit listrik, proyek konstruksi, bandara, dan banyak tempat lain yang memerlukan pengendalian akses untuk tujuan keselamatan dan keamanan.</p>
            <p class='mb-4'>Berikut 3 keunggulan penggunaan safety access gate dari Ravelware :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Peningkatan Keselamatan</span></span>
            
            <p class='mb-4'>Safety Access Gate adalah alat yang sangat efektif dalam meningkatkan keselamatan dan keamanan di lingkungan kerja. Mereka mencegah akses yang tidak sah ke area berbahaya atau terbatas, mengurangi risiko kecelakaan, cedera, dan kerusakan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kontrol Akses</span></span>
            
            <p class='mb-4'>Safety Access Gate menawarkan kontrol akses yang fleksibel. Mereka dapat diatur untuk mengizinkan atau membatasi akses ke area tertentu berdasarkan waktu, peran, atau izin khusus. Ini memungkinkan perusahaan untuk mengatur akses sesuai dengan kebutuhan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pelacakan</span></span>
            
            <p class='mb-4'>Safety Access Gate sering dilengkapi dengan sistem pemantauan dan pencatatan akses yang memungkinkan perusahaan untuk mematuhi peraturan yang berlaku. Sehingga dapat mencatat siapa yang masuk dan keluar dari area tertentu, memberikan data yang berharga untuk tujuan audit serta pelacakan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'tingkatkan-kualitas-manufaktur-dengan-data-sciene',
              'type' => 'article',
              'title' => 'Tingkatkan Kualitas Manufaktur Dengan Data Sciene',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-5.png',
              'tags' => 'big data,data sciene,industri 4.0,Manufacturing',
              'date' => 'November 7, 2023',
              'content' => "
            
            <p class='mb-4'>Data science adalah disiplin ilmu yang berfokus pada pengumpulan, analisis, pemahaman, dan pemanfaatan data untuk mengambil keputusan atau mendapatkan wawasan yang bernilai. Data science menggabungkan berbagai konsep dan teknik dari statistik, matematika, ilmu komputer, dan domain pengetahuan khusus untuk mengolah data dan mengidentifikasi pola atau informasi yang relevan.</p>
            <p class='mb-4'>Data Science menggunakan pemanfaatan metode serta teknologi untuk mengumpulkan, menganalisis menginterpretasi data. Dibutuhkan juga gabungan dari berbagai disiplin ilmu seperti Matematika, Statistik, Ilmu Komputer, dan Domain Pengetahuan Bisnis. Data Science juga melibatkan penggunaan algoritma Machine Learning dan Artificial Intelligence untuk menghasilkan wawasan yang lebih pentik dari sekedar data.</p>
            <p class='mb-4'>Berikut 3 cara meningkatkan kualitas manufaktur dengan pennggunan data sience :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Memprediksi Kegagalan</span></span>
            
            <p class='mb-4'>Data science dapat digunakan untuk menganalisis data sensor dari mesin-mesin pabrik untuk memprediksi potensi kerusakan atau kegagalan. Dengan menganalisis pola data historis, algoritma machine learning dapat memprediksi kapan mesin mungkin akan rusak.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengendali Kualitas</span></span>
            
            <p class='mb-4'>Data science juga dapat digunakan untuk memantau kualitas produk secara real-time. Dengan memasang sensor kualitas di berbagai titik dalam proses produksi, data science dapat memantau parameter kualitas dan mendeteksi cacat atau perubahan kualitas secara cepat.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Rantai Pasokan</span></span>
            
            <p class='mb-4'>Digunakan untuk mengoptimalkan rantai pasokan dalam manufaktur. Dengan menganalisis data sepanjang rantai pasokan, termasuk permintaan pelanggan, persediaan bahan baku, dan waktu pengiriman, perusahaan dapat mengoptimalkan persediaan dan menghindari kekurangan atau kelebihan stok.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-alasan-big-data-relevan-bagi-manufaktur',
              'type' => 'article',
              'title' => '3 Alasan Big Data Relevan Bagi Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-3.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'November 6, 2023',
              'content' => "
            
            <p class='mb-4'>Big Data adalah istilah yang digunakan untuk merujuk kepada jumlah data yang sangat besar dan kompleks yang tidak dapat dengan mudah dikelola atau dianalisis menggunakan metode tradisional.</p>
            <p class='mb-4'>Ketika data mencapai ukuran yang sangat besar dan kompleksitas yang tinggi, pengelolaan, penyimpanan, analisis, dan pengambilan keputusan tentang data tersebut menjadi tantangan. Oleh karena itu, Big Data memerlukan solusi teknologi khusus dan alat analisis yang mampu mengatasi volume dan kecepatan data tersebut.</p>
            <p class='mb-4'>Penerapan Big Data dalam manufaktur memerlukan infrastruktur teknologi yang kuat, perangkat sensor yang sesuai, dan tim yang terampil dalam analisis data. Namun, manfaatnya dapat signifikan dalam meningkatkan efisiensi operasional dan meningkatkan daya saing di pasar manufaktur.</p>
            <p class='mb-4'>Berikut 3 alasan big data relevan bagi manufaktur :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Analisis Prediktif</span></span>
            
            <p class='mb-4'>Big Data memungkinkan manufaktur untuk mengumpulkan data dari berbagai sumber, seperti sensor mesin, perangkat IoT (Internet of Things), dan data produksi, untuk mengembangkan model analisis prediktif.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kualitas Produk</span></span>
            
            <p class='mb-4'>Big Data memungkinkan manufaktur untuk melakukan analisis data kualitas yang lebih baik. Dengan memantau parameter-produk dan data inspeksi secara real-time, perusahaan dapat mendeteksi cacat produk lebih awal, mengurangi pemborosan, dan meningkatkan kualitas keseluruhan produk.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Rantai Pasok</span></span>
            
            <p class='mb-4'>Big Data dapat digunakan untuk meningkatkan manajemen rantai pasokan manufaktur. Data real-time tentang inventaris, permintaan pelanggan, dan status pengiriman dapat membantu perusahaan mengoptimalkan persediaan, menghindari kekurangan atau kelebihan persediaan, serta mempercepat pengiriman produk.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'kaizen-visual-management-untuk-mengurangi-pemborosan-2',
              'type' => 'article',
              'title' => 'Kaizen : Visual Management Untuk Mengurangi Pemborosan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-2.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'November 3, 2023',
              'content' => "
            
            <p class='mb-4'>Visual Management merupakan manajemen yang berfungsi untuk membuat tempat kerja menjadi bagian yang jelas, mampu mengetahui kesehatan bisnis dalam waktu yang singkat.</p>
            <p class='mb-4'>Visual management adalah pendekatan atau metode dalam manajemen yang menggunakan elemen visual, seperti papan tulis, grafik, simbol, atau papan pengumuman yang bertujuan untuk menyajikan informasi dengan cara yang jelas, mudah dipahami, dan mudah diakses oleh anggota tim atau pekerja. Tujuannya adalah meningkatkan pemahaman, komunikasi, dan keterlibatan seluruh tim dalam proses operasional atau proyek.</p>
            <p class='mb-4'>Visual management membantu menciptakan lingkungan kerja yang terorganisir, transparan, dan mudah dipahami. Ini membantu dalam komunikasi yang efektif, pemantauan kinerja, identifikasi masalah atau peluang perbaikan, dan peningkatan kesadaran tim terhadap tujuan dan hasil yang diinginkan.</p>
            <p class='mb-4'>Berikut 3 fungsi visual management dalam mnegurangi pemborosan :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Alur Produksi</span></span>
            
            <p class='mb-4'>Sebagai yang paling mudah terlihat dalam arus produksi adalah penandaan pada lantai yang jelas untuk menunjukkan lokasi produk dan secara spesifik membagi lokasi secara jelas untuk semua komponen dalam tiap post produksi. </p>
            <p class='mb-4'>Demikian juga bila ada WIP yang terletak di tempat yang tidak semestinya atau diletakkan di tempat tanpa lantai produksi. Hal tersebut sudah menunjukkan adanya pemborosan berupa ruang kosong yang tidak dimanfaatkan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Komunikasi</span></span>
            
            <p class='mb-4'>Kebijakan dan tujuan perusahaan juga ditampilkan sehingga akan mudah dipahami oleh isi dalam perusahaan. Hal ini akan sangat membantu karyawan untuk mengetahui bahwa apa yang mereka kerjakan telah sesuai dengan kebijakan perusahaan.</p>
            <p class='mb-4'>Briefing perusahaan juga harus ditampilkan dan di update sehingga akan dipahami oleh setiap orang. Selain briefing perusahaan, catatan kehadiran saat pertemuan briefing juga ikut ditampilkan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Maintenance</span></span>
            
            <p class='mb-4'>Umumnya, manufaktur hanya menggantungkan tag pada mesin saja, namun tidak memberikan papan khusus untuk menginformasikan adanya tag pada mesin tersebut pada rekan / anggota tim lainnya. Tag ini, selain sangat berguna bagi tim maintenance, juga dapat digunakan oleh tim safety.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-potensi-penggunaan-graphene',
              'type' => 'article',
              'title' => '3 Potensi Penggunaan Graphene',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image-1.png',
              'tags' => 'Graphene,industri 4.0',
              'date' => 'November 2, 2023',
              'content' => "
            
            <p class='mb-4'>Graphene merupakan sebuah molekul yang terdiri dari atom karbon murni dan atom ini saling berkaitan satu dengan yang lainnya yang memiliki bentuk menyerupai sarang lebah. Graphene adalah bahan yang menarik yang terdiri dari satu lapisan atom karbon yang disusun dalam struktur heksagonal.</p>
            <p class='mb-4'>Graphene tentunya memiliki banyak kelebihan seperti dapat menghantarkan listrik lebih cepat dari pada tembaga dan menghantarkan panas lebih cepat dari berlian. Materi ini sangat fleksibel karena dapat ditekuk, , merenggan dan tentunya transparan serta tahan air.</p>
            <p class='mb-4'>Bahan ini memiliki sifat-sifat unik yang membuatnya memiliki banyak potensi penggunaan di berbagai bidang. Berikut adalah tiga potensi penggunaan utama dari graphene :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Baterai</span></span>
            
            <p class='mb-4'>Graphene telah digunakan dalam pengembangan baterai dengan kapasitas yang lebih besar, waktu pengisian yang lebih cepat, dan masa pakai yang lebih lama. Baterai graphene juga lebih aman daripada baterai lithium-ion konvensional karena kurang rentan terhadap panas berlebihan atau kebakaran.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Material Kuat</span></span>
            
            <p class='mb-4'>Graphene dapat digunakan untuk memperkuat dan memperringan berbagai jenis material. Misalnya, komposit graphene dengan logam atau plastik dapat menghasilkan material yang lebih kuat, tetapi tetap ringan. Ini dapat digunakan dalam industri otomotif, penerbangan, dan pembuatan peralatan olahraga untuk menghasilkan produk yang lebih efisien dan tahan lama.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Elektronika</span></span>
            
            <p class='mb-4'>Graphene adalah komponen elektronik yang mungkin menggantikan transistor silikon dalam perangkat elektronik masa depan. Transistor graphene dapat beroperasi pada frekuensi yang jauh lebih tinggi dan menghasilkan panas yang lebih sedikit daripada transistor silikon konvensional. Ini dapat digunakan dalam perangkat elektronik canggih, termasuk komputer supercepat dan perangkat berkinerja tinggi lainnya.</p>
            <p class='mb-4'>Selain tiga potensi penggunaan utama di atas, graphene juga memiliki aplikasi dalam bidang-bidang lain seperti sensor, pengobatan medis, pemurnian air, dan banyak lagi.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelwere-fleet-parking-management-system',
              'type' => 'article',
              'title' => 'Ravelware : Fleet Parking Management System',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/11/image.png',
              'tags' => 'big data,industri 4.0,Internet of Things',
              'date' => 'November 1, 2023',
              'content' => "
            
            <p class='mb-4'>Merupakan sebuah perangkat lunak atau sistem berbasis teknologi yang dirancang khusus untuk mengelola, mengawasi, dan mengoptimalkan penggunaan tempat parkir bagi armada kendaraan suatu perusahaan atau organisasi. Serta meningkatkan efisiensi operasional, dan memastikan bahwa armada kendaraan dapat beroperasi dengan lancar dan efisien.</p>
            <p class='mb-4'>Sistem ini membantu perusahaan yang memiliki armada kendaraan dalam mengatasi tantangan terkait parkir, meningkatkan efisiensi, dan mengurangi biaya operasional.</p>
            <p class='mb-4'>Dengan begitu maka dapat dikatakan bahwa fleet parking management system ini dapat sangat membantu karena memiliki banyak sekali kelebihan di dalamnya. Berikut 3 contoh kelebihan drai penerapan fleet parking management system :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pelacakan</span></span>
            
            <p class='mb-4'>Dapat memungkinkan pemantauan real-time terhadap lokasi dan pergerakan setiap kendaraan dalam armada. Ini membantu dalam mengoptimalkan rute perjalanan, menghindari kemacetan, dan merespons keadaan darurat atau keadaan lalu lintas yang tidak terduga. Memiliki beberapa manfaat penting, termasuk meningkatkan efisiensi, keamanan, dan pengalaman pengemudi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi</span></span>
            
            <p class='mb-4'>Sistem ini membantu mengurangi biaya operasional dengan mengoptimalkan penggunaan kendaraan, bahan bakar, dan sumber daya lainnya. Ini juga memungkinkan perencanaan perawatan dan perbaikan yang tepat waktu, yang dapat mengurangi kerusakan dan downtime yang tidak terduga.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penghematan</span></span>
            
            <p class='mb-4'>Sistem ini membantu mengoptimalkan penggunaan bahan bakar dengan melacak kecepatan kendaraan, waktu idling, dan pemilihan rute terbaik. Ini dapat mengurangi biaya bahan bakar secara signifikan. Dengan manajemen parkir yang lebih baik, perusahaan dapat mengoptimalkan sumber daya mereka dan mengurangi biaya yang tidak perlu.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'keunggulan-smart-inventory-dengan-rfid',
              'type' => 'article',
              'title' => 'Keunggulan Smart Inventory Dengan RFID',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-21.png',
              'tags' => 'industri 4.0,Radio Frequency Identification,RFID',
              'date' => 'October 31, 2023',
              'content' => "
            
            <p class='mb-4'>Radio Frequency Identification</p>
            <p class='mb-4'>RFID (Radio Frequency Identification) adalah teknologi yang digunakan untuk mengidentifikasi, melacak, dan mengelola objek dengan menggunakan sinyal radio. Ini melibatkan penggunaan tag RFID yang tertanam pada objek dan pembaca RFID yang membaca tag tersebut secara nirkabel. Teknologi RFID umum digunakan dalam berbagai aplikasi, termasuk manajemen inventaris, transportasi, keamanan, dan banyak lagi.</p>
            <p class='mb-4'>Smart Inventory System</p>
            <p class='mb-4'>Salah satu penerapannya adalah pada smart inventory system, smart inventory adalah konsep sebuah teknologi digital dan otomatisasi digunakan untuk mengelola serta mengawasi inventaris maupun stok barang dengan lebih efisien dan cerdas.</p>
            <p class='mb-4'>Tujuan utama dari smart inventory adalah meningkatkan efisiensi operasional, mengurangi biaya, meningkatkan akurasi data, dan meningkatkan pengalaman pelanggan. Dalam smart inventory, RFID digunakan untuk melacak barang secara real-time, menghindari kekurangan stok atau overstocking, dan memantau pergerakan barang dengan akurat.</p>
            <p class='mb-4'>Keunggulan</p>
            <p class='mb-4'>Dari pengaplikasian tersbut tentunya RFID pada smart inventory system memiliki beberapa keunggulan seperti berikut :</p>
            <ol>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Realtime : Smart inventory memungkinkan pemantauan inventaris secara real-time. Sangat memudahkan karena dapat melihat status stok barang secara langsung dan mengakses data inventaris terbaru kapan saja.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Otomatisasi : Banyak tugas yang sebelumnya memerlukan intervensi manusia, seperti pencatatan barang masuk dan keluar, dapat diotomatisasi dengan menggunakan teknologi seperti RFID, barcode, atau sensor.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Stok : Dengan data inventaris yang akurat dan real-time, perusahaan dapat mengelola stok dengan lebih efisien, menghindari kekurangan stok dan overstocking, dan mengoptimalkan pergudangan.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pelayanan : Memiliki visibilitas yang lebih baik atas persediaan, perusahaan dapat memberikan layanan pelanggan yang lebih baik dengan memberikan estimasi pengiriman yang lebih akurat dan memastikan barang yang diinginkan oleh pelanggan tersedia.</span></span>
            </ol>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-dampak-besar-penerapan-iot-di-indonesia',
              'type' => 'article',
              'title' => '3 Dampak Besar Penerapan IoT di Indonesia',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-20.png',
              'tags' => 'industri 4.0,Internet of Things,IoT',
              'date' => 'October 30, 2023',
              'content' => "
            
            <p class='mb-4'>Internet of Things merupakan sebuah kumpulan berbagai perangkat fisik (seperti sensor, perangkat elektronik, kendaraan, peralatan rumah tangga, dan banyak lagi) terhubung ke internet dan berkomunikasi satu sama lain secara nirkabel.</p>
            <p class='mb-4'>Tujuannya adalah untuk mengumpulkan, mentransmisikan, dan menganalisis data secara otomatis untuk memberikan informasi yang bermanfaat, memungkinkan pengendalian jarak jauh, dan meningkatkan efisiensi di berbagai aspek kehidupan sehari-hari dan industri.</p>
            <p class='mb-4'>IoT memiliki potensi untuk mengubah cara kita bekerja, hidup, dan berinteraksi dengan dunia sekitar. Ini adalah salah satu tren teknologi yang paling penting dan menarik yang terus berkembang dan berdampak pada berbagai aspek kehidupan sehari-hari.</p>
            <p class='mb-4'>Berikut 3 dampak besar dari penerapan IoT di Indonesia :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi Berbagai Sektor</span></span>
            
            <p class='mb-4'>IoT telah diterapkan di sejumlah sektor di Indonesia, termasuk pertanian, manufaktur, transportasi, dan kota pintar. Di pertanian, misalnya, petani dapat menggunakan sensor IoT untuk memantau tanaman dan hewan ternak mereka secara real-time, memungkinkan pengelolaan sumber daya yang lebih efisien.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Konektivitas</span></span>
            
            <p class='mb-4'>Di Indonesia, upaya terus dilakukan untuk meningkatkan konektivitas internet, termasuk pengembangan jaringan 4G dan 5G. Konektivitas yang lebih baik adalah kunci untuk mendukung pertumbuhan IoT, karena perangkat IoT memerlukan akses yang cepat dan andal ke internet untuk berkomunikasi dan mentransmisikan data.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Keamanan dan Privasi</span></span>
            
            <p class='mb-4'>Seperti di negara lain, keamanan dan privasi adalah dua aspek penting yang perlu diperhatikan dalam pengembangan IoT di Indonesia. Seiring dengan pertumbuhan IoT, muncul potensi risiko keamanan, seperti peretasan perangkat IoT atau pencurian data yang dihasilkan oleh perangkat tersebut. Oleh karena itu, penting bagi pemerintah, perusahaan, dan individu untuk mengambil tindakan yang tepat dalam hal keamanan siber dan privasi data.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'focus-group-discussion-dengan-pt-surabaya-industrial-estate-rungkut',
              'type' => 'news',
              'title' => 'Focus Group Discussion dengan PT. Surabaya Industrial Estate Rungkut',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-19.png',
              'tags' => 'automation,Deeptech,digitalisasi,industri 4.0,Internet of Things,Kawasanindustri,RavelwareTech,SIER,solusiteknologi',
              'date' => 'October 27, 2023',
              'content' => "
            
            <p class='mb-4'>Selasa, 24 Oktober 2023, PT. Ravelware Technology Indonesia dengan bangga dan terhormat mendapat kesempatan berkunjung ke Surabaya Timur untuk melakukan Focus Group Discussion (FGD) dengan pimpinan pengelola kawasan industri PT. Surabaya Industrial Estate Rungkut (SIER).</p>
            <p class='mb-4'>Melalui FGD ini, Ravelware juga dipercaya untuk memberikan edukasi pemaparan mengenai aplikasi produk digital dan automasi berbasis Internet of Things (IoT) untuk kawasan industri dan manufaktur. Hal ini didasari atas pengalaman dan jam terbang Ravelware yang secara konsisten mengembangkan secara mandiri, dan mengaplikasikan produk-produk digital dan automasi pintar berbasis deep-tech yang tepat guna bagi ekosistem industri di Indonesia, khususnya sektor manufaktur dan logistik – digitalisasi dan automasi yang berfokus pada menghilangkan hidden inefficiencies pada lini produksi, peningkatan efektifitas pemanfaatan bahan baku dan optimasi kemampuan mesin, serta pemberdayaan produktifitas tenaga kerja yang tersedia (bukan digitalisasi yang menghilangkan peran manusia).</p>
            <p class='mb-4'>Kegiatan ini berjalan baik dan ditutup dengan beberapa komitmen pengelola kawasan dan perwakilan tenant untuk melibatkan Ravelware Technology dalam perencanaan, penjajakan, penerapan aplikasi-aplikasi digital dan automasi pintar berbasis IoT untuk menunjang efektifitas pengelolaan lingkungan dan kinerja layanan kawasan industri SIER. Terima kasih untuk kesempatan yang diberikan, dan semoga Ravelware bisa semakin bersumbangsih nyata dalam kemandirian teknologi dalam negeri yang tepat guna untuk kemajuan industri manufaktur di Indonesia.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-industri-yang-perlu-menggunakan-graphene',
              'type' => 'article',
              'title' => '3 Industri yang Perlu Menggunakan Graphene',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-18.png',
              'tags' => 'Graphene,industri 4.0',
              'date' => 'October 26, 2023',
              'content' => "
            
            <p class='mb-4'>Graphene merupakan bahan serbaguna berkekuatan tinggi yang terdiri dari satu lapisan atom karbon, sedang merevolusi teknologi di berbagai bidang. Dengan properti uniknya, graphene menawarkan potensi besar untuk aplikasi masa depan yang luar biasa.</p>
            <p class='mb-4'>Graphene memiliki kekuatan yang luar biasa, 200 kali lebih kuat dari baja. Karbon yang padat dalam struktur heksagonal membentuk jaringan yang tangguh, menjadikannya bahan yang sangat tahan terhadap tegangan mekanis.</p>
            <p class='mb-4'>Graphene adalah bahan yang sangat transparan, membiarkan lebih dari 97% cahaya melewati permukaannya. Hal ini membuatnya menjadi inovasi yang menarik dalam pengembangan layar fleksibel, sel surya transparan, dan teknologi layar sentuh.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Industri Elektronik</span></span>
            
            <p class='mb-4'>Penggunaan graphene dalam industri elektronik telah menghasilkan perangkat yang lebih cepat, lebih ringan, dan lebih efisien. Graphene memiliki konduktivitas listrik yang sangat tinggi dan dapat digunakan dalam pembuatan transistor, sensor, dan baterai. Selain itu, graphene juga dapat digunakan dalam sensor yang sangat sensitif, memungkinkan deteksi yang lebih akurat dalam berbagai aplikasi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Industri Energi</span></span>
            
            <p class='mb-4'>Graphene juga menawarkan potensi luar biasa dalam industri energi. Material ini dapat digunakan dalam panel surya yang lebih efisien, baterai yang memiliki kapasitas penyimpanan yang lebih tinggi sehingga dapat meningkatkan efisiensi proses kimia.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Industri Material</span></span>
            
            <p class='mb-4'>Graphene telah menginspirasi inovasi dalam industri material. Dengan kekuatan yang sangat tinggi namun ringan, material ini digunakan dalam pembuatan komposit yang lebih kuat dan serat optik yang lebih baik.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-asset-management-system',
              'type' => 'article',
              'title' => 'Ravelware : Asset Management System',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-17.png',
              'tags' => 'industri 4.0',
              'date' => 'October 25, 2023',
              'content' => "
            
            <p class='mb-4'>Asset Management System adalah sebuah sistem yang dirancang untuk membantu organisasi dalam melacak, mengelola, dan memantau aset fisik atau non-fisik yang dimilikinya. Aset dalam konteks ini bisa mencakup berbagai jenis, seperti peralatan, properti, kendaraan, perangkat lunak, investasi, dan banyak lagi.</p>
            <p class='mb-4'>Tujuan utama dari sistem ini adalah untuk meningkatkan efisiensi dalam manajemen aset, mengoptimalkan penggunaan aset, memperpanjang umur pakai aset, dan mengurangi risiko kerugian atau kehilangan aset. Keamanan dan aksesibilitas juga harus diprioritaskan.</p>
            <p class='mb-4'>Dengan menerapkan sistem manajemen aset yang baik,  dapat meningkatkan efektivitas dan nilai jangka panjang dari aset perusahaan. Berikut 3 manfaat penerapan asset management system :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Optimasi Pemeliharaan</span></span>
            
            <p class='mb-4'>Manajemen aset yang efektif membantu mengoptimalkan jadwal pemeliharaan dan mengurangi biaya perawatan yang tidak perlu. Ini dapat membantu dalam memperpanjang umur pakai aset, menghindari pemeliharaan darurat yang mahal, dan memungkinkan perencanaan biaya yang lebih baik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Peningkatan Efisiensi</span></span>
            
            <p class='mb-4'>Dengan sistem manajemen aset yang terintegrasi, dapat meningkatkan efisiensi operasional dan mengurangi penundaan yang tidak perlu. Asset Management System membantu organisasi dalam mengelola sumber daya yang dimiliki dengan lebih baik, mengurangi biaya yang tidak perlu, dan meningkatkan produktivitas, yang pada akhirnya berkontribusi pada pertumbuhan dan profitabilitas.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemantauan dan Pelaporan Yang Akurat</span></span>
            
            <p class='mb-4'>Sistem yang baik memberikan kemampuan pemantauan dan pelaporan yang akurat, mendukung pengambilan keputusan yang lebih baik. Dengan pemantauan yang lebih akurat, perusahaan dapat menghindari kehilangan aset, mengidentifikasi aset yang tidak digunakan dengan optimal, dan meminimalkan waktu yang terbuang untuk mencari aset yang hilang.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'tpm-3-manfaat-oee-untuk-efektivitas-produksi',
              'type' => 'article',
              'title' => 'TPM : 3 Manfaat OEE Untuk Efektivitas Produksi',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-16.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'October 24, 2023',
              'content' => "
            
            <p class='mb-4'>OEE (Overall Equipment Effectiveness) adalah metrik yang digunakan dalam industri untuk mengukur sejauh mana efektivitas peralatan produksi digunakan dalam proses manufaktur. OEE memberikan wawasan tentang bagaimana peralatan digunakan secara keseluruhan dan membantu mengidentifikasi area di mana perbaikan bisa dilakukan.</p>
            <p class='mb-4'>OEE memberikan data tentang proses manufaktur anda. Perusahaan yang menggunakan OEE sebagai metrik menjadi sukses saat mengombinasikannya dengan program lean manufacture dan sebagai bagian dari sistem TPM (Total Productive Maintenance). </p>
            <p class='mb-4'>OEE memungkinkan perusahaan untuk melaksanakan fungsi bisnis yang berbeda secara bersamaan dengan satu metrik. Berikut 3 manfaat OEE untuk efektivitas produksi :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Identifikasi Potensi</span></span>
            
            <p class='mb-4'>OEE memungkinkan perusahaan untuk melihat bagaimana peralatan digunakan dalam produksi sehari-hari dan mengukur seberapa efektifnya. Metrik OEE terdiri dari tiga komponen utama yaitu availabilitas, kinerja, dan kualitas (persentase produk berkualitas dibandingkan dengan jumlah total produk).</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Optimasi Peralatan</span></span>
            
            <p class='mb-4'>Dengan memantau OEE, perusahaan dapat memahami dengan lebih baik bagaimana peralatan digunakan selama berbagai shift, hari, atau bahkan minggu. Hal ini memungkinkan perusahaan untuk merencanakan jadwal pemeliharaan preventif atau perbaikan yang lebih baik, sehingga mengurangi downtime yang tidak terduga.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Peningkatan Kualitas</span></span>
            
            <p class='mb-4'>Salah satu komponen OEE adalah kualitas produk yang dihasilkan. Dengan memonitor persentase produk berkualitas dibandingkan dengan total produk yang diproduksi, perusahaan dapat mengidentifikasi potensi masalah dalam proses produksi yang dapat mempengaruhi kualitas.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'terapkan-3-langkah-kaizen-ini-pada-lean-manufacturing',
              'type' => 'article',
              'title' => 'Terapkan 3 langkah Kaizen Ini Pada Lean Manufacturing',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-15.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'October 23, 2023',
              'content' => "
            
            <p class='mb-4'>Kaizen memberikan banyak manfaat bagi perusahaan maupun individu untuk melakukan peningnkatan performance seperti produktivitas maupun kualitas. Kaizen merupakan kata yang berasal dari bahasa Jepang yang dapat diartikan sebagai perubahan yang mengarah ke arah yang lebih baik.</p>
            <p class='mb-4'>Tujuan drai kaizen tersendiri adalah untuk meningkatkan efisiensi dengan cara menghilagkan berbagai macam pemborosan yang ada. Secara singkat dapat diartikan bahwa kaizen adalah sebuah metode perbaikan proses bisnis yang dilakukan secara tim yang dipimpin oleh kaizen leader dan di bantu oleh beberapa kaizen team. </p>
            <p class='mb-4'>Kaizen tentunya perlu diterapkan dalam sebuah lean manufacturing, berikut 3 langkah yang perlu dilakukan saat penerapan kaizen pada lean manufacturing :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Identifikasi Pemborosan</span></span>
            
            <p class='mb-4'>Langkah pertama dalam Kaizen adalah mengidentifikasi semua jenis pemborosan yang terjadi dalam proses produksi. Ini termasuk pemborosan waktu, tenaga kerja, bahan baku, pengangkutan, inventaris, dan lain-lain. Tim Kaizen harus bekerja bersama untuk mengidentifikasi daerah-daerah di mana pemborosan terjadi, baik melalui observasi langsung atau analisis data.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemetaan Aliran Nilai</span></span>
            
            <p class='mb-4'>Setelah mengidentifikasi pemborosan, langkah berikutnya adalah memetakan aliran nilai dari awal hingga akhir proses produksi. Ini melibatkan pemetaan setiap langkah dalam proses, mengidentifikasi waktu yang dihabiskan di setiap langkah, dan mengidentifikasi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengimplementasikan</span></span>
            
            <p class='mb-4'>Setelah mengidentifikasi pemborosan dan memetakan aliran nilai, langkah selanjutnya adalah mengembangkan solusi untuk menghilangkan pemborosan tersebut. Ini dapat melibatkan perubahan dalam metode kerja, layout pabrik, alat-alat produksi, atau bahkan perubahan dalam budaya kerja.kasi daerah di mana ada penumpukan atau antrian.</p>
            <p class='mb-4'>Kaizen bukanlah pendekatan yang hanya dilakukan satu kali, tetapi merupakan filosofi berkelanjutan. Setelah perubahan diterapkan, tim Kaizen harus terus memantau hasilnya, mengumpulkan umpan balik dari para pekerja, dan melanjutkan proses perbaikan berkelanjutan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-kelebihan-rfid-pada-asset-tracking-2',
              'type' => 'article',
              'title' => '3 Kelebihan RFID Pada Asset Tracking',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-14.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'October 20, 2023',
              'content' => "
            
            <p class='mb-4'>Perkembangan teknologi yang semakin pesat tentunya akan membawa dampak pada kehidupan manusia, teknologi tersebut hadir tentunya untuk mempermudah pekerjaan maupun kehidupan manusia.</p>
            <p class='mb-4'>RFID atau Radio Frequency Identification merupakan sebuah teknologi pengenalan otomatis yang memanfaatkan frekuensi gelombang radio. Dalam pengaplikasian RFID tracking asset membutuhkan dua komponen yaitu tags dan reader. </p>
            <p class='mb-4'>RFID tags adalah sebuah benda yang berperan sebagai tempat penyimpanan data. Sedangkan RFID reader adalah sebuah komponen elektronik yang bertugas mengenali tags melalui pancaran gelombang radio. </p>
            <p class='mb-4'>Kedua komponen tersebut kemudian dihubungkan pada sebuah sistem yang biasanya berupa komputer. Dari komputer tersebut maka akan didapatkan output berupa data pengenalan terhadap objek yang ingin diidentifikasi. Penggunaan RFID asset tracking tentunya dapat menghasilkan banyak manfaat seperti berikut :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Inventori Aktiva Tetap</span></span>
            
            <p class='mb-4'>Aktiva tetap dari sebuah perusahaan tentu saja akan membutuhkan inventori secara berkala. Dengan penerapan RFID teknologi pada kegiatan pelacakan aktiva tetap, maka proses akan dapat berjalan secara lebih efektif dan efisien.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Data Aset Lebih Baik</span></span>
            
            <p class='mb-4'>Dalam sebuah proses inventori, data kapan sebuah barang dibeli, kapan barang terakhir dilakukan perawatan dan data lainnya itu sangat penting. Dengan penerapan RFID aset maka semua masalah tersebut akan dapat diatasi dengan segera.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menggetahui Lokasi Aset</span></span>
            
            <p class='mb-4'>Seringkali aset yang dimiliki sebuah perusahaan tersebar luas ke berbagai cabang dan lokasi perusahaan. Dengan Tracking Asset, perusahaan bisa menggunakan komputer maupun handphone untuk melacak keberadaan setiap aset yang dimiliki perusahaan.</p>
            <p class='mb-4'>Tracking Asset memberikan kemudahan untuk melacak aset perusahaan, mengontrol aset tetap, dan menjaga akuntabilitas. Jika perusahaan tidak pernah melacak aset maka akan timbul kemungkinan perusahaan akan mengalami kerugian yang disebabkan karena penggunaan metode manual saat mencatat aset, terutama jika jumlah aset banyak dan tersebar dibeberapa kantor cabang.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-karakteristik-chipless-rfid',
              'type' => 'article',
              'title' => '3 Karakteristik Chipless RFID',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-13.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'October 19, 2023',
              'content' => "
            
            <p class='mb-4'>Chipless RFID (Radio-Frequency Identification) adalah teknologi RFID yang digunakan untuk mengidentifikasi maupun melacak objek tanpa menggunakan mikrochip atau komponen yang wajib terpasang yang biasanya ada pada tag RFID konvensional.</p>
            <p class='mb-4'>Sebaliknya, informasi identifikasi dikirimkan melalui sandi baik dalam bentuk pola atau struktur fisik tag itu sendiri, seperti antena ataupun material yang digunakan, sehingga tag tidak memerlukan chip semikonduktor pada penerapannya.</p>
            <p class='mb-4'>Chipless RFID menawarkan solusi yang ekonomis dan efisien serta paraktis digunakan untuk banyak aplikasi yang memerlukan pelacakan objek. Teknologi ini terus berkembang dan tentunya mendapatkan perhatian lebih banyak dalam berbagai industri karna kelebuhannya tersebut. Dari karakteristik yang sudah disebutkan,berikut penjelasan mengenai karakteristik chipless RFID yang perlu diketahui :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Tahan Lama</span></span>
            
            <p class='mb-4'>Tag chipless RFID cenderung lebih tahan lama karena tidak ada chip yang memerlukan daya baterai atau pemeliharaan. Chipless dapat bertahan selama umur material tag itu sendiri. Tag chipless dapat diberi perlindungan fisik tambahan seperti pelapis tahan air atau tahan cuaca. Hal ini dapat meningkatkan daya tahannya dalam kondisi lingkungan yang keras. Sehingga dapat digunakan dalam jangka waktu yang panjang.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Fleksibilitas</span></span>
            
            <p class='mb-4'>Chipless dapat dibuat dalam berbagai bentuk dan ukuran, membuatnya cocok untuk berbagai aplikasi. Tag chipless dapat ditempatkan di berbagai media dan permukaan, termasuk kertas, plastik, atau tekstil, tanpa risiko kerusakan komponen internal. Ini menjadikan chipless dapat digunakan dalam aplikasi seperti label, pakaian, dan kartu.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengaplikasian Luas</span></span>
            
            <p class='mb-4'>Chipless RFID cocok untuk berbagai aplikasi, termasuk pelacakan inventaris, manajemen rantai pasokan, logistik, pakaian cerdas, dan banyak lagi. Teknologi ini juga digunakan dalam aplikasi sensor berbasis RFID.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-smart-gate-system',
              'type' => 'article',
              'title' => 'Ravelware : Smart Gate System',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-12.png',
              'tags' => 'industri 4.0',
              'date' => 'October 18, 2023',
              'content' => "
            
            <p class='mb-4'>Smart Gate System merupakan sebuah sistem pintu masuk atau gerbang otomatis yang dilengkapi dengan teknologi cerdas untuk memfasilitasi proses kontrol akses, pengawasan, dan pengelolaan lalu lintas. </p>
            <p class='mb-4'>Baik orang maupun kendaraan yang masuk atau keluar dari suatu area tertentu. Sistem ini memiliki berbagai fitur yang meningkatkan keamanan, efisiensi serta kenyamanan dalam mengelola akses saat menuju lokasi ataupun fasilitas tertentu.</p>
            <p class='mb-4'>Smart Gate System dapat diaplikasikan dalam berbagai bentuk area, seperti gedung perkantoran, apartemen, fasilitas industri, bandara, atau tempat-tempat lain yang memerlukan kontrol akses yang canggih dan efisien. Sistem ini membantu meningkatkan keamanan dan efisiensi operasional serta mengurangi risiko akses yang tidak sah.</p>
            <p class='mb-4'>Berikut 3 keunggulan dari smart gate system :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Keamanan</span></span>
            
            <p class='mb-4'>Smart Gate System dilengkapi dengan teknologi pengenalan biometrik, kartu akses, atau kode PIN, yang memastikan bahwa hanya individu yang berwenang yang dapat mengakses area tertentu. Ini mengurangi risiko akses yang tidak sah atau intrusi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengawasan</span></span>
            
            <p class='mb-4'>Sistem ini memungkinkan pengawasan real-time terhadap orang atau kendaraan yang masuk atau keluar dari area tertentu. Data ini dapat digunakan untuk melacak waktu masuk dan keluar, serta untuk mengidentifikasi aktivitas yang mencurigakan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kemudahan</span></span>
            
            <p class='mb-4'>Untuk penggunaan smart gate dalam lingkungan logistik atau transportasi, sistem ini membantu dalam manajemen armada kendaraan dengan memberikan visibilitas dan kendali yang lebih baik atas kendaraan yang masuk dan keluar.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'rfid-3-strategi-maksimalkan-pengelolaan-aset',
              'type' => 'article',
              'title' => 'RFID : 3 Strategi Maksimalkan Pengelolaan Aset',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-11.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'October 17, 2023',
              'content' => "
            
            <p class='mb-4'>Sebuah perusahaan manufaktur biasnaya memiliki banyak sekali aset yang harus mereka kelola. Mulai dari peralatan produksi seperti mesin, peralatan kantor, inventaris maupun perawatan lainnya. Namun, hingga saat ini banyak sekali perusahaan yang mengelola asetnya secara manual.</p>
            <p class='mb-4'>Cara tersebut tentunya sangat memakan waktu dan tenaga, dengan demikian maka diperlukan sebuah metode untuk memaksimalkan sebuah pengelolaan aset agar aset yang dimiliki dapat terus bertahan lama dan berkembang sesuai dengan yang diharapkan. </p>
            <p class='mb-4'>RFID adalah teknologi yang memungkinkan pengidentifikasian objek melalui gelombang radio, yang dapat digunakan untuk memantau dan melacak aset dengan lebih efisien. Berikut 3 strategi memaksimalkan pengelolaan aset :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penjadwalan Maintenance</span></span>
            
            <p class='mb-4'>Integrasi sistem RFID dengan sistem manajemen perawatan (CMMS) memungkinkan perencanaan jadwal maintenance secara otomatis berdasarkan data dari tag RFID. Jika aset mendekati waktu perawatan, sistem akan menghasilkan pemberitahuan atau pekerjaan maintenance yang diperlukan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pencatatan Aset</span></span>
            
            <p class='mb-4'>Pencatatan aset penting untuk meminimalkan resiko kerusakan tak terduga dan untuk memperpanjang umur aset. Dengan memeriksa dan memelihara aset secara teratur maka potensi masalah dapat dengan mudah diidentifikasi dan diatasi sebelum menyebabkan perbaikan atau waktu henti yang lebih mahal.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penyusutan Aset</span></span>
            
            <p class='mb-4'>Data yang terkumpul dari tag RFID, seperti biaya perolehan, masa manfaat, dan nilai residu, untuk menghitung jumlah penyusutan aset dalam periode tertentu. Integrasi sistem RFID dengan sistem akuntansi memungkinkan pencatatan penyusutan secara otomatis berdasarkan data yang dikumpulkan dari tag RFID. </p>
            <p class='mb-4'>Penerapan strategi di atas harus disesuaikan dengan kebutuhan dan lingkungan kerja perusahaan. RFID dapat memberikan manfaat yang signifikan dalam pengelolaan aset, meningkatkan visibilitas, efisiensi, dan akurasi data.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-pillar-penting-tpm-untuk-industri',
              'type' => 'article',
              'title' => '3 Pillar Penting TPM Untuk Industri',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-10.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'October 16, 2023',
              'content' => "
            
            <p class='mb-4'>Total Productive Maintenance (TPM) adalah pendekatan manajemen yang bertujuan untuk menjaga dan meningkatkan efisiensi, kualitas, dan kinerja peralatan produksi dalam suatu industri. </p>
            <p class='mb-4'>Pendekatan ini melibatkan seluruh tim kerja dari berbagai tingkatan dalam upaya untuk mengurangi downtime, meningkatkan produktivitas, dan menghilangkan pemborosan dalam proses produksi.</p>
            <p class='mb-4'>TPM mengusung filosofi bahwa peralatan yang optimal dan kinerja yang baik adalah kunci untuk mencapai produksi yang berkualitas tinggi dan biaya yang efisien. Pendekatan ini melibatkan perawatan dan perbaikan terus-menerus dari peralatan, melibatkan semua anggota tim produksi, termasuk operator, teknisi dan manager.</p>
            <p class='mb-4'>Dalam penerapannya TPM memiliki pilar yang berfungsi sebagai pendukung keberhasilan TPM, berikut 3 pillar penting dari TPM yang perlu diimplementasikan pada industri :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pilar Perawatan Perbaikan Sendiri (Jishu Hozen)</span></span>
            
            <p class='mb-4'>Pilar ini melibatkan para operator atau pekerja dalam perawatan dan perbaikan rutin peralatan mereka sendiri. Para pekerja dilibatkan dalam merawat, membersihkan, dan memeriksa peralatan secara teratur. Tujuannya adalah untuk mengidentifikasi masalah awal sebelum mereka berkembang menjadi kerusakan yang lebih serius, sehingga dapat mencegah downtime yang tidak terduga.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pilar Perawatan Pemeliharaan Terencana (Planned Maintenance)</span></span>
            
            <p class='mb-4'>Pilar ini berfokus pada jadwal pemeliharaan preventif yang terencana untuk peralatan. Dengan merencanakan dan menjadwalkan pemeliharaan secara teratur, perusahaan dapat menghindari downtime yang tidak terduga dan memperpanjang umur peralatan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pilar Peningkatan Perawatan (Kobetsu Kaizen)</span></span>
            
            <p class='mb-4'>Pilar ini melibatkan analisis mendalam tentang penyebab akar masalah peralatan dan implementasi perbaikan jangka panjang. Ini melibatkan penerapan metode analisis seperti analisis sebab-akibat (root cause analysis) untuk mengidentifikasi dan mengatasi masalah yang mungkin menyebabkan peralatan sering mengalami gangguan atau kinerja buruk.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'big-data-business-intelligent-untuk-bisnis-akurat-2',
              'type' => 'article',
              'title' => 'Big Data : Business Intelligent Untuk Bisnis Akurat',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-9.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'October 13, 2023',
              'content' => "
            
            <p class='mb-4'>Berbagai jenis teknologi dimanfaatkan untuk terus berkembang dalam mencapai tujuan bisnis. Salah satu yang sering sekali diperbincangkan saat ini adalah Business Intelligence atau BI. </p>
            <p class='mb-4'>Teknologi satu ini juga sudah banyak diadaptasi di berbagai bisnis Indonesia tentunya dalam bidnag bisnis maupun pada bidang lainnya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengertian Business Intelligent</span></span>
            
            <p class='mb-4'>Business intelligence adalah seperangkat alat analisis berupa informasi bisnis yang digunakan untuk mengkonsolidasi, menganalisis, menyimpan dan mengakses banyak data dalam konteks proses bisnis yang mengarah pada pembuatan keputusan dan tindakan dengan tujuan peningkatan kinerja usaha atau bisnis.</p>
            <p class='mb-4'>Fungsi business intelligence adalah sebagai sistem pendukung keputusan dimana sistem dan aplikasi ini mengubah data data dalam organisasi berupa data operasional, data transaksi, maupun data lainnya kedalam bentuk pengetahuan dengan tujuan secara umum yaitu menyajikan berbagai informasi yang disesuaikan dengan kebutuhan setiap penggunanya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Untuk Bisnis Akurat</span></span>
            
            <p class='mb-4'>Dalam penerapannya BI sendiri dapat dipengaruhi oleh beberapa factor yang berfungsi untuk mengambil keputusan bisnis, karena sering kali keputusan tersebut diambil berdasarkan data yang kurang akurat maupun kurang lengkap sehingga menghasilkan keputusan yang kurang tepat.</p>
            <p class='mb-4'>Keputusan tersebut akhirnya memberikan dampak negatif pada bisnis yang dijalankan, dengan hadirnya BI maka diharapkan dapat menciptakan keputusan yang lebih akurat untuk hasil yang lebih baik.</p>
            <p class='mb-4'>Untuk membuat hasil yang akurat dibutuhkan juga analisa yang tepat sesuai yang dibutuhkan. Maka memerlukan orang yang cukup berpengalaman untuk mengoperasikan software dan tools platform BI. </p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Manfaat Business Intelligent</span></span>
            
            <p class='mb-4'>BI tentunya dapat membantu berbagai divisi pada sebuah perusahaan seperti tim produksi, marketing dan lain sebagainya. Dengan demikian dapat dikatakan bahwa BI bisa menjadi nilai utama yang bermanfaat dalam segala jenis bisnis yang dijalankan.</p>
            <p class='mb-4'>Dengan membangun business intelligence, maka seluruh data dan informasi dapat dengan mudah diintegrasikan sehingga menghasilkan sebuah kesimpulan yang mudah di akses dan dimengerti sehingga dapat membantu pihak manajemen untuk membuat pengambilan keputusan yang lebih baik. </p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-fungsi-utama-penggunaan-graphene',
              'type' => 'article',
              'title' => '3 Fungsi Utama Penggunaan Graphene',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-8.png',
              'tags' => 'Graphene,industri 4.0',
              'date' => 'October 12, 2023',
              'content' => "
            
            <p class='mb-4'>Graphene merupakan sebuah jenis karbon yang terdiri dari lapisan atom karbon tunggal yang tersusun dalam struktur heksagonal yang bentuknya mirip dengan sarang lebah. </p>
            <p class='mb-4'>Graphene ialah bahan yang sangat tipis, hanya terdiri dari satu lapisan atom, sehingga merupakan materi dua dimensi. Graphene adalah satu lapisan tipis karbon yang memiliki sejumlah sifat fisik dan kimia yang sangat istimewa.</p>
            <p class='mb-4'>Sebagai salah satu material paling menarik dalam ilmu material modern, graphene telah menarik perhatian besar dalam penelitian dan pengembangan, dan terdapat upaya besar untuk menggali potensi penuhnya dalam berbagai aplikasi teknologi. Karena bermacam keunggulan yang didapatkan saat menggunakan graphene tersebut.</p>
            <p class='mb-4'>Berikut 3 fungsi utama penggunaan graphene :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Konduktor yang sangat baik</span></span>
            
            <p class='mb-4'>Dikatakan demikian karena graphene merupakan konduktor listrik yang sangat baik. Dalam bentuk lapisan tipis, ia dapat digunakan dalam berbagai perangkat elektronik. Beberapa aplikasinya termasuk transistor supercepat, komponen dalam perangkat sel surya, dan pengganti material semikonduktor dalam perangkat elektronik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menahan Tekanan</span></span>
            
            <p class='mb-4'>Graphene adalah salah satu material yang paling kuat yang ditemukan manusia, bahkan lebih kuat dari baja. Meskipun sangat tipis, ia sangat tahan terhadap tekanan dan peregangan. Ini membuatnya sangat berguna dalam pengembangan material yang lebih ringan dan kuat, seperti komposit dan struktur aerospace, serta pelindung tubuh, dan bahkan sebagai perangkat penguat mekanis dalam berbagai aplikasi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penyimpanan Energi</span></span>
            
            <p class='mb-4'>Graphene digunakan dalam bidang penyimpanan energi, terutama dalam pengembangan baterai dan superkapasitor. Dengan luas permukaannya yang besar dan kemampuannya untuk menghantarkan listrik dengan baik, graphene dapat meningkatkan kapasitas penyimpanan energi dalam baterai dan superkapasitor.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-truck-management-system',
              'type' => 'article',
              'title' => 'Ravelware : Truck Management System',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-7.png',
              'tags' => 'industri 4.0',
              'date' => 'October 11, 2023',
              'content' => "
            
            <p class='mb-4'>Truck Management System atau TMS adalah sebuah perangkat lunak atau sistem yang digunakan untuk mengelola operasi dan aktivitas terkait dengan armada truk dalam sebuah bisnis atau organisasi.</p>
            <p class='mb-4'>Sistem ini dirancang untuk membantu pemilik truk atau manajer armada dalam mengoptimalkan penggunaan truk, memantau kinerja truk, mengatur pemeliharaan, dan mengelola operasi logistik secara efisien.</p>
            <p class='mb-4'>Tujuan akhir dari sistem manajemen truk adalah mencapai efisiensi, keamanan, dan kualitas layanan yang lebih baik dalam operasi armada truk. Ini dapat membantu bisnis atau organisasi mengurangi biaya operasional, meningkatkan produktivitas, dan meningkatkan keuntungan. Berikut beberapa fitur umum yang biasanya ada dalam truck management system :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Integrasi</span></span>
            
            <p class='mb-4'>TMS ini sering kali diintegrasikan dengan sistem lain dalam perusahaan, seperti sistem manajemen inventaris atau sistem manajemen pesanan, untuk meningkatkan efisiensi operasi secara keseluruhan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemantauan</span></span>
            
            <p class='mb-4'>Sistem ini dapat memberikan data tentang kinerja truk, seperti konsumsi bahan bakar, kecepatan rata-rata, dan efisiensi perjalanan. Hal ini membantu dalam mengidentifikasi area di mana perbaikan dapat dilakukan. Tujuan sistem ini adalah untuk memberikan visibilitas yang lebih baik terhadap kinerja truk. Ini termasuk pemantauan konsumsi bahan bakar, penggunaan rem, kecepatan rata-rata, dan lain-lain.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Layanan</span></span>
            
            <p class='mb-4'>Dapat memberikan laporan dan analisis data yang membantu manajemen dalam mengambil keputusan yang lebih baik dan merencanakan strategi yang lebih efektif. Dengan laporan tersebut kemudaian dapat diolah untuk mengambil keputusan guna memberikan layanan yang lebih baik kepada pelanggan, termasuk estimasi waktu kedatangan yang lebih akurat.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ketahui-3-kelebihan-just-in-time-manufacturing',
              'type' => 'article',
              'title' => 'Ketahui 3 Kelebihan Just in Time Manufacturing',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-6.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'October 10, 2023',
              'content' => "
            
            <p class='mb-4'>Just in Time adalah suatu konsep dalam manajemen operasi dan manufaktur yang bertujuan untuk mengoptimalkan proses produksi dan persediaan dengan mengurangi waktu tunggu dan pemborosan dalam rantai pasokan. Tujuan utama dari konsep JIT adalah untuk menghasilkan produk atau memberikan layanan tepat pada waktunya, hanya dalam jumlah yang diperlukan, dan dengan biaya yang paling efisien.</p>
            <p class='mb-4'>Just in time manufacturing bertujuan untuk perusahaan dalam melakukan efisiensi proses kegiatan produksi dan mendukung perusahaan untuk membentuk rantai pasokan yang efisien sehingga proses produksi dapat berjalan maksimal.</p>
            <p class='mb-4'>Kelebihan dari just in time manufacturing adalah meningkatkan efisiensi operasional, meningkatkan kualitas yang lebih tinggi dan memberikan respon yang cepat pada sebuah perubahan. Berikut penjelasannya :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi Operasional</span></span>
            
            <p class='mb-4'>JIT manufacturing berfokus pada produksi hanya pada saat dibutuhkan dan dalam jumlah yang diperlukan. Hal ini menghindari pemborosan yang terjadi akibat produksi berlebihan atau persediaan yang berlebihan. Dengan mengurangi persediaan, perusahaan dapat menghemat biaya penyimpanan, perawatan, dan manajemen inventaris. Selain itu, pengurangan waktu tunggu antar langkah produksi dan set-up yang lebih cepat meningkatkan efisiensi keseluruhan proses produksi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kualitas yang Lebih Tinggi</span></span>
            
            <p class='mb-4'>Mendorong identifikasi dan penanganan penyebab cacat pada awalnya. Fokus pada kualitas dan eliminasi penyebab masalah membantu mengurangi tingkat cacat dan produk yang tidak sesuai standar. Dengan memastikan kualitas yang lebih tinggi dari tahap awal, perusahaan dapat menghindari pemborosan yang disebabkan oleh produksi barang cacat atau produk yang harus diperbaiki.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Responsif terhadap Perubahan</span></span>
            
            <p class='mb-4'>Memberikan kemungkinan kepada perusahaan untuk lebih responsif terhadap perubahan dalam permintaan pasar. Dengan menghasilkan produk hanya pada saat ada permintaan aktual, perusahaan dapat dengan cepat menyesuaikan produksi sesuai dengan perubahan permintaan atau tren pasar. Ini membantu menghindari risiko akumulasi stok yang tidak terjual dan memungkinkan perusahaan untuk lebih adaptif terhadap lingkungan bisnis yang dinamis.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-peran-rfid-supply-chain-pada-manufaktur',
              'type' => 'article',
              'title' => '3 Peran RFID Supply Chain Pada Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-5.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'October 9, 2023',
              'content' => "
            
            <p class='mb-4'>Manajemen rantai pasok sudah menjadi bagian penting dalam sebuah perusahaan, bahkan menjadi sebuah strategi dalam membangun keunggulan yang sifatnya kompetitif. Jika bicara tentang supply chain maka akan berhubungan erat dengan logistik, logistik diperlukan untuk melakukan pemindahan posisi material atau barang.</p>
            <p class='mb-4'>Maka dapat dikatakan bahwa pada supply chain memiliki banyak sekali proses mulai dari persiapan sampai dengan proses pemenuhan kebutuhan konsumen. Penerapan teknologi RFID (Radio Frequency Identification) dalam rantai pasokan atau supply chain telah menjadi tren yang semakin populer dan terbukti efektif.</p>
            <p class='mb-4'>RFID dapat menghadirkan banyak manfaat bagi perusahaan dalam berbagai aspek rantai pasokan. Berikut 3 peranan penting RFID supply chain pada manufaktur yang perlu diketahui :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Produksi</span></span>
            
            <p class='mb-4'>RFID memungkinkan pemantauan persediaan yang lebih akurat dan otomatis. Ketika bahan baku atau produk semi-jadi berpindah dari satu tahap produksi ke tahap berikutnya, pembaca RFID dapat mencatat perpindahan tersebut secara real-time. Hal ini membantu menghindari kesalahan inventori dan meningkatkan efisiensi manajemen persediaan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Perencanaan</span></span>
            
            <p class='mb-4'>RFID membantu dalam merencanakan produksi dengan lebih efisien. Dengan memantau persediaan bahan baku dan produk semi-jadi secara real-time, perusahaan dapat membuat rencana produksi yang tepat, menghindari kekurangan stok atau overproduksi, dan memastikan aliran produksi yang lancar.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengelolaan Gudang</span></span>
            
            <p class='mb-4'>Dengan data persediaan yang akurat, perusahaan dapat merencanakan dan mengoptimalkan penggunaan ruang gudang dengan lebih efisien. Informasi tentang lokasi dan jumlah barang dalam gudang membantu dalam menentukan tata letak yang optimal dan menghindari kemacetan ruang penyimpanan.</p>
            <p class='mb-4'>Penerapan RFID dalam rantai pasokan, perusahaan dapat mencapai peningkatan efisiensi, transparansi, dan kontrol atas seluruh proses. Hal ini membantu meningkatkan kepuasan pelanggan, mengurangi biaya, dan memperkuat posisi perusahaan dalam pasar yang kompetitif.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-training-demo-alat-peraga-lean-monozukuri-di-pidi-4-0',
              'type' => 'news',
              'title' => 'Training Demo Alat Peraga Lean Monozukuri Dengan PIDI 4.0',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-4.png',
              'tags' => 'industri 4.0',
              'date' => 'October 6, 2023',
              'content' => "
            
            <p class='mb-4'>Kamis, 07 September 2023, bertempat di gedung Pusat Inovasi Digital Industri 4.0 (PIDI 4.0), PT Ravelware Technology Indonesia yang diwakili oleh CEO Randy Budi Wicaksono turut memfasilitasi training demo alat peraga Lean Monozukuri untuk hasilkan SDM kompeten Industri 4.0 bagi para praktisi industri manufaktur.</p>
            <p class='mb-4'>Lean Monozukuri merupakan sistem tata kelola proses produksi dan manufaktur untuk mencapai efisiensi biaya operasional dan meningkatkan kinerja dan daya saing pabrik-pabrik lokal yang menjadi mitra supply-chain di ekosistem suplier manufaktur Jepang. Konsep ini menjadi salah satu agenda utama dalam program kerjasama Kementrian Ekonomi, Perdagangan dan Industri (METI) Jepang, dan Kementrian Perindustrian RI mewujudkan Indonesia 4.0. Dalam hal ini Ravelware dipercaya sebagai satu-satunya ‘local tech partner’ untuk technology applicator di pabrik-pabrik yang menjadi target standarisasi.</p>
            <p class='mb-4'>Kepercayaan sebagai local tech partner ini merupakan hasil perjalanan panjang dari komitmen, konsistensi, dan disiplin Ravelware dalam pengembangan dan penerapan Intelligent Manufacture System (IMS) di supply-chain grup Toyota, serta expertise Ravelware menguasai solusi perbaikan lini produksi berbasis Toyota Production System (TPS) dan Total Productive Maintenance (TPM).</p>
            <p class='mb-4'>Mari bersama Ravelware kita wujudkan Indonesia 4.0 dengan kemandirian dan ketahanan teknologi buatan lokal yang mumpuni.</p>
            <p class='mb-4'>#RavelwareTech #automation #IoT #deeptech  #LeanMonozukuri #industry40 #Indonesia40 #techindonesiagoesinternational</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'chipless-rfid-3-keunggulan-chipless-rfid',
              'type' => 'article',
              'title' => '3 Keunggulan Chipless RFID',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-3.png',
              'tags' => 'industri 4.0',
              'date' => 'October 5, 2023',
              'content' => "
            
            <p class='mb-4'>Chipless RFID adalah jenis RFID yang tidak menggunakan mikrochip atau komponen elektronik yang canggih dalam tagnya untuk menyimpan data atau informasi. Sebaliknya, chipless RFID mengandalkan penggunaan struktur fisik atau karakteristik material yang unik dalam tag untuk menghasilkan pola sinyal radio yang dapat diidentifikasi dan dibaca oleh pembaca RFID.</p>
            <p class='mb-4'>Keuntungan utama dari teknologi Chipless RFID adalah biaya produksi yang lebih rendah karena tidak memerlukan komponen elektronik seperti mikrochip. Selain itu, Chipless RFID juga dapat digunakan dalam berbagai aplikasi, termasuk pelacakan inventaris, otomatisasi proses manufaktur, pengukuran tingkat cairan dalam tangki, dan banyak lagi.</p>
            <p class='mb-4'>Berikut 3 keunggulan Chipless RFID :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Ukuran yang Lebih Kecil</span></span>
            
            <p class='mb-4'>Karena tidak ada mikrochip yang perlu disertakan dalam tag, Chipless RFID dapat dirancang dalam ukuran yang lebih kecil dan lebih tipis. Ini membuatnya cocok untuk aplikasi di mana ruang terbatas atau estetika yang lebih baik diperlukan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Ramah Lingkungan</span></span>
            
            <p class='mb-4'>Chipless RFID, karena tidak mengandung komponen elektronik yang rumit, memiliki dampak lingkungan yang lebih rendah selama siklus hidupnya. Ini mencakup penghematan energi selama produksi dan penggunaan, serta pengurangan limbah elektronik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Lebih Handal</span></span>
            
            <p class='mb-4'>Karena tidak ada komponen elektronik yang rentan terhadap kerusakan atau gangguan, Chipless RFID seringkali lebih tahan lama dan memiliki tingkat keandalan yang lebih tinggi dalam lingkungan yang keras atau terpapar kondisi cuaca ekstrem.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-smart-building-system',
              'type' => 'article',
              'title' => 'Ravelware : Smart Building System',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-2.png',
              'tags' => 'industri 4.0',
              'date' => 'October 4, 2023',
              'content' => "
            
            <p class='mb-4'>Smart Building System (SBS)  adalah infrastruktur teknologi yang terintegrasi dalam sebuah bangunan untuk mengotomatisasi, mengendalikan, dan mengelola berbagai sistem. Tujuannya adalah untuk meningkatkan efisiensi operasional, kenyamanan penghuni, dan keamanan bangunan sambil mengurangi konsumsi energi.</p>
            <p class='mb-4'>Prinsip kerja smart building ini adalah integrasi berbagai komponen pada bangunan. Dari komponen yang diinstal ini selain dapat diatur secara otomatis juga terjalin komunikasi antar komponen. Secara umum metode yang digunakan untuk bangunan pintar adalah dengan menggunakan sensor.</p>
            <p class='mb-4'>Smart building system memiliki banyak sekali manfaat, termasuk penghematan energi, pengurangan biaya operasional, peningkatan kenyamanan penghuni, dan pengurangan dampak lingkungan. Ini menjadi semakin populer dalam pengembangan bangunan komersial dan residensial modern.</p>
            <p class='mb-4'>Berikut beberapa keunggulan dari penerapan smart building system :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Manajemen yang baik</span></span>
            
            <p class='mb-4'>Sistem ini mengintegrasikan kontrol akses dengan teknologi seperti pemindaian sidik jari atau kartu pintar. Hal ini memastikan bahwa hanya orang yang berwenang yang dapat mengakses bangunan atau area tertentu.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kenyamanan penghuni</span></span>
            
            <p class='mb-4'>Smart Building System memungkinkan pengaturan yang lebih baik terkait suhu, pencahayaan, dan kualitas udara dalam ruangan. Ini meningkatkan kenyamanan dan produktivitas penghuni.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengurangan biaya</span></span>
            
            <p class='mb-4'>Dengan mengoptimalkan penggunaan energi, mengurangi biaya pemeliharaan, dan meminimalkan kerugian yang disebabkan oleh kesalahan manusia, Smart Building System dapat mengurangi biaya operasional secara keseluruhan.</p>
            <p class='mb-4'>Dengan mengoptimalkan penggunaan energi, mengurangi biaya pemeliharaan, dan meminimalkan kerugian yang disebabkan oleh kesalahan manusia, Smart Building System dapat mengurangi biaya operasional secara keseluruhan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'iot-penting-pada-manufaktur-ini-jawabannya',
              'type' => 'article',
              'title' => 'IoT Penting Pada Manufaktur? Ini Jawabannya',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image-1.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'October 3, 2023',
              'content' => "
            
            <p class='mb-4'>Internet of Things (IoT) adalah konsep teknologi yang merujuk pada jaringan perangkat fisik yang saling terhubung dan dapat berkomunikasi melalui internet. Dalam konteks IoT, perangkat tersebut dapat mencakup segala hal mulai dari perangkat elektronik kecil seperti sensor, perangkat rumah tangga cerdas, kendaraan yang terhubung, hingga peralatan industri dan infrastruktur yang besar.</p>
            <p class='mb-4'>Sederhananya, dengan IoT, manusia tidak perlu mengontrol benda/perangkat IoT secara langsung, tetapi cukup dari jarak jauh baik melalui berbagai perangkat. Tujuan utama dari IoT adalah memungkinkan berbagai perangkat untuk berbagi data dan informasi, serta berinteraksi secara otomatis tanpa intervensi manusia.</p>
            <p class='mb-4'>Dengan tujuan tersebut tentunya IoT dapat memberikan banyak manfaat ungtuk manufaktur, seperti berikut :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Inovasi Produk</span></span>
            
            <p class='mb-4'>Meningkatkan inovasi produk menggunakan Internet of Things (IoT) adalah salah satu cara terdepan di mana perusahaan dapat memanfaatkan teknologi untuk menghasilkan produk yang lebih canggih, bermanfaat, dan sesuai dengan kebutuhan pasar.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Supply Chain Management</span></span>
            
            <p class='mb-4'>SCM cerdas dengan Internet of Things (IoT) merujuk pada penerapan teknologi sensor dan konektivitas untuk menciptakan rantai pasok yang lebih efisien, responsif, dan berbasis data. Dalam pendekatan ini, berbagai jenis sensor dan perangkat terhubung digunakan untuk mengumpulkan data dalam seluruh rantai pasok, yang kemudian dianalisis untuk mengambil keputusan yang lebih baik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pabrik Masa Depan</span></span>
            
            <p class='mb-4'>Pabrik masa depan yang diintegrasikan dengan Internet of Things (IoT) adalah konsep yang menjanjikan transformasi besar dalam industri manufaktur. Ini melibatkan penerapan teknologi sensor, konektivitas, dan analisis data untuk menciptakan lingkungan produksi yang lebih efisien, responsif, dan adaptif.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-pemanfaatan-big-data-pada-manufaktur',
              'type' => 'article',
              'title' => '3 Pemanfaatan Big Data Pada Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/10/image.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'October 2, 2023',
              'content' => "
            
            <p class='mb-4'>Big data manufaktur mengacu pada penggunaan dan penerapan teknologi analisis data besar dan kompleks dalam konteks industri manufaktur. Dalam sistem ini melibatkan pengumpulan, penyimpanan, pengolahan serta analisis data yang dihasilkan oleh berbagai perangkat maupun sensor yang ada dalam sistem maupun lingkungan manufaktur tersebut. </p>
            <p class='mb-4'>Tujuannya adalah untuk mendapatkan wawasan yang lebih dalam, meningkatkan efisiensi, mengoptimalkan proses produksi, dan merencanakan perawatan peralatan dengan lebih baik.</p>
            <p class='mb-4'>Big Data ini dapat dianalisa untuk memberikan insight atau gambaran yang mengarah pada keputusan yang lebih baik dan menentukan langkah strategis dalam bisnis. Berikut pemanfaatan big data pada manufaktur :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Optimisasi Produksi</span></span>
            
            <p class='mb-4'>Optimisasi produksi dengan big data mengacu pada penerapan teknologi analisis data besar dan kompleks untuk meningkatkan efisiensi, kualitas, dan produktivitas dalam proses produksi. Dengan menganalisis data yang dihasilkan oleh berbagai sistem dan perangkat di lantai pabrik, perusahaan dapat mengidentifikasi peluang untuk meningkatkan proses produksi, mengurangi biaya, dan merespons perubahan pasar dengan lebih baik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Quality Assurance</span></span>
            
            <p class='mb-4'>Quality Assurance (QA) atau jaminan kualitas adalah suatu pendekatan yang digunakan untuk memastikan bahwa produk atau layanan memenuhi standar kualitas yang ditetapkan sebelum diserahkan kepada pelanggan. Penerapan konsep big data dalam Quality Assurance dapat membantu perusahaan untuk meningkatkan pemantauan dan pengawasan kualitas produk, mengidentifikasi penyebab akar cacat atau kecacatan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Supply Chain Management</span></span>
            
            <p class='mb-4'>Supply Chain Management (SCM) dengan big data merujuk pada penggunaan teknologi analisis data besar dan kompleks untuk meningkatkan efisiensi, visibilitas, dan responsifitas dalam manajemen rantai pasok. Dengan menganalisis data yang dihasilkan dari berbagai tahap rantai pasok, perusahaan dapat memahami secara lebih mendalam bagaimana aliran bahan baku, produk jadi, dan informasi bekerja, serta mengambil keputusan yang lebih cerdas dan efektif.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-penandatanganan-nota-kesepahaman-dengan-awina',
              'type' => 'news',
              'title' => 'Penandatanganan Nota Kesepahaman Dengan Awina',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-22.png',
              'tags' => '#automation,#Awina,#deeptech,#graphene,#RavelwareTech,#techindonesiagoesinternational,IoT',
              'date' => 'September 29, 2023',
              'content' => "
            
            <p class='mb-4'>Senin, 25 September 2023, Ravelware Technology kembali mendapatkan kesempatan yang terhormat untuk dipercaya menjalin kerjasama strategis di bidang teknologi terapan Industry 4.0 dengan perusahaan global.</p>
            <p class='mb-4'>Penandatanganan Nota Kesepahaman (MoU) antara PT. Awina Sinergi International (AWINA) dan PT Ravelware Technology Indonesia yang dilakukan oleh Bpk. Ananda Setiyo Ivananto, Presiden Direktur AWINA dan Randy Wicaksono, CEO Ravelware. </p>
            <p class='mb-4'>Indonesia menduduki peringkat kedua setelah China sebagai penghasil sampah plastik terbesar di dunia. Indonesia kurang lebih menghasilkan 6,8 ton sampah plastik pertahun, dan hanya 10% yang berakhir di pusat daur ulang.MoU ini terkait pengembangan pengolahan sampah plastik untuk produksi nano super-material Graphene, serta aktifitas pemasaran produk Graphene Ravelware hasil olahan sampah plastik di jejaring dan ekosistem bisnis AWINA.</p>
            <p class='mb-4'>Penandatanganan ini turut disaksikan oleh Mr. Takahita Ono, CEO A-WING International Co., Ltd., (A-WING Group, Japan) dan Mr. Osamu Uchida, Senior Engineer AWINA.</p>
            <p class='mb-4'>AWINA (www.awina.co.id) merupakan bagian A-WING Group, perusahaan Jepang yang berpusat di Kurume City, Fukuoka yang secara konsisten fokus pada pengembangan teknologi biomass dan energi terbarukan. Di Indonesia A-WING Group telah memulai bisnis nya sejak 2013 dengan terlibat aktif dalam instalasi teknologi turbin angin, solar panel, manajemen sampah organik untuk menghasilkan pupuk organik dan unsur hara berkelanjutan, serta layanan healthcare.</p>
            <p class='mb-4'>Dalam kesempatan MoU ini, AWINA juga secara eksplisit memperluas lingkup partnership yang akan dijalankan bersama Ravelware dengan tidak terbatas pada produk Graphene namun termasuk kapabilitas produk deep-tech Ravelware untuk sistem monitoring penggunaan energi secara efektif, termasuk diantaranya optimalisasi pengukuran emisi karbon.</p>
            <p class='mb-4'>Capaian ini merupakan kado manis di penghujung September 2023, dimana komitmen, konsistensi, dan disiplin Ravelware dalam riset dan pengembangan deep-tech untuk Industry 4.0 dan green-tech yang berkualitas dengan berbasis solusi praktis untuk kebutuhan end-user, kembali mendapatkan pengakuan stakeholder. Terima kasih sekali lagi, dan mari kita bersama-sama wujudkan kemandirian teknologi dan digitalisasi Indonesia yang mumpuni.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-warehouse-management-system',
              'type' => 'article',
              'title' => 'Ravelware : Warehouse Management System',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-21.png',
              'tags' => 'industri 4.0',
              'date' => 'September 27, 2023',
              'content' => "
            
            <p class='mb-4'>Warehouse Management System (WMS) adalah perangkat lunak atau sistem yang digunakan untuk mengelola dan mengoptimalkan operasi penyimpanan dan distribusi dalam gudang atau pusat distribusi. Tujuan utama dari WMS adalah meningkatkan efisiensi, akurasi, dan produktivitas dalam mengelola inventaris dan pengiriman barang.</p>
            <p class='mb-4'>Warehouse Management System adalah alat penting dalam rantai pasokan modern, terutama bagi perusahaan yang memiliki banyak barang yang harus disimpan, diatur, dan dipenuhi dengan efisien.</p>
            <p class='mb-4'>Ini membantu meningkatkan akurasi dalam perhitungan inventaris, mengurangi biaya operasional serta dapat meningkatkan kepuasan pelanggan dengan menyediakan barang yang tepat pada waktu yang ditentukan. Berikut 3 kelebihan yang didapatkan dari warehouse management system :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Akurasi</span></span>
            
            <p class='mb-4'>Sistem WMS menyediakan pelacakan inventaris yang real-time dan akurat. Hal ini membantu menghindari kehilangan barang, kekurangan stok, atau kelebihan stok yang dapat mengakibatkan biaya tambahan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Optimasi</span></span>
            
            <p class='mb-4'>Sistem ini dapat membantu mengoptimalkan penggunaan ruang di dalam gudang. Ini mencakup pengaturan yang efisien untuk barang-barang yang berbeda dan memastikan bahwa barang yang paling sering dipesan mudah diakses.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Biaya</span></span>
            
            <p class='mb-4'>Dengan mengurangi kehilangan stok, meningkatkan efisiensi operasional, dan menghindari biaya penyimpanan berlebih, WMS dapat menghasilkan penghematan biaya yang signifikan dalam operasi gudang.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Produktivitas</span></span>
            
            <p class='mb-4'>Dengan memberikan panduan kepada pekerja gudang tentang tugas-tugas apa yang harus dilakukan dan di mana, WMS membantu meningkatkan produktivitas tenaga kerja. Ini juga mengurangi waktu yang dihabiskan untuk mencari barang.</p>
            <p class='mb-4'>Secara keseluruhan, Warehouse Management System membantu meningkatkan efisiensi, mengurangi biaya, dan meningkatkan pengelolaan gudang secara keseluruhan. Hal ini sangat penting dalam lingkungan bisnis yang kompetitif dan dalam memenuhi harapan pelanggan yang semakin tinggi.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'kaizen-3-langkah-penting-penerapan-tqm',
              'type' => 'article',
              'title' => 'Kaizen : 3 Langkah Penting Penerapan TQM',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-20.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'September 26, 2023',
              'content' => "
            
            <p class='mb-4'>TQM (Total Quality Management) adalah suatu pendekatan manajemen yang bertujuan untuk mencapai kualitas yang optimal dalam semua aspek operasional suatu organisasi. Tujuannya adalah untuk memastikan bahwa setiap bagian dari organisasi, dari produk dan layanan hingga budaya kerja dan sistem manajemen, berkontribusi untuk mencapai kualitas terbaik.</p>
            <p class='mb-4'>TQM melibatkan pengintegrasian seluruh elemen organisasi, termasuk manajemen, karyawan, proses, dan teknologi, untuk mencapai hasil yang lebih baik. Pendekatan ini berfokus pada perbaikan berkelanjutan dan peningkatan proses untuk mencapai hasil. Berikut 3 langkah penerapan TQM :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Komitmen</span></span>
            
            <p class='mb-4'>Langkah pertama yang krusial adalah komitmen dari pimpinan organisasi, seperti direktur eksekutif atau manajer puncak. Mereka harus mendukung sepenuhnya penerapan TQM dan mampu mendorong perubahan budaya organisasi. Penerapan TQM memerlukan perubahan dalam cara berpikir dan bekerja di semua level organisasi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemahaman</span></span>
            
            <p class='mb-4'>Semua karyawan, dari puncak hingga tingkat paling rendah, perlu memiliki pemahaman tentang konsep TQM dan bagaimana hal itu berkaitan dengan tugas dan tanggung jawab mereka. Ini melibatkan pelatihan yang tepat tentang prinsip-prinsip TQM, alat-alat kualitas, dan metode perbaikan berkelanjutan. Ketika semua anggota tim memahami pentingnya kualitas dan kontribusi mereka terhadap pencapaian tujuan organisasi, implementasi TQM dapat menjadi lebih efektif.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengumpulan dan Analisis Data</span></span>
            
            <p class='mb-4'>TQM bergantung pada data dan fakta yang akurat untuk membuat keputusan yang berdasarkan bukti. Perusahaan perlu mengumpulkan data tentang kualitas produk, proses produksi, dan kepuasan pelanggan. </p>
            <p class='mb-4'>Data ini kemudian dianalisis untuk mengidentifikasi tren, pola, dan penyebab akar dari masalah yang mungkin muncul. Dengan memiliki data yang kuat, organisasi dapat merencanakan perbaikan yang berdasarkan bukti dan mengukur dampak perbaikan tersebut secara objektif.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-peran-besar-ai-dan-iot-dalam-manufaktur',
              'type' => 'article',
              'title' => '3 Peran Besar AI dan IoT Dalam Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-19.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'September 25, 2023',
              'content' => "
            
            <p class='mb-4'>Pemanfaatan IoT dalam sebuah industri manufaktur merupakan hal yang sangat wajar terjadi, sayangnya hal ini belum cukup efektif dan efisien. Dengan tujuan untuk melakukan penekanan pada biaya operasional serta memaksimalkan peranan IoT tersebut maka perlu dikombinasikan dengan AI.</p>
            <p class='mb-4'>Sederhananya, AI merupakan kecerdasan manusia yang memungkinkan sebuah sistem untuk mengambil keputusan berdasarkan data dan algoritma yang telah terinput sebelumnya. Dalam industri manufaktur sendiri terdapat beberapa peranan besar dari hasil kombinasi IoT dan AI, berikut penjelasannya :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Optimisasi Proses Produksi</span></span>
            
            <p class='mb-4'>Kombinasi antara AI dan IoT memungkinkan pabrik untuk mengoptimalkan proses produksi mereka secara signifikan. Sensor-sensor yang terhubung ke Internet (IoT) dapat mengumpulkan data real-time tentang mesin, aliran produksi, suhu, tekanan, dan banyak parameter lainnya. AI kemudian mampu menganalisis data ini untuk mengidentifikasi pola, anomali, dan korelasi yang tidak terlihat oleh manusia.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemeliharaan Prediktif</span></span>
            
            <p class='mb-4'>AI dan IoT juga memungkinkan implementasi pemeliharaan prediktif yang canggih. Sensor IoT yang ditempatkan pada mesin dapat mengumpulkan data operasional secara terus-menerus. AI kemudian menganalisis data ini untuk mengenali pola yang mengindikasikan kemungkinan kerusakan atau keausan berdasarkan sejarah data. Dengan pendekatan ini, perusahaan dapat mengambil tindakan pencegahan sebelum kerusakan yang serius terjadi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Personalisasi Produk</span></span>
            
            <p class='mb-4'>Kombinasi AI dan IoT memungkinkan manufaktur untuk mempersonalisasi produk dengan cara yang sebelumnya sulit dicapai. Sensor-sensor IoT dalam proses produksi dapat mengumpulkan data tentang preferensi pelanggan, spesifikasi yang diinginkan, dan kebutuhan individual. AI dapat mengolah data ini untuk mengarahkan produksi menuju produk-produk yang lebih disesuaikan dengan preferensi masing-masing pelanggan.</p>
            <p class='mb-4'>Secara keseluruhan, integrasi AI dan IoT dalam manufaktur mengarah pada perbaikan operasional yang signifikan, peningkatan efisiensi, pengurangan biaya, dan kemampuan untuk merespons dinamika pasar dengan lebih baik.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'pentingnya-rfid-middleware-berikut-3-manfaatnya-2',
              'type' => 'article',
              'title' => 'Pentingnya RFID Middleware Berikut 3 Manfaatnya!',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-18.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'September 22, 2023',
              'content' => "
            
            <p class='mb-4'>Middleware adalah lapisan perangkat lunak yang dibuat untuk menghubungkan komponen lain secara bersamaan seperti komponen perangkat keras, program perangkat lunak, aplikasi perusahaan, database dan lain sebagainya.</p>
            <p class='mb-4'>Middleware memberi pengembang perangkat lunak kemampuan untuk berkomunikasi dan mengelola data di seluruh sistem, bukan pada setiap aplikasi individu. Middleware RFID lebih dari sekadar menghubungkan perangkat melainkan dapat memungkinkan pengguna untuk mengumpulkan, memanipulasi, dan menyebarkan data dengan mudah.</p>
            <p class='mb-4'>Inti dari adanya RFID Middleware adalah menghubungkan komunikasi dari dua buah RFID reader supaya data yang diterima dapat diterima dengan benar dan dapat diteruskan pada aplikasi yang lain.</p>
            <p class='mb-4'>Dengan adanya perancangan RFID Middleware ini diharapkan dapat merealisasikan pertukaran data dari beberapa perangkat RFID reader pada waktu yang bersamaan serta memaksimalkan teknologi agar lebih efisien dan skalabilitas dalam implementasinya. Berikut 3 manfaat RFID middleware :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Sruktur Data</span></span>
            
            <p class='mb-4'>Middleware memberi pengguna kemampuan untuk memahami data apa yang mereka kumpulkan dari setiap perangkat dan memetakan struktur ke mana dan kapan data itu pergi. Middleware memfilter dan menyortir data mentah untuk memberikan informasi yang relevan kepada pengguna berdasarkan peristiwa yang terjadi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengelola Perangkat</span></span>
            
            <p class='mb-4'>Middleware dapat mengontrol jaringan dan pengaturan pembaca RFID dan menyediakan cara sederhana untuk memperbarui setiap perubahan yang perlu dilakukan, bahkan jika ada berbagai jenis dan merek pembaca RFID di jaringan. </p>
            <p class='mb-4'>Misalnya, middleware mungkin menyertakan fitur seperti kemampuan untuk memantau tingkat kinerja pembaca, yang memungkinkan pengguna memprediksi potensi masalah dengan lebih baik dan memastikan semua pembaca bekerja pada kinerja puncak.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Filter Data</span></span>
            
            <p class='mb-4'>Middleware RFID dapat digunakan untuk memfilter pembacaan tag RFID yang dianggap paling penting dan menghapus pembacaan yang berlebihan atau berulang. Dalam beberapa aplikasi, item yang diberi tag RFID dibaca berulang kali oleh pembaca RFID yang sama tergantung pada berapa lama peralatan tidak bergerak di bidang baca.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-alasan-graphene-disebut-super-material',
              'type' => 'article',
              'title' => '3 Alasan Graphene disebut Super Material',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-17.png',
              'tags' => 'Graphene,industri 4.0',
              'date' => 'September 21, 2023',
              'content' => "
            
            <p class='mb-4'>Graphene adalah suatu jenis material yang terdiri dari satu lapisan atom karbon yang tersusun dalam struktur dua dimensi yang mirip dengan sarang lebah (hexagonal). Sifat-sifat unik dari graphene menjadikannya sangat menarik dalam berbagai aplikasi ilmiah dan teknologi. Selain itu, graphene juga dikenal sebagai objek tertipis dan teringan di dunia dengan ketebalan hanya satu atom.</p>
            <p class='mb-4'>Struktur dua dimensi ini dapat menghantarkan listrik dengan sangat baik, dengan demikian maka banyak sekali keunggulan graphene yang menjadikannya sebuah super material yang sangat menguntungkan. Berikut 3 alasan utama graphene disebut sebagai super material :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Konduktor </span></span>
            
            <p class='mb-4'>Graphene adalah konduktor termal dan listrik yang sangat baik. Elektron-elektron dalam graphene dapat bergerak dengan sangat mudah, sehingga membuatnya sangat baik dalam aplikasi elektronik, seperti transistor yang lebih cepat. Aplikasi dari sifat konduktif graphene mencakup penggunaan dalam perangkat elektronik seperti transistor, sensor, dan komponen elektronik lainnya. Graphene juga digunakan dalam pengembangan baterai, superkapasitor, dan komponen energi lainnya yang memerlukan konduktor yang efisien.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Sangat Tipis</span></span>
            
            <p class='mb-4'>Graphene hanya terdiri dari satu lapisan atom karbon, sehingga sangat tipis dan ringan. Terdiri hanya dari satu lapisan atom karbon yang tersusun dalam struktur heksagonal. Ini menjadikannya bahan paling tipis yang mungkin, bahkan lebih tipis dari sehelai kertas atau sehelai rambut manusia. Ketebalannya sekitar 0,34 nanometer.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kekuatan</span></span>
            
            <p class='mb-4'>Graphene adalah material yang sangat kuat. Ia bahkan lebih kuat dari baja, meskipun hanya terdiri dari satu lapisan atom karbon. Ini membuatnya sangat tahan terhadap tekanan dan benturan. Potensi graphene dalam menggantikan material lain dalam aplikasi yang memerlukan kekuatan dan ketahanan yang tinggi telah menarik banyak perhatian dalam penelitian dan pengembangan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-smart-logistic-system',
              'type' => 'article',
              'title' => 'Ravelware : Smart Logistic System',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-16.png',
              'tags' => 'industri 4.0',
              'date' => 'September 20, 2023',
              'content' => "
            
            <p class='mb-4'>Smart Logistics System merupakan sebuah pendekatan dalam manajemen rantai pasokan dengan menggabungkan teknologi, data analitik serta otomatisasi untuk mengoptimalkan operasi logistik. Selain itujuga dapat mengendalikan biaya, meningkatkan efisiensi, dan meningkatkan kualitas layanan dalam pergerakan barang, informasi, dan sumber daya dalam rantai pasokan.</p>
            <p class='mb-4'>Manfaat dari Smart Logistics System meliputi peningkatan efisiensi operasional, pengurangan biaya logistik, peningkatan visibilitas, peningkatan kepuasan pelanggan, dan kemampuan untuk menghadapi perubahan dan gangguan dalam rantai pasokan dengan lebih baik.</p>
            <p class='mb-4'>Sistem ini membantu perusahaan untuk lebih adaptif dan responsif dalam menghadapi tantangan dalam dunia bisnis yang terus berubah. Berikut 3 kelebihan dari Smart Logistics System :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemeliharaan : Sistem ini dapat memantau kondisi kendaraan dan peralatan dalam rantai pasokan dan memberikan peringatan dini tentang pemeliharaan yang diperlukan. Ini menghindari pemutusan pengiriman akibat kerusakan peralatan.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Operasional : Smart Logistics System mengotomatisasi banyak tugas logistik, seperti pemilihan pesanan, pengemasan, dan pengiriman. Ini mengurangi waktu dan sumber daya yang diperlukan untuk menyelesaikan tugas-tugas tersebut.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Visibilitas : Penggunaan teknologi seperti sensor IoT, perusahaan dapat melacak barang secara real-time di seluruh rantai pasokan. Ini memberikan visibilitas yang lebih baik atas pergerakan barang dan statusnya.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Daya saing : Dengan meningkatkan efisiensi, pengurangan biaya, dan pelayanan yang lebih baik, smart logistics system dapat membantu perusahaan mempertahankan dan meningkatkan keunggulan bersaing mereka.</span></span>
            
            <p class='mb-4'>Dengan berbagai kelebihan ini, smart logistics system menjadi kunci dalam menghadapi tantangan kompleks dalam rantai pasokan modern dan memberikan nilai tambah bagi perusahaan yang mengadopsinya.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'iot-3-bidang-ini-perlu-terapkan-m2m',
              'type' => 'article',
              'title' => 'IoT : 3 Bidang Ini Perlu Terapkan M2M',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/cover-4.jpg',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'September 19, 2023',
              'content' => "
            
            <p class='mb-4'>M2M (Machine-to-Machine) adalah konsep yang merujuk pada komunikasi antara perangkat atau mesin tanpa intervensi manusia. Dalam sistem M2M, perangkat-perangkat tersebut dapat berkomunikasi, bertukar informasi, dan berbagi data secara otomatis melalui jaringan, biasanya melalui internet atau jaringan nirkabel lainnya.</p>
            <p class='mb-4'>Dalam konteks M2M, perangkat yang terlibat bisa berupa sensor, alat pengukuran, kendaraan, mesin industri, peralatan rumah tangga, dan berbagai perangkat lainnya. Penerapan M2M memberikan keuntungan dalam hal efisiensi, otomatisasi, pengurangan kesalahan manusia, dan pengambilan keputusan yang lebih baik berdasarkan data yang diterima dari berbagai perangkat.</p>
            <p class='mb-4'> M2M juga menjadi dasar penting untuk perkembangan Internet of Things (IoT), di mana berbagai perangkat dan objek terhubung secara luas untuk menciptakan lingkungan yang lebih cerdas dan terkoneksi. Dengan begitu maka pemanfaatan M2M perlu dilakukan pada beberapa bidang di bawah ini :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Transportasi dan Logistik</span></span>
            
            <p class='mb-4'>Dalam industri transportasi dan logistik, M2M memungkinkan perangkat seperti kendaraan, kontainer, atau perangkat pelacakan lainnya untuk berkomunikasi satu sama lain dan dengan pusat kontrol. Ini memungkinkan pelacakan dan pemantauan real-time terhadap posisi, kondisi, dan pergerakan barang atau kendaraan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pertanian dan Pertanian Pintar</span></span>
            
            <p class='mb-4'>M2M dapat diterapkan dalam pertanian modern untuk memantau lingkungan pertanian, kondisi tanaman, dan hewan ternak. Sensor-sensor M2M dapat memantau faktor seperti kelembaban tanah, suhu, kebutuhan air, dan lebih banyak lagi. Data ini dapat diakses dan dianalisis oleh petani secara real-time melalui platform digital.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Energi dan Infrastruktur Pintar</span></span>
            
            <p class='mb-4'>M2M digunakan dalam pengelolaan energi dan infrastruktur pintar, seperti jaringan listrik, air, dan gas. Melalui sensor-sensor yang terpasang pada perangkat ini, data mengenai konsumsi energi, suhu, tekanan, dan lainnya dapat dikumpulkan dan dianalisis. Hal ini memungkinkan perusahaan dan pemerintah untuk mengelola distribusi energi dan sumber daya lainnya secara lebih efisien.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-manfaat-manufaktur-berbasis-big-data',
              'type' => 'article',
              'title' => '3 Manfaat Manufaktur Berbasis Big Data',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-15.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'September 18, 2023',
              'content' => "
            
            <p class='mb-4'>Manufaktur dengan big data merujuk pada penerapan teknologi analisis data besar dan kompleks dalam proses manufaktur tradisional. Ini melibatkan pengumpulan, penyimpanan, pengolahan, dan analisis data yang dihasilkan oleh berbagai sistem, perangkat, dan sensor di lantai pabrik.</p>
            <p class='mb-4'>Tujuan utamanya adalah untuk meningkatkan efisiensi, produktivitas, kualitas, dan inovasi dalam seluruh rantai produksi. Dalam penerapannya manufaktur berbasis big data melibatkan pernan berbagai macam teknologi seperti Intrenet of Things, big data analytics, machine learning serta artificial intelligence.</p>
            <p class='mb-4'>Secara keseluruhan, manufaktur berbasis big data dapat menghasilkan keuntungan yang signifikan bagi perusahaan dengan meningkatkan efisiensi operasional, kualitas produk, dan kemampuan inovasi. Berikut 3 manfaat manufaktur berbasis big data yang perlu diketahui :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Optimisasi Proses Produksi</span></span>
            
            <p class='mb-4'>Dengan menganalisis data yang dihasilkan dari berbagai sensor dan perangkat di lantai pabrik, perusahaan manufaktur dapat memahami dengan lebih baik bagaimana mesin dan peralatan bekerja, mengidentifikasi pola kegagalan, dan memprediksi waktu perawatan yang tepat.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Perbaikan Kualitas Produksi</span></span>
            
            <p class='mb-4'>Manufaktur berbasis big data memungkinkan perusahaan untuk mengumpulkan dan menganalisis data dari berbagai tahap produksi dan pengujian. Dengan menganalisis data ini, perusahaan dapat mengidentifikasi faktor-faktor yang mempengaruhi kualitas produk, mendeteksi cacat atau kecacatan lebih awal, dan mengambil tindakan perbaikan yang tepat waktu.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Inovasi Produk</span></span>
            
            <p class='mb-4'>Data yang dihasilkan oleh sistem manufaktur berbasis big data juga dapat digunakan untuk menganalisis tren pasar, pola pembelian pelanggan, dan umpan balik produk. Dengan memahami kebutuhan pelanggan dan tren pasar, perusahaan dapat mengembangkan produk baru yang lebih sesuai dengan permintaan pasar.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'iot-security-dan-segudang-manfaatnya-2',
              'type' => 'article',
              'title' => 'IoT Security Dan Segudang Manfaatnya',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-14.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'September 15, 2023',
              'content' => "
            
            <p class='mb-4'>Keamanan IoT adalah bagian teknologi yang berfokus pada perlindungan perangkat dan jaringan yang terhubung di internet of things (IoT). IoT melibatkan penambahan konektivitas internet ke sistem perangkat komputasi yang saling terkait, mesin mekanis dan digital, objek, hewan, dan/atau manusia.</p>
            <p class='mb-4'>Setiap benda diberikan pengidentifikasi unik dan kemampuan untuk mentransfer data secara otomatis melalui jaringan. Mengizinkan perangkat terhubung ke internet akan membuka sejumlah kerentanan serius jika tidak dilindungi dengan benar.</p>
            <p class='mb-4'>Keamanan tidak selalu dianggap prioritas utama selama fase  mendesain produk. Selain itu, karena IoT adalah pasar yang baru lahir, banyak perancang dan produsen produk lebih tertarik untuk memasarkan produk mereka dengan cepat, daripada mengambil langkah-langkah yang diperlukan untuk membangun keamanan sejak awal.</p>
            <p class='mb-4'>Keamanan IoT mengacu pada metode perlindungan yang digunakan untuk mengamankan perangkat yang terhubung ke internet atau berbasis jaringan. Istilah IoT sangat luas, dan dengan teknologi yang terus berkembang, istilah ini menjadi lebih luas. Berikut beberapa manfaat IoT security :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Memantau Keamaan</span></span>
            
            <p class='mb-4'>IoT menyediakan keamanan pintar dengan menggabungkan AI guna meningkatkan kinerja perangkat seperti kamera CCTV, lampu pintar, serta sensor api. Tujuannya tentu saja agar menciptakan keamanan cerdas IoT yakni seperti pencegahan kehilangan data, koneksi aman, dan autentikasi serta manajemen perangkat.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi</span></span>
            
            <p class='mb-4'>Dengan memanfaatkan sensor dan perangkat terhubung dalam jaringan IoT, banyak proses dapat diotomatisasi. Misalnya, dalam industri manufaktur, mesin dan peralatan dapat dikendalikan secara otomatis berdasarkan data sensor yang diterima, mengurangi ketergantungan pada pekerja manusia dan menghindari kesalahan manusia. Hal ini dapat meningkatkan efisiensi dalam proses produksi, mengurangi waktu dan biaya, serta meningkatkan kualitas produk.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengelolaan Data</span></span>
            
            <p class='mb-4'>Lifecycle security adalah kemampuan mengelola perangkat secara aman dan dapat dikendalikan pada level yang berbeda, mulai dari konfigurasinya, monitoringnya, dan upgrade sampai pada saat di bongkar kembali.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'rfid-vs-chipless-rfid',
              'type' => 'article',
              'title' => 'RFID Vs Chipless RFID',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-13.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'September 14, 2023',
              'content' => "
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>RFID (Radio-Frequency Identification)</span></span>
            
            <p class='mb-4'>RFID ialah singkatan dari Radio-Frequency Identification. RFID adalah teknologi yang digunakan untuk mengidentifikasi maupun melacak objek dengan menggunakan gelombang radio.</p>
            <p class='mb-4'>Teknologi ini melibatkan penggunaan perangkat pembaca atau alat pemindai yang dapat berkomunikasi dengan tag RFID serta dapat ditempatkan pada objek. Tag RFID ini bisa berbentuk kartu, label, atau perangkat lain yang mengandung informasi yang dapat dibaca secara nirkabel.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Chipless RFID</span></span>
            
            <p class='mb-4'>Sedangkan chipless RFID adalah jenis teknologi RFID yang berbeda dari RFID konvensional. Ini adalah sistem RFID yang tidak menggunakan mikrochip dalam tag identifikasi.</p>
            <p class='mb-4'>Sebaliknya, chipless RFID mengandalkan pola atau frekuensi yang disematkan dalam material tag untuk mengidentifikasi dan melacak objek. Hal tersebut membuat teknologi ini lebih sederhana dalam desain dan lebih murah untuk diproduksi dibandingkan dengan tag RFID yang memiliki mikrochip.</p>
            <p class='mb-4'>Cara kerja chipless RFID melibatkan pengukuran karakteristik sinyal radio frekuensi yang dipancarkan oleh tag ketika terpapar oleh pembaca RFID. Pola atau frekuensi ini membawa informasi yang unik untuk mengidentifikasi objek yang ditempatkan dalam tag chipless RFID. Pengukuran ini kemudian diinterpretasikan oleh pembaca untuk mengidentifikasi objek tersebut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Keuntungan Chipless RFID</span></span>
            
            <p class='mb-4'>Keuntungan dari penggunaan chipless RFID meliputi biaya produksi yang lebih rendah, sehingga cocok untuk aplikasi yang memerlukan banyak tag yang terjangkau, seperti pelacakan barang-barang konsumen, tiket, atau pengamanan produk terhadap pemalsuan.</p>
            <p class='mb-4'>Namun, kelemahannya adalah jarak baca yang lebih pendek dan keterbatasan dalam penyimpanan data jika dibandingkan dengan RFID konvensional. Chipless RFID biasanya digunakan dalam aplikasi di mana kebutuhan untuk menyimpan dan mentransmisikan data yang kompleks tidak terlalu penting.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-smart-lighting',
              'type' => 'article',
              'title' => 'Ravelware : Smart Lighting',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-10.png',
              'tags' => 'industri 4.0,Internet of Things,penghematan energi listrik',
              'date' => 'September 13, 2023',
              'content' => "
            
            <p class='mb-4'>Smart lighting adalah sistem pencahayaan yang terhubung dan dapat dikendalikan secara digital. Ini memanfaatkan teknologi komunikasi nirkabel, sensor, dan perangkat cerdas untuk memberikan pengguna kontrol yang lebih besar atas pencahayaan dalam ruangan atau area tertentu.</p>
            <p class='mb-4'>Dalam penggunaannya, smart lighting merupakan sistem pencahayaan yang terhubung ke jaringan, seperti smartphone atau komputer, yang memungkinkan pengguna untuk mengontrol pencahayaan dengan lebih fleksibel dan efisien.</p>
            <p class='mb-4'>Smart lighting dirancang untuk memberikan fleksibilitas dan kemudahan dalam mengelola pencahayaan dalam rumah atau lingkungan kerja. Ini dapat membantu meningkatkan efisiensi, kenyamanan, dan keamanan, serta dapat menghemat energi dan biaya listrik dalam jangka panjang.</p>
            <p class='mb-4'>Berikut 3 kelebihan smart lighting :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi</span></span>
            
            <p class='mb-4'>Manfaat utama dari smart lighting adalah kemampuan untuk menghemat energi. Sistem ini dapat secara otomatis menyesuaikan kecerahan pencahayaan berdasarkan kebutuhan dan cahaya alami yang tersedia. Ini membantu mengurangi konsumsi energi dan dapat menghasilkan penghematan biaya yang signifikan dalam jangka waktu yang panjang.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kontrol Jarak</span></span>
            
            <p class='mb-4'>Dengan menggunakan aplikasi smartphone atau perangkat lain yang terhubung ke jaringan Wi-Fi atau Bluetooth, maka dapat dengan mudah mengontrol pencahayaan dari jarak jauh. Contonya seperti menyalakan atau mematikan lampu, mengubah tingkat kecerahan, atau mengganti warna pencahayaan bahkan ketika sednag tidak berada di tempat.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Automasi</span></span>
            
            <p class='mb-4'>Smart lighting dapat diprogram untuk berfungsi secara otomatis berdasarkan jadwal waktu atau berdasarkan kondisi tertentu. Contohnya, lampu bisa dinyalakan secara otomatis saat matahari terbenam atau ketika sensor gerak mendeteksi aktivitas di ruangan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'efisiensi-dan-produktivitas-manufaktur-dengan-rfid',
              'type' => 'article',
              'title' => 'Efisiensi dan Produktivitas Manufaktur Dengan RFID',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-9.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'September 12, 2023',
              'content' => "
            
            <p class='mb-4'>Dalam era digital seperti sekarang bahwa teknologi RFID telah mejadi sebuah hal yang berubah menjadi sorotan terutama dalam industri manufaktur. Industri manufaktur sendiri dapat dikatakan sebagai sebuah industri yang kemiliki kepekaan terhadap berbagi macam teknologi.</p>
            <p class='mb-4'>RFID merupakan singkatan drai Radio Frequency Identification yang menggunakan gelombang radio untuk mengidentifikasi maupun melacak sebuah barang yang telah dilengkapi oleh tag RFID. Tag tersebut tentunya mengandung informasi yang dapat dibaca dan dikenali secara nirkabel dengan pembaca RFID yang kemudian digunakan untuk meningkatkan efisiensi pada operasional pada seluruh rantai pasok.</p>
            <p class='mb-4'>Dengan tujuan untuk meningkatkan efisiensi tersebut maka akan menghasilkan manfaat seperti berikut :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pelacakan Produk</span></span>
            
            <p class='mb-4'>Sistem RFID memungkinkan pelacakan pergerakan produk dari awal produksi hingga akhir siklus hidupnya. Informasi mengenai transportasi, penyimpanan, dan penjualan produk dapat dicatat secara terperinci, memungkinkan penelusuran dan analisis riwayat produk. Hal ini memungkinkan perusahaan untuk mengidentifikasi dan mengatasi bottleneck, mengoptimalkan aliran kerja, dan meningkatkan efisiensi produksi secara keseluruhan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Akurasi Data</span></span>
            
            <p class='mb-4'>RFID mengurangi kesalahan manusia dalam pencatatan data karena proses pelacakan menjadi otomatis dan tidak memerlukan intervensi manual. Hal ini mengurangi risiko kesalahan dalam manajemen inventori dan memastikan data yang lebih akurat. Dalam prakteknya, keakuratan data RFID biasanya sangat tinggi, tetapi perlu dilakukan pengujian dan pengelolaan sistem dengan cermat untuk memastikan kualitas data yang optimal.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengendalian Kualitas</span></span>
            
            <p class='mb-4'>RFID memungkinkan penerapan sistem kontrol kualitas yang lebih ketat dengan memantau produk secara rinci. Data tentang kualitas produk dan parameter lainnya dapat diakses secara real-time, memungkinkan tindakan perbaikan yang cepat jika ditemukan masalah.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Orisinalitas Produk</span></span>
            
            <p class='mb-4'>RFID dapat membantu dalam memastikan keaslian dan keamanan produk. Dengan menggunakan tag RFID yang unik pada setiap produk, perusahaan dapat memverifikasi otentikasi produk dan menghindari masalah dengan produk palsu atau kontrafaktual.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-langkah-predictive-maintenance-dengan-tpm',
              'type' => 'article',
              'title' => '3 langkah Predictive Maintenance Dengan TPM',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-6.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'September 11, 2023',
              'content' => "
            
            <p class='mb-4'>Predictive Maintenance adalah pendekatan yang menggunakan data dan analisis untuk memprediksi kapan peralatan akan mengalami gangguan atau kegagalan, sehingga perawatan dapat dilakukan sebelum terjadi kerusakan yang serius. Dalam konteks Total Productive Maintenance (TPM), langkah-langkah Predictive Maintenance dapat diintegrasikan untuk meningkatkan efisiensi produksi.</p>
            <p class='mb-4'>Melalui penggabungan Predictive Maintenance dengan Total Productive Maintenance (TPM), perusahaan dapat mencapai manfaat ganda : mengurangi downtime yang tidak terduga dan memastikan peralatan beroperasi dengan kinerja optimal. Berikut langkah langkah yang perlu dilakukan dalam penerapannya :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemantauan dan Pengumpulan Data</span></span>
            
            <p class='mb-4'>Langkah pertama dalam Predictive Maintenance adalah mengumpulkan data dari peralatan yang diawasi. Data dapat mencakup parameter seperti suhu, tekanan, getaran, arus listrik, dan lain-lain tergantung pada jenis peralatan. Sensor dan perangkat pemantauan akan digunakan untuk mengumpulkan data ini secara terus-menerus selama operasi normal.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Analisis Data dan Pemodelan</span></span>
            
            <p class='mb-4'>Setelah data terkumpul, langkah selanjutnya adalah menganalisis data untuk mengidentifikasi pola dan tren yang menunjukkan gejala awal gangguan atau kerusakan. Teknik analisis seperti analisis getaran, analisis spektral, analisis suhu, dan lain-lain dapat digunakan untuk mengidentifikasi perubahan anomali. Model prediktif dapat dibangun berdasarkan data historis untuk memprediksi kapan peralatan mungkin mengalami masalah.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penjadwalan Perawatan Preventif</span></span>
            
            <p class='mb-4'>Berdasarkan hasil analisis, perusahaan dapat menentukan waktu yang optimal untuk melakukan perawatan preventif atau perbaikan. Ini memungkinkan peralatan diperbaiki sebelum gangguan yang serius terjadi, menghindari downtime yang mahal dan tidak terduga. Penjadwalan perawatan ini juga dapat diintegrasikan dengan prinsip TPM lainnya, seperti Perawatan Pemeliharaan Terencana (Planned Maintenance) dalam TPM.</p>
            <p class='mb-4'>Dengan menerapkan langkah-langkah ini, perusahaan dapat mencapai produktivitas yang lebih tinggi, meningkatkan efisiensi, dan mengurangi biaya perawatan dan perbaikan secara keseluruhan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-kunjungan-perwakilan-denso-corporation-headquarters-japan-dan-ntt-data-japan',
              'type' => 'news',
              'title' => 'Kunjungan Perwakilan Denso Corporation, Headquarters Japan dan NTT Data Japan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-5.png',
              'tags' => 'industri 4.0,Internet of Things,Radio Frequency Identification',
              'date' => 'September 8, 2023',
              'content' => "
            
            <p class='mb-4'>Kamis, 07 September 2023, PT Ravelware Technology Indonesia dengan bangga menerima kunjungan perwakilan Denso Corporation, Headquarters Japan dan NTT Data Japan.</p>
            <p class='mb-4'>Kunjungan ini dalam rangka pembahasan kelanjutan kerjasama pengembangan produk teknologi terapan yang berkelanjutan di masa depan. Hal ini didasari atas pengalaman keberhasilan produk-produk Ravelware digunakan dengan baik di unit bisnis dan supply chain Denso di Indonesia, serta kapabilitas R&amp;D Ravelware dalam menyediakan ‘product customization and integration’ berbasis solusi tepat sasaran ke kebutuhan end-user. Disamping juga eksplorasi atas ketertarikan pada Chipless RFID, yang merupakan produk inovasi dan pengembangan mandiri Ravelware yang cukup revolusioner.</p>
            <p class='mb-4'>#RavelwareTech #deeptechsolutions #automation #chiplessRFID #iot #techindonesiagoesinternational</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ravelware-energy-monitoring-system',
              'type' => 'article',
              'title' => 'Ravelware : Energy Monitoring System',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-4.png',
              'tags' => 'industri 4.0,Internet of Things,penghematan energi listrik,Radio Frequency Identification',
              'date' => 'September 7, 2023',
              'content' => "
            
            <p class='mb-4'>Seiring dengan berkembangnya zaman maka teknologi akan semakin berkembang pula, salah satunya adalah teknologi yang dapat memantau penggunaan energi. EMS atau biasa dikenal dengan Energy Monitoring System adalah sistem yang dirancang untuk memantau, mengukur, dan menganalisis penggunaan energi dalam lingkungan tertentu, seperti rumah, gedung komersial, pabrik, atau infrastruktur kota.</p>
            <p class='mb-4'>Tujuan utama dari sistem ini adalah untuk memungkinkan pemantauan dan pengelolaan yang lebih baik terhadap konsumsi energi, sehingga dapat menghasilkan beberapa manfaat, termasuk penghematan energi, pengurangan biaya, dan dukungan untuk keberlanjutan lingkungan.</p>
            <p class='mb-4'>EMS merupakan sebuah soluis yang hadir dalam suatu proses produksi di pabrik karena terbukti mampu mengakomodasi berbagai kebutuhan terkait sistem monitoring energi EMS juga membantu mendapatkan detail penggunaan listrik pada suatu area, sistem software untuk perekaman data transaksi dan memudahkan pelaporan, meminimalisir kesalahan pencatatan, serta fungsi deteksi dalam penyalahgunaan energi. </p>
            <p class='mb-4'>3 Kelebihan Energy Monitoring System :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penghematan : Salah satu kelebihan utama dari energy monitoring system adalah kemampuannya untuk mengidentifikasi penggunaan energi yang tidak efisien. Dengan pemahaman yang lebih baik tentang bagaimana dan di mana energi digunakan, pengguna dapat mengambil langkah-langkah untuk mengurangi konsumsi energi yang tidak perlu.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Identifikasi : Sistem pemantauan energi dapat membantu mengidentifikasi masalah dengan peralatan atau sistem yang mengonsumsi energi berlebihan atau tidak berfungsi dengan baik. Ini memungkinkan untuk perbaikan yang tepat waktu dan menghindari kerusakan yang lebih besar.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Hemat Biaya : Dengan pemahaman yang lebih baik tentang biaya energi yang dikeluarkan maka dapat merencanakan anggaran dengan lebih baik dan mengalokasikan sumber daya dengan lebih efisien. Ini memungkinkan untuk menghindari pemborosan dan mengurangi biaya yang tidak perlukan.<br/></span></span>
            
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'apa-itu-graphene-berikut-penjelasan-dan-kelebihannya',
              'type' => 'article',
              'title' => 'Apa itu Graphene? Berikut Penjelasan dan Kelebihannya.',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-3.png',
              'tags' => 'Internet of Things',
              'date' => 'September 6, 2023',
              'content' => "
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penjelasan</span></span>
            
            <p class='mb-4'>Graphene merupakan lapisan atom karbon yang tertutup, Graphene merupakan varian yang memiliki lubang teratur pada strukturnya. Graphene merupakan material jenis baru yang tersusun dari atom karbon dengan konfigurasi kisi  datar, dengan jarak antar  karbon  0,142 nm.</p>
            <p class='mb-4'>Lapisan graphene sangat tipis sehingga merupakan contoh material dua dimensi. Dibandingkan dengan grafit setebal 1 mm, graphene jelas jauh lebih tipis.</p>
            <p class='mb-4'>Bahannya utamanya adalah karbon, hanya satu atom tebalnya dan lebih kuat dari baja, yaitu karbon disusun secara horizontal dalam kisi seperti sarang lebah (Bagian 6) dan dianggap sebagai bahan semikonduktor tertipis di dunia.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kelebihan Graphene</span></span>
            
            <p class='mb-4'>Graphene adalah bahan konduktif yang mampu menghantarkan listrik maka material ini sangat berpeluang untuk diaplikasikan pada pembuatan lapisan sentuh yang transparan, panel listrik, dan bahkan sel surya., memiliki konduktivitas listrik yang mirip dengan  tembaga.</p>
            <p class='mb-4'>Selain itu, juga bersifat sebagai konduktor panas, dengan kemampuan konduksi yang berada di atas material-material lainnya yang telah dikenal. Graphene juga bersifat transparan meski masih memiliki kepadatan yang cukup tinggi, 0,77 mg/m2.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Ciri Graphene</span></span>
            
            <p class='mb-4'>Ciri utama graphene adalah susunan atom karbon yang teratur yang menyusun graphene hampir sempurna. Urutan atom yang sangat tinggi ini, bahkan tanpa cacat, adalah hasil dari ikatan erat antar karbon. </p>
            <p class='mb-4'>Pada saat yang sama, tautan ini juga sangat fleksibel, memungkinkan jaringan berkembang hingga 20% dari ukuran aslinya. Sebagai material yang benar-benar baru, graphene menonjol tidak hanya karena ketipisannya tetapi juga karena ketahanannya. Graphene memiliki ketahanan tekanan 42 N/m.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'big-data-pentingnya-business-intelligence-bagi-bisnis',
              'type' => 'article',
              'title' => 'Big data : Pentingnya business intelligence bagi bisnis',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image-2.png',
              'tags' => 'big data,Internet of Things',
              'date' => 'September 5, 2023',
              'content' => "
            
            <p class='mb-4'>Big Data merujuk pada volume besar dan kompleks data yang dihasilkan oleh berbagai sumber, seperti sensor, perangkat seluler, platform sosial media, transaksi bisnis, dan banyak lagi. Data ini cenderung memiliki karakteristik seperti volume besar, kecepatan produksi yang cepat, dan keragaman jenis data yang berbeda.</p>
            <p class='mb-4'>Istilah “Big Data” tidak hanya mengacu pada jumlah data yang besar, tetapi juga pada tantangan yang terkait dengan pengolahan, penyimpanan, analisis, dan pemahaman data dalam skala yang sedemikian besar dan kompleks. Sedangkan hubungan antara Business Intelligence (BI) dan Big Data sangat erat karena keduanya berfokus pada penggunaan data untuk mendukung pengambilan keputusan yang lebih baik dalam bisnis.</p>
            <p class='mb-4'>Meskipun memiliki perbedaan, BI dan Big Data sering kali saling melengkapi dan digunakan bersama untuk mengoptimalkan strategi bisnis. Berikut peran penting Business Intelligence untuk bisnis :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengambilan Keputusan yang Lebih Baik</span></span>
            
            <p class='mb-4'>BI membantu bisnis dalam mengambil keputusan yang lebih informasional dan berdasarkan fakta. Dengan mengumpulkan dan menganalisis data dari berbagai sumber, organisasi dapat memahami tren, pola, dan keterkaitan dalam operasi bisnis mereka. Informasi ini memungkinkan manajemen dan pemangku kepentingan untuk membuat keputusan yang lebih baik dan lebih tepat, berdasarkan bukti yang kuat dan analisis yang mendalam.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemahaman yang Lebih Mendalam tentang Bisnis</span></span>
            
            <p class='mb-4'>BI memungkinkan bisnis untuk mendapatkan wawasan yang lebih mendalam tentang berbagai aspek operasi mereka. Dengan melihat data dari berbagai sudut pandang, seperti penjualan, stok, keuangan, dan perilaku pelanggan, bisnis dapat mengidentifikasi peluang baru, mengoptimalkan proses, dan mengatasi tantangan yang ada.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Peningkatan Efisiensi Operasional</span></span>
            
            <p class='mb-4'>BI memungkinkan bisnis untuk mengidentifikasi pemborosan, titik lemah, dan area yang dapat dioptimalkan dalam operasi mereka. Dengan melihat data operasional secara menyeluruh, organisasi dapat mengidentifikasi proses yang lambat, biaya yang tidak perlu, atau ketidaksesuaian yang dapat menghambat efisiensi.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-kelebihan-dari-penerapan-industrial-internet-of-things',
              'type' => 'article',
              'title' => '3 Kelebihan dari Penerapan Industrial Internet of Things',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/09/image.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'September 4, 2023',
              'content' => "
            
            <p class='mb-4'>Industrial Internet of Things (IIoT) adalah konsep di mana perangkat fisik, sensor, mesin, dan sistem komputer terhubung dan saling berinteraksi dalam lingkungan industri melalui jaringan internet.</p>
            <p class='mb-4'>Tujuan utamanya adalah untuk mengumpulkan, mentransmisikan, dan menganalisis data secara real-time guna meningkatkan efisiensi operasional, produktivitas, dan pengambilan keputusan dalam berbagai sektor industri, seperti manufaktur, energi, pertanian, transportasi, dan lainnya.</p>
            <p class='mb-4'>Dalam IIoT, perangkat-perangkat dan sensor-sensor yang terhubung memiliki kemampuan untuk mengambil data dari lingkungan mereka, seperti suhu, tekanan, kelembaban, gerakan, dan lainnya. Data ini kemudian dikirim melalui jaringan internet atau intranet untuk dianalisis dan digunakan untuk mengambil keputusan yang lebih baik. Berikut 3 manfaat dari penerapan IIoT :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Konektivitas</span></span>
            
            <p class='mb-4'>Konektivitas merupakan inti dari IIoT. Namun, dalam lingkungan industri, keamanan dan kehandalan konektivitas sangatlah penting. Sistem IIoT harus dirancang untuk memastikan bahwa data yang dikumpulkan dan dipertukarkan antara perangkat, sensor, dan sistem aman dari serangan siber.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Analisis Data Real-Time</span></span>
            
            <p class='mb-4'>Data yang dikumpulkan oleh sensor-sensor IIoT sangat melimpah. Namun, data ini hanya bernilai jika dapat diolah dan dianalisis dengan cepat untuk mendapatkan wawasan yang berharga. Penggunaan teknologi AI dan analisis data real-time memungkinkan perusahaan untuk mengidentifikasi tren, pola, dan anomali yang tidak terlihat dengan mata telanjang.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Integrasi</span></span>
            
            <p class='mb-4'>Implementasi IIoT seringkali melibatkan integrasi dengan sistem yang sudah ada dalam lingkungan industri, seperti sistem SCADA (Supervisory Control and Data Acquisition) atau MES (Manufacturing Execution System). Integrasi yang baik memungkinkan data dari perangkat dan sensor IoT berinteraksi dengan sistem lain, memastikan bahwa operasional pabrik berjalan dengan sinergi dan efisiensi.</p>
            <p class='mb-4'>Secara keseluruhan, kesuksesan IIoT tergantung pada kombinasi yang tepat antara konektivitas yang aman, kemampuan analisis data yang kuat, dan integrasi yang efektif dengan sistem yang ada. Dengan memperhatikan tiga hal ini, perusahaan dapat meraih manfaat maksimal dari penerapan IIoT dalam operasional industri.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'pt-ravelware-technology-indonesia-lean-monozukuri-event',
              'type' => 'news',
              'title' => 'Lean Monozukuri event',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-18.png',
              'tags' => 'industri 4.0,Internet of Things,total productive maintenance',
              'date' => 'August 30, 2023',
              'content' => "
            
            <p>🌟 *Big News from PT Ravelware Technology Indonesia!* 🌟</p>
            <p>We’re thrilled to share a milestone that underscores our commitment to excellence and innovation in the realm of Industry 4.0.</p>
            <p>In the strategic G2G bilateral program between the Ministry of Economic, Trade &amp; Industry of Japan (METI) and the Ministry of Industry of Republic of Indonesia (Kemenperin), a pivotal initiative – the Lean Monozukuri event has been successfully launched on 26-27 August 2023. This is a nod to the renowned concept of Total Productive Management (TPM) from Japan.</p>
            <p>The core aim? The program certainly has an interesting goal, which is to improve the supply chain of local factories that act as factory suppliers. With the ultimate goal of increasing the ability of local factories to align with the stringent demands of iconic Japanese manufacturers such as Toyota, Komatsu, etc.</p>
            <p>The process of implementing it is by installing sensors and software that can analyze the efficiency of the factories they have in real time and the data is actual data or pure data that is not made up.</p>
            <p>And guess who’s the only local tech partner selected for this monumental task? **PT Ravelware Technology Indonesia **!</p>
            <p>Our mission is clear – deploy cutting-edge sensors and software for a real-time and precise analysis of efficiency metrics in these factories. The cherry on top? We have the privilege to collaborate under the guidance of Prof. Fumio Kojima and Prof. Yoshiro Fukuda, the brilliant minds behind the Lean Monozukuri TPM concept.</p>
            <p>This is more than just an achievement for us; it’s a testament to our unwavering dedication and expertise. Let’s lead the future of highly competitive Indonesia locals factories, together!</p>
            <p>Intrigued to learn more? Or, your company is also aiming for scale up upon Total Productive Management (TPM) concept enable for Japanese products market-fit? – – let’s reach out (<a href=\"http://www.ravelware.co\">www.ravelware.co</a>)</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-tujuan-penting-supply-chain-management',
              'type' => 'article',
              'title' => '4 Tujuan Penting Supply Chain Management',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-17.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'August 25, 2023',
              'content' => "
            
            <p>Supply Chain Management (SCM) adalah pendekatan strategis dalam mengelola aliran barang, informasi, dan layanan dari tahap awal produksi hingga sampai ke tangan pelanggan akhir. SCM melibatkan koordinasi yang efektif antara berbagai elemen dalam rantai pasokan, termasuk pemasok, produsen, distributor, pedagang, dan pelanggan.</p>
            <p>Tujuan utama SCM adalah untuk mengoptimalkan kinerja rantai pasokan secara keseluruhan dengan mengurangi biaya, meningkatkan efisiensi, meningkatkan kepuasan pelanggan, dan menciptakan nilai tambah. Pendekatan ini memperhatikan semua aspek operasional, termasuk pembelian, manajemen persediaan, produksi, pergudangan, transportasi, penjualan, dan pelayanan pelanggan.</p>
            <p>Penerapan SCM yang sukses dapat memberikan manfaat seperti pengurangan biaya, peningkatan kepuasan pelanggan, peningkatan kecepatan respons, peningkatan kualitas, dan peningkatan keberlanjutan rantai pasokan. Berikut 4 tujuan penting SCM yang perlu diperhatikan :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Responsif</span></span>
            
            <p>SCM berfokus pada kemampuan untuk merespons perubahan permintaan pelanggan dengan cepat dan efektif. Ini melibatkan pemodelan permintaan yang akurat, fleksibilitas operasional, serta koordinasi yang baik dengan pemasok dan mitra bisnis lainnya untuk mengatasi fluktuasi permintaan yang tidak terduga.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Rantai Pasok</span></span>
            
            <p>Bertujuan untuk mengoptimalkan keseluruhan rantai pasokan, bukan hanya bagian-bagiannya. Ini melibatkan pengintegrasian yang erat antara semua tahap dan fungsi dalam rantai pasokan, termasuk penggabungan informasi, proses, dan aliran material.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Biaya</span></span>
            
            <p>SCM berupaya untuk mengurangi biaya di seluruh rantai pasokan. Ini mencakup pengelolaan persediaan yang optimal, negosiasi kontrak yang baik dengan pemasok, pemilihan rute pengiriman yang efisien, dan pengurangan biaya operasional lainnya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kualitas</span></span>
            
            <p>Memiliki tujuan untuk meningkatkan kualitas dan keandalan produk atau layanan yang disediakan kepada pelanggan. Ini melibatkan pemantauan kualitas di setiap tahap produksi, seleksi pemasok yang andal, serta implementasi kontrol kualitas dan standar yang ketat.</p>
            <p>Pencapaian tujuan-tujuan ini dalam SCM dapat membantu perusahaan mencapai keunggulan kompetitif, memperkuat hubungan dengan pelanggan, dan menciptakan nilai tambah dalam operasi bisnis.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'tidak-menerapkan-asset-management-rugi',
              'type' => 'article',
              'title' => 'Tidak Menerapkan Asset Management? Rugi!',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-16.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'August 24, 2023',
              'content' => "
            
            <p>Asset management merupakan sebuah upaya pengelolaan aset dengan tujuan untuk mengoptimalkan nilai aset dan memaksimalkan keuntungan jangka panjang. Hal ini melibatkan perencanaan, pengadaan, pemeliharaan, pengoperasian, dan pemantauan aset selam bisnis tersebut berjalan.</p>
            <p>Asset management melibatkan berbagai jenis aset, termasuk aset fisik seperti properti, peralatan, kendaraan, infrastruktur, dan inventaris, serta aset non-fisik seperti kekayaan intelektual, portofolio investasi, dan hak cipta.</p>
            <p>Tujuan utama dari asset management adalah untuk mengoptimalkan penggunaan aset, memperpanjang umur aset, mengurangi biaya operasional, mengurangi risiko, dan meningkatkan nilai perusahaan. Dengan begitu maka dapat dikatakan  bahwa menerapkan asset management merupakan sebuah hal penting, berikut 3 alasan mengapa asset management itu penting :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Memperhitungkan Aset</span></span>
            
            <p>Proses ini dapat memudahkan perusahaan untyk melacak aset mereka, sehingga pemilik peruusahaan akan mengetahui keberadaan aset tersebut. Pemilik juga dapat mengetahui bagaimana keadaan ataupun bentuk aset tersebut. Sehingga pemulihan mengenai aset tersebut dapat terjadi dengan efisien dan tentunya menghasilkan pengembalian yang lebih tinggi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengelola Resiko</span></span>
            
            <p>Manajemen aset meliputi identifikasi dan pengelolaan risiko yang timbul dari penggunaan dan kepemilikan aset tertentu. Artinya, perusahaan akan selalu siap untuk mengelola setiap risiko yang datang. Dengan begitu maka perusahaan akan mendapatkan himbauan mengenai aset tersebut dan akhirnya memiliki berbagai macam upaya untnuk menanggulangi resiko tersebut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi</span></span>
            
            <p>Dengan penerapan asset management, perusahaan dapat meningkatkan efisiensi dan produktivitas operasional mereka. Proses bisnis yang lebih baik terorganisir, pemeliharaan yang terjadwal, dan penggunaan aset yang optimal mengurangi waktu henti, meningkatkan ketersediaan aset, dan mempercepat alur kerja. Hal ini mengarah pada efisiensi yang lebih tinggi dan peningkatan produktivitas keseluruhan.</p>
            <p>Secara keseluruhan, penerapan asset management memberikan manfaat yang signifikan dalam hal pengoptimalan penggunaan aset, pengurangan biaya operasional, pemeliharaan yang tepat waktu, pengambilan keputusan berbasis data, kepatuhan terhadap peraturan, manajemen risiko yang lebih baik, dan peningkatan efisiensi operasional.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-alasan-perlunya-teknologi-pada-industri-manufaktur',
              'type' => 'article',
              'title' => '3 Alasan Perlunya Teknologi Pada Industri Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-15.png',
              'tags' => 'industri 4.0',
              'date' => 'August 23, 2023',
              'content' => "
            
            <p>Teknologi dalam manufaktur merujuk pada penggunaan berbagai macam inovasi teknologi untuk meningkatkan proses produksi, efisiensi, kualitas, dan inovasi produk dalam industri manufaktur. Ini mencakup berbagai alat, perangkat lunak, sistem, dan pendekatan yang digunakan untuk mengoptimalkan berbagai aspek produksi.</p>
            <p>Teknologi telah memiliki dampak yang besar pada industri manufaktur, mengubah cara produksi, manajemen, dan pengembangan produk dilakukan. Berikut ini adalah beberapa cara di mana teknologi telah mempengaruhi dan terus mempengaruhi industri manufaktur :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Produktivitas : Teknologi memungkinkan otomatisasi proses produksi, mengurangi ketergantungan pada pekerjaan manual, dan menghilangkan tugas-tugas yang repetitif. Penggunaan robotika, sistem otomatis, dan perangkat lunak manufaktur berbasis komputer membantu dalam meningkatkan kecepatan produksi, mengurangi risiko kesalahan manusia, dan mengoptimalkan penggunaan sumber daya.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Inovasi Produk : Teknologi memungkinkan perancangan, pengujian, dan pengembangan produk yang lebih canggih dan presisi. Dengan bantuan perangkat lunak desain (CAD) dan pemodelan komputer, perusahaan dapat menciptakan produk yang lebih akurat dan sesuai dengan keinginan pelanggan.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Respons Pasar : Teknologi memungkinkan perusahaan untuk merespons perubahan pasar dengan lebih cepat dan fleksibel. Sistem manufaktur yang terhubung dengan teknologi Internet of Things (IoT) dapat memberikan visibilitas real-time terhadap produksi, persediaan, dan permintaan.</span></span>
            
            <p>            Dapat dikatakan bahwa teknologi terus berubah dan berkembang, dan ini akan terus membentuk masa depan industri manufaktur dengan inovasi baru yang memungkinkan proses produksi yang lebih efisien, produk yang lebih inovatif, dan respon yang lebih baik terhadap perubahan pasar dan konsumen.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-step-kaizen-event-anti-gagal-untuk-perusahaan',
              'type' => 'article',
              'title' => '3 Step Kaizen Event Anti Gagal Untuk Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-14.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'August 22, 2023',
              'content' => "
            
            <p>Kaizen Event adalah suatu pendekatan yang digunakan dalam metode Kaizen untuk melakukan perbaikan yang terfokus dan intensif pada suatu proses atau area kerja tertentu dalam jangka waktu yang terbatas. Kaizen Event juga dikenal sebagai “Kaizen Blitz” atau “Rapid Improvement Event”.</p>
            <p>Tujuan dari Kaizen Event adalah untuk mencapai perbaikan yang signifikan dalam waktu yang relatif singkat. Biasanya, Kaizen Event dilakukan dalam beberapa hari hingga beberapa minggu, dengan melibatkan tim lintas fungsi yang terdiri dari anggota staf yang terkait dengan proses yang akan diperbaiki.</p>
            <p>Kaizen Event membantu mempercepat perbaikan, memobilisasi energi dan partisipasi karyawan, serta menghasilkan hasil yang terukur dalam waktu yang relatif singkat. Untyk mencapai tujuan tersebut tentunya perlu dilakukan beberapa step pada kaizen event seperti berikut :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pelatihan</span></span>
            
            <p>Pastikan karyawan yang terlibat dalam proses tersebut mendapatkan pelatihan dan pengembangan yang diperlukan untuk mengadopsi dan menjaga perubahan yang diperkenalkan. Bantu mereka memahami manfaat perubahan dan bagaimana melanjutkan perbaikan di masa depan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Evaluasi</span></span>
            
            <p>Selama dan setelah implementasi perubahan, pantau dan evaluasi hasilnya. Gunakan metrik dan indikator kinerja yang relevan untuk mengukur dampak perubahan. Bertujuan untuk membandingkan hasil setelah perubahan dengan baseline sebelumnya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Analisis</span></span>
            
            <p>Lakukan analisis mendalam terhadap proses yang akan diperbaiki. Identifikasi pemborosan, hambatan, dan masalah yang ada dalam proses tersebut. Gunakan alat dan teknik Kaizen, seperti analisis aliran nilai, 5W+1H (What, Who, When, Where, Why, How), dan diagram sebab-akibat untuk mendapatkan pemahaman yang mendalam tentang masalah.</p>
            <p>Setelah Kaizen Event selesai, langkah-langkah perbaikan berkelanjutan dan pemantauan terus dilakukan untuk memastikan bahwa perubahan yang diimplementasikan tetap berjalan dan mencapai hasil yang diinginkan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'pentingnya-kaizen-untuk-management-perusahaan',
              'type' => 'article',
              'title' => 'Pentingnya Kaizen Untuk Management Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-13.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'August 21, 2023',
              'content' => "
            
            <p>Setiap perusahaan pasti menginginkan agar bisnis yang dijalani berjalan dengan lancar dan baik setiap harinya. Dengan begitu maka bisnis akan menghasilkan produk yang berkualitas dan disukai oleh para pembeli. Untuk mencapai hal tersebut perusahaan perlu mengunakan beberapa metode maupun pendekatan yang dapat menghasilkan banyak perubahan maupun perbaikan. Salah satu metode tersebut adalah metode kaizen.</p>
            <p>Metode kaizen adalah pendekatan yang digunakan dalam manajemen dan produksi untuk mencapai perbaikan bertahap dalam suatu proses atau sistem. Kata “kaizen” berasal dari bahasa Jepang yang terdiri dari dua karakter: “kai” yang berarti perubahan, dan “zen” yang berarti baik atau kebaikan.</p>
            <p>Prinsip utama Kaizen adalah fokus pada perbaikan berkelanjutan melalui langkah-langkah kecil yang diambil secara konsisten. Dengan demikian maka dapat dikatakan bahwa kaizen memiliki manfaat yang penting untuk perusahaan seperti dibawah ini :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Teamwork</span></span>
            
            <p>Kaizen melibatkan partisipasi aktif dari semua karyawan dalam upaya perbaikan. Karyawan diundang untuk memberikan masukan, ide, dan saran untuk meningkatkan proses kerja mereka. Ini dapat meningkatkan keterlibatan karyawan, memberikan mereka rasa kepemilikan terhadap pekerjaan mereka, dan meningkatkan motivasi dan loyalitas.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Inovasi</span></span>
            
            <p>Dengan mendorong perbaikan berkelanjutan, Kaizen menciptakan budaya yang mendorong inovasi dan eksperimen. Karyawan didorong untuk mencari cara baru untuk melakukan pekerjaan mereka dengan lebih baik, yang dapat menghasilkan ide-ide inovatif dan perbaikan yang signifikan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kualitas</span></span>
            
            <p>Kaizen mendorong identifikasi masalah dan perbaikan secara terus-menerus. Dengan melakukan perubahan kecil yang berkelanjutan, kesalahan dan cacat dalam proses dapat dikurangi atau dihilangkan, sehingga meningkatkan kualitas produk atau layanan yang dihasilkan.</p>
            <p>Penerapan metode Kaizen bukan hanya tentang mencapai perbaikan sekali saja, tetapi juga tentang membangun budaya perbaikan berkelanjutan di dalam organisasi. Dengan mengadopsi pendekatan ini, organisasi dapat mencapai keunggulan kompetitif jangka panjang dan menghadapi perubahan dengan lebih baik.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-penerapan-penting-iot-pada-smart-city',
              'type' => 'article',
              'title' => '3 Penerapan Penting IoT Pada Smart City',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-12.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'August 18, 2023',
              'content' => "
            
            <p>Semakin majunya perkembangan zaman menjadikan sebagian kehidupan berubah menjadi berbasiskan teknologi, teknologi tersebut pula yang tentunya memberikan perubahan signifikan untuk kehidupan.</p>
            <p>Salah satu contoh nyatanya ialah smart city, ialah sebuah konsep perkotaan yang menggunakan teknologi informasi maupun internet og things untuk mengelola ataupun meingkatkan berbagai aspek kehidupan pada sebuah tatanan perkotaan.</p>
            <p>Dalam sebuah smart city berbagai infrastruktur dan sistem perkotaan dihubungkan secara digital dan saling terintegrasi satu dengan yang lainnya. Smart city juga mengelola sumber daya yang ada secara efisien dan memberikan informasi yang tepat kepada masyarakat maupun lembaga dalam melalukan berbagai kegiatannya dan juga memberikan antisipasi mengenai kejadian tak terduga.</p>
            <p>Berikut 3 penerapan utama IoT pada smart city :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemantauan Lingkungan</span></span>
            
            <p>IoT dapat digunakan untuk memantau kondisi lingkungan pada smart city. Sensor-sensor IoT dapat dipasang untuk mengukur bagaimana kualitas udara, kualitas air, kebisingan, dan parameter lingkungan lainnya. Data yang dihasilkan tersebut kemudian digunakan untuk memantau polusi, mengidentifikasi sumber polusi, dan mengambil langkah-langkah mitigasi yang diperlukan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Transportasi Cerdas</span></span>
            
            <p>Penerapan IoT dalam sistem transportasi untuk mengumpulkan dan menganalisis data tentang lalu lintas, parkir, dan transportasi umum. Sensor tersebut dipasang di jalan, kendaraan, dan infrastruktur transportasi lainnya untuk memantau dan mengelola lalu lintas secara real-time. Hal ini membantu mengoptimalkan arus lalu lintas, mengurangi kemacetan, meningkatkan keamanan, dan memperbaiki efisiensi transportasi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Keamanan</span></span>
            
            <p>IoT digunakan untuk keamanan dan pengawasan di smart city. Kamera keamanan yang terhubung dapat mengirimkan data dan memberikan informasi real-time kepada pihak berwenang. IoT juga dapat mendeteksi kejadian yang mencurigakan, seperti kebakaran atau gerakan yang mencurigakan, dan memberikan peringatan dini.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'kaizen-3-manfaat-utama-just-in-time-bagi-perusahaan',
              'type' => 'article',
              'title' => 'Kaizen : 3 Manfaat Utama Just in Time Bagi Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-11.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'August 15, 2023',
              'content' => "
            
            <p>Just in time merupakan sebuah konsep dan pendekatan dalam manajemen rantai pasok yang memiliki tujuan untuk mengurangi persediaan dan mengoptimalkan efisiensi pada proses produksi. Konsep ini mengacu praktik memproduksi, mengirim dan menyediakan barang maupun layanan tepat pada waktunya untuk memenuhi permintaan pelanggan.</p>
            <p>Dalam sistem ini persediaan dijaga dengan tingkat yang sangat rendah atau bahkan dihilangkan sepenuhnya. Dengan kata lian produk maupun komponen yang diperlukan diproduksi ataupun dipesan hanya saat diperlukan oleh pelanggan atau tahap produksi berikutnya dalam aliran proses.</p>
            <p>Tujuan utama konsep JIT adalah untuk menghindari pemborosan dan biaya yang terkait dengan penyimpanan maupun persediaan yang tidak perlu. Dengan konsep tersebut tentunya JIT memiliki berbagai macam manfaat seperti berikut :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemborosan Berkurang</span></span>
            
            <p>Sistem JIT secara aktif berupaya untuk mengidentifikasi dan menghilangkan pemborosan dalam proses produksi, seperti persediaan berlebih, waktu tunggu, pergerakan yang tidak perlu, atau pengolahan yang berlebihan. Ini membantu meningkatkan efisiensi, produktivitas, dan keunggulan kompetitif.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kualitas Meningkat</span></span>
            
            <p>JIT mendorong fokus pada kualitas yang ketat dan pencegahan kesalahan. Dengan meminimalkan persediaan, setiap kesalahan produksi dapat dengan cepat diidentifikasi dan diperbaiki. Ini mengarah pada peningkatan kualitas produk dan mengurangi biaya yang terkait dengan cacat atau pengembalian.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningkatnya Kolaborasi</span></span>
            
            <p>Manfaat selanjutnya ialah JIT memerlukan kerja sama yang erat dengan pemasok dan pelanggan. Dengan membangun hubungan yang kuat, informasi dapat dibagikan secara lebih efisien, permintaan dapat diperkirakan dengan lebih akurat, dan ketergantungan antara semua pihak dalam rantai pasok dapat dikurangi.</p>
            <p>Dalam keseluruhan, konsep JIT dapat membantu perusahaan mencapai keunggulan kompetitif dengan mengurangi biaya, meningkatkan efisiensi, dan meningkatkan kualitas produk. Namun, implementasi JIT membutuhkan perencanaan yang matang, manajemen risiko yang baik, dan kerja sama yang kuat dengan semua pihak terkait dalam rantai pasok.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-manfaat-iot-untuk-digital-transformation',
              'type' => 'article',
              'title' => '3 Manfaat IoT Untuk Digital Transformation',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-10.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'August 14, 2023',
              'content' => "
            
            <p>Semakin berkembangnya teknologi menjadikan banyaknya perusahaan yang melakukan transformasi digital, salah satunya adalah pada industri manufaktur dengan tujuan agar tidak kalah saing dengan para kompetitor.</p>
            <p>Transformasi digital adalah perubahan dalam cara perusahaan beroperasi, berinteraksi dengan pelanggan, dan menghasilkan nilai melalui penerapan teknologi digital. Ini melibatkan penggunaan teknologi digital untuk mengubah proses bisnis, model bisnis, dan pengalaman pelanggan dengan tujuan meningkatkan efisiensi, inovasi, dan keunggulan kompetitif.</p>
            <p>Dengan transformasi digital tentunya dapat membantu sebuah perusahaan untuk mendapatkan hasil pengerjaan yang lebih maksimal, seperti terhindar dari banyaknya produk cacat hingga ketepatan waktu produksi. Transformasi digital pun pada akhirnya membantu perusahaan manufaktur terhindar dari pengeluaran tidak perlu.</p>
            <p>Berikut 3 manfaat digital transformation :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi Operasional</span></span>
            
            <p>Digital transformation memungkinkan perusahaan untuk mengotomatisasi proses bisnis, mengintegrasikan sistem, dan meningkatkan kolaborasi antar tim. Ini menghasilkan efisiensi operasional yang lebih tinggi, mengurangi biaya, dan mempercepat waktu siklus bisnis.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengurangi Biaya</span></span>
            
            <p>Dengan meningkatnya efisiensi kerja maka akan mengurangi biaya yang akan dikeluarkan sehingga dapat mengurangi pemborosan yang sebelumnya tidak disadari. Penerapan teknologi digital sejak area perakitan produk dapat membuat perusahaan menghindari kesalahan yang lebih besar.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Automatisasi Proses</span></span>
            
            <p>Digital transformation memungkinkan perusahaan untuk mengotomatisasi proses bisnis yang berulang dan rutin. Dengan menggunakan teknologi seperti robotic process automation (RPA) atau workflow automation, tugas-tugas manual yang memakan waktu dan sumber daya manusia dapat digantikan dengan proses otomatis yang lebih efisien.</p>
            <p>Digital transformation dapat memberikan perusahaan peluang untuk mengurangi biaya operasional, memperbaiki efisiensi, dan mengoptimalkan penggunaan sumber daya. Dengan menerapkan teknologi digital secara strategis, perusahaan dapat menghemat biaya dan meningkatkan daya saing mereka di pasar yang semakin kompetitif.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'iot-vs-m2m-lebih-baik-mana',
              'type' => 'article',
              'title' => 'IoT Vs M2M, Lebih Baik Mana?',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-9.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'August 11, 2023',
              'content' => "
            
            <p>Internet of Things (IoT) dan Machine to Machine (M2M) adalah dua konsep yang memiliki hubungan erat dalam konteks konektivitas dan komunikasi antar perangkat. IoT mengacu pada jaringan perangkat fisik yang terhubung melalui internet dan dapat saling berkomunikasi dan berbagi data.</p>
            <p>Bertujuan untuk mengumpulkan data, menganalisisnya, dan memberikan wawasan yang berguna untuk mengoptimalkan berbagai aspek kehidupan sehari-hari, termasuk rumah pintar, kota cerdas, dan industri cerdas.</p>
            <p>M2M, di sisi lain, adalah konsep yang lebih sempit yang fokus pada komunikasi langsung antara perangkat tanpa melibatkan interaksi manusia. Dalam lingkup M2M, perangkat-perangkat ini saling berkomunikasi secara otomatis untuk memperoleh data, mengirim instruksi, atau melakukan tindakan tertentu.</p>
            <p>Berdasarkan penjelasan tersebut maka ada beberapa perbedaan antar IoT dan M2M yaitu sebagai berikut :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Skalabilitas</span></span>
            
            <p>Dengan model M2M ini tidak dapat dengan leluasa memperluas jarangan perangkat, karena setiap perangkat baru yang ingin terhubung perlu melakukan instalasi manual. Sedangkan dengan IoT yang menawarkan skalabilitas tanpa batas maka dapat memungkinkan untuk menambah perangkat sebanyak mungkin dengan proses instalasi yang dapat dikatakan instan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Komunikasi</span></span>
            
            <p>IoT dapat mencakup lebih dari sekadar komunikasi antar perangkat. IoT melibatkan komunikasi antara perangkat dengan cloud computing, aplikasi, dan juga interaksi manusia. Sementara itu, M2M terfokus pada komunikasi langsung antara perangkat tanpa melibatkan interaksi manusia.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Fleksibilitas</span></span>
            
            <p>IoT umumnya lebih fleksibel dan dapat digunakan dalam berbagai konteks dan skala. Sementara M2M memiliki fokus yang lebih spesifik pada komunikasi antara perangkat dalam suatu sistem atau lingkungan yang lebih terbatas.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-keuntungan-penerapan-cloud-computing',
              'type' => 'article',
              'title' => '3 Keuntungan Penerapan Cloud Computing',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-8.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'August 10, 2023',
              'content' => "
            
            <p>Cloud computing adalah model pengelolaan dan penyediaan layanan komputasi melalui internet. Dalam cloud computing, sumber daya komputasi seperti penyimpanan data, server, jaringan, perangkat lunak, dan layanan lainnya disediakan dan diakses melalui jaringan internet, yang disebut “cloud”.</p>
            <p>Pengguna atau organisasi dapat mengakses dan menggunakan sumber daya ini sesuai kebutuhan mereka, tanpa perlu memiliki infrastruktur fisik atau perangkat keras sendiri. Cloud computing telah mengubah cara perusahaan dan individu mengakses dan menggunakan sumber daya komputasi.</p>
            <p>Dengan Teknologi yang biasa diterjemahkan sebagai komputasi awan ini, data dan program bisa disimpan dan diakses melalui internet dari perangkat gadget apapun dan berlokasi di manapun. Berikut 3 keuntungan penerapan cloud computing yang perlu diketahui :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kinerja Tinggi</span></span>
            
            <p>Penyedia layanan cloud biasanya memiliki infrastruktur yang kuat dan tersedia secara global. Ini berarti pengguna dapat mengakses sumber daya komputasi dengan kinerja yang tinggi, tanpa perlu khawatir tentang batasan geografis atau kecepatan akses. Infrastruktur cloud juga dapat secara otomatis mengatur beban kerja dan merespons lonjakan lalu lintas, memastikan ketersediaan dan kinerja yang optimal.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Keamanan</span></span>
            
            <p>Dengan menggunakan layanan cloud, pengguna dapat dengan mudah mendapatkan akses ke pembaruan perangkat lunak terbaru dan pembaruan keamanan. Penyedia layanan cloud bertanggung jawab untuk memastikan bahwa infrastruktur mereka aman dan diperbarui secara teratur, membebaskan pengguna dari beban pemeliharaan dan pembaruan manual yang rumit.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Berbagi Sumber Daya</span></span>
            
            <p>Dalam infrastruktur cloud, penyedia layanan menyediakan server fisik, jaringan, dan perangkat keras lainnya yang dapat digunakan oleh banyak pengguna. Sumber daya ini dapat digunakan secara bersamaan oleh banyak pengguna yang terhubung ke cloud. Dengan demikian, beban kerja dan kapasitas komputasi dapat dibagi secara efisien di antara pengguna yang berbeda.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-fungsi-utama-otomasi-dalam-manufaktur',
              'type' => 'article',
              'title' => '4 Fungsi Utama Otomasi Dalam Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-7.png',
              'tags' => 'industri 4.0,Internet of Things,IoT',
              'date' => 'August 9, 2023',
              'content' => "
            
            <p>Industri manufaktur merupakan sebuah industri yang sangat oenting karena menyediakan beragam kebutuhan mnausia. Maka dari itulah diperlukan standarisasi pada produksi yang dihasilkan, baik secara nasional maupun internasional.</p>
            <p>Dengan adanya standar tersebut maka dapat membuat alat otomasi yang digunakan dapat dimanfaatkan sebagaimana mestinya dan tidak memimbulkan celaka bagi orang yang mengunkannya.</p>
            <p>Dengan adanya alat otomasi membuat sebuah kualitas produksi manufaktur menjadi meningkat. Hal tersebut dapat terjadi karena berkurangnya tenaga manusia dan mengandalkan mesin yang berjalan secara otomatis. Berikut 3 fungsi utama otomasi dalam sebuah industri manufaktur :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi</span></span>
            
            <p>Sistem otomatisasi dapat melakukan tugas-tugas yang berulang dengan kecepatan dan akurasi yang jauh melebihi kemampuan manusia. Ini mengurangi waktu yang diperlukan untuk menyelesaikan proses produksi dan meningkatkan output produksi secara keseluruhan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Daya Saing</span></span>
            
            <p>Dengan memanfaatkan automasi, perusahaan dapat memproduksi lebih cepat, lebih murah, dan dengan kualitas yang lebih baik. Ini meningkatkan daya saing mereka dalam pasar global yang kompetitif.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kualitas</span></span>
            
            <p>Automasi mengurangi risiko kesalahan manusia yang dapat memengaruhi kualitas produk. Peralatan otomatis dapat melakukan tugas – tugas dengan akurasi yang konsisten, menghasilkan produk dengan kualitas yang lebih baik dan lebih seragam.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Fleksibilitas</span></span>
            
            <p>Sistem otomatisasi yang dapat diprogram ulang atau diatur dengan cepat memungkinkan perubahan produk atau konfigurasi produksi dengan lebih mudah. Ini memungkinkan perusahaan untuk merespons perubahan permintaan pasar lebih cepat.</p>
            <p>Dalam keseluruhan, automasi memiliki potensi besar untuk mengubah lanskap industri manufaktur, membuatnya lebih efisien, inovatif, dan adaptif terhadap perubahan pasar. Dengan demikian maka dapat dikatakan bahwa otomasi sangat berperan dalam beberapa industri salah satunya adalah industri manufaktur.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'iot-pentingnya-edge-computing-dalam-industri-bisnis',
              'type' => 'article',
              'title' => 'IoT : Pentingnya Edge Computing Dalam Industri Bisnis',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-6.png',
              'tags' => 'industri 4.0,IoT',
              'date' => 'August 8, 2023',
              'content' => "
            
            <p>Mulai banyak perusahaan yang merubah distribusi operasional bisnis mereka ke edge, yang memberikan manfaat untuk merubah aset, pelanggan serta karyawan menjadi lebih dekat dan dapat berhubungan secara digital.</p>
            <p>Edge computing adalah proses distribusi yang membawa data menjadi lebih dekat ke lokasi yang membutuhkan data tersebut, dengan edge computing proses dan analisis data dilakukan secara local dalam perangkat yang biasanya menghasilkan data.</p>
            <p>Edge computing dan Internet of Things (IoT) saling terkait erat dan sering digunakan bersama-sama untuk mengoptimalkan pengumpulan dan pemrosesan data dalam lingkungan yang terdistribusi. Dengan demikian maka edge computing memiliki peranan penting dalam industri bisnis seperti berikut :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Rantai Pasok</span></span>
            
            <p>Dalam industri manufaktur dan logistik, edge computing dapat digunakan untuk mengoptimalkan pengelolaan rantai pasokan. Data yang dihasilkan oleh sensor dan perangkat IoT di seluruh rantai pasokan dapat diproses secara lokal di tepi jaringan untuk memantau inventaris, melacak pengiriman, dan memprediksi kebutuhan persediaan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengolahan Data</span></span>
            
            <p>Pada beberapa kasus, seperti di lingkungan yang terpencil atau dengan koneksi jaringan yang terbatas, edge computing memungkinkan perusahaan untuk memproses data di tempat sumbernya. Perusahaan dapat menggunakan edge computing untuk memproses data sensor pada platform tanpa mengandalkan konektivitas jaringan yang stabil atau biaya tinggi untuk mengirim data ke pusat data.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Analisis Realtime</span></span>
            
            <p>Dengan edge computing, data dapat diproses dan dianalisis secara lokal di tepi jaringan. Hal ini memungkinkan perusahaan untuk mengambil keputusan yang lebih cepat dengan menganalisis data secara real-time.</p>
            <p>Dalam industri bisnis, edge computing memberikan fleksibilitas, kecepatan, dan analisis real-time yang diperlukan untuk mengoptimalkan operasi, meningkatkan pengalaman pelanggan, dan mengurangi biaya. </p>
            <p>Dengan memproses data di tepi jaringan, perusahaan dapat memanfaatkan potensi penuh data mereka dan menghadirkan solusi yang lebih inovatif dan responsif dalam berbagai bidang.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-fungsi-data-mining-bagi-perusahaan',
              'type' => 'article',
              'title' => '3 Fungsi Data Mining Bagi Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-5.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'August 7, 2023',
              'content' => "
            
            <p>Penjualan yang meningkat tentunya menjadi keinginan setiap perusahaan, ditengah gencarnya penggunaan big data untuk mendukung bisnis. Hadirnya data mining bertujuan untuk memahami kondisi pasar dan persaingan usaha yang semakin meningkat.</p>
            <p>Data mining adalah proses menemukan pola tersembunyi atau pengetahuan yang berharga dari kumpulan data besar menggunakan metode analisis statistik, matematika, kecerdasan buatan, dan teknik lainnya. </p>
            <p>Tujuan utama dari data mining adalah untuk mengungkapkan informasi yang berguna, pola tersembunyi, keterhubungan, dan tren yang dapat membantu dalam pengambilan keputusan atau pemahaman lebih mendalam tentang data tersebut.</p>
            <p>Data mining memiliki aplikasi luas di berbagai bidang, termasuk bisnis, keuangan, kesehatan, pemasaran, ilmu sosial, dan sebagainya. Dengan menggali wawasan dari data yang ada, data mining dapat membantu dalam pengambilan keputusan yang lebih baik dan memberikan keunggulan kompetitif bagi perusahaan.</p>
            <p>Berikut 3 fungsi utama data mining yang perlu diketahui :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Quality Control</span></span>
            
            <p>Quality control adalah proses untuk memastikan bahwa produk atau layanan memenuhi standar kualitas yang ditetapkan. Data mining dapat digunakan dalam quality control untuk menganalisis data produksi, mengidentifikasi pola, dan mengambil tindakan yang diperlukan untuk meningkatkan kualitas.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Segmentasi Pelanggan</span></span>
            
            <p>Data mining dapat membantu dalam segmentasi pelanggan berdasarkan atribut dan perilaku mereka. Dengan menganalisis data pelanggan yang tersedia, seperti riwayat pembelian, preferensi, atau respons terhadap kampanye pemasaran, perusahaan dapat mengidentifikasi kelompok pelanggan yang memiliki karakteristik serupa.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Optimalisasi Harga</span></span>
            
            <p>Data mining dapat membantu perusahaan dalam menentukan harga yang optimal untuk produk atau layanan mereka. Dengan menganalisis data pasar, perilaku konsumen, dan informasi kompetitif, perusahaan dapat mengidentifikasi faktor-faktor yang mempengaruhi harga dan menentukan strategi penetapan harga yang efisien untuk meningkatkan keuntungan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ini-dia-tujuan-utama-data-science-pada-manufaktur',
              'type' => 'article',
              'title' => 'Ini Dia Tujuan Utama Data Science Pada Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-4.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'August 4, 2023',
              'content' => "
            
            <p>Seiring dengan berkembangnya manufaktur di Indonesia menjadikan manufaktur Indonesia sebagai peringkat kelima terbesar di Asia tenggara, hal tersebut tentu menjadikan manufaktur Indonesia memiliki daya saing yang kuat antar satu dengan yang lainnya.</p>
            <p>Dengan begitu maka manufaktur perlu mengadopsi beberapa konsep maupun metode yang dapat meningkatkan nilai jual serta daya saingnya, salah satunya adalah dengan mengadopsi data science.</p>
            <p>Data science adalah bidang interdisipliner yang menggabungkan metode ilmiah, statistik, dan pengolahan data untuk memahami dan menganalisis data dengan tujuan mendapatkan wawasan yang berharga dan mendukung pengambilan keputusan.</p>
            <p>Data science melibatkan penggunaan teknik analisis data, pemodelan statistik, pemrosesan bahasa alami, dan pembelajaran mesin untuk mengeksplorasi, menginterpretasikan, dan mengungkap pola, tren, dan pengetahuan baru yang terkandung dalam data. Berikut tujuan utama penggunaan data science pada manufaktur :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Profit Meningkat</span></span>
            
            <p>Peningkatan profit dengan menggunakan data science melibatkan penerapan analisis data dan teknik pemodelan statistik untuk mengoptimalkan strategi bisnis, meningkatkan efisiensi operasional, dan mengidentifikasi peluang yang dapat meningkatkan pendapatan dan mengurangi biaya. </p>
            <p>Dengan menggunakan pendekatan berbasis data ini, perusahaan dapat meningkatkan profitabilitas dan mencapai keunggulan kompetitif di pasar.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menghindari Downtime</span></span>
            
            <p>Data science dapat membantu perusahaan menghindari downtime, yang merujuk pada periode ketika sistem atau layanan tidak tersedia atau tidak berfungsi. </p>
            <p>Downtime dapat menyebabkan kerugian finansial, penurunan produktivitas, dan ketidakpuasan pelanggan. Melalui penerapan data science dalam pemantauan, prediksi, perencanaan, dan pengoptimalan, perusahaan dapat menghindari downtime yang merugikan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kolaborasi</span></span>
            
            <p>Penggabungan AI (Artificial Intelligence) dan machine learning dengan data science dapat memberikan manfaat yang signifikan dalam mengoptimalkan proses bisnis. </p>
            <p>Serta membuka peluang besar dalam mengoptimalkan proses bisnis, meningkatkan efisiensi operasional, dan memberikan nilai tambah bagi perusahaan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-dampak-buruk-penerapan-inventory-management-yang-salah',
              'type' => 'article',
              'title' => '3 Dampak Buruk Penerapan Inventory Management yang Salah',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-3.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'August 3, 2023',
              'content' => "
            
            <p>Inventory management adalah proses pengelolaan dan pengendalian persediaan barang atau produk yang dimiliki oleh suatu perusahaan atau entitas. </p>
            <p>Tujuannya adalah untuk memastikan ketersediaan stok yang cukup untuk memenuhi permintaan pelanggan, sambil menghindari biaya yang tidak perlu terkait dengan persediaan berlebihan atau kekurangan persediaan.</p>
            <p>Dalam inventori, tujuan dari penyimpanan barang-barang tersebut memilki tujuan yang berbeda-beda, tergantung dari skala bisnis dan kebujakan masing-masing manajemen. Inventori sendiri diartikan sebagai persediaan bahan atau barang yang disimpan untuk memenuhi kebutuhan produksi bisnis ataupun untuk langsung dijual kembali.</p>
            <p>Berikut 3 dampak buruk dari kesalahan pada penerapan inventory management :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Missed Sales</span></span>
            
            <p>“Misssed sales” adalah istilah yang digunakan untuk menggambarkan penjualan yang tidak tercapai atau hilang. Missed sales dapat memiliki dampak negatif pada bisnis, termasuk penurunan pendapatan, keuntungan yang lebih rendah, dan potensi kehilangan pangsa pasar. Untuk mengatasi missed sales, perusahaan sering kali menganalisis penyebabnya dan mengambil tindakan perbaikan, seperti memperbaiki strategi pemasaran dan penjualan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Overstocking</span></span>
            
            <p>Overstocking, atau juga dikenal sebagai “kelebihan persediaan,” terjadi ketika suatu perusahaan memiliki jumlah barang atau inventaris yang melebihi permintaan atau kebutuhan pasar. Untuk menghindari overstocking, perusahaan perlu memiliki sistem perencanaan persediaan yang efektif, memantau permintaan pasar dengan cermat, dan melakukan analisis risiko dan permintaan yang tepat sebelum membuat keputusan pembelian atau produksi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Arus Kas</span></span>
            
            <p>Arus kas yang tidak pasti mengacu pada situasi di mana perusahaan menghadapi ketidakpastian atau fluktuasi dalam penerimaan atau pengeluaran kas mereka di masa depan. Dalam situasi arus kas yang tidak pasti, penting bagi perusahaan untuk tetap fleksibel, mengikuti tren pasar, dan mengambil langkah-langkah proaktif untuk mengelola risiko keuangan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'big-data-keuntungan-dari-penerapan-data-visualization',
              'type' => 'article',
              'title' => 'Big Data : Keuntungan Dari Penerapan Data Visualization',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image-2.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'August 2, 2023',
              'content' => "
            
            <p>Pada era big data seperti saat ini, kebutuhan tentang visualisasi data tentunya menjadi hal yang tidak bisa dihindarkan karena dengan memvisualisasikan data yang dimiliki maka akan mempermudah untuk mendapatkan insight dari data tersebut.</p>
            <p>Data visualization adalah proses mewakili data secara visual menggunakan grafik, diagram, peta, atau elemen visual lainnya. Tujuan dari data visualization adalah untuk menyajikan data secara visual dengan cara yang mudah dipahami dan menarik, sehingga memungkinkan pengguna untuk memahami pola, tren, dan hubungan yang terkait dengan data dengan lebih baik.</p>
            <p>Data visualization membantu dalam mengubah data mentah menjadi informasi yang berarti dan dapat digunakan untuk pengambilan keputusan. Dengan menggunakan elemen visual seperti grafik garis, grafik batang, diagram lingkaran, atau peta dan data visualization memungkinkan pengguna untuk melihat pola perubahan.  Berikut keuntungan yang didapatkan dari penerapan data visualization :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemahaman Lebih cepat</span></span>
            
            <p>Visual data memungkinkan pengguna untuk memahami informasi dengan lebih cepat dan efisien dibandingkan dengan presentasi data dalam bentuk tabel atau angka mentah. Grafik dan diagram membantu mengkomunikasikan pesan dengan jelas dan langsung, sehingga memudahkan pemahaman dan interpretasi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Komunikasi Efektif</span></span>
            
            <p>Visualisasi data menyajikan informasi dengan cara yang menarik dan mudah dipahami. Grafik dan elemen visual lainnya memungkinkan komunikasi yang lebih efektif dengan audiens, baik itu rekan kerja, pemangku kepentingan, atau pelanggan. Informasi yang disampaikan melalui visualisasi dapat dengan cepat dan jelas dipahami oleh orang lain.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Nilai Produk Meningkat</span></span>
            
            <p>Visualisasi data dapat digunakan untuk menggambarkan kinerja produk dalam bentuk yang mudah dimengerti oleh pelanggan. Misalnya, grafik atau diagram dapat menunjukkan kenaikan penjualan, kepuasan pelanggan, atau tingkat keberhasilan dalam mencapai tujuan bisnis.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-cara-optimalkan-asset-tracking-dengan-rfid',
              'type' => 'article',
              'title' => '3 Cara Optimalkan Asset Tracking Dengan RFID',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/08/image.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'August 1, 2023',
              'content' => "
            
            <p>Asset tracking dengan RFID (Radio-Frequency Identification) adalah salah satu aplikasi utama dari teknologi RFID. Dalam penggunaan ini, tag RFID dipasang pada aset perusahaan untuk memantau dan melacak pergerakan serta lokasi aset tersebut.</p>
            <p>Sistem pembaca RFID tidak memerlukan kontak langsung seperti sistem Barcode. RFID memiliki keunggulan dibandingkan dengan penggunaan barcode, Label RFID dapat dibaca jika pada jarak tertentu oleh RFID Reader, bahkan jika label tertutup oleh objek atau tidak terlihat.</p>
            <p>Label RFID dapat membaca ratusan pada satu waktu, sedangkan Barcode hanya dapat dibaca satu per satu dan Label RFID berisi informasi yang disimpan secara elektronik dan dapat dibaca hingga beberapa meter jauhnya.Berikut 3 cara optimalkan asset tracking dengan RFID :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Integrasi</span></span>
            
            <p>Mengintegrasikan data dari sistem asset tracking RFID ke dalam sistem manajemen aset perusahaan. Pastikan data yang tercatat dalam sistem RFID terhubung dengan sistem manajemen aset yang ada. Ini akan memungkinkan visibilitas yang komprehensif dan memastikan bahwa data asset tracking dapat digunakan secara efektif dalam pengambilan keputusan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pelatihan</span></span>
            
            <p>Berikan pelatihan kepada karyawan yang terlibat dalam penggunaan dan pemantauan sistem asset tracking RFID. Ajarkan mereka bagaimana menggunakan pembaca RFID dengan benar, membaca data yang diperoleh, dan memahami informasi yang dihasilkan oleh sistem. Tingkatkan kesadaran karyawan akan pentingnya penggunaan sistem asset tracking dengan RFID dan manfaat yang dapat diperoleh darinya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Perencanaan</span></span>
            
            <p>Mulailah dengan merencanakan dan memetakan dengan baik sistem asset tracking menggunakan RFID. Identifikasi aset apa yang akan dilacak dan tentukan lokasi strategis untuk pemasangan pembaca RFID. Rencanakan juga bagaimana data akan dikelola dan digunakan dalam sistem manajemen aset perusahaan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'tpm-3-indikator-utama-perhitungan-oee-pada-manufaktur',
              'type' => 'article',
              'title' => 'TPM : 3 Indikator Utama Perhitungan OEE Pada Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-17.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'July 27, 2023',
              'content' => "
            
            <p>Overall Equipment Effectiveness (OEE) merupakan sebuah standarisasi untuk mengukur produktivitas manufaktur, dengan mengukur OEE perusahaan akan mendapatkan insights penting dalam perbaikan proses produksi. </p>
            <p>OEE juga dapat dikatakan sebagai suatu metode standar untuk mengukur kinerja mesin  produksi dalam penerapan TPM (Total Productive Maintenance).</p>
            <p>OEE digunakan sebagai alat pengukuran kunci dalam upaya untuk meningkatkan efisiensi operasional, mengidentifikasi penyebab utama kerugian produktivitas, dan memberikan pemahaman yang lebih baik tentang kinerja peralatan dalam suatu proses produksi.</p>
            <p>OEE juga berguna untuk memastikan kemajuan perusahaan sendiri dari wkatu ke waktu serta membandingkan kinerja produksi perusahaan dengan standar industri yang serupa.</p>
            <p>Dengan begitu maka pentik untuk menghitung berapa hasil yang didapatkan dari proses produksi, jika hasilnya ternyata dibawha modal untuk pembelian bahan baku maka dapat dikatakan bahwa manufaktur tersebut mengalami kerugian. Berikut 3 faktor utama penghitungan OEE yang perlu diperhatikan ;</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Availability</span></span>
            
            <p>Faktor ini memperhitungkan downtime yang didalamnnya terdapat kejaian yang menghentikan proses produksi terencana dalam jangka waktu yang signifikan, jika availability menunjukan skor 100% maka dapat dikatakan bahwa proses produksi berlangsung selama waktu penerapan atau dapat dikatakan tidak pernah berhenti.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Performance</span></span>
            
            <p>Faktor performance menghitung speed loss yaitu faktor yang menyebabkan melambatnya suatu proses, dimana proses tersebut berjalan dibawah kecepatan maksimumnya. Saat menunjukan skor 100% saat proesesnya berlangsung maka proses tersebut harus berlangsung secepat mungkin.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Quality</span></span>
            
            <p>Faktor Quality memperhitungkan Quality Loss, termasuk didalamnya perhitungan produk terproduksi yang tidak memenuhi standar kualitas, dan produk yang membutuhkan rework. Skor 100% dari quality artinya tidak ada kerusakan (Defects) dan mesin mampu memproduksi hasil yang terbaik. </p>
            <p>OEE dihitung dengan mengalikan nilai-nilai ketersediaan, kinerja, dan kualitas. Biasanya, OEE dinyatakan dalam persentase, di mana nilai 100% menunjukkan bahwa peralatan atau mesin tersebut beroperasi secara sempurna dan menghasilkan produk berkualitas dengan kecepatan yang optimal.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'penting-manufaktur-perlu-terapkan-artificial-intelligence',
              'type' => 'article',
              'title' => 'Penting! Manufaktur Perlu Terapkan Artificial Intelligence',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-16.png',
              'tags' => 'industri 4.0',
              'date' => 'July 26, 2023',
              'content' => "
            
            <p>Artificial Intelligence (AI) atau kecerdasan buatan adalah bidang ilmu komputer yang bertujuan untuk menciptakan komputer atau sistem komputasi yang mampu meniru perilaku manusia atau memiliki kemampuan yang mirip dengan pikiran manusia.</p>
            <p>Pengembangan AI telah menyentuh berbagai bidang, termasuk transportasi otomatis, sistem rekomendasi, pelayanan kesehatan, keamanan siber, dan banyak lagi.</p>
            <p>Dalam manufaktur penggunaan AI dalam manufaktur bertujuan untuk meningkatkan efisiensi produksi, mengoptimalkan proses, mengurangi biaya, dan meningkatkan kualitas produk. Berikut 3 alasan penting penggunaan AI dalam manufaktur yang perlu diperhatikan :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Prediksi Permintaan (Demand Forecasting) : AI menggunakan data historis dan faktor-faktor eksternal seperti cuaca, tren pasar, atau peristiwa khusus untuk memprediksi permintaan produk di masa mendatang, membantu perusahaan manufaktur dalam merencanakan produksi dan persediaan dengan lebih efektif.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kualitas dan Inspeksi : AI dapat digunakan untuk memeriksa dan mengidentifikasi cacat atau ketidaksesuaian pada produk secara otomatis melalui analisis gambar dan teknologi penglihatan komputer. Dengan demikian, meningkatkan tingkat keakuratan dan konsistensi inspeksi.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Prediksi Perawatan (Predictive Maintenance) : AI dapat digunakan untuk memprediksi kegagalan peralatan atau mesin di pabrik sebelum terjadi kerusakan yang serius. Dengan menganalisis data sensor dan performa mesin secara real-time, AI dapat memberikan peringatan dini, memungkinkan perawatan preventif, dan menghindari kerugian akibat downtime produksi yang tidak terduga.</span></span>
            
            <p>Dengan penggunaan AI dalam manufaktur, perusahaan dapat meningkatkan efisiensi produksi, mengurangi biaya operasional, meningkatkan kualitas produk, dan merespons perubahan pasar dengan lebih cepat dan tepat. Namun, penerapan AI dalam manufaktur juga memerlukan integrasi teknologi yang cermat, pelatihan karyawan, dan kebijakan keamanan yang tepat agar dapat berjalan dengan sukses.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-metode-penting-dalam-inventory-management',
              'type' => 'article',
              'title' => '4 Metode Penting Dalam Inventory Management',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-15.png',
              'tags' => 'industri 4.0',
              'date' => 'July 25, 2023',
              'content' => "
            
            <p>Inventory management adalah proses pengendalian dan pengelolaan persediaan barang atau produk yang dimiliki oleh suatu perusahaan. Tujuan utama dari manajemen persediaan adalah memastikan ketersediaan persediaan yang cukup untuk memenuhi permintaan pelanggan, sambil menghindari biaya yang tidak perlu terkait dengan persediaan berlebihan atau kekurangan persediaan.</p>
            <p>Dengan menerapkan praktik dan metode yang efektif dalam manajemen persediaan, perusahaan dapat mencapai tujuan yang lebih baik dalam mengoptimalkan persediaan, mengurangi biaya, meningkatkan kepuasan pelanggan, dan meningkatkan efisiensi operasional secara keseluruhan.</p>
            <p>Dalam penerapannya tentu saja inventory management memerlukan beberapa metode yang perlu dilakukan seperti berikut :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Economic Order Quantity (EOQ)</span></span>
            
            <p>Metode ini mencoba untuk menentukan kuantitas pemesanan optimal yang harus ditempatkan setiap kali persediaan mencapai titik pemesanan ulang. EOQ mempertimbangkan biaya pemesanan, biaya penyimpanan, dan tingkat permintaan untuk menentukan jumlah pesanan yang ekonomis.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Just-In-Time (JIT)</span></span>
            
            <p>Pendekatan JIT bertujuan untuk mengurangi persediaan hingga tingkat minimum yang diperlukan. Dalam metode ini, persediaan dipesan hanya saat diperlukan secara langsung oleh proses produksi atau pelanggan. Ini membantu mengurangi biaya penyimpanan dan meningkatkan efisiensi operasional.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>ABC Analysis</span></span>
            
            <p>Metode ini digunakan untuk mengelompokkan item persediaan berdasarkan tingkat nilai relatifnya. Item dengan nilai tinggi (klasifikasi A) mendapatkan perhatian lebih besar dalam pengendalian persediaan, sementara item dengan nilai rendah (klasifikasi C) mungkin tidak memerlukan pemantauan intensif.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Bulk Shipments</span></span>
            
            <p>Teknik ini didasarkan pada asumsi bahwa membeli dalam jumlah besar, maka harganya akan lebih murah. Metode ini bagus jika sebuah bisnis yakin bahwa produk mereka akan laku. Tetapi bisa saja merugi ketika permintaan konsumen tiba-tiba berubah.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'tingkat-daya-saing-perusahaan-dengan-m2m',
              'type' => 'article',
              'title' => 'Tingkat Daya Saing Perusahaan Dengan M2M',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-14.png',
              'tags' => 'industri 4.0',
              'date' => 'July 24, 2023',
              'content' => "
            
            <p>Maraknya penggunaan teknologi digital seperti kecerdasan buatan, teknologi robotic dan internet of things dapat menjadi kunci sebuah perusahaan untuk meningkatkan daya saing dengan mengadopsi teknologi tersebut.</p>
            <p>Mengadopsi teknologi yang mendukung perkembangan dan integrasi konektivitas, teknologi, informasi dan komunikasi merupakan kunci bagi bisnis untuk bertransformasi secara digital.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengertian M2M</span></span>
            
            <p>M2M merupakan sebuah metode konektivitas di mana setiap mesin yang terlibat di dalamnya mampu berkomunikasi untuk menyelesaikan suatu tugas tertentu secara otomatis.</p>
            <p>M2M atau yang biasa dikenal dengan Machine to Machine merupakan sebuah teknologi terbaru yang memanfaatkan teknologi komunikasi nirkabel berbasis cloud. Dengan menghubungkan yang satu ke mesin lainnya secara real time. M2M tersendiri sudah banyak digunakan pada perusahaan [erusahaan yang menginginkan efisiensi dalam controlling.</p>
            <p>Dalam sistem M2M, perangkat elektronik, seperti sensor, mesin, atau perangkat keras lainnya, dapat saling berkomunikasi dan bertukar informasi secara otomatis melalui jaringan komunikasi, seperti internet atau jaringan seluler.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penerapan M2M</span></span>
            
            <p>Informasi yang dikumpulkan oleh perangkat M2M dapat digunakan untuk pemantauan, pengawasan, analisis, pengambilan keputusan otomatis, atau untuk mengoptimalkan operasi yang melibatkan perangkat tersebut.</p>
            <p>Contoh penggunaan M2M dapat ditemukan dalam berbagai industri, seperti industri otomotif (misalnya, sistem telematika dalam mobil), kesehatan (misalnya, perangkat pemantauan pasien jarak jauh), energi (misalnya, pengukuran pintar dan manajemen jaringan), dan banyak lagi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>M2M Untuk Daya Saing</span></span>
            
            <p>Dengan menggunakan embedded SIM card yang mentransmisikan data secara nirkabel melalui jaringan seluler yang aman, M2M mampu melacak kendaraan dan aset untuk efisiensi dan keamanan yang lebih baik.</p>
            <p>Dengan memungkinkan semua kendaraan pengiriman, untuk terhubung secara otomatis ke sistem manajemen pusat perusahaan di mana pun mereka berada, M2M memiliki dampak besar pada rantai pasokan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-effect-positif-penggunaan-supply-chain-management',
              'type' => 'article',
              'title' => '4 Effect Positif Penggunaan Supply Chain Management',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-13.png',
              'tags' => 'industri 4.0',
              'date' => 'July 21, 2023',
              'content' => "
            
            <p>Supply chain ialah pengelolaan aliran barang, informasi serta jasa yang melibatkan koordinasi sdan kerjasama antara berbagai pihak dalam rantai pasokan untuk menghasilkan kualitas yang baik bagi pelanggan. </p>
            <p>SCM tentu saja melibatkan perencanaan, pengendalian dan pengawasan terhadap semua aktivitas yang terlibat mulai dari proses produksi sampai dengan disribusi.</p>
            <p>Tujuan utama yang ingin dicapai SCM adalah untuk mengoptimalkan kinerja dan efisiensi rantai pasok secara keseluruhan dengan cara mengintegrasikan aktivitas maupun proses mulai tahap awal hingga tahap akhir.</p>
            <p>Selain itu, perusahaan juga dapat menghubungkan semua pihak yang terlibat di dalam proses perubahan bahan baku menjadi barang jadi. Karena itulah, proses produksi maupun pendistribusian barang/jasa yang dihasilkan oleh sebuah perusahaan dapat berjalan dengan lebih efektif dan efisien. Berikut 4 effect positif penggunaan supply chain management :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menurunkan Biaya</span></span>
            
            <p>Dengan penggunaan SCM perusahaan dapat menekan biaya yang harus mereka keluarkan untuk proses tersebut, hadirnya pengintegrasian aliran produk dari sebuah perusahaan kepada para konsumen dapat mengurangi biaya yang harus dikeluarkan pada jalur produksi dan juga distribusi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemanfaatan Aset</span></span>
            
            <p>Dalam menerapkan manajemen rantai pasokan, teknologi memiliki peran yang cukup penting. Dengan adanya teknologi yang terdapat pada manajemen rantai pasokan tersebut, perusahaan dituntut untuk meningkatkan kinerja para karyawanya.</p>
            <p>Karyawan sebagai salah satu aset terbesar dalam perusahaan tentu saja akan berusaha meningkatkan keterampilan dan juga pengetahuannya agar dapat menerapkan manajemen rantai pasokan dengan maksimal.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kepuasan Pelanggan</span></span>
            
            <p>Penggunaan supply chain dapat membuat perusahaan dengan mudah memberikan rasa puas terhadap para pelanggannya. Pelanggan meerupakan target utama sebuah perusahaan dalam aktivitas produksi karena mereka ialah pihak yang akan membeli dan menggunakan barang maupun jasa yang dihasilkan perusahaan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningkatkan Pendapatan</span></span>
            
            <p>Semakin banyak konsumen yang setia untuk menggunakan barang/jasa sebuah perusahaan dalam jangka waktu yang lama, semakin besar pula peluang perusahaan tersebut untuk meningkatkan pendapatannya. Barang-barang yang dihasilkan oleh perusahaan tersebut juga tidak akan terbuang sia-sia setelah di produksi karena barang itu diminati dan juga dipakai oleh para konsumen.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'terapkan-lean-tpm-agar-lingkungan-kerja-lebih-produktif',
              'type' => 'article',
              'title' => 'Terapkan Lean TPM Agar Lingkungan Kerja Lebih Produktif',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-12.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'July 20, 2023',
              'content' => "
            
            <p>TPM adalah sebuah buadaya kerja khususnya di bidang manufacturing dan operasional, makna TPM jauh lebih luas daripada sebuah kegiatan pemeliharaan atau operasional produksi manufacturing. </p>
            <p>Total Productive Maintenance (TPM) adalah suatu pendekatan manajemen yang bertujuan untuk memelihara dan meningkatkan kinerja mesin dan peralatan produksi agar tetap dalam kondisi yang optimal.</p>
            <p>Pendekatan ini melibatkan semua tingkat organisasi, termasuk manajemen, operator, dan perawatan teknis, dalam upaya menjaga dan meningkatkan efisiensi dan kualitas operasional. TPM berfungsi sebagai pemelihara peralatan agar selalu dalam keadaan maupun kondisi prima, untuk memenuhi kebutuhan tersebut maka diperlukan maintenance yang teratur.</p>
            <p>Dalam penerapannya TPM tentunya memerlukan partisipasi dari seluruh unit produksi dan maintenance agar dapat bekerja sama dengan tujuan untuk mencapai goals yang telah dibicarakan. Penerapan TPM tentunya memerlukan beberapa langkah seperti dibawah ini :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Perawatan otonom</span></span>
            
            <p>Libatkan operator dalam perawatan otonom, di mana mereka bertanggung jawab untuk memeriksa, membersihkan, dan merawat peralatan mereka sehari-hari. Berikan pelatihan kepada operator mengenai tanda-tanda awal kerusakan dan bagaimana melakukan perawatan dasar. Ini membantu mengidentifikasi masalah sejak dini dan menghindari kerusakan lebih lanjut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Analisis akar masalah</span></span>
            
            <p>Saat terjadi kerusakan atau masalah pada peralatan, lakukan analisis akar penyebab masalah (root cause analysis) untuk menemukan sumber masalah tersebut. Dengan mengetahui akar penyebabnya, Anda dapat mengambil langkah-langkah pencegahan yang tepat untuk mencegah masalah serupa di masa depan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Monitoring kinerja</span></span>
            
            <p>Gunakan indikator kinerja kunci (Key Performance Indicators/KPIs) untuk mengukur dan memantau kinerja peralatan. Monitor waktu henti, waktu pemulihan, biaya perawatan, dan metrik lain yang relevan untuk mengidentifikasi area yang memerlukan perbaikan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemeliharaan preventif</span></span>
            
            <p>Rancang dan terapkan jadwal perawatan preventif untuk setiap peralatan kritis. Perawatan preventif melibatkan pemeriksaan rutin, pembersihan, pelumasan, dan penggantian komponen yang haus.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-cara-hilangkan-waste-dengan-lean-manufacturing',
              'type' => 'article',
              'title' => '4 Cara Hilangkan Waste Dengan Lean Manufacturing',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-11.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'July 18, 2023',
              'content' => "
            
            <p>Perkembangan yang terus menerus terjadi menyebabkan banyaknya muncul inovasi baru dalam dunia industri, dengan begitu perusahaan perlu memperhatikan kondisi internal seperti sumber daya, biaya serta waktu yang dibutuhkan dalam sebuah produksi.</p>
            <p>Lean manufacturing merupakan suatu solusi maupun inovasi yang mempertimbangkan segala pengeluaran sumber daya yang ada untuk mendapatkan nilai ekonomis terhadap pelanggan.</p>
            <p>Prinsip utama lean manufacturing adalah mengidentifikasi dan mengurangi pemborosan dalam proses produksi. Pemborosan ini dapat berupa waktu yang tidak produktif, kelebihan inventaris, pergerakan yang tidak perlu, perbaikan yang terlalu sering, atau cacat produk.</p>
            <p>Dengan menghilangkan pemborosan, perusahaan dapat meningkatkan produktivitas, mengurangi biaya produksi, dan memberikan nilai tambah yang lebih tinggi kepada pelanggan. Berikut prinsip dan teknik dalam lean manufacturing yang beretujuan untuk mengurangi waste :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Just in Time</span></span>
            
            <p>Dalam sistem JIT, produksi dimulai hanya ketika ada permintaan aktual dari pelanggan. Ini berarti bahwa tidak ada inventaris yang besar atau stok cadangan yang dijaga. Pemasok juga diminta untuk memberikan komponen atau bahan mentah tepat waktu agar proses produksi dapat berjalan lancar.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Sistem 5S</span></span>
            
            <p>5S merupakan metode pengorganisasian yang terdiri dari lima kata dalam bahasa Jepang. Lima kata tersebut merupakan lima langkah untuk mengurangi pemborosan dan meningkatkan produktivitas, yakni Seiri, Seiton, Seiso, Seiketsu, dan Shitsuke.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kaizen</span></span>
            
            <p>Prinsip dasar dari Kaizen adalah bahwa perbaikan kecil yang berkelanjutan dalam proses dan praktik kerja akan menghasilkan peningkatan keseluruhan yang signifikan. Ini melibatkan partisipasi semua anggota tim, dari pekerja hingga manajemen, dalam mengidentifikasi dan mengimplementasikan perubahan yang lebih baik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kanban</span></span>
            
            <p>Teknik Kanban membantu menyisihkan persediaan dan pemborosan produksi berlebih. Hal ini dilakukan dengan menerapkan metode untuk mengatur aliran barang di dalam dan di luar tempat produksi. Metode Kanban bergantung pada sinyal visual untuk membantu pekerja mengontrol barang persediaan. Kartu Kanban biasanya ditempatkan di area yang mudah terlihat.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'realtime-big-data-untuk-smart-factory',
              'type' => 'article',
              'title' => 'Realtime Big Data Untuk Smart Factory',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-10.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'July 17, 2023',
              'content' => "
            
            <p>Industri 4.0 mendorong para pelaku bisnis dan tim untuk tetap mengikuti perkembangan teknologi-teknologi yang mendukung produksi dan penjualan. </p>
            <p>Semakin lambat perusahaan menghadapi tantangan ini, semakin kecil pula peluang untuk bisa bersaing dengan kompetitor yang sudah mempersiapkan bisnisnya menghadapi industry 4.0 yang terus menerus berkembang.</p>
            <p>Industri 4.0 merupakan penyempurnaan kolaborasi industri dengan proses tradisional dengan teknologi-teknologi terbarukan. Teknologi-teknologi tersebut seperti, Internet of Thinks (IoT), Artificial Intelligence (AI),</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Smart Factory</span></span>
            
            <p>Smart Factory merupakan inti dari Industri 4.0. Di mana, alur data dalam big data berjalan dengan lebih stabil, baik dari operasional maupun pusat produksi yang menjadi penggerak bisnis. Smart Factory memiliki kelebihan di mana perusahaan dapat melakukan prediksi dengan cepat, tentu mengelola data dengan bantuan AI adalah hal yang sangat mudah.</p>
            <p>Istilah Smart Factory menggambarkan lingkungan lantai produksi di mana mesin dan peralatan dapat meningkatkan proses melalui otomatisasi dan optimalisasi diri. Manfaatnya juga melampaui kualitas fisik barang, tapi juga kualitas pada hal lainnya, yakni perencanaan, logistik rantai pasokan, dan bahkan pengembangan produk.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Realtime Big Data</span></span>
            
            <p>Sebuah industri dapat mengimplementasikan Industri 4.0 dengan membangun smart factory di dalam pabrik. Hal ini dapat dimulai dengan membuat visualisasi atau menampilkan data manufaktur, seperti data ketersediaan mesin, data kinerja mesin, dan data kualitas produk yang dikumpulkan secara real-time dari mesin, lini produksi, hingga keseluruhan pabrik. </p>
            <p>Data yang ditampilkan dapat dimonitor secara real-time, sehingga manajer dapat mengolah dan menganalisa data tersebut secara real-time untuk mengoptimalkan produktivitas pada pabrik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Manfaat Realtime</span></span>
            
            <p>Untuk perusahaan, solusi realtime big data ini dapat digunakan untuk berbagai kebutuhan seperti untuk meningkatkan alur kerja, menyeleraskan strategi pemasaran dan penjualan, memahami perilaku pelanggan, menetapkan prosedur keuangan, dan masih banyak lagi. Solusi ini banyak dimanfaatkan untuk case tertentu yang berkaitan dengan Big Data.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-peran-iot-cloud-computing-untuk-perusahaan',
              'type' => 'article',
              'title' => '3 Peran IoT Cloud Computing Untuk Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-9.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'July 14, 2023',
              'content' => "
            
            <p>Pada era revolusi industri 4.0 mengharuskan seluruh sektor untuk segera beralih menggunakan teknologi, semua perusahaan yang ada saat ini perlu mulai untuk beradaptasi agar tetap mampu bersaing dengan competitor yang ada.</p>
            <p>Salah satu solusinya adalah dengan memanfaatkan teknologi yang ada, seperti Cloud Computing. Cloud Computing ini bukan hanya solusi yang trendi dan inovatif, namun juga model bisnis yang relatif baru yang berlaku untuk semua jenis perusahaan, baik perusahaan besar maupun kecil.</p>
            <p>Keuntungan cloud computing meliputi kemampuan untuk mengakses sumber daya komputasi secara elastis sesuai kebutuhan, skalabilitas yang mudah, biaya operasional yang lebih rendah karena tidak ada keharusan untuk mengelola infrastruktur sendiri, dan kemampuan untuk mengakses data dan aplikasi dari mana saja dengan koneksi internet.</p>
            <p>Berikut 3 peran cloud computing dalam perusahaan :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Hemat Biaya</span></span>
            
            <p>Salah satu alasan terbesar perusahaan memilih beralih ke cloud adalah karena cloud dapat menghemat biaya. Penggunaan cloud computing menghemat biaya karena untuk dialokasikan kepada perangkat keras. Cloud computing juga tidak memerlukan maintenance dan mengurangi pemakaian listrik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Fleksibel</span></span>
            
            <p>Ketika data yang dimiliki terlalu besar ukurannya, maka cloud secara otomatis dapat menambah kapasitasnya hanya dalam hitungan menit dengan melakukan self-provisioning. Karena hal tersebut perusahaan tidak perlu melakukan penambahan jumlah komputer. </p>
            <p>Selain itu, karena terdapat data yang tersimpan di dalam server pada internet, maka akan mudah bagi pengguna untuk mengakses data di manapun dan kapanpun asal komputer atau PC mereka terhubung dengan koneksi internet. </p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi</span></span>
            
            <p>Apabila bisnis membutuhkan lebih banyak RAM, ruang hard drive atau pun CPU, masing-masing bisa ditambahkan dengan cepat. Pengguna tidak perlu membeli RAM baru, tetapi cukup meminta pada cloud provider untuk menambah atau memperbarui beberapa Gigabyte saja. Selebihnya, pengguna bisa mengurangi atau downgrade RAM ke spesifikasi semula.  </p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'pentingnya-rfid-middleware-berikut-3-manfaatnya',
              'type' => 'article',
              'title' => 'Pentingnya RFID Middleware, Berikut 3 Manfaatnya!',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-8.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'July 13, 2023',
              'content' => "
            
            <p>Middleware adalah lapisan perangkat lunak yang dibuat untuk menghubungkan komponen lain secara bersamaan seperti komponen perangkat keras, program perangkat lunak, aplikasi perusahaan, database dan lain sebagainya.</p>
            <p>Middleware memberi pengembang perangkat lunak kemampuan untuk berkomunikasi dan mengelola data di seluruh sistem, bukan pada setiap aplikasi individu. Middleware RFID lebih dari sekadar menghubungkan perangkat melainkan dapat memungkinkan pengguna untuk mengumpulkan, memanipulasi, dan menyebarkan data dengan mudah.</p>
            <p>Inti dari adanya RFID Middleware adalah menghubungkan komunikasi dari dua buah RFID reader supaya data yang diterima dapat diterima dengan benar dan dapat diteruskan pada aplikasi yang lain. </p>
            <p>Dengan adanya perancangan RFID Middleware ini diharapkan dapat merealisasikan pertukaran data dari beberapa perangkat RFID reader pada waktu yang bersamaan serta memaksimalkan teknologi agar lebih efisien dan skalabilitas dalam implementasinya. Berikut 3 manfaat RFID middleware :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Sruktur Data</span></span>
            
            <p>Middleware memberi pengguna kemampuan untuk memahami data apa yang mereka kumpulkan dari setiap perangkat dan memetakan struktur ke mana dan kapan data itu pergi. Middleware memfilter dan menyortir data mentah untuk memberikan informasi yang relevan kepada pengguna berdasarkan peristiwa yang terjadi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengelola Perangkat</span></span>
            
            <p>Middleware dapat mengontrol jaringan dan pengaturan pembaca RFID dan menyediakan cara sederhana untuk memperbarui setiap perubahan yang perlu dilakukan, bahkan jika ada berbagai jenis dan merek pembaca RFID di jaringan. Misalnya, middleware mungkin menyertakan fitur seperti kemampuan untuk memantau tingkat kinerja pembaca, yang memungkinkan pengguna memprediksi potensi masalah dengan lebih baik dan memastikan semua pembaca bekerja pada kinerja puncak.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Filter Data</span></span>
            
            <p>Middleware RFID dapat digunakan untuk memfilter pembacaan tag RFID yang dianggap paling penting dan menghapus pembacaan yang berlebihan atau berulang. Dalam beberapa aplikasi, item yang diberi tag RFID dibaca berulang kali oleh pembaca RFID yang sama tergantung pada berapa lama peralatan tidak bergerak di bidang baca.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-manfaat-penerapan-smart-factory',
              'type' => 'article',
              'title' => '3 Manfaat Penerapan Smart Factory',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-7.png',
              'tags' => 'industri 4.0',
              'date' => 'July 12, 2023',
              'content' => "
            
            <p>Smart Factory ialah sebuah konsep industri yang menghubungkan teknologi canggih diantaranya seperti kecerdasan buatan (AI), robotika, internet of things (IoT) serta otomatisasi yang memiliki tujuan untuk memaksimalkan proses manufaktur.</p>
            <p>Smart factory merupakan sistem yang terhubung secara real time memantau dan mengendalikan jalannya proses produksi, pengumpulan data dan pengambilan keputusan yang didasarkan analisis data untuk meningkatkan efisiensi serta kualitas.</p>
            <p>Smart factory juga memungkinkan perusahaan untuk merespons dengan cepat terhadap perubahan permintaan pasar dan mengoptimalkan penggunaan sumber daya. Tujuan utama dari smart factory adalah menciptakan sistem produksi yang cerdas, adaptif, dan efisien, yang mampu menghadapi tantangan dan peluang yang ada di era digital. Berikut 3 manfaat yang bisa didapatkan dari penerapan smart factory :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Produktivitas Meningkat</span></span>
            
            <p>            Dengan mengadopsi teknologi otomatisasi dan robotika, smart factory dapat meningkatkan produktivitas dengan mengurangi pekerjaan pada pekerja manusia. Robot dan sistem otomatis dapat bekerja secara terus-menerus dan melakukan tugas-tugas yang berulang dengan tepat dan tentunya dengan kecepatan yang tinggi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Fleksibilitas Produksi</span></span>
            
            <p>            Smart factory memiliki kemampuan untuk menyesuaikan serta mengubah jalur produksi dengan cepat sesuai permintaan pasar yang sering berubah ubah. Dengan adanya sistem yang terhubung dan terintegrasi, perubahan spesifikasi produk maupun penambahan produk baru dapat dilakukan dengan secara efisien tanpa memerlukan perubahan yang signifikan dalam infrastruktur produksi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Hemat Biaya</span></span>
            
            <p>            Meskipun investasi awal pada implementasi smart factory tinggi, tetapi jangka panjangnya dapat menghasilkan penghematan biaya yang signifikan. Efisiensi operasional yang ditingkatkan, pengurangan limbah, dan penggunaan sumber daya yang lebih baik kedepannya dapat mengurangi biaya produksi dan meningkatkan keuntungan perusahaan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-manfaat-line-balancing-untuk-industry-manufaktur',
              'type' => 'article',
              'title' => '3 Manfaat Line Balancing Untuk Industry Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-6.png',
              'tags' => 'industri 4.0',
              'date' => 'July 11, 2023',
              'content' => "
            
            <p>Line balancing adalah suatu strategi produksi yang memiliki cara dengan membagi tugas kepa sejumlah pekerja dalam bagian kerja tertentu. Dalam setiap bagian kerja tersebut tentunya memiliki tahapan yang saling terhubung satu sama lainnya. </p>
            <p>Line balancing juga dapat dikatakan sebagai metode untuk menyeimbangkan berbagai macam pekerjaan dengan cara melihat komponen dari tugas yang ada.</p>
            <p>Salah satu fungsi utama dari line balancing adalah untuk membuat pekerjaan semakin terartur serta terarah guna mempermudah proses produksi tersebut, dengan kata lain penerapan line balancing maka proses produksi akan menjadi lebih lancar. Menerapkan line balancing maka perusahaan akan mendapatkan manfaat sebagai berikut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi Waktu</span></span>
            
            <p>Waktu merupakan hal yang sangat penting dalam sebuha proses produksi, terlalu banyak membuang waktu maka kegiatan produksi akan menjadi tidak efisien dan tentunya akan menimbulkan kerugian dalam bisnis. </p>
            <p>Beberapa jenis pemborosan waktu ialah saat mesin menunggu bahan baku produksi yang dibutuhkan. Dengan penerapan line balancing dapat membantu perusahaan untuk dapat mengurangi pemborosan waktu pada saat produksi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningktakan Koordinasi</span></span>
            
            <p>Dalam kegiatan produksi yang lancar serta tanpa hambatan tentu saya disebabkan oleh koordinasi antar pekerja yang bertugas pada saat kegiatan produksi berlanngsung. Tiap pekerja dihimbau untuk tidak membuang buang waktu serta dapat beketrja dengan efisien. Line balancing dapat membuat hal tersebut semakin lebih baik lagi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menetapkan Alur Produksi</span></span>
            
            <p>Menggunakan metode line balancing jumlah stasiun kerja dapat diarahkan sehingga jauh lebih efektif. Line balancing adalah salah satu cara tepat untuk menentukan kegiatan produksi yang tepat. Dengan line balancing juga dapat dibuat ketentuan mengenai kegiatan yang akan dilakukan pada setiap stasiun kerja.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'kaizen-visual-management-untuk-mengurangi-pemborosan',
              'type' => 'article',
              'title' => 'Kaizen : Visual Management Untuk Mengurangi Pemborosan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-5.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'July 10, 2023',
              'content' => "
            
            <p>Visual Management merupakan manajemen yang berfungsi untuk membuat tempat kerja menjadi bagian yang jelas, mampu mengetahui kesehatan bisnis dalam waktu yang singkat.</p>
            <p>Visual management adalah pendekatan atau metode dalam manajemen yang menggunakan elemen visual, seperti papan tulis, grafik, simbol, atau papan pengumuman yang bertujuan untuk menyajikan informasi dengan cara yang jelas, mudah dipahami, dan mudah diakses oleh anggota tim atau pekerja. Tujuannya adalah meningkatkan pemahaman, komunikasi, dan keterlibatan seluruh tim dalam proses operasional atau proyek.</p>
            <p>Visual management membantu menciptakan lingkungan kerja yang terorganisir, transparan, dan mudah dipahami. Ini membantu dalam komunikasi yang efektif, pemantauan kinerja, identifikasi masalah atau peluang perbaikan, dan peningkatan kesadaran tim terhadap tujuan dan hasil yang diinginkan.</p>
            <p>Berikut 3 fungsi visual management dalam mnegurangi pemborosan :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Alur Produksi</span></span>
            
            <p>Sebagai yang paling mudah terlihat dalam arus produksi adalah penandaan pada lantai yang jelas untuk menunjukkan lokasi produk dan secara spesifik membagi lokasi secara jelas untuk semua komponen dalam tiap post produksi. </p>
            <p>Demikian juga bila ada WIP yang terletak di tempat yang tidak semestinya atau diletakkan di tempat tanpa lantai produksi. Hal tersebut sudah menunjukkan adanya pemborosan berupa ruang kosong yang tidak dimanfaatkan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Komunikasi</span></span>
            
            <p>Kebijakan dan tujuan perusahaan juga ditampilkan sehingga akan mudah dipahami oleh isi dalam perusahaan. Hal ini akan sangat membantu karyawan untuk mengetahui bahwa apa yang mereka kerjakan telah sesuai dengan kebijakan perusahaan.</p>
            <p>Briefing perusahaan juga harus ditampilkan dan di update sehingga akan dipahami oleh setiap orang. Selain briefing perusahaan, catatan kehadiran saat pertemuan briefing juga ikut ditampilkan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Maintenance</span></span>
            
            <p>Umumnya, manufaktur hanya menggantungkan tag pada mesin saja, namun tidak memberikan papan khusus untuk menginformasikan adanya tag pada mesin tersebut pada rekan / anggota tim lainnya. Tag ini, selain sangat berguna bagi tim maintenance, juga dapat digunakan oleh tim safety.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-kunci-keberhasilan-big-data-analytics',
              'type' => 'article',
              'title' => '3 Kunci Keberhasilan Big Data Analytics',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-4.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'July 7, 2023',
              'content' => "
            
            <p>Kumpulan data ini seringkali sangat besar dan kompleks, sehingga menjadi sulit untuk diproses menggunakan tools database management yang ada. Di sini, tentunya big data analytics memiliki peran penting untuk menganalisa data tersebut. </p>
            <p>Big data analytics adalah penggunaan teknik analitik terhadap kumpulan big data yang sangat besar dan beragam yang mencakup data terstruktur, semi-terstruktur, dan tidak terstruktur.</p>
            <p>Big Data Analytics adalah proses mengumpulan, memproses, dan analisis data dalam skala besar untuk menghasilkan wawasan yang berharga dan mendukung pengambilan keputusan yang lebih baik. </p>
            <p>Ini melibatkan penggunaan teknik-teknik statistik, matematika, machine learning, dan komputasi untuk mengidentifikasi pola, tren, dan informasi penting dalam dataset yang besar dan kompleks.</p>
            <p>Dalam penerapannya tentu saja big data analytics perlu memperhatikan beberapa unsur seperti dibawah ini agar dapat berjalan dengan lancar :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Infrastruktur</span></span>
            
            <p>Data warehouse memberikan infrastruktur data untuk analitik. Infrastruktur ini tentunya terus menerus berubah dan ditingkatkan dalam era big data dengan teknologi yang semakin baru. Penting sekali untuk menghubungkan antara infrastruktur yang lama dengan yang baru secara cepat sehingga mampu berjalan dengan baik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Tim Kompeten</span></span>
            
            <p>Memiliki tim yang kompeten dan terlatih dalam big data analytics adalah faktor penting. Tim ini harus memiliki pemahaman yang baik tentang teknik dan konsep analisis data besar, serta keterampilan dalam statistik, pemodelan data, dan pemrograman. Jika diperlukan, pertimbangkan untuk melibatkan ahli eksternal atau konsultan yang memiliki keahlian khusus dalam big data analytics.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kultur Analitis</span></span>
            
            <p>Membangun kultur analitis di seluruh organisasi adalah kunci untuk keberhasilan investasi big data analytics. Dorong penggunaan data dan analisis dalam pengambilan keputusan, berbagi wawasan dengan tim, dan meningkatkan pemahaman tentang nilai analisis data besar. Peningkatan keterampilan analitis dan kesadaran tentang pentingnya data dapat membantu menciptakan budaya yang analitis.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'iot-security-dan-segudang-manfaatnya',
              'type' => 'article',
              'title' => 'IoT Security dan Segudang Manfaatnya',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-3.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'July 6, 2023',
              'content' => "
            
            <p>Keamanan IoT adalah bagian teknologi yang berfokus pada perlindungan perangkat dan jaringan yang terhubung di internet of things (IoT). IoT melibatkan penambahan konektivitas internet ke sistem perangkat komputasi yang saling terkait, mesin mekanis dan digital, objek, hewan, dan/atau manusia.</p>
            <p>Setiap benda diberikan pengidentifikasi unik dan kemampuan untuk mentransfer data secara otomatis melalui jaringan. Mengizinkan perangkat terhubung ke internet akan membuka sejumlah kerentanan serius jika tidak dilindungi dengan benar.</p>
            <p>Keamanan tidak selalu dianggap prioritas utama selama fase  mendesain produk. Selain itu, karena IoT adalah pasar yang baru lahir, banyak perancang dan produsen produk lebih tertarik untuk memasarkan produk mereka dengan cepat, daripada mengambil langkah-langkah yang diperlukan untuk membangun keamanan sejak awal.</p>
            <p>Keamanan IoT mengacu pada metode perlindungan yang digunakan untuk mengamankan perangkat yang terhubung ke internet atau berbasis jaringan. Istilah IoT sangat luas, dan dengan teknologi yang terus berkembang, istilah ini menjadi lebih luas. Berikut beberapa manfaat IoT security :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Memantau Keamaan</span></span>
            
            <p>IoT menyediakan keamanan pintar dengan menggabungkan AI guna meningkatkan kinerja perangkat seperti kamera CCTV, lampu pintar, serta sensor api. Tujuannya tentu saja agar menciptakan keamanan cerdas IoT yakni seperti pencegahan kehilangan data, koneksi aman, dan autentikasi serta manajemen perangkat.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi</span></span>
            
            <p>Dengan memanfaatkan sensor dan perangkat terhubung dalam jaringan IoT, banyak proses dapat diotomatisasi. Misalnya, dalam industri manufaktur, mesin dan peralatan dapat dikendalikan secara otomatis berdasarkan data sensor yang diterima, mengurangi ketergantungan pada pekerja manusia dan menghindari kesalahan manusia. Hal ini dapat meningkatkan efisiensi dalam proses produksi, mengurangi waktu dan biaya, serta meningkatkan kualitas produk.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengelolaan Data</span></span>
            
            <p>Lifecycle security adalah kemampuan mengelola perangkat secara aman dan dapat dikendalikan pada level yang berbeda, mulai dari konfigurasinya, monitoringnya, dan upgrade sampai pada saat di bongkar kembali.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-kelebihan-rfid-pada-asset-tracking',
              'type' => 'article',
              'title' => '3 Kelebihan RFID Pada Asset Tracking',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-2.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'July 5, 2023',
              'content' => "
            
            <p>Perkembangan teknologi yang semain pesat tentunya akan membawa dampak pada kehidupan manusia, teknologi tersebut hadir tentunya untuk mempermudah pekerjaan maupun kehidupan manusia.</p>
            <p>RFID atau Radio Frequency Identification merupakan sebuah teknologi pengenalan otomatis yang memanfaatkan frekuensi gelombang radio. Dalam pengaplikasian RFID tracking asset membutuhkan dua komponen yaitu tags dan reader. </p>
            <p>RFID tags adalah sebuah benda yang berperan sebagai tempat penyimpanan data. Sedangkan RFID reader adalah sebuah komponen elektronik yang bertugas mengenali tags melalui pancaran gelombang radio. </p>
            <p>Kedua komponen tersebut kemudian dihubungkan pada sebuah sistem yang biasanya berupa komputer. Dari komputer tersebut maka akan didapatkan output berupa data pengenalan terhadap objek yang ingin diidentifikasi. Penggunaan RFID asset tracking tentunya dapat menghasilkan banyak manfaat seperti berikut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Inventori Aktiva Tetap</span></span>
            
            <p>Aktiva tetap dari sebuah perusahaan tentu saja akan membutuhkan inventori secara berkala. Dengan penerapan RFID teknologi pada kegiatan pelacakan aktiva tetap, maka proses akan dapat berjalan secara lebih efektif dan efisien.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Data Aset Lebih Baik</span></span>
            
            <p>Dalam sebuah proses inventori, data kapan sebuah barang dibeli, kapan barang terakhir dilakukan perawatan dan data lainnya itu sangat penting. Dengan penerapan RFID aset maka semua masalah tersebut akan dapat diatasi dengan segera.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menggetahui Lokasi Aset</span></span>
            
            <p>Seringkali aset yang dimiliki sebuah perusahaan tersebar luas ke berbagai cabang dan lokasi perusahaan. Dengan Tracking Asset, perusahaan bisa menggunakan komputer maupun handphone untuk melacak keberadaan setiap aset yang dimiliki perusahaan.</p>
            <p>Tracking Asset memberikan kemudahan untuk melacak aset perusahaan, mengontrol aset tetap, dan menjaga akuntabilitas. Jika perusahaan tidak pernah melacak aset maka akan timbul kemungkinan perusahaan akan mengalami kerugian yang disebabkan karena penggunaan metode manual saat mencatat aset, terutama jika jumlah aset banyak dan tersebar di beberapa kantor cabang.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'big-data-business-intelligent-untuk-bisnis-akurat',
              'type' => 'article',
              'title' => 'Big Data : Business Intelligent Untuk Bisnis Akurat',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image-1.png',
              'tags' => 'industri 4.0',
              'date' => 'July 4, 2023',
              'content' => "
            
            <p>Berbagai jenis teknologi dimanfaatkan untuk terus berkembang dalam mencapai tujuan bisnis. Salah satu yang sering sekali diperbincangkan saat ini adalah Business Intelligence atau BI. </p>
            <p>Teknologi satu ini juga sudah banyak diadaptasi di berbagai bisnis Indonesia tentunya dalam bidnag bisnis maupun pada bidang lainnya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengertian Business Intelligent</span></span>
            
            <p>Business intelligence adalah seperangkat alat analisis berupa informasi bisnis yang digunakan untuk mengkonsolidasi, menganalisis, menyimpan dan mengakses banyak data dalam konteks proses bisnis yang mengarah pada pembuatan keputusan dan tindakan dengan tujuan peningkatan kinerja usaha atau bisnis.</p>
            <p>Fungsi business intelligence adalah sebagai sistem pendukung keputusan dimana sistem dan aplikasi ini mengubah data data dalam organisasi berupa data operasional, data transaksi, maupun data lainnya kedalam bentuk pengetahuan dengan tujuan secara umum yaitu menyajikan berbagai informasi yang disesuaikan dengan kebutuhan setiap penggunanya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Untuk Bisnis Akurat</span></span>
            
            <p>Dalam penerapannya BI sendiri dapat dipengaruhi oleh beberapa factor yang berfungsi untuk mengambil keputusan bisnis, karena sering kali keputusan tersebut diambil berdasarkan data yang kurang akurat maupun kurang lengkap sehingga menghasilkan keputusan yang kurang tepat.</p>
            <p>Keputusan tersebut akhirnya memberikan dampak negatif pada bisnis yang dijalankan, dengan hadirnya BI maka diharapkan dapat menciptakan keputusan yang lebih akurat untuk hasil yang lebih baik.</p>
            <p>Untuk membuat hasil yang akurat dibutuhkan juga analisa yang tepat sesuai yang dibutuhkan. Maka memerlukan orang yang cukup berpengalaman untuk mengoperasikan software dan tools platform BI. </p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Manfaat Business Intelligent</span></span>
            
            <p>BI tentunya dapat membantu berbagai divisi pada sebuah perusahaan seperti tim produksi, marketing dan lain sebagainya. Dengan demikian dapat dikatakan bahwa BI bisa menjadi nilai utama yang bermanfaat dalam segala jenis bisnis yang dijalankan.</p>
            <p>Dengan membangun business intelligence, maka seluruh data dan informasi dapat dengan mudah diintegrasikan sehingga menghasilkan sebuah kesimpulan yang mudah di akses dan dimengerti sehingga dapat membantu pihak manajemen untuk membuat pengambilan keputusan yang lebih baik. </p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-alasan-penting-gemba-kaizen-pada-perusahaan',
              'type' => 'article',
              'title' => '3 Alasan Penting Gemba Kaizen Pada Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/07/image.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'July 3, 2023',
              'content' => "
            
            <p>Gemba Kaizen adalah pendekatan perbaikan berkelanjutan yang dilakukan di tempat kerja langsung (gemba). “Gemba” dalam bahasa Jepang berarti “tempat kejadian” atau “tempat kerja nyata”, sedangkan “Kaizen” berarti “perbaikan terus-menerus”. </p>
            <p>Pendekatan Gemba Kaizen bertujuan untuk mendorong partisipasi dan pengambilan keputusan yang berdasarkan data di tingkat operasional, di mana pekerjaan sebenarnya dilakukan.</p>
            <p>Gemba Kaizen mendorong partisipasi aktif dan peningkatan berkelanjutan. Hal ini dilakukan dengan melibatkan semua anggota tim dalam mengidentifikasi masalah dan mencari solusi bersama. </p>
            <p>Pendekatan ini juga menekankan pengumpulan dan analisis data yang akurat untuk mendukung pengambilan keputusan yang berdasarkan fakta. Berikut 3 alasan penting perusahaan perlu melakukan gemba kaizen pada perusahaan :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menjalin Komunikasi</span></span>
            
            <p>Komunikasi yang dimaksudkan adalah agar mengetahui cara kerja proses, bagaimana kegiatan operasional berlangsung dan bagaimana cara agar proses tersebut dapat berlangsung. </p>
            <p>Dengan melakukan gemba maka dapat memperbaiki komunikasi yang terjalin agar dapat mengidentifikasi apa yang sebenarnya harus diperbaiki sehingga perbincangan tersebut menciptakan suatu perbaikan secara nyata.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Manajemen dan Staff Terhubung</span></span>
            
            <p>Meskipun para manajer dan eksekutif memang tidak diharapkan untuk mengetahui setiap detail dari aktivitas operasional di lapangan, namun dengan seringnya gemba berjalan dilakukan di lapangan hal tersebut akan membantu para manajer dan eksekutif tetap mengetahui hal-hal penting dan menjaga tujuan besar dari aktivitas di lantai produksi. Dengan tujuan menciptakan hubungan yang baik antara manajemen dan staff para lapangan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengidentifikasi Perubahan</span></span>
            
            <p>Dalam industri manufaktur tidak jarang sebuah area dapat berkembang dengan sendirinya, bahkan dapat berkembang sangat jauh dari yang dibayangkan. Meskipun prosedur, aturan serta laporan yang dimaksudkan sering berkembang dalam beberapa cara menyimpang atau tidak berkembang sama sekali namun, hal ini tetap menjadi informasi yang penting</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-alasan-ini-buktikan-tpm-penting-untuk-bisnis',
              'type' => 'article',
              'title' => '4 Alasan Ini Buktikan TPM Penting Untuk Bisnis',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image-19.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'June 30, 2023',
              'content' => "
            
            <p>TPM adalah sebuah sistem yang digunakan untuk memelihara dan meningkatkan kualitas produksi melalui pemeliharaan peralatan kerja. Termasuk juga kinerja sumber daya manusia (SDM). </p>
            <p>TPM dirancang untuk memastikan seluruh perlengkapan dan peralatan produksi beroperasi dengan kondisi yang baik dan terhindar dari kerusakan yang dapat mengganggu proses produksi.</p>
            <p>Merupakan program perawatan yang melibatkan semua pihak yang terdapat dalam suatu perusahaan untuk dapat saling bekerja sama dalam menghilangkan break down, mengurangi waktu down time, kegiatan produksi serta kualitas dari produk yang dihasilkan Secara umum penerapan TPM fokus pada tiga target utama, yaitu zero product defect, zero equipment unplanned failures dan zero accident.</p>
            <p>Penerapan tersebut tentunya memiliki banyak sekali manfaat yang dapat dirasakan pada saat penerapannya, berikut 4 manfaat yang membuktikan TPM merupakan sistem yang pentung untuk bisnis :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemeliharaan Terencana</span></span>
            
            <p>TPM adalah dengan mengintegrasikan teknik pemeliharaan proaktif ke dalam program perusahaan. Pilih komponen mana yang harus dipelihara secara proaktif.</p>
            <p>Mengoptimalkan internal maintenance dengan membuat sistem umpan balik (feedback), yaitu seperti membuat log sheet tempat pengguna dapat mencatat informasi tentang komponen yang sudah usang atau rusak.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengurangi Kerugian</span></span>
            
            <p>Untuk memungkinkan hal ini terjadi, perusahaan perlu mengumpulkan karyawan dari berbagai departemen yang terdiri dari operator, maintenance, dan supervisor yang dapat menangani data OEE. Dengan begitu dapat menganalisa serta melakukan identifikasi akar penyebab kerugian.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengukur OEE</span></span>
            
            <p>Dengan mengukur OEE secara teratur dapat memberikan konfirmasi data, sehingga anda mengetahui apakah program TPM berfungsi atau tidak. Selain itu, langkah ini memungkinkan anda untuk melihat kemajuan dari waktu ke waktu. Dengan memeriksa OEE untuk target peralatan, baik itu secara manual maupun perangkat lunak otomatis (software).</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Area Pilot</span></span>
            
            <p>Menggunakan area pilot sebagai langkah awal penerapan metode ini dapat membantu karyawan beradaptasi serta menerima sistem baru. Dengan begitu karyawan dapat melihat langsung manfaat dari proses tersebut. </p>
            <p>Ketika hendak memilih peralatan untuk area pilot, perhatikanlah hal-hal seperti bagian yang sering terjadi hambatan, peningkatan termudah, dan masalah paling umum terjadi.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'canggihnya-3-teknologi-ini-pada-industri-4-0',
              'type' => 'article',
              'title' => 'Canggihnya 3 Teknologi ini Pada Industri 4.0',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/before.jpg',
              'tags' => 'industri 4.0',
              'date' => 'June 28, 2023',
              'content' => "
            
            <p>Industri 4.0 adalah konsep yang mengacu pada revolusi industri keempat yang sedang terjadi saat ini. Konsep ini melibatkan penggabungan teknologi digital, otomasi, dan kecerdasan buatan (AI) dalam industri secara luas. </p>
            <p>Industri 4.0 bertujuan untuk mengubah cara produksi, operasi, dan manajemen di berbagai sektor industri. Salah satu elemen kunci dari Industri 4.0 adalah Internet of Things (IoT), di mana perangkat dan mesin dapat saling terhubung dan berkomunikasi satu sama lain melalui jaringan. </p>
            <p>Hal ini memungkinkan pemantauan dan kontrol real-time, pengumpulan data yang besar, dan analisis data untuk mengoptimalkan proses produksi dan pengambilan keputusan.</p>
            <p>Selain IoT, teknologi lain yang terkait dengan Industri 4.0 meliputi big data analytics, komputasi awan (cloud computing), robotika, augmented reality (AR), virtual reality (VR), sistem cerdas (smart systems), dan manufaktur aditif (3D printing).</p>
            <p>Berikut 3 teknologi yang perlu ada dalam sebuah industri 4.0 :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Big Data Analytics: Dalam Industri 4.0, jumlah data yang dihasilkan sangat besar. Big data analytics memungkinkan perusahaan untuk mengumpulkan, menyimpan, mengelola, dan menganalisis data yang besar tersebut untuk mengambil wawasan yang berharga, memprediksi tren, dan mengoptimalkan proses produksi.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Cloud Computing: Cloud computing memungkinkan penyimpanan dan akses data secara online melalui jaringan internet. Dalam Industri 4.0, perusahaan dapat menyimpan data mereka secara aman di awan dan mengaksesnya dari berbagai lokasi, memfasilitasi kolaborasi, pengolahan data, dan analisis yang lebih efisien.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Artificial Intelligence (AI) dan Machine Learning: AI dan machine learning memungkinkan komputer dan sistem untuk belajar dari data dan melakukan tugas yang biasanya memerlukan kecerdasan manusia. Dalam Industri 4.0, AI digunakan untuk pengambilan keputusan cerdas, otomasi proses, analisis prediktif, pengoptimalan produksi, dan peningkatan efisiensi.</span></span>
            
            <p>Teknologi-teknologi ini berkolaborasi dan saling terhubung dalam Industri 4.0 untuk menciptakan sistem yang cerdas, adaptif, dan efisien dalam produksi, manajemen, dan pengambilan keputusan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'rfid-dan-perkembangan-teknologi',
              'type' => 'article',
              'title' => 'RFID dan Perkembangan Teknologi',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/before-23.jpg',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'June 27, 2023',
              'content' => "
            
            <p>Seiring dengan berkembangnya teknologi berbagai macam fasilitas umum telah dikembangkan guna memberikan kemudahan akses kepada penggunanya. </p>
            <p>Dari berbagai macam kemudahan tersebut salah satu contohnya ialah penggunaan kartu pintar untuk berbagai macam hal. Kartu pintar yang dimaksud ialah kartu yang menggunakan teknologi RFID (Radio Frequency Identification).</p>
            <p>RFID adalah sebuah teknologi yang berkembang pesat seiring dengan perkembangan penggunaannya dalam berbagai jenis bidang. RFID menggunakan gelombang dengan frekuensi radio dalam proses transmisi datanya. </p>
            <p>Proses transmisi data yang terjadi berlangsung secara nirkabel di antara dua komponen yang dikombinasikan pada perangkatnya, yaitu RFID tag dan RFID reader.</p>
            <p>Peranan RFID pada perkembang teknologi dibuktikan dengan pemanfaatannya dalam berbagai jenis bidang maupun industri, penerapan tersebut tentunya dilakukan agar mendapatkan hasil yang lebih efektif. Berikut beberapa penerapan RFID dalam berbagai jenis bidang sesuai dengan berjalannya perkembangn teknologi :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Bidang Keamanan</span></span>
            
            <p>Teknologi RFID telah banyak digunakan dalam bidang dan keamanan. RFID telah menjadi perangkat yang umum digunakan sebagai kunci rumah, apartemen, atau ruangan kamar hotel. </p>
            <p>Teknologi ini memungkinkan mengakses ruangan dengan hanya menempelkan kartu yang ditempeli RFID <em>tag </em>pada RFID <em>reader</em>-nya, sehingga memberikan kemudahan akses. Penggunaan teknologi RFID ini juga dapat menghindarkan pemiliknya dari adanya upaya pembobolan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Bidang Industri</span></span>
            
            <p>Di industri, produk harus dihitung sudah berapa kali dalam proses manufaktur selama tahap produksi, pembersihan, dan pengemasan. Namun dengan memanfaatkan <em>tag </em>RFID dan pembacanya, jumlah barang dapat dihitung hanya dalam hitungan detik. </p>
            <p>Hal ini dikarenakan <em>tag </em>RFID secara otomatis dapat dipindai tanpa berada di bawah <em>scanner </em>dan beberapa <em>tag </em>dapat dipindai secara bersamaan. Sehingga hal ini dapat menjadi efisiensi biaya dan waktu.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Bidang Kesehatan</span></span>
            
            <p>Dengan pendataan yang berbasis waktu nyata maka setiap pegawai rumah sakit dapat merasakan efisiensi yang diberikan teknologi RFID ini, karena dapat mengetahui posisi atau keadaan barang dengan cepat, juga dapat mengetahui data tentang seorang pasien dengan cepat. </p>
            <p>Sistem juga dapat menunjukkan data apabila seorang karyawan atau dokter sedang tidak bisa diganggu pekerjaannya. Dalam pengarahan pengunjung pasien juga bisa dilakukan dengan lebih cepat. Akibatnya proses penanganan pasien menjadi lebih cepat, dan ini akan meningkatkan kualitas pelayanan terhadap pasien.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3v-big-data-ini-penting-untuk-perusahaan',
              'type' => 'article',
              'title' => '3V Big Data Ini Penting Untuk Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image-17.png',
              'tags' => 'big data,Internet of Things',
              'date' => 'June 26, 2023',
              'content' => "
            
            <p>Konsep dasar Big Data adalah mengumpulkan data dari berbagai sumber, menyimpan dan mengelola data besar dengan teknologi yang sesuai, dan menganalisis data besar untuk mengekstrak informasi yang berguna.</p>
            <p>Big Data adalah istilah yang digunakan untuk menggambarkan jumlah data yang sangat besar dan kompleks yang sulit untuk diolah dengan menggunakan alat yang digunakan untuk menangani data tradisional.</p>
            <p>Big Data dapat diartikan sebagai sekumpulan data yang memiliki volume yang sangat besar, dan memiliki berbagai data yang terstruktur maupun yang tidak terstruktur dan digunakan untuk membantu sebagai wadah penyimpanan di suatu perusahaan.</p>
            <p>Beberapa data yang masuk dapat digunakan untuk merancang strategi pemasaran yang bagus sehingga meningkatkan omset perusahaan. Misalnya, data yang didapatkan dari facebook atau social media yang lain akan diolah dengan Big Data. Bagaimana tingkah laku dan respon konsumen, apa saja produk yang mendapatkan respon positif dan sebagainya.</p>
            <p>Big Data didefinisikan oleh tiga karakteristik utama yaitu volume, variety, dan velocity. Berikut penjelasan dari masing masing karakteristik tersebut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Volume</span></span>
            
            <p>Volume dalam big data 3v ini diartikan sebagai kuantitas atau jumlah data yang dihasilkan dari banyak transaksi serta volume data yang disimpan. Volume merupakan suatu kapasitas yang terdapat dalam database. Data base yang memiliki kapasitas data yang sangat besar dan mungkin tidak terbatas tersebut yang dimiliki oleh Big Data.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Velocity</span></span>
            
            <p>Velocity dalam 3v big data ini artinya adalah kecepatan dalam mengenerate data, mengakses data serta memproses data. Big data platform dan big data analytics software tentu harus dapat memproses banyak data secepat mungkin ketika ada request. Jika sedang melakukan transfer data, big data memiliki kecepatan transfer data yang memungkinkan kita untuk mentransfer data secara langsung dan tentunya stabil.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Variety</span></span>
            
            <p>Variety ini artinya variasi tipe dan variasi sifat dari data, apakah data tersebut bersifat terstruktur, semi terstruktur ataupun tidak terstruktur. Contoh dari variety adalah data yang berbentuk tulisan biodata seseorang, video, atau bahkan foto tersebut merupakan data yang tidak terstruktur dan harus diproses dalam suatu data base.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'produktivitas-dengan-kaizen-begini-caranya',
              'type' => 'article',
              'title' => 'Produktivitas Dengan Kaizen? Begini Caranya!',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image-16.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'June 23, 2023',
              'content' => "
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kaizen</span></span>
            
            <p>Kaizen merupakan istilah dalam bahasa Jepang yang bermakna perbaikan secara berkesinambungan. Metode Kaizen adalah budaya kerja yang memungkinkan adanya perubahan-perubahan kecil dengan intensitas tinggi. </p>
            <p>Berdasarkan prinsip Kaizen, kita tidak dituntut untuk langsung memberikan perubahan revolusioner dengan risiko membahayakan operasional perusahaan.</p>
            <p>Sebaliknya, perubahan cara kerja yang disyaratkan pada metode Kaizen adalah satu perbaikan spesifik pada alur kerja tertentu. Kaizen adalah metode dengan jangkauan luas meliputi proses pra-produksi, produksi, pemasaran, distribusi, hingga penyeragaman kualitas produk.</p>
            <p>Produktivitas adalah jantung dari kegiatan operasional perusahaan. Kaizen mengakomodasi hal ini dengan pemecahan masalah dan perbaikan skala kecil yang mungkin dianggap remeh, tetapi memiliki dampak strategis terhadap daya produksi perusahaan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Produktivitas Dengan Kaizen</span></span>
            
            <p>Dengan fokusnya pada perbaikan bertahap, Kaizen dapat menciptakan pendekatan yang lebih lembut untuk berubah dibandingkan dengan upaya besar yang mungkin ditinggalkan karena kecenderungan mereka untuk memprovokasi penolakan dan pengabaian perubahan.</p>
            <p>Kaizen mendorong pengawasan proses sehingga kesalahan dan pemborosan dapat dikurangi. Menghilangkan segala jenis waste akan meningkatkan produktivitas. Walaupun Kaizen tidak menghasilkan peningkatan dramatis dalam semalam, inisiatif ini memang memfasilitasi lingkungan kerja untuk memudahkan improvement yang berkelanjutan.</p>
            <p>Untuk menerapkan metode Kaizen, sangat penting bagi tim untuk mengetahui kemampuan awal mereka. Dari sini selanjutnya dapat dilakukan pemilihan cara-cara kerja yang tepat berdasarkan modal awal tersebut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Manfaat</span></span>
            
            <p>Membuat setiap pekerja menjadi mampu, dimana setiap pekerja di beri bekal akan keterampilan dan juga peluang untuk menerapkan suatu informasi yang diberikan melalui pelatihan pada berbagai keterampilan, dorongan, tanggung jawan dalam mengambil keputusan.sehingga produktivitas akan dengan mudah tercapai.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-tipe-penerapan-iot-yang-penting-bagi-perusahaan',
              'type' => 'article',
              'title' => '3 Tipe Penerapan IoT yang Penting Bagi Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image-15.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'June 22, 2023',
              'content' => "
            
            <p>Internet of Things (IoT) adalah salah satu tren baru di dunia teknologi yang akan kemungkinan besar akan menjadi tren di masa depan. Sederhananya, IoT menyambungkan alat-alat fisik seperti lampu, televisi, kulkas bahkan pintu rumah terhubung ke Internet secara terus-menerus dan dapat dikendalikan pada jarak jauh melalui gawai yang dipunyai seorang pengguna. </p>
            <p>Adapun penggunaannya seperti berbagi data, remote control, dan penerimaan sensor, termasuk juga pada benda.Dari semua kegiatan yang ada dalam IoT adalah untuk mengumpulkan data mentah yang benar dengan cara yang efisien: tapi yang lebih penting adalah untuk menganalisis dan mengolah data mentah menjadi informasi yang lebih berharga. </p>
            <p>Kemampuan akses dari IoT bisa saja tidak terbatas berkat perangkat IoT yang selalu tersambung ke internet, sehingga dapat di akses dan digunakan kapan saja dan dimana saja. Dalam penerapannya pada perusahan, IoT memeiliki beberapa tipe penerapan seperti berikut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemeliharaan Efektif</span></span>
            
            <p>Menggunakan teknologi IoT dalam bidang industri memungkinkan pemilik untuk mengantisipasi mesin yang bermasalah dan harus diganti segera. Sebab, teknologi IoT bekerja melalui sensor yang setelah dipasang pada mesin dan platform operasi, dapat mengirimkan peringatan ketika faktor risiko tertentu muncul. </p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemantauan Jarak Jauh</span></span>
            
            <p>Teknologi IoT dalam penerapannya di bidang industri yang paling utama terkait dengan manajemen peralatan otomatis. Ini memungkinkan sistem terpusat untuk mengontrol dan memantau semua proses perusahaan.</p>
            <p>Karena kemampuan untuk mengontrol peralatan dari jarak jauh melalui mesin dan perangkat lunak digital, bukan tidak mungkin pemilik bisnis akan dapat mengontrol beberapa pabrik yang terletak di lokasi berbeda.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mempercepat Perbaikan</span></span>
            
            <p>Teknologi IoT dan perangkatnya menghasilkan informasi berharga sehingga mereka yang bertanggung jawab untuk meningkatkan proses dalam model bisnis industri (insinyur proses, kualitas atau manufaktur) dapat mengakses data dan menganalisisnya lebih cepat dan otomatis, dan dari jarak jauh melakukan penyesuaian proses yang diperlukan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-peran-penting-artificial-intelligence-dalam-manufaktur',
              'type' => 'article',
              'title' => '4 Peran Penting Artificial Intelligence Dalam Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image-14.png',
              'tags' => 'industri 4.0',
              'date' => 'June 21, 2023',
              'content' => "
            
            <p>Perkembangan maupun penggunaan AI sudah mulai marak seiring dengan berkembang pesatnya pengguna internet. </p>
            <p>Artificial Intellegence ( AI ) adalah simulasi kecerdasan manusia yang dirancang dalam program mesin agar mesin tersebut dapat bertindak selayaknya tindakan yang dapat dilakukan manusia.</p>
            <p>Pengertian AIrtificial Intellegence juga diacu pada setiap proses termasuk pembelajaran, penalaran dan koreksi diri yang tentunya dikaitkan dengan pikiran manusia. AI atau kecerdasan buatan menjadi penggerak revolusi industri 4.0 yang memberikan kemudahan pada banyak sektor salah satunya industri.</p>
            <p>Dengan kecerdasan tersebut tentunya akan memberikan banyak manfaat seperti berikut :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Maintenance</span></span>
            
            <p>Predictive Maintenance memungkinkan perusahaan untuk menghemat biaya perbaikan atau perawatan peralatan. Dengan menggunakan Predictive Solutions yang dilengkapi Machine Learning, AI dapat memprediksi kapan mesin memerlukan perawatan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Quality Control</span></span>
            
            <p>Teknologi AI dan Machine Learning dapat mendeteksi kecacatan dengan baik. Kecacatan kecil pada mesin juga dapat dideteksi dengan mudah menggunakan aplikasi, alat, dan sistem AI. Oleh karena itu, AI di sektor manufaktur dapat menjamin quality control. Smart AI solutions dapat memantau produktivitas alat, mencatat proses kinerja, menemukan kesalahan, meningkatkan produktivitas, dan mengurangi biaya perawatan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Supply Chain</span></span>
            
            <p>Aplikasi AI dengan bantuan sensor IoT membantu perusahaan manufaktur untuk mengatur seluruh operasi rantai pasokan dengan cara yang lebih terorganisir. Seiring dengan AI, Machine Learning, computer vision, otomatisasi proses robotika, dan teknologi pengenalan suara tentunya dapat  membuat tugas manajemen rantai pasokan menjadi lebih mudah, lebih cepat, dan lebih baik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Robotika</span></span>
            
            <p>Robot manufaktur, mengotomatiskan operasi yang monoton, menghilangkan atau secara drastis mengurangi kesalahan manusia, dan memfokuskan kembali perhatian pekerja manusia pada bagian bisnis yang lebih menguntungkan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'pentingnya-5s-kaizen-pada-perusahaan',
              'type' => 'article',
              'title' => 'Pentingnya 5s Kaizen Pada Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image-13.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'June 20, 2023',
              'content' => "
            
            <p>Dalam bahasa Jepang, kaizen berarti perbaikan berkesinambungan. Istilah ini mencakup pengertian perbaikan yang melibatkan semua orang baik manajer dan karyawan yang melibatkan biaya dalam  jumlah yang  tak seberapa.  </p>
            <p>Filsafat  Kaizen berpandangan bahwa cara hidup kita apakah itu kehidupan kerja atau kehidupan sosial maupun kehidupan rumah tangga, hendaknya  berfokus  pada  upaya  perbaikan  terus menerus.</p>
            <p>Kaizen memiliki arti sebagai perbaikan yang berkelanjutan atau aktivitas yang dilakukan secara terus menerus untuk meningkatkan hasil yang ingin didapatkan. Konsep manajemen Kaizen berasal dari negara Jepang. Kaizen (改善) terdiri dari dua huruf kanji yakni 改 (<em>kai</em>) artinya perubahan dan 善 (<em>zen</em>) artinya kebaikan.</p>
            <p>Di dalam dunia industri, konsep Kaizen merupakan suatu strategi yang digunakan untuk melakukan peningkatan secara terus menerus ke arah yang lebih baik dari segala sudut pandang. Kaizen tersebut mendorong para pegawai untuk selalu mempunyai komitmen tinggi pada pekerjaan yang sedang dilakukan.</p>
            <p>Selain itu Kaizen juga mendorong para pegawai agar tepat waktu. 5s kaizen tersebut terdiri dari Seiri, Seiton, Seiso, Seiketsu, serta Shitsuke. Di Indonesia tersebut juga dikenal dengan istilah 5S. Berikut penjelasannya :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Seiri atau Ringkas, kegiatan tersebut fokus pada prinsip keteraturan di dalam menyortir barang maupun dokumen pekerjaan yang nantinya diperlukan maupun tidak. </span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Seiton atau Rapi, fase yang satu ini dilakukan setelah mengatur dokumen yang ada pada prinsip pertama yaitu seiri.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Seiso atau Resik, fase ketiga ini fokus pada pembersihan barang, ruangan kerja, dokumen agar tercipta lingkungan kerja yang rapi dan bersih.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Seiketsu atau Rawat, intisari keempat tersebut dimaksudkan agar setiap pegawai dapat menerapkan setiap fase di atas. Poin keempat ini dilakukan secara berkelanjutan yang disertai dengan monitoring serta pengawasan. </span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Shitsuke atau Rajin, prinsip kerja keras yang terakhir tersebut memungkinkan kegiatan yang mencerminkan kesadaran para pegawai di dalam menjalankan pekerjaan kantor. </span></span>
            
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'hemat-biaya-logistik-dengan-rfid',
              'type' => 'article',
              'title' => 'Hemat Biaya Logistik Dengan RFID',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image-12.png',
              'tags' => 'industri 4.0',
              'date' => 'June 19, 2023',
              'content' => "
            
            <p>Pengelolaan bisnis jasa logistik membutuhkan suatu sistem yang mampu menghadirikan keunggulan kompetitif bagi suatu organisasi. </p>
            <p>Salah satu pendektan sistem yang dikenal adalah supply chain management (SCM) yang merupakan keterpaduan pengelolaan seluruh aktivitas dari hulu hingga hilir.</p>
            <p>Aktivitas ini meliputi pengadaan barang, pergudangan, pengelolaan inventory dan distribusi barang dari satu atau beberapa titik asal ke titik tujuan yang berorientasi pada costumer. </p>
            <p>Perkembangan teknologi informasi dan komunikasi yang makin maju dapat dimanfaatkan untuk mendukung terciptanya efisiensi, keterpaduan, dan pengendalian (barang/cargo) secara optimal dalam ndustri logistik. </p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penjelasan RFID       </span></span>
            
            <p>Salah satu bentuk aplikasi teknologi informasi dan komunikasi adalah penggunaan Radio Frequency Identification (RFID). RFID adalah teknologi penangkapan data secara elektronik untuk mengidentifikasi, melacak dan menyimpan informasi secara otomatis yang tersimpan dalam tag dengan menggunakan gelombang radio. </p>
            <p>RFID menggunakan frekuensi radio untuk membaca informasi dari transmitter responder atau tag. RFID merupakan pengembangan dan teknologi barcode.Frekuensi kerja RFID adalah frekuensi yang digunakan untuk komunikasi wireless antara reader dengan tag RFID. </p>
            <p>Ada beberapa frekuensi yang digunakan untuk sistem RFID. Pemilihan dari frekuensi kerja sistem RFID akan mempengaruhi jarak komunikasi, interferensi dengan frekuensi sistem radio lain, kecepatan komunikasi data dan ukuran antena.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penerapan RFID</span></span>
            
            <p>Sistem RFID merupakan suatu tipe sistem identifikasi otomatis yang bertujuan untuk memungkinkan data ditransmisikan oleh peralatan portable yang disebut tag, yang dibaca oleh suatu reader RFID dan diproses menurut kebutuhan dari aplikasi tertentu.</p>
            <p>Data yang ditrasmisikan oleh tag dapat menyediakan informasi identifikasi atau lokasi, atau hal-hal khusus tentang produk-produk ber-tag, seperti harga, warna, tanggal pembelian dan lain-lain.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Manfaat RFID</span></span>
            
            <p>RFID dapat dimanfaatkan untuk mendukung terciptanya efisiensi, keterpaduan, dan pengendalian proses secara optimal dalam suatu bisnis. Implementasi RFID merupakan bentuk otomatisasi data untuk meningkatkan produktivitas kerja dan untuk efisiensi, baik efisiensi biaya maupun efisiensi waktu.</p>
            <p>Berdasarkan pengunaannya menunjukkan bahwa RFID mampu memberikan keuntungan atas investasi yang telah dilakukan. Penerapan RFID akan jauh lebih baik lagi jika diintegrasikan dengan masing masing pelaku yang terlibat dalam bisnis jasa logistik. Hal ini akan mendorong terciptanya rantai pasok yang efektif dan efisien.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-faktor-pengoptimalan-smart-warehousing',
              'type' => 'article',
              'title' => '4 Faktor Pengoptimalan Smart Warehousing',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/before-12.jpg',
              'tags' => 'industri 4.0',
              'date' => 'June 16, 2023',
              'content' => "
            
            <p>Warehouse tidak hanya dipandang sebagai tempat penyimpanan, tetapi juga merupakan fasilitas yang harus diatur dan dikelola sehingga dapat memenuhi keinginan pelanggan. </p>
            <p>Sasaran pengelolaan warehouse adalah speed yaitu kecepatan penyampaian ke pasar dan memenuhi perubahan permintaan, efficiency yaitu efisiensi rantai pasok diukur dan diperbaiki secara terus-menerus.</p>
            <p>Effectiveness yaitu memungkinkan pelanggan mendapatkan produk perusahaan dengan mudah, dan reliability yaitu keandalan informasi, komunikasi, dan eksekusi agar semua fungsi berjalan dengan baik. Meningkatnya kegiatan belanja di e-commerce hingga beralihnya masyarakat ke usaha mikro mempengaruhi peningkatan dan manajemen pergudangan.</p>
            <p>Kemudian dengan percepatan digitalisasi, implementasi smart warehouse yang sedang dicanangkan sejumlah penyedia gudang pun dapat diwujudkan semaksimal mungkin. Dengan begitu maka smart warehouse perlu ditingkatkan demi menguatkan kinerja sebuah warehouse, dengan hal tersebut maka berikut 3 faktor pengoptimalan smart warehousing :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Teknologi</span></span>
            
            <p>Sistem pergudangan yang canggih dalam smart warehouse tentunya memerlukan teknologi yang memadai. Dimulai dari penggunaan software untuk mengelola stok barang. Kemudian, perkenalkan karyawan pada perangkat yang membantu mereka memindahkan inventaris.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kegiatan Operasional</span></span>
            
            <p>Kegiatan operasional tentunya akan mengalami perubahan saat kamu beralih ke smart warehouse. Untuk itu, kamu perlu melakukan adaptasi terhadap aktivitas-aktivitas pergudangan, termasuk regulasi dan peningkatan kualitas secara berkala.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Lingkungan Gudang</span></span>
            
            <p>Menerapkan aturan dan sistem yang dapat mendukung keselamatan maupun kesehatan pekerja. Mengikuti pengertian pergudangan, kegiatan-kegiatan yang berlangsung di gudang harus sesuai standar yang berlaku tanpa menimbulkan kerugian terhadap pihak-pihak yang terlibat.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>SDM</span></span>
            
            <p>SDM yang merupakan aspek terpenting dalam pergudangan sebaiknya memperoleh pelatihan yang dapat mengasah keterampilan mereka. Khususnya yang berhubungan dengan kompetensi, kemampuan beradaptasi, pikiran untuk tumbuh dan berkembang, dan keinginan mempelajari sesuatu. Dengan begitu, semua tujuan yang ditargetkan bisa terwujud.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'rfid-vs-nfc-mana-yang-lebih-baik',
              'type' => 'article',
              'title' => 'RFID Vs NFC, Mana Yang Lebih Baik?',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image-10.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'June 15, 2023',
              'content' => "
            
            <p>Teknologi nirkabel seperti Radio Frequency Identification (RFID) dan Near Field Communication (NFC) menjadi semakin populer untuk pelacakan aset dan pelacakan inventaris.</p>
            <p>RFID dan NFC memiliki banyak kesamaan jadi mungkin membingungkan salah satu dari teknologi ini yang merupakan pilihan terbaik yang dapat digunakan untuk mendapatkan hasil yang terbaik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Near Field Communication</span></span>
            
            <p>Near Field Communication (NFC) adalah teknologi nirkabel yang semakin lazim di berbagai macam industri. NFC memungkinkan komunikasi jarak pendek antara dua perangkat yang kompatibel biasanya tag NFC dan smartphone atau tablet. </p>
            <p>Tag NFC adalah chip kecil yang menyimpan data dan sering dimasukkan ke dalam stiker, magnet, atau label. Sebagian besar ponsel cerdas dan tablet dapat membaca data dalam tag NFC dalam jarak dekat (sekitar empat inci). </p>
            <p>NFC memerlukan tindakan oleh penggunaan NFC memiliki jangkauan tindakan yang sangat pendek, karena jangkauan kerja umumnya berada dalam jarak 0,1 meter. Ini adalah teknologi interaktif pengguna, dan memerlukan partisipasi khusus pengguna untuk memastikan penyelesaian fungsi seperti pembayaran atau akses.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Radio Frequency Identification</span></span>
            
            <p>Menurut definisi, RFID adalah metode mengidentifikasi item secara unik menggunakan gelombang radio. Ini adalah teknologi transfer data nirkabel tanpa kontak yang menggunakan tag atau kartu untuk menyimpan data, yang tidak perlu diberi daya.</p>
            <p>Sistem RFID terdiri dari tag, pembaca, dan antena. RFID bekerja dengan menempatkan tag fisik pada suatu objek, seperti truk. Tag ini menggunakan gelombang radio untuk mengirim data ke pembaca jarak jauh. Data dapat mencakup detail lokasi, waktu pengiriman, dan lainnya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Perbandingan RFID dan NFC</span></span>
            
            <p>Singkatnya RFID adalah singkatan dari Radio Frequency Identification, metode komunikasi satu arah tanpa kontak pada jarak yang bervariasi. NFC, Near Field Communication, memungkinkan komunikasi dua arah dan memerlukan tindakan oleh pengguna.</p>
            <p>NFC memiliki jangkauan aksi yang sangat pendek, karena jangkauan kerja umumnya berada dalam jarak 0,1 meter. Ini adalah teknologi interaktif pengguna, dan memerlukan partisipasi khusus pengguna untuk memastikan penyelesaian fungsi seperti pembayaran atau akses. </p>
            <p>Teknologi NFC memainkan peran besar dalam kontrol akses, transportasi umum, pembayaran seluler, dan bidang lainnya. Di sisi lain, pemindai RFID dapat membaca tag dalam jumlah besar pada saat yang sama, yang sangat umum dalam inventaris gudang.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'proses-logistik-dengan-big-data-kenapa-tidak',
              'type' => 'article',
              'title' => 'Proses Logistik Dengan Big Data? Kenapa Tidak?',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image-9.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'June 14, 2023',
              'content' => "
            
            <p>Big data adalah sekumpulan data yang jumlahnya sangat besar, berisi volume yang didalamnya mengandung lebih banyak variasi, namun tumbuh secara eksponensial seiring waktu.</p>
            <p>Merupakan data dengan ukuran dan kompleksitas yang sangat besar sehingga tidak ada tools manajemen data tradisional yang mampu menyimpan dan memprosesnya secara efisien. </p>
            <p>Perusahaan logistik merupakan penghubung beberapa rantai, baik pemasok dengan produsen, produsen dengan konsumen, juga produsen dengan distributor lain. </p>
            <p>Maka dengan demikian dapat dikatakan bahwa proses logistik menjadi salah satu proses penting dalam rantai pasok sebuah perusahaan. Bahkan perusahaan logistik dapat menjadi penghubung antar perusahaan antar perusahaan lainnya.</p>
            <p>Dalam bidang logistik, analisis big data memberikan keunggulan kempetitif diantaranya pada ranah operasional di mana pemanfaatan sumber daya, cakupan geografis, dan waktu pengiriman merupakan tantangan terbesar dalam logistik. </p>
            <p>Big data juga mampu menganalisis sentimen dan perilaku pasar atau tren terhadap suatu produk sehingga sinkronisasi bisa dilakukan dengan pelanggan bisnis. Berikut 3 manfaat big data dalam proses logistik :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Route Optimization</span></span>
            
            <p>Big data dapat mengurangi biaya pengeluaran dengan membantu perusahaan untuk secara proaktif bertindak pada proses inbound dan outbound. Big data juga membantu penyedia layanan logistik untuk meningkatkan proses supply chain mereka dan menciptakan model paling efektif untuk meningkatkan kolaborasi antar sektor.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pelacakan</span></span>
            
            <p>Teknologi big data dapat membantu mengatasi masalah pelacakan. Dengan bantuan teknologi big data, seluruh proses pengiriman barang dapat dilacak dari awal hingga akhir secara real-time. Baik perusahaan dan penerima dapat melacak proses pengiriman barang tersebut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kepuasan Pelanggan</span></span>
            
            <p>Big data dapat memberikan perusahaan kumpulan data tentang kebutuhan konsumen mereka. Dengan data tersebut, akan mudah bagi mereka untuk menerapkan analitik prediktif dan model historis serta mengetahui cara menciptakan loyalitas dan meningkatkan pengalaman yang dirasakan oleh pelanggan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-step-sukses-kaizen-blitz',
              'type' => 'article',
              'title' => '3 Step Sukses Kaizen Blitz',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image-8.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'June 13, 2023',
              'content' => "
            
            <p>Kaizen adalah kata dalam bahasa Jepang yang berarti “perubahan yang baik”. Itu juga nama untuk pendekatan peningkatan berkelanjutan yang telah diterapkan oleh bisnis di seluruh dunia.</p>
            <p>Di Jepang konsep kaizen diterapkan dalam dunia perkantoran dimana filosofi kaizen ini menjadi sebuah strategi bisnis. </p>
            <p>Namun, walaupun prinsip kaizen dikenal banyak digunakan untuk prinsip sebuah perusahaan, kaizen juga bisa kita terapkan di berbagai aspek dalam kehidupan.</p>
            <p>Dengan kaizen, kamu tidak hanya berfokus pada perubahan kecil yang dapat meningkatkan efisiensi juga mencari cara untuk membuat perubahan besar dan berarti dalam cara bisnis yang beroperasi.</p>
            <p>Kunci sukses dari Kaizen sendiri adalah fokus terhadap perubahan kecil namun dijalankan secara bertahap, terus-menerus, dan bersifat konsisten dengan tujuan untuk menciptakan sebuah hasil yang besar dari waktu ke waktu.</p>
            <p>Dengan menerapkan 3 step dibawah ini maka dapat membantu kesuksesan dalam penerapan kaizen, berikut pejelasannya :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Melibatkan Operator</span></span>
            
            <p>Salah satu prinsip utama dari setiap inisiatif Kaizen adalah melibatkan operator dan manajemen secara penuh. Komunikasikan kepada semua pihak yang berkepentingan bahwa akan ada aktivitas yang dilakukan guna meningkatkan proses, dan mintalah kontribusi semua orang. </p>
            <p>Penolakan tentunya bukanlah hal yang jarang ditemui dengan adanya penolakan maka harus diadakan sebuah pelatihan guna menginformasikan apa itu kaizen dan seperti apa dampaknya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Saran Perbaikan</span></span>
            
            <p>Sebelum menetukan saran atas perbaikan tentunya perlu diketahui apa saja kendala yang dihadapi dan apa saja permasalahan yang perlu solusi. Konsep ini berkisar pada konsep mengumpulkan masalah dari operator. </p>
            <p>Cara kerjanya adalah dengan memberikan saran dan biarkan semua orang berkontribusi. Dapat juga dilakukan dengan cara melakukan meeting yang membahas mengenai masalah yang dialami sehingga dapat menghasilkan jalan keluar yang sebaik mungkin.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Buat Tujuan</span></span>
            
            <p>Dalam hal ini tentunya perlu dibicarakan lebih lanjut mengenai tujuan yang akan dicapai melalui metode kaizen tersebut, dengan adanya tujuan maka metode kaizen tersebut dapat berjalan dengan baik sesuai dengan yang diharapkan dan tentunya tidak akan menimbulkan kesalahan pada saat proses penerapannnya. </p>
            <p>Tujuan juga dapat digunakan ssebagai bahan evaliasi apakah metode kaizen tersebut tepat sasaran atau tidak.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'besarnya-pengaruh-big-data-untuk-bisnis',
              'type' => 'article',
              'title' => 'Besarnya Pengaruh Big Data Untuk Bisnis',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image-6.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'June 12, 2023',
              'content' => "
            
            <p>Big Data adalah istilah yang menggambarkan data yang berukuran besar, berkecepatan tinggi, kompleks, dan variabel data yang memerlukan teknik dan teknologi tingkat tinggi untuk memungkinkan dilakukannya pengumpulan, penyimpanan, distribusi, manajemen, dan analisis informasi. </p>
            <p>Sudah banyak perusahaan yang sudah memanfaatkan Big Data agar dapat menyimpan segala datanya tanpa kendala dan menghindari hilangnya informasi – informasi yang dimiliki.</p>
            <p>Di Indonesia sendiri big data telah mengalami banyak sekali perkembangan. Manfaat big data bukan hanya sebatas menyimpan data dan sebagainya. Namun, juga menjadi pengatur dan pengelola data. </p>
            <p>Selain itu, data yang jumlahnya sangat besar bisa di ringkas tanpa mengurangi data tersebut. Perusahaan menggunakan big data dalam sistem mereka untuk meningkatkan operasi, memberikan layanan pelanggan yang lebih baik, membuat marketing campaign yang secara personal, dan mengambil tindakan lain yang, pada akhirnya, dapat meningkatkan pendapatan dan keuntungan.</p>
            <p>Perusahaan yang menggunakannya secara efektif memiliki keunggulan kompetitif potensial bagi mereka yang tidak menggunakan hal tersebut karena perusahaan yang menggunakan big data ini mampu membuat keputusan bisnis yang lebih cepat dan lebih tepat. Berikut 3 pengaruh besar big data dalam bisnis :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Strategi Efektif</span></span>
            
            <p>Setiap perusahaan pasti ingin produknya selalu dibutuhkan banyak konsumen. Oleh karena itu, setiap strategi marketing selalu diterapkan agar bisnis menjadi lancar. Penggunaan big data dalam strategi pemasaran, nyatanya mampu memberikan hasil yang akurat.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Media Sosial</span></span>
            
            <p>Setiap perusahaan akan selalu melakukan inovasi untuk produk yang dikeluarkannya. Cara melakukan inovasi adalah dengan mengetahui tingkat kebutuhan dan penilaian dari masyarakat. Salah satu manfaat dari big data, mampu mengetahui berbagai penilaian pelanggan terhadap produknya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menarik Pelanggan</span></span>
            
            <p>Dalam suatu bisnis, pelanggan memang subyek utama yang ingin dituju. Setiap perusahaan pasti berusaha untuk mengetahui tingkat kepuasan yang dimiliki oleh pelanggan mereka. </p>
            <p>Tingkat kepuasan tersebut tentu saja dapat diperoleh dengan mengetahui apa yang dibutuhkan oleh pelanggan. Dengan menggunakan big data perusahaan bisa melakukan analisis untuk setiap pelanggan nya melalui data yang diterima.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-kelebihan-tpm-dibanding-metode-lainnya',
              'type' => 'article',
              'title' => '3 Kelebihan TPM dibanding Metode Lainnya',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image-5.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'June 9, 2023',
              'content' => "
            
            <p>Merawat berbagai fasilitas dan peralatan kerja sangatlah dibutuhkan, agar bisa menciptakan lingkungan kerja yang produktif dan mampu menjaga mutu serta mencapai tujuan perusahaan dengan cepat. </p>
            <p>Total Productive Maintenance atau yang disingkat TPM adalah suatu sistem yang digunakan untuk memelihara dan meningkatkan kualitas produksi melalui perawatan perlengkapan dan peralatan kerja seperti mesin, equipment dan alat-alat kerja lainnya. </p>
            <p>Keuntungan TPM antara lain membantu memelihara pabrik dan mesin agar selalu dalam kondisi prima, karena operator mampu melakukan perbaikan-perbaikan kecil sehingga staf maintenance dapat fokus menangani permasalahan yang lebih serius. </p>
            <p>Penghalang utama implementasi metode transformasi seperti TPM ini adalah bagaimana merubah pola perilaku dasar atau budaya perusahaan.</p>
            <p>Fokus utama Total Productive Maintenance adalah untuk memastikan semua perlengkapan dan peralatan produksi bisa beroperasi dalam kondisi terbaik dan optimal, sehingga mengurangi risiko terjadinya kerusakan ataupun keterlambatan dalam proses produksi. Berikut 3 kelebihan yang dapat diwujudkan melalui metode TPM :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengurangi Kerusakan Peralatan</span></span>
            
            <p>Operator alat berat yang selalu memantau dan mengawasi kinerja mesin dapat mendeteksi kerusakan lebih awal. Sebelum, terjadi kerusakan yang serius. Hal ini memungkinkan tim pemeliharaan memiliki jadwal maintenance khusus sehingga lebih peralatan dan mesin pabrik lebih terorganisir.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Tempat Kerja Lebih Aman</span></span>
            
            <p>Teknisi yang cenderung mengambil tindakan cepat dan bergegas memperbaiki kerusakan, dapat meminimalisir adanya kerusakan permanen yang membahayakan keselamatan pekerja. Selain itu, saat semua orang menjaga TPM atau Total Productive Maintenance, masalah dapat ditemukan dan ditangani lebih baik sebelum berubah menjadi situasi berbahaya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Performa Lebih Baik</span></span>
            
            <p>Jika semua orang di fasilitas mengawasi TPM ataup erawatan produktif total, maka bisa membantu menghindari kerusakan mesin yang menghambat proses dan mengurangi kualitas produksi.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-perubahan-bisnis-dengan-iot',
              'type' => 'article',
              'title' => '3 Perubahan Bisnis Dengan IoT',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image-4.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'June 8, 2023',
              'content' => "
            
            <p>Perkembangan teknologi dapat menjadi solusi menghemat tenaga dan waktu manusia karena memungkinkan pengawasan dilakukan dari jarak jauh melalui komputer atau smartphone.</p>
            <p>Salah satu jenis sistem berbasis IoT (Internet of Things) yang sedang marak dikembangkan saat ini adalah sistem kontrol jarak jauh, Internet of Things (IoT) adalah salah satu tren baru dalam dunia teknologi yang kemungkinan besar akan menjadi salah satu hal besar di masa depan. </p>
            <p>IoT merupakan sebuah konsep yang bertujuan untuk memperluas manfaat dari konektifitas internet yang tersambung secara terus-menerus.</p>
            <p>IoT dapat menggabungkan antara benda-benda fisik dan virtual melalui eksploitasi data capture dan kemampuan berkomunikasi. Sederhananya dengan IoT bendabenda fisik di dunia nyata dapat berkomunikasi satu dengan yang lain dengan menggunakan bantuan jaringan dan internet.</p>
            <p>Selain untuk berkomunikasi antar obyek dunia nyata, IoT juga bisa digunakan untuk hal lain seperti pengambilan data dari suatu tempat dengan menggunakan sensor. Berikut 3 perubahan yang dapat dilakukan IoT pada bisnis :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi Meningkat</span></span>
            
            <p>Manfaat terbesar dari teknologi IoT yakni memberikan produsen kemampuan untuk mengautomasikan  mesin, sehingga sanggup memaksimalkan efisiensi pengoperasian bisnis. Dapat dikatakan semakin banyak jenis koneksi yang dihasilkan oleh IoT, semakin kecil pula jumlah waktu yang dibutuhkan produsen untuk menyelesaikan tugas.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengurangi Kesalahan</span></span>
            
            <p>Teknologi IoT dapat mengurangi, bahkan seringkali mencegah kekeliruan dalam manajemen inventaris dan aliran produksi. Perangkat yang saling terintegrasi memungkinkan perusahaan untuk memantau peristiwa di semua rantai pasokan dan melacak inventaris. Pengguna perangkat IoT akan mendapatkan pemberitahuan perihal perubahan ataupun pembaruan penting dari yang telah diagendakan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningkatkan Keamanan</span></span>
            
            <p>Sistem keselamatan yang terintegrasi ini mampu melindungi pekerja di area kerja, maupun di jalur distribusi. Apabila terjadi kecelakaan, semua orang yang ada di lokasi dapat langsung disiagakan, operasi bisa dihentikan, dan pimpinan perusahaan bisa langsung menangani dan memastikan kecelakaan tersebut diatasi dengan baik dan benar.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-teknologi-penting-dalam-industri-manufaktur',
              'type' => 'article',
              'title' => '3 Teknologi Penting Dalam Industri Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image-3.png',
              'tags' => 'industri 4.0',
              'date' => 'June 7, 2023',
              'content' => "
            
            <p>Tren Teknologi manufaktur merupakan inovasi tiada henti datang dari dunia industri yang memiliki tujuan akhir membuat sebuah perusahaan menjadi lebih efektif dan efisien. </p>
            <p>Inovasi tersebut tentunya dapat merekayasa manufaktur menjadi hal yang biasa kita jumpai dalam perkembangan usaha dibidang industri. </p>
            <p>Dengan demikian maka akan muncul tren teknologi yang dapat membantu industri manufaktur untuk mempermudah pekerjaan seperti berikut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Artificial Intelligence </span></span>
            
            <p>Ialah cabang ilmu komputer yang berkaitan dengan pengembangan sistem komputer yang mampu meniru kecerdasan manusia dan melakukan tugas-tugas yang biasanya memerlukan pemikiran manusia.</p>
            <p>AI melibatkan penggunaan algoritma dan teknik komputasional untuk menghasilkan komputer atau mesin yang dapat belajar dari data, mengambil keputusan, memecahkan masalah, dan melakukan tugas-tugas yang kompleks dengan tingkat kecerdasan yang mendekati atau bahkan melebihi manusia.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mobile ERP</span></span>
            
            <p>Adalah sistem ERP yang dirancang dan dioptimalkan untuk digunakan di perangkat mobile, seperti smartphone atau tablet. Mobile ERP memungkinkan pengguna untuk mengakses dan mengelola data serta fungsi-fungsi ERP dari perangkat mobile, memberikan fleksibilitas dan aksesibilitas yang lebih besar dalam pengelolaan operasional bisnis.</p>
            <p>Dengan mobile ERP, pengguna dapat melakukan berbagai tugas seperti memonitor inventaris, mengelola pesanan, melacak pengiriman, mengakses informasi pelanggan, mengelola jadwal produksi, dan banyak lagi, semua melalui aplikasi mobile yang mudah digunakan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Green Manufacturing</span></span>
            
            <p>Merupakan pendekatan dalam proses produksi yang bertujuan untuk mengurangi dampak negatif terhadap lingkungan dan menjaga keberlanjutan lingkungan hidup. Green manufacturing melibatkan penerapan praktik dan teknologi yang ramah lingkungan, mengurangi limbah, penggunaan sumber daya yang efisien, dan mengurangi emisi dan polusi.</p>
            <p>Tujuan dari green manufacturing adalah menciptakan produk dengan dampak lingkungan yang lebih rendah, mengurangi jejak karbon, mengurangi penggunaan sumber daya alam, dan mempromosikan praktik bisnis yang berkelanjutan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-sasaran-zero-pada-penerapan-tpm',
              'type' => 'article',
              'title' => '3 Sasaran Zero Pada Penerapan TPM',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image-2.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'June 6, 2023',
              'content' => "
            
            <p>TPM adalah sebuah cara yang perlu dilakukan perusahaan untuk dapat merawat atau menjaga berbagai jenis macam alat operasional. </p>
            <p>Total Productive Maintenance atau TPM adalah pendekatan terhadap pemeliharaan peralatan yang memiliki tujuan untuk mencapai sebuah proses produksi yang sempurna.</p>
            <p>TPM (Total Preventive Maintenance) sangat penting untuk dilakukan, jika TPM tidak dilakukan maka akan terjadi kerusakan mesin yang tidak terdeteksi sehingga dapat menganggu jalannya proses produksi. </p>
            <p>Hal yang ditekankan dari metode TPM adalah dengan melakukan pemeliharaan secara proaktif dan preventif dengan tujuan dapat memaksimalkan keefektifan peralatan operasional. Metode tersebut akan membuat karyawan yang bukan merupakan staf maintenance ikut terlibat untuk merawat alat yang digunakan pada saat proses produksi. Berikut 3 sasaran TPM yang perlu diketahui :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Zero Downtime</span></span>
            
            <p>Zero downtime ialah suatu usaha agar mesin selalu beroperasi untuk mendukung proses produksi. Karena mesin yang bermasalah tersebut maka produksi atau operasional dari proses tentunya akan terganggu. Jika perusahaan berhasil meminimalkan downtime yang terjadi pada mesin, maka hasil produksi secara otomatis akan menjadi maksimal dan memberikan kepuasan bagi para pelanggan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Zero Defect</span></span>
            
            <p>Zero defect ialah upaya agar hasil produksi selalu dalam kondisi kualitas terbaik, tanpa cacat. Jika perusahaan berhasil menekan defect produk, imbasnya akan secara otomatis hasil produksi akan menjadi semakin optimal tanpa harus melakukan rework (pengerjaan ulang) yang memakan waktu. </p>
            <p>Terdapat dua kategori cacat, pertama tidak bisa digunakan lagi dan kedua cacat yang kemungkin masih bisa diperbaiki. Namun, kedua jenis cacat ini sama-sama disebut sebagai waste karna dapat menganggu jalannya proses produksi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Zero Accident</span></span>
            
            <p>Zero accident adalah proses pengupayaan agar tidak terjadi kecelakaan kerja di area kerja. Kecelakaan kerja bisa saja mengakibatkan karyawan terluka (seperti cacat bahkan kematian). Oleh karena itu perusahaan harus mampu mencegah potensi terjadinya kecelakaan kerja di lingkungannya pada area yang jelas berbahaya. </p>
            <p>Kecelakaan yang terjadi selama operasional produksi yang terkait dengan equipment, kerusakan mesin, pengoperasian yang tidak proper atau bahkan sistem perawatan yang tidak benar itu juga bisa juga mengakibatkan timbulnya sebuah kecelakaan kerja.  </p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-penerapan-smart-factory-dalam-manufaktur',
              'type' => 'article',
              'title' => '3 Penerapan smart factory dalam manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image-1.png',
              'tags' => 'industri 4.0',
              'date' => 'June 5, 2023',
              'content' => "
            
            <p>Revolusi Industry 4.0 atau sering diartikan sebagai cyber physical system yaitu adalah fase dimana komputerisasi semakin dikuatkan dengan kemunculan internet dan integrasi dari berbagai macam sistem.</p>
            <p>Aktivitas controlling dan monitoring juga dapat dilakukan secara otomatis maupun dengan meremote dari jarak jauh sekalipun. </p>
            <p>Dapat dikatakan bahwa industry 4.0 adalah perubahan dalam proses memproduksi sebuah barang (maupun melakukan produktivitas berkaitan lainnya) yang tentunya memanfaatkan teknologi digital, integrasi, dan otomatisasi dalam meningkatkan efisiensi dan efektivitas produksi dengan menekan biaya produksi.</p>
            <p>Smart factory sendiri menjadi inti utama dari kegiatan industry 4.0. Dapat dikatakan demikian karena data yang di kelola bisa berjalan dengan stabil. Banyak kelebihan yang tentunya bisa di dapatkan dalam pemanfaatan smart factory. </p>
            <p>Salah satunya, perusahaan dapat dengan mudah memprediksi secara cepat bahkan bisa melayani berbagai kebutuhan pelanggan.</p>
            <p>Smart factory atau pabrik pintar atau smart manufacturing menjadi layanan perusahaan yang bisa di nilai berkelas. Dimana perusahaan sudah memanfaatkan teknologi dengan basis digital yang menghasilkan memungkinkan semua bisa di proses secara otomatis dan hasilnya juga optimal.</p>
            <p>Berikut 3 penerapan smart factory dalam manufaktur :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Cyber Security</span></span>
            
            <p>Teknologi, proses dan praktik yang sudah di persiapkan khusus untuk melindungi jaringan, program, komputer serta data dari berbagai serangan yang ada. Tentu saja jika perusahaan sudah memanfaatkan basis digital, maka pentingnya memperhatikan cyber security. Terutama pada saat menyimpan, mengambil dan mengakses data penting.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>System Integration</span></span>
            
            <p>Teknologi yang sudah pasti di gunakan oleh sebuah pabrik pintar. Bukan hanya satu teknologi saja namun juga berbagai teknologi. Ringkasan proses dalam menghubungkan beberapa system komputerisasi dengan software aplikasi. Baik dalam bentuk aplikasi, fisik dan juga fungsinya. Dalam hal ini sistem integrasi akan menggabungkan komponen sub-sub sistem menjadi satu dalam sebuah sistem.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Cloud Computing</span></span>
            
            <p>Memiliki fungsi sebagai sebuah pusat pengelolaan data serta aplikasi dengan basis internet. Semua data akan disimpan secara digital dari teknologi tersebut. Dengan pemanfaatan ini tentu saja mengurangi risiko seperti kehilangan data saat komputer rusak atau mungkin terkena virus. Ini menjadi tempat teraman saat menyimpan semua data perusahaan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-pillar-paling-penting-dalam-tpm',
              'type' => 'article',
              'title' => '3 Pillar Paling Penting Dalam TPM',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/06/image.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'June 2, 2023',
              'content' => "
            
            <p>Perkembangan industri manufaktur yang terus maju membuat perusahaan untuk selalu dapat memenuhi kebutuhan konsumen dan menigkatkan keuntungan. </p>
            <p>Total Productive Maintenance adalah salah satu cara yang bisa digunakan untuk memenuhi hal tersebut. </p>
            <p>Merawat segala fasilitas dan peralatan sangatlah dibutuhkan agar bisa menciptakan lingkungan kerja yang produktif dan mampu menjaga mutu serta mampu mencapai tujuan perusahaan dengan cepat.</p>
            <p>Total Productive Maintenance (TPM) adalah program perawatan yang melibatkan sebuah konsep untuk perawatan pabrik dan peralatan. </p>
            <p>Tujuan dari program TPM adalah untuk meningkatkan produksi secara nyata, sementara tujuan yang lain yaitu meningkatkan semangat kerja dan kepuasan kerja. Kerusakan alat atau mesin mampu mengancam keselamatan setiap pegawai dan menyebabkan kerugian finansial yang besar.</p>
            <p>Fokus utama total productive maintenance adalah guna memastikan seluruh perlengkapan dan juga peralatan produksi bisa beroperasi dengan kondisi yang baik agar mampu menghindari terjadinya kerusakan dan juga keterlambatan dalam proses produksi. Dalam penerapannya TPM memiliki beberapa pillar, berikut 3 pillar penting dalam TPM :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Autonomous Maintenance</span></span>
            
            <p>Disebut juga pemeliharaan otonom menempatkan tanggung jawab kegiatan pemeliharaan dasar di tangan operator. Pemeliharaan yang dilakukan oleh operator di shop floor meliputi pembersihan dasar mesin, lubrikasi, pengencangan mur dan baut, inspeksi, diagnosis potensi masalah dan tindakan lain yang meningkatkan umur produktif mesin atau peralatan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Quality Maintenance</span></span>
            
            <p>Pilar ini membahas tentang masalah kualitas dengan memastikan peralatan/mesin produksi dapat mendeteksi dan mencegah kesalahan selama produksi berlangsung. Dengan kemampuan mendeteksi kesalahan ini proses produksi menjadi cukup handal dalam menghasilkan produk sesuai dengan spesifikasi pada pertama kalinya. Dengan demikian tingkat kegagalan produk akan terkendali dan biaya produksi pun jadi semakin rendah.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Early Equipment Maintenance</span></span>
            
            <p>Pemeliharaan peralatan dini adalah salah satu dari 8 pilar yang mendorong keberhasilan TPM. Saat tiba waktunya untuk memilih peralatan baru atau mengembangkan produk baru, pertimbangkan pengalaman sebelumnya untuk mempermudah perawatan. Ini bisa sesederhana memilih cat yang bisa dicuci untuk dinding (yang membuat pembersihan lebih mudah), atau serumit memilih robot yang dapat mendiagnosis sendiri malfungsi (yang meningkatkan produksi).</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-pengaruh-besar-kaizen-bagi-perusahaan',
              'type' => 'article',
              'title' => '3 Pengaruh Besar Kaizen Bagi Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/office.jpg',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'May 31, 2023',
              'content' => "
            
            <p>Membangun budaya Kaizen tidak mudah. Tetapi perusahaan yang berhasil memperoleh hasil maksimal telah menginvestasikan waktu dan upaya untuk mempelajari dan mempromosikannya kepada pekerja mereka. </p>
            <p>Pada akhirnya, mereka menuai sejumlah besar manfaat yang hanya bisa didapatkan melalui ketekunan dalam mempelajari, menyerap dan mempraktekkan prinsip-prinsip Kaizen dalam pekerjaan sehari-hari.</p>
            <p>Kaizen adalah cara kerja di mana perbaikan dilakukan terus menerus. Metode Kaizen berpijak pada prinsip bahwa tidak ada yang terbaik, tetapi lebih baik adalah sebuah kewajiban.</p>
            <p>Metode Kaizen adalah budaya kerja yang memungkinkan adanya perubahan-perubahan kecil dengan intensitas tinggi. Berdasarkan prinsip Kaizen, kita tidak dituntut untuk langsung memberikan perubahan revolusioner dengan risiko membahayakan operasional perusahaan.</p>
            <p>Kaizen sangat mudah diadaptasi, sehingga dapat diterapkan pada hampir semua jenis industri termasuk perbankan, pemerintah, layanan kesehatan, ritel, dan transportasi. Namun seperti yang sudah disinggung sebelumnya, manfaat dari metodologi yang luar biasa ini tidak terbatas pada keuntungan finansial saja.</p>
            <p>Dengan begitu maka penerapan kaizen pada perusahaan memiliki pengaruh yang besar sebagai berikut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemaksimalan serapan sumber daya</span></span>
            
            <p>Keresponsifan terhadap masalah produksi serta kemampuan untuk memangkas biaya produksi dapat mengantarkan perusahaan pada optimalisasi sumber daya. </p>
            <p>Pada suatu kegiatan produksi, bisa saja satu tahapan membutuhkan biaya lebih besar dari yang lainnya. Maka dengan serapan yang optimal, sumber daya maupun dana dapat dialokasikan ke tahapan produksi lain.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Produktivitas meningkat</span></span>
            
            <p>Produktivitas adalah jantung dari kegiatan operasional perusahaan. Kaizen mengakomodasi hal ini dengan pemecahan masalah dan perbaikan skala kecil yang mungkin dianggap remeh, tetapi memiliki dampak strategis terhadap daya produksi perusahaan. </p>
            <p>Dengan menghilangkan segala jenis waste, maka otomatis dapat meningkatkan produktivitas. Dengan demikian, fasilitas di area kerja akan jauh lebih produktif daripada sebelumnya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengurangan Biaya</span></span>
            
            <p>Dengan menerapkan Kaizen maka dapat membantu perusahaan untuk mengurangi biaya yang ada. Pengurangan biaya dapat dilakukan dengan menghilangkan waste (pemborosan) di area tempat kerja agar menghemat biaya. Perusahaan akan mendapat manfaat positif melalui penghematan biaya jika dilakukan secara terus-menerus.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-penyebab-kegagalan-tpm-ini-solusinya',
              'type' => 'article',
              'title' => '3 Penyebab Kegagalan TPM! Ini Solusinya!',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-19.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'May 30, 2023',
              'content' => "
            
            <p>Perkembangan industry yang semakin maju menjadikan para pemiliknya untuk selalu mampu memenuhi kebutuhan serta keinginan para pelanggan. </p>
            <p>Salah satu caranya adalah dengan menerapkan TPM sebagai sebuah metode yang dapat dilakukan untuk memenuhi kebutuhan tersebut.</p>
            <p>Merawat berbagai fasilitas dan peralatan kerja sangatlah dibutuhkan, agar bisa menciptakan lingkungan kerja yang produktif dan mampu menjaga mutu serta mencapai tujuan perusahaan dengan cepat.</p>
            <p>Total Productive Maintenance atau yang disingkat TPM adalah suatu sistem yang digunakan untuk memelihara dan meningkatkan kualitas produksi melalui perawatan perlengkapan dan peralatan kerja seperti mesin, equipment dan alat-alat kerja lainnya. </p>
            <p>TPM merupakan suatu kegiatan yang memiliki tujuan memaksimalkan efisiensi penggunaan alat dan memanfaatkan sistem perawatan preventif yang dirancang untuk keseluruhan peralatan dengan mengimplementasikan aturan dan memberikan motivaasi kepada seluruh elemen perusahaan.</p>
            <p>Dalam penerapannya TPM tidak selalu berjalan mulus, dengan begitu berikut penyebab kegagalan TPM serta solusinya :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemborosan Inventory</span></span>
            
            <p>Strategi pergudangan dan manajemen persediaan tradisional sering memisahkan bagian dan persediaan dari area produksi dan memungkinkan overhead inventori yang signifikan untuk menghindari kekurangan suku cadang. </p>
            <p>Solusinya adalah denga menerapkan CMMS yaitu computerized maintenance management systems, CMMS memungkinkan pengguna untuk mencatat penggunaan sebagian dalam aplikasi yang menyertainya, dengan mudah melihat tingkat inventaris di beberapa lokasi dan menerima peringatan ketika persediaan perlu diisi ulang. </p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Tidak Ada Perubahan</span></span>
            
            <p>Bergantung pada proses saat ini ialah salah satu penyebab kegagalan TPM, hal ini terjadi karena para karyawan yang tidak konsisten dalam menjalankan TPM.</p>
            <p>Solusinya adalah menenalkan TPM secara keseluruhan kepada para pekerja yang bertujuan untuk memberikan pemahaman utama mengenai TPM. Cara selanjutnya adalah memotivasi karyawan kita dengan menawarkan semacam hadiah. Kita memerlukan mekanisme kerja yang memastikan karyawan senang dengan situasi baru, dan mereka yang berkinerja terbaik akan dihargai.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Perubahan Budaya</span></span>
            
            <p>Pada penerapan TPM tentunya akan sangat banyak budaya yang berubah, perubahan tersebut tentunya didasari demi kebaikan perusahaan. Tapi sering kali perubahan tersebut malah akan memecah hubungan antar karyawan. Solusinya adalah dengan Tetapkan kode etik formal yang menetapkan harapan tentang bagaimana karyawan diharapkan berinteraksi agar terjadi hubungan yang lebih bai kantar karyawan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-cara-singkat-penerapan-kaizen-event',
              'type' => 'article',
              'title' => '3 Cara Singkat Penerapan Kaizen Event',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-18.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'May 29, 2023',
              'content' => "
            
            <p>Kaizen merupakan filosofi tentang perbaikan yang dilakukan secara terus menerus dan berkelanjutan. </p>
            <p>Filosofi asal Jepang ini digunakan hampir di seluruh dunia, di berbagai macam industri, dan di berbagai tempat kerja karena terbukti memberikan hasil positif.</p>
            <p>Kaizen event adalah suatu cara untuk melalukan perubahan pada area kerja tertentu dengan sasaran terstentu. Kaizen event biasanya hanya berlangsung selama 2-5 hari. </p>
            <p>Dalam pengertiannya kaizen event diartikan sama dengan kaizen blitz yang memiliki arti cepat, maka dapat diartikan bahwa kaizen event adalah metode penerapan kaizen dalam jangka waktu yang cepat.</p>
            <p>Pendekatan Kaizen event merupakan suatu teknik yang digunakan untuk mencapai peningkatan kinerja dengan cepat. Dasarnya ialah pendekatan Kaizen, yang merupakan bahasa Jepang untuk “continuous improvement”.</p>
            <p>Dalam penerapannya tentu kaizen event perlu melalukan beberapa tahapan seperti :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Tahap Persiapan</span></span>
            
            <p>Dalam hal ini yang perlu dilakukan adalah mengidentifikasi masalah yang ada serta pembentukan tim untuk menyelesaikan masalah tersebut. Tugas pertama yang perlu dilakukan oleh para team adalah mengumpulkan data dan informasi tentang masalah penting dalam bisnis dan masalah tersebut harus teridentifikasi dengan jelas.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kegiatan Kaizen Event</span></span>
            
            <p>Beberapa hari, sumber daya dan area akan didedikasikan untuk melakukan aktivitas kaizen atau perbaikan. Semua anggota tim akan fokus pada upaya menghilangkan masalah dan pemborosan, dan menghasilkan proses yang mendukung bisnis dalam mencapai tujuannya. Bentuk perbaikan ini bisa berupa inovasi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Evaluasi Hasil</span></span>
            
            <p>Setelah semua perbaikan sudah dilakukan maka dapat dicek hasilnya. Jika hasilnya tidak efektif maka dapat dilakukan Analisa ulang, dan jika hasilnya sudah efektif maka dapat digunakan sebagai dasar penerapan kaizen selanjutnya. Kemudian untuk tindakan yang belum selesai pada masa kaizen event, lakukan follow up untuk memastikan tindakan perbaikan sudah diselesaikan.</p>
            <p>Manfaat utama dari kaizen event, adalah cepatnya improvement dilakukan, biasanya tercapai peningkatan produktivitas antara 20% sampai 100% dalam waktu seminggu. Bahkan pada beberapa kasus, kaizen event mampu mengurangi lead dari beberapa minggu menjadi hanya satu atau dua hari. </p>
            <p>Selain itu, kaizen event juga mampu mengurangi penggunaan ruang pabrik sebesar 50% atau lebih. Kaizen event ini mampu memberikan manfaat dari lean manufacturing atau 5S dalam waktu yang sangat singkat.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-step-penting-penerapan-big-data-analytics',
              'type' => 'article',
              'title' => '4 Step Penting Penerapan Big Data Analytics',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-17.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'May 26, 2023',
              'content' => "
            
            <p>Data tentunya merupakan suatu hal yang penting dalam sebuah perusahaan, data yang dimiliki tentunya harus akurat, kokoh dan tidak lemah. </p>
            <p>Big data analytics ialah merupakan rangkaian proses untuk mengambil sebuah informasi dari kumpulan data mentah yang bersifat terstruktur maupun tidak terstruktur. </p>
            <p>Data yang dimaksudkan adalah data dalam jumlah besar dan tidak memungkinkan untuk diproses secara konvensional.</p>
            <p>Informasi yang diambil berasal dari kumpulan data-data antara lain ialah perilaku konsumen, preferensi konsumen, tren pasar terbaru, hinggga melihat korelasi yang tidak diketahui dan jika ada pola tersembunyi dari data-data tersebut. </p>
            <p>Big data analytics mencakup keseluruhan proses pengumpulan, penataan, serta analisa data dalam jumlah besar dari berbagai macam sumber. Dalam penerapannya tentu big data memiliki beberapa langkah penting yang perlu dilakukan seperti :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Data Mining</span></span>
            
            <p>Data mining adalah suatu proses pengerukan atau pengumpulan informasi penting dari suatu data yang besar. Proses data mining seringkali menggunakan metode statistika, matematika, hingga memanfaatkan teknologi AI. Maka dapat diartikan bahwa data mining adalah sebuah proses identifikasi dari insight yang berharga dari database.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Data Collection</span></span>
            
            <p>Data collection didefinisikan sebagai prosedur mengumpulkan, mengukur dan menganalisis wawasan yang akurat untuk penelitian menggunakan teknik yang divalidasi sesuai standar. Sehingga data yang masuk ke dalam database akan terus bertambah seiring dengan pertumbuhan dunia.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Data Cleaning</span></span>
            
            <p>Data yang didapat dari proses big data analytics didapatkan secara keseluruhan melalui internet. Dari 100% data yang sudah didapatkan, kemungkinan ada 30%-40% data yang tidak akurat dan tidak dibutuhkan oleh perusahaan. Maka dari itu, dibutuhkan data cleaning alias pembersihan data untuk menyaring data mana yang dibutuhkan atau tidak.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Data Storing</span></span>
            
            <p>Menyimpan sebuah data, apalagi data yang besar tentunya tidak bisa sembarangan. Storage untuk penyimpanan data yang baik menyediakan infrastruktur yang memiliki mesin analisis data terbaru. Tak hanya itu, storage yang baik juga serta ruang penyimpanan dengan ukuran besar. Banyak software yang digunakan untuk menyimpan data berskala besar. </p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'hindari-3-hal-ini-agar-kaizen-berhasil',
              'type' => 'article',
              'title' => 'Hindari 3 Hal Ini Agar Kaizen Berhasil',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-16.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'May 25, 2023',
              'content' => "
            
            <p>Kaizen adalah sebuah konsep perbaikan yang fokus pada dua hal, yaitu pengembangan dan peningkatan berkelanjutan. </p>
            <p>Prinsip kaizen bekerja dengan membenarkan kesalahan dengan melakukan analisis penyebab terjadinya kesalahan tersebut, kemudian memperbaikinya.</p>
            <p>Sederhananya, kaizen adalah sebuah pendekatan sistematis untuk melakukan perubahan demi kemajuan perusahaan. </p>
            <p>Metode kaizen dirancang untuk menciptakan efisiensi dengan menciptakan kerja tim yang lebih baik melalui budaya disiplin, semangat kerja yang tinggi, kualitas kerja dan perbaikan.</p>
            <p>Konsep ini didasarkan pada gagasan bahwa melibatkan semua karyawan dalam proses akan membantu mengarah pada pengambilan keputusan yang berkualitas dan kerja tim yang lebih baik. Dalam penerapannya tentu ada beberapa hal yang perlu dihindari sebagai berikut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kurangnya follow-up</span></span>
            
            <p>Bahkan saat acara Kaizen selesai dan semuanya berjalan dengan baik, janganlah diakhiri begitu saja. Penting untuk mempertahankan perbaikan ini secara berkelanjutan. Lakukan follow up atau tindak lanjut bersama orang-orang yang terlibat dan memastikan hal-hal yang mereka pelajari berhasil dilaksanakan dengan benar. </p>
            <p>Tanpa tindak lanjut ini, seluruh proses Kaizen dan pengalaman yang Anda raih akan sia-sia. Lakukan follow up secara berkala dengan tim manajemen dan karyawan di garis depan untuk memastikan semua hal yang dipelajari, benar-benar diserap dan digunakan secara permanen.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Tujuan yang salah</span></span>
            
            <p>Dalam merencanakan dan melakukan Kaizen, kita harus dapat mendefinisikan secara tepat faktor kesuksesan apa yang akan dicapai. Ketika orang tidak tahu persis apa yang mereka butuhkan untuk mencapai tujuan, mereka tak akan menemukan manfaat dari Kaizen. </p>
            <p>Luangkan waktu untuk mencantumkan mendeskripsikan tujuan dan faktor-faktor penentu faktor keberhasilan pencapaian tujuan tersebut, lalu bagikan dan libatkan semua orang dalam penerapannya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kurangnya komitmen</span></span>
            
            <p>Dalam banyak kasus, tim manajemen dipaksa untuk membiarkan tim mereka mengikuti kegiatan Kaizen dengan para eksekutif, namun mereka mungkin tidak melihat manfaatnya. Bila ini terjadi, kemungkinan besar mereka tidak akan mendorong penerapan apa yang dipelajari pada kegiatan tersebut ketika semua orang kembali ke peran normal mereka. </p>
            <p>Pastikan tim manajemen sepenuhnya terlibat dengan prosesnya, dan pertimbangkan menerjunkan manajemen langsung pada tim perencanaan kegiatan Kaizen.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'robotic-process-automation-secanggih-apa',
              'type' => 'article',
              'title' => 'Robotic Process Automation, Secanggih Apa?',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-15.png',
              'tags' => 'industri 4.0',
              'date' => 'May 24, 2023',
              'content' => "
            
            <p>Robotic Process Automation atau RPA ialah sebuah teknologi berupa perangkat lunak yang berguna untuk membangun serta menyebarkan software robotic agar dapat meniru tindakan yang dilakukan oleh manusia.</p>
            <p>Software tersebut dapat melakukan tindakan ringan yang biasa dilakukan oleh manusia saat berinteraksi dengan sistem maupun perangkat lunak yang dimiliki.</p>
            <p>Contohnya seperti mengidentifikasi data hingga berbagai pekerjaan ringan lainnya yang biasa dilakukan secara berulang.</p>
            <p>Bot RPA dapat berinteraksi dengan aplikasi atau sistem apa pun dengan cara yang sama seperti yang dilakukan manusia. Perbedaannya hanyalah RPA dapat beroperasi sepanjang waktu, non stop, jauh lebih cepat, dan dengan keandalan serta presisi yang sangat tinggi.</p>
            <p>Dengan kemampuannya dalam meniru pekerjaan manusia, RPA adalah software yang memiliki beragam manfaat bagi pengelolaan bisnis perusahaan. Beberapa manfaat dapat dihadirkan dari penggunaan RPA, seperti berikut :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Transformasi Digital</span></span>
            
            <p>RPA tersendiri ialah merupakan hasil dari kecanggihan teknologi inovasi. Menerapkan RPA dalam sebuah sistem kerja maka akan mempercepat transformasi digital di dalam lingkungan pekerjaan. Maka dapat membuat perusahaan cepat beradaptasi dengan pesatnya perkembangan teknologi saat ini.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menghemat Biaya</span></span>
            
            <p>Dengan cara kerja yang cepat maka RPA tentunya dapat menghemat lebih banyak biaya operasional. Maka dengan demikian perusahaan hanya perlu mengeluarkan biaya pemeliharaan untuk software robotic tersebut guna dapat terus bekerja secara maksimal.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Akurasi Hasil</span></span>
            
            <p>Perbedaan paling penting antara Robotic Process Automation dengan tenaga tradisional adalah dalam hal akurasi hasil. RPA sudah dirancang dengan algoritma tertentu sehingga dapat meminimalisir kesalahan dalam bekerja.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'big-data-dalam-era-digital-berikut-kelebihannya',
              'type' => 'article',
              'title' => 'Big Data Dalam Era Digital, Berikut Kelebihannya!',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-14.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'May 23, 2023',
              'content' => "
            
            <p>Perkembangan zaman merupakan hal yang tidak bisa dihindari oleh siapapun. Setiap harinya akan selalu ada teknologi-teknologi yang baru dengan maksud mempermudah kehidupan kita. </p>
            <p>Salah satu teknologi yang sangat penting adalah big data. Konsep big data mungkin belum banyak dipahami, tapi manfaat big data telah banyak dirasakan, terutama bagi pengguna internet yang setiap saat mengakses informasi secara online.</p>
            <p>Big data adalah sekumpulan data yang memiliki volume atau ukuran yang sangat besar yang terdiri dari data yang terstruktur, semi-terstruktur, dan tidak terstruktur yang dapat berkembang seiring waktu berjalan.</p>
            <p>Big data dapat digunakan untuk memprediksi atau menganalisis penyebab suatu masalah yang terjadi pada sistem. Pemanfaatan dari big data ini juga dapat meminimalisir adanya kegagalan. Hasil dari analisis tersebut dapat digunakan dan ditampilkan secara langsung (real time).</p>
            <p>Dengan kemudahan yang didapatkan maka dapat dikatakan bahwa big data memiliki banyak sekali kelebihan seperti yang dijelaskan dibawah ini :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengetahui Tingkat Kesuksesan Strategi Secara Real Time</span></span>
            
            <p>Data yang ditampilkan dapat dijadikan bahan untuk menganalisa penyebab dari suatu permasalahan yang terjadi di dalam sistem secara real-time. Artinya, jika dimanfaatkan dengan benar, Big Data akan mempercepat kita untuk mengambil tindakan sebelum kegagalan sistem menjadi semakin parah.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mendeteksi Anomali dalam Bisnis</span></span>
            
            <p>Analisa terhadap Big Data dapat membantumu dalam mendeteksi secara cepat dan tepat, bentuk atau proses kegiatan yang menyimpang (anomali) dari sisi teknis maupun non teknis. Selain itu, Big data juga dapat menyarankan opsi untuk mengatasi anomali tersebut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningkatkan Penjualan</span></span>
            
            <p>Untuk mengetahui dan menilai produk-produk seperti apa yang perlu diciptakan dan di produksi oleh perusahaan agar konsumen menyukai dan membeli produk yang dibuat perusahaan, perusahaan memerlukan beberapa data.</p>
            <p>Biasanya data yang bisa digunakan untuk meningkatkan sales perusahaan, di antaranya apa yang disukai, siapa yang disukai, bagaimana perasaan saya, berada dimana saya, bersama siapa saya, apa yang telah saya beli, apa saja yang ingin saya beli, mimpi apa yang ingin saya miliki, dan hal-hal lainnya.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-solusi-kegagalan-penerapan-big-data-pada-perusahaan',
              'type' => 'article',
              'title' => '3 Solusi Kegagalan Penerapan Big Data Pada Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-13.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'May 22, 2023',
              'content' => "
            
            <p>Pada era modern, data dapat diibaratkan sebagai bahan bakar untuk menjalankan sebuah  roda perusahaan agar sampai tujuan melalui pilihan rute yang tepat. </p>
            <p>Semua data yang dimiliki terkumpul menjadi sekumpulan data yang memiliki jumlah besar yang umumnya dikenal sebagai Big Data. </p>
            <p>Big data adalah istilah yang menggambarkan volume data yang besar dan sulit dikelola, baik yang terstruktur maupun tidak terstruktur. Big data juga dikenal sebagai kumpulan data yang besar dan kompleks yang terus bertambah setiap waktu. </p>
            <p>Secara sederhana, big data adalah pengumpulan dan penggunaan informasi dari berbagai sumber untuk membuat sebuah keputusan. Bisa dibilang big data merupakan suatu konsep mengenai kemampuan untuk mengumpulkan, menganalisa, dan mengolah jumlah data yang besar dan datang setiap harinya.</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Data dari berbagai sumber tersimpan dalam platform yang berbeda</span></span>
            
            <p>Tantangan pengelolaan big data yang umum terjadi dalam suatu perusahaan adalah kebutuhan untuk mengelola data dari berbagai macam sumber, namun data yang diterima tersimpan di platform yang berbeda – berdasarkan jenis data dan asal sumbernya. </p>
            <p>Kesenjangan ini akan menimbulkan masalah saat proses penarikan dan analisa data. Jika situasinya seperti itu, analisa hasil analisa data akan cenderung tidak efektif karena kelengkapan dan akurasinya perlu dipertanyakan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengklasifikasikan data yang berkualitas</span></span>
            
            <p>Dengan banyaknya data yang dimiliki, karyawan akan sulit untuk mengklasifikasikan data yang berkualitas. Pada akhirnya, proses analisa tidak fokus pada data yang benar-benar memiliki value untuk kemajuan bisnis perusahaan. </p>
            <p>Selain itu, jika karyawan harus mengklasifikan data yang berkualitas secara manual, maka mereka tidak akan mendapatkan data real-time untuk menemukan tren terkini.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Membutuhkan banyak biaya</span></span>
            
            <p>Tantangan pengelolaan big data berikutnya adalah banyaknya biaya yang dibutuhkan untuk menjalankan proses analisa data yang efektif.Untuk mengatasi tantangan pengelolaan big data ini, perusahaan dapat mengimplementasi platform big data analytics yang menawarkan fleksibilitas dalam hal skema pembayaran. </p>
            <p>Dengan memilih platform big data analytics yang menawarkan skema pembayaran fleksibel, perusahaan hanya perlu membayar sesuai dengan fitur yang mereka butuhkan dan gunakan. Sehingga, perusahaan dapat mengeluarkan biaya investasi teknologi big data yang lebih efisien.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-metode-utama-management-inventory',
              'type' => 'article',
              'title' => '4 Metode Utama Management Inventory',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-12.png',
              'tags' => 'industri 4.0',
              'date' => 'May 19, 2023',
              'content' => "
            
            <p>Management inventory ialah merupakan sebuah asset yang berharga bagi setiap perusahaan, oleh karena itu, maka penting untuk diterapkan pada perusahaan.</p>
            <p>Makna dari management adalah sistem pengelolaan sehingga sesuatu tersebut bisa benar-benar efektif. Sedangkan inventory adalah stok barang atau bahan yang disimpan untuk tujuan tertentu.</p>
            <p>Tujuan tersebut di antaranya adalah untuk memenuhi kebutuhan proses produksi atau dijual lagi. Inventory ini meliputi bahan baku, barang dalam proses, dan barang jadi.</p>
            <p>Jadi dapat diartikan bahwa management inventory adalah suatau management maupun pengelolaan yang dapat mengkontrol setiap produk ataupun barang yang diperjual belikan dalam operasi sehari hari pada sebuah perusahaan.</p>
            <p>Tujuan utama dari management inventory adalah memastikan perusahaan berada dalam kondisi aman. Perusahaan dinyatakan aman ketika memiliki persediaan atau safety stock. </p>
            <p>Dalam pelaksanaannya manajemen inventory tiap perusahaan tidaklah selalu sama, perbedaan cara manajemen ini ditentukan oleh banyaknya faktor seperti besar kecilnya sebuah perusahaan dan strategi dari bisnis yang sedang dijalankan. Berikut 4 metode utama dalam penerapan management inventory :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Analisa ABC</span></span>
            
            <p>Metode ini membagi-bagi persediaan bahan baku produk ke dalam beberapa golongan tergantung kualitas produk. Seperti bahan baku yang membutuhkan biaya perawatan lebih mahal dikategorikan sebagai A, perawatan sedang dikategorikan sebagai B, dan seterusnya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Just In Time</span></span>
            
            <p>Perusahaan didorong untuk tidak memiliki persediaan barang, lantaran barang harus selalu bisa dikeluarkan alias terjual habis ke konsumen. Namun, dengan metode ini, perusahaan bisa tiba-tiba membutuhkan pasokan stok barang ketika mendapatkan pesanan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Economic Order Quantity</span></span>
            
            <p>Dengan metode ini, perusahaan hanya menyimpan persediaan bahan baku produk sesuai dengan jumlah pesanan yang diterima sebelumnya. Metode ini dianggap sangat menguntungkan, lantaran perusahaan tidak harus mengeluarkan biaya pemeliharaan bahan dan gedung.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Material Requirement Planning</span></span>
            
            <p>Metode ini menjamin persediaan bahan baku produksi perusahaan selalu tersedia. Dalam Bahasa Indonesia, MRP dikenal sebagai perencanaan kebutuhan material. MRP juga mengatur jumlah persediaan bahan baku, semakin sedikit bahan baku dianggap semakin bagus.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-sektor-ini-wajib-memanfaatkan-iot',
              'type' => 'article',
              'title' => '3 Sektor Ini Wajib Memanfaatkan IoT',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-11.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'May 17, 2023',
              'content' => "
            
            <p>Teknologi IoT didefinisikan sebagai jaringan objek fisik yang berisi teknologi tertanam untuk berkomunikasi dan merasakan atau berinteraksi dengan keadaan atau lingkungan. </p>
            <p>Artinya, perangkat di sekitar dapat terhubung ke internet dan satu sama lain untuk mengaktifkan otomatisasi, menangkap lebih banyak data, dan mengontrol perangkat serta proses dari jarak jauh.</p>
            <p>Dengan dunia yang semakin terhubung, mudah bagi manusia untuk memantau, memerhatikan, monitoring secara real-time bahkan dengan sedikit terlibat di dalamnya. </p>
            <p>Selain kemudian proses komunikasi yang tanpa batas, IoT juga bisa mempermudah yang mempunyai bidang usaha yaitu menyajikan insight berbasis data, meningkatkan produktivitas dan waktu menjadi lebih efisien. </p>
            <p>Sektor industri juga termasuk yang tak ketinggalan mengadaptasi teknologi ini. Lebih lanjut ada yang namanya Industrial Internet of Things atau IIoT, yaitu penerapan dari teknologi IoT ke suatu proses industri dari yang berhubungan dengan instrumentasi hingga kontrol sensor peralatan industri. Berikut 3 industry yang wajib menerapkan IoT :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Manufaktur</span></span>
            
            <p>Dengan teknologi IoT, “pabrik pintar” bukan lagi konsep yang sulit diwujudkan. Dengan kecerdasan yang diaktifkan oleh IoT, perangkat dapat diprogram untuk bekerja secara serempak untuk meningkatkan dan mengulangi alur kerja dan proses dengan cepat. </p>
            <p>Analisis dan data yang ditangkap oleh perangkat IoT akan memungkinkan mereka yang bekerja di sektor ini untuk membuat wawasan dan pengoptimalan yang sebelumnya tampak tidak mungkin dilakukan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kesehatan</span></span>
            
            <p>Perangkat IoT yang terhubung memungkinkan penyedia layanan kesehatan menghindari pengumpulan data manual yang rawan kesalahan. IoT juga dapat membantu mengurangi biaya rawat inap yang mahal atau kunjungan ke klinik dengan memungkinkan dokter untuk memantau gejala pasien secara aman dari jarak jauh. Teknologi IoT dalam sektor kesehatan bisa membawa peningkatan kualitas, biaya lebih rendah, dan akses penyedia pasien yang lebih besar.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pertanian</span></span>
            
            <p>Sektor pertanian dapat memperoleh manfaat yang signifikan dari teknologi IoT. Sensor yang terhubung ke internet dan teknologi pintar akan memungkinkan petani dan pekerja pertanian untuk melacak tanaman dan ternak dengan lebih baik, mengukur data sumber daya di pertanian, dan memungkinkan drone membantu survei lahan. Dengan permintaan akan makanan yang terus meningkat, kemajuan yang dimungkinkan oleh IoT akan membantu petani dan pekerja pertanian untuk mengimbanginya.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-langkah-cerdas-penerapan-lean-manufacturing',
              'type' => 'article',
              'title' => '4 Langkah Cerdas Penerapan Lean Manufacturing',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-10.png',
              'tags' => 'industri 4.0',
              'date' => 'May 16, 2023',
              'content' => "
            
            <p>Lean Manufacturing adalah salah satu strategi perusahaan untuk melakukan perbaikan berkelanjutan untuk menghilangkan pemborosan, merespon dengan cepat keinginan pelanggan sehingga perusahaan mampu menghasilkan kinerja sesuai dengan yang diharapkan.</p>
            <p>Pemborosan lainnya mungkin terjadi karena penggunaan peralatan yang dirasa  tidak begitu penting bagi perusahaan atau saat proses produksi. </p>
            <p>Lean manufacturing memang menjadi bagian yang sangat penting untuk perusahaan sekalipun tidak semua perusahaan membutuhkan konsep ini. </p>
            <p>Mengurangi pemborosan adalah tujuan utama dari lean manufacturing dan salah satu area yang paling berkontribusi pada pemborosan dalam bisnis manufaktur adalah pengelolaan inventaris.</p>
            <p>Dalam konsep lean akan cara mengalirkan produk maupun informasi yang menggunakan sistem tarik dari pelanggan internal maupun pelanggan eksternal untuk mendapatkan keunggulan dan kesempurnaan produk yang dihasilkan perusahaan. Dalam penerapannya lean manufacturing memiliki beberapa langkah cerdas seperti dibawah ini :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Sosialisasi</span></span>
            
            <p>Proses ini kemungkinan besar akan memerlukan waktu yang cukup lama, terutama saat menyampaikan ke para jajaran tertinggi perusahaan. Tujuan dilakukan sosialisasi adalah untuk memberikan pengetahuan utama mangenai lean manufacturing tersebut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Evaluasi Kesiapan Perusahaan</span></span>
            
            <p>Tujuannya dalah agar dapat melihat perusahaan dalam menerapkan prinsip lean, caranya adalah dengan menunjuk orang orang yang dapat terlibat di dalam proses perubahan tersebut. Bila perusahaan belum pernah melakukan lean manufacturing maka disarankan untuk meminta pendampingan dari orang yang sudah berpengalaman.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penjadwalan Maintenance</span></span>
            
            <p>Mengecek kondisi mesin secara teratur dapat meyebabkan penundaan dari kerusakan mesin pada proses produksi dan aktivitas lain pada perusahaan. Dengan kerusakan suatu mesin maka segala proses pembuatan, penjualan hingga pengirimakan akan berdampak buruk dengan munculnya pesanan yang tertunda.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mempertahankan Peningkatan</span></span>
            
            <p>Prinsip lean termasuk ke dalam konsep tentang bagaimana memastikan peningkatan secara lebih berkelanjutan. Tujuannya adalah memertahankan berbagai proses agar bisa tetap fokus pada kegiatan yang mampu memberikan banyak nilai dan membuang pekerjaan yang tidak perlu.</p>
            <p>Dengan kata lain lean manufacturing perlu dilakukan berdasarkan tahapannya masing masing guna mendapatkan hasil yang diinginkan, penerapan lean manufacturing tersebut tentunya juga dapat menghasilkan keuntungan besar bagi perusahaan yang menerapkannya.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'industrial-internet-of-things-bagi-industry',
              'type' => 'article',
              'title' => 'Industrial Internet of Things Bagi Industry',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-9.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'May 15, 2023',
              'content' => "
            
            <p>Dalam dunia industri, sistem IoT merupakan konsep sistem perangkat fisik yang terhubung jaringan internet untuk saling menerima dan berbagi data. </p>
            <p>Melalui sistem IoT, perangkat-perangkat fisik dapat saling terhubung satu dengan yang lain tanpa melihat batasan tempat.</p>
            <p>Sementara Industrial Internet of Things (IIoT) adalah cara untuk transformasi digital di bidang manufaktur. Industrial IoT menggunakan jaringan sensor untuk mengumpulkan data produksi penting menggunakan perangkat lunak cloud untuk mengubah data menjadi insight tentang efisiensi operasi manufaktur.</p>
            <p>Saat ini, pelaku bisnis tetap bisa mempertahankan keunggulan operasional mereka di masa sulit melalui transformasi digital. Penggunaan komputasi awan dan pemanfaatan data yang semakin canggih dapat memberikan visibilitas dan kepastian operasional industry.</p>
            <p>Industry mendapatkan manfaat dari penggunaan IIoT untuk menghubungkan berbagai alat produksi secara aman, mengumpulkan data dari berbagai aset yang lokasinya jauh, dan mendistribusikan informasi ke aplikasi operasional tingkat lanjut. Berikut beberapa fungsi industrial internet of things bagi industry.</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Informasi real-time </span></span>
            
            <p>Digunakan untuk memahami apa yang terjadi pada saat itu dan mengaktifkan siklus operasional dan pengelolaan. Misalnya, dasbor yang menampilkan frekuensi getaran dari mesin industri yang berputar, seperti turbin, selama operasi memberikan pemahaman secara real time tentang kondisi dan status mesin tersebut. </p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Informasi operasional </span></span>
            
            <p>Membantu memahami apa yang telah terjadi di periode waktu sebelumnya agar bisa menciptakan kecerdasan perilaku aset saat beroperasi. Misalnya, grafik yang ditampilkan di dasbor menunjukkan frekuensi getaran turbin pada waktu sebelumnya, lalu dibandingkan dengan frekuensi getaran real time sehingga bisa menciptakan kecerdasan pada tren jangka panjang aset.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Analisis</span></span>
            
            <p>Mengintegrasikan data real-time dan historis memungkinkan tim manajemen menilai hasil potensial dari keadaan dan perilaku operasional, bahkan memperhitungkan variabel tersier.  Misalnya, pelaku industri dapat memperkirakan berapa lama sebuah peralatan dapat berjalan atau kapan diperkirakan akan gagal.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'pentingnya-5v-big-data-bagi-perusahaan',
              'type' => 'article',
              'title' => 'Pentingnya 5V Big Data Bagi Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-8.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'May 12, 2023',
              'content' => "
            
            <p>Perkembangan teknologi dan informasi, khususnya di era digital, berjalan dengan sangat cepat. Berbicara mengenai data di era digital tak terlepas dari yang namanya big data. </p>
            <p>Big data adalah kombinasi dari data tidak terstruktur, semi terstruktur atau terstruktur yang dikumpulkan. </p>
            <p>Secara sederhana, big data dapat diartikan sebagai kumpulan data dalam jumlah besar dan kompleks serta bertambah seiring waktu. Data ini dapat dikembangkan untuk mendapatkan wawasan dan digunakan dalam proyek pembelajaran mesin, pemodelan prediktif, dan aplikasi analitik lanjutan lainnya. </p>
            <p>5V Big Data adalah lima karakteristik utama dan bawaan dari Big Data. Berikut pentingnya 5V untuk perusahaan :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Volume</span></span>
            
            <p>Properti paling khas dari Big Data, Volume, menyoroti jumlah data yang melewati hari kerja hari demi hari dan bagaimana setiap item data perlu ditangkap untuk memahami bisnis secara holistik untuk mendapatkan nilai darinya . Data di sini akan merujuk pada apa pun yang dapat ditangkap, terstruktur, tidak terstruktur, semi terstruktur, tiba dalam batch atau waktu nyata.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Velocity</span></span>
            
            <p>Kecepatan dalam big data mengacu pada karakteristik penting dalam menangkap data yang masuk dengan kecepatan berapa pun. Di dunia sekarang ini, data hampir tidak memiliki kewarganegaraan. Itu datang dan meninggalkan ekosistem bisnis dengan kecepatan tinggi. Sistem Big Data dilengkapi untuk menangkap data ini dengan kecepatan yang masuk</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Variety</span></span>
            
            <p>V berikutnya dalam lima 5 V Big Data adalah variasi. Varietas mengacu pada keragaman tipe data. Sebuah organisasi mungkin memperoleh data dari sejumlah sumber data yang berbeda, yang mungkin berbeda nilainya. Data dapat berasal dari sumber di dalam dan di luar perusahaan juga. Tantangan dalam keragaman menyangkut standarisasi dan distribusi semua data yang dikumpulkan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Veracity</span></span>
            
            <p>Dengan volume, variasi, dan kecepatan yang memungkinkan Big Data, model yang dibangun di atas data tidak akan memiliki nilai sebenarnya tanpa karakteristik ini. Veracity adalah keterpercayaan data sumber, kualitas data yang diperoleh setelah pemrosesan. Sistem harus memungkinkan mitigasi terhadap bias data, kelainan atau inkonsistensi, volatilitas, duplikasi, di antara faktor-faktor lainnya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Value</span></span>
            
            <p>V terakhir dalam 5 V Big Data adalah Value. Ini mengacu pada nilai yang dapat diberikan oleh Big Data, dan ini terkait langsung dengan apa yang dapat dilakukan organisasi dengan data yang dikumpulkan tersebut. Mampu menarik nilai dari Big Data adalah suatu keharusan, karena nilai Big Data meningkat secara signifikan tergantung pada wawasan yang dapat diperoleh dari mereka.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'manfaat-real-time-location-menggunakan-rfid',
              'type' => 'article',
              'title' => 'Manfaat Real Time Location Menggunakan RFID',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-7.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'May 11, 2023',
              'content' => "
            
            <p>Cepatnya perkembangan teknologi membuat beberapa hal yang sebelumnya mustahil menjadi nyata dalam waktu sekejap, salah satu contoh nyata ialah real time location menggunakan RFID.</p>
            <p>Banyak perusahaan yang memerlukan infomasi lokasi, waktu, dan status secara Real-Time yang akurat dalam segala aktivitas terutama di area warehouse dan line production.</p>
            <p>Data lokasi yang dikumpulkan secara real time mempermudah pihak management atau pihak operator yang melakukan kegiatan untuk menentukan keputusan bisnis perusahaan pada saat itu juga jika dibutuhkan. </p>
            <p>Untuk memenuhi kebutuhan tersebut maka dibutuhkan suatu sistem teknologi yang mampu mengikuti setiap pergerakan dari objek utama.</p>
            <p>Teknologi tersebut harus dapat menyediakan informasi lokasi dan kondisi di lapangan secara real-time. Perkembangan Teknologi sudah bisa menjawab kebutuhan tersebut, yaitu dengan Real Time Location System.</p>
            <p>RTLS adalah sistem penentuan posisi di dalam ruangan atau area yang terbatas yang mengacu pada jaringan GPS atau pelacakan dengan ponsel. Dengan kata lain, solusi RTLS menyediakan informasi langsung tentang di mana tepatnya sesuatu telah terjadi kepada perusahaan. RTLS juga menyediakan gambaran umum semua aset, lokasi aset, atau mendeteksi akses yang tidak sah di zona tertentu kepada manajemen.</p>
            <p>Dalam penerapannya real time location tentu memiliki banyak manfaat seperti :</p>
            <ol type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Productivity : Peningkatan kegiatan operasional dengan proses yang lebih efisien dalam monitoring dan manajemen asset/barang.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Traceability : Dapat memonitoring inventaris, forklift, peralatan, pekerja, dan pergerakan asset secara real time.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Excess Stock : Dapat mengetahui jumlah Asset/barang yang ready, kosong, cukup, kurang atau lebih.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Lifecycle Monitoring : Masa kerja dari inventaris (RFID, Reader, Antena), forklift, peralatan dapat direview performance kerjanya, termasuk kapan dilakukan maintenance.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Competitive advantage : Operasi yang lebih efisien, pengurangan biaya, pengambilan keputusan yang lebih baik, dan penawaran dinamis baru kepada pelanggan memastikan keunggulan kompetitif bagi sebagian besar pengadopsi awal sistem RTLS.</span></span>
            </ol>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'teknologi-ai-peluang-atau-ancaman',
              'type' => 'article',
              'title' => 'Teknologi AI, Peluang atau Ancaman?',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-6.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'May 10, 2023',
              'content' => "
            
            <p>Kecerdasan buatan atau artificial intelligence (AI) adalah simulasi kecerdasan manusia, yang dimodelkan oleh mesin dan diprogram untuk berpikir seperti manusia. </p>
            <p>Kecerdasan buatan sendiri merupakan teknologi yang membutuhkan informasi dari informasi, sama seperti manusia. AI membutuhkan pengalaman dan data untuk menjadikan kecerdasannya lebih baik. </p>
            <p>Poin penting dalam proses AI adalah pembelajaran, penalaran, dan koreksi diri. AI harus belajar untuk memperkaya pengetahuan mereka. </p>
            <p>Salah satu keunggulan AI dibandingkan manusia adalah AI AlphaGo adalah manusia hanya dapat memainkan satu game dalam satu waktu. AI dapat mensimulasikan banyak pertandingan secara bersamaan. Sehingga belajar dan mengalami juga bisa lebih dari orang.</p>
            <p>Keuntungan Penggunaan AI :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengurangi Human Error</span></span>
            
            <p>Teknologi selalu berusaha untuk mengurangi kesalahan yang kemungkinan dilakukan manusia. Dari pemeriksa ejaan yang paling sederhana hingga aplikasi yang paling canggih, tujuannya adalah untuk membuat tugas lebih mudah, bebas dari kesalahan, dan lebih sedikit memakan waktu. AI tentu saja juga tidak terlepas dari hal ini. Faktanya, AI memiliki potensi yang lebih besar untuk secara efektif mengurangi kesalahan manusia daripada teknologi lain sebelumnya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Asisten Digital</span></span>
            
            <p>Manfaat lain dari kecerdasan buatan yang paling menarik adalah asisten digital dan perangkat pintar. Meskipun jenis teknologi ini mungkin terlihat agak invasif, namun teknologi ini juga bisa sangat membantu untuk tugas sehari-hari. Asisten virtual bertenaga AI kini dapat mempelajari preferensi, kebiasaan, dan perilaku kita dengan menganalisis data dari riwayat pencarian, kebiasaan belanja online, dan bahkan perintah suara.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengambilan Keputusan</span></span>
            
            <p>Teknologi AI memiliki potensi untuk merevolusi cara kita mengambil keputusan dengan memberikan cara baru untuk memahami data. Sebagai contoh, algoritma pembelajaran mesin dapat digunakan untuk mengidentifikasi pola dan tren yang sulit dilihat oleh manusia.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'tingkatkan-performa-bisnis-dengan-tpm',
              'type' => 'article',
              'title' => 'Tingkatkan Performa Bisnis Dengan TPM',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-5.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'May 9, 2023',
              'content' => "
            
            <p>Permintaan pasar yang pesat akhirnya mendorong perusahaan untuk memenuhi kebutuhan produk dan jasa agar semakin beragam dan berkualitas, termasuk pada perusahaan manufaktur. </p>
            <p>Untuk memenuhi kebutuhan tersebut maka perusahan memerlukan metode yang dapat memwujudkan hal tersebut, agar menghasilkan kulitas output yang tinggi.</p>
            <p>Hampir semua perusahaan manufaktur telah menggunakan TPM. Penggunaannya bertujuan untuk melakukan pemeliharaan mesin untuk menunjang kelancaran proses produksinya.</p>
            <p>TPM atau Total Productive Maintenance adalah pendekatan holistik atas perawatan peralatan untuk mencapai proses produksi yang sempurna. </p>
            <p>Dengan menggunakan metode TPM dapat menghindari kerusakan alat, kelambatan, serta cacat pada alat. Selain itu, metode ini juga mampu mendukung amannya lingkungan pekerjaan, serta memastikan tidak terjadi kecelakaan.</p>
            <p>Fokus utama dari metode Total Productive Maintenance adalah melakukan perawatan secara proaktif dan preventif untuk memaksimalkan efektivitas peralatan operasional. Dalam penerapannya TPM memiliki beberapa pillar yang dapat diterapkan untuk meningkatkan performa bisnis sebagai berikut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Autonomous Maintenance atau Jishu Hozen memberikan tanggung jawab perawatan rutin kepada operator seperti pembersihan mesin, pemberian lubrikasi/minyak dan inspeksi mesin. Dengan demikian, operator atau pekerja yang bersangkutan memiliki rasa kepemilikan yang tinggi, meningkatan pengetahuan pekerja terhadap peralatan yang digunakannya.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pilar Planned Maintenance menjadwalkan tugas perawatan berdasarkan tingkat rasio kerusakan yang pernah terjadi dan/atau tingkat kerusakan yang diprediksikan. Dengan Planned Maintenance, kita dapat mengurangi kerusakan yang terjadi secara mendadak serta dapat lebih baik mengendalikan tingkat kerusakan komponen.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Focused Improvement membentuk kelompok kerja untuk secara proaktif mengidentifikasikan mesin/peralatan kerja yang bermasalah dan memberikan solusi atau usulan-usulan perbaikan. Kelompok kerja dalam melakukan Focused Improvement juga bisa mendapatkan karyawan-karyawan yang bertalenta dalam mendukung kinerja perusahaan untuk mencapai targetnya.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pilar Quality Maintenance membahas tentang masalah kualitas dengan memastikan peralatan atau mesin produksi dapat mendeteksi dan mencegah kesalahan selama produksi berlangsung. Dengan kemampuan mendeteksi kesalahan ini, proses produksi menjadi cukup handal dalam menghasilkan produk sesuai dengan spesifikasi pada pertama kalinya.</span></span>
            
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'pentingnya-rfid-pada-asset-tracking',
              'type' => 'article',
              'title' => 'Pentingnya RFID Pada Asset Tracking',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-4.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'May 8, 2023',
              'content' => "
            
            <p>RFID adalah singkatan dari Radio Frequency Identification, sedangkan untuk pengertian dari RFID yaitu sistem identifikasi tanpa kabel yang berguna untuk mengambil data tanpa memerlukan sentuhan berupa barcode maupun kartu magnetic.</p>
            <p>RFID ini merupakan teknologi upgrading dari teknologi barcode. Penerapannya digunakan sebagai alat untuk melakukan pengaturan pasokan barang di dalam sebuah pabrik sebagai bagian dari pelacakan RFID manajemen asset.</p>
            <p>Teknologi RFID memiliki sejumlah kelebihan jika dibandingkan dengan teknologi barcode. Teknologi RFID sangat membantu proses pelacakan aset (Asset Tracking) menjadi lebih efisien dan otomatis. Proses otomatisasi ini memudahkan proses Asset Tracking lebih efisien dibandingkan Sistem Barcode.</p>
            <p>Sistem RFID dapat memonitor dan mentracking keberadaan aset pada suatu tempat secara real time dan membantu saat melakukan proses stok opname dengan cepat dan tepat. </p>
            <p>Dengan berbagai keunggulan tersebut, maka teknologi pengenalan dengan RFID jauh lebih diminati daripada teknologi identifikasi memanfaatkan barcode. Berikut manfaat yang dapat dirasakan dari penggunaan RFID pada asset tracking :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Inventori Aktiva Tetap</span></span>
            
            <p>Aktiva tetap dari sebuah perusahaan tentu saja akan membutuhkan inventori secara berkala. Dengan penerapan RFID teknologi pada kegiatan proses pelacakan aset tetap, maka proses akan dapat berjalan secara lebih efektif dan efisien.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Data Aset  Lebih Baik</span></span>
            
            <p>Dalam sebuah proses inventori, data kapan sebuah barang dibeli, kapan barang terakhir dilakukan perawatan dan data lainnya itu sangat penting. Apabila pendataan semua dilakukan secara manual maka banyak waktu yang diperlukan untuk melakukan pendataan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Automated Asset Tracking</span></span>
            
            <p>Keberadaan aset dapat di monitoring oleh rfid sehingga jika terjadi perpindahan asset keluar area RFID Reader akan mengirimkan sinyal, report atau alert untuk memberitakan perpindahan aset. RFID reader akan terus memantau keberadaan aset dalam jangkauannya secara real time, hal ini juga meminimalisir kesalahan dalam pelacakan dan meningkatkan keamanan.</p>
            <p>Dengan memanfaatkan RFID asset tracking, yaitu RFID tags dan RFID reader, maka kegiatan penghitungan produk mulai dari proses pembelian bahan, pembersihan, produksi hingga pengemasan tidak lagi perlu dilakukan secara manual.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'rfid-pada-manufaktur-berikut-fungsinya',
              'type' => 'article',
              'title' => 'RFID Pada Manufaktur? Berikut Fungsinya!',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-3.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'May 5, 2023',
              'content' => "
            
            <p>RFID (Radio Frequency Identification) adalah teknologi yang digunakan untuk mengidentifikasi dan melacak barang secara otomatis dengan menggunakan sinyal radio. </p>
            <p>Pada perusahaan manufaktur, RFID dapat digunakan untuk mengoptimalkan proses produksi, mengurangi biaya, dan meningkatkan efisiensi. Berikut adalah cara kerja RFID pada perusahaan manufaktur:</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>RFID Tag dan RFID Reader</span></span>
            
            <p>Tag RFID merupakan suatu label yang berisi informasi mengenai barang yang ingin diidentifikasi. Tag RFID ini kemudian ditempelkan pada barang yang akan diproduksi. Pembaca RFID merupakan perangkat yang digunakan untuk membaca informasi yang terdapat pada tag RFID. Pembaca RFID ini dipasang pada titik-titik tertentu dalam proses produksi, seperti pada mesin produksi, gudang, atau tempat penyimpanan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Identifikasi dan Pemantauan</span></span>
            
            <p>Ketika barang yang memiliki tag RFID melewati pembaca RFID, pembaca akan membaca informasi yang terdapat pada tag tersebut secara otomatis. Informasi ini dapat berupa identitas barang, jumlah barang, atau informasi lainnya yang terdapat pada tag RFID. </p>
            <p>Informasi yang didapat dari tag RFID dapat digunakan untuk memantau proses produksi secara real-time. Misalnya, informasi mengenai jumlah barang yang telah diproduksi, waktu produksi, atau keberadaan barang pada gudang dapat dipantau secara langsung.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengambilan keputusan yang lebih cepat</span></span>
            
            <p>Dengan adanya informasi yang akurat dan real-time mengenai proses produksi, manajemen dapat mengambil keputusan yang lebih cepat dan tepat. Misalnya, jika terdapat masalah pada salah satu mesin produksi, manajemen dapat mengambil tindakan perbaikan secara cepat untuk menghindari terjadinya kerugian.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Peningkatan efisiensi dan produktivitas</span></span>
            
            <p>Dengan menggunakan teknologi RFID, proses produksi dapat menjadi lebih efisien dan produktif karena informasi mengenai barang dapat diakses secara real-time dan akurat. Hal ini dapat mengurangi waktu produksi, biaya produksi, dan meningkatkan kualitas produk yang dihasilkan.</p>
            <p>RFID merupakan teknologi yang dapat membantu perusahaan manufaktur dalam mengoptimalkan proses produksi, mengurangi biaya, dan meningkatkan efisiensi. </p>
            <p>Dengan menggunakan teknologi ini, perusahaan dapat memantau proses produksi secara real-time, mengambil keputusan yang lebih cepat, dan meningkatkan efisiensi dan produktivitas produksi. Oleh karena itu, penggunaan teknologi RFID dapat menjadi solusi untuk meningkatkan daya saing perusahaan di pasar.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'rfid-dalam-efisiensi-biaya-pada-supply-chain',
              'type' => 'article',
              'title' => 'RFID Dalam Efisiensi Biaya Pada Supply Chain',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/untitled-design.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'May 4, 2023',
              'content' => "
            
            <p>Manajemen rantai pasok atau supply chain management (SCM) saat ini telah menjadi bagian yang terpenting dalam perusahaan dan subyek kajian dalam penelitian keilmuan teknik industri untuk mengatasi persoalan yang semakin kompleks. </p>
            <p>Perusahaan ditantang dengan menemukan cara untuk memenuhi harapan pelanggan yang terus meningkat dengan penekanan biaya yang perlu dikelola. </p>
            <p>Untuk melakukannya, perusahaan harus mencari bagian mana dari proses rantai pasok mereka yang tidak kompetitif, melihat kebutuhan pelanggan yang tidak terpenuhi dan menetapkan tujuan perbaikan, serta secepatnya menerapkan perbaikan yang diperlukan. Telah diketahui sebelumnya bahwa produsen adalah mata rantai supply yang mengelola produk yang diproduksi dan didistribusikan secara cepat.</p>
            <p>Dengan adanya teknologi informasi saat ini pelanggan merupakan aspek bisnis yang paling penting, dan produsen berebut untuk memenuhi permintaan pelanggan untuk pilihan, gaya, fitur, urutan pemenuhan dan pengiriman dengan cepat, produk manufaktur yang berkualitas, sehingga memenuhi tuntutan spesifik pelanggan untuk pengiriman produk telah menjadi keunggulan kompetitif. Perusahaan yang berusaha untuk meningkatkan manajemen rantai pasok yang dimiliki, akan mampu menghadapi persaingan di pasar global. </p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Tujuan Penerapan</span></span>
            
            <p>Tujuan dari penerapan teknologi RFID adalah mengkaji penerapan RFID dalam SCM untuk pengelolaan persediaan produk di retailer dengan memperhatikan aspek masalah penyusutan. </p>
            <p>Solusi RFID akan membantu menurunkan biaya operasional, meningkatkan through put di pusat distribusi, memaksimalkan pengiriman tepat waktu dan meningkatkan layanan dan kepuasan pelanggan.</p>
            <p>RFID digunakan sebagai alat otomatis data dan alat informasi yang akurat sebagai optimasi kerja. Selain itu keunggulan dari RFID dapat meminimalisasi  proses dalam pengontrolan produk. </p>
            <p>RFID sebagai media input data dalam serangkaian aktivitas logistik yang berfungsi sebagai alat komunikasi yang mampu membaca data produk dan mengubah stok produk yang pada akhirnya akan mengirimkan data ke database. </p>
            <p>Pembacaan RFID ini jauh lebih baik dibandingkan dengan barcode karena tanpa diperlukan arah penempatan yang persisi. Teknologi RFID ini mampu mengirimkan dan mengambil data dengan cepat dan otomatis secara akurat, spesifik dan tepat waktu.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'pelacakan-work-in-process-dengan-rfid',
              'type' => 'article',
              'title' => 'Pelacakan Work in Process Dengan RFID',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image-1.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'May 3, 2023',
              'content' => "
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengertian Work in Process</span></span>
            
            <p>Work in Process adalah salah satu tahapan produksi dalam industri manufaktur. Seringkali dalam sebuah proyek membutuhkan waktu yang lama karena ada tahap peralihan antar produk yang sedang diselesaikan dan dianggap sebagai produk jadi. Untuk memahami manfaat RFID untuk pelacakan WIP, penting untuk terlebih dahulu memahami apa itu RFID.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengertian RFID</span></span>
            
            <p>RFID (Radio Frequency Identification) adalah teknologi yang digunakan untuk mengidentifikasi dan melacak objek menggunakan sinyal radio. RFID terdiri dari tag RFID yang ditempatkan pada objek dan pembaca RFID yang digunakan untuk membaca informasi yang disimpan di dalam tag.</p>
            <p>Tag atau chip ini mentransmisikan informasi melalui gelombang radio yang dapat dibaca oleh pembaca RFID. Keuntungan dari jenis sistem ini sangat banyak dan termasuk akurasi yang lebih baik, peningkatan kecepatan dalam pengumpulan data, penurunan biaya tenaga kerja, peningkatan ketertelusuran, dan banyak lagi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Manfaat Menggunakan RFID pada WIP</span></span>
            
            <p>Perusahaan yang menerapkan sistem RFID untuk pelacakan WIP mereka akan mendapat manfaat dari peningkatan akurasi dalam penghitungan inventaris, peningkatan ketertelusuran di seluruh proses rantai pasokan, penurunan biaya tenaga kerja karena proses pengumpulan data otomatis, dan peningkatan tingkat layanan pelanggan dengan dapat merespons dengan cepat. pertanyaan tentang ketersediaan produk atau waktu pengiriman.</p>
            <p>Selain itu, menggunakan sistem RFID memberikan penghematan biaya karena pengurangan biaya overhead terkait dengan proses entri data manual dan mengurangi risiko yang terkait dengan entri data yang tidak akurat karena kesalahan manusia.</p>
            <p>Secara keseluruhan, menerapkan sistem RFID untuk pelacakan WIP memiliki banyak manfaat potensial bagi perusahaan yang ingin mengoptimalkan proses produksi sekaligus mengurangi biaya overhead. </p>
            <p>Dengan kemampuannya untuk secara akurat melacak item saat mereka bergerak melalui proses rantai pasokan perusahaan dan menyediakan data real-time mengenai ketersediaan produk atau waktu pengiriman, teknologi RFID menawarkan bisnis solusi praktis yang dapat membantu merampingkan alur kerja mereka sambil memberikan jawaban yang dapat diandalkan kepada pelanggan mengenai pesanan atau pertanyaan.</p>
            <p>Dengan mempertimbangkan manfaat ini, mudah untuk melihat mengapa begitu banyak perusahaan beralih ke teknologi canggih ini karena mereka mencari cara untuk meningkatkan efisiensi sekaligus mengurangi biaya dalam operasi mereka.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'kurangi-biaya-produksi-dengan-5-langkah-kaizen-ini',
              'type' => 'article',
              'title' => 'Kurangi Biaya Produksi Dengan 5 Langkah Kaizen Ini!',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/05/image.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'May 2, 2023',
              'content' => "
            
            <p>Metode Kaizen memiliki fokus pada peningkatan berkelanjutan melalui perbaikan yang terus menerus, termasuk dalam hal pengurangan biaya produksi. </p>
            <p>Dengan menerapkan Kaizen maka dapat membantu perusahaan untuk mengurangi biaya yang ada.</p>
            <p>Pengurangan biaya dapat dilakukan dengan menghilangkan waste (pemborosan) di area tempat kerja agar menghemat biaya. </p>
            <p>Perusahaan akan mendapat manfaat positif melalui penghematan biaya jika dilakukan secara terus-menerus.</p>
            <p>Setiap kali menerapkan Kaizen, sebaiknya perusahaan menyusun prosedur untuk mengetahui sejauh mana pengeluaran biaya untuk dievaluasi dan diukur. </p>
            <p>Hal ini akan memudahkan perusahaan untuk mengetahui dengan pasti berapa banyak uang yang telah dikeluarkan.</p>
            <p>Berikut adalah beberapa cara metode Kaizen dapat membantu mengurangi biaya produksi:</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Identifikasi Limbah dan Kegagalan Produksi: Metode Kaizen memungkinkan organisasi untuk mengidentifikasi dan menghilangkan limbah dan kegagalan produksi yang menyebabkan biaya tinggi. Hal ini dapat dilakukan dengan melakukan analisis menyeluruh terhadap proses produksi dan memperbaiki setiap ketidaksempurnaan yang ditemukan.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Peningkatan Efisiensi dan Produktivitas: Melalui metode Kaizen, organisasi dapat mengoptimalkan efisiensi dan produktivitas pada setiap tahap produksi. Dengan meningkatkan produktivitas, organisasi dapat menghasilkan lebih banyak barang atau jasa dalam waktu yang sama, sehingga mengurangi biaya produksi.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Implementasi Just-In-Time (JIT): Metode Kaizen mempromosikan penggunaan sistem JIT yang berarti hanya menghasilkan barang sesuai permintaan pelanggan. Dengan menghilangkan kelebihan persediaan dan memproduksi hanya saat dibutuhkan, biaya produksi dapat dikurangi.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Keterlibatan Karyawan: Metode Kaizen mendorong keterlibatan karyawan dalam perbaikan berkelanjutan. Karyawan dapat memberikan saran dan ide yang bermanfaat untuk meningkatkan efisiensi dan mengurangi biaya produksi. Meningkatkan partisipasi karyawan juga dapat meningkatkan produktivitas dan kualitas produk.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Peningkatan Kualitas: Metode Kaizen dapat membantu organisasi meningkatkan kualitas produk dengan mengidentifikasi dan memperbaiki masalah yang terjadi pada setiap tahap produksi. Dengan meningkatkan kualitas produk, organisasi dapat mengurangi biaya untuk perbaikan dan penggantian produk yang cacat.</span></span>
            
            <p>Dengan menerapkan metode Kaizen, organisasi dapat terus melakukan perbaikan kecil dan terus menerus dalam proses produksi yang pada akhirnya akan menghasilkan biaya produksi yang lebih rendah, efisiensi yang lebih tinggi, dan produk yang lebih berkualitas.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'inventory-management-penting-ini-4-perannya',
              'type' => 'article',
              'title' => 'Inventory Management Penting? Ini 4 Perannya',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/04/untitled-design-2.jpg',
              'tags' => 'industri 4.0',
              'date' => 'April 27, 2023',
              'content' => "
            
            <p>Inventory Management merupakan salah satu fungsi yang sangat penting dalam manajemen, khususnya pada manajemen produksi dan operasi. </p>
            <p>Persediaan yang berlebihan akan menyebabkan pengeluaran biaya yang tinggi seperti biaya beban bunga pinjaman, biaya penyimpanan, risiko kerusakan pada persediaan.</p>
            <p>Sedangkan persediaan yang tidak cukup akan menyebabkan terhambatnya kelancaran produksi sehingga memiliki risiko hilangnya penjualan dan ketidakpuasan pelanggan akibat produk yang diinginkannya tidak dapat diterima pada waktu yang tepat. </p>
            <p>Manajemen Persediaan yang baik adalah Manajemen persediaan yang dapat menjaga keseimbangan antara investasi persediaan dengan tingkat pelayanan kepada konsumen.</p>
            <p>Persediaan dalam perusahaan manufaktur pada umumnya meliputi bahan-bahan mentah (Raw Materials), barang-barang dalam proses (WIP), bahan-bahan pembantu/pelengkap (sub materials), komponen – komponen hasil rakitan dari perusahaan lain maupun perusahaannya sendiri (assembled components/modules) dan juga persediaan pada produk-produk akhir/barang jadi (Finished Goods).</p>
            <p>Namun banyak juga perusahaan atau organisasi yang memasukan uang, ruangan yang belum ditempati (space), tenaga kerja, mesin, suku cadang dan peralatan sebagai persediaan untuk memenuhi permintaan pelanggan. Dalam penerapannya inventory management tentunya memiliki beberapa peran seperti :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menghindari Kehilangan Persediaan : Inventory management membantu menghindari kehilangan persediaan atau pencurian dengan memastikan persediaan diawasi dan dikontrol dengan baik. Ini membantu meminimalkan kerugian bisnis dan meningkatkan keuntungan.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menjaga Ketersediaan Barang : Inventory management memastikan bahwa barang yang tepat tersedia pada saat yang tepat. Hal ini membantu dalam memenuhi permintaan pelanggan dan menghindari kehabisan stok barang yang dapat menyebabkan kehilangan penjualan atau pelanggan.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningkatkan Efisiensi : Inventory management membantu meningkatkan efisiensi dengan mengurangi waktu yang dibutuhkan untuk memproses persediaan dan meminimalkan kesalahan dalam pengelolaan persediaan. Hal ini membantu meningkatkan produktivitas dan meningkatkan kinerja bisnis secara keseluruhan.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menjamin Lancarnya Proses Produksi : Setiap perusahaan tentu menginginkan proses produksi yang lancar. Bahan baku yang out of stock tentu sangat mengancam proses produksi yang berlangsung. Karena itu, penting diterapkan manajemen inventory untuk memastikan bahwa bahan baku tidak akan menghambat selesainya suatu pekerjaan.</span></span>
            
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'masa-depan-dengan-teknologi-metaverse',
              'type' => 'article',
              'title' => 'Masa Depan Dengan Teknologi Metaverse',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/04/untitled-design-1.jpg',
              'tags' => 'industri 4.0',
              'date' => 'April 26, 2023',
              'content' => "
            
            <p>Penerapan metaverse di berbagai sektor tentunya dapat menimbulkan keinginan untuk mengadopsi teknologi tersebut. </p>
            <p>Masa depan metaverse dikabarkan akan menyerupai seperti dunia nyata dalam berbagai banyak hal, bahkan dapat menggantikan beberapa aktivitas dunia baik secara fisik maupun konsep.</p>
            <p> Metaverse dapat dikatakan sebagai masa depan dari sebuah teknologi maupun internet. Metaverse akan memberikan pengalaman yang lebih imersif dan menyenangkan bagi pengguna internet, serta membawa revolusi dalam cara kita berinteraksi dan melakukan bisnis secara digital dan sedang menjadi sebuah tren yang semakin popular belakangan ini di kalangan pengguna internet.</p>
            <p>Namun secara umum, pengertian metaverse adalah alam semesta dalam konsep virtual yang penggunanya memiliki akses ke avatar digital yang memungkinkan mereka hidup, beraktivitas, dan berinteraksi satu sama lain selayaknya dalam kehidupan sehari-hari di dalam dunia digital tersebut.</p>
            <p>Metaverse menggunakan akses internet yang memiliki jangkauan luas dan tak berbatas. Oleh karena itu, pengguna metaverse juga bisa bersosialisasi secara virtual dengan sesama pengguna kapan pun dan di mana pun mereka berada.</p>
            <p>Metaverse juga dikabarkan dapat memberikan penggalaman baru bagi para penggguna internet, dengan mengubah cara berinteraksi dan cara melakukan bisnis secara digital. Di masa depan nanti, imajinasi adalah satu-satunya batasan dalam metaverse.</p>
            <p>Metaverse diharapkan dibangun menggunakan kombinasi biometrik fisik dan perilaku, pengenalan emosi, analisis sentimen, dan data pribadi di masa depan. Dengan begitu, pengalaman imersif metaverse bisa sesuai dengan kepribadian, keinginan, dan kebutuhan. Menurut data yang ada, Indonesia menjadi salah satu negara dengan warga yang memiliki minat tinggi terhadap metaverse.</p>
            <p>Perkembangan metaverse di Indonesia memang semakin maju dengan banyaknya sektor yang terjun ke metaverse. Metaverse memiliki potensi yang sangat besar dan diharapkan dapat membantu manusia tidak hanya dalam kesehatan namun juga dalam berbagai bidang di masa depan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '5-step-sistematis-keberhasilan-tpm',
              'type' => 'article',
              'title' => '5 Step Sistematis Keberhasilan TPM',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/04/image-11.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'April 21, 2023',
              'content' => "
            
            <p>Total Productive Maintenance adalah program yang menekankan pemeliharaan yang dijalankan secara proaktif dan preventif untuk memaksimalkan efisiensi operasional peralatan melalui pemberdayaan operator. </p>
            <p>Selain menciptakan proses yang bebas dari kerusakan, TPM juga membuat lingkungan kerja menjadi aman tanpa ada kecelakaan karena dalam implementasinya membangun rasa tanggung jawab bersama.</p>
            <p>Pendekatan ini memprioritaskan elemen-elemen TPM yang akan mendorong manfaat finansial terbesar bagi perusahaan. </p>
            <p>Tentu untuk fokus pada manfaat finansial yang lebih luas, pendekatan harus diambil menggunakan berbagai sudut pandang, termasuk melibatkan departemen keuangan. Dengan demikian, tim TPM dapat bekerja lebih sistematis sehingga kinerja bisnis tercapai.</p>
            <p>Salah satu tantangan dalam mendorong upaya TPM adalah menetapkan prioritas perawatan oleh bagian teknisi dan operator. </p>
            <p>Sementara mereka memiliki pengetahuan dan keterampilan operasi, seringkali mereka kurang melihat gambaran besar dari keseluruhan operasi. </p>
            <p>Seringkali personel lini tidak mengetahui atau memahami dampak berbagai mesin atau unit produksi terhadap kinerja dan keuntungan utama bisnis sehingga mereka tidak dapat memprioritaskan peningkatan di area dengan dampak terbesar.</p>
            <p>Untuk mendukung keberhasilan TPM tentunya perlu menerapkan beberapa step yang bertujuan untuk mencapai keberhasilan tersebut seperti dibawah ini :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengakses dan menganalisis data penting. Sebagian besar sistem perencanaan sumber daya perusahaan (ERP) saat ini menawarkan kemampuan data real-time, tetapi seringkali data ini hanya digunakan untuk perencanaan dan tujuan pelaporan keuangan daripada peningkatan kinerja.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Tim TPM perlu mengakses dan menelusuri detail laporan untuk menemukan data operasi dasar seperti waktu henti setiap mesin atau catatan kinerja untuk mesin, jalur produksi, atau unit bisnis tertentu. Dengan berfokus pada lini produksi, tim TPM mampu mendorong kontribusi langsung dan membangun momentum yang dibutuhkan untuk implementasi TPM yang lebih luas di masa depan.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengembangkan dashboard dan KPI yang akurat. Mengakses data hanyalah langkah pertama. Selanjutnya, manajer harus mengidentifikasi informasi yang benar-benar berguna untuk upaya peningkatan kinerja. Tim TPM perlu mengembangkan dashboard real-time yang akan mengisolasi dan menentukan data yang mereka butuhkan untuk mendorong hasil lebih cepat.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menanamkan akuntabilitas dan menerapkan tata kelola yang kuat. Pendekatan yang jelas dan terstruktur dengan pengawasan manajemen tingkat tinggi dapat membantu organisasi memfokuskan waktu, uang, dan sumber daya pada elemen-elemen yang akan memiliki dampak langsung dan terukur pada kinerja bisnis.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningkatkan pemanfaatan sistem pemeliharaan dan kemampuan TI yang ada. Sebagian besar organisasi berinvestasi banyak dalam teknologi seperti sistem manajemen pemeliharaan terkomputerisasi (CMMS), tetapi seringkali tidak sepenuhnya dimanfaatkan. Dengan melakukan penilaian pemanfaatan sistem secara menyeluruh, tim akan mendapat banyak peluang baru yang dapat meningkatkan OEE.</span></span>
            
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'faktor-utama-kesuksesan-metode-kaizen',
              'type' => 'article',
              'title' => 'Faktor Utama Kesuksesan Metode Kaizen',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/04/image-10.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'April 20, 2023',
              'content' => "
            
            <p>Metode Kaizen merupakan metode perbaikan berkelanjutan yang mengedepankan perbaikan kecil yang dilakukan secara terus menerus. </p>
            <p>Filosofi metode yang satu ini sebenarnya bisa diterapkan dalam berbagai macam kegiatan yang tak melulu soal bisnis ataupun pekerjaan. </p>
            <p>Dengan harapan sebuah perubahan kecil kearah yang lebih baik dapat menjadi kebiasaan serta dapat memberikan hasil yang maksimal di masa mendatang.</p>
            <p>Namun tak dapat dipungkiri banyak sekali perusahaan yang menggunakan filosofi metode kaizen ini dalam operasional dan manajemen bisnis mereka karena dianggap cukup efektif untuk meningkatkan produktivitas karyawan.</p>
            <p>Ada beberapa faktor utama yang dapat mempengaruhi kesuksesan penerapan metode Kaizen di perusahaan, antara lain:</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Komitmen dari manajemen : Kesuksesan penerapan metode Kaizen sangat tergantung pada komitmen dari manajemen perusahaan. Manajemen perusahaan harus memperlihatkan komitmen yang kuat terhadap penerapan metode Kaizen dengan memberikan dukungan dan sumber daya yang cukup.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Budaya perusahaan yang mendukung : Budaya perusahaan yang mendukung penerapan metode Kaizen sangat penting untuk keberhasilan penerapan metode ini. Budaya perusahaan yang mendukung adalah budaya yang menghargai ide-ide baru, memperlihatkan toleransi terhadap kesalahan, dan memberikan ruang bagi karyawan untuk berpartisipasi dalam proses perbaikan.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Melibatkan seluruh karyawan : Metode Kaizen melibatkan seluruh karyawan dalam proses perbaikan. Oleh karena itu, kesuksesan penerapan metode ini sangat tergantung pada partisipasi aktif dari seluruh karyawan. Manajemen perusahaan perlu memberikan pelatihan dan dukungan yang cukup kepada karyawan agar mereka dapat terlibat secara aktif dalam proses perbaikan.</span></span>
            
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penggunaan alat bantu yang tepat : Penerapan metode Kaizen memerlukan penggunaan alat bantu yang tepat untuk membantu mengidentifikasi masalah dan menemukan solusi yang efektif. Alat bantu yang digunakan harus sesuai dengan kebutuhan perusahaan dan harus mudah dipahami dan digunakan oleh karyawan.</span></span>
            
            <p>Kesuksesan penerapan metode Kaizen sangat tergantung pada beberapa faktor utama, antara lain komitmen dari manajemen, budaya perusahaan yang mendukung, partisipasi aktif dari seluruh karyawan, penggunaan alat bantu yang tepat, dan evaluasi dan pengukuran kinerja yang berkala. Perusahaan perlu memperhatikan faktor-faktor ini untuk memastikan kesuksesan penerapan metode Kaizen dan meningkatkan efisiensi, produktivitas, dan daya saing di pasar.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-teknik-penting-inventory-management',
              'type' => 'article',
              'title' => '4 Teknik Penting Inventory Management',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/04/image-9.png',
              'tags' => 'industri 4.0',
              'date' => 'April 19, 2023',
              'content' => "
            
            <p>Inventory management adalah proses pengelolaan dan pengkontrolan atas persediaan sebuah produk yang akan didistribusikan oleh perusahaan kepada para konsumennya. </p>
            <p>Dalam proses ini mengatur seluruh arus masuk maupun keluarnya suatu barang, mulai dari proses pembelian atau saat produksi hingga penjualan pada konsumen.</p>
            <p>Inventory management dapat memungkinkan perusahaan untuk mengelola ataupun mengkontrol jumlah produk yang tepat pada tempat, waktu dan harga yang tepat. Serta dapat membantu perusahaan mengetahui jumlah produk yang dimiliki hingga kapan produk tersebut harus diisi kembali.</p>
            <p>Inventory management tentunya sangat penting untuk kesehatan perusahaan karena membantu memastikan bahwa jumlah stok produk yang tersedia tidak terlalu banyak maupun sedikit. </p>
            <p>Hal tersebut memudahkan perusahaan untuk tetap dapat memenuhi permintaan konsumen tanpa harus membuat pelanggan menunggu dan menghindari kemungkinan pelanggan beralih ke para pesaing.</p>
            <p>Agar perusahaan bisa menjalankan inventory management yang efektif, perusahaan harus menggunakan teknik yang cocok dengan industri bisnisnya. Semua metode atau teknik yang digunakan memiliki satu tujuan yang sama yaitu untuk meningkatkan akurasi.</p>
            <p>Untuk mencapai ukuran inventoty management yang baik maka perlu menerapkan 4 teknik unggulan seperti dibawah ini :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Analisis ABC</span></span>
            
            <p>Memiliki produk yang berbeda-beda dengan nilai inventaris yang berbeda-beda, ABC analysis memungkinkan kita untuk mengkategorikan produk menjadi tiga kategori: A, B, dan C. Dalam hal ini, kategori A memiliki nilai inventaris tertinggi dan memerlukan perhatian yang lebih besar. Sementara itu, kategori C memiliki nilai inventaris terendah dan dapat diabaikan untuk sementara waktu.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>FIFO dan LIFO</span></span>
            
            <p>First-in, First-out (FIFO) dan Last-in, First-out (LIFO) adalah dua metode penting dalam manajemen inventaris. Metode FIFO mengharuskan produk yang diterima terlebih dahulu untuk dijual terlebih dahulu, sementara metode LIFO mengharuskan produk yang diterima terakhir untuk dijual terlebih dahulu. Pemilihan metode yang tepat akan memengaruhi biaya persediaan dan laba yang dihasilkan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Just In Time Management</span></span>
            
            <p>JIT merupakan metode yang memungkinkan perusahaan untuk menghemat anggaran dan mengurangi pemborosan dengan hanya menyimpan persediaan yang dibutuhkan perusahaan untuk memproduksi dan menjual produk. Perusahaan hanya akan mengeluarkan biaya produksi jika memang dibutuhkan saja sehingga dapat menghemat biaya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Material Requirement Planning</span></span>
            
            <p>MRP fokus pada perencanaan, penjadwalan, dan pengendalian persediaan untuk proses produksi. Metode ini bergantung pada perkiraan penjualan yang artinya perusahaan harus memiliki catatan penjualan yang akurat untuk memungkinkan perencanaan kebutuhan inventaris yang juga akurat.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-langkah-untuk-mencapai-zero-breakdown-dengan-tpm',
              'type' => 'article',
              'title' => '4 Langkah Untuk Mencapai Zero Breakdown Dengan TPM',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/04/image-8.png',
              'tags' => 'industri 4.0',
              'date' => 'April 18, 2023',
              'content' => "
            
            <p>Perkembangan industri manufaktur yang terus maju menuntut perusahaan untuk bisa selalu memenuhi keperluan konsumen dan meningkatkan keuntungan. </p>
            <p>Total Productive Maintenance adalah salah satu metode yang bisa dilakukan untuk memenuhi hal tersebut. </p>
            <p>TPM sebagai suatu pendekatan yang inovatif dalam perawatan dengan cara mengoptimasi keefektifan peralatan, rusak mendadak (breakdown), dan melakukan perawatan mandiri oleh operator.</p>
            <p>TPM (Total Productive Maintenance) adalah suatu metode manajemen perawatan mesin yang bertujuan untuk mengoptimalkan kinerja dan produktivitas mesin, mencegah breakdown, serta mengurangi biaya perawatan.</p>
            <p>Selain itu, dengan menerapkan metode ini, lingkungan kerja bisa menjadi lebih baik dan terhindar dari kecelakaan-kecelakaan yang memungkinkan untuk terjadi selama proses produksi berlangsung.</p>
            <p>Dalam implementasi TPM, zero breakdown menjadi salah satu tujuan utama. Berikut adalah beberapa langkah yang dapat diambil untuk mencapai zero breakdown dengan TPM:</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Identifikasi dan evaluasi mesin</span></span>
            
            <p>Identifikasi mesin yang paling penting dan evaluasi kondisi mesin tersebut secara berkala. Hal ini dapat membantu Anda menentukan prioritas perawatan dan menemukan tanda-tanda breakdown sejak dini.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pelatihan dan pengembangan karyawan</span></span>
            
            <p>Pelatihan karyawan menjadi faktor kunci dalam mencapai zero breakdown dengan TPM. Karyawan harus diberi pelatihan dan pengembangan untuk meningkatkan pengetahuan dan keterampilan dalam merawat dan memelihara mesin.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemeliharaan terencana</span></span>
            
            <p>TPM melibatkan perawatan terencana dan preventif. Hal ini meliputi pemeriksaan berkala, perbaikan dan penggantian komponen yang rusak, serta pembersihan dan pelumasan mesin secara berkala. TPM juga melibatkan analisis dan perbaikan sistematis untuk mengidentifikasi penyebab breakdown dan mencegahnya terjadi lagi di masa depan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Keterlibatan manajemen</span></span>
            
            <p>Keterlibatan manajemen dan dukungan penuh dari pihak manajemen sangat penting dalam implementasi TPM. Manajemen harus memberikan dukungan dan sumber daya yang cukup untuk mencapai zero breakdown dan memastikan keberhasilan program TPM secara keseluruhan. Pemantauan dan pengukuran kinerja mesin secara berkala dapat membantu Anda mengidentifikasi masalah atau potensi masalah sebelum terjadi breakdown.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-tren-teknologi-di-tahun-2023',
              'type' => 'article',
              'title' => '3 Tren Teknologi di Tahun 2023',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/04/image-7.png',
              'tags' => 'industri 4.0',
              'date' => 'April 17, 2023',
              'content' => "
            
            <p>Teknologi yang terus menerus berkembang menungkinkan banyaknya teknologi baru yang semakin berkembang seiring dengan kebutuhan dari masyarakat. </p>
            <p>Sebagai tren yang terus berubah setiap tahunnya, ada beberapa teknologi yang mengalami perkembangan dalam transformasi digital.</p>
            <p>Berikut 3 tren teknologi yang akan digemari tahun ini :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Artificial Intelligence</span></span>
            
            <p>Artificial Intelligence (AI) telah menjadi bagian dari kehidupan sehari-hari. Mulai dari e-commerce hingga algoritma media sosial. Banyak perusahaan berlomba-lomba untuk menerapkan teknologi artificial intelligence dalam kegiatan bisnis. </p>
            <p>Hal ini dipercaya dapat mengambil alih peran manusia pada tugas repetitif dan mengeliminasi risiko human error. Artificial intelligence juga dipercaya dapat meningkatkan citra perusahaan sekaligus membantu perusahaan dalam mengembangkan produk dan jasa yang ditawarkan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Metaverse</span></span>
            
            <p>Metaverse adalah lingkungan virtual yang ada berdampingan dengan dunia fisik dan di mana pengguna berinteraksi melalui avatar digital. Dunia metaverse adalah dunia komunitas virtual yang dibangun saling terhubung satu sama lain, di mana orang dapat bertemu, bekerja, dan bermain, bahkan bertransaksi jual-beli layaknya dunia nyata berkat bantuan teknologi augmented reality (AR) dan virtual reality (VR).</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Digital Immune System</span></span>
            
            <p>Digital Immune System atau yang biasa disingkat DIS adalah kumpulan metode dan teknologi yang digunakan untuk melindungi infrastruktur teknologi dari serangan siber. Ini termasuk penggunaan firewall, antivirus, enkripsi, dan alat pengamanan jaringan lainnya. </p>
            <p>DIS juga mencakup strategi pengamanan data dan pemulihan bencana. Hal ini dapat mengurangi risiko hambatan kelangsungan bisnis. Hambatan dapat muncul saat aplikasi dan layanan penting terkena dampak cukup parah, bahkan berhenti beroperasi secara total.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-konsep-efektif-smart-manufacturing-system',
              'type' => 'article',
              'title' => '4 Konsep Efektif Smart Manufacturing System',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/04/image-6.png',
              'tags' => 'industri 4.0',
              'date' => 'April 14, 2023',
              'content' => "
            
            <p>Pada era digital yang sudah sangat berkembang saat ini, adanya konsep baru bernama manufaktur cerdas dan merupakan bagian dari revolusi industri berikutnya. </p>
            <p>Smart manufacturing adalah konsep baru di dunia industri manufaktur. Perusahaan yang tidak beradaptasi dalam mengadopsi teknologi dan proses baru bisa saja tertinggal.</p>
            <p>Smart manufacturing adalah sebuah konsep yang luas dan bukanlah sesuatu yang dapat diimplementasikan dalam proses produksi secara langsung. </p>
            <p>Smart manufacturing ialah sebuah kombinasi dari berbagai teknologi dan solusi yang diterapkan untuk mengoptimalkan proses manufaktur, dengan demikian juga meningkatkan keuntungan secara keseluruhan. </p>
            <p>Manufaktur cerdas berfokus kepada pemanfaatan data, data akan memberitahu pengguna mengenai apa yang harus dilakukan dan waktu untuk melakukannya.</p>
            <p>Dengan begitu maka perlu diterapkan konsep efektif untuk mencapai smart maufacuring system seperti berikut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Big Data dan Analytic</span></span>
            
            <p>Data IoT ditransfer ke sistem cloud melalui sistem komunikasi data. Data yang berjumlah besar ini menawarkan banyak wawasan yang dapat membantu mengidentifikasi setiap aspek dalam proses produksi. Setelah dianalisis, data tersebut dikirim sebagai umpan balik ke sistem produksi untuk dilakukan tindakan selanjutnya. </p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Artificial Intelligence (AI)</span></span>
            
            <p>Pertumbuhan AI didorong oleh pertumbuhan penggunaan teknologi data besar, IoT industri di bidang manufaktur, penggunaan robotika yang semakin luas di bidang manufaktur, kemitraan dan kolaborasi lintas industri, dan peningkatan investasi modal ventura. </p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Keamanan</span></span>
            
            <p>Manufaktur cerdas berfokus pada bagaimana cara memanfaatkan data yang dapat memberitahu Anda apa yang harus dilakukan dan kapan melakukannya. Karena industri manufaktur cerdas dibangun di sekitar Anda, keamanan menjadi hal yang memegang peranan penting dalam seluruh perusahaan bisnis Anda.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Industrial Internet of Things (IIoT)</span></span>
            
            <p>IIoT adalah lingkungan di mana setiap perangkat, mesin, dan proses terhubung melalui sistem yang dapat menghasilkan data relevan dengan kebutuhan perusahaan sehingga memungkinkan untuk mengakses lebih banyak data dengan kecepatan yang lebih baik. </p>
            <p>Perusahaan yang sistemnya terhubung dengan cloud akan mendapatkan keuntungan dari skalabilitas, peningkatan efisiensi, waktu yang lebih hemat, dan biaya yang semakin berkurang. Sistem ERP yang kurang mumpuni dapat mencegah Anda mengumpulkan data terpusat dan mencapai produktivitas karyawan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-prinsip-penting-kaizen-pada-perusahaan',
              'type' => 'article',
              'title' => '3 Prinsip Penting Kaizen Pada Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/04/image-5.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'April 12, 2023',
              'content' => "
            
            <p>Kaizen adalah sebuah filosofi atau pendekatan yang berasal dari Jepang yang menekankan pada perbaikan terus-menerus dalam proses, produk, dan layanan di sebuah perusahaan atau organisasi. </p>
            <p>Kaizen menekankan pada membuat perubahan-perubahan kecil secara bertahap untuk meningkatkan efisiensi, kualitas, dan produktivitas.</p>
            <p>Pendekatan Kaizen melibatkan mengidentifikasi area-area yang perlu diperbaiki, menganalisis situasi saat ini, mengembangkan rencana perbaikan, melaksanakan rencana tersebut, dan kemudian memantau hasilnya.</p>
            <p>Kaizen mendorong pendekatan sistematis dan berdasarkan data dalam menyelesaikan masalah, dengan fokus pada pengurangan limbah, peningkatan efisiensi, dan peningkatan kepuasan pelanggan. Ada beberapa prinsip penting yang harus diterapkan dalam penerapan Kaizen pada perusahaan, yaitu:</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Fokus pada Perbaikan Berkelanjutan</span></span>
            
            <p>Prinsip ini menekankan pentingnya perbaikan terus menerus dalam semua aspek bisnis. Perbaikan kecil yang dilakukan secara konsisten dapat menghasilkan perbaikan yang signifikan pada jangka panjang. </p>
            <p>Serta prinsip ini menekankan pentingnya keterlibatan dan partisipasi karyawan dalam perbaikan berkelanjutan. Karyawan yang terlibat secara aktif dalam perbaikan dapat memberikan ide dan saran yang berharga untuk meningkatkan efisiensi dan kualitas.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Fokus pada Pelanggan</span></span>
            
            <p>Prinsip ini menempatkan pelanggan sebagai fokus utama perbaikan dan perubahan. Dengan memahami kebutuhan pelanggan, perusahaan dapat meningkatkan kualitas produk dan layanan yang ditawarkan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Optimalisasi Proses</span></span>
            
            <p>Prinsip ini menekankan pentingnya mengoptimalkan setiap tahap proses produksi untuk meningkatkan efisiensi dan mengurangi biaya serta prinsip ini menempatkan kualitas sebagai fokus utama perbaikan. Perbaikan kualitas dapat menghasilkan penghematan biaya dalam jangka panjang karena dapat mengurangi biaya perbaikan dan penggantian produk yang cacat.</p>
            <p>Dengan menerapkan prinsip-prinsip Kaizen ini, perusahaan dapat menciptakan budaya perbaikan berkelanjutan dan meningkatkan efisiensi serta kualitas produk dan layanan. </p>
            <p>Hal ini pada akhirnya dapat menghasilkan biaya produksi yang lebih rendah, meningkatkan kepuasan pelanggan, dan meningkatkan daya saing perusahaan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-peran-penting-asset-management-bagi-perusahaan',
              'type' => 'article',
              'title' => '4 Peran Penting Asset Management Bagi Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/04/image-4.png',
              'tags' => 'industri 4.0',
              'date' => 'April 11, 2023',
              'content' => "
            
            <p>Dalam setiap perusahaan tentunya perlu sekali untuk mengelola aset yang dimiliki, pengertian management asset secara umum adalah sebuah proses pengelolaan aset yang dilakukan oleh perusahaan. </p>
            <p>Dilakukan dengan efektif dan efisien agar tujuan yang telah ditentukan dapat tercapai ataupun terlaksana dengan baik.</p>
            <p>Management asset tentunya dibutuhkan untuk mengambil keputusan yang tepat agar aset tersebut dapat lebih bermanfaat. Setiap perusahaan tentunya harus mengetahui aset yang masih bisa dikelola dengan aset yang perlu diganti. </p>
            <p>Dengan pengelolaan yang baik maka perusahaan bisa menekan pengeluaran dan menambah pemasukan.</p>
            <p>Pengelolaan tersebut tentunya perlu dilakukan dengan melibatkan seluruh pihak dalam level manajemen sehingga akan timbul keputusan yang dapat diimplementasikan secara baik di semua bagian perusahaan.</p>
            <p>Dengan kata lain perusahaan harus mempertimbangkan aset serta kombinasi yang menciptakan keuntungan dan resiko yang ada.</p>
            <p>Dalam penerapannya maka management asset tentunya memiliki peran peran penting bagi perusahaan sebagai berikut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menjaga Nilai Aset</span></span>
            
            <p>Dengan menggunakan manajemen aset tentunya perusahaan dapat menjaga nilai aset yang dimiliki agar tetap tinggi dan memilki usia pakai yang lebih panjan serta menghindari kerusakan yang dapat mengurangi nilai jual. Dengan menjaga aset tentunya perusahaan perlu menyediakan biaya operasional untuk perawatan aset tersebut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Memonitor Penyusutan Aset</span></span>
            
            <p>Penyusutan aset tentunya merupakan salah satu resiko atas penggunaan aktiva tetap, yang bermulai dari penyusutan fungsi hingga pentusutan nilai. Dengan hadirnya management asset maka perusahaan akan lebih mudah untuk melakukan pemonitoran akann penyusutan aset yang kemungkinan akan terjadi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menciptakan Manajemen Resiko</span></span>
            
            <p>Manajemen resiko adalah suatu metode ketidakpastian yang berkaitan dengan ancaman, hal ini sangat penting karena dapat menciptakan kesadaran perusahaan tentang adanya bahaya dan resiko dari aset yang dimilki. Management asset tentunya dapat mengurangi resiko dengan menambah langkah pengendalian yang diperlukan guna pencegahan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengurangi Pembelian Berlebih</span></span>
            
            <p>Penerapan management asset maka aset yang dimiliki akan tersimpan dengan baik sejak pertama hingga akhir, maka dengan begitu akan mengurangi resiko kehilangan aset perusahaan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-faktor-penting-pengaruh-masa-depan-iot',
              'type' => 'article',
              'title' => '3 Faktor Penting Pengaruh Masa Depan IoT',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/04/image-3.png',
              'tags' => 'industri 4.0,Internet of Things,IoT',
              'date' => 'April 10, 2023',
              'content' => "
            
            <p>Seiring dengan pesatnya kemajuan teknologi dalam bidang komputer dan internet, perkembangan teknologi dan internet di dunia tenyata secara perlahan mengalami transformasi.</p>
            <p>Dalam kehidupan manusia, banyak hal yang dulu dilakukan dengan cara manual nampaknya telah berubah menjadi otomatis berkat kemajuan teknologi dan juga internet.</p>
            <p>Lebih dari itu ternyata perkembangan internet juga merambah ke faktor lain dan dikenal dengan Internet of Things, Internet of Things merupakan sebuah konsep di mana suatu benda atau objek ditanamkan teknologi – teknologi seperti sensor dan software dengan tujuan untuk berkomunikasi, mengendalikan, menghubungkan, dan bertukar data melalui perangkat lain selama masih terhubung ke internet.</p>
            <p>Singkatnya, IoT membuat benda atau objek jadi semakin canggih dengan ditanamkannya perangkat – perangkat lunak maupun sensor yang terkoneksi dengan internet. Tujuannya adalah untuk menghubungkan, mengontrol, berkomunikasi, serta tukar-menukar data antara perangkat – perangkat tersebut.</p>
            <p>Dalam perkembangannya tentu IoT akan memiliki masa depan yang lebih canggih lagi, kecanggihan tersebut tentunya tidak terlepas dari faktor faktor penting seperti dibawah ini :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Nilai Nyata IoT</span></span>
            
            <p>Pelanggan melihat nilai nyata dalam penerapan IoT, sebuah langkah maju yang signifikan dibandingkan dengan tahun tahun sebelumnya. IoT adalah pendukung inti dari transformasi digital dan dorongan keberlanjutan yang sedang berlangsung di perusahaan dan lembaga publik di seluruh dunia.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Teknologi</span></span>
            
            <p>Untuk sebagian besar kasus penggunaan IoT, ada teknologi terjangkau yang memungkinkan penerapan dalam skala besar. Sensor sekarang mencakup seluruh spektrum, dari visual hingga akustik dan segala sesuatu di antaranya komputasi lebih dari cukup cepat, penyimpanan ada di mana-mana dan daya baterai telah meningkat. </p>
            <p>Kemajuan dalam perangkat keras telah diimbangi dengan perkembangan signifikan dalam analitik canggih, AI (Artificial Intelligence), dan pembelajaran mesin yang memungkinkan wawasan yang lebih cepat dan lebih terperinci serta pengambilan keputusan otomatis dari data yang disediakan oleh sensor.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Infrastruktur Jaringan</span></span>
            
            <p>Jaringan bertindak sebagai tulang punggung yang menghidupkan IoT dan membuat semuanya menjadi mungkin. Jaringan generasi keempat (4G) perusahaan telekomunikasi telah menyebar untuk menjangkau lebih banyak orang dengan kinerja yang lebih tinggi, dan jaringan 5G dengan cepat disebarkan. </p>
            <p>Sesuai dengan peningkatan dalam protokol jaringan lain, pelanggan memiliki berbagai pilihan konektivitas yang dapat memenuhi kebutuhan mereka, baik yang terkait dengan kapasitas, kecepatan, latensi, atau keandalan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-langkah-utama-pada-asset-management-system',
              'type' => 'article',
              'title' => '3 Langkah Utama Pada Asset Management System',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/04/image-2.png',
              'tags' => 'industri 4.0',
              'date' => 'April 6, 2023',
              'content' => "
            
            <p>Manajemen aset tentunya bukan merupakan hal yang mudah, terlebih lagi jika aset yang dimiliki sebuah perusahaan memiliki jumlah yang banyak. </p>
            <p>Sesuai namanya, manajemen aset adalah kegiatan pengelolaan aset milik individu, organisasi, ataupun perusahaan secara lebih efektif untuk mencapai suatu tujuan.</p>
            <p>Lebih dari itu, keberadaan manajemen aset juga dianggap sebagai salah satu cara dalam meningkatkan kinerja perusahaan. </p>
            <p>Penerapan manajemen aset pada perusahaan bermanfaat untuk mengurangi pengeluaran tak optimal dan meningkatkan pemasukan.</p>
            <p>Dengan berbagai tantangan yang ada maka pengelolaan mengenai aset tersebut tentunya perlu sekali dilakukan, tentunya dalam penerapan manajemen aset memerlukan beberapa langkah utama yang perlu dilakukan seperti :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menentukan Penanggung Jawab</span></span>
            
            <p>Saat bekerja, tentu pemilik aset tidak dapat terus-terusan memantau kondisi asetnya. Banyaknya kewajiban lain dan bisnis yang terus berkembang membuat waktu seseorang untuk mengawasi aset semakin terbatas. </p>
            <p>Oleh karena itu, Anda bisa menunjuk seseorang sebagai penanggung jawab aset. Orang tersebut akan bertugas untuk mengkontrol semua elemen bisnis termasuk manajemen aset.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Memahami Siklus Aset</span></span>
            
            <p>Saat baru memulai manajemen aset, penting bagi perusahaan untuk rutin memeriksa nilai aset yang dimiliki. Pemeriksaan ini dilakukan guna menghindari risiko adanya pengeluaran-pengeluaran tak terduga akibat beban dari kepemilikan aset yang tidak tercatat. </p>
            <p>Memahami siklus hidup aset dapat memudahkan perusahaan untuk mengelola dan menggunakan asetnya. Selain itu, perusahaan juga bisa menghemat waktu dalam pengambilan keputusan untuk memperbarui atau menghapus aset.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Tracking Aset Secara Berkala</span></span>
            
            <p>Tanpa adanya pengecekan aset secara rutin maka perusahaan dapat mengalami kerugian secara finansial yang akan dibebankan kepembayaran pajak, asuransi, pembelian dan manajemen aset yang sebenarnya tidak perlu terjadi. </p>
            <p>Perusahaan bisa saja membayar pajak untuk aset aset yang sudah tidak yang lagi dimiliki. Perusahaan juga akan kerepotan jika jumlah aset ternyata tidak cukup untuk memenuhi permintaan pelanggan ataupun klien yang dimiliki. </p>
            <p>Jika digunakan terus menerus, aset akan menurun kualitasnya baik dari segi fungsi maupun nilai. Maka dari itu, peran manajemen aset adalah untuk memonitor aset sangat dibutuhkan tersebut.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-kecanggihan-iot-dalam-bidang-otomotif',
              'type' => 'article',
              'title' => '3 Kecanggihan IoT Dalam Bidang Otomotif',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/04/image-1.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'April 5, 2023',
              'content' => "
            
            <p>Teknologi internet semakin tak terpisahkan dari kehidupan manusia modern. Teknologi ini pun berkembang sedemikian rupa. </p>
            <p>Saat ini, muncul apa yang disebut Internet of Things (IoT) yang mengacu pada berbagai perangkat fisik yang terhubung ke internet.</p>
            <p>Internet of things merupakan sebuah konsep di mana suatu benda atau objek ditanamkan teknologi-teknologi seperti sensor dan software dengan tujuan untuk berkomunikasi, mengendalikan, menghubungkan, dan bertukar data melalui perangkat lain selama masih terhubung ke internet. </p>
            <p>Teknologi semakin tak terbatas kedepannya. Apalagi teknologi di bidang otomotif yang sudah masuk ranah Internet of Things (IoT). </p>
            <p>Saat ini produksi mobil di seluruh dunia sudah banyak yang bisa dihubungkan langsung dengan smartphone atau didukung oleh sistem operasi lainnya.</p>
            <p>Tujuannya untuk memberikan kemudahan dalam perjalanan sehari-hari seperti mengetahui jarak yang dituju estimasi waktu perjalanan dan arah jalan yang harus ditempuh. </p>
            <p>Dengan banyaknya kemudahan-kemudahan tersebut membuat sebuah teknologi sudah ada dalam genggaman. Sehingga dunia otomotif kini selalu berdampingan dengan dunia IOT yang satu sama lain bisa dikombinasikan menjadi satu.</p>
            <p>Dengan kemudahan yang didapatkan dengan menggunakan IoT maka tentu akan menimbulkan beberapa kecanggihan IoT dalam bidang otomitif, seperti berikut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kendaraan Tanpa Awak</span></span>
            
            <p>Dunia otomotif dan transportasi selama beberapa tahun terakhir dihebohkan dengan adanya kendaraan yang dapat dijalankan tanpa awak. Pemilik atau pengguna kendaraan dapat berpindah dari satu tempat ke tempat lainnya tanpa perlu menyetir sendiri maupun menggunakan tenaga manusia lain untuk menyopir. </p>
            <p>Internet of Things merupakan konsep teknologi yang memungkinkan terjadinya komunikasi data antarperangkat tanpa adanya campur tangan manusia dalam pengoperasiannya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Smart Infrastruktur</span></span>
            
            <p>Melakukan pencegahannya terkait lalu lintas, penerapan penerangan jalan, stasiun pengisian jaringan untuk kendaraan listrik manajemen energi yang tepat, dan manajemen parkir yang cerdas. </p>
            <p>Termasuk kombinasi Smart infrastruktur yang sudah mulai dikembangkan saat ini. Hal tersebut akan meningkatkan efisiensi penggunaan sumber daya dan dana. Hal ini bisa melihat dengan banyaknya fasilitas infrastruktur yang dibuat namun dengan dana yang relatif cukup efisien.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Connected Cars</span></span>
            
            <p>IoT telah memungkinkan mobil untuk terhubung ke internet dan sistem lain, seperti GPS, sensor, dan sistem navigasi. Ini memungkinkan mobil untuk memantau kondisi jalan dan lalu lintas, memperbarui informasi navigasi secara real-time, dan memungkinkan pengemudi untuk mengakses informasi yang dibutuhkan dengan mudah.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-peran-big-data-analytics-untuk-perusahaan',
              'type' => 'article',
              'title' => '3 Peran Big Data Analytics Untuk Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/04/image.png',
              'tags' => 'big data',
              'date' => 'April 4, 2023',
              'content' => "
            
            <p>Era digital saat ini menjadi peran big data analytics begitu krusial dalam dunia bisnis. Kemampuan menganalisis data atau biasa dikenal big data analytics dibutuhkan untuk membangun sektor bisnis yang berkelanjutan, sebab itu tiap perusahaan perlu memilikinya. </p>
            <p>Pada dasarnya, big data adalah suatu istilah khusus yang digunakan untuk data yang sudah melebihi kapasitas pemrosesan database konvensional. </p>
            <p>Hal tersebut karena datanya yang berjumlah sangat besar dan banyak, bergerak terlalu cepat, dan juga tidak sesuai dengan kemampuan struktural dari arsitektur database tradisional.</p>
            <p>Big data ini disiapkan oleh berbagai perusahaan besar, baik itu organisasi ataupun firma. Berbagai data ini nantinya akan diambil, dikelola, dan digunakan oleh perusahaan untuk berbagai kepentingannya sendiri. </p>
            <p>Semua proses yang dilakukan untuk mengumpulkan, merapikan dan melakukan analisis big data inilah yang dikenal dengan sebutan big data analytics. Dalam perusahaan tentunya Big Data Analytics memiliki peran seperti berikut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengurangi biaya pengeluaran</span></span>
            
            <p>Ketika semua data diolah dengan baik, Anda dapat melihat apa saja yang masih efektif digunakan dan tidak. Dengan begini perusahaan Anda akan mengurangi biaya untuk kegiatan yang memang sudah tidak efektif untuk perkembangan bisnis Anda.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensikan waktu</span></span>
            
            <p>Karena semua data sudah diintegrasikan oleh sistem Big Data Analytics, Anda akan sangat menghemat waktu. Karena semua sudah tersusun rapi, dan dapat diperoleh kapan saja serta apabila diterapkan teknologi data analytics, insight dari informasi yang ada dapat diambil sehingga stakeholder bisa mengambil data-based action untuk melakukan respon atas keadaan yang dihadapinya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Panduan untuk inovasi produk</span></span>
            
            <p>Mengetahui apa saja yang sedang digemari publik menggunakan data, sudah terbukti efisien untuk membantu dalam proses inovasi produk. Ketika Anda memiliki data-data yang tepat, akan lebih mudah bagi Anda untuk mengembangkan bisnis Anda sesuai dengan apa yang sedang diminati publik.</p>
            <p>Kesempatan yang baru ini digunakan oleh perusahaan dengan cara menggunakan big data. Selain mereka bisa mendapatkan keuntungan, pelanggan pun akan menjadi senang karena terdapat rekomendasi yang sesuai dengan kesukaan dan keperluan mereka. </p>
            <p>Jadi, bisa kita katakan bahwa big data analytics bisa memberikan keuntungan pada pihak pelanggan dan perusahaan.</p>
            <p>Selain itu, big data analytics juga mampu mengurangi biaya produksi perusahaan, mempercepat proses pengambilan keputusan, dan juga memudahkan perusahaan dalam membuat produk baru yang sesuai dengan kemauan dan harapan target pasar.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'revolusi-manufaktur-dengan-rfid-mengapa-tidak',
              'type' => 'article',
              'title' => 'Revolusi Manufaktur Dengan RFID? Mengapa Tidak?',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/image-13.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'March 29, 2023',
              'content' => "
            
            <p>Sudah banyak sekali industri yang mulai berkembang dengan memanfaatkan teknologi internet untuk mencapai perkembangan yang lebih pesat. </p>
            <p>Salah satu contohnya adalah industri manufaktur yang memulai transformasi dan bergerak maju menuju revolusi yang lebih baik menuju manufaktur cerdas, salah satu kuncinya adalah dengan menggunakan RFID.</p>
            <p>Otomatisasi produk industri telah menjadi tren saat ini sehingga beberapa mesin serta peralatan produksi yang lebih cerdas telah mengantikan sebagian dari pekerjaan manual, dan dengan begitu maka kualitas dari hasil produksi tersebut dengan meningkat dengan pesat.</p>
            <p>Menggunakan RFID maka dapat dikatakan bahwa sudah memilih jalan yang lebih baik untuk manufaktur, karena seperti yang diketahui bahwa RFID ialah kependekan dari Radio Frequency Identification yaitu teknologi yang dapat mengidentifikasi secara otomatis non kontak, serta dapat memperoleh data yang relevan melalui sinyal frekuensi radio.</p>
            <p>Tag RFID dapat dibaca dari jarak jauh shingga akan sangat memudahkan untuk diimplementasikan pada manufaktur, karena tentunya dapat menghemat waktu dan tenaga pada saat melakukan identifikasi pada saat barang tersebut masuk maupun keluar dari gudang dan tentunya mengurangi kesalahan dalam penghitungan yang dapat disebabkan oleh kesalahan manusia.</p>
            <p>Teknologi RFID tentunya memiliki keuntungan jika diimplementasikan dalam manufaktur cerdas seperti :</p>
            <ol type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Minim kontak, sehingga semua pengumpulan data dilakukan secara otomatis dan data yang dihasilkan langsung terinput secara otomatis.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menghasilkan informasi dari objek yang berjalan secara bersamaan serta dapat mengidentifikasi beberapa tag secara langsung, dengan begitu maka akan mempercepat proses pendataan.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Teknologi RFID dapat diintegrasikan dengan teknologi manufaktur maupun rantai pasok lainnya seperti penggunaan mesin otomatis dan sistem pengambilan stok untuk mengurangi waktu maupun pengiriman.</span></span>
            </ol>
            <p>Dengan menggunakan RFID tentunya akan tercipta lini produksi maupun manajemen produksi yang baru dan lebih cerdas melalui beberapa teknologi yang menggunakan internet guna mengumpulkan data. </p>
            <p>Dengan otomatisasi tersebut maka tercipta proses produksi yang lebih efisien, sehingga penerapan RFID pada manufaktur dapar mewujudkan kecerdasan baru di bidang manufaktur yang lebih cerdas.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'rfid-vs-barcode-ini-perbedaannya',
              'type' => 'article',
              'title' => 'RFID Vs Barcode? Ini Perbedaannya!',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/untitled-design-1.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'March 28, 2023',
              'content' => "
            
            <p>RFID dan barcode merupakan dua sistem identifikasi otomatis yang banyak digunakan secara luas saat ini, kedua teknologi tersebut tentunya memiliki perbedaan mulai dari hal kecepatan maupun jangkauan. </p>
            <p>Perbadaan tersebut tentunya yang menyebabkan beberapa orang memilih untuk memakai salah satu dari sistem identifikasi tersebut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Barcode</span></span>
            
            <p>Barcode adalah sebuah kode yang bisa dibaca oleh reader atau pemindai dalam bentuk angka dan memiliki sekelompok garis pararel dan memiliki jarak tertentu untuk memindai informasinya.</p>
            <p>Kode tersebut biasanya dibut dengan kode batang, sekarang ini sudah banyak smartphone yang dapat membaca kode barcode tersebut. </p>
            <p>Dalam barcode data digambarkan oleh lebar dan jarak garis yang terdapat pada rangkaian jarak garis parallel pada barcode.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>RFID</span></span>
            
            <p>Sedangkan RFID ialah Radio Frequency Identification adalah identifikasi yang memanfaatkan gelombang radio untuk menyimpan informasi antara barang dengan sistem yang terhubung. Perangkat RFID pada umumnya terdiri dari RFID tag, RFID reader dan RFID antenna.</p>
            <p>Penggunaan RFID tentunya memiliki lebih banyak keunggualan dari barcode, salah satunya adalah RFID dapat menangkap sinyal melalui gelombang radio dari jarak jauh, sehingga lebih efisien dibandingkan dengan barcode. Dengan berbagai macam kelebihannya maka RFID menjadi standar di berbagai sistem industri.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>RFID Vs Barcode</span></span>
            
            <p>Kehadiran teknologi RFID dianggap lebih efektif dibandingkan dengan barcode karena tag RFID dapat dibaca pada jarak yang lebih jauh, RFID reader dapat mengakses informasi pada tag dari jarak sekitar 300 meter sedangkan saat menggunakan barcode tidak bisa terbaca melalui jarak lebih dari 15 meter.</p>
            <p>Proses pembacaan RFID juga dapat katakan lebih cepat dari pada barcode karna tidak perlu berhadapan langsung saat proses pembacaan, berbeda dengan barcode yang memerlukan pembacaan secara langsung dan tentunya memakan waktu lama.</p>
            <p>Barcode biasanya dicetak pada label kertas ataupun pada permukaan yang tidak memiliki pelindung sehingga dengan begitu barcode mudah rusak dan memiliki kemungkinan tidak dapat dibaca. </p>
            <p>Sedangkan tag RFID dirancang khusus untuk bekerja dalam sebuah kondisi tertentu dan memiliki pelindung sehingga dapat tahan dari berbagai macam kondisi maupun benturan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'penting-ini-pengaruh-iot-pada-masa-mendatang',
              'type' => 'article',
              'title' => 'Penting! Ini Pengaruh IoT Pada Masa Mendatang',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/image-12.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'March 24, 2023',
              'content' => "
            
            <p>Banyak sekali perubahan yang terjadi sejak era industri 4.0 tentunya Internet of Things menjadi suatu bagian yang yang tak terelakkan untuk berbagai macam perubahan. </p>
            <p>Dengan begitu maka masa depan Internet of Things sangat dibutuhkan dengan signifikan baik untuk kebutuhan bisnis atau kebutuhan sehari hari.</p>
            <p>Kehadiran IoT tentunya memberikan perubahan pada kehidupan manusia termasuk memberikan perubahan tentang cara berbisnis para pengusaha. </p>
            <p>Melalui IoT yang semakin berkembang maka akan semakin banyak juga hal positif yang dapat dirasakan. Dengan begitu maka bukan hal yang mustahil jika Internet of Things akan semakin berkembang dimasa yang akan datang.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Masa depan Internet of Things</span></span>
            
            <p>Jika bicara mengenai masa depan maka akan dapat dikatakan bawah teknologi Internet of Things akan semakin berkembang dan kompleks, mulai dari perangkat teknologi seperti smartphone sampai dengan perangkat rumah yang memanfaatkan IoT untuk berbagai macam kebutuhan.</p>
            <p>Para ilmuan memperkirakan pada masa depan akan banyak sekali perangkat berbasis IoT yang akan digunakan, dengan semakin luasnya jaringan IoT tentunya akan membuat suatu perubahan besar yang akan menimbulkan kemudahan. </p>
            <p>Semakin canggihnya teknologi maka kejahatan cyber juga akan meningkat maka dengan demikian IoT dicanangkan akan memperketat seluruh perangkatnya agar tidak timbul kejahatan tersebut.</p>
            <p>Dalam dunia bisnis masa depan Internet of Things diramalkan akan sangat berkembang pesat karena akan banyak perusahaan berbasis industri yang akan meanfaatkan IoT dalam industrinya.</p>
            <p>Salah satu contohnya adalah pada saat pengelolaan data, sebelum menggunakan IoT mungkin pengelolaan data dilakukan secara manual sedangkan setelah menggunakan IoT dapat mengubah pengelolaan data tersebut menjadi otomatis dan tentunya akan lebih menghemat banyak waktu dan tenaga. </p>
            <p>Dapat dikatakan juga bahwa industri yang ingin maju tidak dapat mengesampingkan peranan teknologi dalam perjalanan bisnisnya.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'kaizen-untuk-perbaikan-supply-chain-begini-caranya',
              'type' => 'article',
              'title' => 'Kaizen Untuk Perbaikan Supply Chain? Begini Caranya',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/untitled-design.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'March 23, 2023',
              'content' => "
            
            <p>Kaizen dikenal sebagai sebuah dasar untuk metode produksi, kerena penerapan kaizen dapat membantu banyak produsen dan pengecer menjadi lebih kompetitif. </p>
            <p>Dengan begitu maka dapat menghemat biaya dan dapat menciptakan kepuasan pelanggan diiringi dengan kualitas karyawan yang lebih tinggi.</p>
            <p>Kaizen tersendiri adalah bahasa Jepang yang berarti perubahan yang baik, sehingga kaizen dapat diartikan sebagai sebuah perubahan menjadi lebih baik atau perbaikan yang berkelanjutan. </p>
            <p>Perubahan yang dimaksud dalam kaizen adalah perubahan kecil yang dilakukan secara terus menerus guna mendapatkan hasil yang efektif untuk jangka panjang.</p>
            <p>Pada pengaplikasiannya dalam supply chain kaizen memiliki empat siklus berkelanjutan, Teknik ini sering disebut dengan Teknik PDCA, Teknik ini dapat mengontrol serta meningkatkan proses pada supply chain sehingga dapat lebih efektif serta efisien. </p>
            <p>Dapat dikatan juga bahwa tahapan dalam Teknik ini berguna untuk mengawasi dan menyesuaikan kesalahan yang mungkin terjadi dalam sebuah proses bisnis yang bertujuan untuk memperbaikinya menjadi lebih baik.</p>
            <p>Cara melakukan perbaikan pada supply chain dengan mengyunakan metode kaizen seperti berikut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Perencanaan</span></span>
            
            <p>Pada tahapan pertama adalah dengan cara mengidentifikasi masalah apa yang harus diselesaikan, dengan cara melihat lebih dekat proses supply chain secara langsung dalam kegiatan sehari hari. </p>
            <p>Dengan begitu dapat diketahui apa saja masalah yang terdapat dalam supply chain tersebut, dan tentang bagaimana cara terbaik yang dilakukan untuk menyelesaikan masalah tersebut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pelaksanaan</span></span>
            
            <p>Setelah melakukan identifikasi masalah maka langkah selatjutnya yang harus dilakukan adalah perencanaan. Kegiatan ini berguna untuk mengukur seberapa efektif langkah yang sudah diambil. Selain itu dilakukan juga penggumpulan data yang berfungsi untuk dianalisa.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pemeriksaan</span></span>
            
            <p>Dalam tahap ini dilakukanlah evaluasi berdasarkan rencana yang dijalankan pada tahap sebelumnya. Tahap ini cukup penting untuk mengukur seberapa besar penigkatan yang dilakukan dengan kata lain pada proses ini dapat dilihat berhasil atau tidaknya proses perbaikan pada supply chain tersebut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Tindak nyata</span></span>
            
            <p>Merupakan tahap akhir yang dasarnya adalah akumulasi dari tahap tahap sebelumnya. Maka pada tahap ini semua informasi dari langkah sebelumnya dikumpulkan serta dianalisa untuk mendapatkan keputusan lebih lanjut. </p>
            <p>Serta untuk mengetahui apakah perbaikan tersebut berhasil atau tidak, jika kurang berhasil maka akan dilakukan perubahan para penerapan metode tersebut guna medapatkan hasil yang lebih lagi.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'big-data-dalam-meningkatkan-manajemen-inventaris',
              'type' => 'article',
              'title' => 'Big Data Dalam Meningkatkan Manajemen Inventaris',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/image-11.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'March 21, 2023',
              'content' => "
            
            <p>Big Data membawa perubahan besar pada bisnis, dengan mengumpulkan dan menganalisis sekumpulan informasi yang berjumlah besar maka perusahaan dapat dengan mudah mengoptimalkan hampir seluruh aspek bisnis. </p>
            <p>Solusi berbasis data ini dapat membuat perusahaan dapat menghasilkan pendapatan yang lebih serta pelanggan puas dengan pelayanan yang diberikan.</p>
            <p>Big Data adalah sekumpulan data yang jumlahnya besar dan terus bertambah setiap waktunya. Penggunaan Big Data yang paling diperlukan tentunya adalah pada bidang pemasaran karena mulai dari pemasaran dapat menguntungkan indutri lainnya. </p>
            <p>Manajemen inventaris gudang adalah salah satu sektor yang memerlukan peranan penting dari Big Data, karena dengan penggunaan Big Data stok dapat terorganisir dengan baik dan berfokus pada pelanggan.</p>
            <p>Dengan Big Data juga dapat menghadirkan cara baru mengenai bagaimana cara meningkatkan manajemen inventaris. Berikut manfaat penggunaan Big Data dalam manajemen inventaris :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningkatkan efisiensi</span></span>
            
            <p>Meningkatkan efisiensi mungkin adalah salah satu keuntungan dari Big Data yang merupakan keuntungan signifikan, pergerakan pada gudang mencakup banyak proses kecil yang saling berhubungan. </p>
            <p>Dengan begitu jika salah satu dari proses tersebut tertinggal maka dapat menyebabkan masalah pada proses secara keseluruhan. </p>
            <p>Dengan Big Data, manajer dapat mengatasi masalah terkait efisiensi yang mungkin tidak mereka ketahui keberadaannya. Informasi yang telah dikumpulkan dari berbagai gudang yang digunakan dapat memberi tahu administrator jika mesin tidak bekerja pada kinerja puncaknya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Memprediksi kebutuhan</span></span>
            
            <p>Salah satu aspek Big Data yang paling mengesankan adalah kemampuannya untuk membuat prediksi yang akurat. Seperti memprediksi perubahan perilaku pelanggan dapat menjadi keuntungan besar bagi manajemen inventori.</p>
            <p>Dengan bantuan Big Data maka dapat dihasilkan data yang mungkin dibutuhkan perusahaan untuk mengetahui pergerakan para pelanggannya sehingga dapat menyediakan produk sesuai dengan kebutuhan pelanggan. Sehingga dengan begitu akan lebih bayak informasi yang lebih banyak dalam waktu yang lebih singkat dibanding dengan mendapatkan data maupu informasi secara manual.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mencegah kerugian</span></span>
            
            <p>Penyusutan terjadi ketika catatan inventaris menunjukkan jumlah item yang lebih tinggi daripada yang sebenarnya ada dalam stok. Analitik data dapat menunjukkan jika beberapa item cenderung hilang pada waktu tertentu di departemen tertentu dengan begitu maka pengelola dapat mengambil tindakan pengamanan lebih lanjut di area tersebut, seperti memasang kamera untuk menangkap pencuri. </p>
            <p>Kumpulan data tersebut tentunya dapat menyoroti area di mana inventaris tidak konsisten, menunjukkan di mana karyawan mungkin salah menempatkan produk.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '5-langkah-perubahan-dengan-metode-kaizen',
              'type' => 'article',
              'title' => '5 Langkah Perubahan Dengan Metode Kaizen',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/image-10.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'March 20, 2023',
              'content' => "
            
            <p>Kaizen merupakan Bahasa Jepang yang diartikan sebagai perbaikan, perubahan menjadi lebih baik ataupun perbaikan berkelanjutan. </p>
            <p>Kaizen juga sudah menjadi filosofi bisnis untuk membuat suatu perubahan kecil yang dilakukan secara terus menerus agar terus menjadi lebih baik.</p>
            <p>Perubahan ini tentunya dimulai dari langkah kecil ataupun masalah yang timbul diawal, kaizen didasarkan pada komunikasi dan kerja sama antar elemen dalam perusahaan. </p>
            <p>Perubahan dengan menggunakan metode kaizen tentunya akan menghasilkan dampak yang nyata melalui beberapa langkah seperti berikut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menentukan masalah</span></span>
            
            <p>Masalah yang dimaksud adalah masalah mengenai prioritas bisnis yang biasanya muncul pada lingkungan kerja, masalah tersebut harus dapat jelas teridentifikasi agar team memiliki pandangan yang sama mengenai masalah tersebut dan masalah tersebut memiliki lingkup yang jelas. Tentunya masalah ini hanya yang harus sesuai dengan kebutuhan bisnis yang dimiliki.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menciptakan tujuan</span></span>
            
            <p>Pelaksanaan kaizen pertama kali yang dilakukan oleh team dapat dimulai dari pembentukan tujuan dan sasaran yang ingin dicapai guna seperti menciptakan area kerja yang lebih efisien, memperbaiki flow, mempercepat waktu, mengurangi cacat pada produk, mengurangi jumlah breakdown mesin, mempercepat waktu changeover. </p>
            <p>Tujuan tujuan tetrsebut tentunya harus berlandaskan masalah yang telah diamati sehinggga dapat menyelesaikan masalah tersebut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Bentuk team</span></span>
            
            <p>Team kaizen dibentuk sesuai denga kebutuhan, disarankan sebagian anggota team dibentuk dari area kerja yang berbeda guna dapat lebih menghasilkan ide serta pandangan positif pada penerapan kaizen yang akan dilakukan. </p>
            <p>Tentunya team tersebut harus berfokus pada kegiatan maupun waktu pelaksanaan metode kaizen tersebut agar tidak terganggu oleh kegiatan lainnya guna menghasilkan hasil penerapan yang lebih baik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Memberikan pengetahuan tentang kaizen</span></span>
            
            <p>Saat pertama kali ingin melakukan metode kaizen tentunya harus melalukan training kepada para anggota team guna mendapatkan hasil yang baik. </p>
            <p>Training ini juga bertujuan untuk memberi pengetahuan kepada anggota team agar dapat mengenal apa itu kaizen dan apa saja tujuan yang ingin dicapai.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Melakukan pengukuran</span></span>
            
            <p>Ada baiknya seblum melakukan perubahan menggunakan metode kaizen untuk mengukur terlebih dahulu baseline performance sehingga dapat diketahui apakah metode kaizen ini efektif dilakukan atau tidak. </p>
            <p>Maka akan lebih efektif lagi juka kita mengetahui pergerakan yang terjadi pada saaat penggunaan metode kaizen dan setelah penggunaan metode kaizen.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '8-pillar-tpm-metode-ringkas-meningkatkan-produktivitas',
              'type' => 'article',
              'title' => '8 Pillar TPM, Metode Ringkas Meningkatkan Produktivitas!',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/image-8.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'March 16, 2023',
              'content' => "
            
            <p>Total Productive Maintenance atau yang biasa dikenal dengan TPM adalah suatu sistem yang digunakan untuk memelihara serta meningkatkan kualitas produksi dengan melakukan perawatan mesin maupun perlengkapan kerja lainnya. </p>
            <p>TPM berfokus untuk memastikan seluruh mesin maupun peralatan kerja dalam kondisi terbaik sehingga menghindari terjadinya kerusakan yang lebih parah maupu keterlambatan pada proses produksi.</p>
            <p>TPM memiliki 3 fokus utama yaitu :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Zero product defect (tidak ada produk cacat)</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Zero equipment unplanned failures (tidak ada kegagalan atau kerusakan pada mesin yang tidak terdeteksi sebalumnya)</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Zero accident (tidak ada kecelakaan di area kerja)</span></span>
            
            <p>Target tersebut dapat tercapat dengan melakukan pencatatan mengenai produk cacat, kegagalan mesin serta kecelakaan yang pernah terjadi sebelumnya. S</p>
            <p>etalah pencatatan maka dapat dihasilkan pemahaman mengenai rencana kedepan untuk mengetahui apa yang ingin dicapai.</p>
            <p>Terdapat 8 pillar yang menunjang implementasi TPM, seperti berikut :</p>
            <ol type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Focussed improvement (Kobetsu Kaizen) : Proses ini berfokus pada perbaikan objektif dengan memecah proses dengan cara yang jelas serta dapat dipahami sehingga pemborosan segera teridentifikasi.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Planned Maintenance : Pemeliharaan ini terdiri dari kegiatan pemeliharaan secara terjadwal untuk pencegahan, pemulihan peralatan serta memprediksi masa pakai menggunakan peralatan.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pelatihan : Pelatihan dilakukan dengan tujuan untuk menciptakan pekerja yang multiskilled dan energi yang memiliki semangat kerja. Pelatihan juga dapat membantu mereka untuk meningkatkan keterampilan mereka.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Autonomous Maintenance : Berfokus pada memberdayakan operator alat berat untuk mendeteksi tanda tanda peringatan dini pada alat berat dan melakukan perawatan pada mesin yang lebih sering digunakan.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Quality Maintenance (Hinshitsu Hozen) : Pemeliharaan ini difokuskan kepada kepuasan pelanggan dengan mencapai tingkat kualitas yang lebih baik melalui produk bebas cacat.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Office TPM : Office TPM tentunya harus dimulai setelah menjalankan pilar lain, karena bagian ini harus dapat meningkatkan produktivitas, efisiensi dan menganalisis kerugian yang terjadi.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Safety, Hygene &amp; Environment : Pillar ini berperan aktif mengikuti pilar lainnya guna menciptakan tempat kerja yang aman dan area sekitar yang tidak rusak oleh proses produksi.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Tools Management : Berfungsi untuk meningkatkan ketersediaan equipment dengan mengurangi waktu untuk mengurangi biaya pemeliharaan peralatan dan memperpanjang usia masa pakai peralatan.</span></span>
            </ol>
            <p>Dengan ke- 8 pilar tersebut memungkinkan perusahaan penerap lean mampu meningkatkan profitabiltas dan produktivitas perusahaan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ingin-bisnis-anda-berjalan-lancar-kaizen-kuncinya',
              'type' => 'article',
              'title' => 'Ingin Bisnis Anda Berjalan Lancar? Kaizen Kuncinya!',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/image-7.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'March 15, 2023',
              'content' => "
            
            <p>Kaizen merupakan istilah yang berasal dari bahasa Jepang yang memiliki arti sebagai perbaikan kecil yang dilakukan secara terus menerus agar menjadi perubahan besar. </p>
            <p>Kaizen memiliki filsafat untuk mengupayakan perbaikan dari waktu ke waktu sehingga akan menjadi lebih baik pada kemudian hari.</p>
            <p>Dalam bisnis kaizen dikatakan sebagai sebuah strategi yang dimana karyawan dalam seluruh tingkatan bekerja sama agar bisa mencapai peningkatan secara bertahap. </p>
            <p>Karena untuk menerapkan metode kaizen pada bisnis bukanlah sesuatu yang mudah karna harus berfokus pada perbaikan perbaikan kecil sampai menengah.</p>
            <p>Penerapan kaizen pada bisnis tentunya akan menghasilkan manfaat seperti berikut :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Sistem manajemen perusahaan yang meningkat</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Lingkungan pekerjaan yang lebih efisien</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Biaya, waktu dan sumber daya yang lebih efisien</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kualitas kinerja karyawan serta kualitas produk yang menigkat</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Terjalinnya komunikasi atara karyawan dengan perusahaan</span></span>
            
            <p>Dengan keuntungan yang tersebut maka sektor bisnis tentunya dapat memanfaatkannya dengan tujuan sebagai berikut :         </p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Berkurangnya biaya</span></span>
            
            <p>Pengurangan biaya tentunya bisa dilakukan dengan cara menghilangkan pemborosan pada area kerja, karena dengan melakukan ininmaka penghematan tersebut dapat dirasakan secara terus menerus. </p>
            <p>Salah satu caranya adalah dengan menyusun prosedur sehingga akan diketahui biaya apa saja yang dapat dikurangi, sehingga dengan begitu akan mengetahui secara pasti pengeluaran dalam bisnis.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kualitas yang meningkat</span></span>
            
            <p>Menerapkan metode kaizen tentunya dapat meningkatkan kualitas bisnis, peningkatan yang dimaksud dimulai dari peningkatan kualitas karyawan sampai kepada alat yang dimiliki. Dengan begitu maka kualitas barang maupun bisnis akan meningkan seiring berjalannya waktu.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Sumber daya yang lebih optimal</span></span>
            
            <p>Dengan metode kaizen maka sumber daya dapat dimanfaatkan dengan optimal karena kaizen dapat memperbaiki dengan efisien mengenai penggunaan sumber daya. </p>
            <p>Dengan cara memprioritaskan kebutuhan dengan baik. Melakukan penerapan tersebut dengan benar maka dapat menghilangkan kerja keras dan lebih dapat mengoptimalkan pekerjaan secara terus menerus.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '5-fungsi-utama-iot-untuk-perusahaan',
              'type' => 'article',
              'title' => '5 Fungsi Utama IoT Untuk Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/image-6.png',
              'tags' => '',
              'date' => 'March 14, 2023',
              'content' => "
            
            <p>IoT atau Internet of Thing merupakan sebuah teknologi yang memungkinkan benda benda dapat terhubung dengan jaringan internet. Cara kerjanya setiap benda yang terhubung dengan internet akan dapat diakses kapan saja dan dimana saja.</p>
            <p>Kemudahan tersebut akhirnya menjadikan IoT sebagai salah satu komponen penting dalam menjalankan perusahaan. </p>
            <p>Karena manfaatnya yang dapat meminimalisir effort kerja, efisiensi waktu serta meningkatkan keamanan sistem kerja.</p>
            <p>IoT tersendiri memiliki beberapa unsur seperti :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Sensor yang berfungsi mengumpulkan data berupa suhu, cahaya, suara dan waktu dari sekirat benda tersebut berada,</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Koneksi yang bertugas mengirimkan data ataupun informasi dari sensor ke pengolahan data,</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengolahan data yang akan mengolah data dan berpacu pada beroperasinya suatu perangkat,</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Serta user interface yang berperan sebagai controller yang berfungsi memberikan informasi pada user.</span></span>
            
            <p>Dengan kehebatannya maka IoT dapat dimanfaatkan pada perusahaan, berikut fungsi utama IoT bagi perusahaan:</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningkatkan nilai perusahaan</span></span>
            
            <p>Pelayanan yang baik tentunya akan menimbulkan rasa puas pada pelanggan, sehingga pelanggan menjadi lebih tertarik dengan perusahaan kita dan tentunya dengan begitu nilai perusahaan akan naik dengan sendirinya. </p>
            <p>Customer rela untuk membayar lebih demi sebuah efisiensi dan penghematan waktu, sehingga hal ini juga berdampak pada pendapatan perusahaan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi yang meningkat</span></span>
            
            <p>Menggunakan data yang terkumpul dari IoT tentunya akan menghasilkan sebuah efisiensi untuk perusahaan, contohnya jika perusahaan bergerak di logistic maka dengan menggunakan IoT dapat melacak keberadaan barang tersebut secara realtime sehingga tidak perlu membuang waktu.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Media penawaran</span></span>
            
            <p>Menggunakan media penawaran berbasis IoT tentunya akan sangat memudahkan perusahaan, sehingga pelanggan dapat melihat dan membeli secara langsung melalui media tersebut yang di dalamnya terdapat produk dan informasi yang disediakan melalui IoT.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kemampuan pengambilan keputusan meningkat</span></span>
            
            <p>Dengan bantuan IoT maka data akan terkumpul dalam jumlah besar kemudian data tersebut tentunya dapat digunakan oleh perusahaan untuk dianalisa dan dipelajari sehingga dapat dijadikan alat untuk mengambil keputusan bahkan untuk memprediksi apa yang akan terjadi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Hubungan baik dengan customer</span></span>
            
            <p>Sudah mulai banyak perusahaan yang menggunakan IoT untuk mengumpulkan preferensi dan perilaku dari pelanggan mereka. Dengan begitu perusahaan dapat mengetahui apa saja yang dibutuhkan pelanggan hingga apa saja yang mereka sukai.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-manfaat-rfid-pada-rantai-pasok-dan-logistik',
              'type' => 'article',
              'title' => '4 Manfaat RFID Pada Rantai Pasok dan Logistik',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/image-5.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'March 13, 2023',
              'content' => "
            
            <p>Teknologi RFID dapat merubah manajeman rantai pasok dan logistik dengan merubah cara barang dan material dapat dilacak sepanjang perjalanannya. </p>
            <p>Karena RFID tag dapat menyediakan solusi untuk menghemat biaya dan keefisienan untuk mengidentifikasi sebuah item.</p>
            <p>RFID adalah Radio Frequency Identification yang memiliki fungsi sebagai sebuah alat identifikasi yang menggunakan gelombang radio agar dapat mengambil data dari jarak jauh. </p>
            <p>Keunggulan yang dimiliki tersebut tentunya sangat menguntungkan dari pada menggunakan barcode karena dapat memindai sebuah barang dengan lebih cepat.</p>
            <p>Ada banyak keuntungan menggunakan RFID pada perusahaan salah satunya adalah meningkatnya keselamatan serta akuratisasi pengiriman barang. </p>
            <p>Menggunakan RFID dalam rantai pasok dan logistik tentunya akan banyak mendapatkan keuntungan seperti :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Berkurangnya biaya tenaga kerja</span></span>
            
            <p>Meningkatnya pelacakan dan visibalitas barang maka tentunya akan sangat mengurangi biaya tenaga kerja secara keseluruhan yang terkait dengan input data secara manual, menghitung stok secara manual, dan menjaga keamanan.  </p>
            <p>Dapat dikatakan bahawa setiap industri perlu menggunakan RFID karena banyak sekali hal yang hubungan dengan logistik maupun manajeman rantai pasok</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Terciptanya rak cerdas</span></span>
            
            <p>Rak cerdas dapat tercipta dengan bantuan RFID yang telah merubah cara pengecekan produk maupun inventaris yang dimilliki.</p>
            <p>Teknologi tersebut dengan canggih dapat memindai dan melacak barang, sehingga dapat dengan mudah mengetahui jumlah stok secara terperinci dan melalukan pengisian barang secara akurat.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningkatnya keamanan</span></span>
            
            <p>Keamanan merupakan hal yang perlu diperhatikan dengan menggunakan RFID tag maka keamanan tersebut dapat ditingkatkan dengan mudah. </p>
            <p>Dengan menyematkan chip RFID dalam item atau memudahkan untuk melacak produk tersebut sehingga dapat memastikan jika produk tersebut hilang atau dicuri. RFID juga dapat membuat barang tersebut aman dan selamat sampai tempat tujuan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Real-time update</span></span>
            
            <p>Real time serta visibilitas sebuah produk tentunya merupakan hal penting bagi sebuah perusahaan untuk mengelola rantai pasok agar efisien dan lebih efektif. </p>
            <p>Peran RFID diperlukan dalam hal ini, karena RFID dapat menampilkan data secara realtime seperti lokasi barang tersebut berada maupun estimasi barang tersebut akan sampai. Data yang didapatkan RFID akan terinput secara otomatis sehingga mengurangi kesalahan pada penghitungan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-langkah-tpm-pada-lini-produksi',
              'type' => 'article',
              'title' => '4 Langkah TPM Pada Lini Produksi',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/image-4.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'March 9, 2023',
              'content' => "
            
            <p>Sudah semakin banyak fasilitas dalam manufaktur yang mulai menerapkan metode lean, namun sangat disayangkan jika tidak melakukan pemeliharaan mesin maupun peralatan kerja. </p>
            <p>Karena kenyataannya pemeliharaan mesin dan peralatan kerja merupakan suatu hal yang perlu dilakukan karena keberhasilan sebuah produk tergantung dengan bagaimana mesin dan peralatannya. Maka dari iu penting sekali hal itu perlu dilakukan guna mencegah kerusakan yang lebih parah lagi.</p>
            <p>Kegiatan pemeliharaan tersebut tentunya perlu mendapat perhatian khusus karena jika tidak diperhatikan maka akan menjadi masalah baru karena jika terjadi kerusakan maka akan terjadi penumpukan sparepart digudang yang akan memakan tempat. </p>
            <p>Metode yang dapat diterapkan adalah metode TPM yang merupakan singkatan dari Total Productive Maintenance adalah sistem maupun metode yang digunakan untuk memelihara dan meningkatkan kualitas produksi melalui perawatan mesin dan peralatan kerja.</p>
            <p>Fungsi utama TPM adalah untuk mengetahui krusakan pada mesin sedini mungkin guna mencegah kerusakan yang lebih parah. Penerapan TPM tentunya perlu melalui beberapa langkah seperti :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengenalan program TPM</span></span>
            
            <p>Menciptakan lingkungan kerja yang dapat mendukung jalannya program TPM tentunya merupakan hal penting, kerana tanpa dukungan manajemen yang baik maka dapat mengganggu jalannya program TPM tersebut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pelatihan mengenai program TPM</span></span>
            
            <p>Pelatihan ini bertujuan agar semua karyawan dapat mengetahui mengenai TPM pada lini produksi guna berjalan lancarnya program TPM dan guna memberi pengetahuan lebih mengenai TPM dan lini produksi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pembentukan team pendukung</span></span>
            
            <p>Team tentunya berguna untuk memastikan berjalannnya TPM pada lini produksi, team biasanya terdiri dari orang orang yang berbeda dari setiap level organisasi. </p>
            <p>Nantinya team tersebutlah yang akan memastikan jalannya program TPM agar sesuai dengan rencana.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Tentukan target TPM</span></span>
            
            <p>Penentuan target dalam TPM tentunya merupakan hal yang penting, karena dengan menentukan target maka akan diketahui apa saja yang ingin dicapai dalam penerapan TPM tersebut. Target juga berfungsi agar program TPM difokuskan sesuai yang dibutuhkan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-keunggulan-inventory-management-system-pada-proses-produksi',
              'type' => 'article',
              'title' => '4 Keunggulan Inventory Management System Pada Proses Produksi',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/hihi.png',
              'tags' => 'industri 4.0',
              'date' => 'March 8, 2023',
              'content' => "
            
            <p>Para perusahaan yang bergerak di bidang produksi barang maupun jasa tentunya memerlukan inventory management yang baik. </p>
            <p>Dengan begitu maka hadirlah inventory management system untuk meningkatkan efisiensi alur produk yang ada sehingga perusahaan dapat meminimalisir resiko kerusakan barang serta pembengkakan biaya akibat penyimpanan yang terlalu lama.</p>
            <p>Inventory management merupakan sebuah proses pengelolaan dan pengontrolan barang serta jasa yang nantinya akan didistribusikan oleh bisnis yang dimiliki. </p>
            <p>Proses ini juga termasuk proses pencatatan dan administrasi stok barang yang dibutuhkan. Pada saat ini inventory management system sudah banyak digunakan dengan adanya teknologi yang modern.</p>
            <p>Dimulai dari sistem informasi yang sudah terintegrasi hingga perangkat canggih yang dapat menunjang proses inventory management system tersebut. </p>
            <p>Berikut 4 keunggulan inventory management system oada proses produksi :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengurangi pekerjaan dan human error</span></span>
            
            <p>Dengan menggunakan inventory manajemen system tentunya akan banyak membantu pekerjaan manusia, salah satunya adalah membantu mencatat dan menyimpan data persediaan. </p>
            <p>Hal tersebut jelas sangat membantu dibandingkan dengan pencatatan persediaan secara manual, dengan inventory juga dapat dipastikan perhitungan dalam jumlah yang benar sehingga dapat mengurangi human error.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mencegah kekurangan persediaan</span></span>
            
            <p>Stok dalam gudang tentunya harus selalu tekendali sehingga perlu dilakukan pencatatan stok selama beberapa minggu, bulan sampai dengan tahun. </p>
            <p>Dengan data tersebut maka akan diketahui stok yang dibutuhkan sehingga tidak terjadi kekurangan stok pada saat produksi berlangsung.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Membuat laporan stakeholder</span></span>
            
            <p>Inventory management system merupakan sebuah sistem yang bersifat memudahkan semua kegiatan yang mencakup di dalamnya. </p>
            <p>Beberapa kegiatan seperti manajemen stok, relasi dengan supplier hingga monitoring gudang dapat dilakukan. Kelebihan lainnya adalah dapat membuat laporan stakeholder secara otomatis sehigga menghemat waktu serta pekerjaan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Memantau pergerakan pasokan</span></span>
            
            <p>Keuntungan selanjutnya dalah terciptanya aplikasi untuk mengetahui keberadaan persediaan sehigga tidak perlu bertanya tanya mengenai keberadaan persediaan tersebut. </p>
            <p>Ketersediaan stok juga merupakan hal yang penting bagi proses produksi karena jika persediaan tersebit terlambat maka akan menganggu proses produksi dan tentunya menghambat proses produksi secara keseluruhan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-manfaat-big-data-di-era-industry-4-0',
              'type' => 'article',
              'title' => '3 Manfaat Big Data di Era Industry 4.0',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/image-3.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'March 7, 2023',
              'content' => "
            
            <p>Big Data tentunya membawa perubahan pada bidang IT bahkan Big Data sudah memasuki sektor industri, karena pada industri Big Data berperan sebagai faktor pendorong sebuah perusahaan.</p>
            <p>Konsep dari sebuah Big Data bukanlah merupakan hal yang rumit. Big Data tersendiri merupakan kumpulan data yang jumlahnya besar dan terus menerus bertambah dan jumlahnya semakin besar.</p>
            <p>Big data telah menjadi faktor penting yang melandasi berbagai terobosan teknologi tersebut yang mampu merubah banyak hal dalam kehidupan masyarakat, dan juga telah mendorong munculnya model-model bisnis baru yang jauh lebih efisien dan inovatif.</p>
            <p>Big Data tentunya memiliki volume yang besar, tetapi bukan jumlahnya yang penting tetapi olahan dengan data tersebut yang penting. Dengan begitu tentunya Big Data memiliki banyak sekali keuntungan seperti :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningkatkan kualitas layanan</span></span>
            
            <p>Big Data dapat mengumpulkan berbagai macam jenis informasi mengenai konsumen sehingga informasi tersebut dapat dijadikan panduan untuk meningkatkan kualitas. </p>
            <p>Informasi informasi yang didapatkan juga dapat dijadikan sebagai masukan untuk perusahaan sehingga kedepannya akan menghasilkan kualitas layanan yang lebih baik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Membuat strategi perusahaan lebih akurat</span></span>
            
            <p>Di dalam Big Data tentunya terdapat banyak sekali jenis data dari yang terstruktur, semi terstruktur dan tidak terstruktur. Dapat dikatakan demikian karena jumalah data yang besar sehingga menghasilkan informasi yang besar pula. </p>
            <p>Salah satu hal yang dilakukan dengan menggunakan Big Data guna membuat strategi yang lebih baik kedepannya. Tentunya strategi tersebut juga bertujuan untuk menciptakan kepuasan untuk para pelanggan kelak.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengetahui trend yang terjadi</span></span>
            
            <p>Informasi yang didapatkan mengenai pasar tentunya sangat berguna bagi perkembangan sebuah industri, hal ini dapat dikatakan karena dengan mengikuti perkembangan pasar ataupun tren maka akan menghasilkan produk yang disukai oleh para pelanggan. Dengan demikian pelanggan akan memiliki kesukaan terhadap produk yang dijual.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-langkah-implementasi-tpm-sederhana',
              'type' => 'article',
              'title' => '3 Langkah Implementasi TPM Sederhana',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/image-2.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'March 6, 2023',
              'content' => "
            
            <p>Total Productive Maintenance adalah suatu pendekatan perbaikan perusahaan secara berkelanjutan yang dimulai dari perubahan kecil yang dilakukan secara terus menerus agar menjadi perubahan yang lebih baik. </p>
            <p>TPM merupakan sebuah prosedur yang tepat dalam pengenalan aktivitas pemeliharaan dalam sebuah perusahaan yang melibatkan seluruh staf baik operasional maupun pemeliharaan yang digabungkan menjadi satu team.</p>
            <p>Team tersebut memiliki tugas untuk mengawasi jalannya TPM tersebut guna mengurangi pemborosan, minimalisasi downtime serta meningkatkan kualitas akhir sebuah produk. </p>
            <p>Aktivitas TPM difokuskan pada kegiatan menghilangkan enam kegagalan utama yaitu kegagalan perlengkapan produksi, waktu set up dan penyesuaian, waktu tunggu dan terhenti, kecepatan produksi berkurang, gagal dalam proses dan ouput berkurang</p>
            <p>Dalam penerapannya TPM memiliki beberapa langkah utama yang harus dilakukan, seperti :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Identifikasi area</span></span>
            
            <p>Untuk menciptakan metode TPM yang baik maka harus melibatkan seluruh karyawan yang ada dan karyawan yang dilibatkan adalah karyawan dari seluruh lapisan agar tercipta kekompakan dalam menjalankannya. </p>
            <p>Setelah itu team bekerja sama untuk membuat keepakatan mengenai mesin yang ingin diamati. Sesuai dengan tujuan utama TPM yaitu meminimalkan potensi resiko dengan mempersiapkan stok barang tambahan, atau memastikan downtime yang masih dapat ditoleransi</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kembalikan mesin pada kondisi prima</span></span>
            
            <p>Saat melalukan metode TPM ada baiknya untuk mengambil foto keadaan mesin sebelum menggunakian metode TPM dan sesudah menggunakan metode TPM. </p>
            <p>Dengan begitu maka akan didapatkan hasil yang jelas mengenai keberhasilan TPM tersebut. Salah satu caranya adalah dengan membersihkan sisa bahan baku maupun alat maupun komponen lainnya yang sudah tidak digunakan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mulai menghitung OEE</span></span>
            
            <p>Sebagian besar mesin biasanya mengalami kerugian akibat downtime, maka dengan begitu disarankan untuk membuat kategori bagi setiap downtime. Sehingga pada saat downtime terjadi dapat dengan segera mendapatkan gambaran mengenai cara mengatasinya. </p>
            <p>Dengan begitu maka akan tercipta opsi opsi aman yang dapat dipilih saat mesin tersebut mengalami downtime. Data yang digunakan tersebut harus dikumpulkan paling cepat 2 minggu untuk mengidentifikasi penyebab downtime yang sering terjadi secara berulang. </p>
            <p>Dari data tersebut maka dapat ditinjau untuk memastikan keakuratannya dan guna memastikan penyebab downtime yang sebenarnya telah diketahui.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'peran-penting-big-data-dalam-kasus-viral-penganiayaan-david',
              'type' => 'article',
              'title' => 'Peran Penting Big Data Dalam Kasus Viral penganiayaan David',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/whatsapp-image-2023-03-03-at-10.57.16-1.jpeg',
              'tags' => 'big data,industri 4.0',
              'date' => 'March 3, 2023',
              'content' => "
            
            <p>Kasus yang ramai diperbincangkan akhir akhir ini tentunya mendapatkan banyak sekali perhatian maupun sorotan dari masyarakat, dalam kasus ini diketahui bahwa telah terjadi penganiayaan yang cukup parah, dapat dilihat dari sisi lain bahwa big data memiliki peranan penting dalam kasus tersebut, berikut penjelasannya.</p>
            <p>Pertama, big data dapat membantu penyidik dan penegak hukum dalam mengumpulkan, memproses, dan menganalisis data yang berkaitan dengan kasus penganiayaan.</p>
            <p> Misalnya, data yang diperoleh dari telepon genggam, perangkat IoT (Internet of Things), CCTV, atau media sosial dapat diintegrasikan dan dianalisis secara terpadu untuk mencari petunjuk dan bukti yang relevan dengan kasus tersebut. </p>
            <p>Terlebih lagi dalam kasus ini terdapat sebuah video yang diambil pada saat penganiayaan ini terjadi, dalam video tersebut menunjukan bagaimana pelaku melakuka penganiayaan terhadap korban sehingga dengan begitu maka bukti nyata sudah tersedia.</p>
            <p>Kedua, big data juga dapat digunakan untuk melakukan analisis pola dan prediksi terhadap kasus penganiayaan. </p>
            <p>Dengan memanfaatkan data mining, big data dapat membantu mengidentifikasi pola atau tren yang terkait dengan kasus penganiayaan, seperti lokasi, waktu, jenis pelaku, atau motif yang melatar belakanggi serangan tersebut dapat terjadi. </p>
            <p>Informasi ini dapat digunakan untuk membantu penegak hukum mengambil tindakan preventif atau proaktif untuk mencegah kasus penganiayaan di masa depan.</p>
            <p>Meskipun big data dapat memberikan manfaat dalam investigasi dan penanganan kasus penganiayaan, perlu diingat bahwa penggunaannya juga perlu memperhatikan aspek privasi dan keamanan data. </p>
            <p>Data pribadi korban atau saksi harus dilindungi dengan hati-hati agar tidak disalahgunakan atau digunakan secara tidak etis. Karena dalam kasus ini korban masih dibawah umur dan tentunya sangat memerlukan pengawasan lebih lanjut.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-gaya-penerapan-iot-pada-industri',
              'type' => 'article',
              'title' => '3 Gaya Penerapan IoT Pada Industri',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/image-1.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'March 2, 2023',
              'content' => "
            
            <p>Berkembangnya teknologi saat ini sangat cepat dari waktu ke waktu, sekarang peralatan atau mesin telah dilengkapi dengan kecanggihan berbagai macam teknologi yang dapat memudahkan pekerjaan sehari hari.</p>
            <p>Salah satu teknologi tersebut adalah IoT, IoT tersendiri memiliki kepanjangan dari Internet of Things yang berarti sebuah teknologi yang menghubungkan apapun ke internet dengan tujuan dapat mentransfer data melalui jaringan tanpa memerlukan interaksi dari manusia ke manusia atau dari manusia ke perangkat komputer.</p>
            <p>Dengan perkembangnya yang pesat maka IoT dapat menciptakan dunia yang lebih canggih maka teknologi tersebut memiliki peran penting dalam industri dengan memberikan efisiensi dan ketersediaan sumber daya yang tak terbayangkan.</p>
            <p>Dalam bidang industri, teknologi IoT dapat diartikan sebagai jaringan perangkat, mesin, dan sensor yang dapat terhubung satu sama lain dan ke Internet, memiliki tujuan untuk mengumpulkan data dan menganalisisnya. Dengan kecanggihan tersebut maka banyak sekali industri yang mulai memanfaatkan IoT seperti :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Manufaktur</span></span>
            
            <p>Dalam manufaktur peran IoT digunakan sebagai pemantau pada lini produksi untuk melakukan pemeliharaan pada peralatan saat sensor mendeteksi kegagalan. Dengan adanya bantuan peringatan maka pekerja dapat mengetahui secara cepat jika ada kesalahan dalam lini produksi sehingga dapat segera diatasi sebelum terjadi kerusakan yang parah lagi. </p>
            <p>Dengan begitu maka memungkinkan perusahaan manufaktur menghemat biaya pemeliharaan serta memiliki waktu yang lebih efisien dan meningkatkan manajemen kerja yang lebih aman dan sehat.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Otomotif</span></span>
            
            <p>Industri otomotif juga salah satu industri yang memanfaatkan teknologi IoT, selain memanfaatkan pada lini produksi, dengan sensor maka akan dapat mendeteksi kegagalan peralatan pada kendaraan yang ada dan dapat memberikan peringatan kepada pengemudi. </p>
            <p>Hasil informasi yang dikumpulkan dapat memberikan informasi lebih lanjut bagaimana cara menjaga mobil tetap terjaga kondisinya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Transportasi dan Logistik</span></span>
            
            <p>Dalam transportasi dan logistik IoT diterapkan pada armada yang membawa inventaris, dengan begitu maka ketersediaan kendaraan atau pengemudi dapat dialihkan jika ada sesuatu yang terjadi dengan cara memasang sensor pada inventaris guna melacak keberadaan barang dan memantau suhu. </p>
            <p>Pengiriman inventaris berupa makanan ataupun minuman akan sangat diuntungkan karena akan mendapatkan peringatan jika suhu naik maupun turun yang dapat merusak produk.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-peran-iot-dalam-berbagai-industri',
              'type' => 'article',
              'title' => '3 Peran IoT Dalam Berbagai Industri',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/03/image.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'March 1, 2023',
              'content' => "
            
            <p>Pada era bisnis modern saat ini, data merupakan hal yang sangat penting untuk berjalannya alur suatu perusahaan, karena dapat dipastikan data memiliki manfaat penting bagi sebuah bisnis. Salah satu yang dibutuhkan dalam bisnis adalah IoT atau Internet of Things ialah sebuah konsep dimana sebuah objek tertentu yang memiliki kemampuan untuk mengirim data melalui jaringan dan tanpa adanya interaksi dari manusia.</p>
            <p>IoT memiliki tujuan memperluas manfaat dari sebuah konektivitas internet yang terhubung secara terus menerus. Dengan begitu maka IoT telah membawa kepada sebuah zaman dimana semua serba terkoneksi secara otomatis, IoT tentunya juga telah memberikan transformasi pada berbagai industri untuk menjalankan bisnisnya.</p>
            <p>Berkat perkembangan IoT yang pesat maka sebagian besar teknologi di dunia telah berubah menjadi serba digital, dengan tujuan membantu manusia untuk memudahkan segala pekerjannya. Sekarang hampir seluruh aspek bisnis telah dipengaruhi oleh perubahan digital dan IoT tentunya sangat membantu dalam efisiesi bisnis. </p>
            <p>Berikut 3 peranan IoT dalam berbagai industri :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>IoT pada industri manufaktur</span></span>
            
            <p>Peranan IoT pada manufaktur adalah untuk membuat manufaktur menjadi lebih cerdas atau biasa dikenal dengan smart manufacturing, pada industri ini mesin memiliki peranan penting dalam menciptakan sebuah produk. IoT dapat membawa perubahan karna perusahaan dapat memonitor setiap operasi dalam pembuatan produk, memberikan visibilitas dan keamanan aset serta memastikan kinerja mesin maupun perangkat lebih optimal lagi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>IoT pada industri transportasi</span></span>
            
            <p>Pada industri transportasi IoT berperan sebagai sebuah jaringan yang dilengkapi oleh sensor untuk mengumpulkan maupun mengirimkan data. Contohmya adalah sistem tracking berbasis IoT yang dapat mencatat data terkait perilaku supir saat berkendara, berapa lama waktu kendaraan berhenti, tingkatan pada bahan bakar serta temperatur. Dengan implementasi IoT maka perusahaan transportasi dapat menjalankan bisnisnya dengan lebih efisien.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>IoT pada industri logistik</span></span>
            
            <p>Mulai dari supply chain hingga unit kendaraan, menajeman perusahaan tentunya membutuhkan monitoring untuk beberapa aktivitas tersebut. Beberapa aktivitas tersebut biasanya menjadi pemicu maupun penghambat satu atau lebih proses logistik yang akhirnya berujung pada keterlambatan atau kerusakan produk. Maka dari itu dibutuhkan lah IoT agar seluruh proses tersebut menjadi lebih efisien dan menghemat waktu yang diperlukan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'rfid-pengganti-barcode-di-masa-depan-berikut-penjelasannya',
              'type' => 'article',
              'title' => 'RFID Pengganti Barcode di Masa Depan? Berikut Penjelasannya',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/02/untitled-design-9.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'February 23, 2023',
              'content' => "
            
            <p>RFID digunakan untuk menyimpan data suatu barang dengan begitu informasi mengenai barang tersebut sehingga dapat tersimpan dan dapat terbaca jika diperlukan. Jika dilihat dari fungsinya RFID tentunya memiliki potensi yang cukup luar biasa dalam dunia teknologi serta banyak hal yang bisa dimanfaatkan melalui RFID.</p>
            <p>Dalam penjelasannya tersenidri RFID adalah Radio Frequency Identification ialah sebua metode identifikasi yang dapat menyimpan ataupun mendeteksi data dari jarak jauh. Dengan begitu maka dapat dikatakan bahwa RFID tidak memerlukan kontak secara langsung dalam mendeteksi sebuah data.</p>
            <p> RFID tersebut dapat digunakan untuk mendeteksi barang pada perusahaan sehingga dalam melakukan transaksi akan menjadi lebih cepat dan singkat. Disamping untuk mempercepat transaksi yang dilakukan oleh konsumen.</p>
            <p>RFID itu sendiri masih banyak memiliki manfaat untuk sisi perusahaan, jika RFID ditempatkan pada masing-masing rak, maka akan secara mudah akan dapat membaca persediaan barang di rak, sehingga jika barang kosong akan dapat dengan segera dilakukan order ke gudang ataupun ke supplier. </p>
            <p>selain itu juga memiliki manfaat lain salah satunya jika barang datang dari supplier maka akan sangat mudah untuk mengidentifikasi barang tersebut, jumlahnya, jenisnya dan sebagainya. hal ini akan sangat membantu dalam proses bisnis yang ada.</p>
            <p>RFID tag sering sekali dianggap sebagai pengganti barcode. Hal tersebut disebabkan karena RFID memiliki berbagai macam keuntungan dibandingkan dengan penggunaan dari barcode. </p>
            <p>RFID mungkin tidak dapat seluruhnya mengganti teknologi dari barcode, karenakan faktor harga, tetapi dalam beberapa kasus nantinya penggunaan RFID akan sangat berguna. </p>
            <p>Keunikan yang dimilikinya adalah bisa dilacak dari suatu lokasi ke lokasi yang lainnya. Hal ini dapat membantu perusahaan untuk melawan aksi pencurian dan bentuk produk yang lainnya. </p>
            <p>Dengan begitu maka tidak akan menutup kemungkinan bawah di masa depan RFID dapat mengantikan penggunaan barcode karena keefektifannya.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'manfaat-dari-penerapan-kaizen-pada-proses-produksi',
              'type' => 'article',
              'title' => 'Manfaat Dari Penerapan Kaizen Pada Proses Produksi',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/02/untitled-design-8.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'February 22, 2023',
              'content' => "
            
            <p>Kaizen merupakan Bahasa Jepang yang berasal dari kata “Kai” yang memiliki arti perbaikan dan “Zen” yang artinya baik. Sehingga kaizen dapat diartikan sebagai perbaikan yang dilakukan secara terus menerus. </p>
            <p>Kaizen adalah perbaikan hal kecil yang dilakukan secara terus menerus guna mendapatkan hasil yang baik. Hal tersebut dapat dimulai dengan menyadari ada yang tidak beres dengan begitu maka akan dilakukan perbaikan.</p>
            <p>Penerapan kaizen tentunya melibatkan seluruh pekerja tanpa terkecuali mulai dari manajemen tingkat bawah sampai manajemen tingkat atas dengan tujuan memperbaiki mutu produk maupun layanan secara terus menerus.</p>
            <p>Penerapan kaizen khususnya pada proses produksi tentunya diharapkan untuk menimbulkan berbagai macam manfaat seperti :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menghasilkan produk sesuai dengan jadwalnya</span></span>
            
            <p>Sistem kaizen pada penerapannnya mampu menghasilkan hasil produksi yang sesuai dengan pesanan pelanggan, sehingga dengan demikian produk yang dihasilkan akan sesuai dengan jadwal yang telah ditetapkan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengerjakan produk lebih cepat</span></span>
            
            <p>Pada implementasinya dalam proses pengiriman bahan baku keperusahaann ataupun ke pelanggan dapat dilakukan lebih cepat karena hanya berfokus kepada hal yang penting dan dibutuhkan oleh pelanggan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menghindari pemborosan</span></span>
            
            <p>Perbaikan kecil yang dilakukan secara terus menerus atau konsisten tentunya akan menghilangkan pemborosan biaya dan waktu yang biasanya harus dialokasikan oleh perusahaan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kualitas produk yang lebih baik</span></span>
            
            <p>Salah satu sasaran penerapan kaizen adalah untuk memperbaiki serta meningkatkan kualitas produk, sehingga perusahaan perlu memperhatikan kualitas dan nilai tambah produk ataupun jasa dari sudut pandang para konsumen.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pekerja yang tanggap</span></span>
            
            <p>Pada penerapan kaizen karyawan diharuskan lebih tanggap karena harus menguasai bidang maupun lintas disiplin dalam perusahaan. Sehingga pada saat produksi dimulai para pekerja dapat dengan tanggap mengerjakan pekerjaannya untuk hasil yang lebih baik.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'keunggulan-rfid-di-production-line-yang-harus-kamu-ketahui',
              'type' => 'article',
              'title' => 'Keunggulan RFID di Production Line Yang Harus Kamu Ketahui',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/02/untitled-design-7.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'February 21, 2023',
              'content' => "
            
            <p>Perkembangan teknologi informasi yang semakin pesat tentunya menungkinkan adanya sebuah peningkatan kualitas pada pelayanan dengan memanfaatkan teknologi tersebut. </p>
            <p>Penggunaan teknologi tersebut bermanfaat untuk meningkatkan produktivitas dimana teknologi informasi tersebut berkembang secara pesat di seluruh dunia untuk memenuhi kebutuhan yang semakin meningkat setiap saat.</p>
            <p>Dalam sebuah proses produksi adanya production line tentunya merupakan sebuah hal yang sangat penting. Seiring perkembangan teknologi, berbagai fasilitas telah dikembangkan untuk memberikan kemudahan akses kepada penggunanya.<strong> </strong></p>
            <p>Dengan menggunakan sistem RFID pada production line berfungsi sebagai pengumpul data secara real time, memeriksa KPI para pekerja melacak serta mengkontrol bahan baku dengan tujuan agar proses produksi dapat berjalan dengan baik.</p>
            <p>RFID adalah <em>Radio Frequency Identification</em><em> </em>teknologi yang berkembang pesat seiring perkembangan penggunaannya dalam berbagai bidang. Sesuai dengan namanya, RFID menggunakan gelombang dengan frekuensi radio dalam proses transmisi datanya.</p>
            <p> Keunggulan RFID pada production line adalah sebagai berikut :</p>
            <ol type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menghasilkan data real time, data yang dihasilkan pada setiap produksi tentunya adalah data real time yang dapat digunakan untuk mengetahui pergerakan dalam proses tersebut.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Proses dapat dengan cepat dan akurat mentransfer proses produksi ke setiap lini produksi sehingga dapat mendukung proses produksi yang disesuaikan dan meningkatkan efisiensi produksi.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mewujudkan proses dan visualisasi stok serta keakuratan dalam pengiriman, dengan begitu maka tidak akan membuat para pelanggan menunggu dan tentunya membuat pelanggan lebih puas atas kualitas serta pelayanan.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningkatkan keakuratan produk maupun perusahaan sehingga dapat meningkatkan daya saing perusahaan.</span></span>
            </ol>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'kemampuan-tpm-untuk-peningkatan-dan-perawatan-mesin',
              'type' => 'article',
              'title' => 'Kemampuan TPM Untuk Peningkatan dan Perawatan Mesin',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/02/untitled-design-6.png',
              'tags' => 'industri 4.0,total productive maintenance',
              'date' => 'February 20, 2023',
              'content' => "
            
            <p>Sebagai bagian dari sebuah Lean Manufacturing, TPM atau Total Productive Maintenance adalah suatu metode perbaikan yang dikembangkan untuk meningkatkan produktivitas di area kerja, dengan cara meningkatkan kemampuan dari operator untuk merawat mesin secara mandiri. </p>
            <p>Keuntungan TPM antara lain dapat membantu memelihara pabrik serta mesin agar selama dalam prosuksi dalam kondisi yang prima karena dengan begitu operator dapat melakukan perbaikan kecil untuk mencegah permasalahan yang lebih serius lagi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>TPM untuk peningkatan output yang lebih berkualitas</span></span>
            
            <p>Sudah banyak sekali fasilitas manufaktur yang menerapkan metode lean namun sayangnya kebanyakan dari mereka melupakan pentingnya pemeliharaan mesin serta peralatan penting lainnya. </p>
            <p>Padahal kenyatannya kinerja mesin sangat menentukan kualitas dan prosuktifitas dari sebuah manufaktur. Pada industry tingkat disiplin dan standar yang dimiliki harus tinggi dan tentunya harus dapat dipenuhi oleh seluruh pihak yang terlibat dalam sebuah ativitas produksi. </p>
            <p>Sehinnga prosedur tersebut harus dibuat dengan spesifik dan dalam setiap langkahnya harus didokumentasikan dengan teliti agar hasilnya tidak mengecewakan seperti terjadi kegagalan mesin dan lainnya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>TPM sebagai perawatan mesin</span></span>
            
            <p>Yang paling sering terjadi dalam perawatan adalah perawatan mesin yang hanya dilakukan ketika mesin tersebut rusak atau tidak berfungsi, kemudian mesin tersebut diperbaiki dengan tujuan dapat digunakan kembali. </p>
            <p>Sering kali para operator tidak menghiraukan pertanda awal dari kerusakan mesin sehingga terjadi kerusakan parah pada mesin tersebut. Dengan metode TPM diharapkan operator dapat menangani masalah umun yang sering terjadi dengan tujuan tidak terjadi kerusakan mesin yang makin parah. </p>
            <p>Dikarenakan prinsip TPM mengingatkan kepada operator untuk melakukan perawatan pada mesin yang butuh perawatan dini, sehingga masalah pada mesin dapat segera diatasi tanpa harus menunggu kerusakan tersebut menjadi lebih parah.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'intip-perkembangan-rfid-dari-masa-ke-masa',
              'type' => 'article',
              'title' => 'Intip Perkembangan RFID Dari Masa ke Masa',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/02/untitled-design-5.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'February 17, 2023',
              'content' => "
            
            <p>RFID atau Radio Frequency Identification adalah sebuah sistem identifikasi berbasis wireless yang memungkinkan pengambilan data tanpa harus bersentuhan seperti barcode atau magnetic card. alat ini menggunakan sistem radiasi elektromagnetik untuk mengirimkan kode teknologi yang berfungsi memudahkan pekerjaan manusia.</p>
            <p>Dalam perkembangannnya RFID memiliki 3 bagian penting yaitu :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Eksplorasi Awal Teknologi RFID</span></span>
            
            <p>Perkembangan Perang Dunia II membawa banyak sekali kemajuan dalam perkembangan komunikasi frekuensi radio serta radar, sehingga setelah perang tersebut para ilmuan melanjutkan kembali penelitian mereka di bidang tersebut serta mencari kegunaan sipil untuk itu.</p>
            <p>Pada tahun 1950an Militer AS mulai menerapkan bentuk awal teknologi RFID yang digunakan untuk mengidentifikasi  teman ataupun musuh. Tahun 1960an menjadi awal dari ledakan RFID yang datang kemudian pada tahun 1970an telah dilakukan banyak penelitian di bidang teori elektromagnetik seperti yang diterapkan pada RFID. </p>
            <p>Beberapa kegiatan komersil juga di mulai pada akhir tahun 1960an. Sensor dan checkpoint didirikan ubtuk menggambarkan pengawasan untuk aplikasi anti curian dan keamanan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Arus Utama RFID</span></span>
            
            <p>Pada tahun 1990an merupakan tahun yang penting bagi perkembangan RFID karena pada tahun tersebut RFID mulai memasukki arus utama bisnis dan teknologi. Pada pertengahanan dekade sitem tol RFID mulai dapat beroperasi secara langsung, yang berarti memberikan kemudahan bagi pengemudi untuk dapat melewati titik tol tanpa terhalang oleh penghalang. </p>
            <p>Penerapan sistem tol RFID menjadi tersebar luas di Amerika Serikat sebagai hasilnya. Agen tol regional mengambil teknologi satu langkah lebih jauh dan mulai mengintegrasikan sistem RFID mereka juga, memungkinkan pengemudi membayar banyak tol melalui akun yang sama. </p>
            <p>Sedangkan pada tahun 2000an RFID dicanangkan bahwa akan menggantikan fungsi dari barcode. Pada tahun 2007, jelas bahwa banyak aplikasi untuk RFID di sejumlah industri akan segera muncul. Di tahun-tahun mendatang, teknologi RFID akan semakin berkembang menjadi arus utama dan menjadi bagian lain dari kehidupan sehari-hari, seperti halnya televisi, PC, dan ponsel.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>RFID Masa Depan</span></span>
            
            <p>Penggunaan RFID pada perusahaan besar memberikan RFID masa depan yang menjanjikan, keberhasilan dalam menyebarkan teknologi RFID akan sangat bergantung pada penyelesaian sejumlah hambatan kemudian hambatan tersebut dapat ditanggani  sebelum terjadi hambatan lainnya. </p>
            <p>Mungkin dapat dikatakan bahwa teknologi RFID akan digunakan secara luas tetapi tentunya butuh waktu yang tidak sedikit. Selain itu, sementara potensi penggunaan teknologi RFID mungkin tidak terbatas, mungkin tidak pernah mencapai tingkat penerimaan yang diharapkan atau pengiriman potensi ekonomi penuhnya karena masalah privasi dan etika yang kemungkinan akan dilakukan perundingan nantinya. </p>
            <p>Keberhasilan RFID dalam menyebarkan teknologi tentunya akan sangat mendapat banyak hambatan baru dalam perkembangannya di masa depan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ini-dia-manfaat-hadirnya-big-data-untuk-perkembangan-bisnis',
              'type' => 'article',
              'title' => 'Ini Dia Manfaat Hadirnya Big data Untuk Perkembangan Bisnis',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/02/untitled-design-4.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'February 16, 2023',
              'content' => "
            
            <p>Data tentunya merupakan sesuatu yang penting dalam memahami ketertarikan dan perilaku konsumen dengan tujuan memperbaiki performa bisnis. Salah satu jenis data yang paling sering digunakan ialah big data, dimana data yang berisi kombinasi dari semua proses dan alat yang berhubungan dengan kegunaan dan pengelolaan sehingga menjadi kumpulan data yang besar. </p>
            <p>Big data tersendiri bukanlah tentang berapa besar data yang dimiliki tetapi penggumpulan data secara tepat maupun signifikan sehingga hasil dari pengelolaan data tersebut dapat dijadikan referensi maupun bahan acuan untuk keputusan bisnis yang sedang dijalani.</p>
            <p>Big Data adalah istilah yang digunakan untuk mengartikan kumpulan data yang lebih besar, kompleks dan berasal dari berbagai macam sumber. Terdiri dari data terstruktur, data semi terstruktur dan data tidak terstruktur. Dalam perusahaan dapat menggunakan Big Data dengan tujuan untuk menghasilkan manfaat sebagai berikut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Data Sharing</span></span>
            
            <p>Saat sebuah bisnis berkembang maka produk tentunya harus diperhatikan untuk meningkatkan kualitas, dengan adanya data sharing maka proses inovasi bisa lebih berjalan dengan cepat dengan cara menghubungkan bisnis pada kumpulan data yang dibutuhkan untuk menghasilkan wawasan serta inovasi baru.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengembangkan Inovasi</span></span>
            
            <p>Big Data tentunya dapat membantu berinovasi dengan cara mempelajari hubungan antara manusia dengan proses hingga pada akhirnya dapat menentukan cara lain untuk menggunakan pengetahuan tersebut. </p>
            <p>Dengan menggunakan Big Data maka kita dapat mengetahui aktivitas konsumen dalam menggunakan prroduk tersebut, sehingga data tersebut digunakan untuk mengembangkan inovasi baru yang bertujuan dapat memberikan kesan yang baik bagi para pelanggan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menganalisis Resiko</span></span>
            
            <p>Sebuah keberhasilan ataupun kegagalan bisnis bukanlah sebuah tolak ukur untuk mengambil langkah baru. Hasil analisis Big Data yaitu analitik dapat memungkinkan pelaku bisnis untuk menganalisis sosial media maupun website dan tentunya dapat mengetahui apa saja resiko yang didapatkan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'bingung-tingkatkan-rantai-pasok-dengan-rfid-begini-caranya',
              'type' => 'article',
              'title' => 'Bingung Tingkatkan Rantai Pasok Dengan RFID? Begini Caranya!',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/02/untitled-design-3.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'February 15, 2023',
              'content' => "
            
            <p>Kemajuan teknologi tentunya memberikan banyak sekali manfaat salah satunya adalah untuk meningkatkan peforma perusahaan manufaktur dengan menggunakan RFID. RFID atau Radio Frecuency Identification adalah sebuah teknologi yang digunakan untuk melakukan identifikasi dan pengambilan data dengan menggunakan magnetic card. </p>
            <p>Teknologi ini bekerja manggunakan gelombang radio yang memiliki beberapa fungsi untuk mengecek objek atau barang serta menyimpan informasi tentang objek tersebut. Tentunya teknologi RFID dapat memiliki fungsi yang berbeda dalam setiap industrinya.</p>
            <p>Dalam sebuah industri produk harus dicek serta dihitung sudah berapa kali melewati sebuah proses manufaktur seperti tahap produksi, pembersihan dan pengemasan produk. Jika perusahaan tersebut belum menggunakan teknologi RFID maka tentunya akan sangat memakan waktu untuk menghitung produk tersebut secara berkali kali. </p>
            <p>Keuntunggan lain RFID dalam meningkatkan rantai pasok adalah karna RFID berbeda dengan barcode, RFID tidak perlu memindai barang dibawah scanner untuk mengidentifikasi barang tersebut. Sehingga akan sangat menghemat waktu serta biaya.</p>
            <p>RFID juga dapat memberikan tanda jika stok barang telah habis maupun kadaluarsa, sehingga dengan begitu maka akan memudahkan proses produksi dan tentunya menghasilkan produk dengan kualitas yang lebih baik. Penggunaan teknologi RFID memang sangat memudahkan dalam setiap bidang industri khususnya industri manufaktur, karena proses pengecekan barang menjadi lebih cepat dan praktis. </p>
            <p>Penggunaan RFID juga dapat memberikan keuntungan dalam hal perbaikan dan pemeliharaan mesin serta perlatan karena para produsen akan memiliki data penting terkait mesin yang perlu dilakukan perbaikan dan kapan perbaikan tersebut dilakukan. Informasi tersebut tentunya sangat membantu dalam perencanaan jadwal pemeliharaan mesin selanjutnya.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '5-keuntungan-menggunakan-internet-of-things-pada-bisnis',
              'type' => 'article',
              'title' => '5 Keuntungan Menggunakan Internet of Things Pada Bisnis',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/02/untitled-design-2.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'February 14, 2023',
              'content' => "
            
            <p>Perkembangan zaman yang semakin pesat memungkinkan manusia akan merasakan banyak sekali kemudahan dalam menjalankan pekerjaannya. Salah staunya adalah dengan kemunculan IoT yang dapat mengkontrol maupun mengaktifkan peralatan dari jarak yang jauh hanya dengan menggunakan media internet. </p>
            <p>Perkembangan Internet of Things tentunya sudah sangat panjang dan sudah dimanfaatkan pada banyak bidang bisnis guna mendapatkan kemudahan serta keuntungan pada penggunaannya. IoT atau Internet of Things adalah sebuah konsep yang menghubungkan barang maupun benda ke internet yang bertujuan untuk memudahkan pekerjaan manusia. </p>
            <p>Melalui teknologi yang saling terhubung dan memanfaatkan internet maka proses pengumpulan dan analisis data dapat dilakukan secara otomatis dan tentunya sesuai perintah. Selain itu IoT dapat digunakan untuk mengumpulkan data berupa aktivitas pelannggan, kinerja mesin dan stok produk. </p>
            <p>Maka dengan menerapkan IoT pada bisnis akan mendapatkan keuntunggan sebagai berikut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menghemat Pengeluaran</span></span>
            
            <p>Dengan menerapkan IoT tentu dapat mempercepat aktivitas bisnis sehingga akan menghemat biaya produksi. Karena waktu yang berkurang maka dengan diimbangi dengan pemeliharaan yang terjadwal dan otomatis serta pasokan bahan baku yang tersedia maka akan menghasilkan tingkat produksi yang lebih tinggi dan keuntungan yang lebih besar.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Keselamatan Pekerja Terpastikan</span></span>
            
            <p>IoT dapat menjadwalkan perawatan secara otomatis dengan begitu maka hal tersebut dapat memastikan keselamatan operasional serta kepatuhan pekerja pada peraturan yang dibutuhkan selama sebuah proses prosuksi berlangsung.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penggunaan Sumber Daya dan Aset Tepat</span></span>
            
            <p>Internet of Things digunakan untuk membantu perusahaan menggunakan sumber daya serta aset yang dimiliki dengan setepat mungkin, karena IoT dapat melalukan penjadwalan dan pemantauan otomatis melalui sensor yang saling terhubung sehingga dengan begitu maka pengoptimalan sumber daya dapat dilakukan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Efisiensi Operasional</span></span>
            
            <p>Penggunaan IoT pada bisnis tentu saja dapat membuat bisnis menjadi leih efisien karena banyak operasi bisnis yang dilakukan menggunakan IoT. Dengan begitu maka waktu operasional yang digunakan akan semakin sedikit.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Produktivitas Bisnis Meningkat</span></span>
            
            <p>Meningkatnya produktivitas bisnis juga merupakan sebuah keuntungan yang didapatkan dalam penerapan IoT, karena tugas biasa dapat dilakukan secara otomatis dengan IoT sehingga tugas yang lebih kompleks dan memerlukan keterampilan dapat dilakukan secara lebih baik lagi.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'bagaimana-peran-internet-of-things-pada-industry-4-0-ini-penjelasannya',
              'type' => 'article',
              'title' => 'Bagaimana Peran Internet of Things pada Industry 4.0? Ini Penjelasannya',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/02/untitled-design-1-1.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'February 13, 2023',
              'content' => "
            
            <p>Kehadiran teknologi baru tentunya menghasilkan banyak sekali keuntungan bagi manusia, salah satunya adalah agar manusia tidak terlibat secara langsung dalam mengerjakan suatu pekerjaan.</p>
            <p>Internet of Things adalah konsep di mana suatu benda maupun objek diberikan berbagai macam teknologi – teknologi seperti sensor ataupun software dengan tujuan untuk berkomunikasi serta menghubungkan, dan bertukar data melalui perangkat lain yang terhubung ke internet. </p>
            <p>Internet of Things dan industry 4.0 merupakan sebuah konsep yang memiliki tujuan memperluas sebuah konektivitas internet antara benda benda disekitar dengan pekerjaan yang dilakukan melalu pertukaran data yang cepat. </p>
            <p>Kemudian semua sistem tersebut terhubung dalam jaringan dengan memanfaatkan teknologi yang sudah ada. Dengan kecanggihan tersebut maka tekonlogi IoT tersebut mampu membuat alat alat elektronik agar selalu dapat terhubung dengan internet. </p>
            <p>Mulai dari pendingin ruangan, komputer, printer, lampu, dan perlengkapan elektronik lainnya bisa secara otomatis berfungsi sesuai perintah yang diinput. </p>
            <p>Hampir setiap benda dilengkapi dengan penandaan barang, Dengan adanya penandaan tersebut, pergerakan benda dan manusia tersebut dapat dengan mudah dideteksi dan dilakukan pertukaran data dengan sistem lain untuk dianalisis.</p>
            <p>Bahkan kamera CCTV bisa saja mengenali wajah dan keberadaan seseorang pada meja kerjanya melalui suhu tubuh sehingga produktivitas pegawai tidak perlu diawasi oleh atasan atau supervisor. Tidak dapat dipungkiri bahwa IoT telah memberikan kemudahan bagi manusia dalam kehidupan sehari-hari, meskipun hal tersebut bisa juga menjadi tantangan bagi pihak lainnya.</p>
            <p>Dengan begitu maka dapat dikatakan bahwa peranan IoT dalam industry 4.0 sangatlah penting bagi perkembangan industry tersebut karena dengan IoT kita dapat dengan mudah menerima informasi berbagai macam bentuk dan dapat menghasilkan kemudahan lainnya. </p>
            <p>IoT berpengaruh dalam berbagai macam industri seperti manufaktur, logistik, kesehatan, tata kota, rumah, pertanian, bahkan industri otomotif. Fungsi utama IoT pada dasarnya sebagai data acquisition method. IoT bekerja mencari dan mengumpulkan berbagai data dari lapangan yang nantinya akan diolah menjadi data yang lebih bermanfaat.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-peranan-iot-pada-delivery-monitoring',
              'type' => 'article',
              'title' => '4 Peranan IoT Pada Delivery Monitoring',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/02/untitled-design.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'February 10, 2023',
              'content' => "
            
            <p>IoT atau Internet of Things adalah teknologi yang menghubungkan sesuatu ke internet dengan tujuan memudahkan konektivitas. Teknologi IoT merupakan sebuah terobosan baru yang telah diciptakan oleh manusia dari beberapa generasi sehingga setiap saat mengalami banyak perubahan dan penemuan hal yang baru. </p>
            <p>Disaat itulah, akses jaringan dan sumber daya berbasis nirkabel juga berkembang dan banyak menggantikan penggunaan jaringan kabel saat ini. IoT dapat membantu sebuah bisnis untuk memenuhi permintaan para pelanggan yang selalu meningkat, memungkinkan perusahaan menyediakan layanan yang lebih cepat, memiliki kualitas tinggi serta lebih personal. </p>
            <p>Bidang yang memanfaatkan kemajuan internet ialah bidang pengiriman, berikut 4 peranan IoT pada delivery monitoring :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Peningkatan pemeliharaan</span></span>
            
            <p>Teknologi IoT memungkinkan adanya konektivitas ke sebuah kendaraan yang bertujuan manajer dapat mengenali tanda peringatan dini dalam pemantauan armada. </p>
            <p>Penggunaan IoT seorang operator dapat memeriksa mesin, baterai hingga suhu dan komponen lainnya untuk mengetahui apakah ada tanda tanda yang mengisyaratkan bahwa adanya kerusakan dini pada mesin tersebut.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengotomatisan proses</span></span>
            
            <p>Penggunaan teknologi IoT pada bisnis juga dapat menungkinkan untuk memungkinkan mendapatkan otomatisasi proses secara rutin. Misalnya manajemen pengiriman dengan menggunakan IoT dapat memberikan notifikasi pengiriman. </p>
            <p>Seperti kemampuan melacak secara realtime dan dengan begitu operator dapat mengetahui penundaan yang tidak terduga pada saat pengiriman tersebut berlangsung.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Rute pengemudi lebih optimal</span></span>
            
            <p>Kemampuan melacak lokasi pengemudi dan menemukan potensi penundaan dapat memberikan tanda kepada pengemudi agar menemukan rute yang lebih baik dengan tujuan agar tidak terjadi keterlambatan dalam pengiriman. Dengan begitu maka akan membuat pengiriman menjadi lebih efisien dan meningkatkan kepuasa pelanggan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningkatnya visibilitas</span></span>
            
            <p>IoT tentunya dapat menungkinkan untuk mendapatkan wawasan yang tidak dapat ditemukan pada yang lainnya. Dengan IoT manajer dapat melihat apakah pengemudi berhenti secara disengaja atau secara berbahaya dan dapat mengetahui juga bahan bakar yang terbuang. Dengan begitu dapat membantu armada lebih efektif, aman dan tentunya lebih produktif.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'ini-fungsi-penting-rfid-dalam-warehouse-management-system',
              'type' => 'article',
              'title' => 'Ini Fungsi Penting RFID dalam Warehouse Management System',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/02/green-white-minimalist-modern-real-estate-presentation-1-1.png',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'February 9, 2023',
              'content' => "
            
            <p>RFID adalah Radio Frequency Identification ialah metode identifikasi dengan menggunakan transponder untuk menyimpan dan mengambil jarak dari jauh. Ada dua macam tag RFID yaitu jenis pasif dan aktif atau bertenaga baterai. Jenis yang pasif menggunakan tenaga gelombang elektromagnetik dari mesin pembaca untuk menyampaikan data yang disimpannya kepada mesin pembaca tersebut. </p>
            <p>Cara kerja teknologi ini memanfaatkan gelombang radio atau gelombang elektromagnetik. Saat ini teknologi RFID sudah banyak digunakan oleh berbagai macam industri, mulai sebagai alat pelacak kendaraan, tracking system logistic, hingga pengelolaan gudang yang dihubungkan dengan management system.</p>
            <p>Dalam manajemen system RFID memiliki fungsi sebagai berikut :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Melacak Stok Barang</span></span>
            
            <p>RFID dapat membantu untuk pendataan barang secara teratur, mulai dari stok barang datang, arus keluar masuk barang, jumlah barang hingga usia stok barang tentunya dapat terpantau secara detail. </p>
            <p>RFID dapat juga difungsikan sebagai alat pembantu untuk memaksimalkan penggunaan ruang penyimpanan pada gudang serta lokasi simpan dapat dilacak secara spesifik</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Update Stok Barang</span></span>
            
            <p>Penggunaan teknologi RFID tentunya dapat menghasilkan data yang dapat diintegrasikan dengan warehouse management system. Mulai dari data dalam tahap antrian, barang masuk dan barang keluar. Dengan begitu maka pemantauan barang akan terjamin dan menyeluruh tanpa menghabiskan banyak waktu.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Sistem Pelacakan Aset</span></span>
            
            <p>Penggunaan RFID serta RFID tag tentunya akan mendapatkan kemudahan bagi pengguna untuk dapat melacak lokasi item barang yang telah di tag. </p>
            <p>Maka kerusakan maupun kehilangan barang akan menjadi minim, data stok tersebut dapat dengan mudah dipantau dari manapun dan kapanpun.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-cara-utama-penerapan-kaizen-pada-perusahaan',
              'type' => 'article',
              'title' => '4 Cara Utama Penerapan Kaizen Pada Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/02/green-white-minimalist-modern-real-estate-presentation-1.png',
              'tags' => 'industri 4.0,kaizen',
              'date' => 'February 7, 2023',
              'content' => "
            
            <p>Kaizen adalah kata yang berasal dari bahasa Jepang terdiri dari 2 kata, yaitu “kai” dan “zen” yang memiliki arti perubahan dan lebih baik. Maka dapat disimpulkan bahwa kaizen ialah proses perbaikan secara kecil yang dilakukan secara terus menerus dan berkelanjutan. </p>
            <p>Beberapa manfaat dari penerapan kaizen adalah untuk menjaga kualitas produk, menghemat biaya, meningkatkan produktivitas, membentuk komunikasi yang lebih baik serta menjaga keamanan pada perusahaan.</p>
            <p>Prinsip kerja kaizen di Jepang adalah untuk menciptakan sebuah area kerja yang tidak hanya bersih dan rapi, tetapi juga penerapannya diharapkan bisa membuat karyawan lebih produktif selama melakukan pekerjannya. Bahkan penerapannya juga bertujuan menumbuhkan rasa tanggung jawab pada setiap karyawan pada lingkungan kerja. </p>
            <p>Hal ini menjadi penting karena seiring waktu biasanya permasalahan akan muncul diantara karyawan maupun pimpinan.  Menerapkan kaizen tentunya perlu waktu dan pembiasaan, tetapi hal tersebut tentunya akan sangat berguna dikemudian hari. Ada beberapa focus utama pada penerapan kaizen, yaitu :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Problem Identification</span></span>
            
            <p>Perbaikan berkelanjutan yang dapat dimulai dengan cara mengidentifikasi sebuah perubahan yang kemungkinan akan dibutuhkan karena ada sejumlah cara untuk mengidentifikasi peluang untuk melakukan perubahan tersebut. Salah satu cara yang dapat dilakukan adalah dengan meminta saran dari karyawan untuk melacak kondisi perusahaan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Real Time Data Visualization</span></span>
            
            <p>Tentunya penting untuk kita mengetahui proses yang sedang dilakukan oleh perusahaan pada saat ini, dengan cara menganalisis suatu proses bekerja setelah mengumpulkan data maupun informasi. Karena perubahan tanpa adanya pemahaman dikhawatirkan akan menganggu proses yang sedang berjalan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Data-Driven Solution</span></span>
            
            <p>Menemukan masalah yang perlu diselesaikan  dengan begitu maka dapat dengan mudah akan mengembangkan solusi dan solisi tersebut akan dikembangkan harus sederhana dan dapat ditindaklanjuti dengan efektif.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Solution Implementation</span></span>
            
            <p>Salah satu kunci untuk menerapkan solusi adalah kontinuitas dan semua orang dalam perusahaan memahami solusi tersebut. Semua orang yang terlibat dalam perusahaan baik secara dari level bahwa hingga atas harus dapat memahami mengenai solusi yang akan diterapkan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-manfaat-stock-monitoring-untuk-smart-manufacturing',
              'type' => 'article',
              'title' => '3 Manfaat Stock Monitoring Untuk Smart Manufacturing',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/02/image-3-edited.png',
              'tags' => 'industri 4.0,Internet of Things',
              'date' => 'February 6, 2023',
              'content' => "
            
            <p>Pada masa sekarang dimana teknologi sudah sangat berkembang menimbulkan smart manufacturing yang merupakan bagian dari revolusi industri. Smart manufacturing merupakan sebuah konsep baru di dunia industri manufaktur. </p>
            <p>Konsep pada smart manufacturing tersendiri berlatar oleh kemunculan perangkat perangkat pintar yang sudah mulai bermunculan. Smart manufacturing adalah kombinasi dari berbagai teknologi dan solusi yang diterapkan untuk mengoptimalkan proses manufaktur, dengan demikian juga meningkatkan keuntungan secara keseluruhan.</p>
            <p>Stock monitoring adalah salah satu kegiatan yang harus dilakukan oleh pelaku bisnis guna menjalankan bisnisnya dengan baik. Mengelola barang bukanlah pekerjaan yang mudah, meskipun kelihatannya sederhana tetapi jika dilakukan membutuhkan waktu dan tenaga yang lebih. Apalagi jika barang yang ada di tempat penyimpanan berjumlah banyak. </p>
            <p>Stock Monitoring tentunya merupaka kegiatan yang perlu dilakukan agar menjaga ketersediaan stock guna memprlancar jalannya proses produksi. Stock monitoring tentunya merupakan bagian pentinng dari sebuah smart manufacturing, berikut beberapa manfaat stock monitoring dalam smart manufacturing :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Membantu membuat keputusan</span></span>
            
            <p>Dengan adanya stock monitoring maka dapat membantu perusahaan untuk melacak jumlah stock barang dan mengestimasi siklus persediaan barang atau melakukan pembelian dalam waktu tertentu. Hal tersebut menghubungkan aktivitas pembelian dari awal hingga akhir untuk menghindari keterlambatan produk ataupun mempercepat proses.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pesanan tercukupi</span></span>
            
            <p>Salah satu tujuan atau manfaat dari stock monitoring adalah untuk memiliki jumlah persediaan barang yang tersimpan digudang secara cukup. Hal tersebut maka akan membuat persediaan yang aman sehingga dapat memenuhi pesanan tepat waktu dan tidak ingin membuat pelanggan menunggu.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Membantu pencatatan data dan transaksi otomatis</span></span>
            
            <p>Dalam stock monitoring pada smart manufacture tidak ada lagi proses penginputan data secara manual dan menghitungnya satu persatu, semua data yang didapatkan langsung tercatat secara otomatis dan real-time. Dan dengan begitu juga tentunya dapat mempersingkat waktu dan tenaga dalam stock monitoring tersebut.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-cara-penggunaan-big-data-pada-manufaktur',
              'type' => 'article',
              'title' => '3 Cara Penggunaan Big Data Pada Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/02/green-white-minimalist-modern-real-estate-presentation-edited.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'February 3, 2023',
              'content' => "
            
            <p>Industri manufaktur adalah salah satu industri yang merasakan manfaat dari hadirnya kemajuan teknologi seperti Big Data. Dengan proses data integrasi maka sebuah industri dapat meningkatkan nilai strategis serta memperbaiki tindakan serta meningkatkan keuntungan dan dapat memperkuat hubungan dengan pelanggan. </p>
            <p>Dengan begitu maka dapat dikatakan bahwa Big Data merupakan peran yang sangatlah penting bagi proses bisnis di era sekarang. Big Data hadir sejak tahun 2000an didalamnya terdapat banyak sekali data yang berjumlah sangat besar. Big Data tersendiri ialah kumpulan data yang berjumlah besar dan kompleks serta jumlahnya terus bertambah seiring waktu. </p>
            <p>Big Data terdiri dari 3 jenis yaitu data terstruktur, data semi terstruktur dan tada tidak terstruktur. Big Data dapat dianalisa untuk memberikan gambaran yang dapat mengarah pada keputusan yang lebih baik dan dapat menentukan langkah strategis kedepannya. </p>
            <p>Dengan menganalisis Big Data tentunya dapat membantu hampir seluruh kegiatan dalam industri manufaktur, berikut 3 cara penggunaan Big data dalam manufaktur :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Supply Chain Management</span></span>
            
            <p>Rantai pasok atau supply chain adalah sebuah hal penting pada manufaktur, kegagalan dan biaya tinggi pada penyediaannya perlu dihindari, dengan begitu maka perusahaan perlu melaukan cara mengelola pengiriman bahan baku. </p>
            <p>Dengan penggunaan Big Data dapat dilakukan penghitungan guna mengetahui penundaan serta kekurangan bahan baku. Dengan perhitungan tersebut maka perusahaan tentunya dapat membuat rencana darurat tentang ketersediaan stok sehinnga dapat menjalankan proses produksinya tanpa hambatan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>After Sales</span></span>
            
            <p>Big Data juga digunakan dalam untuk purna jual atau after sales, dengan cara menganalisis secara real time data yang terkumpul dari sensor mesin guna menghasilkan gambaran tentang kinerja mesin. Jika terjadi cacat atau mungkin potensi kelemahan yang mengkhawatirkan maka dengan cepat dapat diambil tindakan sebelum terjadi semakin parah.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Quality Assurance</span></span>
            
            <p>Pada quality assurance Big Data digunakan untuk mendeteksi kelemahan pada sebuah produk dengan tujuan agar produk tersebut aman digunakan untuk pelanggan. Cara tersebut juga dapat membantu menghilangkan kelemahan sebelum produk tersebut diproduksi sehingga tidak akan menimbulkan keborosan biaya dan waktu.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-alasan-pentingnya-big-data-dalam-perusahan',
              'type' => 'article',
              'title' => '3 Alasan Pentingnya Big Data Dalam Perusahan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/02/image-1-edited.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'February 2, 2023',
              'content' => "
            
            <p>Pemanfaatan Big Data tentunya sangat menguntungkan bagi perusahaan entah dari segi bisnis maupun operasional. Big Data adalah kumpulan data berjumlah besar, kompleks dan jumlahnya semakin bertambah, terdiri dari 3 jenis yaitu Big Data terstruktur, semi terstruktur dan tidak terstruktur. </p>
            <p>Big Data dapat memberikan informasi secara detail serta akurat mengenai aktifitas dari pelanggan. Seperti masukan untuk produk dan kritik, sehingga masukan tersebut dapat membuat perusahaan lebih baik kedepannya.</p>
            <p>Dengan begitu maka Big Data memiliki peran penting dalam berjalannya sebuah perusahaan. Berikut 3 alasan penting penggunaan Big Data bagi perusahaan :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengumpulkan data pelanggan serta pasar</span></span>
            
            <p>Dengan perkembangan teknologi yang sudah canggih seperti Big Data maka informasi di dalamnya dapat digunakan oleh perusahaan untuk berbagai macam keperluan. Hasil dari Analisa Big Data dapat mengetahui apa yang selama ini menjadi masalah bagi perusahaan dan tentunya menyediakan beberapa solusinya. </p>
            <p>Contohnya dengan memasang iklan sehingga hal tersebut dapat mempengaruhi pergerakan marketing dan juga aktivitas marketing yang lebih efisien.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Product Development</span></span>
            
            <p>Big Data dilengkapi dengan kemampuan untuk membaca kebiasaan dan pola penggunaan internet sehingga informasi yang dikumpulkan oleh Big Data tentunya dapat digunakan perusahaan untuk menyesuaikan produk dengan minat pasar.</p>
            <p> Kemampuan tersebut tentunya dapat menguntungkan bisnis, dan perusahaan dapat menggunakan momen tersebut untuk memberikan penawaran yang tepat pada konsumen.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningkatkan efisiensi dan efektifitas pada bisnis</span></span>
            
            <p>Mencari metode paling efektif untuk menghasilkan sesuatu juga merupakan kemampuan dari Big Data baik itu berupa flow yang lebih efisien hingga mana saja konsumen yang memiliki potensi tinggi tetapi sempat terlewar. Semua itu dapat dideteksi lebih awal dengan menggunakan Big Data.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-alasan-harus-memanfaatkan-big-data-dalam-manufaktur',
              'type' => 'article',
              'title' => '3 Alasan Harus Memanfaatkan Big Data Dalam Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/02/image-edited.png',
              'tags' => 'big data,industri 4.0',
              'date' => 'February 1, 2023',
              'content' => "
            
            <p>Perusahaan manufaktur ialah sebuah perusahaan yang menghasilkan barang, mulai dari <em>raw material </em>(bahan baku) sampai menjadi barang jadi. Alurnya dimulai dari pembelian <em>raw material</em>, menjadi <em>intermediate product</em> (barang setengah jadi) kemuadian diolah untuk menjadi barang jadi. </p>
            <p>Jenis perusahaan manufaktur terbagi sesuai dengan industry dan jenis barang yang diproduksi maka dengan begitu tentunya terdapat waktu penggerjaan yang berbeda pada setiap perusahaan manufaktur.</p>
            <p>Dalam bidang industri big data merupakan sebuah peran penting dan industry manufaktur adalah salah satu industry yang paling banyak terkena dampak dari peranan big data. Hal tersebut terjadi karena big data memiliki beberapa manfaat pada manufaktur, berikut 3 alasan kenapa harus memanfaatkan big data dalam manufaktur :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Data Acquisition (Pengumpulan data)</span></span>
            
            <p>Dapat dikatakan bahwa saat ini dunia manufaktur telah terotomatisasi sehingga beberapa proses mentransfer data dapat langsung terinput. Data tersebut tentunya akan bertambah sepanjang hari sesuai dengan lamanya wakt produksi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Dapat melacak defect (produk cacat)</span></span>
            
            <p>Adanya defect tentunya akan menimbulkan banyak kerugian serta akan memperlambat arus proses produksi, dengan penggunaan big data bukan berarti manufaktur terbebas dari defect. Big data berperan sebagai pemantau pada manufaktur dengan tujuan menemukan produk yang cacat melalui sensor di semua fasilitas dan produk cacat tersebut dapat ditemukan karna adanya data yang tidak akurat.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menciptakan smart manufacturing</span></span>
            
            <p>Seluruh proses di setiap perusahaan manufaktur tentu akan menghasilkan sebuah data yang kemudia dikelola pada setiap harinya. Dengan jumlah data yang banyak tersebut maka informasi tersebut akan terkumpul dengan baik dan menciptakan lingkungan maufaktur yang cerdas. </p>
            <p>Big data dapat melacak setiap proses sensor pada pabrik dan memungkinkan untuk melakukan perintah terhadap peralatan di pabrik sehingga tercipta smart manufacturing yang baik.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'penggunaan-iot-pada-delivery-monitoring',
              'type' => 'article',
              'title' => 'Penggunaan IOT Pada Delivery Monitoring',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/01/green-white-minimalist-modern-real-estate-presentation-edited.jpg',
              'tags' => 'industri 4.0,Internet of Things,IoT',
              'date' => 'January 26, 2023',
              'content' => "
            
            <p>Teknologi dapat diartikan sebagai alat bantu manusia, dengan demikian tujuannya adalah untuk memudahkan manusia dalam menyelesaikan pekerjaan. Hadirnya teknologi tersebut memberikan banyak dampak positif. Salah satu teknologi tersebut ialah IOT.</p>
            <p>Pada pengiriman dituntut untuk melakukan ketepatan dan ketelitian dalam menjalankan tugasnya, selain itu juga memastikan keamanan barang agar sampai ke konsumen dengan tanpa suatu cacat apapun. </p>
            <p>IOT dalam delivery monitoring berperan sebagai sebuah sistem yang berfungsi untuk mngetahui keberadaan barang yang dikirmkan, dengan begitu maka kita dapat mengetahui pergerakan barnag secara realtime dengan bantuan IOT tersebut. IOT juga mengurangi resiko barang hilang saat perjalanan, karena dapat dengan mudah melacak barang tersebut. </p>
            <p>IoT menghilangkan kendala waktu dan kesalahan yang disebabkan oleh pelacakan produk manual. Untuk tingkat keamanan saat menggunakan IOT juga tidak perlu diragukan lagi, karna semua sudah terhubung ke internet maka dapat memudahkan dalam mengetahui keberadannya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penjelasan IOT</span></span>
            
            <p>Internet of Things mampu menghubungkan seluruh device yang berbeda dengan cara menambahkan sensor dan kecerdasan digital, sehingga akan memungkinkan pengguna untuk melakukan komunikasi secara real-time tanpa harus melibatkan campur tangan manusia. </p>
            <p>Secara singkat pengertian IOT adalah sebuah teknologi yang dapat menghubunbgkan sesuatu ke internet dengan tujuan memudahkan pekerjaan. Manfaat delivery monitoring menggunakan IOT :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Dapat memantau pergerakan barang secara realtime sehingga lebih efisien.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pencatatan barang masuk dan keluar secara otomatis.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Memastikan waktu pengiriman sesuai dangan yang di janjikan.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengetahui kepuasan pelanggan saat pengiriman selesai.</span></span>
            
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'receiving-gate-system-dengan-rfid',
              'type' => 'article',
              'title' => 'Receiving gate system dengan RFID',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/01/shipping-receiving-white-gates.webp',
              'tags' => 'industri 4.0,Radio Frequency Identification',
              'date' => 'January 25, 2023',
              'content' => "
            
            <p>Kemajuan teknologi merupakan hal yang tidak dapat kita hindari dalam kehidupan ini, karena kemajuan teknologi akan berjalan seiring dengan kemajuan ilmu pengetahuan. Setiap inovasi diciptakan untuk memberikan manfaat positif bagi kehidupan manusia. Memberikan banyak kemudahan, serta cara baru dalam melakukan aktivitas manusia.</p>
            <p>Khususnya di bidang teknologi, masyarakat telah menikmati banyak manfaat dari inovasi-inovasi yang dihasilkan dalam satu dekade terakhir. Kehidupan manusia tidak dapat dipisahkan dari teknologi. Artinya, bahwa teknologi adalah keseluruhan cara yang secara rasional mengarah pada ciri efisiensi dalam setiap aktivitas manusia. Perkembangan teknologi terjadi ketika seseorang menggunakan alat dan akal untuk menyelesaikan setiap masalah yang dihadapinya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penjelasan RFID</span></span>
            
            <p>RFID adalah singkatan dari Radio Frequency Identification. RFID adalah suatu teknologi yang digunakan untuk melakukan identifikasi dan pengambilan data dengan menggunakan barcode atau magnetic card. Metode identifikasinya menggunakan sarana yang disebut label RFID yang berfungsi untuk menyimpan dan mengambil data jarak jauh.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penggunaan RFID pada Receiving Gate.</span></span>
            
            <p>Salah satu penggunaan teknologi ada pada receiving gate yang menggunakan RFID dengan tujuan mempermudah pengecekan dan pendataan barang. Peranan RFID dalam Recaiving gate adalah sebagai sebuah system yang dapat memindai dan mengetahui berapa banyak barng yang datang, dengan begitu maka kita tidak perlu untuk menghitung atau meminfdai barag tersebut satu persatu. Maka dengan system tersebut dapat menghemat tenaga yang diperlukan. Penggunaan RFID pada receiving gate juga dapat memonitor barang secara real time dan tentunya otomatis dalam penginputan data.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-manfaat-penggunaan-iot-pada-pabrik-manufaktur',
              'type' => 'article',
              'title' => '3 Manfaat penggunaan IOT Pada Pabrik Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/01/image-9-edited.png',
              'tags' => 'industri 4.0,Internet of Things,IoT',
              'date' => 'January 24, 2023',
              'content' => "
            
            <p>Teknologi telah menjadi kunci bagi berbagai jenis bidang salah satunya adalah manufaktur, teknologi yang terus dikembangkan guna meningkatkan pendapatan serta efisiensi pekerjaan. Kemajuan teknologi tersebut akhirnya menghasilkan berbagai macam perubahan, salah satunya adalah dengan hadirnya IOT.</p>
            <p>IOT adalah singkatan dari Internet Of Things yang merupakan sebuah teknologi yang dapat menghubungkan sesuatu ke internet dan dapat membantu melakukan otomatisasi, analisis dan integrasi sistem dengan memanfaatkan jaringan sehingga pekerjaan akan menjadi lebih efisien sehingga dapat meningkatkan pendapatan. Secara sederhana IOT tidak diharuskan mengontrol benda maupun perangkat IOT secara langsung, cukup dari jarak jauh melalui berbagai macam perangkat.</p>
            <p>Dengan begitu maka penggunaan IOT pada manufaktur dapat menghasilkan beberapa manfaat seperti :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningkatkan Efisiensi,</span></span>
            
            <p>Karena memiliki kemampuan mengotomatiskan dan mengoptimalkan efisiensi dalam pengoperasian bisnis, sehingga mesin dapat bekerja secara otomatis dan lebih efisien serta akurat, dapat juga meningkatkan produktivitas. Mesin tersebut dapat dihubungkan pada perangkat lunak dengan menggunakan sensor yang dapat memantau kinerja secara konstan, sehingga produsen dapat mengetahui lebih banyak mengenai kinerja operasional pada bagian bagian peralatan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Realtime Data</span></span>
            
            <p>IOT tersendiri juga dapat menghasilkan data rantai pasok secara realtime. Perangkat IOT membuat perusahaan dapat dengan mudah melacak produk dan persediaan dengam melihat apakah ada perlambatan dan ketidakefisienan. Menghubungkan pabrik ke pemasok dapat membuat semua pihak yang terlibat dalam rantai pasokan dapat melacak aliran material serta waktu siklus pada saat produksi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mencegah Kesalahan</span></span>
            
            <p>Teknologi IOT dapat membantu mengurangi atau bahkan mencegah kesalahan dalam proses produksi. IOT dapat memberikan peringatan jika terjadi perubahan penting dari set rencana serta pembaruan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'pemanfaatan-big-data-dalam-perusahaan-logistik',
              'type' => 'article',
              'title' => 'Pemanfaatan Big Data Dalam Perusahaan Logistik',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/01/content-pillars-1-1.jpg',
              'tags' => 'big data',
              'date' => 'January 20, 2023',
              'content' => "
            
            <p>Perkembangan informasi saat ini tentunya sedang menjadi fokus dari berbagai lini, salah satunya adalah untuk strategi dan bersaing dalam bisnis. Banyak sekali perusahaan yang menggunakan data untuk keperluan pengambilan keputusan dalam berbisnis, maupun digunakan pada saat kegiatan operasional. Informasi terkait pelanggan, volume penjualan sampai kapasitas operasi tentunya sangat dibutuhkan para pelaku bisnis untuk mengelola bisnis mereka pada persaingan yang ketat ini.</p>
            <p>Data merupakan sumber daya ataupun sebuah kekuatan untuk mengelola sebuah bisnis agar mencapai sebuah kesuksesan. Tapi sayangnya ketersediaan data jumlahnya begitu kompleks, dengan begitu maka pemilik perusahaan harus dapat mengolah dan memilih data menjadi informasi yang akurat serta relevan yang berguna untuk pengambilan keputusan.</p>
            <p>Dengan kebutuhan data tersebut maka hadirlah big data yang dapat membantu memberikan data untuk mengambil keputusan tersebut. Big data adalah kumpulan data yang jumlahnya lebih besar, kompleks dan terus menerus bertambah.</p>
            <p>Pemanfaatan big data dalam logistik</p>
            <p>Pengunaan big data dalam logistik memiliki banyak keunggulan karena memiliki karakteristik yang dapat diterapkan di industri logistik secara efektif, seperti :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Hubungan erat dengan pelanggan</span></span>
            
            <p>Pemanfaatan ini tentunya tidak terlepas dengan kehadiran big data, kerena dengan adanya big data dalam proses distribusi dalam berbagai sistem industri dapat membuat para penyedia jasa logistik ikut merasakan gejolak bisnis secara perorangan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Informasi</span></span>
            
            <p>Pengiriman maupun transportasi tentunya membutuhkan jaringan yang baik dalam hal ini ialah merupakan sebuah sumber data yang paling penting. Dengan pemanfaatan data tersebut yang berguna mengoptimalkan jaringan, jaringan data tersebut juga memberikan wawasan bagi para pelaku bisnis logistik dalam konteks arus barang secara global.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penyerahan barang wujud</span></span>
            
            <p>Dalam penyerahan barang ini tentunya membutuhkan interaksi dengan konsumen secara langsung pada proses pengiriman maupun pickup barang. Dengan tersedianya big data maka dapat memberikan sarana multifungsi dalam menghasilkan pengetahuan tentang kualitas dari barang itu sendiri.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'manfaat-rfid-dalam-manajemen-supply-chain',
              'type' => 'article',
              'title' => 'Manfaat RFID Dalam Manajemen Supply Chain',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/01/wp-edited.jpg',
              'tags' => 'Radio Frequency Identification',
              'date' => 'January 19, 2023',
              'content' => "
            
            <p>Seperti yang diketahui bahwa supply chain ialah mencakup semua proses yang terlibat dalam arus barang pada manufaktur atau pabrik menuju pelanggan. Termasuk pada proses produksi, distribusi dan juga transportasi. Dengan begitu maka manajemen supply chain harus dapat mencakup semua tahapan yang digabungkan dengan keputusan pemasaran dan sejalan dengan strategi serta tujuan perusahaan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengertian RFID</span></span>
            
            <p>RFID atau Radio Frequancy Identification adalah sebuah teknologi yang menggunakan gelombang radio guna mengidentifikasi orang ataupun sebuah benda secara otomatis. Teknologi tersebut akhirnnya menjadi revolusioner dalam manajemen supply chain, bukan hanya sekedar sebagai pengganti barcode tetapi juga digunakan untuk memastikan bahwa barang tersebut tersedia pada tempat yang seharusnya tanpa adanya kesalahan. Hal tersebut tentunya memberikan kemudahan bagi supply chain karena menjadi jauh lebih tepat dan meningkatkan efisiensi salah satunya meningkatkan informasi secara real time.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Manfaat RFID pada manajemen supply chain</span></span>
            
            <p>Manfaat RFID dalam manjemen supply chain diterapkan pada saat produksi sampai pengemasan, sebelum memanfaatkan RFID produk tersebut harus dihitung secara manual dan tentunya menghabiskan waktu yang tidak sedikit. Setelah menfaatkan RFID jumlah barang dapat doihitung hanya dalam hitungan detik. Hal tersebut terjadi karena tag RFID secara otomatis dapat dipindai tanpa perlu berada dibawah scanner dan beberapa tag RFID bisa dipindai secara bersamaan.</p>
            <p>Selain itu tag RFID juga dapat menyimpan berbagai informasi jauh lebih baik dari dibandingkan dengan label barcode. Kemudian informasi ini digunakan untuk mengoptimalkan proses produksi. Dengan RFID produsen akan mendapatkan keuntungan dalam sistem pembaharuan dan pemeliharaan mesin, seperti mesin mana yang perlu dilakukan pemeliharaan dan kapan pemeliharaan tersebut perlu dilakukan. RFID juga dirasakan pada manajemen Gudang dalam melacak pengiriman serta proses distribusi. Dengan begitu maka RFID memberikan banyak keuntungan yang signifikan dalam proses supply chain.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'alasan-harus-menerapkan-tpm-total-productive-maintenance-pada-perusahaan',
              'type' => 'article',
              'title' => 'Alasan harus menerapkan TPM (Total Productive Maintenance) Pada Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/01/black-white-simple-quote-instagram-post-edited.png',
              'tags' => 'total productive maintenance',
              'date' => 'January 18, 2023',
              'content' => "
            
            <p>Total Productive Maintenance atau yang biasa disingkat TPM adalah sebuah sistem yang dapat digunakan untuk memelihara dan meningkatkan kualitas sebuah produksi melalui perawatan perlengkapan serta peralatan kerja seperti mesin dan alat alat kerja. TPM berfokus memastikan semua perlengkapan dan peralatan produksi beroperasi dengan kondisi terbaik sehingga dapat terhindar dari kerusakan atau keterlambatan dalam proses produksi.</p>
            <p>TPM memiliki tiga fokus utama, yaitu :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'><em>Zero product defect</em> (tidak ada produk yang cacat), </span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'><em>Zero equipment unplanned failures</em> (tidak ada kerusakan peralatan yang tidak terdeteksi sebelumnya),</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'><em>Zero accident</em> (tidak ada kecelakaan kerja).</span></span>
            
            <p>Alasan perusahan harus menerapkan TPM adalah karena tiga fokus utama yang dimiliki oleh TPM maka perusahaan yang menerapkan TPM akan mendapatkan keuntungan seperti :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Lebih sedikit waktu perawatan yang tidak direncanakan,</span></span>
            
            <p>TPM sangat berorientasi pada pemberdayaan karyawan sehingga meningkatkan waktu produksi. TPM membuat pekerjaan secara tradisional dapat diselesaikan oleh personil pemeliharaan untuk semua personil perusahaan. Dengan begitu maka semua orang akan bertanggung jawab atas mesin dan perawatan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Lingkungan kerja yang lebih aman</span></span>
            
            <p>TPM memastikan semua ruang kerja diurutkan, dibersihkan dan distandarisasi dengan aman setiap saat, bertujuan untuk menciptakan tempat kerja yang lebih aman. Kegiatan TPM berfokus pada tata letak dan aliran produk, meminimalkan perpindahan atau pergerakan serta memaksimalkan aliran produk sehingga dapat menciptakan lingkungan kerja yang aman.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Peningkatan kualitas output</span></span>
            
            <p>Salah satu peran TPM adalah pemeliharaan kualitas serta peningkatan kualitas dalam proses produksi. Dengan pendekatan tersebut maka dapat meningkatkan kualitas dan juga kepuasan pelaggan. Singkatnya jika kualitas output meningkat maka tidak akan timbul keluhan dari pelanggan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '5-peran-iot-dalam-logistik-dan-rantai-pasok',
              'type' => 'article',
              'title' => '5 Peran IOT Dalam Logistik dan Rantai Pasok',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/01/content-pillars-.jpg',
              'tags' => 'Internet of Things',
              'date' => 'January 17, 2023',
              'content' => "
            
            <p>Logistik adalah aliran barang maupun jasa dari sumber barang ke penerima, hal ini membuktikan bahwa dalam bisnis tersebut sangat sangat membutuhkan jasa logistik. Sebuah perubahan kecil yang terjadi dalam kegiatan operasional tentunya dapat mengakibatkan hilangnya produktivitas meupun pendapatan yang signifikan. Pengenalan IoT telah menjadi sebuah perubahan untuk transformasi total lingkungan industri logistik.</p>
            <p>IOT tersendiri dapat membuat barang maupun benda terhubung ke internet, dengan tujuan memberikan kemudahan untuk mengaksesnya kapanpun dan dimanapun. Di industri logistik, teknologi IOT membantu organisasi dengan pelacakan pengiriman yang lebih akurat dan manajemen armada yang lebih efisien.</p>
            <p>5 Peran IOT dalam logistik dan rantai pasok :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Manajemen gudang</span></span>
            
            <p>Manajemen pergudangan adalah salah satu hal terpenting bagi bisnis di industri logistik. Saat IOT hadir dalam sistem manajeman gudang untuk menyelamatkan bisnis dari kerugian yang timbul akibat kesalahan dari manajemen gudang. Penggunaan perangkat berkemampuan IOT dapat meningkatkan keefisiensian dan keakuratan dalam berbagi informasi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Transportasi rantai pasok</span></span>
            
            <p>Mulai dari pesanan sampai pengiriman, rantai pasok harus melewati berbagai fase sebelum sampai tujuannya. Ketidaktepatan informasi adalah hal yang sangat dihindari oleh perusahaan. IOT membantu perusahaan meminimalkan kerugian dan masalah pesanan. Teknologi tersebut memiliki kemampuan untuk melacak barang secara realtime dan mengurangi kesalahan dalam pemesanan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Manajeman inventaris yang lebih baik</span></span>
            
            <p>Manajemen inventaris tentunya sangat dibutuhkan bagi perusahaan logistic, dengan IOT dapat menghadirkan rak pintar yang berfungsi untuk memudahkan para pekerja untuk mengetahui produk apasaja yang tersedia, dimana letak produk tersebut dan berapa berat produk tersebut. Dengan manajemen inventaris tersebut maka seluruh produk akan tersusun dengan rapih dan memudahkan dalam pencarian sehingga dapat menghemat waktu pekerjaan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Keikutsertaan pelanggan</span></span>
            
            <p>Setiap perusahaan pasti menginginkan hasil baik bagi para pelanggannya, karena kepuasan pelanggan merupakan sebuah kesuksesan bagi setiap perusahaan. Teknologi IOT dapat membantu perusahaan agar terus terhubung dengan para pelanggan dengan cara yang lebih efektif dan efisien, dan memudahkan interaksi yang tujuannya membuat para pelanggan tertarik dan membantu meningkatkan keikut sertaan konsumen.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Manajeman armada</span></span>
            
            <p>Manajemen armada tentunya harus memastikan waktu tiba maupun datang armada sesuai dengan rute layanan dan jadwal perwatan armada. Karena kunci dari manajemen armada adalah memperhitungkan operasi logistik yang lebih efisien. IOT dapat menginformasikan bahwa armada tersbut sedang beroperasi.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '4-keuntungan-penerapan-metode-kaizen-di-perusahaan',
              'type' => 'article',
              'title' => '4 Keuntungan Penerapan Metode Kaizen di Perusahaan',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/01/image-8-edited.png',
              'tags' => 'kaizen',
              'date' => 'January 16, 2023',
              'content' => "
            
            <p>Kaizen adalah metode atau konsep pemikiran yang berasal dari jepang, merupakan sebuah cara membuat perubahan kecil agar terus menuerus menjadi lebih baik. Penerapan kaizen tersendiri lebih memfokuskan pada perubahan maupun perbaikan kecil yang dapat dilakukan secara terus menerus sehingga menjadi sebuah perubahan besar. Kebanyakan pekarjaan dalam penerapan kaizen dapat di selesaikan dalam waktu yang singkat dan tidak memerlukan biaya besar.</p>
            <p>Dalam penerapannya kaizen dimulai dari perubahan pola pikir dari setiap individu pada perusahaan tersebut, karena bukan melihat keberhasilan dalam jangka pendek tetapi dalam konteks jangka panjang.</p>
            <p>Dalam penerapannya tersebut maka kaizen dapat memberikan keuntungan bagi perusahaan, seperti :</p>
            <ul type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Produktivitas meningkat</span></span>
            
            <p>Mulanya perusahaan akan mencari tau tempat maupun area kerja untuk mengetahui adanya pemborosan, kemudian mencari cara untuk merubahnya. Pemborosan yang dimaksud ialah barang cacat, overproduksi dan tempat penyimpanan. Cara menghilangkan segala jenis keborosan maka produktivitas dapat meningkat. Maka pemanfaatan area kerja akan lebih efektif dari pada sebelumnya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Sumber daya yang dimanfaatkan dengan optimal</span></span>
            
            <p>Kaizen dalam perusahaan ternyata dapat memperbaiki dengan cara mengefisiensikan penggunaan sumber daya yang digunakan dalam proses produksi, dengan mengutamakan kebutuhan sehingga perubahan produktivitasnya meningkat menjadi lebih sederhana. Sehingga pemanfaatan sumber daya menjadi lebih optimal.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Berkurangnya biaya</span></span>
            
            <p>Keuntungan lain yang dirasakan dari penerapan kaizen bagi perusahaan adalah dapat membantu perusahaan untuk menggurangi biaya. Salah satu caranya adalah dengan menghilangkan keborosan ditempat kerja. Dengan begitu maka perusahaan akan mendapatkan manfaat positif dari penghematan biaya secara terus menarus. Perusahaan juga perlu menyusun prosedur untuk dapat mengetahui sejauh mana pengeluaran biaya untuk dapat dievaluasi maupun diukur.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Meningkatnya kualitas</span></span>
            
            <p>Kaizen tentunya juga dapat meningkatkan kualitas pada tempat kerja, dengan peningkatan kualitas dari kinerja pekerja maupun peningkatan kualitas mesin yang digunakan. Dengan begitu maka dapat membantu memberikan manfaat positif bagi perusahaan.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => '3-manfaat-tpm-dalam-proses-produksi-di-pabrik-manufaktur',
              'type' => 'article',
              'title' => '3 Manfaat TPM Dalam Proses Produksi di Pabrik Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/01/image-7-edited.png',
              'tags' => 'total productive maintenance',
              'date' => 'January 13, 2023',
              'content' => "
            
            <p>Total Productive Maintenance merupakan kepanjangan dari TPM, TPM adalah sebuah strategi pada perusahaan manufaktur yang beroperasi dengan prinsip bahwa setiap orang yang bekerja harus dapat berpartisipasi dalam pemeliharaan serta meningkatkan kualias produksi yang bertujuan untuk menghindari kerusakan maupun keterlambatan dalam proses produksi.</p>
            <p>Pendekatan ini tentunya menggunakan keterampilan semua karyawan dan berupaya memasukkan sistem pemeliharaan informasi manufaktur pada segi pemeliharaan dalam kegiatan sehari hari. Proses produksi pada manufaktur tentunya ingin memiliki hasil yang sempurna dengan nol kerusakan, tidak ada cacat dan tanpa kecelakaan. Hal tersebut mungkin terdengar cukup mustahil, namun dengan TPM perusahaan dapat membuat hal hal tersebut bisa diwujudkan.</p>
            <p>Manfaat TPM dalam proses produksi :</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Keamanan lingkungan kerja meningkat</span></span>
            
            <p>Dengan mengambil tindakan cepat untuk memperbaiki kerusakan maka dapat meminimalisir terciptanya kerusakan permanen yang tentunya membahayakan keselamatan para pekerja. Menjalankan TPM sama halnya dengan menemukan masalah yang dapat segera ditanggani agar tidak berubah menjadi keadaan yang berbahaya.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Kualitas yang lebih baik</span></span>
            
            <p>Manfaat TPM ini dapat meningkatkan kualitas serta kepuasan pelanggan, dengan cara mengidentifikasi dimana cacat tersebut terjadi dalam proses produksi sehingga dapat dimabil tindakan untuk diperbaiki secepat mungkin. Dengan begitu maka peningkatan kualitas produksi akan terjadi dan hasil produksi yang baik tentunya akan disukai oleh para pelanggan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Lebih sedikit kerusakan peralatan</span></span>
            
            <p>Operator alat berat yang bertugas memantau serta mengawasi kinerja mesin tentunya dapat mendeteksi kerusakan lebih awal. Sebelum adanya kerusakan yang serius operator akan diberi tahu untuk melakukan pemeliharaan pada mesin, sehingga tidak akan terjadi kerusakan yang fatal.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'stock-monitoring-system-menggunakan-rfid',
              'type' => 'article',
              'title' => 'Stock Monitoring System menggunakan RFID',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/01/golden-elegant-certificate-of-appreciation.jpg',
              'tags' => 'Radio Frequency Identification',
              'date' => 'January 12, 2023',
              'content' => "
            
            <p>Dalam sebuah perusahaan pasti terdapat persediaan, persediaan tersebut merupakan barang maupun sumber daya yang disimpan dalam dalam gudang yang akan digunakan pada kemudian hari oleh perusahaan tersebut. Persediaan yang ada dapat berupa barang mentah, barang setengah jadi dan barang jadi. Persediaan tersebut tentunya harus selalu di monitor guna menjaga proses produksi.</p>
            <p>Perkembangan teknologi informasi saat ini memberikan dampak positif dalam bidang industri, karena teknologi informasi bermanfaat untuk memberikan kemudahan dalam bekerja. Salah satu manfaat utama dari RFID adalah dapat membantu perusahaan mengetahui stock persediaan. Dengan bantuan RFID maka akan mempermudah dalam sebuah perusahaan untuk mengetahui berapa sisa stock yang dibutuhkan dan berapa stock bahan baku yang tersedia. Hal ini merupakan sesuatu yang lebih baik dari pada menggunakan cara konvensional.</p>
            <p>Penggunaan teknologi RFID pada sistem manajemen pergudangan dapat memberikan perbaikan pada sistem pergudangan yang signifikan baik karena data secara otomatis dikolektif oleh sistem RFID. Dengan teknologi RFID, data dapat dengan cepat dan secara otomatis ditangkap oleh RFID reader. Sistem real time monitoring stock berbasis teknologi RFID juga dapat meningkatkan efisiensi waktu.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>RFID dalam Stock Monitoring :</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Membantu mengidentifikasi setiap tingkat barang yang dapat memudahkan proses identifikasi setiap item dalam rantai pasokan menjadi lebih mudah dan efisien.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menonitoring stock secara real time sehingga dapat mencegah kehabisan stock secara mendadak</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menghasilkan data secara otomatis dalam format excel dan dapat di download.</span></span>
            
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'rfid-pada-smart-production-line',
              'type' => 'article',
              'title' => 'RFID Pada Smart Production Line',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/01/image-6-edited.png',
              'tags' => 'Radio Frequency Identification',
              'date' => 'January 11, 2023',
              'content' => "
            
            <p>Dalam sebuah manufaktur tentunya diperlukan cara untuk mengkontrol dan mengukur efisiensi dari sebuah alat ataupun kinerja seorang karyawan. Dalam hal ini biasanya dilakukan secara manual oleh seorang yang bertugas mengawasi seberapa cepat seorang karyawan dapat memproduksi bagian yang dibutuhkan dalam proses produksi.</p>
            <p>Ketidakefisienan ini menghasilkan perhitungan yang tidak pasti atau berubah ubah, dengan begitu maka diperlukan RFID dalam sistem production line tersebut. Dalam peoduction line RFID berperan sebagai sistem yang memudahkanperhitungan sebuah data, sehingga tidak perlu menggunakan perhitungan manual. RFID tersebut juga dapat menghasilkan data secara real time, membuat manajemen produksi menjadi lebih efektif melalui pengumpulan data otentik. Dengan hasil ketelitiannya yang tinggi maka sistem ini dapat membantu meningkatkan kualitas.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pengertian RFID</span></span>
            
            <p>RFID adalah Radio Frequency Identification merupakan metode identifikasi untuk menyimpan dan mengambil data jarak jauh. Cara kerja teknologi ini adalah dengan mengandalkan gelombang radio atau gelombang elektromagnetik.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Keuntungan menggunakan RFID pada Production Line:</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Dapat merekam sebuah proses informasi dan memaksimalkan efisiensi produksi.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Pendataan dan pembacaan sistem secara otomatis tanpa campur tangan manusia sehingga dapat mengurangi kesalahan.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Mengupload informasi secara real time, dapat meningkatkan efisiensi produksi perusahaan dan kemampuan pengambilan keputusan.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Sistem RFID juga dapat meningkatkan kualitas secara keseluruhan dan meningkatkan daya saing perusahaan.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Sistem RFID dapat membantu memeriksa KPI pekerja, dan memberikan dasar untuk pelacakan kualitas produk dan meningkatkan produktivitas</span></span>
            
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'aplikasi-rfid-untuk-kebutuhan-gudang',
              'type' => 'article',
              'title' => 'Aplikasi RFID Untuk Kebutuhan Gudang',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/01/image-4.png',
              'tags' => 'Radio Frequency Identification',
              'date' => 'January 10, 2023',
              'content' => "
            
            <p>Kemajuan teknologi tentunya menghasilkan banyak sekali kemudahan dalam mengerjakan sesuatu, salah satunya adalah pengerjaan pada gudang. Gudang merupakan komponen krusial atau penting yang di dalamnya terdapat banyak sekali barang, keberadaan gudang sangatlah penting untuk proses distribusi, produksi sampai pengadaan barang.</p>
            <p>Dengan begitu maka diperlukan cara untuk mengelola gudang dengan baik, salah satu caranya ialah dengan membuat manajemen pergudangan yang tepat agar semua dapat berjalan dengan lancar. Dikarenakan besarnya gudang maka tidak dapat dipungkiri jika suatu saat terjadi human error, maka dari itu muncul teknologi yang dapat memudahkan untuk mengetahui kebutuhan gudang bernama RFID.</p>
            <p>RFID adalah Radio Frequency Identification yaitu teknologi yang mengunakan komunikasi berbasis gelombang elektromagnetik yang dapat mendukung pergudangan secara realtime. RFID dalam sistem pergudangan tentunya dapat membantu mengetahui serta memastikan jumlah barang sesuai denga mutasi barang, dengan begitu maka dapat menghemat waktu dan tentunya menghemat tenaga. Kelebihan lain RFID pada kebutuhan gudang adalah dapat melacak barang secara otomatis dan mengurangi kesalahan yang dapat menimbulkan proses perbaikan yang mahal.</p>
            <p>Penggunaan RFID ini ialah menggunakan RFID Tag, Tag dapat dibaca dalam wadah, karton, kotak atau lainnya, dan tidak seperti barcode, RFID tag dapat sekaligus membaca ratusan id pada suatu waktu. RFID juga tahan air dan gesekan karena biasanya dikemas dalam chip plastik yang kadang dimasukkan kedalam obyek yang dipasang RFID. Dengan pengunaan RFID dapat dipastikan bahwa posisi maupun letak barang menjadi lebih transparan. Visibilitas juga akan meningkat, dengan demikian pemberian RFID Tag pada barang atau peralatan dapat menghasilkan akhir perhitungan yang akurat.</p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'hasil-penerapan-kaizen-bagi-perusahaan-manufaktur',
              'type' => 'article',
              'title' => 'Hasil Penerapan Kaizen Bagi Perusahaan Manufaktur',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/01/image-5.png',
              'tags' => 'kaizen',
              'date' => 'January 9, 2023',
              'content' => "
            
            <p>Kaizen merupakan budaya kerja yang berasal dari jepang, berfokus pada perubahan kecil yang terus menerus dilakukan agar menjadi perubahan besar. Kaizen juga dikenal sebagai metode terbaik untuk meningkatkan kinerja perusahaan dikarenakan metode ini hanya menggunakan biaya yang lebih rendah.</p>
            <p>Kaizen berorientasi pada proses, sedangkan jika dibandingkan dengan orientasi barat yang lebih mengarah kepada hasil. Penerapan kaizen dalam perusahaan dapat terlaksana jika seluruh karyawan dapat menjalankan metode tersebut dengan benar.</p>
            <p>Kaizen dalam penerapannya juga memiliki beberapa elemen dan prinsip, yaitu :</p>
            <ol type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Management Commitment, merupakan komitmen jangka Panjang yang bertujuan untuk perbaikan secara terus menerus.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Employee Empowerment, dengan memberdayakan karyawan sama halnya dengan mendorong untuk memberikan nilai tambah bagi sebuah perusahaan.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Gemba Walk, melakukan perbaikan serta peningkatan dengan cara berkesinambungan.</span></span>
            </ol>
            <p>Kaizen juga dianggap sebagai salah satu kunci keberhasilan dalam sebuah daya saing perusahaan karena melalui konsep tersebut karyawan memiliki partisipasi untuk memberikan saran, sementara yang lainnya digunakan sebagai sebuah strategi dan menjadi alat untuk mengurangi keborosan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Impact Penerapan Kaizen</span></span>
            
            <p>Impact penerapan kaizen pada perusahaan manufaktur akan memberikan banyak manfaat seperti :</p>
            <ol type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menghindari pemborosan, karena proses yang lebih efisien maka dan singkat dapat menyebabkan pengurangan biaya.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menyelesaikan produk dengan lebih cepat, proses produksi yang berlangsung cepat karna adanya proses perbaikan berkelanjutan maka penyelesaian produk juga dapat berjalan lebih cepat.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Memperbaiki aliran proses produksi, dengan proses kerja yang lebih terarah maka memudahkan seluruh pekerja melakukan pekerjaannya sehingga rasa kepuasan staff dapat meningkat.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Menghasilkan produk yang berkualitas lebih baik,</span></span>
            </ol>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'iot-pada-manufacture-automotive',
              'type' => 'article',
              'title' => 'IOT Pada Manufacture Automotive',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/01/internet-of-things-toyota-production-system.jpg',
              'tags' => 'industri 4.0,Internet of Things,IoT',
              'date' => 'January 5, 2023',
              'content' => "
            
            <p>Semakin berkembangnya teknologi yang bertujuan untuk memudahkan manusia dengan hadirnya teknologi baru yang membuat dunia semakin terhubung dan memudahkan manusia untuk mengetahui sesuatu dengan cara memantau dan memperhatikan secara real time.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penjelasan mengenai IOT</span></span>
            
            <p>Kemudahan tersebut tentunya tidak terlepas dari internet, teknologi tersebut ialah IOT yang merupakan kependekan dari Internet Of Things yang memiliki arti sebuah teknologi yang dapat menghubungkan sesuatu ke internet guna memudahkan pekerjaan manusia. IOT adalah suatu system yang efektif untuk memantau dan mengelola sesuatu dari jarak jauh.</p>
            <p>Salah satu penerapan IOT ada pada sektor manufaktur, salah satunya adalah manufaktur otomotif. Dalam manufaktur otomotif tersebut banyak sekali hal yang harus dilakukan salah satunya adalah proses pengangkatan bahan baku maupun proses pemasangan bahan tersebut.</p>
            <p></p>
            <p>Keuntungan dalam menerapkan IOT, yaitu :</p>
            <p>      1.Peningkatan pendapatan</p>
            <p>Dengan menggunakan IOT tentunya akan meningkatkan pendapatan karena kualitas yang dihasilkan akan lebih baik dan akan meminimalisir kerugian barang baku karna cacat produksi.</p>
            <p>      2.Lingkungan kerja yang lebih aman</p>
            <p>Sistem IOT ini juga dirancang agar manufaktur menimgkatkan keamanan kerja yang lebih baik, IOT dapat mendeteksi kelalaian seperti banyaknya getaran atau panas yang ditimbulkan dari mesin. Dengan begitu maka dapat menimbulkan lingkungan kerja yang lebih aman.</p>
            <p>     3.Mengurangi biaya</p>
            <p>Dengan menggunakan system IOT tentunya kita dapat mengurangi biaya operasional dan menghasilkan pendapatan yang lebih baik. Tentunya menjadikan operasi tangkas yang lebih baik, mengefektifkan energi dan meminimalkan waktu berhentinya alat berat.</p>
            <p>    4.Peningkatan kualitas</p>
            <p>Salah satu hal terpenting dalam sebuah manufaktur adalah kualitas, terlebih lagi pada manufaktur otomotif, karena IOT dapat memberikan pertanda kepada jika mesin terlalu banyak menggunakan bahan baku. Dengan begitu maka proses kinerja alat tersebut menjadi lebih efektif dan tentunya output yang dihasilkan menjadi baik.</p>
            <p></p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'peran-tpm-dalam-pabrik-automotive',
              'type' => 'article',
              'title' => 'Peran TPM Dalam Pabrik Automotive',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/01/total-productive-maintenance-1.jpeg',
              'tags' => 'IoT,kaizen,total productive maintenance,tpm',
              'date' => 'January 3, 2023',
              'content' => "
            
            <p>Kerusakan yang sering terjadi pada alat produksi biasanya disebabkan oleh kelalaian pada perawatannya. Imbas dengan kelalaian tersebut akhirnya mesin menjadi kurang terpelihara dan kualitas produksi menurun. Penerapan TPM yang tepat akan meningkatkan keefektifan dalam proses produksi. Selain itu, juga dapat terhindar dari berbagai macam masalah terkait produksi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penjelasan TPM</span></span>
            
            <p>TPM (Total Productive Maintenance) adalah metode yang dapat memberikan banyak keuntungan jika diterapkan di perusahaan. TPM adalah sebuah sistem yang digunakan untuk memelihara dan meningkatkan kualitas produksi bertujuan untuk menghindari kerusakan atau keterlambatan dalam proses produksi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penerapan TPM</span></span>
            
            <p>Penerapan TPM dalam pabrik otomotif sangatlah penting, tentunya guna meningkatkan kualitas dan memelihara kesehatan mesin. Langkah awal metode penerapan TPM dalam pabrik otomotif adalah dengam membuat tim TPM, membuat tujuan kebijakan dan sasaran TPM. Tujuannya supaya Tpm itu tersendiri memberikan hasil yang maksimal pada pabrik.</p>
            <p>Biasanya TMP pada pabrik otomotif memiliki 3 target utama yaitu :</p>
            <ol type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'><em>Zero product defect</em> (tidak ada produk yang cacat)</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'><em>Zero equipment unplanned failures</em> (tidak ada kerusakan peralatan yang belum terdeteksi)</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'><em>Zero accident</em> (tidak ada kecelakaan kerja)</span></span>
            </ol>
            <p>Target tersebut tentunya diimbangi dengan pemerataan sumber daya manusia agar dapat berjalan dengan lancar. Penggunaan TPM juga pada pabrik otomotif dapat mencegah terjadinya kerugian fatal seperti :</p>
            <ol type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'><em>Breakdown</em>, adalah kerugian akibat rusaknya mesin.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'><em>Small Stops</em>, adalah kerugian akibat terjadinya gangguan yang menyebabkan mesin tidak dapat beroperasi secara optimal.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'><em>Slow Running</em>, adalah kerugian yang terjadi karena mesin berjalan lambat tidak sesuai dengan kecepatan yang diinginkan.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'><em>Startup Defect</em>, yaitu kerugian yang diakibatkan terjadi cacat produk.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'><em>Production Defect</em>, yaitu kerugian yang terjadi karena banyaknya produk yang cacat dalam proses produksi.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'><em>Setup and Adjustments</em>, adalah kerugian yang diakibatkan perlunya persiapan ulang peralatan dan perlengkapan kerja.</span></span>
            </ol>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ],
            [
              'identifier' => 'peranan-big-data-di-logistik-dan-supply-chain',
              'type' => 'article',
              'title' => 'Peranan Big Data di Logistik dan Supply Chain',
              'img-path' => 'https://ravelware.files.wordpress.com/2023/01/big-data.jpg',
              'tags' => 'big data,Internet of Things,kaizen',
              'date' => 'January 2, 2023',
              'content' => "
            
            <p>Peranan Big data bagi operasional sendiri didapat dari peningkatan transparansi, perbaikan kinerja dan tentunya kualitas, serta pengoptimalan konsumsi sumber daya. Perusahaan bisa mengeksploitasi data dalam meningkatkan kualitas interaksi bersama pelanggan dalam memakai produk maupun layanan perusahaan.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penjelasan Big Data</span></span>
            
            <p>Big Data adalah kumpulan data yang bervolume besar dan terus bertambah setiap waktunya, baik yang terstruktur, semi terstruktur dan tidak terstruktur. Data ini timbul karena aktivitas internet yang makin rutin dilakukan baik itu bertujuan untuk diri sendiri maupun bisnis. Big Data biasanya dihimpun oleh organisasi atau lembaga tertentu, yang biasanya data tersebut dipakai dan diolah dalam berbagai program aplikasi.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Jenis Big Data</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Data Terstruktur : Data dapat langsung digunakan tanpa diolah terlebih dahulu.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Data Semi Terstruktur : Data harus diolah sebelum digunakan.</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Data Tidak Terstruktur : Data yang harus dianalisis, diolah kemudian baru dapat digunakan</span></span>
            
            <p>Dalam logistik yang berhubungan erat dengan supply chain, peranan big data adalah sebagai peran penting dalam meningkatkan supply chain. Salah satunya adalah untuk  meningkatkan pengiriman dan menjaga komunikasi antara produsen, pemasok dan konsumen. Big data juga dapat membantu proses pelacakan sebuah barang yang dan juga dapat mengetahui stok ketersediaan barang. Big data juga mampu menganalisis reaksi sentimen dan perilaku pasar atau tren tertentu sehingga produk dapat dilakukan sinkronasi dengan pelanggan bisnis.</p>
            
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Karakteristik Big Data</span></span>
            
            <p>Big Data Memiliki 5 karakteristik yang dapat diterapkan dalam logistik dan diharapkan dapat memberikan keunggulan yang kompetitif, yaitu :</p>
            <ol type=\"1\">
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Optimalisasi Operasional</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Penyerahan Barang Berwujud</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Sinkronisasi Dengan Pelanggan</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Cakupan Global</span></span>
            <span class='ps-4 d-block mb-2'><span class='d-list-item weight-700'>Jaringan Informasi</span></span>
            </ol>
            <p></p>
            <p>Ditulis oleh PT Ravelware Technology Indonesia</p>
            <p><a href=\"http://www.ravelware.co\" rel=\"nofollow\">http://www.ravelware.co</a></p>
            ",
              'views' => 0,
              'visitors' => 0,
              'likes' => 0
            ]
        ]);
        
    }
}
