import { Component, signal } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormControl, ReactiveFormsModule } from '@angular/forms';

@Component({
  selector: 'app-labs',
  standalone: true,
  imports: [CommonModule, ReactiveFormsModule],
  templateUrl: './labs.html',
  styleUrls: ['./labs.css'],
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

    userName = signal('Nicolás');


    colorValue = new FormControl();

    constructor() {
        this.colorValue.valueChanges.subscribe(value => {
            console.log('Color cambiado a:', value);
        });
    }

    onDoubleClick() {
        alert('¡Has hecho doble clic en el botón!');
    }

    changeOn(event: Event) {
        const inputElement = event.target as HTMLInputElement;
        console.log('Nuevo valor:', inputElement.value);
        this.userName.set(inputElement.value);
    }

    keyDownOn(event: KeyboardEvent) {
        const inputElement = event.target as HTMLInputElement;
        console.log('Tecla presionada:', event.key, 'Valor actual:', inputElement.value);
    }
}
