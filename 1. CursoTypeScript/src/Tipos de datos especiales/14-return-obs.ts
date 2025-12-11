//TypeScript
function imprimirDatos( data: { username: string, email: string } ): void {

    console.log(`Tu nombre de usuario es ${data.username} y tu email es ${data.email}`)

}

imprimirDatos({
      username: 'freddier',
      email: 'freddy@email.com'
})
