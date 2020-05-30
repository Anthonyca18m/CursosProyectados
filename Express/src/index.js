const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql');
const dotenv = require('dotenv');

// para ver las variables de entorno
dotenv.config();

// const { info, error } = require('./modules/my-log');
const routesV1 = require('./routes/v1');

const app = express();


const connection = mysql.createConnection({
  host: process.env.HOST,
  user: process.env.USER,
  password: process.env.PASS,
  database: process.env.NAMEDB,
  port: process.env.PORT,
});

connection.connect((error) => {
  if (error) {
    throw error;
  } else {
    console.log('Conexion correcta.');
  }
});
connection.end();

// parse application/x-www-form-urlencoded
app.use(bodyParser.urlencoded({ extended: false }));

// parse application/json
app.use(bodyParser.json());


routesV1(app);

app.listen(4000, () => {
  console.log('running on 4000');
});
