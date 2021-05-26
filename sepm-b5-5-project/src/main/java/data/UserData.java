package data;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.List;
import java.util.stream.Collectors;

import classes.User;

public class UserData {
	List<User> userList;

	public List<User> user = Collections.singletonList(
			new User("johndoe", "password123", PriorityData.STAFF_MEMBER)
		);

	public User getUsername(String username) {
		return user.stream()
			.filter(u -> u.username.equals(username))
			.findFirst()
			.orElse(null);
	}
}