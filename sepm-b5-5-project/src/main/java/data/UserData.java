package data;

import java.util.Arrays;
import java.util.List;
import java.util.stream.Collectors;

import classes.User;

public class UserData {
	List<User> userList;

	public List<User> user = List.of(
		new User("johndoe", "password123")
	);

	public User getUsername(String username) {
		return user.stream()
			.filter(u -> u.username.equals(username))
			.findFirst()
			.orElse(null);
	}
}