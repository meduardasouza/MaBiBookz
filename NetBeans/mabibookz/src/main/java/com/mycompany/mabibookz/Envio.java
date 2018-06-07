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
public class Envio {

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
     * @return the cod_envio
     */
    public String getCod_envio() {
        return cod_envio;
    }

    /**
     * @param cod_envio the cod_envio to set
     */
    public void setCod_envio(String cod_envio) {
        this.cod_envio = cod_envio;
    }

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
     * @return the cod_livro
     */
    public String getCod_livro() {
        return cod_livro;
    }

    /**
     * @param cod_livro the cod_livro to set
     */
    public void setCod_livro(String cod_livro) {
        this.cod_livro = cod_livro;
    }
    
    public String cod_envio;
    public Usador remetente;
    public Usador destinatario;
    public String cod_livro;
}
