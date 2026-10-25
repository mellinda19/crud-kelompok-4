<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('siswas')->truncate();


        $data = [
            ['nis' => '22001', 'nama' => 'Aetheria Aurora', 'kelas' => 'XII PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2007-04-12', 'alamat' => 'Jl. Edelweis No. 1', 'keterangan' => 'Aktif'],
            ['nis' => '22002', 'nama' => 'Callista Senja', 'kelas' => 'XII PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2007-08-23', 'alamat' => 'Jl. Cempaka No. 5', 'keterangan' => 'Aktif'],
            ['nis' => '22003', 'nama' => 'Arjuna Kirana', 'kelas' => 'XII PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2007-01-15', 'alamat' => 'Jl. Pinus No. 18', 'keterangan' => 'Aktif'],
            ['nis' => '22004', 'nama' => 'Celestia Luna', 'kelas' => 'XI PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2008-05-30', 'alamat' => 'Jl. Lavender No. 9', 'keterangan' => 'Aktif'],
            ['nis' => '22005', 'nama' => 'Elio Baskara', 'kelas' => 'XI PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2008-11-04', 'alamat' => 'Jl. Surya No. 44', 'keterangan' => 'Aktif'],
            ['nis' => '22006', 'nama' => 'Hazel Samudra', 'kelas' => 'XI PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2008-03-19', 'alamat' => 'Jl. Ocean No. 27', 'keterangan' => 'Aktif'],
            ['nis' => '22007', 'nama' => 'Iris Calendula', 'kelas' => 'X PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-09-08', 'alamat' => 'Jl. Sakura No. 3', 'keterangan' => 'Aktif'],
            ['nis' => '22008', 'nama' => 'Zephyr Langit', 'kelas' => 'X PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-02-14', 'alamat' => 'Jl. Awan No. 15', 'keterangan' => 'Aktif'],
            ['nis' => '22009', 'nama' => 'Aora Bintang', 'kelas' => 'X PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-07-21', 'alamat' => 'Jl. Orion No. 88', 'keterangan' => 'Aktif'],
            ['nis' => '22010', 'nama' => 'Valerie Ranum', 'kelas' => 'XII PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2007-10-10', 'alamat' => 'Jl. Melati No. 21', 'keterangan' => 'Aktif'],
            ['nis' => '22011', 'nama' => 'Kaelen Arkana', 'kelas' => 'XII PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2007-06-18', 'alamat' => 'Jl. Anggrek No. 7', 'keterangan' => 'Aktif'],
            ['nis' => '22012', 'nama' => 'Thalia Niskala', 'kelas' => 'XII PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2007-12-02', 'alamat' => 'Jl. Dahlia No. 11', 'keterangan' => 'Aktif'],
            ['nis' => '22013', 'nama' => 'Damon Alantara', 'kelas' => 'XI PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2008-01-25', 'alamat' => 'Jl. Kenanga No. 14', 'keterangan' => 'Aktif'],
            ['nis' => '22014', 'nama' => 'Nandini Laksmi', 'kelas' => 'XI PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2008-04-09', 'alamat' => 'Jl. Kamboja No. 6', 'keterangan' => 'Aktif'],
            ['nis' => '22015', 'nama' => 'Rian Anantara', 'kelas' => 'XI PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2008-09-17', 'alamat' => 'Jl. Mawar No. 22', 'keterangan' => 'Aktif'],
            ['nis' => '22016', 'nama' => 'Vespera Zenith', 'kelas' => 'X PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-03-05', 'alamat' => 'Jl. Bogenvil No. 8', 'keterangan' => 'Aktif'],
            ['nis' => '22017', 'nama' => 'Gavin Senjaya', 'kelas' => 'X PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-08-19', 'alamat' => 'Jl. Teratai No. 33', 'keterangan' => 'Aktif'],
            ['nis' => '22018', 'nama' => 'Lumina Kirana', 'kelas' => 'X PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2009-11-28', 'alamat' => 'Jl. Flamboyan No. 4', 'keterangan' => 'Aktif'],
            ['nis' => '22019', 'nama' => 'Soren Byantara', 'kelas' => 'XII PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2007-05-14', 'alamat' => 'Jl. Kaktus No. 19', 'keterangan' => 'Aktif'],
            ['nis' => '22020', 'nama' => 'Nyx Ellora', 'kelas' => 'XI PPLG', 'jurusan' => 'PPLG', 'tanggal_lahir' => '2008-10-31', 'alamat' => 'Jl. Tulip No. 10', 'keterangan' => 'Aktif'],
        ];

        foreach ($data as $d) {
            Siswa::create($d);
        }
    }
}
