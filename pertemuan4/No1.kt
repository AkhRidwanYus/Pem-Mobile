fun hitung(x1: Int, y1: Int, x2: Int, y2: Int){
    var aa :Int = 0;
    var bb :Int = 0;
    if (x1 > x2){
        aa = x1 - x2;
    }
    else {
        aa = x2 - x1;
    }
    if (y1 > y2){
        bb = y1 - y2;
    }
    else {
        bb = y2 - y1;
    }
    println("$aa + $bb")
    var hasil = Math.sqrt((aa*aa).toDouble() + (bb*bb).toDouble());
    println("jarak antara dua titik = " + hasil);
}

fun main() {
    //t1(2,3), t2(8,7)
	hitung(2, 3, 8, 7);  
    
    //t1(5,3), t2(-8,-4)
    hitung(5, 3, -8, -4);
}
