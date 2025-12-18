import { Component } from '@angular/core';

@Component({
  selector: 'app-labs',
  imports: [],
  templateUrl: './labs.html',
  styleUrl: './labs.css',
})
export class Labs {
    protected readonly name = 'Angular';
    protected readonly disable = true;

    imageUrl = 'https://angular.io/assets/images/logos/angular/angular.png';

    persona = {
        nombre: 'Nicolás',
        edad: 18,
        avatar: 'https://example.com/avatar.png'
    };

    onDoubleClick() {
        alert('¡Has hecho doble clic en el botón!');
    }

    changeOn(event: Event) {
        const inputElement = event.target as HTMLInputElement;
        console.log('Nuevo valor:', inputElement.value);
    }
}
