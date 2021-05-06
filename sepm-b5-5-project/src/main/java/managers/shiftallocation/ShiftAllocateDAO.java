package managers.shiftallocation;

import java.sql.*;

import java.util.List;
import java.util.stream.Collectors;

import classes.User;
import managers.shiftallocation.*;

public class ShiftAllocateDAO {
	String user;
	String allocatedShift;

	public List<Workshift> shift = ImmutableList.of(
		new ShiftAllocate(user, allocatedShift)
	);

	public User getShiftAllocation(String shiftAllocData) {
		return shift.stream()
			.filter(s -> s.allocatedMember.equals(shiftAllocData))
			.findFirst()
			.orElse(null);
	}
}