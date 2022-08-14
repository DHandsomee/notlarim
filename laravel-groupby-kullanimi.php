    $users = DB::table('users')->groupBy('age')->get();
    dd($users);

## ÖNEMLİ NOT ##
Eğer çalışmaz hata alırsan, config/database.php içerisinde "'strict' => false," olarak ayarla.
