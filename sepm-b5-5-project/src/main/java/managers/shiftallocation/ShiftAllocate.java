package managers.shiftallocation;

public class ShiftAllocate {
	public String allocatedMember;
	public String shiftAllocation;

	public ShiftAllocate(String allocatedMember, String shiftAllocation) {
		this.allocatedMember = allocatedMember;
		this.shiftAllocation = shiftAllocation;
	}

	public ShiftAllocate getShiftAllocation(String mUser, String shiftAllocData) {
		mUser = this.allocatedMember;
		shiftAllocData = this.shiftAllocation;

		return new ShiftAllocate(mUser, shiftAllocData);
	}
}
