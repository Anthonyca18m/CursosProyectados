(() => {

//TypeScript
type userData = {
    username: string,
    email: string
}

let usersList: userData[] = [];

usersList.push({
    username: "freddier", //CORRECTO
    email: "freddy@email.com", //CORRECTO
});
usersList.push({
    username: "cvander", //CORRECTO
    email: true, // ERROR. Debe ser de tipo string y NO de tipo boolean
});


})();
