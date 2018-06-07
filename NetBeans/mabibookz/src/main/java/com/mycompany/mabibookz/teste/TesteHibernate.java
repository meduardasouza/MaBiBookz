/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.mabibookz.teste;

import com.mycompany.mabibookz.Usador;
import org.hibernate.Session;
import org.hibernate.Transaction;
import util.SessaoHibernate;

/**
 *
 * @author aluno
 */
public class TesteHibernate {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        System.out.println("INICIANDO O HIBERNATE");
        Session sessao = SessaoHibernate.nova();
        
        System.out.println("CRIANDO O USUARIO");
        Usador user;
        user = new Usador();
        user.setEmail("megs.dl5462@gmail.com");
        user.setNome("Duds");
        user.setSenha("sete");
        user.setUsername("dudaso546uza");
        
        System.out.println("SALVANDO USUARIO");
        Transaction tx = sessao.beginTransaction();
        sessao.save(user);
        tx.commit();
        System.out.println("USUARIO SALVO");
        sessao.close();
        System.out.println("SESSAO FECHADA");
        
        sessao.save(user);
        sessao.close();
        
    }
}
