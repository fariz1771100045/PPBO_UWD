import java.awt.*;
import javax.swing.*;

public class ExampleTextField extends JFrame{
    private JTextField txt1;
    private JPasswordField pss1;
    private JTextArea txtA1;
    public ExampleTextField(){
        Container b = getContentPane();
        setLayout(new FlowLayout());
        
        txt1 = new JTextField(10);
        b.add(txt1);
        pss1 = new JPasswordField(10);
        b.add(pss1);
        
        txtA1 = new JTextArea(5,20);
        b.add(txtA1);
        setSize(300,160);
        show();
    }
        public static void main (String[]args){
            ExampleTextField a = new ExampleTextField();
  
    }
    
}
