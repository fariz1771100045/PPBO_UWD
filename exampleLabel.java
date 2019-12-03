import java.awt.*;
import javax.swing.*;

public class exampleLabel extends JFrame{
    JLabel label1;
    FlowLayout f1;
    public exampleLabel(){
        Container b = getContentPane();
        label1 = new JLabel("Praktikum GUI");
        b.add(label1);
        setLayout(new FlowLayout());
        setSize(300,100);
        show();
    }
    public static void main(String[]args){
        exampleLabel a = new exampleLabel();
    }
}
