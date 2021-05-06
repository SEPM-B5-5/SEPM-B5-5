package managers.shiftallocation;

import java.sql.*;

import java.util.List;
import java.util.stream.Collectors;

import classes.User;
import com.google.common.collect.ImmutableList;
import managers.shiftallocation.*;

public class ShiftAllocateDAO {
	String user;
	String allocatedShiftData;

	public List<ShiftAllocate> shift = ImmutableList.of(
		new ShiftAllocate(user, allocatedShiftData)
	);

	/*public User getShiftAllocation(String shiftAllocData) {
		return shift.stream()
			.filter(s -> s.allocatedMember.equals(shiftAllocData))
			.findFirst()
			.orElse(null);
	}*/
}