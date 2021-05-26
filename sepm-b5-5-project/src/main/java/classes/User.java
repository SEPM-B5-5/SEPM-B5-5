package classes;

public class User {
	public static String username;
	public String password;

	public User(String username, String password) {
		this.username = username;
		this.password = password;
	}

	public String getUsername(String username) {
		return this.username;
	}

	public String getPassword(String password) {
		return this.password;
	}

	public static void setUsername(String NewUsername) {
		username = NewUsername;
	}

	public void setPassword(String password) {
		this.password = password;
	}
}