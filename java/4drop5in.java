/*
四舍五入,对浮点数加上0.5再强制转型
*/
public class Main {
    public static void main(String[] args) {
            double d = 2.6;
            int n = (int) (d + 0.5);
            System.out.println(n);
    }
}
