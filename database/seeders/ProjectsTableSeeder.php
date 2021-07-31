<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projectsRecords = [
            ['id' => 1, 'nama_project' =>'LANTAMAL V TNI AL Surabaya', 'nama_sub_project' => 'Pembangunan Main Gate Penjagaan Fasilitas TNI AL LANTAMAL V', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'TNI AL LANTAMAL V', 'status' => 1],
            ['id' => 2, 'nama_project' =>'LANTAMAL V TNI AL Surabaya', 'nama_sub_project' => 'Perencanan Pembangunan Gedung Serba Guna Lantamal V', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'TNI AL LANTAMAL V', 'status' => 1],
            ['id' => 3, 'nama_project' =>'LANTAMAL V TNI AL Surabaya', 'nama_sub_project' => 'Perencanan Pembangunan Mess Perwira Lantamal V', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'TNI AL LANTAMAL V', 'status' => 1],
            ['id' => 4, 'nama_project' =>'LANTAMAL V TNI AL Surabaya', 'nama_sub_project' => 'Perencanan Pembangunan Mess Perwira Lantamal V', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'TNI AL LANTAMAL V', 'status' => 1],
            ['id' => 5, 'nama_project' =>'LANTAMAL V TNI AL Surabaya', 'nama_sub_project' => 'Perencanan Pembangunan Gedung Serba Guna Lantamal V', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'TNI AL LANTAMAL V', 'status' => 1],
            ['id' => 6, 'nama_project' =>'PT. WIJAYA KARYA ( Persero ) Tbk', 'nama_sub_project' => 'Pembangunan Jalan Toll SUMO Section 1 dan 2', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'PT. WIJAYA KARYA ( Persero ) Tbk', 'status' => 1],
            ['id' => 7, 'nama_project' =>'PT. WIJAYA KARYA ( Persero ) Tbk', 'nama_sub_project' => 'Pembangunan Jalan Toll SOKER Phase 1', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'PT. WIJAYA KARYA ( Persero ) Tbk', 'status' => 1],
            ['id' => 8, 'nama_project' =>'PT. PP ( Persero ) Tbk', 'nama_sub_project' => 'Pembangunan Jalan Toll Pandaan Malang Section 1,2 dan 3', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'PT. PP ( Persero ) Tbk', 'status' => 1],
            ['id' => 9, 'nama_project' =>'PT. PP ( Persero ) Tbk', 'nama_sub_project' => 'Pembangunan Jalan Toll Pandaan Malang Section 4 A', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'PT. PP ( Persero ) Tbk', 'status' => 1],
            ['id' => 10,'nama_project' =>'KODAM V BRAWIJAYA', 'nama_sub_project' => 'Pengadaan  Material Bahan Bangunan Rehap Rumah Tidak Layak Huni', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'KODAM V BRAWIJAYA', 'status' => 1],
            ['id' => 11,'nama_project' =>'KODAM V BRAWIJAYA', 'nama_sub_project' => 'Pengadaan  Material Bahan Bangunan Rehap Rumah Tidak Layak Huni', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'KODAM V BRAWIJAYA', 'status' => 1],
            ['id' => 12,'nama_project' =>'KODIM 0813 Kabupaten Bojonegoro ', 'nama_sub_project' => 'Pengadaan Material Bahan Bangunan & Sewa Alat Kegiatan Karya Bakti Skala Besar ( KBSB ) Kodim 0813 Kab. Bojonegoro Tahun Anggaran 2019', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'KODIM 0813', 'status' => 1],
            ['id' => 13,'nama_project' =>'KODAM V BRAWIJAYA', 'nama_sub_project' => 'Pekerjaan Renovasi Aula dan Mako Dodiklatpur Rindam V Brawijaya', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'KODAM V BRAWIJAYA', 'status' => 1],
            ['id' => 14,'nama_project' =>'KODAM V BRAWIJAYA', 'nama_sub_project' => 'Pembangunan Lab PCR di RS DKT BALADIKA HUSADA Kab.Jember', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'KODAM V BRAWIJAYA', 'status' => 1],
            ['id' => 15,'nama_project' =>'KODIM 0813 Kabupaten Bojonegoro', 'nama_sub_project' => 'Pengadaan Material Bahan Bangunan & Sewa Alat Kegiatan Karya Bakti Skala Besar ( KBSB ) Kodim 0813 Kab. Bojonegoro Tahun Anggaran 2020', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'KODIM 0813', 'status' => 1],
            ['id' => 16,'nama_project' =>'RS DKT BALADIKA HUSADA ', 'nama_sub_project' => 'Pembangunan Lab Darah di RS DKT BALADIKA HUSADA Kab.Jember', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'', 'status' => 1],
            ['id' => 17,'nama_project' =>'PT.PP ( Persero ) Tbk', 'nama_sub_project' => 'Project Bendungan way Sekampung Lampung Pengadaan Material Batu Split ukuran 1-2 cm dan 2-3 cm, Batu Belah, Batu Border', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'PT.PP ( Persero ) Tbk', 'status' => 1],
            ['id' => 18,'nama_project' =>'PT. BATU SUMBER MULYA', 'nama_sub_project' => 'Pekerjaan Penambangan Batu Andesit di Kab. Pringsewu Provinsi Lampung', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'PT. BATU SUMBER MULYA ', 'status' => 1],
            ['id' => 19,'nama_project' =>'KODIM 0813 Kabupaten Bojonegoro ', 'nama_sub_project' => 'Pengadaan Material Bahan Bangunan & Sewa Alat Kegiatan Karya Bakti Skala Besar  ( KBSB ) Tahap-2 Kodim 0813 Kab. Bojonegoro Tahun Anggaran 2020', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'KODIM 0813', 'status' => 1],
            ['id' => 20,'nama_project' =>'DISKESAL KOARMADA 2', 'nama_sub_project' => 'Renovasi Besar R81 Menjadi Ruang Isolasi Pasien Covid-19 bertekanan Negatif kapasitas 47 Bed', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'DISKESAL KOARMADA 2', 'status' => 1],
            ['id' => 21,'nama_project' =>'Delivered', 'nama_sub_project' => '', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'', 'status' => 1],
            ['id' => 22,'nama_project' =>'RS MARINIR EWA PANGALILA', 'nama_sub_project' => 'Renovasi Ruang Isolasi Pasien Covid-19 bertekanan Negatif Kapasitas 6 Bed', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'RS MARINIR EWA PANGALILA', 'status' => 1],
            ['id' => 23,'nama_project' =>'RS SOEKANTYO JAHJA LANUDAL JUANDA', 'nama_sub_project' => 'Pembangunan Fasilitas Container LAB PCR', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'RS SOEKANTYO JAHJA', 'status' => 1],
            ['id' => 24,'nama_project' =>'RS AL Dr. RAMELAN SURABAYA', 'nama_sub_project' => 'Pembangunan Fasilitas Container LAB PCR', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'RS AL Dr.RAMELAN', 'status' => 1],
            ['id' => 25,'nama_project' =>'KODAM V BRAWIJAYA', 'nama_sub_project' => 'Pengadaan  Material Bahan Bangunan Rehap Rumah Tidak Layak Huni', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'KODAM V BRAWIJAYA', 'status' => 1],
            ['id' => 26,'nama_project' =>'KODAM V BRAWIJAYA', 'nama_sub_project' => 'Pengadaan  Material Bahan Bangunan Jambanisasi', 'tanggal_awal' => '', 'tanggal_akhir' => '', 'pemilik_pekerjaan' =>'KODAM V BRAWIJAYA', 'status' => 1],
        ];

        Project::insert($projectsRecords);
    }
}
