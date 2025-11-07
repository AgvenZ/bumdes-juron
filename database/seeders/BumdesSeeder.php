<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bumdes;
use App\Models\OrganizationPosition;
use App\Models\Unit;
use App\Models\UnitPhoto;
use App\Models\Document;

class BumdesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create BUMDes
        $bumdes = Bumdes::create([
            'name' => 'BUMDes Juron',
            'logo_path' => 'images/logo-bumdes.png',
            'sk_path' => 'documents/sk-bumdes.pdf',
            'description' => 'Badan Usaha Milik Desa Juron didirikan pada tahun 2020 dengan tujuan untuk meningkatkan perekonomian desa, mengoptimalkan aset desa, dan meningkatkan kesejahteraan masyarakat melalui berbagai unit usaha yang dikelola secara profesional.'
        ]);

        // Create Organization Positions
        $positions = [
            [
                'bumdes_id' => $bumdes->id,
                'title' => 'Komisaris',
                'name' => 'H. Sutrisno',
                'photo_path' => 'images/organization/komisaris.jpg',
                'phone' => '081234567890',
                'order_num' => 1
            ],
            [
                'bumdes_id' => $bumdes->id,
                'title' => 'Direktur',
                'name' => 'Bambang Widodo',
                'photo_path' => 'images/organization/direktur.jpg',
                'phone' => '081234567891',
                'order_num' => 2
            ],
            [
                'bumdes_id' => $bumdes->id,
                'title' => 'Sekretaris',
                'name' => 'Siti Aminah',
                'photo_path' => 'images/organization/sekretaris.jpg',
                'phone' => '081234567892',
                'order_num' => 3
            ],
            [
                'bumdes_id' => $bumdes->id,
                'title' => 'Bendahara',
                'name' => 'Joko Susilo',
                'photo_path' => 'images/organization/bendahara.jpg',
                'phone' => '081234567893',
                'order_num' => 4
            ]
        ];

        foreach ($positions as $position) {
            OrganizationPosition::create($position);
        }

        // Create Units
        $units = [
            [
                'bumdes_id' => $bumdes->id,
                'name' => 'Pengelolaan Pasar Desa',
                'description' => 'Unit usaha ini mengelola pasar desa yang menjadi pusat perdagangan produk-produk lokal. Pasar desa menyediakan tempat bagi para petani dan pengrajin lokal untuk menjual hasil produksi mereka secara langsung kepada konsumen.',
                'manager_name' => 'Hendra Wijaya',
                'manager_phone' => '081234567894'
            ],
            [
                'bumdes_id' => $bumdes->id,
                'name' => 'Simpan Pinjam',
                'description' => 'Unit usaha simpan pinjam memberikan layanan keuangan mikro kepada masyarakat desa. Dengan bunga yang terjangkau, unit ini membantu masyarakat mengembangkan usaha dan memenuhi kebutuhan finansial mereka.',
                'manager_name' => 'Dewi Sartika',
                'manager_phone' => '081234567895'
            ],
            [
                'bumdes_id' => $bumdes->id,
                'name' => 'Wisata Desa',
                'description' => 'Unit wisata desa mengembangkan dan mengelola potensi wisata yang ada di desa. Dari wisata alam, budaya, hingga kuliner, unit ini berupaya menarik pengunjung dan meningkatkan pendapatan desa melalui sektor pariwisata.',
                'manager_name' => 'Agus Santoso',
                'manager_phone' => '081234567896'
            ],
            [
                'bumdes_id' => $bumdes->id,
                'name' => 'Pertanian Terpadu',
                'description' => 'Unit pertanian terpadu mengelola lahan pertanian desa dengan sistem modern dan berkelanjutan. Unit ini juga memberikan pelatihan dan pendampingan kepada petani lokal untuk meningkatkan hasil panen mereka.',
                'manager_name' => 'Taufik Hidayat',
                'manager_phone' => '081234567897'
            ],
            [
                'bumdes_id' => $bumdes->id,
                'name' => 'Kerajinan Desa',
                'description' => 'Unit kerajinan desa memproduksi dan memasarkan berbagai produk kerajinan khas desa. Unit ini juga memberikan pelatihan kepada masyarakat untuk mengembangkan keterampilan dalam membuat kerajinan.',
                'manager_name' => 'Rina Wati',
                'manager_phone' => '081234567898'
            ],
            [
                'bumdes_id' => $bumdes->id,
                'name' => 'Pengelolaan Air Bersih',
                'description' => 'Unit pengelolaan air bersih bertanggung jawab untuk menyediakan akses air bersih bagi seluruh masyarakat desa. Unit ini mengelola instalasi air dan memastikan distribusi air yang merata ke seluruh wilayah desa.',
                'manager_name' => 'Budi Santoso',
                'manager_phone' => '081234567899'
            ]
        ];

        foreach ($units as $unit) {
            Unit::create($unit);
        }

        // Create Unit Photos
        $unitPhotos = [
            [
                'unit_id' => 1,
                'caption' => 'Bangunan Pasar Desa',
                'photo_path' => 'images/units/pasar1.jpg'
            ],
            [
                'unit_id' => 1,
                'caption' => 'Aktivitas Jual Beli di Pasar',
                'photo_path' => 'images/units/pasar2.jpg'
            ],
            [
                'unit_id' => 2,
                'caption' => 'Kantor Simpan Pinjam',
                'photo_path' => 'images/units/simpan-pinjam1.jpg'
            ],
            [
                'unit_id' => 3,
                'caption' => 'Objek Wisata Desa',
                'photo_path' => 'images/units/wisata1.jpg'
            ],
            [
                'unit_id' => 3,
                'caption' => 'Kegiatan Wisata Desa',
                'photo_path' => 'images/units/wisata2.jpg'
            ],
            [
                'unit_id' => 4,
                'caption' => 'Lahan Pertanian Terpadu',
                'photo_path' => 'images/units/pertanian1.jpg'
            ],
            [
                'unit_id' => 5,
                'caption' => 'Produk Kerajinan Desa',
                'photo_path' => 'images/units/kerajinan1.jpg'
            ],
            [
                'unit_id' => 6,
                'caption' => 'Instalasi Air Bersih',
                'photo_path' => 'images/units/air1.jpg'
            ]
        ];

        foreach ($unitPhotos as $photo) {
            UnitPhoto::create($photo);
        }

        // Create Documents
        $documents = [
            [
                'bumdes_id' => $bumdes->id,
                'title' => 'SK Pembentukan BUMDes Juron',
                'doc_path' => 'documents/sk-pembentukan.pdf',
                'doc_type' => 'Surat Keputusan'
            ],
            [
                'bumdes_id' => $bumdes->id,
                'title' => 'Anggaran Dasar BUMDes Juron',
                'doc_path' => 'documents/anggaran-dasar.pdf',
                'doc_type' => 'Anggaran Dasar'
            ],
            [
                'bumdes_id' => $bumdes->id,
                'title' => 'Laporan Keuangan Tahunan 2023',
                'doc_path' => 'documents/laporan-keuangan-2023.pdf',
                'doc_type' => 'Laporan Keuangan'
            ],
            [
                'bumdes_id' => $bumdes->id,
                'title' => 'SK Pengangkatan Pengurus BUMDes',
                'doc_path' => 'documents/sk-pengangkatan.pdf',
                'doc_type' => 'Surat Keputusan'
            ],
            [
                'bumdes_id' => $bumdes->id,
                'title' => 'Rencana Kerja BUMDes 2024',
                'doc_path' => 'documents/rencana-kerja-2024.pdf',
                'doc_type' => 'Rencana Kerja'
            ],
            [
                'bumdes_id' => $bumdes->id,
                'title' => 'Perdes No. 5 Tahun 2022 tentang BUMDes',
                'doc_path' => 'documents/perdes-5-2022.pdf',
                'doc_type' => 'Peraturan Desa'
            ],
            [
                'bumdes_id' => $bumdes->id,
                'title' => 'Perdes No. 7 Tahun 2022 tentang Pengelolaan Aset Desa',
                'doc_path' => 'documents/perdes-7-2022.pdf',
                'doc_type' => 'Peraturan Desa'
            ],
            [
                'bumdes_id' => $bumdes->id,
                'title' => 'Perdes No. 3 Tahun 2023 tentang Alokasi Dana Desa',
                'doc_path' => 'documents/perdes-3-2023.pdf',
                'doc_type' => 'Peraturan Desa'
            ]
        ];

        foreach ($documents as $document) {
            Document::create($document);
        }
    }
}