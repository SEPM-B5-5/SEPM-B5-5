package controllers.workshiftRoster;

public class WorkshiftRoster {
	private String workshiftOwner = "John Doe";
	private String workshiftDay = "Monday";
	private float workshift24hrFormat = 0.00f;

	public WorkshiftRoster(String workshiftOwner, String workshiftDay, float workshift24hrFormat) {
		this.workshiftOwner = workshiftOwner;
		this.workshiftDay = workshiftDay;
		this.workshift24hrFormat = workshift24hrFormat;
	}

	public String getWorkshiftOwner() {
		return workshiftOwner;
	}

	public void setWorkshiftOwner(String workshiftOwner) {
		this.workshiftOwner = workshiftOwner;
	}

	public String getWorkshiftDay() {
		return workshiftDay;
	}

	public void setWorkshiftDay(String workshiftDay) {
		this.workshiftDay = workshiftDay;
	}

	public float getWorkshift24hrFormat() {
		return workshift24hrFormat;
	}

	public void setWorkshift24hrFormat(float workshift24hrFormat) {
		this.workshift24hrFormat = workshift24hrFormat;
	}
}
