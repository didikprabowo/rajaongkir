 
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
	 Rajaongkir\RajaongkirServiceProvider::class,
]
```
Masukan konfigurasi 
```
php artisan vendor:publish
```
lalu ketik 1

Mengubah Konfigurasi

tambahkan konfigurasi di .env 
```
rajaongkir_url = 
rajaongkir_key = 
```

## Cara menggunakan 

Pastikan anda sudah menmbahkan namespace pada fungsi
 ``` 
 use Rajaongkir\app\Rajaongkir;
```

### Melihat Daftar Semua Kota
```
    $city = new Rajaongkir;
    echo $city =  $city->atinker('city'); // untuk data tunggal
    echo $city =  $city->atinker('city',1); // untuk semua
```
### Melihat Daftar Semua Provinsi
```
    $prov = new Rajaongkir;
    echo $prov =  $prov->atinker('province',1); // untuk data tunggal
    echo $city =  $prov->atinker('province'); // untuk semua
```

### Melihat Daftar Harga
METHOD = POST

Format = ({kotaasal},{kotatujuan},{berat]},{kurir})
```
    $cost = new Rajaongkir;
    echo $cost->cost(501,114,1700,"jne");
```