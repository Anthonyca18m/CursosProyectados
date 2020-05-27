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
  // console.log('request.params', request.params);
  const lang = languages[request.params.lang];
  if (lang) {
    response.json({ status: 'OK', data: lang });
  } else {
    response.status(404).json({
      status: 'NOT_FOUND',
      message: 'language not found',
    });
  }
});

app.get('*', (request, response) => {
  response.status(404).send('Not found');
});

app.listen(4000);
console.log('running on 4000');
