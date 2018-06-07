package com.mycompany.mabibookz;

import java.io.Serializable;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author aluno
 */

@Entity
public class Usador implements Serializable {

    /**
     * @return the cod_usuario
     */
    private String getCod_usuario() {
        return cod_usuario;
    }

    /**
     * @param cod_usuario the cod_usuario to set
     */
    private void setCod_usuario(String cod_usuario) {
        this.cod_usuario = cod_usuario;
    }

    /**
     * @return the username
     */
    private String getUsername() {
        return username;
    }

    /**
     * @param username the username to set
     */
    public void setUsername(String username) {
        this.username = username;
    }

    /**
     * @return the email
     */
    private String getEmail() {
        return email;
    }

    /**
     * @param email the email to set
     */
    public void setEmail(String email) {
        this.email = email;
    }

    /**
     * @return the senha
     */
    private String getSenha() {
        return senha;
    }

    /**
     * @param senha the senha to set
     */
    public void setSenha(String senha) {
        this.senha = senha;
    }

    /**
     * @return the nome
     */
    private String getNome() {
        return nome;
    }

    /**
     * @param nome the nome to set
     */
    public void setNome(String nome) {
        this.nome = nome;
    }

    /**
     * @return the Telefone
     */
    private String getTelefone() {
        return Telefone;
    }

    /**
     * @param Telefone the Telefone to set
     */
    public void setTelefone(String Telefone) {
        this.Telefone = Telefone;
    }

    /**
     * @return the Logradouro
     */
    private String getLogradouro() {
        return Logradouro;
    }

    /**
     * @param Logradouro the Logradouro to set
     */
    private void setLogradouro(String Logradouro) {
        this.Logradouro = Logradouro;
    }

    /**
     * @return the imagem
     */
    private String getImagem() {
        return imagem;
    }

    /**
     * @param imagem the imagem to set
     */
    private void setImagem(String imagem) {
        this.imagem = imagem;
    }

    /**
     * @return the username
     */
    

    /**
     *
     */
    @Id
    @GeneratedValue
    
     private String cod_usuario;
     private String username;
     private String email;
     private String senha;
     private String nome;
     private String Telefone;
     private String Logradouro ;
     private String imagem;

   

   
    


   

    
       
    }
    
    

