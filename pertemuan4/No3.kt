fun main(args: Array<String>) {
    val buku = Barang("buku", 2500, 12, 0.7);
    buku.tampil();
    buku.total();
}
class Barang(val nama: String = "Nama", val harga: Int = 0, val jumlah: Int = 0, val diskon: Double = 0.0){
    fun tampil(){
		println("Nama barang	: $nama");
        println("Harga barang	: $harga");
        println("Jumlah barang	: $jumlah");
        println("Diskon		: $diskon");
    }
    fun total(){
        var har = this.harga.toDouble();
        var jum = this.jumlah.toDouble();
        var total = (har * jum * this.diskon).toInt();
        println("Total Harga = $total")
    }
}
