
import javax.swing.JFrame;

public class exampleJFrame {
    private JFrame contohFrame;
    public exampleJFrame(){
        contohFrame = new JFrame("Contoh JFrame");
    }
    public void launchFrame(){
        contohFrame.setSize(400,200);
        contohFrame.setResizable(false);
        contohFrame.setVisible(true);
    }
    public static void main(String[]args){
        exampleJFrame a = new exampleJFrame();
        a.launchFrame();
    }
}
