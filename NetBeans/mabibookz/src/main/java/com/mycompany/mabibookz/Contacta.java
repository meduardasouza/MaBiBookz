package com.mycompany.mabibookz;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author aluno
 */
public class Contacta {

    /**
     * @return the remetente
     */
    public Usador getRemetente() {
        return remetente;
    }

    /**
     * @param remetente the remetente to set
     */
    public void setRemetente(Usador remetente) {
        this.remetente = remetente;
    }

    /**
     * @return the destinatario
     */
    public Usador getDestinatario() {
        return destinatario;
    }

    /**
     * @param destinatario the destinatario to set
     */
    public void setDestinatario(Usador destinatario) {
        this.destinatario = destinatario;
    }

    /**
     * @return the texto
     */
    public String getTexto() {
        return texto;
    }

    /**
     * @param texto the texto to set
     */
    public void setTexto(String texto) {
        this.texto = texto;
    }

    /**
     * @return the data_hora
     */
    public int getData_hora() {
        return data_hora;
    }

    /**
     * @param data_hora the data_hora to set
     */
    public void setData_hora(int data_hora) {
        this.data_hora = data_hora;
    }
    
    public Usador remetente;
    public Usador destinatario;
    public String texto;
    public int data_hora;
    
}
