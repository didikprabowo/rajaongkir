 
# Rajaongkir
Package Rajaongkir ini digunakan untuk melihat ongkos kirim pengiriman barang.

Package ini berisi data API sesuai yang di minta.

## Cara Instalasi 

**Instalasi**

Download package dengan composer
```
composer require didik/rajaongkir
```
atau
```
{
	"require": {
		"didik/rajaongkir": "dev-master",
	}
}
```

Tambahkan service provider ke config/app.php
```php
'providers' => [
	....
	
	 Rajaongkir\RajaongkirServiceProvider::class,,
]
```
Masukan konfigurasi 
```
php artisan vendor:publish
```
lalu ketik 1

## Cara menggunakan 

Pastikan anda sudah mmasukan namespace pada fungis
 ``` 
 use Rajaongkir\app\Rajaongkir;
```

### Melihat Daftar Semua Kota
```
    $city = new Rajaongkir;
    echo $city =  $client->atinker('city',1); // untuk data tunggal
    echo $city =  $client->atinker('city',1); // untuk semua
```
### Melihat Daftar Semua Provinsi
```
    $prov = new Rajaongkir;
    echo $prov =  $client->atinker('province',1); // untuk data tunggal
    echo $city =  $client->atinker('province'); // untuk semua
```

### Melihat Daftar Harga
METHOD = POST
```
    $cost = new Rajaongkir;
    echo $cost->cost(501,114,1700,"jne");
```