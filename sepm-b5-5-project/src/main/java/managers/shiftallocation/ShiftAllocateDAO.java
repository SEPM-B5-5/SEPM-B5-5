package hrm.managers.shiftallocation;

import java.sql.*;

import java.util.List;
import java.util.stream.Collectors;

import hrm.managers.ShiftAllocate;

public class ShiftAllocateDAO {
	public List<Shift> shift = ImmutableList.of(
		new Shift(user, allocatedShift),
	);

	override public User getShiftAllocation(String shiftAllocData) {
		return shift.stream()
			.filter(s -> s.allocatedMember.equals(shiftAllocData))
			.findFirst()
			.orElse(null);
	}
}