<?php 

  namespace App\Models;

  use CodeIgniter\Model;
  use stdClass;

  class ProductModel extends Model {
    static $data = [
      [
        'id' => 1,
        'nama_produk' => 'Seagate SkyHawk Surveillance CCTV 2TB',
        'merek_produk' => 'Seagate',
        'jenis_produk' => 'Harddisk',
        'gambar_produk' => 'skyhawk-2tb.jpg',
        'harga_produk' => 899500,
        'deskripsi_produk' => '<p>Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.</p>

            <p>Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.</p>'
      ],
      [
        'id' => 2,
        'nama_produk' => 'HARDDISK WD PURPLE 2TB CCTV',
        'merek_produk' => 'WD',
        'jenis_produk' => 'Harddisk',
        'gambar_produk' => 'wd-purple-2tb-cctv.jpg',
        'harga_produk' => 550000,
        'deskripsi_produk' => '
          <p>HARD DISK Khusus untuk CCTV/Rakitan Computer<br />
          Hard Disk 2TB / 2000 Tera WDC Blue/Purple<br />
          Daya tahan lama<br />
          24 jam non-stop record<br />
          5400 RPM</p>

          <p>Dirancang khusus untuk CCTV:</p>
            <ul>
              <li>CCTV Analog (DVR)</li>
              <li>CCTV AHD (DVR AHD)</li>
              <li>IP Camera (NVR)</li>
            </ul>
          <p>Kemampuan rekaman lebih baik dibandingkan dengan harddisk pada umumnya</p>
        '
      ],
      [
        'id' => 3,
        'nama_produk' => 'CCTV Hikvision DS-2CE16D0T-EXIPF 2MP Outdoor',
        'merek_produk' => 'Hikvision',
        'jenis_produk' => 'CCTV',
        'gambar_produk' => 'CCTV-Hikvision DS-2CE16D0T.webp',
        'harga_produk' => 276000,
        'deskripsi_produk' => '
          <h5>Fitur</h5>
          <ul>
            <li>2MP CMOS Sensor</li>
            <li>1 PCS EXIR LED</li>
            <li>20M IR (Smart IR)</li>
            <li>Indoor EXIR Turret</li>
            <li>DNR,ICR, 0.02 Lux/F1.2</li>
            <li>12 VDC</li>
            <li>IP66</li>
            <li>4 IN1 (4 signals Switchable TVI/AHD/CVI/CVBS)</li>
          </ul>
        '
      ],
      [
        'id' => 4,
        'nama_produk' => 'CCTV Hikvision DS-2CE76D0T-EXIPF Indoor',
        'merek_produk' => 'Hikvision',
        'jenis_produk' => 'CCTV',
        'gambar_produk' => 'Hikvision-Turbo-HD-DS-2CE76D0T-EXIMF.webp',
        'harga_produk' => 253000,
        'deskripsi_produk' => '
          <h5>Fitur</h5>
          <ul>
            <li>2MP CMOS Sensor</li>
            <li>1 PCS EXIR LED</li>
            <li>20M IR (Smart IR)</li>
            <li>Indoor EXIR Turret</li>
            <li>DNR,ICR, 0.02 Lux/F1.2</li>
            <li>12 VDC</li>
            <li>4 IN1 (4 signals Switchable TVI/AHD/CVI/CVBS)</li>
          </ul>
        '
      ],
      [
        'id' => 5,
        'nama_produk' => 'Panasonic CV-CPW103L / CV-CPW103AL OUTDOOR CCTV',
        'merek_produk' => 'Panasonic',
        'jenis_produk' => 'CCTV',
        'gambar_produk' => 'Panasonic-CV-CPW103L-CV-CPW103AL-OUTDOOR-CCTV.jpg',
        'harga_produk' => 765000,
        'deskripsi_produk' => '
          <h5>Fitur</h5>
          <ul>
            <li>Kamera outdoor Panasonic CV-CPW103L</li>
            <li>specifications</li>
            <li>Image sensor : 1/2.9" 1.0 mega pixels CMOS</li>
            <li>Effective pixels : 1280(H) x 720 (V)</li>
            <li>Min illumination: 0.05lux / F: 1.6, 0lux IR on</li>
            <li>Max IR distance: 20m</li>
            <li>Focal Length : 3.6mm</li>
            <li>Angular Field of View: H: 88 V: 46</li>
            <li>Lens Type : M12</li>
            <li>Video output : 1CH BNC HD-CVI video output</li>
            <li>Power :DC 12V25%</li>
            <li>Power Consumption: 3.5W MAX</li>
            <li>Working Temperature: -30~+60.</li>
            <li>Less than 95% RH (no condensation)</li>
            <li>Dimensions :70 mm 154 mm</li>
            <li>Weight (approx.) :300g</li>
            <li>Installation Mode: Wall mount</li>
            <li>External Case : Metal</li>
          </ul>
        '
      ],
      [
        'id' => 6,
        'nama_produk' => 'Panasonic CV-CFN103L / CV-CFN103AL INDOOR CCTV',
        'merek_produk' => 'Panasonic',
        'jenis_produk' => 'CCTV',
        'gambar_produk' => 'Panasonic-CV-CFN103L-CV-CFN103AL-INDOOR-CCTV.jpg',
        'harga_produk' => 530000,
        'deskripsi_produk' => '
          <h5>Fitur</h5>
          <ul>
            <li>High-performance CMOS image sensor.</li>
            <li>Support 720p@25fps (PAL)/ 30fps (NTSC)</li>
            <li>Support 75-3 coaxial cable transmission over 800m.</li>
            <li>High speed & long distance real-time transmission.</li>
            <li>Support ICR for day time and night time operation.</li>
            <li>Support auto exposure, auto white balance, auto</li>
            <li>electronic shutter and auto gain function.</li>
            <li>Support DC12V power supply.</li>
            <li>Standard Accessories</li>
            <li>Quick guide....1 pc</li>
            <li>Important safety instruction.1 pc</li>
          </ul>
          
          <ul>
            <li>Parameter CV-CFN103L CV-CFN103LN</li>
            <li>Camera</li>
            <li>Image Sensor 1/2.9" 1.0 Mega Pixels CMOS</li>
            <li>Effective Pixels 1280 (H) x 720 (V)</li>
            <li>Min Illumination 0.05Lux/ F1.6, 0Lux IR on</li>
            <li>Electronic Shutter 1/50s~1/100,000s 1/60s~1/100,000s</li>
            <li>Video Frame Rate 25fps 30fps</li>
            <li>Synchronization Internal</li>
            <li>Day & Night Auto (ICR)/ Color/ B/W</li>
            <li>Max IR Distance 20m</li>
            <li>Digital Noise Reduction 2D</li>
            <li>White Balance Auto</li>
            <li>AGC Auto</li>
            <li>BLC Auto</li>
            <li>Lens</li>
            <li>Focal Length 3.6 mm</li>
            <li>Angular Field of View H: 88 V: 46</li>
            <li>Lens Type M12</li>
            <li>Input / Output</li>
            <li>Video Output 1 CH BNC HD-CVI video output</li>
            <li>General</li>
            <li>Power DC 12V25%</li>
            <li>Power Consumption 2.2W MAX</li>
            <li>Working Temperature -30~+60.</li>
            <li>Less than 95% RH (no condensation)</li>
            <li>Dimensions 85 mm 69 mm</li>
            <li>Weight (approx.) 100g</li>
            <li>Installation Mode Wall mount/ In-ceiling mount</li>
            <li>External Case Plastic</li>
          </ul>
        '
      ],
      [
        'id' => 7,
        'nama_produk' => 'Acti D31 CCTV Camera',
        'merek_produk' => 'ACTi',
        'jenis_produk' => 'CCTV',
        'gambar_produk' => 'Acti-D31-CCTV-Camera.jpg',
        'harga_produk' => 3350000,
        'deskripsi_produk' => '
          <p>CCTV Camera Acti D31 adalah IP Camera, dengan spesifikasi :</p>

          <ul>
            <li>1MP Bullet with D/N, Adaptive IR, Fixed Lens</li>
            <li>1 Megapixel with 720p</li>
            <li>Day & Night with Adaptive IR LED</li>
            <li>Fixed Lens with f4.2mm / F1.8</li>
            <li>30 fps at 1280 x 720</li>
            <li>Weatherproof (IP66)</li>
          </ul>
        '
      ],
      [
        'id' => 8,
        'nama_produk' => 'Acti D11 CCTV Camera',
        'merek_produk' => 'ACTi',
        'jenis_produk' => 'CCTV',
        'gambar_produk' => 'Acti-D11-CCTV-Camera.jpg',
        'harga_produk' => 2066000,
        'deskripsi_produk' => '
          <p>CCTV Camera ACTI D11 merupakan IP Cameran dengan resolusi 1MP, bentuk Cube dengan lensa fixed, f3.6mm/F2.0, H.264, 720p/30fps, DNR, POE</p>
        '
      ],
      [
        'id' => 9,
        'nama_produk' => 'Amtek AMT-2PTZ4M 4X Optical Zoom',
        'merek_produk' => 'AMTEK',
        'jenis_produk' => 'CCTV',
        'gambar_produk' => 'Amtek-AMT-2PTZ4M-4X-Optical-Zoom.jpg',
        'harga_produk' => 1800000,
        'deskripsi_produk' => '
          <ul>
            <li>PTZ camera 4X Optical Zoom</li>
            <li>HD-IP 1080P support H.265</li>
            <li>Lens: 4mm (2.8-12mm 4X zoom optical)</li>
            <li>Dual Light: IR/Full color mode free switching</li>
            <li>Two way audio: built in microphone and speaker</li>
            <li>IR distance aprox 50 m</li>
            <li>2.0 MP CMOS sensor</li>
            <li>Support auto white balance, auto focus, auto exposure, auto noise reduction, auto contrast adjustment.</li>
            <li>Full compatible ONVIF protocol</li>
            <li>Gross Weight 2 kg</li>
          </ul>
        '
      ],
      [
        'id' => 10,
        'nama_produk' => 'Kabel UTP Cat 6 BELDEN',
        'merek_produk' => 'Belden',
        'jenis_produk' => 'Cable',
        'gambar_produk' => 'belden-utp-cat6.jpg',
        'harga_produk' => 2126500,
        'deskripsi_produk' => '
          <ul>
            <li>Kabel Belden UTP cat.6 (7814A) merupakan kabel untuk jaringan ethernet gigabit dengan kecepatan 1000 Mbps.</li>

            <li>Panjang 1000 feet atau 305 meter.</li>

            <li>Warna Kabel abu-abu</li>
          </ul>
        '
      ],
    ];

    static $notuseData = [
      [
        'id' => 8,
        'nama_produk' => 'ANENG',
        'merek_produk' => 'ANENG',
        'jenis_produk' => 'Grounding',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 9,
        'nama_produk' => 'Dekko',
        'merek_produk' => 'Dekko',
        'jenis_produk' => 'Grounding',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 10,
        'nama_produk' => 'KYORITSU',
        'merek_produk' => 'KYORITSU',
        'jenis_produk' => 'Grounding',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 11,
        'nama_produk' => 'Fluke',
        'merek_produk' => 'Fluke',
        'jenis_produk' => 'Grounding',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 12,
        'nama_produk' => 'Sanwa',
        'merek_produk' => 'Sanwa',
        'jenis_produk' => 'Grounding',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 13,
        'nama_produk' => 'SEW',
        'merek_produk' => 'SEW',
        'jenis_produk' => 'Grounding',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 14,
        'nama_produk' => 'Hikvision',
        'merek_produk' => 'Hikvision',
        'jenis_produk' => 'NVR',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 15,
        'nama_produk' => 'Panasonic',
        'merek_produk' => 'Panasonic',
        'jenis_produk' => 'NVR',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 16,
        'nama_produk' => 'ACTi',
        'merek_produk' => 'ACTi',
        'jenis_produk' => 'NVR',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 17,
        'nama_produk' => 'AMTEK',
        'merek_produk' => 'AMTEK',
        'jenis_produk' => 'NVR',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 18,
        'nama_produk' => 'TP-Link',
        'merek_produk' => 'TP-Link',
        'jenis_produk' => 'Media-Converter',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 19,
        'nama_produk' => 'netLink',
        'merek_produk' => 'netLink',
        'jenis_produk' => 'Media-Converter',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 20,
        'nama_produk' => 'PREMIUM',
        'merek_produk' => 'PREMIUM',
        'jenis_produk' => 'Abcent-Machine',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 21,
        'nama_produk' => 'DELI',
        'merek_produk' => 'DELI',
        'jenis_produk' => 'Abcent-Machine',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 22,
        'nama_produk' => 'ICON',
        'merek_produk' => 'ICON',
        'jenis_produk' => 'Abcent-Machine',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 23,
        'nama_produk' => 'ZKTECO',
        'merek_produk' => 'ZKTECO',
        'jenis_produk' => 'Abcent-Machine',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 24,
        'nama_produk' => 'Solution',
        'merek_produk' => 'Solution',
        'jenis_produk' => 'Abcent-Machine',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 25,
        'nama_produk' => 'Hikvision',
        'merek_produk' => 'Hikvision',
        'jenis_produk' => 'Access-Control',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 26,
        'nama_produk' => 'ZKTECO',
        'merek_produk' => 'ZKTECO',
        'jenis_produk' => 'Access-Control',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 27,
        'nama_produk' => 'EMLOCK',
        'merek_produk' => 'EMLOCK',
        'jenis_produk' => 'Access-Control',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 28,
        'nama_produk' => 'FRAME',
        'merek_produk' => 'FRAME',
        'jenis_produk' => 'Access-Control',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 29,
        'nama_produk' => 'Bardi',
        'merek_produk' => 'Bardi',
        'jenis_produk' => 'IoT',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 30,
        'nama_produk' => 'SONOFF',
        'merek_produk' => 'SONOFF',
        'jenis_produk' => 'IoT',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
      [
        'id' => 31,
        'nama_produk' => 'LUMI',
        'merek_produk' => 'LUMI',
        'jenis_produk' => 'IoT',
        'gambar_produk' => 'skyhawk.jpg',
        'harga_produk' => 100000,
        'deskripsi_produk' => 'Seagate SkyHawk sangat sesuai untuk menjalankan Aplikasi DVR dan NVR pengawasan UKM.

            Dioptimalkan untuk DVR dan NVR, hard disk pengawasan SkyHawk disesuaikan untuk beban kerja 24/7 dalam kapasitas hingga 10 TB. Dilengkapi dengan firmware ImagePerfect yang semakin baik,
            SkyHawk membantu mengurangi bingkai yang hilang dan waktu lumpuh dengan 3 kali peringkat beban kerja dari hard disk desktop dan siap merekam hingga 90% dari waktu sekaligus mendukung
            hingga 64 kamera HD.

            Firmware ImagePerfect SkyHawk memungkinkan streaming video yang lancar dan jelas untuk lingkungan pengawasan 24/7 yang selalu nyala membantu untuk memastikan bisnis Anda mendapatkan
            lapisan perlindungan yang hebat.'
      ],
    ];

    public static function dataProducts() {
      $arrayData = self::$data;
      $object = json_decode(json_encode($arrayData), FALSE);
      return $object;
    }

    public static function itemProduct($id) {
      $products = static::dataProducts();
      $productItem = [];
      foreach($products as $product) {
        if($product->id == $id) {
          $productItem = $product;
        }
      }
      return $productItem;
    }
  }
?>