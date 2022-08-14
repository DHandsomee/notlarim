#dd($users); // Ekrana yazdırmak için
#orderBy // Alfabetik sırlaamak için
    
    $users = DB::table('users')->orderBy('name', 'asc')->get();
    dd($users);
