const express = require('express');


const { countries, languages } = require('countries-list');
const { info, error } = require('./modules/my-log');

const app = express();

app.get('/', (request, response) => {
  response.status(200).send('Hello World');
});

app.get('/info', (request, response) => {
  info('hola info xd');
  response.send('Info');
});

app.get('/country', (request, response) => {
  console.log('request.query', request.query);
  response.json(countries[request.query.code]);
});

app.get('/languages/:lang', (request, response) => {
  console.log('request.params', request.params);
  response.json(languages[request.params.lang]);
});

app.get('*', (request, response) => {
  response.status(404).send('Not found');
});

app.listen(4000);
console.log('running on 4000');
