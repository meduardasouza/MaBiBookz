/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author aluno
 */
public class Usador {

    /**
     * @return the nome
     */
    public char getNome() {
        return nome;
    }

    /**
     * @param nome the nome to set
     */
    public void setNome(char nome) {
        this.nome = nome;
    }

    /**
     * @return the fixo
     */
    public Telefone getFixo() {
        return fixo;
    }

    /**
     * @param fixo the fixo to set
     */
    public void setFixo(Telefone fixo) {
        this.fixo = fixo;
    }

    /**
     * @return the endereco
     */
    public Logradouro getEndereco() {
        return endereco;
    }

    /**
     * @param endereco the endereco to set
     */
    public void setEndereco(Logradouro endereco) {
        this.endereco = endereco;
    }

    /**
     * @return the imagem
     */
    public String getImagem() {
        return imagem;
    }

    /**
     * @param imagem the imagem to set
     */
    public void setImagem(String imagem) {
        this.imagem = imagem;
    }

    /**
     * @return the cod_usuario
     */
    public String getCod_usuario() {
        return cod_usuario;
    }

    /**
     * @param cod_usuario the cod_usuario to set
     */
    public void setCod_usuario(String cod_usuario) {
        this.cod_usuario = cod_usuario;
    }

    /**
     * @return the email
     */
    public String getEmail() {
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
    private void setSenha(String senha) {
        this.senha = senha;
    }
    
    public String cod_usuario;
    public String email;
    private String senha;
    public char nome;
    public Telefone fixo;
    public Logradouro endereco;
    public String imagem;
    
    
}
