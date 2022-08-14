## Veritabanında ki users tablosunun içerisinde ki tüm verileri temizler(silinir)

$users = DB::table('users')->truncate();
