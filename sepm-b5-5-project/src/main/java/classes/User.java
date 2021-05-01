package hrm.classes.User;

public class User {
	public String username;
	public String password;

	public User(String username, String password) {
		this.username = username;
		this.password = password;
	}

	public User getUsername(String username) {
		return this.username;
	}
}