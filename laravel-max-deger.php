#Veritabanında maximum degeri getirir.


$users = DB::table('users')->max('created_at');
echo "En son kayıt tarihi: " . date("d/m/Y", strtotime($users));