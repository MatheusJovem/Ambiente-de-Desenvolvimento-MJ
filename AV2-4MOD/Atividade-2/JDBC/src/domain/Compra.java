package domain;

public class Compra {
	private int nItens, total;
	private String nomeCliente;
	
	public Compra(int nItens, int total, String nomeCliente) {
		this.nItens = nItens;
		this.total = total;
		this.nomeCliente = nomeCliente;
	}

	public int getItens() {
		return nItens;
	}

	public void setItens(int nItens) {
		this.nItens = nItens;
	}

	public int getTotal() {
		return total;
	}

	public void setTotal(int total) {
		this.total = total;
	}

	public String getNomeCliente() {
		return nomeCliente;
	}

	public void setNomeCliente(String nomeCliente) {
		this.nomeCliente = nomeCliente;
	}
}