const express = require('express');


const { info, error } = require('./modules/my-log');
// const routes = require('./routes');
const routesV1 = require('./routes/v1');

const app = express();

routesV1(app);

app.listen(4000, () => {
  console.log('running on 4000');
});
