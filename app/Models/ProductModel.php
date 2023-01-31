<?php 

  namespace App\Models;

  use CodeIgniter\Model;

  class ProductModel extends Model {
    public function dataProduct() {
      $data = [
        [
          'id' => 1,
          'nama_produk' => 'Seagate Skyhawk',
          'jenis_produk' => 'Harddisk',
          'gambar_produk' => 'skyhawk.jpg',
          'harga_produk' => 100000
        ],
        [
          'id' => 2,
          'nama_produk' => 'WD Purple',
          'jenis_produk' => 'Harddisk',
          'gambar_produk' => 'img2.png',
          'harga_produk' => 100000
        ],
        [
          'id' => 3,
          'nama_produk' => 'Hikvision',
          'jenis_produk' => 'CCTV',
          'gambar_produk' => 'img2.png',
          'harga_produk' => 100000
        ],
        [
          'id' => 4,
          'nama_produk' => 'Panasonic',
          'jenis_produk' => 'CCTV',
          'gambar_produk' => 'img2.png',
          'harga_produk' => 100000
        ],
        [
          'id' => 5,
          'nama_produk' => 'ACTi',
          'jenis_produk' => 'CCTV',
          'gambar_produk' => 'img2.png',
          'harga_produk' => 100000
        ],
        [
          'id' => 6,
          'nama_produk' => 'AMTEK',
          'jenis_produk' => 'CCTV',
          'gambar_produk' => 'img2.png',
          'harga_produk' => 100000
        ],
        [
          'id' => 7,
          'nama_produk' => 'Belden',
          'jenis_produk' => 'Cable',
          'gambar_produk' => 'img2.png',
          'harga_produk' => 100000
        ],
        [
          'id' => 8,
          'nama_produk' => 'ANENG',
          'jenis_produk' => 'Grounding',
          'gambar_produk' => 'img2.png',
          'harga_produk' => 100000
        ],
        [
          'id' => 9,
          'nama_produk' => 'Dekko',
          'jenis_produk' => 'Grounding',
          'gambar_produk' => 'img2.png',
          'harga_produk' => 100000
        ],
        [
          'id' => 10,
          'nama_produk' => 'KYORITSU',
          'jenis_produk' => 'Grounding',
          'gambar_produk' => 'img2.png',
          'harga_produk' => 100000
        ],
        [
          'id' => 11,
          'nama_produk' => 'Fluke',
          'jenis_produk' => 'Grounding',
          'gambar_produk' => 'img2.png',
          'harga_produk' => 100000
        ],
        [
          'id' => 12,
          'nama_produk' => 'Sanwa',
          'jenis_produk' => 'Grounding',
          'gambar_produk' => 'img2.png',
          'harga_produk' => 100000
        ],
        [
          'id' => 13,
          'nama_produk' => 'SEW',
          'jenis_produk' => 'Grounding',
          'gambar_produk' => 'img2.png',
          'harga_produk' => 100000
        ],
        [
          'id' => 14,
          'nama_produk' => 'Hikvision',
          'jenis_produk' => 'NVR',
          'gambar_produk' => 'img2.png',
          'harga_produk' => 100000
        ],
        [
          'id' => 15,
          'nama_produk' => 'Panasonic',
          'jenis_produk' => 'NVR',
          'gambar_produk' => 'img2.png',
          'harga_produk' => 100000
        ],
        [
          'id' => 16,
          'nama_produk' => 'ACTi',
          'jenis_produk' => 'NVR',
          'gambar_produk' => 'img2.png',
          'harga_produk' => 100000
        ],
        [
          'id' => 17,
          'nama_produk' => 'AMTEK',
          'jenis_produk' => 'NVR',
          'gambar_produk' => 'img2.png',
          'harga_produk' => 100000
        ],
      ];

      return $data;
    }
  }
?>