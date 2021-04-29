import java.util.List;
import java.util.stream.Collectors;

import hrm.class.User;

public class UserData {
	public List<User> user = ImmutableList.of(
		new User("johndoe", "password123"),
	);

	override public User getUsername(String username) {
		return user.stream()
			.filter(u -> u.username.equals(username))
			.findFirst()
			.orElse(null);
	}
}