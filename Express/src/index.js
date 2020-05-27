const express = require('express');


const { info, error } = require('./modules/my-log');
const routes = require('./routes');

const app = express();

routes(app);

app.listen(4000, () => {
  console.log('running on 4000');
});
