const createUser = (request, response) => {
  response.send({ status: 'OK', message: 'user created' });
};
const deleteUser = (request, response) => {
  response.send({ status: 'OK', message: 'user deleted' });
};
const getUsers = (request, response) => {
  response.send({ status: 'OK', data : [] });
};
const updateUser = (request, response) => {
  response.send({ status: 'OK', message: 'user updated' });
};

module.exports = {
  createUser, deleteUser, getUsers, updateUser,
};
