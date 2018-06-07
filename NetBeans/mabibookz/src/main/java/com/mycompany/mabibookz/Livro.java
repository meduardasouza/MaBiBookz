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
public class Livro {

    /**
     * @return the nome
     */
    public String getNome() {
        return nome;
    }

    /**
     * @param nome the nome to set
     */
    public void setNome(String nome) {
        this.nome = nome;
    }

    /**
     * @return the editora
     */
    public String getEditora() {
        return editora;
    }

    /**
     * @param editora the editora to set
     */
    public void setEditora(String editora) {
        this.editora = editora;
    }

    /**
     * @return the tipo
     */
    public char getTipo() {
        return tipo;
    }

    /**
     * @param tipo the tipo to set
     */
    public void setTipo(char tipo) {
        this.tipo = tipo;
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
    
    public String nome;
    public String editora;
    public char tipo;
    public String cod_livro;
    
}
