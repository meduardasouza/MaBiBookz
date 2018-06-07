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
public class Logradouro {

    /**
     * @return the pais
     */
    public char getPais() {
        return pais;
    }

    /**
     * @param pais the pais to set
     */
    public void setPais(char pais) {
        this.pais = pais;
    }

    /**
     * @return the cidade
     */
    public char getCidade() {
        return cidade;
    }

    /**
     * @param cidade the cidade to set
     */
    public void setCidade(char cidade) {
        this.cidade = cidade;
    }

    /**
     * @return the estado
     */
    public char getEstado() {
        return estado;
    }

    /**
     * @param estado the estado to set
     */
    public void setEstado(char estado) {
        this.estado = estado;
    }

    /**
     * @return the bairro
     */
    public char getBairro() {
        return bairro;
    }

    /**
     * @param bairro the bairro to set
     */
    public void setBairro(char bairro) {
        this.bairro = bairro;
    }
    
    public char pais;
    public char cidade;
    public char estado;
    public char bairro;
    public char endereco;
    
}
