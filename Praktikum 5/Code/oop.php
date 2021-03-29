<?php 
	/*
		Membuat class Car.
		Class dapat dikatakan sebagai model atau blueprint untuk membuat sebuah produk atau object.
	 */
	class Car {
		/*
			Membuat atribut atau properti yang dibutuhkan oleh Class Car.
			Properti sama seperti variabel, hannya saja di dalam class disebut properti.
		 */
		public $nama;
		public $warna;

		/*
			Method constructor, method yang otomatis berjalan ketika membuat class.
			Biasanya digunakan untuk mengisi nilai awal pada pembuatan class.
		 */
		function __construct($nama, $warna) {
			echo "Method construct otomatis dijalankan ketika membuat object dibuat <br>";
			$this->nama = $nama;
			$this->warna = $warna;
		}

		/*
			Membuat method atau perilaku yang dibutuhkan oleh Class Car
			Method sama seperti function, hanya saja di dalam class disebut method.
		 */
		function maju() {
			echo "Mobil {$this->nama} maju <br>";
		}
		function mundur() {
			echo "Mobil {$this->nama} mundur <br>";
		}
	}

	/*
		Membuat object atau produk dari class Car.
		Objet yang dibuat adalah mobil avanza.
	 */
	echo "<h2>Mobil Avanza</h2>";
	$avanza = new Car("Avanza GT 101", "Merah");
	echo "Mobil {$avanza->nama} berwarna {$avanza->warna}";
	$avanza->maju();
	$avanza->mundur();
	echo "<br>";

	/*
		Membuat object atau produk dari class Car.
		Objet yang dibuat adalah mobil toyota.
	 */
	echo "<h2>Mobil Toyota</h2>";
	$toyota = new Car("Toyota Dai Z11", "Biru");
	echo "Mobil {$toyota->nama} berwarna {$toyota->warna}";
	$toyota->maju();
	$toyota->mundur();

?>