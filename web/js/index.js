var liveServer = require("live-server")

var liveServerParams = {
	port: 8080,
	host: "0.0.0.0",
	root: "/web",
	open: false,
	ignore: "js/.outline",
	file: "index.html",
	wait: 1000
}
liveServer.start(liveServerParams)