const bcrypt = require('bcrypt');

const createUser = async (request, response) => {
  try {
    console.log('req body: ', request.body);

    const hash = await bcrypt.hash(request.body.password, 15);
    console.log('FIN', hash);
    response.send({ status: 'OK', message: 'user created' });
  } catch (error) {
    response.status(500).send({ status: 'ERROR', message: error.message });
  }
};
const deleteUser = (request, response) => {
  response.send({ status: 'OK', message: 'user deleted' });
};
const getUsers = (request, response) => {
  response.send({ status: 'OK', data: [] });
};
const updateUser = (request, response) => {
  response.send({ status: 'OK', message: 'user updated' });
};

module.exports = {
  createUser, deleteUser, getUsers, updateUser,
};
