package view;
import controle.ControleCompra;

import java.awt.*;
import java.awt.event.*;
import javax.swing.*;
import javax.swing.event.*;

public class JanelaCompra extends JPanel {
    private JPasswordField campoItens;
    private JButton enviar;
    private JLabel labelItens;
    private JLabel total;
    private JTextField campoTotal;
    private JTextField campoNomeCliente;
    private JLabel labelCliente;

    public JanelaCompra() {
        //construct components
        campoItens = new JPasswordField (5);
        enviar = new JButton ("Enviar");
        labelItens = new JLabel ("Numero de Itens");
        total = new JLabel ("Valor Total");
        campoTotal = new JTextField (5);
        campoNomeCliente = new JTextField (5);
        labelCliente = new JLabel ("Nome do Cliente");

        //adjust size and set layout
        setPreferredSize (new Dimension (944, 574));
        setLayout (null);

        //add components
        add (campoItens);
        add (enviar);
        add (labelItens);
        add (total);
        add (campoTotal);
        add (campoNomeCliente);
        add (labelCliente);

        //set component bounds (only needed by Absolute Positioning)
        campoItens.setBounds (50, 65, 195, 30);
        enviar.setBounds (50, 240, 100, 25);
        labelItens.setBounds (50, 40, 100, 25);
        total.setBounds (50, 105, 100, 25);
        campoTotal.setBounds (50, 130, 195, 30);
        campoNomeCliente.setBounds (50, 195, 195, 30);
        labelCliente.setBounds (50, 170, 100, 25);
    }
}

