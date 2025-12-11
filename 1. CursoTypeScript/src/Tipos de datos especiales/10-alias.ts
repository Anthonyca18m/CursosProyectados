type UserID = string | boolean | number;

let dynamicVar: UserID = "300";

function helloUser( userId: UserID ) {
    console.log(`Un saludo al usuario con el número de id ${userId}`);
}

type Sizes = 'S' | 'M' | 'L' | 'XL';

let shirtSize: Sizes;
shirtSize = "M";

function yourSize( userSize: Sizes ){
    console.log(`Tu medida es ${userSize}`);
}
