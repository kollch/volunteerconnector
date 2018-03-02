const express    = require('express');
const path       = require('path');
const bodyParser = require('body-parser');
const mysql      = require('mysql');

const app  = express();
const port = process.env.PORT || 3000;

const con = mysql.createConnection({
	host:     "localhost",
	user:     "yourusername",
	password: "yourpassword",
	database: "mydb"
});

app.use(bodyParser.json())
app.use(express.static(path.join(__dirname, 'public')))

// default to /public for "views" (in our case plain html)
app.set('views', path.join(__dirname, 'public'));

// use normal html as view engine for now
app.engine('html', require('ejs').renderFile);
app.set('view engine', 'html');

// connect to mysql database
con.connect(function(err){
	if(err) {
		console.log("== Error connecting to MySQL");  
	} 
});

// render home page
app.get('/', function(req, res) {
	res.render('index', {
	})
})

// 404 for all other pages
app.get('*', function(req, res) {
	res.status(404).render('404', {
	});
});

app.listen(port, function () {
	console.log("== Listening on port", port);
});


