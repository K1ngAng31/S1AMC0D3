
var express = require('express'); //Ensure our express framework has been added
var flash = require('connect-flash');
var session = require('express-session');
var app = express();
var bodyParser = require('body-parser'); //Ensure our body-parser tool has been added
app.use(bodyParser.json());              // support json encoded bodies
app.use(bodyParser.urlencoded({ extended: true })); // support encoded bodies
app.use(session({ cookie: { maxAge: 60000 },
	secret: 'woot',
	resave: false,
	saveUninitialized: false}));
app.use(flash());

//Create Database Connection
var pgp = require('pg-promise')();

const dbConfig = {
	host: 'localhost',
	port: 5432,
	database: 'project_db',
	user: 'postgres',
	password: 'csci3308'
};

var db = pgp(dbConfig);

app.set('view engine', 'ejs');
app.use(express.static(__dirname + '/'));
//This line is necessary for us to use relative paths and access our resources directory

// registration page
app.get('/poetinfo', function(req, res) {
  var query = 'select * from poet_info;';
  db.any(query)
    .then(function (rows) {
      res.render('poetinfo', {
        my_title:"Poet Info",
        data: rows
	    })
  });
});

app.listen(4000);
console.log('4000 is the magic port');
