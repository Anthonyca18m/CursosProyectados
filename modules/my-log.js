function info(text) {
    return console.log("info: " + text)
}

function error(err) {
    return console.log("error: " + err)
}

module.exports = {info, error}