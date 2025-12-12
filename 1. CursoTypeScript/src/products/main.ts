import { addProduct, products } from "./product.service";

addProduct({title: 'Pantalon', stock: 10, size: 'M'});
addProduct({title: 'Camisa', stock: 15, size: 'L'});
addProduct({title: 'Zapatos', stock: 5});

console.log(products);
