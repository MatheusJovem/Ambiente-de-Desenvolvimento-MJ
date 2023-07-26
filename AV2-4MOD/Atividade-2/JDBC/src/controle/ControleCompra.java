package controle;

import domain.Dao;

import java.sql.SQLException;

import domain.Compra;

public class ControleCompra {

	private Compra co = new Compra(0, 0, null);
	private Dao daoC = new Dao();
	
	public void incluirSessao(int nItens, int total, String nomeCliente) throws SQLException {
		co.setItens(nItens);
		co.setTotal(total);
		co.setNomeCliente(nomeCliente);
		
		daoC.inserir(nItens, total, nomeCliente);
	}

}

