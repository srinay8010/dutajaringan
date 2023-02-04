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
        'nama_produk' => 'WD Purple',
        'merek_produk' => 'WD',
        'jenis_produk' => 'Harddisk',
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
        'id' => 3,
        'nama_produk' => 'Hikvision',
        'merek_produk' => 'Hikvision',
        'jenis_produk' => 'CCTV',
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
        'id' => 4,
        'nama_produk' => 'Panasonic',
        'merek_produk' => 'Panasonic',
        'jenis_produk' => 'CCTV',
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
        'id' => 5,
        'nama_produk' => 'ACTi',
        'merek_produk' => 'ACTi',
        'jenis_produk' => 'CCTV',
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
        'id' => 6,
        'nama_produk' => 'AMTEK',
        'merek_produk' => 'AMTEK',
        'jenis_produk' => 'CCTV',
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
        'id' => 7,
        'nama_produk' => 'Belden',
        'merek_produk' => 'Belden',
        'jenis_produk' => 'Cable',
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