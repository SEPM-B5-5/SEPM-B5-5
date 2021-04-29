package hrm.managers.shiftallocation;

public class ShiftAllocate {
	public String allocatedMember;
	public String shiftAllocation;

	public ShiftAllocate(String allocatedMember, String shiftAllocation) {
		this.allocatedMember = allocatedMember;
		this.shiftAllocation = shiftAllocation;
	}

	public ShiftAllocate getShiftAllocation(String shiftAllocData) {
		String allocatedMember = this.allocatedMember;
		String shiftAllocation = this.shiftAllocation;

		return ShiftAllocate(allocatedMember, shiftAllocation);
	}
}
