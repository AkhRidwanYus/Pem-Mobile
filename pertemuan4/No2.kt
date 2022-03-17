fun main(args: Array<String>) {
    val pangkat = {bila: Int, pang: Int -> (Math.pow(bila.toDouble(), pang.toDouble())).toInt()};
    println("4 pangkat 3 = ${pangkat(4, 3)}")
}
