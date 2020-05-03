import javax.swing.*;
import java.sql.*;

public class Main {
	static Connection con;
	
	public static Connection getDatabaseConnection() {
		Connection tmpCon;
		String connectionUrl = "jdbc:mariadb://localhost:3306/planeta?user=root&password=";
		try {
			Class.forName("org.mariadb.jdbc.Driver");
			tmpCon = DriverManager.getConnection(connectionUrl);
			System.out.println("Successfuly connection");
			return tmpCon;
		} catch(Exception e) {
			System.err.println("Failed to connect to " + connectionUrl);
			return null;
		}
	}
	
	public static void main(String[] args) {
		con = getDatabaseConnection();
		try {
			Statement stmt = con.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.CONCUR_READ_ONLY);
			ResultSet rs = stmt.executeQuery("Select * from zivocich");
			while (rs.next())
		    {
		        int id = rs.getInt("id");
		        String nazev = rs.getString("nazev");
		        String latina = rs.getString("latina");
		        String rise = rs.getString("rise");
		        String podrise = rs.getString("podrise");
		        int domaci = rs.getInt("domaci");
		        String kontinent = rs.getString("kontinent");
		        int chraneny = rs.getInt("chraneny");
		        
		        System.out.println(id + ", " + nazev + ", " + latina + ", " + rise + ", " + podrise + ", " + domaci + ", " + kontinent + ", " + chraneny);
		    }
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}

}
