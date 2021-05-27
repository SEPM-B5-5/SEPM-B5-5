package managers.shiftallocation;

import java.util.List;

import com.google.common.collect.ImmutableList;

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