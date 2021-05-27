package models;

import data.PriorityData;

public class User {
	public String username;
	public String password;
	public PriorityData priorityData;

	public User() {}

	public User(String username, String password, PriorityData priorityData) {
		this.username = username;
		this.password = password;
		this.priorityData = priorityData;
	}

	public String getUsername() {
		return this.username;
	}

	public String getPassword() {
		return this.password;
	}

	public void setUsername(String username) {
		this.username = username;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public PriorityData getPriorityData() {
		return priorityData;
	}

	public void setPriorityData(PriorityData priorityData) {
		this.priorityData = priorityData;
	}
}