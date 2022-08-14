/* Veritabanı update */

//table('users') => users tablosu
//where('id', '=', 1) => ID'si 1 olan.
//update(['age' => 56]) => Yaşını güncelle.

$users = DB::table('users')->where('id', '=', 1)->update(['age' => 56]);