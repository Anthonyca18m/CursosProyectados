function info(text) {
    return console.log("info: " + text)
}

function error(err) {
    return console.log("error: " + err)
}

module.exports = {info, error}

//exportaciones parciales
//esto si solo quieres exportar metodos espeficicos
// version uno 

// module.exports.nombre_export = info

// version dos

// module.exports.nombre_export function error(err) {
//     return console.log("error: " + err)
// }