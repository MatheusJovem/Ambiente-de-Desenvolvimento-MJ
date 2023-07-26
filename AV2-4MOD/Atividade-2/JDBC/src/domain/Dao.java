package domain;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;

public class Dao {
	static final String url = "jdbc:mysql://localhost:8080/Compra";
	
	public void inserir(int nItens, int total, String clienteNome) throws SQLException {
		String sql = "INSERT INTO carrinho (nItens, total, clienteNome) VALUES ('" + nItens + "', '" + total + "', '" + clienteNome + "')";
			Connection con = DriverManager.getConnection(url, "mysql", "local");
			PreparedStatement inclui = con.prepareStatement(sql);
			inclui.execute();
	}
}